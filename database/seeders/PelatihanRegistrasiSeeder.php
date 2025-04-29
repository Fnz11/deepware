<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PelatihanRegistrasi;
use App\Models\User;
use App\Models\PelatihanList;
use Faker\Factory as Faker;

class PelatihanRegistrasiSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $user = User::first();
        $pelatihanList = PelatihanList::pluck('id')->toArray();
        $statusList = ['proses verifikasi', 'diterima', 'ditolak'];

        foreach (range(1, 20) as $i) {
            PelatihanRegistrasi::create([
                'nip' => $user->nip,
                'id_pelatihan' => $faker->randomElement($pelatihanList),
                'tanggal_daftar' => $faker->dateTimeBetween('-6 months', 'now')->format('Y-m-d'),
                'biaya_pelatihan' => $faker->numberBetween(1000000, 5000000),
                'biaya_akomodasi' => $faker->numberBetween(500000, 2000000),
                'biaya_hotel' => $faker->numberBetween(500000, 3000000),
                'uang_harian' => $faker->numberBetween(300000, 1000000),
                'file_penawaran' => 'penawaran' . $i . '.pdf',
                'file_usulan' => 'usulan' . $i . '.pdf',
                'status' => $faker->randomElement($statusList),
            ]);
        }
    }
}
