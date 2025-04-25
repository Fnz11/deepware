<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nip' => '11111',
                'name' => 'asn',
                'email' => 'asn@gmail.com',
                'role' => 'asn',
                'password' => Hash::make('12345678'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '11112',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('12345678'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '11113',
                'name' => 'superadmin',
                'email' => 'superadmin@gmail.com',
                'role' => 'superadmin',
                'password' => Hash::make('12345678'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        Role::create(['name' => 'asn']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'superadmin']);
        
    }
}
