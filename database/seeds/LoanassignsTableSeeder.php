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
            ['id'=> 57 ,'member_id'=> 24 ,'loanspecification_id'=>Null,'loan_amount'=> 400000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.25 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 184500],
            ['id'=> 58 ,'member_id'=> 44 ,'loanspecification_id'=>Null,'loan_amount'=> 500000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.25 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 298000],
            ['id'=> 59 ,'member_id'=> 13 ,'loanspecification_id'=>Null,'loan_amount'=> 1000000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.25 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 940000],
            ['id'=> 60 ,'member_id'=> 54 ,'loanspecification_id'=>Null,'loan_amount'=> 1000000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.25 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 978000],
            ['id'=> 61 ,'member_id'=> 48 ,'loanspecification_id'=>Null,'loan_amount'=> 800000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.25 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 630000],


        
            ]);
    }
}
