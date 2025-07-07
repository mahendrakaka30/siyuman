<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class dosencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 10;
        if (strlen($katakunci)) {
            $data = dosen::where('nim','like',"%$katakunci%")
            ->orWhere('nama', 'like',"%$katakunci%")
            ->orWhere('jurusan', 'like',"%$katakunci%")
            ->orWhere('nilai', 'like',"%$katakunci%")
            ->orderBy('nim', 'desc')
            ->paginate();
        } 
        else{
            $data = dosen::orderBy('nim', 'desc')->paginate($jumlahbaris);
        }
        return view('dosen.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.create');
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
            'nim' => 'required|numeric|unique:dosen,nim',
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
        dosen::create($data);
        return redirect()->to('dosen')->with('Success','Berhasil Menambahkan Data');
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
        $data = dosen::where('nim', $id)->first();
        return view('dosen.edit')->with('data', $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'nama' => 'required',
            'jurusan' => 'required',
            'nilai' => 'required',
        ],[
            'nama.required' => 'Nama Wajib diisi',
            'jurusan.required' => 'Jurusan Wajib diisi',
            'nilai.required' => 'Nilai Wajib diisi',
        ]);
        $data = [
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'nilai' => $request->nilai,
        ];
        dosen::where('nim', $id)->update($data);
        return redirect()->to('dosen')->with('Success','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dosen::where('nim', $id)->delete();
        return redirect()->to('dosen')->with('Success', 'Berhasil Menghapus data');
    }
}