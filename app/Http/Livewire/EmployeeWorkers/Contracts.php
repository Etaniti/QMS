<?php

namespace App\Http\Livewire\EmployeeWorkers;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use App\Http\Livewire\Field;
use App\Models\EmployeeWorkerContract;

class Contracts extends Component
{
    use WithFileUploads;

    public $employeeWorker, $employeeWorkerContract, $employee_worker_id, $employment_contract_type,
        $employment_contract_term_start, $employment_contract_term_end, $employment_contract;
    public $updateMode = false;
    public $showInputs = false;
    public $showUpdateInputs = false;

    public function render()
    {
        return view('livewire.employee-workers.contracts');
    }

    public function hideInputs()
    {
        $this->showInputs = false;
    }

    public function hideUpdateInputs()
    {
        $this->showUpdateInputs = false;
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'employee_worker_id' => ['required', 'numeric'],
                'employment_contract_type' => ['required', 'string'],
                'employment_contract_term_start' => ['nullable', 'date'],
                'employment_contract_term_end' => ['nullable', 'date'],
                'employment_contract' => ['required', 'file', 'mimes:pdf,docx,doc'],
            ],
            [
                'employment_contract_term_start' => 'Значение поля некорректно.',
                'employment_contract_term_end' => 'Значение поля некорректно.',
                'employment_contract' => 'Значение поля некорректно.',
            ]
        );

        if (request('employment_contract')) {
            $filePath = $request->employment_contract->store('documents', 'public');
            $data['employment_contract'] = $filePath;
        }

        EmployeeWorkerContract::create([
            'employee_worker_id' => $request->employee_worker_id,
            'employment_contract_type' => $request->employment_contract_type,
            'employment_contract_term_start' => $request->employment_contract_term_start,
            'employment_contract_term_end' => $request->employment_contract_term_end,
            'employment_contract' => $filePath,
        ]);

        return back();

        $this->dispatchBrowserEvent('refresh-page');
    }

    public function edit($id)
    {
        $employeeWorkerContract = EmployeeWorkerContract::findOrFail($id);
        $this->employee_worker_id = $employeeWorkerContract->employee_worker_id;
        $this->employment_contract_type = $employeeWorkerContract->employment_contract_type;
        $this->employment_contract_term_start = $employeeWorkerContract->employment_contract_term_start;
        $this->employment_contract_term_end = $employeeWorkerContract->employment_contract_term_end;
        $this->employment_contract = $employeeWorkerContract->employment_contract;

        $this->updateMode = true;
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'employee_worker_id' => ['required', 'numeric'],
                'employment_contract_type' => ['required', 'string'],
                'employment_contract_term_start' => ['nullable', 'date'],
                'employment_contract_term_end' => ['nullable', 'date'],
                'employment_contract' => ['required', 'file', 'mimes:pdf,docx,doc'],
            ],
            [
                'employment_contract_term_start' => 'Значение поля некорректно.',
                'employment_contract_term_end' => 'Значение поля некорректно.',
                'employment_contract' => 'Значение поля некорректно.',
            ]
        );

        if (request('employment_contract')) {
            $filePath = $request->employment_contract->store('documents', 'public');
            $data['employment_contract'] = $filePath;
        }

        $employeeWorkerContract = EmployeeWorkerContract::whereId($id)->update([
            'employee_worker_id' => $request->employee_worker_id,
            'employment_contract_type' => $request->employment_contract_type,
            'employment_contract_term_start' => $request->employment_contract_term_start,
            'employment_contract_term_end' => $request->employment_contract_term_end,
            'employment_contract' => $filePath,
        ]);

        return back();

        $this->updateMode = false;
    }
}
