<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkersController extends Controller
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
        return view('staff.workers.create');
    }

    public function store()
    {
        $data = request()->validate([
            'workers_name' => ['required', 'string', 'unique:organizations', 'max:255'],
            'workers_count' => ['required', 'numeric'],
            'workers_tariff_category' => ['required', 'numeric', 'max:255'],
            'workers_tariff_coefficient' => ['required', 'string', 'max:255'],
            'workers_tariff_rate' => ['required', 'numeric'],
            'workers_payrise_management_perc' => ['nullable'],
            'workers_payrise_management_amount' => ['nullable', 'numeric'],
            'workers_payrise_intensity_perc' => ['nullable'],
            'workers_payrise_intensity_amount' => ['nullable', 'numeric'],
            'workers_payrise_category_perc' => ['nullable'],
            'workers_payrise_category_amount' => ['nullable', 'numeric'],
            'workers_payrise_specificity_perc' => ['nullable'],
            'workers_payrise_specificity_amount' => ['nullable', 'numeric'],
            'workers_additional_stimulation_perc' => ['nullable'],
            'workers_additional_stimulation_amount' => ['nullable', 'numeric'],
        ]);

        auth()->user()->organizations()->workers()->create($data);

        return redirect("/organizations/" . auth()->user()->organization()->id . "/staff");
    }

    public function show(Organization $organization, User $user)
    {
        return view('organizations.show', compact('organization', 'user'));
    }
}
