<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function Session(){
        return $this->belgonsTo('App\Session');
    }
}
