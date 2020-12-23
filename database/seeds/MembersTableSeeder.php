<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([  
            ['id'=> 10 ,'user_id'=> 0 ,'name'=>'Md. Miftahul Islam Beg','designation'=>'Headmaster/TIC','membership_no'=>'22','membership_date'=>'','pan_no'=>'0','account_no'=>'0977010216319','society_id'=> 1 ,'is_loan_issued'=>'','status'=>'Inactive','remarks'=>''],


            
        ]);
    }
}
