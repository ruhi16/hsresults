<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Member;
use App\Monthaction;

class Thfundmonthcollection extends Model
{
    protected $guard = [];
    protected $fillable = ['member_id','thfundmaster_id', 'year_roi', 'month_premium', 'for_month','for_year','thfund_collection_date','status','remarks'];

    
    public function member(){
        return $this->belongsTo('App\Member');
    }

    public function monthaction(){
        return $this->belongsTo('App\Monthaction');
    }
}
