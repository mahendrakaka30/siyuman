<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginDosenController extends Controller
{
    // ✅ Username dan password tunggal (satu akun dosen)
    private $username = 'dosen123';
    private $password = 'password123';

    // ✅ Tampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.logindosen'); // pastikan file ini ada
    }

    // ✅ Proses login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (
            $request->username === $this->username &&
            $request->password === $this->password
        ) {
            session(['dosen_logged_in' => true, 'username' => $this->username]);
            return redirect()->route('welcomedosen'); // pastikan route ini ada
        }

        return back()->withErrors(['username' => 'Login gagal: username atau password salah']);
    }

    // ✅ Logout
    public function logout(Request $request)
    {
        Session::flush(); // hapus semua session
        return redirect('/login-dosen');
    }
}