<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hinhthucnghihuu;

class HinhThucNghiHuuController extends Controller
{
	

	public function getHinhThucNghiHuu(){
		$data =  Hinhthucnghihuu::get();

		return json_encode([$data], JSON_UNESCAPED_UNICODE);
	}
	






}
