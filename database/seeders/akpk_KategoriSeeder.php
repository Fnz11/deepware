<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akpk_KategoriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akpk_kategori')->insert([
            [
                'kategori' => 'Komunikasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori' => 'Disiplin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori' => 'Inisiatif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori' => 'Kepemimpinan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori' => 'Kerja Sama Tim',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
