<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    
    public function authenticated(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        }

        return back()->withErrors([
            'loginError' => 'Incorrect Email or Password'
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
