<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Member;
use App\Loanassign;
use App\Loanpayment;
use App\Thfundmaster;
use App\Thfundspecification;

class ThfundspecificationController extends Controller
{

    public function index()
    {
        echo "Hello it is index of ThfundspecificationController resource";
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $thfundspecification = Thfundspecification::firstOrNew([
            'monthly_premium'   => $request->monthly_premium,
            'yearly_roi' => $request->yearly_roi,
            'date_of_activation' => $request->date_of_activation,
            'status' => $request->status,

        ]);

        $flag = $thfundspecification->save();

        // echo $thfundspecification;

        if($flag){
            return response()->json([
                'success'   =>  true,
                'thfundspecification'  => $thfundspecification,

            ],200);

        }else {
            return response()->json([
                'success'   =>  false,
                'thfundspecification'  => $thfundspecification,

            ],200);

        }

    }

    public function show(Thfundspecification $thfundspecification)
    {
        //
    }

    public function edit(Thfundspecification $thfundspecification)
    {
        //
    }


    public function update(Request $request, Thfundspecification $thfundspecification)
    {
        //
    }


    public function destroy(Thfundspecification $thfundspecification)
    {
        //
    }
}
