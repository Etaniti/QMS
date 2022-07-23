<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Workers\CreateRequest;
use App\Http\Requests\Workers\UpdateRequest;
use App\Models\Organization;
use App\Models\Worker;

class WorkersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Organization $organization, Worker $worker)
    {
        return view('organizations.staff.workers.index', compact('organization', 'worker'));
    }

    public function resolveUser()
    {
        return auth()->user();
    }

    public function create($organization_id)
    {
        return view('organizations.staff.workers.create', compact('organization_id'));
    }

    public function store(CreateRequest $request)
    {
        $data = $request->validated();

        Worker::create($data);

        return redirect("/organizations/{$request->organization_id}/staff");
    }

    public function show()
    {
        //
    }

    public function edit(Organization $organization, Worker $worker)
    {
        return view('organizations.staff.workers.edit', compact('organization', 'worker'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $data = $request->validated()->except(['_token', '_method']);
        $worker = Worker::whereId($id)->update($data);

        return redirect("/staff/workers/{$id}");
    }

    public function delete($id)
    {
        $worker = Worker::where('id', $id)
            ->firstOrFail();

        return view('organizations.staff.workers.delete', [
            'worker' => $worker,
            'title' => 'Удаление рабочей специальности'
        ]);
    }

    public function destroy($id)
    {
        $worker = Worker::where('id', $id)
            ->firstOrFail();

        $worker->employeeWorkers()->delete();
        $worker->delete();

        return redirect ("/organizations/{$worker->organization_id}/staff");
    }
}
