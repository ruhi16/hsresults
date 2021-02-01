<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Member;
use App\Monthaction;
use App\Loanassign;

class Loanpayment extends Model
{
    protected $guard = [];
    protected $fillable = ['member_id','loanassign_id','loan_type','previous_balance','from_date','loan_roi','loan_sch','to_date','no_of_days','loan_int_amt','loan_sch_amt'];

    
    public function member(){
        return $this->belongsTo('App\Member');
    }

    public function monthaction(){
        return $this->belongsTo('App\Monthaction');
    }

    public function loanassign(){
        return $this->belongsTo('App\Loanassign');
    }
}
