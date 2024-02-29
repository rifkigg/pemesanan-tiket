<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    protected $fillable = [
        'nama_pengunjung', // tambahkan kolom lainnya sesuai kebutuhan
    ];

    // Jika nama tabel tidak sesuai dengan konvensi Laravel, Anda dapat menentukannya manual
    protected $table = 'pengunjungs';

    // Relasi dengan Tiket
    public function tikets()
    {
        return $this->hasMany(Tiket::class, 'id_pengunjung');
    }
}
