<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Requests\EmployeeWorkers\CreateRequest;
use App\Http\Requests\EmployeeWorkers\UpdateRequest;
use App\Models\Worker;
use App\Models\Organization;
use App\Models\EmployeeWorker;

class EmployeeWorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Organization $organization, Worker $worker)
    {
        return view('organizations.staff.workers.employees.index', compact('organization', 'worker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($worker_id)
    {
        return view('organizations.staff.workers.employees.create', compact('worker_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $data = $request->validated();

        if ($request->employee_photo !== null) {
            $imagePath = $request->employee_photo;
            $imageName = $imagePath->getClientOriginalName();

            $imagePath = $request->employee_photo->storeAs('uploads', $imageName, 'public');
        }
        else {
            $imagePath = null;
        }

        $data['employee_photo'] = $imagePath;

        EmployeeWorker::create($data);

        return redirect("/staff/workers/{$request->worker_id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeWorker $employeeWorker, Worker $worker, $id)
    {
        $employeeWorker = EmployeeWorker::findOrFail($id);
        return view ('organizations.staff.workers.employees.show', compact('employeeWorker', 'worker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Worker $worker, EmployeeWorker $employeeWorker, $id)
    {
        $employeeWorker = EmployeeWorker::findOrFail($id);
        return view('organizations.staff.workers.employees.edit', compact('worker', 'employeeWorker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = request()->except(['_token', '_method']);
        $employeeWorker = EmployeeWorker::whereId($id)->update($data);

        return redirect("/workers/{$request->worker_id}/employees/{$id}");
    }

    public function delete($id)
    {
        $employeeWorker = EmployeeWorker::where('id', $id)
            ->firstOrFail();

        return view('organizations.staff.workers.employees.delete', [
            'employeeWorker' => $employeeWorker,
            'title'      => 'Удаление сотрудника'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employeeWorker = EmployeeWorker::where('id', $id)
            ->firstOrFail();

        $employeeWorker->delete();

        return redirect ("/staff/workers/{$employeeWorker->worker_id}");
    }
}
