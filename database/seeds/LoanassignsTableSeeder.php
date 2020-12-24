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
            
            
            ['id'=> 26 ,'member_id'=> 34 ,'loanspecification_id'=>Null,'loan_amount'=> 500000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.5 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 168500],
            ['id'=> 28 ,'member_id'=> 36 ,'loanspecification_id'=>Null,'loan_amount'=> 500000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.5 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 324000],
            ['id'=> 36 ,'member_id'=> 27 ,'loanspecification_id'=>Null,'loan_amount'=> 800000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.5 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 535000],
            ['id'=> 39 ,'member_id'=> 18 ,'loanspecification_id'=>Null,'loan_amount'=> 660000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.5 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 340000],
            ['id'=> 40 ,'member_id'=> 21 ,'loanspecification_id'=>Null,'loan_amount'=> 250000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.5 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 10000],
            ['id'=> 43 ,'member_id'=> 17 ,'loanspecification_id'=>Null,'loan_amount'=> 800000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.25 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 460000],
            ['id'=> 44 ,'member_id'=> 22 ,'loanspecification_id'=>Null,'loan_amount'=> 350000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.25 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 180000],
            ['id'=> 45 ,'member_id'=> 46 ,'loanspecification_id'=>Null,'loan_amount'=> 250000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.25 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 221500],
            ['id'=> 48 ,'member_id'=> 29 ,'loanspecification_id'=>Null,'loan_amount'=> 800000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.25 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 752000],
            ['id'=> 49 ,'member_id'=> 50 ,'loanspecification_id'=>Null,'loan_amount'=> 750000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.25 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 685000],
            ['id'=> 50 ,'member_id'=> 37 ,'loanspecification_id'=>Null,'loan_amount'=> 400000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.25 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 75000],
            ['id'=> 52 ,'member_id'=> 16 ,'loanspecification_id'=>Null,'loan_amount'=> 800000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.25 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 705000],
            ['id'=> 53 ,'member_id'=> 56 ,'loanspecification_id'=>Null,'loan_amount'=> 850000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.25 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 456591],
            ['id'=> 54 ,'member_id'=> 28 ,'loanspecification_id'=>Null,'loan_amount'=> 995000 ,'loan_type'=> 'MT' ,'loan_roi'=> 11.25 ,'loan_sch'=> 0.5 ,'loan_term'=> 84 ,'loan_date'=>Null,'coopbankloancollection_id'=> 0 ,'curr_bal'=> 976000],

            
        
            ]);
    }
}
