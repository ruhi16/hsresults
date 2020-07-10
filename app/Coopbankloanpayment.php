<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Society;
use App\Coopbankloancollection;

class Coopbankloanpayment extends Model
{
    protected $guard = [];

    
    public function society(){
        return $this->belongsTo('App\Society');
    }

    public function coopbankloancollections(){
        return $this->hasMany('App\Coopbankloancollection');
    }
}
