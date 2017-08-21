<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       DB::table('roles')->insert([
           'title' => 'admin',
       ]);

       DB::table('users')->insert([
           'name' => 'admin',
           'email' => 'admin@gmail.com',
           'role_id' => 1,
           'password' => bcrypt('password'),
       ]);
        DB::table('navigations')->insert([
            'title' => 'Home',
            'parent_id' => 0,
            'url' => '/',
            'status' => 1,
        ]);

    }
}
