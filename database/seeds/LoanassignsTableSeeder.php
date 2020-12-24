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

            ['id'=> 56 ,'member_id'=> 47 ,'loanspecification_id'=>Null,'loan_amount'=> 1000000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.25 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 954000],

        
            ]);
    }
}
