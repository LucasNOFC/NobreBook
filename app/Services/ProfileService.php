<?php

namespace App\Services;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileService
{

    protected GateContract $gate;

    public function __construct(GateContract $gate)
    {
        $this->gate = $gate;
    }

    public function registerProfile(Request $request)
    {
        $user = Auth::user();

        $this->gate->authorize('create', Profile::class);

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

    public function accessProfile(Profile $profile)
    {

        $this->gate->authorize('update', $profile);

        $user = Auth::user();

        $profile = $user->profile()->find($user->id);

        return [$user, $profile];
    }
}
