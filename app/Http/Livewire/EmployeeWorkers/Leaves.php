<?php

namespace App\Http\Livewire\EmployeeWorkers;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use App\Http\Livewire\Field;
use App\Models\EmployeeWorkerLeave;
use App\Models\EmployeeWorker;

class Leaves extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $employeeWorker, $employeeWorkerLeave, $employee_worker_id, $employee_leave_start, $employee_leave_end, $employee_leave_request;
    public $updateMode = false;
    public $showInputs = false;

    public function render()
    {
        $employeeWorkerLeaves = EmployeeWorkerLeave::orderBy('created_at', 'desc')->latest()->simplePaginate(10);
        return view('livewire.employee-workers.leaves', compact('employeeWorkerLeaves'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'employee_worker_id' => ['required', 'numeric'],
                'employee_leave_start' => ['required', 'date'],
                'employee_leave_end' => ['required', 'date'],
                'employee_leave_request' => ['required', 'mimes:pdf,docx,doc'],

                'employee_worker_id' => ['required'],
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

        EmployeeWorkerLeave::create([
            'employee_worker_id' => $request->employee_worker_id,
            'employee_leave_start' => $request->employee_leave_start,
            'employee_leave_end' => $request->employee_leave_end,
            'employee_leave_request' => $filePath,
        ]);

        return back();

        $this->dispatchBrowserEvent('refresh-page');
    }

    public function delete($id)
    {
        $employeeWorkerLeave = EmployeeWorkerLeave::where('id', $id)
            ->firstOrFail();

        return view('organizations.staff.workers.employees.leaves.delete', [
            'employeeWorkerLeave' => $employeeWorkerLeave,
            'title' => 'Удаление отпуска'
        ]);
    }

    public function destroy($id)
    {
        $employeeWorkerLeave = EmployeeWorkerLeave::where('id', $id)
            ->firstOrFail();

        $employeeWorkerLeave->delete();

        return redirect ("/workers/{$employeeWorkerLeave->employeeWorker->worker_id}/employees/{$employeeWorkerLeave->employee_worker_id}");
    }
}
