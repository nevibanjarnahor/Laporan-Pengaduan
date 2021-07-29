<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash ;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'nik' => '111111111111111111',
            'email' => 'admin@admin.com',
            'password' => Hash::make('kominfo2021'),
            'phone' => '098212123434',
            'roles' => 'ADMIN'
        ]);

    }
}
