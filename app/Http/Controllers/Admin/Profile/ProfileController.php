<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Profil\UpdateProfileRequest;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('admin.profile.profile', [
            'user' => User::find(Auth::id())
        ]);
    }

    public function update(UpdateProfileRequest $request)
    {
        $validated = $request->validated();
        $validated['updated_at'] = now();
        User::find(Auth::id())->update($validated);

        return to_route('profile.edit', Auth::user())
            ->with('success', 'Votre profil a été mis à jour avec succès.');
    }
}
