<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function hash()
    {
        $hash_password_saya = Hash::make('coba');
        echo $hash_password_saya;
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->with('loginError', 'Login failed');
    }


    public function check(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 'Notaris') {
                return redirect()->intended('/User-Index')->with('success', 'Login Berhasil');
            } elseif (Auth::user()->role == 'Notaris') {
                return redirect()->intended('/User-Index')->with('success', 'Login Berhasil');
            } elseif (Auth::user()->role == 'Notaris') {
                return redirect()->intended('/User-Index')->with('success', 'Login Berhasil');
            }
            return redirect()->intended('/User-Index')->with('success', 'Login Berhasil');
        } elseif (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        }
        return redirect()->intended('/login')->with('success', 'Login Gagal');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function Info()
    {
        $user = User::all();
        return view('Layout.head', 'Layout.side', 'Layout.info', 'Layout.footer')->with(
            'user',
            $user
        );
    }
    public function user()
    {
        $user = User::all();
        return view('Layout.head', 'Layout.side', 'Layout.info', 'Layout.footer')->with(
            'user',
            $user
        );
    }
}
