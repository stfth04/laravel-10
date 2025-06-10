<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Support\Facades\Redirect;

class MahasiswaController extends Controller
{
    public function list(){
        // perintah mengambil semua data dari tabel prodi
            $mahasiswas = Mahasiswa::all();
    
        // perintah mengirim data ke view
            return view('mahasiswa_list', ['mahasiswas' => $mahasiswas]);
        }

    public function add(){
        //perintah mengambil semua data dari tabel prodi
        $prodis = Prodi::all();

    // perintah membuka view
        return view('mahasiswa_add', ['prodis' => $prodis]);
    }

    public function add_action(Request $request){

    //validasi
    $request->validate([
        'nama_mhs'=> 'required',
        'nim' => 'required',
        'prodi_id' => 'required|max:1',
        'no_hp' => 'required'
    ]);
        
    // memasukan data ke dalam tabel
    Mahasiswa::create([
        'nama_mhs' => $request->nama_mhs,
        'nim' => $request->nim,
        'prodi_id' => $request->prodi_id,
        'no_hp' => $request->no_hp
    ]);

    return Redirect::route('mahasiswa_list');
    }
    
    public function edit(Mahasiswa $mahasiswa){
        //perintah mengambil semua data dari tabel prodi
        $prodis = Prodi::all();

        //perintah membuka view
        return view('mahasiswa_edit', ['prodis' => $prodis, 'mahasiswa' => $mahasiswa]);
    }

    public function edit_action(request $request, Mahasiswa $mahasiswa){
        // validasi
        $request->validate([
            'nama_mhs' => 'required',
            'nim' => 'required',
            'prodi_id' => 'required',
            'no_hp' => 'required'
        ]);

         // mengubah data
        $mahasiswa->update([
            'nama_mhs' => $request->nama_mhs,
            'nim' => $request->nim,
            'prodi_id' => $request->prodi_id,
            'no_hp' => $request->no_hp
        ]);
        
        return Redirect::route('mahasiswa_list');
    }

    

    public function delete(Mahasiswa $mahasiswa){
        $mahasiswa->delete();
        return Redirect::route('mahasiswa_list');
    }
}