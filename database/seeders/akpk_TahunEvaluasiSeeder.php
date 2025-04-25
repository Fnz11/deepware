<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akpk_TahunEvaluasiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akpk_tahun_evaluasi')->insert([
            [
                'tanggal_buka' => '2025-04-23',
                'tanggal_tutup' => '2025-05-29',
                'tahun' => '2025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_buka' => '2024-01-01',
                'tanggal_tutup' => '2024-01-31',
                'tahun' => '2024',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_buka' => '2023-01-01',
                'tanggal_tutup' => '2023-01-31',
                'tahun' => '2023',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
