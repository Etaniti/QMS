<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Organizations\UpdateRequest;
use App\Models\Organization;
use App\Models\User;

class OrganizationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        $user = User::findOrFail($user);
    }

    public function resolveUser()
    {
        return auth()->user();
    }

    public function create()
    {
        return view('organizations.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'organization_name' => ['required', 'string', 'unique:organizations', 'max:255'],
            'organization_adress_legal_index' => ['required', 'digits:6'],
            'organization_adress_legal_city' => ['required', 'string', 'max:255'],
            'organization_adress_legal_street' => ['required', 'string', 'max:255'],
            'organization_adress_legal_house' => ['required', 'string', 'regex:/^[1-9]\d*(?:[ -]?(?:[а-яА-Я]+|[1-9]\d*))?$/'],
            'organization_adress_legal_corps' => ['nullable', 'numeric'],
            'organization_adress_legal_office' => ['nullable', 'string', 'max:255'],
            'organization_adress_post_index' => ['required', 'digits:6'],
            'organization_adress_post_city' => ['required', 'string', 'max:255'],
            'organization_adress_post_street' => ['required', 'string', 'max:255'],
            'organization_adress_post_house' => ['required', 'string', 'regex:/^[1-9]\d*(?:[ -]?(?:[а-яА-Я]+|[1-9]\d*))?$/'],
            'organization_adress_post_corps' => ['nullable', 'numeric'],
            'organization_adress_post_office' => ['nullable', 'string', 'max:255'],
            'organization_phone' => ['required', 'unique:organizations', 'regex:/^([0-9\s\+\(\)]*)$/', 'size:13'],
            'organization_fax' => ['nullable', 'string', 'unique:organizations', 'regex:/^([0-9\s\+\(\)]*)$/', 'size:13'],
            'organization_email' => ['required', 'string', 'email', 'unique:organizations', 'max:255'],
            'organization_website' => ['nullable', 'string', 'url', 'unique:organizations', 'max:255'],
            'organization_directorate' => ['required', 'string', 'max:255'],
            'organization_debit_account' => ['required', 'string', 'unique:organizations', 'regex:/^[A-Z0-9 ]+$/', 'size:28'],
            'organization_bic' => ['required', 'string', 'regex:/^[A-Z0-9 ]+$/', 'size:8'],
            'organization_unp' => ['required', 'unique:organizations', 'digits:9'],
            'organization_okpo' => ['nullable', 'unique:organizations', 'digits:8'],
        ]);

        auth()->user()->organizations()->create($data);

        return redirect('/profile/' . auth()->user()->id);
    }

    public function show(Organization $organization, User $user)
    {
        return view('organizations.show', compact('organization', 'user'));
    }

    public function edit(User $user, Organization $organization)
    {
        return view('organizations.edit', compact('organization', 'user'));
    }

    public function update(UpdateRequest $request, $id)
    {
        /*$organization = Organization::whereId($id);*/

        /*if($organization->isDirty(['organization_name'])) {
            $organization_name = $request->organization_name;
        }

        if($organization->isDirty('organization_phone')) {
            $organization_phone = $request->organization_phone;
        }

        if($organization->isDirty('organization_fax')) {
            $organization_fax = $request->organization_fax;
        }

        if($organization->isDirty('organization_email')) {
            $organization_email = $request->organization_email;
        }

        if($organization->isDirty('organization_website')) {
            $organization_website = $request->organization_website;
        }

        if($organization->isDirty('organization_debit_account')) {
            $organization_debit_account = $request->organization_debit_account;
        }

        if($organization->isDirty('organization_unp')) {
            $organization_unp = $request->organization_unp;
        }

        if($organization->isDirty('organization_okpo')) {
            $organization_okpo = $request->organization_okpo;
        }

        $changedData = compact(
            'organization_name',
            'organization_phone',
            'organization_fax',
            'organization_email',
            'organization_website',
            'organization_debit_account',
            'organization_unp',
            'organization_okpo'
        );

        $validatedData = $changedData->validate([
            'organization_name' => ['required', 'string', 'unique:organizations', 'max:255'],
            'organization_phone' => ['required', 'unique:organizations', 'regex:/^([0-9\s\+\(\)]*)$/', 'size:13'],
            'organization_fax' => ['nullable', 'string', 'unique:organizations', 'regex:/^([0-9\s\+\(\)]*)$/', 'size:13'],
            'organization_email' => ['required', 'string', 'email', 'unique:organizations', 'max:255'],
            'organization_website' => ['nullable', 'string', 'url', 'unique:organizations', 'max:255'],
            'organization_debit_account' => ['required', 'string', 'unique:organizations', 'regex:/^[A-Z0-9 ]+$/', 'size:28'],
            'organization_unp' => ['required', 'unique:organizations', 'digits:9'],
            'organization_okpo' => ['nullable', 'unique:organizations', 'digits:8'],
        ]);*/

        $data = request()->except(['_token', '_method']);
        $organization = Organization::whereId($id)->update($data);

        return redirect("/organizations/{$id}");
    }

}
