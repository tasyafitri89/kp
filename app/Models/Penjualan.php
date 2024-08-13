<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan';
    use HasFactory;

    protected $fillable = [
        'tanggal_jual',
        'id_barang',
        'jumlah_barang',
        'id_pembeli',
    ];
}
