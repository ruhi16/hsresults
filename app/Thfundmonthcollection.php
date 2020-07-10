<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Member;
use App\Monthaction;

class Thfundmonthcollection extends Model
{
    protected $guard = [];

    
    public function member(){
        return $this->belongsTo('App\Member');
    }

    public function monthaction(){
        return $this->belongsTo('App\Monthaction');
    }
}
