<?php

namespace App\Http\Livewire\EmployeeSpecialists;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use App\Http\Livewire\Field;
use App\Models\EmployeeSpecialistInsurance;

class Insurances extends Component
{
    use WithFileUploads;

    public $employeeSpecialist, $employeeSpecialistInsurance, $employee_specialist_id, $employee_insurance_certificate;
    public $updateMode = false;
    public $showInputs = false;

    public function render()
    {
        return view('livewire.employee-specialists.insurances');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'employee_specialist_id' => ['required', 'numeric'],
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

        EmployeeSpecialistInsurance::create([
            'employee_specialist_id' => $request->employee_specialist_id,
            'employee_insurance_certificate' => $filePath,
        ]);

        return back();

        $this->dispatchBrowserEvent('refresh-page');
    }

    public function edit($id)
    {
        $employeeSpecialistInsurance = EmployeeSpecialistInsurance::findOrFail($id);
        $this->employee_specialist_id = $employeeSpecialistInsurance->employee_specialist_id;
        $this->employee_insurance_certificate = $employeeSpecialistInsurance->employee_insurance_certificate;

        $this->updateMode = true;
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'employee_specialist_id' => ['required', 'numeric'],
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

        $employeeSpecialistInsurance = EmployeeSpecialistInsurance::whereId($id)->update([
            'employee_specialist_id' => $request->employee_specialist_id,
            'employee_insurance_certificate' => $filePath,
        ]);

        return back();

        $this->updateMode = false;
    }
}
