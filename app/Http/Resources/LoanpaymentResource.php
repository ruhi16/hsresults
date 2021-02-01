<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoanpaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'member_id' => $this->member_id,
            'loanassign_id' =>  $this->loanassign_id,
            'loan_type' =>  $this->loan_type,
            'previous_balance'  =>  $this->previous_balance,
            'loan_roi' =>  $this->loan_roi,
            'loan_sch'  =>  $this->loan_sch,
            'from_date'=>  $this->from_date,
            'to_date'=>  $this->to_date,
            'no_of_days'=>  $this->no_of_days,
            'loan_int_amt' =>  $this->loan_int_amt,
            'loan_sch_amt'=>  $this->loan_sch_amt,
            'premium_amt'=>  $this->premium_amt,
            'total_amt'=>  $this->total_amt,
            'current_balance'=>  $this->current_balance,
            'loanpayment_date'=>  $this->loanpayment_date,
            'status'=>  $this->satatus,
        ];
    }
}
