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
            'name' => 'hirotatsu',
            'email' => 'hirotatsu@test.com',
            'password' => 'hirotatsu',
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@test.com',
            'password' => bcrypt('secret'),
        ]);
    }
}