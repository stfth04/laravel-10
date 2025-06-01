<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Support\Facades\Redirect;

class MahasiswaController extends Controller
{
    public function list()
    {
        $mahasiswas = Mahasiswa::with('prodi')->get(); // perbaikan relasi
        return view('mahasiswa_list', ['mahasiswas' => $mahasiswas]);
    }

    public function add()
    {
        $prodis = Prodi::all(); // kirim semua prodi ke view
        return view('mahasiswa_add', ['prodis' => $prodis]);
    }

    public function add_action(Request $request)
    {
        // validasi input
        $request->validate([
            'nama_mhs' => 'required|max:100',
            'nim' => 'required',
            'prodi_id' => 'required',
            'no_hp' => 'required'
        ]);

        // simpan ke database
        Mahasiswa::create([
            'nama_mhs' => $request->nama_mhs,
            'nim' => $request->nim,
            'prodi_id' => $request->prodi_id,
            'no_hp' => $request->no_hp
        ]);

        return Redirect::route('mahasiswa_list');
    }
}
