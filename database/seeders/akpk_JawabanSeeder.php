<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akpk_JawabanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akpk_jawaban')->insert([
            [
                'skor' => 1,
                'keterangan' => 'tidak mampu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skor' => 2,
                'keterangan' => 'kurang mampu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skor' => 3,
                'keterangan' => 'cukup mampu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skor' => 4,
                'keterangan' => 'mampu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skor' => 5,
                'keterangan' => 'sangat mampu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
