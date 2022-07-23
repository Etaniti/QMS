<?php

namespace App\Http\Livewire\EmployeeSpecialists;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use App\Http\Livewire\Field;
use App\Models\EmployeeSpecialistContract;

class Contracts extends Component
{
    use WithFileUploads;

    public $employeeSpecialist, $employeeSpecialistContract, $employee_specialist_id, $employment_contract_type,
        $employment_contract_term_start, $employment_contract_term_end, $employment_contract;
    public $updateMode = false;
    public $showInputs = false;
    public $showUpdateInputs = false;

    public function render()
    {
        return view('livewire.employee-specialists.contracts');
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
                'employee_specialist_id' => ['required', 'numeric'],
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

        EmployeeSpecialistContract::create([
            'employee_specialist_id' => $request->employee_specialist_id,
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
        $employeeSpecialistContract = EmployeeSpecialistContract::findOrFail($id);
        $this->employee_specialist_id = $employeeSpecialistContract->employee_specialist_id;
        $this->employment_contract_type = $employeeSpecialistContract->employment_contract_type;
        $this->employment_contract_term_start = $employeeSpecialistContract->employment_contract_term_start;
        $this->employment_contract_term_end = $employeeSpecialistContract->employment_contract_term_end;
        $this->employment_contract = $employeeSpecialistContract->employment_contract;

        $this->updateMode = true;
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'employee_specialist_id' => ['required', 'numeric'],
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

        $employeeSpecialistContract = EmployeeSpecialistContract::whereId($id)->update([
            'employee_specialist_id' => $request->employee_specialist_id,
            'employment_contract_type' => $request->employment_contract_type,
            'employment_contract_term_start' => $request->employment_contract_term_start,
            'employment_contract_term_end' => $request->employment_contract_term_end,
            'employment_contract' => $filePath,
        ]);

        return back();

        $this->updateMode = false;
    }
}
