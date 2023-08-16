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
        $roles = [
            ['name' => 'admin'],
            ['name' => 'staff'],
            ['name' => 'resident'],
        ];

        // Insert the role data into the 'role_as' table
        DB::table('role_id')->insert($roles);
    }
}
