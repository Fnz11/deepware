<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akpk_EvaluasiAtasanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akpk_evaluasi_atasan')->insert([
            [
                'nip_atasan' => '11112',
                'nip_bawahan' => '11111',
                'id_jawaban' => 5, // sangat mampu
                'id_pertanyaan' => 1, // pastikan pertanyaan_atasan dengan id 1 sudah ada
                'id_tahun_evaluasi' => 1, // pastikan tahun evaluasi dengan id 1 sudah ada
                'tanggal_pengisian' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip_atasan' => '11112',
                'nip_bawahan' => '11111',
                'id_jawaban' => 4,
                'id_pertanyaan' => 2,
                'id_tahun_evaluasi' => 1,
                'tanggal_pengisian' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip_atasan' => '11112',
                'nip_bawahan' => '11111',
                'id_jawaban' => 3,
                'id_pertanyaan' => 3,
                'id_tahun_evaluasi' => 1,
                'tanggal_pengisian' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
