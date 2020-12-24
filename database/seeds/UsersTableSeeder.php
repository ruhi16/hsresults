<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            
            ['id'=>10, 'name'  => 'Hari Narayan',  'email' =>  'abc1@gmail.com',   'password'  =>  bcrypt('password'),],
            ['id'=>11, 'name'  => 'Hari Narayan',  'email' =>  'abc2@gmail.com',   'password'  =>  bcrypt('password'),],            

        ]);

       
    }
}
