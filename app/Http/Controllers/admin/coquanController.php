<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\coquan;
use App\tinh;
use App\huyen;
use App\xa;

class coquanController extends Controller
{
	public function index()
	{
		return view('admin.coquan');
	}

	public function getcoquan(){
		$coquan = coquan::with(["tinh" => function($qr){
			$qr->with('huyen');
		}])->get();
		$tinh = tinh::all();
		$huyen = huyen::all();
		$xa = xa::all();
		return json_encode([$coquan,$tinh,$huyen,$xa], JSON_UNESCAPED_UNICODE);
	}

	public function updatecoquan(Request $rq){        
		$find = coquan::find($rq->id);     
		$find->Ten = $rq->Ten;
		$find->DiaChi = $rq->DiaChi;
		$find->Tinh = $rq->Tinh;
		$find->Huyen = $rq->Huyen;
		$find->Xa = $rq->Xa;      
		$success = $find->save();    
		return json_encode($success, JSON_UNESCAPED_UNICODE);     
	}

	public function addcoquan(Request $rq){
		$data = new coquan();
		$data->Ten = $rq->Ten;
		$data->DiaChi = $rq->DiaChi;
		$data->Tinh = $rq->Tinh;
		$data->Huyen = $rq->Huyen;
		$data->Xa = $rq->Xa;
		$success = $data->save();  
		return json_encode($data, JSON_UNESCAPED_UNICODE);
	}
	public function delcoquan(Request $rq){ 
		$dellcoquan = coquan::where('id',$rq->id)->delete();  
		return json_encode($dellcoquan, JSON_UNESCAPED_UNICODE);
	}
	public function deltoanbocoquan(Request $rq){
		$dellcoquan = coquan::delete();    
		return json_encode($dellcoquan, JSON_UNESCAPED_UNICODE);
	}
}
