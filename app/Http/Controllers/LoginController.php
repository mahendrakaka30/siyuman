<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // ✅ Data hardcoded untuk Mahasiswa
    private $mahasiswa = [
        '23050692' => 'mahasiswa1',
        '23050693' => 'mahasiswa2',
    ];

    // ✅ Tampilkan halaman login Mahasiswa
    public function showLoginForm()
    {   
        return view('auth.siyuman');
    }

    // ✅ Tampilkan halaman login Dosen
    public function showLoginDosen()
    {
        return view('auth.logindosen');
    }

    // ✅ Proses login Mahasiswa
    public function loginMahasiswa(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        $nim = $request->username;
        $password = $request->password;

        if (isset($this->mahasiswa[$nim]) && $this->mahasiswa[$nim] === $password) {
            Session::put('logged_in', true);
            Session::put('role', 'mahasiswa');
            Session::put('nim', $nim);

            return redirect()->route('home');
        }

        return back()->withErrors(['username' => 'NIM atau password salah.'])->onlyInput('username');
    }

    // ✅ Proses login Dosen
   public function loginDosen(Request $request)
{
    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    $dosen = [
        'dosen123' => 'password123',
    ];

    $nip = $request->username;
    $password = $request->password;

    if (isset($dosen[$nip]) && $dosen[$nip] === $password) {
        Session::put('logged_in', true);
        Session::put('role', 'dosen');
        Session::put('nip', $nip);

        return redirect()->route('welcomedosen');
    }

    return back()->withErrors([
        'username' => 'NIP atau password salah.',
    ])->onlyInput('username');
}

    // ✅ Logout (otomatis redirect ke halaman login yang sesuai)
    public function logout(Request $request)
    {
        $role = Session::get('role');
        Session::flush();

        if ($role === 'dosen') {
            return redirect('/login-dosen');
        }

        return redirect('/login-mahasiswa');
    }
}