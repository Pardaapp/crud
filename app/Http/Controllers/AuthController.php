<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function FormLogin()
    {
        return view('login');
    }

    public function Login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'Super Admin') {
                return redirect()->route('dashboard.admin');
            } elseif ($user->role === 'User') {
                return redirect()->route('dashboard.user');
            } else {
                Auth::logout();
                return redirect()->route('login')->withErrors(['role' => 'Role tidak dikenali.']);
            }
        }

        return redirect()->back()->withErrors(['login' => 'Email atau password salah.']);
    }

}
