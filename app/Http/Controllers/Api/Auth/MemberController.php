<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

use App\Http\Resources\LoanpaymentResource;

use Carbon\Carbon;

use App\Member;
use App\Loanassign;
use App\Loanpayment;

class MemberController extends Controller{
        
    public function index(){
        $members = Member::all();


        return response()->json([
            'members' => $members
        ]);
    }

   
    public function create(){
        //
    }
    
    
    public function store(Request $request){
        //
    }

  
    public function show($id){
        //$member = Member::find($id);
        $member = Auth::user()->member();

        $loanassigns = $member->loanassigns; //Loanassign::where('member_id', $id)->get();
        

        $payments = [];

        if($loanassigns != Null){
            foreach($loanassigns as $loanassign){
                $payments = $loanassign->loanpayments;

            }
        }
        $thfundstatus = $member->thfundmasters;
        $thfundcollection = $member->thfundmonthcollections;

        return response()->json([
            'member' => $member,
            
        ]);
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
