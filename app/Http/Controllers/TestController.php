<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;
use App\Loanassign;



class TestController extends Controller
{
    public function member(){
        $members = Member::all();
        

        foreach($members as $member){
            echo $member->name;

            $loanassigns = $member->loanassigns;
            foreach($loanassigns as $loan){
                echo ", Loan: ". $loan->loan_amount;
            }
            echo "<br><br>";
        }



        $loanassigns = Loanassign::all();
        foreach($loanassigns as $loanassign){
            echo $loanassign->loan_amount . ": ";
            echo $loanassign->member->name;
            echo "<br>";
        }
        
    }
}
