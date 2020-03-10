<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examdiv extends Model
{
    
    public function Session(){
        return $this->belgonsTo('App\Session');
    }
}
