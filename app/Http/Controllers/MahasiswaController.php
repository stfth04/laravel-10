<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function list()
    {
        $mahasiswas = Mahasiswa::with('prodi')->get();
        return view('mahasiswa_list', ['mahasiswas' => $mahasiswas]);
    }
}
