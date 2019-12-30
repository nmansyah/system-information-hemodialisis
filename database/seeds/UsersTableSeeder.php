<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'role' => '1',
        ]);

        DB::table('users')->insert([
            'username' => 'hd',
            'password' => bcrypt('hd123'),
            'role' => '2',
        ]);

        DB::table('users')->insert([
            'username' => 'dokter',
            'password' => bcrypt('dokter123'),
            'role' => '3',
        ]);
    }
}
