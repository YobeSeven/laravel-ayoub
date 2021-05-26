<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                `name`          => `name test`,
                `role_id`       => 1,
                `email`         => `test@test.com`,
                `password`      => Hash::make(`testtest`),
                `created_at`    => now(),

            ],
        ]);
    }
}
