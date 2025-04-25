<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RefJabatanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ref_jabatan')->insert([
            [
                'jabatan' => 'Kepala Subbagian Umum',
                'jenis_jabatan' => 'Struktural',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Analis Kepegawaian',
                'jenis_jabatan' => 'Fungsional',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Staf Administrasi',
                'jenis_jabatan' => 'Pelaksana',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
