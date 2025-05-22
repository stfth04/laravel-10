<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi; // Perbaikan pada penulisan namespace
use Illuminate\Support\Facades\Redirect;

class ProdiController extends Controller
{
    public function list()
    {
        $prodis = Prodi::all();
        return view('prodi_list', ['prodis' => $prodis]);
    }

     public function add()
    {
       //perintah membuka view
        return view('prodi_add');
    }

    public function add_action(Request $request){
        //validasi 
        $request->validate([
            'kode_prodi' => 'required|max:5',
            'nama_prodi' => 'required',
            'nama_kaprodi' => 'required'
        ]);

        //masukkan data ke dalam tabel 
        Prodi::create([
            'kode_prodi' => $request->kode_prodi,
            'nama_prodi' => $request->nama_prodi,
            'nama_kaprodi' => $request->nama_kaprodi
        ]);

        return Redirect::route('prodi_list');
    }
}
