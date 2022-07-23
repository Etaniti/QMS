<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\Structure;
use App\Models\Module;

class ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Organization $organization, Structure $structure)
    {
        $structure_id = $organization->structure->id;
        return view('organizations.structure.index', compact('organization', 'structure', 'structure_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Structure $structure, $structure_id)
    {
        return view('organizations.structure.index', compact('structure_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'moreFields.*.post_1' => 'required',
            'moreFields.*.post_2' => 'required',
            'moreFields.*.post_3' => 'required',
            'moreFields.*.post_4' => 'required',
            'moreFields.*.post_5' => 'required',
            'moreFields.*.post_6' => 'required',
            'moreFields.*.post_7' => 'required',
            'moreFields.*.post_8' => 'required',
            'moreFields.*.post_9' => 'required',
            'moreFields.*.post_10' => 'required',

        ]);

        foreach ($request->moreFields as $key => $value) {
            Module::create($value);
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
