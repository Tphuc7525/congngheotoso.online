<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder

    /**
     * Seed the application's database.
     *
     * @return void
     */
    {
        // \App\Models\User::factory(10)->create();
        public function run(): void
        {
            DB::table('users')->insert([
                'name'=>'Newbie Laravel',
                'email'=>'thienphuc7525@gmail.com',
                'password'=>Hash::make('password'),
            ]);
        }
    }

