<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
        ]);

        $data = [
            'email'  => $request->email,
            'password'  => $request->password
        ];

         // Setelah otentikasi berhasil
      

        // Mengecek otentikasi pengguna
        if (Auth::attempt($data)) {
            // Jika berhasil login
            return redirect()->route('dashboard.index')->with('success', 'Anda berhasil login');
        } else {
            // Jika gagal login
            return redirect()->back()->withInput($request->only('email', 'remember'))
                ->withErrors(['email' => 'Email atau password salah']);
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect()->route('login')->with('success', 'Anda telah berhasil logout');
    }
}
