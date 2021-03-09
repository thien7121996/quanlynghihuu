<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\tinh;
use App\huyen;
use App\xa;

class diaphuongController extends Controller
{
	public function index()
	{
		return view('admin.diaphuong');
	}

	public function gettinh(){
		$tinh = tinh::orderBy('id', 'desc')->get();
		return json_encode($tinh, JSON_UNESCAPED_UNICODE);
	}
	public function gethuyen(Request $rq){
		$huyen = huyen::where('MaTinh',$rq->matinh)->orderBy('id', 'desc')->get();
		return json_encode($huyen, JSON_UNESCAPED_UNICODE);
	}
	public function getxa(Request $rq){
		$xa = xa::where('MaHuyen',$rq->mahuyen)->orderBy('id', 'desc')->get();
		return json_encode($xa, JSON_UNESCAPED_UNICODE);
	}

	public function updatetinh(Request $rq){        
		$find = tinh::find($rq->id);     
		$find->TenTinh = $rq->TenTinh;      
		$success = $find->save();    
		return json_encode($success, JSON_UNESCAPED_UNICODE);     
	}

	public function addtinh(Request $rq){
		$data = new tinh();
		$data->TenTinh = $rq->TenTinh;
		$success = $data->save();  
		return json_encode($data, JSON_UNESCAPED_UNICODE);
	}
	public function deltinh(Request $rq){ 
		$dellrole = tinh::where('id',$rq->id)->delete();  
		return json_encode($dellrole, JSON_UNESCAPED_UNICODE);
	}


	public function updatehuyen(Request $rq){        
		$find = huyen::find($rq->id);     
		$find->TenHuyen = $rq->mahuyen; 
		$find->MaTinh = $rq->matinh;       
		$success = $find->save();    
		return json_encode($success, JSON_UNESCAPED_UNICODE);     
	}

	public function addhuyen(Request $rq){
		$data = new huyen();
		$data->TenHuyen = $rq->mahuyen; 
		$data->MaTinh = $rq->matinh;
		$success = $data->save();  
		return json_encode($data, JSON_UNESCAPED_UNICODE);
	}
	public function delhuyen(Request $rq){ 
		$dellrole = huyen::where('id',$rq->id)->delete();  
		return json_encode($dellrole, JSON_UNESCAPED_UNICODE);
	}


	public function updatexa(Request $rq){        
		$find = xa::find($rq->id);     
		$find->TenXa = $rq->TenXa; 
		$find->MaHuyen = $rq->mahuyen;      
		$success = $find->save();    
		return json_encode($success, JSON_UNESCAPED_UNICODE);     
	}

	public function addxa(Request $rq){
		$data = new xa();
		$data->TenXa = $rq->TenXa; 
		$data->MaHuyen = $rq->mahuyen;  
		$success = $data->save();  
		return json_encode($data, JSON_UNESCAPED_UNICODE);
	}
	public function delxa(Request $rq){ 
		$dellrole = xa::where('id',$rq->id)->delete();  
		return json_encode($dellrole, JSON_UNESCAPED_UNICODE);
	}

}
