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
    public function thfundmonthcollection(Request $request, $id){
        //$member = Auth::user()->member;
        $member = Member::find($id);

        $thfundmaster = Thfundmaster::where('member_id', $member->id)->first();//where(max(id))

        
         $thfundspecification = Thfundspecification::where('id', Thfundspecification::max('id'))->first();
        

        $now = Carbon::now();
        // $thfundmonthcollections = Thfundmonthcollection::where('member_id', $member->id)
        //         ->where('for_month', 1)//$now->month
        //         ->where('for_year', $now->year)->get();
        // var_dump($thfundmonthcollections);
        //echo "thfundmonthcollection:",$id;
        //$abcd = Thfundefination::first();
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
 
        


        return response()->json([
            'thfundmonthcollection'  => $thfundmonthcollection,
            'month' => 1,
            'year' => $now->year,
            'thfundspecification'  => $thfundspecification
            
        ]);

    }
}
