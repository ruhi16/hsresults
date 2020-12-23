<?php

use Illuminate\Database\Seeder;

class LoanassignsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loanassigns')->insert([  
            
            ['id'=> 24 ,'member_id'=> 31 ,'loanspecification_id'=>Null,'loan_amount'=> 666000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.5 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 305000],
            
        
            ]);
    }
}
