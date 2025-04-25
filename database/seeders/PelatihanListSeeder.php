<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PelatihanList;
use App\Models\User;
use App\Models\ref_pelaksanaanpelatihans;
use App\Models\ref_metodepelatihans;
use App\Models\ref_jenispelatihans;
use Faker\Factory as Faker;

class PelatihanListSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $user = User::first(); // Gunakan satu user yang sudah ada

        // Pastikan referensi tersedia
        $pelaksanaanList = ref_pelaksanaanpelatihans::pluck('id')->toArray();
        $metodeList = ref_metodepelatihans::pluck('id')->toArray();
        $jenisList = ref_jenispelatihans::pluck('id')->toArray();

        foreach (range(1, 20) as $i) {
            PelatihanList::create([
                'nip' => $user->nip,
                'nama_pelatihan' => 'Pelatihan ' . $faker->word(),
                'tempat_pelatihan' => $faker->city(),
                'tanggal_mulai' => $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
                'tanggal_selesai' => $faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
                'penyelenggara' => $faker->company(),
                'deskripsi' => $faker->sentence(12),
                'pelaksanaan_pelatihan_id' => $faker->randomElement($pelaksanaanList),
                'metode_pelatihan_id' => $faker->randomElement($metodeList),
                'jenis_pelatihan_id' => $faker->randomElement($jenisList),
                'gambar' => 'pelatihan' . $i . '.jpg',
            ]);
        }
    }
}
