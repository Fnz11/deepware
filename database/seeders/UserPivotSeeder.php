<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserPivotSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user_pivot')->insert([
            [
                'nip' => '11111', // nip dari tabel users
                'id_unitkerja' => 1, // id dari ref_unit_kerja
                'id_golongan' => 1, // id dari ref_golongan
                'id_jabatan' => 1, // id dari ref_jabatan
                'tgl_mulai' => '2023-01-01',
                'tgl_akhir' => '2023-12-31',
                'is_unit_kerja' => true,
                'is_jabatan' => true,
                'is_golongan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '11112', // nip lain dari users
                'id_unitkerja' => 2,
                'id_golongan' => 2,
                'id_jabatan' => 2,
                'tgl_mulai' => '2024-01-01',
                'tgl_akhir' => '2024-12-31',
                'is_unit_kerja' => true,
                'is_jabatan' => true,
                'is_golongan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
