<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin Kap',
                'email' => 'Admin@example.com',
                'role_id' => 1,
                'password' => Hash::make('12345678'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),

            ],

        ];

        DB::table('users')->insert($users);
    }
}
