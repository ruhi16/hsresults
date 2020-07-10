<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Thfundmonthcollection;

class Thfundspecification extends Model
{
    protected $guard = [];

    
    public function thfundmonthcollections(){
        return $this->hasMany('App\Thfundmonthcollection');
    }
}
