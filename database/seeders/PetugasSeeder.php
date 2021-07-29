<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash ;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'petugas',
            'nik' => '222222222222222222',
            'email' => 'petugas@petugas.com',
            'password' => Hash::make('kominfo2021'),
            'phone' => '085326789543',
            'roles' => 'PETUGAS'
        ]);

    }
}
