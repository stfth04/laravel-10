<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prodi;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prodi::create([
            'kode_prodi' => '63411',
            'nama_prodi' => 'D3 Administrasi Bisnis',
            'nama_kaprodi' => 'Siti Fatimah'
        ]);
        
        Prodi::create([
            'kode_prodi' => '89762',
            'nama_prodi' => 'D3 Administrasi Bisnis',
            'nama_kaprodi' => 'Hanesa Muslifah Yulianti'
        ]);
        
        
    }
}
