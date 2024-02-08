<?php

namespace App\Http\Controllers\Profile;

use App\Actions\Fortify\UpdateUserPassword;

class UpdatePasswordController extends UpdateUserPassword
{
    public function edit()
    {
        return view('profile.update-password');
    }

    public function updatePassword()
    {
        $this->update(request()->user(), request()->all());

        return back()->with('status', 'Update password has been updated!');
    }
}
