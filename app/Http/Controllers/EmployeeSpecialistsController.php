<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\EmployeeSpecialists\CreateRequest;
use App\Http\Requests\EmployeeSpecialists\UpdateRequest;
use App\Models\Specialist;
use App\Models\Organization;
use App\Models\EmployeeSpecialist;

class EmployeeSpecialistsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function resolveUser()
    {
        return auth()->user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($specialist_id)
    {
        return view('organizations.staff.specialists.employees.create', compact('specialist_id'));
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

        if (request('employee_photo')) {
            $imagePath = request('employee_photo')->store('uploads', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(150, 150);
            $image->save();

            $data['employee_photo'] = $imagePath;
        }

        EmployeeSpecialist::create($data);

        return redirect("/staff/specialists/{$request->specialist_id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeSpecialist $employeeSpecialist, Specialist $specialist, $id)
    {
        $employeeSpecialist = EmployeeSpecialist::findOrFail($id);
        return view ('organizations.staff.specialists.employees.show', compact('employeeSpecialist', 'specialist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Specialist $specialist, EmployeeSpecialist $employeeSpecialist, $id)
    {
        $employeeSpecialist = EmployeeSpecialist::findOrFail($id);
        return view('organizations.staff.specialists.employees.edit', compact('specialist', 'employeeSpecialist'));
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
        $data = $request->validated();

        if (request('employee_photo')) {
            $imagePath = $request->employee_photo->store('uploads', 'public');

            $image = Image::make(public_path("/storage/{$imagePath}"))->fit(150, 150);
            $image->save();
            $imageArray = ['employee_photo' => $imagePath];
        }

        $employeeSpecialist = EmployeeSpecialist::whereId($id)->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/specialists/{$request->specialist_id}/employees/{$id}");
    }

    public function delete($id)
    {
        $employeeSpecialist = EmployeeSpecialist::where('id', $id)
            ->firstOrFail();

        return view('organizations.staff.specialists.employees.delete', [
            'employeeSpecialist' => $employeeSpecialist,
            'title' => 'Удаление сотрудника'
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
        $employeeSpecialist = EmployeeSpecialist::where('id', $id)
            ->firstOrFail();

        $employeeSpecialist->delete();

        return redirect ("/staff/specialists/{$employeeSpecialist->specialist_id}");
    }
}
