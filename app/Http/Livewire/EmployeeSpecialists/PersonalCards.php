<?php

namespace App\Http\Livewire\EmployeeSpecialists;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use App\Http\Livewire\Field;
use App\Models\EmployeeSpecialistPersonalCard;

class PersonalCards extends Component
{
    use WithFileUploads;

    public $employeeSpecialist, $employeeSpecialistPersonalCard, $employee_specialist_id, $employee_personal_card;
    public $updateMode = false;
    public $showInputs = false;

    public function render()
    {
        return view('livewire.employee-specialists.personal-cards');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'employee_specialist_id' => ['required', 'numeric'],
                'employee_personal_card' => ['required', 'file', 'mimes:pdf,docx,doc'],
            ],
            [
                'employee_personal_card' => 'Значение поля некорректно.',
            ]
        );

        if (request('employee_personal_card')) {
            $filePath = $request->employee_personal_card->store('documents', 'public');
            $data['employee_personal_card'] = $filePath;
        }

        EmployeeSpecialistPersonalCard::create([
            'employee_specialist_id' => $request->employee_specialist_id,
            'employee_personal_card' => $filePath,
        ]);

        return back();

        $this->dispatchBrowserEvent('refresh-page');
    }

    public function edit($id)
    {
        $employeeSpecialistPersonalCard = EmployeeSpecialistPersonalCard::findOrFail($id);
        $this->employee_specialist_id = $employeeSpecialistPersonalCard->employee_specialist_id;
        $this->employee_personal_card = $employeeSpecialistPersonalCard->employee_personal_card;

        $this->updateMode = true;
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'employee_specialist_id' => ['required', 'numeric'],
                'employee_personal_card' => ['required', 'mimes:pdf,doc,docx'],
            ],
            [
                'employee_personal_card' => 'Значение поля некорректно.',
            ]
        );

        if (request('employee_personal_card')) {
            $filePath = $request->employee_personal_card->store('documents', 'public');
            $data['employee_personal_card'] = $filePath;
        }

        $employeeSpecialistPersonalCard = EmployeeSpecialistPersonalCard::whereId($id)->update([
            'employee_specialist_id' => $request->employee_specialist_id,
            'employee_personal_card' => $filePath,
        ]);

        return back();

        $this->updateMode = false;
    }
}
