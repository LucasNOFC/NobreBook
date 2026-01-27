<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function index()
    {
        $users = User::all();
        $size = count($users);
        return view('index.landpage');
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
            return redirect('users.index');
        };
    }
}
