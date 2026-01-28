<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function storeProfile(Request $request)
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

        return redirect()->intended("/profile/{$user->id}");
    }
}
