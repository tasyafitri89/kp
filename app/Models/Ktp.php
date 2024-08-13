<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ktp extends Model
{
    use HasFactory;

    protected $table='ktp';
    protected $dates=['tanggal_lahir'];
    protected $fillable = [
        'permohonan_ktp',
        'nama',
        'no_kk',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'golongan_darah',
        'alamat',
        'agama',
        'status',
        'pekerjaan',
        'kewarganegaraan'
    ];
}
