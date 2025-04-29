<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PelatihanLaporan;
use App\Models\PelatihanRegistrasi;
use Faker\Factory as Faker;

class PelatihanLaporanSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $registrasiList = PelatihanRegistrasi::pluck('id')->toArray();
        $statusList = ['lulus', 'tidak lulus'];

        foreach ($registrasiList as $id_registrasi) {
            PelatihanLaporan::create([
                'id_registrasi' => $id_registrasi,
                'judul_laporan' => 'Laporan ' . $faker->word(),
                'latar_belakang' => $faker->sentence(8),
                'laporan_pelatihan' => 'laporan_' . $id_registrasi . '.pdf',
                'sertifikat' => 'sertifikat_' . $id_registrasi . '.pdf',
                'total_biaya' => $faker->numberBetween(2000000, 10000000),
                'status' => $faker->randomElement($statusList),
            ]);
        }
    }
}
