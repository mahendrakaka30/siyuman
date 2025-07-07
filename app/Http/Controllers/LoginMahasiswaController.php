<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // ← Tambahkan ini!
use Illuminate\Support\Facades\Auth;

class LoginMahasiswaController extends Controller
{
    // ✅ Tambahkan data user dummy
    private $users = [
        '23050692' => 'mahasiswa1',
        '23050693' => 'mahasiswa2',
    ];

    public function showLoginForm()
    {
        return view('auth.loginmahasiswa');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $nim = $request->username;
        $password = $request->password;

        // ✅ Cek apakah user cocok
        if (isset($this->users[$nim]) && $this->users[$nim] === $password) {
            Session::put('logged_in', true);
            Session::put('nim', $nim);

            return redirect()->route('home'); // ← arahkan ke /home
        }

        return back()->withErrors([
            'username' => 'NIM atau password salah.',
        ])->onlyInput('username');
    }
}