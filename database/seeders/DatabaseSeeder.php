<?php

namespace Database\Seeders;

use App\Models\PelatihanList;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            RefgolonganSeeder::class,
            RefJabatanSeeder::class,
            RefjenisasnSeeder::class,
            RefUnitKerjaSeeder::class,
            RefjenispelatihanSeeder::class,
            RefkategorijabatanSeeder::class,
            RefMetodepelatihanSeeder::class,
            RefpelaksanaanpelatihanSeeder::class,
            UserSeeder::class,
            UserPivotSeeder::class,
            akpk_JawabanSeeder::class,
            RefPegawaiSeeder::class,
            akpk_TahunEvaluasiSeeder::class,
            akpk_KategoriSeeder::class,
            akpk_EselonSeeder::class,
            akpk_PertanyaanAtasanSeeder::class,
            akpk_PertanyaanDiriSeeder::class,
            akpk_PertanyaanEssayAtasanSeeder::class,
            akpk_PertanyaanEssayDiriSeeder::class,
            akpk_EvaluasiDiriSeeder::class,
            akpk_EvaluasiAtasanSeeder::class,
            akpk_EvaluasiEssayAtasanSeeder::class,
            akpk_EvaluasiEssayDiriSeeder::class,
            akpk_TahunUsulanSeeder::class,
            akpk_RumpunSeeder::class,
            akpk_UsulanPelatihanUmumSeeder::class,
            akpk_PilihanPelatihanUmumSeeder::class,
            akpk_PengelolaanSolowasisSeeder::class,
            akpk_PilihanPelatihanSolowasisSeeder::class,
            PelatihanListSeeder::class,
        ]);
    }
}
