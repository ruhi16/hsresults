<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Society;
use App\Coopbankloanpayment;

class Coopbankloancollection extends Model
{
    protected $guard = [];

    
    public function society(){
        return $this->belongsTo('App\Society');
    }

    public function coopbankloanpayment(){
        return $this->belongsTo('App\Coopbankloanpayment');
    }
}
