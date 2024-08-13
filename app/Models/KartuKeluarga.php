<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    use HasFactory;
    protected $table = 'kartukeluarga';
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'alamat_lengkap',
        'kode_pos',
        'no_telp',
        'jumlah_anggota_keluarga',
        'daftar_anggota',
        'status',
    ];
}
