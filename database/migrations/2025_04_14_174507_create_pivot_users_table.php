<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pivot_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nip')->constrained('users')->onDelete('cascade');
            $table->foreignId('ref_unitkerja_id')->constrained('ref_unitkerjas')->onDelete('cascade');
            $table->foreignId('ref_jabatan_id')->constrained('ref_jabatans')->onDelete('cascade');
            $table->foreignId('ref_golongan_id')->constrained('ref_golongans')->onDelete('cascade');
            $table->date('tgl_mulai')->nullable();
            $table->date('tgl_akhir')->nullable();
            $table->boolean('is_unitkerja')->default(false);
            $table->boolean('is_jabatan')->default(false);
            $table->boolean('is_golongan')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot_users');
    }
};
