<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akpk_EvaluasiEssayAtasanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akpk_evaluasi_essay_atasan')->insert([
            [
                'nip_atasan' => '11112',
                'nip_bawahan' => '11111',
                'jawaban' => 'Bawahan memiliki kemampuan yang sangat baik dalam menyelesaikan tugas tepat waktu.',
                'id_tahun_evaluasi' => 1,
                'id_pertanyaan_essay_atasan' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip_atasan' => '11112',
                'nip_bawahan' => '11111',
                'jawaban' => 'Perlu peningkatan dalam komunikasi antar tim, meskipun hasil pekerjaan memuaskan.',
                'id_tahun_evaluasi' => 1,
                'id_pertanyaan_essay_atasan' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
