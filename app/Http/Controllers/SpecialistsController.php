<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use App\Models\Organization;
use App\Models\User;

class SpecialistsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user, Organization $organization)
    {
        $user = User::findOrFail($user);
        $organization = Organization::findOrFail($organization);
    }

    public function resolveUser()
    {
        return auth()->user();
    }

    public function create()
    {
        return view('staff.specialists.create');
    }

    public function store()
    {
        $data = request()->validate([
            'org_name' => ['required', 'string', 'unique:organizations', 'max:255'],
            'org_adress_legal_index' => ['required', 'digits:6'],
            'org_adress_legal_city' => ['required', 'string', 'max:255'],
            'org_adress_legal_street' => ['required', 'string', 'max:255'],
            'org_adress_legal_house' => ['required', 'string', 'regex:/^[1-9]\d*(?:[ -]?(?:[а-яА-Я]+|[1-9]\d*))?$/'],
            'org_adress_legal_corps' => ['nullable', 'numeric'],
            'org_adress_legal_office' => ['nullable', 'string', 'max:255'],
            'org_adress_post_index' => ['required', 'digits:6'],
            'org_adress_post_city' => ['required', 'string', 'max:255'],
            'org_adress_post_street' => ['required', 'string', 'max:255'],
            'org_adress_post_house' => ['required', 'string', 'regex:/^[1-9]\d*(?:[ -]?(?:[а-яА-Я]+|[1-9]\d*))?$/'],
            'org_adress_post_corps' => ['nullable', 'numeric'],
            'org_adress_post_office' => ['nullable', 'string', 'max:255'],
            'org_phone' => ['required', 'unique:organizations', 'regex:/^([0-9\s\+\(\)]*)$/', 'size:13'],
            'org_fax' => ['nullable', 'string', 'unique:organizations', 'regex:/^([0-9\s\+\(\)]*)$/', 'size:13'],
            'org_email' => ['required', 'string', 'email', 'unique:organizations', 'max:255'],
            'org_website' => ['nullable', 'string', 'url', 'unique:organizations', 'max:255'],
            'org_directorate' => ['required', 'string', 'max:255'],
            'org_debit_account' => ['required', 'string', 'unique:organizations', 'regex:/^[A-Z0-9 ]+$/', 'size:28'],
            'org_bic' => ['required', 'string', 'unique:organizations', 'regex:/^[A-Z0-9 ]+$/', 'size:8'],
            'org_unp' => ['required', 'unique:organizations', 'digits:9'],
            'org_okpo' => ['nullable', 'unique:organizations', 'digits:8'],
        ]);

        auth()->user()->organizations()->create($data);

        return redirect("/staff/" . auth()->user()->organization->id);
    }

    public function show(Organization $organization, User $user)
    {
        return view('organizations.show', compact('organization', 'user'));
    }
}
