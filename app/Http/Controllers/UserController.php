<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function index()
    {
        return view('index.index', [
            'user' => Auth::user()
        ]);
    }

    public function create()
    {
        return view('users.createuser');
    }

    public function store(Request $request)
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
            return redirect('/');
        };
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect()->intended('/');
        }

        return view('users.accessuser');
    }

    public function access(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();



            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Senha ou email inválido'
        ])->onlyInput('email');
    }

    public function destroy(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function profile(int $id)
    {
        if (Auth::check()) {

            $user = User::find($id);

            if ($user) {
                return view(
                    'users.profile',
                    [
                        'user' => $user,
                        'profile' => Auth::user()->profile
                    ]
                );
            } else {
                return redirect()->intended('/404');
            }
        }
        return redirect()->intended('/');
    }
}
