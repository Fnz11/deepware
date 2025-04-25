<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akpk_PertanyaanEssayDiriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akpk_pertanyaan_essay_diri')->insert([
            [
                'pertanyaan' => 'Apa pencapaian terbesar Anda dalam satu tahun terakhir?',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pertanyaan' => 'Apa kendala utama yang Anda hadapi dalam pekerjaan Anda?',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pertanyaan' => 'Apa langkah konkret yang akan Anda ambil untuk meningkatkan kinerja Anda?',
                'status' => 'nonaktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
