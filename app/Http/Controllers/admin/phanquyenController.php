<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\tinh;
use App\huyen;
use App\role;

class phanquyenController extends Controller
{
    public function index()
	{
		return view('admin.phanquyen');
	}

	public function getquyen(){
		$role = role::all();
		return json_encode([$role], JSON_UNESCAPED_UNICODE);
	}

	public function updaterole(Request $rq){        
		$find = role::find($rq->id);     
		$find->name = $rq->role;      
		$success = $find->save();    
		return json_encode($success, JSON_UNESCAPED_UNICODE);     
	}

	public function addrole(Request $rq){
		$data = new role();
		$data->name = $rq->role;
		$success = $data->save();  
		return json_encode($data, JSON_UNESCAPED_UNICODE);
	}
	public function delrole(Request $rq){ 
		$dellrole = role::where('id',$rq->id)->delete();  
		return json_encode($dellrole, JSON_UNESCAPED_UNICODE);
	}
	public function deltoanborole(Request $rq){
		$dellrole = role::truncate();    
		return json_encode($dellrole, JSON_UNESCAPED_UNICODE);
	}
}
