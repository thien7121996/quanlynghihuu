<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taikhoan extends Model
{
	protected $table = 'taikhoan';
	public function coquan(){
		return $this->belongsTo('App\coquan','CoQuan','id');
	}

	public function role(){
		return $this->belongsToMany('App\role',"user_role",'user_id','role_id');
	}
}
