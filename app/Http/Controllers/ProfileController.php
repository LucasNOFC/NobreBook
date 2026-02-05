<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\ProfileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    protected $profileService;

    public function __construct(profileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function storeProfile(Request $request)
    {

        $user = $this->profileService->registerProfile($request);

        return redirect()->intended("/profile/{$user->id}");
    }

    public function profileUser()
    {

        $data = $this->profileService->accessProfile();


        return view('users.profileuser', [
            'user' => $data[0],
            'profile' => $data[1]
        ]);
    }
}
