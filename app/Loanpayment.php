<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Member;
use App\Monthaction;
use App\Loanassign;

class Loanpayment extends Model
{
    protected $guard = [];

    
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
