<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Resources\LoanpaymentResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Loanpayment;
use App\Loanassign;
use App\Member;


class LoanpaymentController extends Controller{
    //GET
    public function monthInitialisation($id){
        //$member = Auth::user()->member;
        $member = Member::find($id);
        $loanassigns = $member->loanassigns;
        
        //$last_loanpayment = [];
        foreach($loanassigns as $loanassign){
            // echo "Loanassign:", $loanassign->loan_type, ": ", $loanassign->id, ", curr bal: ", $loanassign->curr_bal, "<br>";
            
            // add one more condition for add new record
            if($loanassign->curr_bal > 0){
                // echo "loanassign->curr_bal > 0", "<br>";
                // echo "=========== start of for =========================<br/>";
                $loanassign->loanpayments;
                $last_loanpayment = $loanassign->loanpayments()->orderByDesc('id')->first();

                // echo "The existing record:";
                // echo $last_loanpayment, "<br/>";
                
                // not the starting loanpayement
                if($last_loanpayment != Null){
                    // echo "Last Loanpayment is not Null, LP cont: ", $last_loanpayment->id, "<br/>";                

                    if($last_loanpayment->loanpayment_date == Null){
                        // echo "Highest ID Loanpayment Date is Null, ", "<br/>";
                        // echo "Retrive Entry: before compair with curr_date <br/>";
                        $from_date = Carbon::parse($last_loanpayment->from_date);
                        $to_date = Carbon::parse($last_loanpayment->to_date);

                    } else {
                        // echo "Highest ID Loanpayment Date is Not Null, ", $last_loanpayment->loanpayment_date,"<br/>";
                        
                        $curr_date = Carbon::createFromFormat('Y-m-d', '2021-03-25');
                        //$curr_date = Carbon::now()->toDateString();
                        // echo "Curr Date:",$curr_date, "<br/>";                    

                        // add one more condition for add new record
                        if($curr_date > $last_loanpayment->to_date){
                            // echo "New Entry: after compair with curr_date, curr_date = $curr_date > to_date = $last_loanpayment->to_date <br/>";
                            $from_date = Carbon::parse($last_loanpayment->to_date)->addDays(1);//->format('Y-m-d')
                            $to_date = $from_date->copy()->endOfMonth();
                        }else{
                            // echo "Retrive Entry: after compair with curr_date, curr_date = $curr_date <= to_date = $last_loanpayment->to_date <br/>";
                            $from_date = Carbon::parse($last_loanpayment->from_date);
                            $to_date = Carbon::parse($last_loanpayment->to_date);
                        }
                    }                
                } else {
                    // echo "Last Loanpayment is not Null, LP initialization completed", "<br/>";   
                    //1st loan payment
                    // echo "New First Entry:<br/>";
                    $from_date = Carbon::parse($loanassign->loanassign_date);
                    $to_date = $from_date->copy()->endOfMonth();
                }

                $diff_in_days = $to_date->diffInDays($from_date) + 1;
                $loan_int = round(($loanassign->curr_bal*$loanassign->loan_roi/100)/365*$diff_in_days, 0, PHP_ROUND_HALF_UP);
                $loan_sch = round(($loanassign->curr_bal*$loanassign->loan_sch/100)/365*$diff_in_days, 0, PHP_ROUND_HALF_UP);

                // echo "From Date: ", $from_date, "<br/>";
                // echo "To Date: ", $to_date, "<br/>";
                // echo "Diff in days: ", $diff_in_days, "<br/>";
                

                $loanpayment = Loanpayment::firstOrNew([
                    'member_id'         => $member->id,
                    'loanassign_id'     => $loanassign->id,
                    'loan_type'         => $loanassign->loan_type,
                    'previous_balance'  => $loanassign->curr_bal,
                    'loan_roi'          => $loanassign->loan_roi,
                    'loan_sch'          => $loanassign->loan_sch,
                    'from_date'         => $from_date->toDateTimeString(),
                    'to_date'           => $to_date->toDateTimeString(),
                    // 'no_of_days'        => $diff_in_days,
                //     'loan_int_amt'      => $loan_int,
                //     'loan_sch_amt'      => $loan_sch,
                ]);

                $loanpayment->no_of_days = $diff_in_days;
                $loanpayment->loan_int_amt = $loan_int;
                $loanpayment->loan_sch_amt = $loan_sch;
                $loanpayment->status = "pending";
                
                $loanpayment->Save();
                
                // echo "Loan Payment:", $loanpayment,"<br/>";
                // echo "Loan Payment Days:", $loanpayment->no_of_days,"<br/>";
            
                // echo "=========== end of for =========================<br/>";
            
            }// end of if($loanassign->curr_bal > 0)
            // echo "<br>";
        }// end of for

        //$lpresource = new LoanpaymentResource($loanpayment);
        // echo $lpresource->toJson(JSON_PRETTY_PRINT);

        
        //to get updated records
        //$member = Auth::user()->member;
        $member = Member::find($id);
        $loanassigns = $member->loanassigns;
        $loanpayments =[];
        foreach($loanassigns as $loanassign){            
            $loanassign->loanpayments;
            //$loanpayments = $loanpayments->sortByDesc('id');

        }




        // return "Members Loan Payment Month Initialisation: $member";
        return response()->json([
            'member'    => $member,
            //'loayments'         =>$loanpayments
            // 'loanpayment'    => $lpresource,
            
        ]);
    }





