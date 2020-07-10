<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Loanassign;
use App\Loanpayment;
use App\Thfundmonthcollection;



class Member extends Model
{
    protected $guard = [];

    
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
