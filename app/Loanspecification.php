<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Loanassign;

class Loanspecification extends Model
{
    protected $guard = [];

    
    public function loanassigns(){
        return $this->hasMany('App\Loanassign');
    }
}
