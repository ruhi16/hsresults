<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        
        $this->call(UsersTableSeeder::class);
        $this->call(MembersTableSeeder::class);
        $this->call(LoanassignsTableSeeder::class);
        $this->call(LoanpaymentsTableSeeder::class); //make 50 rec at a time
        $this->call(ThfundmastersTableSeeder::class);
        $this->call(ThfundmonthcollectionsTableSeeder::class);
        $this->call(ShfundmasterSeeder::class);



    }
}
