<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akpk_PertanyaanEssayAtasanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akpk_pertanyaan_essay_atasan')->insert([
            [
                'pertanyaan' => 'Jelaskan kontribusi utama pegawai dalam tim selama satu tahun terakhir.',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pertanyaan' => 'Apa saran Anda untuk peningkatan kinerja pegawai ini di masa mendatang?',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pertanyaan' => 'Bagaimana pegawai menangani tantangan dalam pekerjaan?',
                'status' => 'nonaktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
