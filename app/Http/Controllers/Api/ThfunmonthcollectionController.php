<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Resources\LoanpaymentResource;

use Carbon\Carbon;

use App\Loanpayment;
use App\Loanassign;
use App\Thfundmaster;
use App\Thfundmonthcollection;
use App\Thfundspecification;
use App\Thfundefination;
use App\Member;

class ThfunmonthcollectionController extends Controller
{

    public function thfundmonthstatus(Request $request, $id){
        //$member = Auth::user()->member;
        $member = Member::find($id);

        $now = Carbon::now();

        $thfundcurrmonthcollection = Thfundmonthcollection::where([
            'member_id' => $member->id,
            'for_month' => $now->month,
            'for_year'  => $now->year,
        ])->first();


        if($thfundcurrmonthcollection){
            return response()->json([
                'status' => true,
                'thfundcurrmonthcollection' => $thfundcurrmonthcollection,
                'month' => $now->month,
                'year' => $now->year,                
                'member_id' => $id,
            ]);    
        }else{
            return response()->json([
                'status' => false,
                'month' => $now->month,
                'year' => $now->year,
                'member_id' => $id,
            ]);    
        }

            
    }


    public function thfundmonthcollection(Request $request, $id){
        //$member = Auth::user()->member;
        $member = Member::find($id);

        $thfundmaster = Thfundmaster::where('member_id', $member->id)->first();//where(max(id))

        
        $thfundspecification = Thfundspecification::where('id', Thfundspecification::max('id'))->first();
        

        $now = Carbon::now();
     
        $thfundmonthcollection = Thfundmonthcollection::firstOrNew([
            'member_id' => $member->id,
            //'thfundmaster_id'   => null,
            'for_month' => $now->month,
            'for_year'  => $now->year,
            ]);
        
        $thfundmonthcollection->thfundmaster_id = $thfundmaster->id;
        $thfundmonthcollection->year_roi = $thfundspecification->yearly_roi; //$thfundspecification->yearly_roi;
        $thfundmonthcollection->month_premium = $thfundspecification->monthly_premium; //$thfundspecification->monthly_
        $thfundmonthcollection->thfund_collection_date = $now;
        $thfundmonthcollection->status = 'active';
        $thfundmonthcollection->remarks = 'na';

        $thfundmonthcollection->save();
 
        


        return response()->json([
            'thfundmonthcollection'  => $thfundmonthcollection,
            'month' => 1,
            'year' => $now->year,
            'thfundspecification'  => $thfundspecification
            
        ]);

    }
}
