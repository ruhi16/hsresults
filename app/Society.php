<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Coopbankloancollection;
use App\Coopbankloanpayment;

class Society extends Model
{
    protected $guard = [];


    public function coopbankloancollections(){
        return $this->hasMany('App\Coopbankloancollection');
    }

    public function coopbankloanpayments(){
        return $this->hasMany('App\Coopbankloanpayment');
    }
}
