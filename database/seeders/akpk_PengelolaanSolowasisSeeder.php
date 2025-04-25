<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akpk_PengelolaanSolowasisSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akpk_pengelolaan_solowasis')->insert([
            [
                'id_tahun_usulan' => 1,
                'nama_pelatihan' => 'Pelatihan Kepemimpinan Solowasis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_tahun_usulan' => 1,
                'nama_pelatihan' => 'Pelatihan Manajemen Waktu Solowasis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
