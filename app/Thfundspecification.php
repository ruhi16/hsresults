<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Thfundmonthcollection;

class Thfundspecification extends Model
{
    protected $guard = [];
    protected $fillable = ['member_id','monthly_premium','yearly_roi','date_of_activation','status'];

    
    public function thfundmonthcollections(){
        return $this->hasMany('App\Thfundmonthcollection');
    }
}
