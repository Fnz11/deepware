<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akpk_RumpunSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akpk_rumpun')->insert([
            [
                'rumpun' => 'Rumpun Ilmu Sosial',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rumpun' => 'Rumpun Ilmu Alam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rumpun' => 'Rumpun Teknologi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rumpun' => 'Rumpun Humaniora',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
