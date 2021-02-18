<?php

namespace App;

use App\Member;

use Illuminate\Database\Eloquent\Model;

class Thfundmaster extends Model
{
    protected $guard = [];

    public function Member(){
        return $this->belongsTo("App\Thfundmaster")->orderBy('id','desc');
    }
    
}
