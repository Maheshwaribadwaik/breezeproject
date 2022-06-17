<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Hash;


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
            'name' =>"Admin",
            'email' => "admin@admin.com",
            'uname' => "admin",
            'number' => "123456789",
            'password' => Hash::make('password'),
        ]);
    }
}
