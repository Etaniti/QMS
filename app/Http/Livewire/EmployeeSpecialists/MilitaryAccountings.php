<?php

namespace App\Http\Livewire\EmployeeSpecialists;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use App\Http\Livewire\Field;
use App\Models\EmployeeSpecialistMilitaryAccounting;

class MilitaryAccountings extends Component
{
    use WithFileUploads;

    public $employeeSpecialist, $employeeSpecialistMilitaryAccounting, $employee_specialist_id, $employee_military_card;
    public $updateMode = false;
    public $showInputs = false;

    public function render()
    {
        return view('livewire.employee-specialists.military-accountings');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'employee_specialist_id' => ['required', 'numeric'],
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

        EmployeeSpecialistMilitaryAccounting::create([
            'employee_specialist_id' => $request->employee_specialist_id,
            'employee_military_card' => $filePath,
        ]);

        return back();

        $this->dispatchBrowserEvent('refresh-page');
    }

    public function edit($id)
    {
        $employeeSpecialistMilitaryAccounting = EmployeeSpecialistMilitaryAccounting::findOrFail($id);
        $this->employee_specialist_id = $employeeSpecialistMilitaryAccounting->employee_specialist_id;
        $this->employee_military_card = $employeeSpecialistMilitaryAccounting->employee_military_card;

        $this->updateMode = true;
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'employee_specialist_id' => ['required', 'numeric'],
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

        $employeeSpecialistMilitaryAccounting = EmployeeSpecialistMilitaryAccounting::whereId($id)->update([
            'employee_specialist_id' => $request->employee_specialist_id,
            'employee_military_card' => $filePath,
        ]);

        return back();

        $this->updateMode = false;
    }
}
