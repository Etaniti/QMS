<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use App\Models\Organization;
use App\Models\User;

class StaffController extends Controller
{
    public function index(User $user, Organization $organization)
    {
        return view('staff.index', compact('user'), compact('organization'));
    }
}
