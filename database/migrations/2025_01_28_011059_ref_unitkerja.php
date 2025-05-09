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
        Schema::create('ref_unit_kerja', function (Blueprint $table) {
            $table->id();
            $table->string('unit_kerja');
            $table->string('kode_unit_kerja');
            $table->string('sub_unit_kerja');
            $table->string('singkatan');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_unitkerjas');
    }
};
