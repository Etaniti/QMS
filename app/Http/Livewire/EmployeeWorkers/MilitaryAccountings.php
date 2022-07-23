<?php

namespace App\Http\Livewire\EmployeeWorkers;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use App\Http\Livewire\Field;
use App\Models\EmployeeWorkerMilitaryAccounting;

class MilitaryAccountings extends Component
{
    use WithFileUploads;

    public $employeeWorker, $employeeWorkerMilitaryAccounting, $employee_worker_id, $employee_military_card;
    public $updateMode = false;
    public $showInputs = false;

    public function render()
    {
        return view('livewire.employee-workers.military-accountings');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'employee_worker_id' => ['required', 'numeric'],
                'employee_military_card' => ['required', 'file', 'mimes:pdf,docx,doc'],
            ],
            [
                'employee_military_card' => 'Значение поля некорректно.',
            ]
        );

        if (request('employee_military_card')) {
            $filePath = $request->employee_military_card->store('documents', 'public');
            $data['employee_military_card'] = $filePath;
        }

        EmployeeWorkerMilitaryAccounting::create([
            'employee_worker_id' => $request->employee_worker_id,
            'employee_military_card' => $filePath,
        ]);

        return back();

        $this->dispatchBrowserEvent('refresh-page');
    }

    public function edit($id)
    {
        $employeeWorkerMilitaryAccounting = EmployeeWorkerMilitaryAccounting::findOrFail($id);
        $this->employee_worker_id = $employeeWorkerMilitaryAccounting->employee_worker_id;
        $this->employee_military_card = $employeeWorkerMilitaryAccounting->employee_military_card;

        $this->updateMode = true;
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'employee_worker_id' => ['required', 'numeric'],
                'employee_military_card' => ['required', 'mimes:pdf,doc,docx'],
            ],
            [
                'employee_military_card' => 'Значение поля некорректно.',
            ]
        );

        if (request('employee_military_card')) {
            $filePath = $request->employee_military_card->store('documents', 'public');
            $data['employee_military_card'] = $filePath;
        }

        $employeeWorkerMilitaryAccounting = EmployeeWorkerMilitaryAccounting::whereId($id)->update([
            'employee_worker_id' => $request->employee_worker_id,
            'employee_military_card' => $filePath,
        ]);

        return back();

        $this->updateMode = false;
    }
}
