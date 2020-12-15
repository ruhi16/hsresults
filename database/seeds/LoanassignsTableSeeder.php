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
            ['member_id'=>15,'loan_type'=>'MT', 'loan_amount'=>790000, 'loan_date'=>'42445', 'loan_roi'=>11.5, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>100000],
            ['member_id'=>31,'loan_type'=>'MT', 'loan_amount'=>666000, 'loan_date'=>'42430', 'loan_roi'=>11.5, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>305000],
            ['member_id'=>34,'loan_type'=>'MT', 'loan_amount'=>500000, 'loan_date'=>'42430', 'loan_roi'=>11.5, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>168500],
            ['member_id'=>36,'loan_type'=>'MT', 'loan_amount'=>500000, 'loan_date'=>'42445', 'loan_roi'=>11.5, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>324000],
            ['member_id'=>27,'loan_type'=>'MT', 'loan_amount'=>800000, 'loan_date'=>'42786', 'loan_roi'=>11.5, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>535000],
            ['member_id'=>18,'loan_type'=>'MT', 'loan_amount'=>660000, 'loan_date'=>'42874', 'loan_roi'=>11.5, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>340000],
            ['member_id'=>21,'loan_type'=>'MT', 'loan_amount'=>250000, 'loan_date'=>'43110', 'loan_roi'=>11.5, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>10000],
            ['member_id'=>17,'loan_type'=>'MT', 'loan_amount'=>800000, 'loan_date'=>'43417', 'loan_roi'=>11.25, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>460000],
            ['member_id'=>22,'loan_type'=>'MT', 'loan_amount'=>350000, 'loan_date'=>'43417', 'loan_roi'=>11.25, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>180000],
            ['member_id'=>46,'loan_type'=>'MT', 'loan_amount'=>250000, 'loan_date'=>'43417', 'loan_roi'=>11.25, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>221500],
            ['member_id'=>29,'loan_type'=>'MT', 'loan_amount'=>800000, 'loan_date'=>'43493', 'loan_roi'=>11.25, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>752000],
            ['member_id'=>50,'loan_type'=>'MT', 'loan_amount'=>750000, 'loan_date'=>'43557', 'loan_roi'=>11.25, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>685000],
            ['member_id'=>37,'loan_type'=>'MT', 'loan_amount'=>400000, 'loan_date'=>'43557', 'loan_roi'=>11.25, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>75000],
            ['member_id'=>16,'loan_type'=>'MT', 'loan_amount'=>800000, 'loan_date'=>'43602', 'loan_roi'=>11.25, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>705000],
            ['member_id'=>56,'loan_type'=>'MT', 'loan_amount'=>850000, 'loan_date'=>'43602', 'loan_roi'=>11.25, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>456591],
            ['member_id'=>28,'loan_type'=>'MT', 'loan_amount'=>995000, 'loan_date'=>'43650', 'loan_roi'=>11.25, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>976000],
            ['member_id'=>47,'loan_type'=>'MT', 'loan_amount'=>1000000, 'loan_date'=>'43704', 'loan_roi'=>11.25, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>954000],
            ['member_id'=>24,'loan_type'=>'MT', 'loan_amount'=>400000, 'loan_date'=>'43759', 'loan_roi'=>11.25, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>184500],
            ['member_id'=>44,'loan_type'=>'MT', 'loan_amount'=>500000, 'loan_date'=>'43759', 'loan_roi'=>11.25, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>298000],
            ['member_id'=>13,'loan_type'=>'MT', 'loan_amount'=>1000000, 'loan_date'=>'43784', 'loan_roi'=>11.25, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>940000],
            ['member_id'=>54,'loan_type'=>'MT', 'loan_amount'=>1000000, 'loan_date'=>'43875', 'loan_roi'=>11.25, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>978000],
            ['member_id'=>48,'loan_type'=>'MT', 'loan_amount'=>800000, 'loan_date'=>'43875', 'loan_roi'=>11.25, 'loan_sch'=>0.5, 'loan_term'=>84, 'curr_bal'=>630000],
            
            
            ['member_id'=>36,'loan_type'=>'ST', 'loan_amount'=>40000, 'loan_date'=>'43174', 'loan_roi'=>10, 'loan_sch'=>0, 'loan_term'=>24, 'curr_bal'=>8000],
            ['member_id'=>53,'loan_type'=>'ST', 'loan_amount'=>32000, 'loan_date'=>'43475', 'loan_roi'=>10, 'loan_sch'=>0, 'loan_term'=>24, 'curr_bal'=>15600],
            ['member_id'=>46,'loan_type'=>'ST', 'loan_amount'=>50000, 'loan_date'=>'43501', 'loan_roi'=>10, 'loan_sch'=>0, 'loan_term'=>24, 'curr_bal'=>28500],
            ['member_id'=>16,'loan_type'=>'ST', 'loan_amount'=>50000, 'loan_date'=>'43629', 'loan_roi'=>10, 'loan_sch'=>0, 'loan_term'=>24, 'curr_bal'=>15000],
            ['member_id'=>54,'loan_type'=>'ST', 'loan_amount'=>50000, 'loan_date'=>'43629', 'loan_roi'=>10, 'loan_sch'=>0, 'loan_term'=>24, 'curr_bal'=>38000],
            ['member_id'=>28,'loan_type'=>'ST', 'loan_amount'=>50000, 'loan_date'=>'43627', 'loan_roi'=>10, 'loan_sch'=>0, 'loan_term'=>24, 'curr_bal'=>38000],
            ['member_id'=>47,'loan_type'=>'ST', 'loan_amount'=>50000, 'loan_date'=>'43655', 'loan_roi'=>10, 'loan_sch'=>0, 'loan_term'=>24, 'curr_bal'=>24500],
            ['member_id'=>39,'loan_type'=>'ST', 'loan_amount'=>50000, 'loan_date'=>'43711', 'loan_roi'=>10, 'loan_sch'=>0, 'loan_term'=>24, 'curr_bal'=>19000],
            ['member_id'=>34,'loan_type'=>'ST', 'loan_amount'=>50000, 'loan_date'=>'43801', 'loan_roi'=>10, 'loan_sch'=>0, 'loan_term'=>24, 'curr_bal'=>19500],
            ['member_id'=>31,'loan_type'=>'ST', 'loan_amount'=>50000, 'loan_date'=>'43833', 'loan_roi'=>10, 'loan_sch'=>0, 'loan_term'=>24, 'curr_bal'=>30000],
            ['member_id'=>30,'loan_type'=>'ST', 'loan_amount'=>50000, 'loan_date'=>'43868', 'loan_roi'=>10, 'loan_sch'=>0, 'loan_term'=>24, 'curr_bal'=>5000],
            ['member_id'=>29,'loan_type'=>'ST', 'loan_amount'=>50000, 'loan_date'=>'43906', 'loan_roi'=>10, 'loan_sch'=>0, 'loan_term'=>24, 'curr_bal'=>47000],
            ['member_id'=>50,'loan_type'=>'ST', 'loan_amount'=>50000, 'loan_date'=>'43983', 'loan_roi'=>10, 'loan_sch'=>0, 'loan_term'=>24, 'curr_bal'=>48000],
            
        
            ]);
    }
}
