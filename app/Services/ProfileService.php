<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileService
{
    public function registerProfile(Request $request)
    {
        $user = Auth::user();

        $data = $request->validate([
            'fullname' => 'required',
            'title' => 'required',
            'adress' => 'required',
            'desc_bio' => 'required'
        ]);

        $profile = $user->profile()->updateOrCreate(
            [],
            array_merge($data, ['user_id' => $user->id])
        );

        return $user;
    }

    public function accessProfile()
    {

        $user = Auth::user();

        $profile = $user->profile()->find($user->id);

        return [$user, $profile];
    }
}
