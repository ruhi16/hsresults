<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\LoanpaymentResource;

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
        $member = Member::find($id);

        $loanassigns = $member->loanassigns; //Loanassign::where('member_id', $id)->get();
        

        $payments = [];

        foreach($loanassigns as $loanassign){
            $payments = $loanassign->loanpayments;

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
