<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;
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
        return view('prodi_add');
    }

    public function add_action(Request $request)
    {
        $request->validate([
            'kode_prodi' => 'required|max:5',
            'nama_prodi' => 'required',
            'nama_kaprodi' => 'required'
        ]);

        Prodi::create([
            'kode_prodi' => $request->kode_prodi,
            'nama_prodi' => $request->nama_prodi,
            'nama_kaprodi' => $request->nama_kaprodi
        ]);

        return Redirect::route('prodi_list');
    }

    public function edit(Prodi $prodi)
    {
        return view('prodi_edit', ['prodi' => $prodi]);
    }

    public function edit_action(Request $request, Prodi $prodi)
    {
        $request->validate([
            'kode_prodi' => 'required|max:5',
            'nama_prodi' => 'required',
            'nama_kaprodi' => 'required'
        ]);

        $prodi->update([
            'kode_prodi' => $request->kode_prodi,
            'nama_prodi' => $request->nama_prodi,
            'nama_kaprodi' => $request->nama_kaprodi
        ]);

        return Redirect::route('prodi_list');
    }

    public function delete(Prodi $prodi)
    {
        $prodi->delete();
        return Redirect::route('prodi_list');
    }
}
