<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class mahasiswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 15;
        if (strlen($katakunci)) {
            $data = mahasiswa::where('nim','like',"%$katakunci%")
            ->orWhere('nama', 'like',"%$katakunci%")
            ->orWhere('jurusan', 'like',"%$katakunci%")
            ->orWhere('nilai', 'like',"%$katakunci%")
            ->orderBy('nim', 'desc')
            ->paginate($jumlahbaris);
        } 
        else{
            $data = mahasiswa::orderBy('nim', 'desc')->paginate($jumlahbaris);
        }
        return view('mahasiswa.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nim', $request->nim);
        Session::flash('nama', $request->nama);
        Session::flash('jurusan', $request->jurusan);
        Session::flash('nilai', $request->nilai);

        $request->validate([
            'nim' => 'required|numeric|unique:mahasiswa,nim',
            'nama' => 'required',
            'jurusan' => 'required',
            'nilai' => 'required',
        ],[
            'nim.required' => 'NIM Wajib diisi',
            'nim.numeric' => 'NIM Wajib Angka',
            'nim.unique' => 'NIM Yang diinput sudah ada dalam database',
            'nama.required' => 'Nama Wajib diisi',
            'jurusan.required' => 'Jurusan Wajib diisi',
            'nilai.required' => 'Nilai Wajib diisi',
        ]);
        $data = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'nilai' => $request->nilai,
        ];
        mahasiswa::create($data);
        return redirect()->to('mahasiswa')->with('Success','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       //
    }
}