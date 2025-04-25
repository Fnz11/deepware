<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akpk_PilihanPelatihanSolowasisSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akpk_pilihan_pelatihan_solowas')->insert([
            [
                'nip' => '11111', // pastikan user dengan nip ini sudah ada
                'id_tahun_usulan' => 1, // pastikan tahun_usulan dengan ID ini sudah ada
                'id_pengelolaan_solowasis' => 1, // pastikan pengelolaan_solowasis dengan ID ini sudah ada
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '11112', // contoh tambahan
                'id_tahun_usulan' => 1,
                'id_pengelolaan_solowasis' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
