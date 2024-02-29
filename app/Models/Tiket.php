<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $fillable = [
        'tanggal_kunjungan', 'biaya', 'jumlah_tiket', 'id_pengunjung', 'id_petugas'
    ];

    // Jika nama tabel tidak sesuai dengan konvensi Laravel, Anda dapat menentukannya manual
    protected $table = 'tikets';

    // Relasi ke tabel Pengunjung
    public function pengunjung()
    {
        return $this->belongsTo(Pengunjung::class, 'id_pengunjung');
    }

    // Relasi ke tabel Petugas
    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'id_petugas');
    }
}


