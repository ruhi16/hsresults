<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;
use App\Loanassign;
use App\Loanpayment;






class TestController extends Controller
{
    public function member(){

        $data = [];

        $member = Member::find(16);
               
        

        $loanassigns = $member->loanassigns;
        $thfundstatus = $member->thfundmonthcollections;

        // print_r($thfundstatus);

        foreach($loanassigns as $loanassign){
            
            // echo "Loan Assign:" . $loanassign->loan_amount;
            // echo "<br>";
            // print_r($loanassign->loanpayments);


            // echo "<br><br><br>";
        }
        


        $data = response([
            'member' => $member,
            'loanassigns' => $member->loanassigns,
            'thfundstatus' => $member->thfundmonthcollections,
            

            
        ]);
        
        dd(json_decode($member));

        // foreach($members as $member){
        //     echo $member->name;
        //     $loanassigns = $member->loanassigns;
        //     foreach($loanassigns as $loan){
        //         echo ", Loan: ". $loan->loan_amount;
        //     }
        //     echo "<br>";
        // }



        // $loanassigns = Loanassign::all();
        // foreach($loanassigns as $loanassign){
        //     echo $loanassign->loan_amount . ": ";
        //     echo $loanassign->member->name;
        //     echo "<br>";
        // }
        


    }
}
