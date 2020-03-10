<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clss extends Model
{
    public function Session(){
        return $this->belgonsTo('App\Session', 'session_id'); //FK: session_id
    }
}
