<?php

namespace App\Http\Livewire\EmployeeSpecialists;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use App\Http\Livewire\Field;
use App\Models\EmployeeSpecialistLeave;
use App\Models\EmployeeSpecialist;

class Leaves extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $employeeSpecialist, $employeeSpecialistLeave, $employee_specialist_id, $employee_leave_start, $employee_leave_end, $employee_leave_request;
    public $showInputs = false;

    public function render()
    {
        $employeeSpecialistLeaves = EmployeeSpecialistLeave::orderBy('created_at', 'desc')->latest()->simplePaginate(10);
        return view('livewire.employee-specialists.leaves', compact('employeeSpecialistLeaves'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'employee_specialist_id' => ['required', 'numeric'],
                'employee_leave_start' => ['required', 'date'],
                'employee_leave_end' => ['required', 'date'],
                'employee_leave_request' => ['required', 'mimes:pdf,docx,doc'],

                'employee_specialist_id' => ['required'],
                'employee_leave_start' => ['required', 'date'],
                'employee_leave_end' => ['required', 'date'],
                'employee_leave_request' => ['required', 'file', 'mimes:pdf,docx,doc'],
            ],
            [
                'employee_leave_start' => 'Значение поля некорректно.',
                'employee_leave_end' => 'Значение поля некорректно.',
                'employee_leave_request' => 'Значение поля некорректно.',

                'employee_leave_start' => 'Значение поля некорректно.',
                'employee_leave_end' => 'Значение поля некорректно.',
                'employee_leave_request' => 'Значение поля некорректно.',
            ]
        );

        if (request('employee_leave_request')) {
            $filePath = $request->employee_leave_request->store('documents', 'public');
            $data['employee_leave_request'] = $filePath;
        }

        EmployeeSpecialistLeave::create([
            'employee_specialist_id' => $request->employee_specialist_id,
            'employee_leave_start' => $request->employee_leave_start,
            'employee_leave_end' => $request->employee_leave_end,
            'employee_leave_request' => $filePath,
        ]);

        return back();

        $this->dispatchBrowserEvent('refresh-page');
    }

    public function delete($id)
    {
        $employeeSpecialistLeave = EmployeeSpecialistLeave::where('id', $id)
            ->firstOrFail();

        return view('organizations.staff.specialists.employees.leaves.delete', [
            'employeeSpecialistLeave' => $employeeSpecialistLeave,
            'title' => 'Удаление отпуска'
        ]);
    }

    public function destroy($id)
    {
        $employeeSpecialistLeave = EmployeeSpecialistLeave::where('id', $id)
            ->firstOrFail();

        $employeeSpecialistLeave->delete();

        return redirect ("/specialists/{$employeeSpecialistLeave->employeeSpecialist->specialist_id}/employees/{$employeeSpecialistLeave->employee_specialist_id}");
    }
}
