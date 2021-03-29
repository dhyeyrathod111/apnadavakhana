<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function memberdetail()
    {
    	return $this->hasOne(\App\MemberDetail::class ,'member_id','id');
    }
}
