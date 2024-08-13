<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKartuKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartukeluarga', function (Blueprint $table) {
        
            $table->id();
            $table->string('nama_lengkap');
            $table->string('alamat_lengkap');
            $table->string('kode_pos');
            $table->string('no_telp');
            $table->string('jumlah_anggota_keluarga');
            $table->string('daftar_anggota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kartukeluarga');
    }
}
