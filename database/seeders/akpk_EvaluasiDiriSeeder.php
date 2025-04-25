<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akpk_EvaluasiDiriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akpk_evaluasi_diri')->insert([
            [
                'nip' => '11111', // Pastikan NIP ini ada di tabel users
                'id_jawaban' => 5, // Misal: sangat mampu
                'id_pertanyaan' => 1, // Pertanyaan pertama dari pertanyaan_diri
                'id_tahun_evaluasi' => 1,
                'tanggal_pengisian' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '11111',
                'id_jawaban' => 4, // mampu
                'id_pertanyaan' => 2,
                'id_tahun_evaluasi' => 1,
                'tanggal_pengisian' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '11111',
                'id_jawaban' => 3, // cukup mampu
                'id_pertanyaan' => 3,
                'id_tahun_evaluasi' => 1,
                'tanggal_pengisian' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
