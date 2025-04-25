<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RefPegawaiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ref_pegawai')->insert([
            [
                'nip' => '11111', // pastikan ini sudah ada di tabel users
                'foto' => 'foto_ans.jpg',
                'alamat' => 'Jl. Mawar No. 1',
                'no_hp' => 628123456789,
                'nip_atasan' => '11112', // pastikan ini sudah ada di tabel users
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1995-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'foto' => 'foto_admin.jpg',
                'alamat' => 'Jl. Melati No. 2',
                'no_hp' => 628987654321,
                'nip' => '11112',
                'nip_atasan' => '11111',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => '1990-05-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'foto' => 'foto_superadmin.jpg',
                'alamat' => 'Jl. Kenanga No. 3',
                'no_hp' => 628112233445,
                'nip' => '11113',
                'nip_atasan' => '11111',
                'tempat_lahir' => 'Surabaya',
                'tanggal_lahir' => '1988-12-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
