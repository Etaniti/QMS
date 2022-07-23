<?php

namespace App\Http\Livewire\EmployeeWorkers;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use App\Http\Livewire\Field;
use App\Models\EmployeeWorkerSecondment;
use App\Models\EmployeeWorker;

class Secondments extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $employeeWorker, $employeeWorkerSecondment, $employee_worker_id, $employee_secondment_term_start, $employee_secondment_term_end, $employee_secondment_order;
    public $showInputs = false;

    public function render()
    {
        $this->secondments = EmployeeWorkerSecondment::all();

        $employeeWorkerSecondments = EmployeeWorkerSecondment::orderBy('created_at', 'desc')->latest()->simplePaginate(10);
        return view('livewire.employee-workers.secondments', compact('employeeWorkerSecondments'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'employee_worker_id' => ['required', 'numeric'],
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

        EmployeeWorkerSecondment::create([
            'employee_worker_id' => $request->employee_worker_id,
            'employee_secondment_term_start' => $request->employee_secondment_term_start,
            'employee_secondment_term_end' => $request->employee_secondment_term_end,
            'employee_secondment_order' => $filePath,
        ]);

        return back();

        $this->dispatchBrowserEvent('refresh-page');
    }

    public function delete($id)
    {
        $employeeWorkerSecondment = EmployeeWorkerSecondment::where('id', $id)
            ->firstOrFail();

        return view('organizations.staff.workers.employees.secondments.delete', [
            'employeeWorkerSecondment' => $employeeWorkerSecondment,
            'title' => 'Удаление командировки'
        ]);
    }

    public function destroy($id)
    {
        $employeeWorkerSecondment = EmployeeWorkerSecondment::where('id', $id)
            ->firstOrFail();

        $employeeWorkerSecondment->delete();

        return redirect ("/workers/{$employeeWorkerSecondment->employeeWorker->worker_id}/employees/{$employeeWorkerSecondment->employee_worker_id}");
    }
}
