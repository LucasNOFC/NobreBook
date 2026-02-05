<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
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

        $this->userService->registerUser($request);

        return redirect()->intended('/');
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
        $this->userService->loginUser($request);

        return redirect()->intended('/');
    }

    public function destroy(Request $request)
    {

        $this->userService->loggoff($request);

        return redirect()->intended('/login');
    }

    public function profile(int $id)
    {
        $profileSearch = $this->userService->profileSearch($id);

        if (!$profileSearch) return redirect()->intended('/404');

        else return view ('users.profile', $profileSearch);
    }
}
