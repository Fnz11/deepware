<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akpk_EselonSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akpk_eselon')->insert([
            [
                'eselon' => 'Eselon I',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'eselon' => 'Eselon II',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'eselon' => 'Eselon III',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'eselon' => 'Eselon IV',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'eselon' => 'Non Eselon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
