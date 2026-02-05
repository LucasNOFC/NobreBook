<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserService
{
    public function registerUser(Request $request)
    {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
            'profile_picture' => 'required|file',
        ]);

        if (!empty($input['profile_picture']) && $input['profile_picture']->isValid()) {
            $url = $input['profile_picture']->store('profiles', 'public');
            $input['profile_picture'] = $url;
            User::create($input);
        };
    }

    public function loginUser(Request $request)
    {


        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        }

        return back()->withErrors([
            'email' => 'Senha ou email inválido'
        ])->onlyInput('email');
    }

    public function loggoff(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }

    public function profileSearch(int $id)
    {

        if (Auth::check()) {

            $user = User::find($id);

            if ($user) {
                return ['user' => $user, 'profile' => Auth::user()->profile];
            } else {
                return false;
            }
        }
        return false;
    }
}
