<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Specialists\CreateRequest;
use App\Http\Requests\Specialists\UpdateRequest;
use App\Models\Organization;
use App\Models\Specialist;

class SpecialistsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Organization $organization, Specialist $specialist)
    {
        return view('organizations.staff.specialists.index', compact('organization', 'specialist'));
    }

    public function resolveUser()
    {
        return auth()->user();
    }

    public function create($organization_id)
    {
        return view('organizations.staff.specialists.create', compact('organization_id'));
    }

    public function store(CreateRequest $request)
    {
        $data = $request->validated();

        Specialist::create($data);

        return redirect("/organizations/{$request->organization_id}/staff");

    }

    public function show()
    {
        //
    }

    public function edit(Organization $organization, Specialist $specialist)
    {
        return view('organizations.staff.specialists.edit', compact('organization', 'specialist'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $data = $request->validated()->except(['_token', '_method']);
        $specialist = Specialist::whereId($id)->update($data);

        return redirect("/staff/specialists/{$id}");
    }

    public function delete($id)
    {
        $specialist = Specialist::where('id', $id)
            ->firstOrFail();

        return view('organizations.staff.specialists.delete', [
            'specialist' => $specialist,
            'title' => 'Удаление должности'
        ]);
    }

    public function destroy($id)
    {
        $specialist = Specialist::where('id', $id)
            ->firstOrFail();

        $specialist->employeeSpecialists()->delete();
        $specialist->delete();

        return redirect ("/organizations/{$specialist->organization_id}/staff");
    }
}
