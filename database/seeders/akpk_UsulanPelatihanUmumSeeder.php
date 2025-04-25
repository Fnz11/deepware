<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akpk_UsulanPelatihanUmumSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akpk_usulan_pelatihan_umum')->insert([
            [
                'nip' => '11111',
                'id_tahun_usulan' => 1,
                'nama_pelatihan' => 'Pelatihan Kepemimpinan Nasional',
                'status' => 'disetujui',
                'penanggungjawab' => '11112',
                'file_pdf' => 'pelatihan_kepemimpinan.pdf',
                'tanggal_aktif' => '2025-04-01',
                'keterangan' => 'Pelatihan untuk peningkatan kompetensi kepemimpinan',
                'id_rumpun' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '11111',
                'id_tahun_usulan' => 1,
                'nama_pelatihan' => 'Pelatihan Komunikasi Efektif',
                'status' => 'menunggu',
                'penanggungjawab' => '11112',
                'file_pdf' => 'komunikasi_efektif.pdf',
                'tanggal_aktif' => '2025-05-15',
                'keterangan' => 'Penguatan skill komunikasi untuk pegawai',
                'id_rumpun' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
