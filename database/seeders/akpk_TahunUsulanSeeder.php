<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akpk_TahunUsulanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akpk_tahun_usulan')->insert([
            [
                'tanggal_buka' => '2025-01-01',
                'tanggal_tutup' => '2025-01-31',
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
            ]
        ]);
    }
}
