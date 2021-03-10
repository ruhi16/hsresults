<?php

namespace App;

use App\Member;

use Illuminate\Database\Eloquent\Model;

class Thfundmaster extends Model
{
    protected $guard = [];
    protected $fillable = ['member_id','op_balance','op_balance_date','total_month','total_collection','total_interest','cl_balance','cl_balance_date','status'];

    public function Member(){
        return $this->belongsTo("App\Thfundmaster")->orderBy('id','desc');
    }
    
}
