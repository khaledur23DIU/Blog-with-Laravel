<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'role_id' => '1',
            'name' => 'KR Tito',
            'username' => 'admin',
            'email' => 'admin@master.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Jhon Doe',
            'username' => 'author',
            'email' => 'author@master.com',
            'password' => bcrypt('password'),
        ]);
    }
}