    //POST
    public function monthPayments(Request $request, $id){        
        //$member = Auth::user()->member;
        $member = Member::find($id);
        $loanassigns = $member->loanassigns;
        
        $loanpayment = Loanpayment::find($request->loanpayment_id);


        
        $check = $loanassigns->where('id', $loanpayment->loanassign_id)->first();
        // echo "Check: ", $check;

        if($check != Null){
            $loanpayment->premium_amt = (float) $request->premium_amt;
            $loanpayment->total_amt = (float) $request->premium_amt + (float) $loanpayment->loan_int_amt + (float) $loanpayment->loan_sch_amt;
            $loanpayment->current_balance = (float) $loanpayment->previous_balance - (float) $request->premium_amt;
            $loanpayment->loanpayment_date = $request->loanpayment_date;
            $loanpayment->status = "done";
            $loanpayment->remarks = $request->remarks;
            $loanpayment->save();

            $loanassign = Loanassign::find($request->loanassign_id);
            $loanassign->curr_bal = $loanpayment->current_balance;
            $loanassign->save();


            //to get updated member loanpayments records
            //$member = Auth::user()->member;
            $member = Member::find($id);
            $loanassigns = $member->loanassigns;
            foreach($loanassigns as $loanassign){            
                $loanassign->loanpayments;
            }




            // return "post-loanpayment of $id is: $email";
            return response()->json([
                // 'message'   => 'Successfully Completed',
                // 'member' => $member,

                
            ]);
        } else {
            return response()->json([
                // 'message'=>"Not Found!"

            ]);
        }
    }


    //PUT
    public function monthUpdate(Request $request, $id){
        $str = $id;//$request->member_id;
        //return "put reqeust: " + $str;
        return response()->json([
            'message'=> $str

        ]);
    }


    //DELETE
    public function monthDelete(Request $request, $id){
        //return ('delete'); 
         //to get updated records
        //$member = Auth::user()->member;
        $member = Member::find($id);
        // $loanassigns = $member->loanassigns;
        // foreach($loanassigns as $loanassign){            
        //     $loanpayments = $loanassign->loanpayments;
        //     //$loanpayment = $loanpayments->sortByDesc('id')->first();
        //     //$loanpayment = $loanpayments->max('id');
        //     //echo $loanpayment, "<br>";
        // }

        $loanpayment = Loanpayment::find($request->loanpayment_id);
        $loanpayment->delete();

        
        return response()->json([
            'member' => $member,
            'loanpayment' => $loanpayment,
            'member_id' => $request->member_id,
            'loanpayment_id'=> $request->loanpayment_id,
        ]);

    }







    public function index(){
        //
    }


    public function create(){
        //
    }


    public function store(Request $request){
        //
    }


    public function show(Loanpayment $loanpayment){
        //
    }


    public function edit(Loanpayment $loanpayment){
        //
    }


    public function update(Request $request, Loanpayment $loanpayment){
        //
    }


    public function destroy(Loanpayment $loanpayment){
        //
    }
}




                // echo "<br/>";
                // echo "<br/>";
                
                // echo "<br/>";
                // echo "lp date(db): ", $last_loanpayment->loanpayment_date;

                // $now = Carbon::now();//Carbon::createFromString($last_loanpayment->loanpayment_date);
                // $lpdate = Carbon::createFromFormat('Y-m-d', $last_loanpayment->loanpayment_date);
                
                // echo "<br/>";
                // echo "now: ", $now;
                // echo ", india", Carbon::now()->addDays(1)->format('Y-m-d');
                
                // echo "<br/>";
                // echo "lp date(carbon): ",$lpdate;