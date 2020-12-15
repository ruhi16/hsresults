<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Member;
use App\Loanassign;
use App\Loanpayment;
use App\Thfundmaster;




class TestController extends Controller
{

    
    public function testresponse(){
        return respons()->json_decode([
            'response' => 'successful'
        ]);
    }
    
    
    public function index()
    {
        $member = Member::find(28);
               
        $loanassigns = $member->loanassigns;        
        
        foreach($loanassigns as $loanassign){
            $loanpayments = $loanassign->loanpayments;            
        }       
        
        // $thfundstatus = $member->thfundmasters;
        // $thfundcollection = $member->thfundmonthcollections;
        
        return response([
            'member'   => $member,
        ]);       
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
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
