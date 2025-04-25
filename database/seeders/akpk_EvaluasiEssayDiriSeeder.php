<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akpk_EvaluasiEssayDiriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akpk_evaluasi_essay_diri')->insert([
            [
                'nip' => '11111',
                'jawaban' => 'Saya merasa telah berkembang dalam pengambilan keputusan dan manajemen waktu.',
                'id_tahun_evaluasi' => 1,
                'id_pertanyaan_essay_diri' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '11111',
                'jawaban' => 'Masih perlu meningkatkan keterampilan komunikasi dan kerja sama tim.',
                'id_tahun_evaluasi' => 1,
                'id_pertanyaan_essay_diri' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
