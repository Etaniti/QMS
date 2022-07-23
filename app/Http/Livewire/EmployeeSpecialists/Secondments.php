<?php

namespace App\Http\Livewire\EmployeeSpecialists;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use App\Http\Livewire\Field;
use App\Models\EmployeeSpecialistSecondment;
use App\Models\EmployeeSpecialist;

class Secondments extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $employeeSpecialist, $employeeSpecialistSecondment, $employee_specialist_id, $employee_secondment_term_start, $employee_secondment_term_end, $employee_secondment_order;
    public $showInputs = false;

    public function render()
    {
        $this->secondments = EmployeeSpecialistSecondment::all();

        $employeeSpecialistSecondments = EmployeeSpecialistSecondment::orderBy('created_at', 'desc')->latest()->simplePaginate(10);
        return view('livewire.employee-specialists.secondments', compact('employeeSpecialistSecondments'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'employee_specialist_id' => ['required', 'numeric'],
                'employee_secondment_term_start' => ['required', 'date'],
                'employee_secondment_term_end' => ['required', 'date'],
                'employee_secondment_order' => ['required', 'file', 'mimes:pdf,docx,doc'],
            ],
            [
                'employee_secondment_term_start' => 'Значение поля некорректно.',
                'employee_secondment_term_end' => 'Значение поля некорректно.',
                'employee_secondment_order' => 'Значение поля некорректно.',
            ]
        );

        if (request('employee_secondment_order')) {
            $filePath = $request->employee_secondment_order->store('documents', 'public');
            $data['employee_secondment_order'] = $filePath;
        }

        EmployeeSpecialistSecondment::create([
            'employee_specialist_id' => $request->employee_specialist_id,
            'employee_secondment_term_start' => $request->employee_secondment_term_start,
            'employee_secondment_term_end' => $request->employee_secondment_term_end,
            'employee_secondment_order' => $filePath,
        ]);

        return back();

        $this->dispatchBrowserEvent('refresh-page');
    }

    public function delete($id)
    {
        $employeeSpecialistSecondment = EmployeeSpecialistSecondment::where('id', $id)
            ->firstOrFail();

        return view('organizations.staff.specialists.employees.secondments.delete', [
            'employeeSpecialistSecondment' => $employeeSpecialistSecondment,
            'title' => 'Удаление командировки'
        ]);
    }

    public function destroy($id)
    {
        $employeeSpecialistSecondment = EmployeeSpecialistSecondment::where('id', $id)
            ->firstOrFail();

        $employeeSpecialistSecondment->delete();

        return redirect ("/specialists/{$employeeSpecialistSecondment->employeeSpecialist->specialist_id}/employees/{$employeeSpecialistSecondment->employee_specialist_id}");
    }
}
