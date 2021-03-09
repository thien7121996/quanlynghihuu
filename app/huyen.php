<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class huyen extends Model
{
    protected $table = 'huyen';

    public function xa(){
		return $this->hasMany('App\xa','MaHuyen','id');
	}

}
