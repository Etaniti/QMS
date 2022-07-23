<?php

namespace App\Http\Livewire\EmployeeWorkers;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use App\Http\Livewire\Field;
use App\Models\EmployeeWorkerInsurance;

class Insurances extends Component
{
    use WithFileUploads;

    public $employeeWorker, $employeeWorkerInsurance, $employee_worker_id, $employee_insurance_certificate;
    public $updateMode = false;
    public $showInputs = false;

    public function render()
    {
        return view('livewire.employee-workers.insurances');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'employee_worker_id' => ['required', 'numeric'],
                'employee_insurance_certificate' => ['required', 'file', 'mimes:pdf,docx,doc'],
            ],
            [
                'employee_insurance_certificate' => 'Значение поля некорректно.',
            ]
        );

        if (request('employee_insurance_certificate')) {
            $filePath = $request->employee_insurance_certificate->store('documents', 'public');
            $data['employee_insurance_certificate'] = $filePath;
        }

        EmployeeWorkerInsurance::create([
            'employee_worker_id' => $request->employee_worker_id,
            'employee_insurance_certificate' => $filePath,
        ]);

        return back();

        $this->dispatchBrowserEvent('refresh-page');
    }

    public function edit($id)
    {
        $employeeWorkerInsurance = EmployeeWorkerInsurance::findOrFail($id);
        $this->employee_worker_id = $employeeWorkerInsurance->employee_worker_id;
        $this->employee_insurance_certificate = $employeeWorkerInsurance->employee_insurance_certificate;

        $this->updateMode = true;
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'employee_worker_id' => ['required', 'numeric'],
                'employee_insurance_certificate' => ['required', 'mimes:pdf,doc,docx'],
            ],
            [
                'employee_insurance_certificate' => 'Значение поля некорректно.',
            ]
        );

        if (request('employee_insurance_certificate')) {
            $filePath = $request->employee_insurance_certificate->store('documents', 'public');
            $data['employee_insurance_certificate'] = $filePath;
        }

        $employeeWorkerInsurance = EmployeeWorkerInsurance::whereId($id)->update([
            'employee_worker_id' => $request->employee_worker_id,
            'employee_insurance_certificate' => $filePath,
        ]);

        return back();

        $this->updateMode = false;
    }
}
