<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    

    public function clsses(){
        return $this->hasMany('App\Clss', 'session_id');//FK: session_id
    }
    public function sections(){
        return $this->hasMany('App\Section');
    }
    public function subjects(){
        return $this->hasMany('App\Subject');
    }
    public function teachers(){
        return $this->hasMany('App\Teacher');
    }
    public function exams(){
        return $this->hasMany('App\Exam');
    }
    public function examdivs(){
        return $this->hasMany('App\Examdiv');
    }
    public function studentdb(){
        return $this->hasMany('App\Studentdb');        
    }
    public function studentcr(){
        return $this->hasMany('App\Studentcr');        
    }
    public function studentdbsubj(){
        return $this->hasMany('App\Studentdbsubj');        
    }
}
