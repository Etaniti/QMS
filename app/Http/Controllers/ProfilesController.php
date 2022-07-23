<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = request()->except(['_token', '_method']);
        $profile = Profile::whereId($id)->update($data);

        return redirect("/profile/{$id}");
    }
}
