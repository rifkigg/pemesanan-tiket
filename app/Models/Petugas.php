<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas'; // Nama tabel dalam basis data

    protected $fillable = ['nama', 'no_telepon', 'alamat']; // Kolom yang dapat diisi secara massal

    // Relasi dengan tabel Tiket
    public function tikets()
    {
        return $this->hasMany(Tiket::class, 'id_petugas');
    }
}
