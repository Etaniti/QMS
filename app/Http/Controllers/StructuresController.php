<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\Structure;

class StructuresController extends Controller
{
    public function create($structure_id)
    {
        return view('organizations.structure.index', compact('structure_id'));
    }
}
