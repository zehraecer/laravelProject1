<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            if (Auth::user()->role !== 'admin') {
                Auth::logout();
                return redirect()->back()->with('error', 'Admin değilsiniz!');
            }

            return redirect('/admin')->with('success', 'Giriş başarılı.');
        }

        return redirect()->back()->with('error', 'Email veya şifre yanlış!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
