<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                "role_name"     => "admin",
                "created_at"    => now(),

            ],
            [
                "role_name"     => "modo",
                "created_at"    => now(),
            ],
            [
                "role_name"     => "user",
                "created_at"    => now(),
            ],
        ]);
    }
}
