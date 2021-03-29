<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberDetail extends Model
{
    public function member()
    {
    	return $this->hasOne(\App\member::class ,'id','member_id');
    }
}
