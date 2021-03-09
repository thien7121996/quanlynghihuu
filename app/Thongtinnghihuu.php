<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thongtinnghihuu extends Model
{
    	protected $table = 'thongtinnghihuu';
    	protected $fillable = ['hinhthucnghihuu','ngaynghihuu','soquyetdinh','ngayquyetdinh','coquanquyetdinh','trangthainghihuu','hoso'];
}
