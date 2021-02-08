<?php

use Illuminate\Database\Seeder;

class LoanpaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // run        "php artisan db:seed"   command in 2 steps

        DB::table('loanpayments')->insert([  

            ['member_id'=>13, 'loanassign_id'=>59, 'loan_type' =>'MT','previous_balance'=>970000, 'loan_roi'=>11.25, 'loan_sch'=>0.5,'from_date'=>'2020-03-01 04:05:06','to_date'=>'2020-03-01','no_of_days'=>31,'loan_int_amt'=>9268,'loan_sch_amt'=>412,'premium_amt'=>10000,'total_amt'=>19680,'current_balance'=>960000],

        ]);
    }
}
