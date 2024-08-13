<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAktaKelahiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktakelahiran', function (Blueprint $table) {
            $table->id();
            $table->text('nama_lengkap_anak');
            $table->text('nama_ayah');
            $table->text('nama_ibu');
            $table->string('no_kk');
            $table->string('jenis_kelamin');
            $table->text('kelahiran_ke');
            $table->text('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat_orangtua');
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
        Schema::dropIfExists('aktakelahiran');
    }
}
