<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RefUnitKerjaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ref_unit_kerja')->insert([
            [
                'unit_kerja' => 'Direktorat Jenderal Pajak',
                'kode_unit_kerja' => 'DJP001',
                'sub_unit_kerja' => 'Kantor Wilayah Jakarta Selatan',
                'singkatan' => 'DJP-JKTSEL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unit_kerja' => 'Kementerian Keuangan',
                'kode_unit_kerja' => 'KEMKEU001',
                'sub_unit_kerja' => 'Direktorat Jenderal Anggaran',
                'singkatan' => 'DJA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'unit_kerja' => 'Kementerian Pendidikan',
                'kode_unit_kerja' => 'KEMDIKBUD001',
                'sub_unit_kerja' => 'Direktorat Pendidikan Tinggi',
                'singkatan' => 'DIKTI',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
