<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actions\Fortify\UpdateUserProfileInformation;

class ProfileController extends UpdateUserProfileInformation
{
    public function edit()
    {
        return view('profile.update-profile');
    }

    public function updateProfileInformation()
    {
        $this->update(request()->user(), request()->all());

        return back()->with('status', 'Update profile has been updated!');
    }
}
