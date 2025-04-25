<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akpk_PertanyaanAtasanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akpk_pertanyaan_atasan')->insert([
            [
                'deskripsi' => 'Konsisten dengan nilai dan etika organisasi',
                'id_kategori' => 1,
                'standar_min' => 4,
                'id_jabatan' => 1,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deskripsi' => 'Bekerja efektif dalam tim',
                'id_kategori' => 2,
                'standar_min' => 4,
                'id_jabatan' => 2,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deskripsi' => 'Menyampaikan dan menerima informasi dengan jelas',
                'id_kategori' => 3,
                'standar_min' => 3,
                'id_jabatan' => 3,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deskripsi' => 'Fokus pada pencapaian tujuan',
                'id_kategori' => 4,
                'standar_min' => 4,
                'id_jabatan' => 1,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deskripsi' => 'Memberikan pelayanan terbaik kepada masyarakat',
                'id_kategori' => 5,
                'standar_min' => 4,
                'id_jabatan' => 2,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deskripsi' => 'Meningkatkan kapasitas diri dan tim',
                'id_kategori' => 1,
                'standar_min' => 3,
                'id_jabatan' => 3,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deskripsi' => 'Beradaptasi dan memimpin perubahan',
                'id_kategori' => 2,
                'standar_min' => 4,
                'id_jabatan' => 1,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deskripsi' => 'Membuat keputusan yang tepat',
                'id_kategori' => 3,
                'standar_min' => 3,
                'id_jabatan' => 2,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
