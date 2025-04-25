<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ref_pegawai', function (Blueprint $table) {
            $table->id();
            // Kolom nip harus unik dan mereferensikan users.nip (relasi 1-1)
            $table->string('nip')->unique();
            $table->string('foto');
            $table->string('alamat');
            $table->bigInteger('no_hp');
            $table->string('nip_atasan');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->timestamps();

            $table->foreign('nip')->references('nip')->on('users')->onDelete('cascade');
            $table->foreign('nip_atasan')->references('nip')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ref_pegawai');
    }
}
;