<?php

namespace App\Http\Livewire\EmployeeWorkers;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use App\Http\Livewire\Field;
use App\Models\EmployeeWorkerPersonalCard;

class PersonalCards extends Component
{
    use WithFileUploads;

    public $employeeWorker, $employeeWorkerPersonalCard, $employee_worker_id, $employee_personal_card;
    public $updateMode = false;
    public $showInputs = false;

    public function render()
    {
        return view('livewire.employee-workers.personal-cards');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'employee_worker_id' => ['required', 'numeric'],
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

        EmployeeWorkerPersonalCard::create([
            'employee_worker_id' => $request->employee_worker_id,
            'employee_personal_card' => $filePath,
        ]);

        return back();

        $this->dispatchBrowserEvent('refresh-page');
    }

    public function edit($id)
    {
        $employeeWorkerPersonalCard = EmployeeWorkerPersonalCard::findOrFail($id);
        $this->employee_worker_id = $employeeWorkerPersonalCard->employee_worker_id;
        $this->employee_personal_card = $employeeWorkerPersonalCard->employee_personal_card;

        $this->updateMode = true;
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'employee_worker_id' => ['required', 'numeric'],
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

        $employeeWorkerPersonalCard = EmployeeWorkerPersonalCard::whereId($id)->update([
            'employee_worker_id' => $request->employee_worker_id,
            'employee_personal_card' => $filePath,
        ]);

        return back();

        $this->updateMode = false;
    }
}
