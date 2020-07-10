<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Monthactionschedule;
use App\Loanassign;
use App\Loanpayment;
use App\Thfundmonthcollection;

class Monthaction extends Model
{
    protected $guard = [];

    
    public function monthactionschedule(){
        return $this->belongsTo('App\Monthactionschedule');
    }


    public function loanassigns(){
        return $this->hasMany('App\Loanassign');
    }


    public function loanpayments(){
        return $this->hasMany('App\Loanpayment');
    }


    public function thfundmonthcollections(){
        return $this->hasMany('App\Thfundmonthcollection');
    }
}
