<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Member;
use App\Monthaction;
use App\Loanpayment;
use App\Loanspecification;

class Loanassign extends Model
{
    protected $guard = [];

    
    public function member(){
        return $this->belongsTo('App\Member');
    }

    public function monthaction(){
        return $this->belongsTo('App\Monthaction');
    }

    public function loanpayments(){
        return $this->hasMany('App\Loanpayment')->orderBy('id','desc');
    }

    public function loanspecification(){
        return $this->hasMany('App\Loanspecification');
    }
}
