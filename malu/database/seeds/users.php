<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['name'=>'Pili',
        'email'=>'123@hmsk.com',
        'password' => bcrypt('laravel'),
        'nick'=>'pili',
        'idRol'=>'2',]);

    }
}
