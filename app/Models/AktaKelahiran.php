<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktaKelahiran extends Model
{
    use HasFactory;
    protected $table = 'aktakelahiran';
    use HasFactory;

    protected $fillable = [
        'nama_lengkap_anak',
        'nama_ayah',
        'nama_ibu',
        'no_kk',
        'jenis_kelamin',
        'kelahiran_ke',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat_orangtua',
        'status',
    ];
}
