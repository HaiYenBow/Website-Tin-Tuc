<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/')->with('success', 'Đăng nhập thành công');
        }
        return back()->withErrors(['email' => 'Thông tin không đúng']);
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
