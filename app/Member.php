<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Loanassign;
use App\Loanpayment;
use App\Thfundmonthcollection;
use App\Thfundmaster;
use App\User;



class Member extends Model
{
    protected $guard = [];

    
    public function loanassigns(){
        return $this->hasMany('App\Loanassign');
    }


    public function loanpayments(){
        return $this->hasMany('App\Loanpayment');
    }


    public function thfundmasters(){
        return $this->hasMany('App\Thfundmaster');
    }


    public function thfundmonthcollections(){
        return $this->hasMany('App\Thfundmonthcollection')->orderBy('id','desc');
    }



    public function user(){
        return $this->belongsToOne('App\User');
    }
}
