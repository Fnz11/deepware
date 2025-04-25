<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akpk_PilihanPelatihanUmumSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akpk_pilihan_pelatihan_umum')->insert([
            [
                'nip' => '11111',
                'id_usulan_pelatihan_umum' => 1,
                'id_tahun_usulan' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '11111',
                'id_usulan_pelatihan_umum' => 2,
                'id_tahun_usulan' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
