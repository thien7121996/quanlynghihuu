<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coquan extends Model
{
     protected $table = 'coquan';

     public function tinh(){
		return $this->belongsTo('App\tinh','Tinh','id');
	}
	public function huyen(){
		return $this->hasMany('App\huyen','MaTinh','id');
	}
	public function xa(){
		return $this->hasMany('App\xa','MaHuyen','id');
	}
}
