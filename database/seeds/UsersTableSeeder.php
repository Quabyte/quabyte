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
            'name' => 'Dovakhin',
            'email' => 'quabyte@protonmail.com',
            'password' => bcrypt('CPGKhrs7V7')
        ]);
    }
}
