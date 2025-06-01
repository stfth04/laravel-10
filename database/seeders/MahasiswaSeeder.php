<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Faker::create('id_ID');

        for ($f = 1; $f <= 5; $f++) {
            Mahasiswa::create([
                'nama_mhs' => $faker->name,
                'nim' => $faker->numberBetween(1, 300),
                'prodi_id' => $faker->numberBetween(1, 2),
                'no_hp' => $faker->phoneNumber,
            ]);
        }
    }
}
