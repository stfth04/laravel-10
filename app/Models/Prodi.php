<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    // jika tidak menggunakan penamaan laravel
    // protected $table = 'program_studi';

    //jika primary bukan id
    //protected $primarykey = 'idprodi';

    protected $fillable = [
        'kode_prodi',
        'nama_prodi',
        'nama_kaprodi'
    ];

    public function mahasiswa(): HasMany 
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
