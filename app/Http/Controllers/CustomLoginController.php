<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (Auth::guard('author')->attempt($this->credentials($request)))
            return view('home');
        return redirect()->back()->withErrors([
            'errors' => 'Email Or Password Is Incorrect',
        ]);
    }

    public function credentials($request)
    {
        return $request->only($this->username(), 'password');
    }

    public function username(): string
    {
        return 'email';
    }

    public function logout(): \Illuminate\Http\RedirectResponse
    {
        Auth::guard('author')->logout();
//        $user->logout();
//        $author->logout();
        return redirect()->route('login');

    }

}
