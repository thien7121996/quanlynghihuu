<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\taikhoan;
use App\coquan;
use App\tinh;
use App\huyen;
use App\role;
use App\user_role;
class taikhoanController extends Controller
{
	public function index()
	{
		return view('admin.taikhoan');
	}

	public function gettaikhoan(){
		$data =  taikhoan::with('role')->get();
		$coquan = coquan::all();
		$role = role::all();
		return json_encode([$data,$coquan,$role], JSON_UNESCAPED_UNICODE);
	}
	public function updatetaikhoan(Request $rq){
		$id = $rq->id;
		$role = $rq->role;

		$data = taikhoan::find($id);
		$data->tendangnhap = $rq->tendangnhap;
		$data->CoQuan = $rq->CoQuan; 
		$success = $data->save();     

		if($role != null){
			$roledell = user_role::where('user_id',$id)->truncate();
			foreach ($role as $key) {				
				$role = new user_role();
				$role->user_id = $id; 
				$role->role_id = $key; 
				$success = $role->save();
			}
		}   
		return json_encode($data, JSON_UNESCAPED_UNICODE);
	}

	public function updatepassword(Request $rq){        
		$find = taikhoan::find($rq->id);     
		$find->password = Hash::make($rq->password);      
		$success = $find->save();       
		return json_encode($success, JSON_UNESCAPED_UNICODE); 
	}

	public function addtaikhoan(Request $rq){
		$data = new taikhoan();
		$data->tendangnhap = $rq->taikhoan;
		$data->password = Hash::make($rq->matkhau);  
		$data->CoQuan = $rq->coquan;   
		$success = $data->save();  

		$idtaikhoan = taikhoan::where('tendangnhap',$rq->taikhoan)->select('id')->first();  

		$role = $rq->quyen;    
		if($role != null){
			foreach ($role as $key) {				
				$role = new user_role();
				$role->user_id = $idtaikhoan->id; 
				$role->role_id = $key; 
				$success = $role->save();
			}
		}  

		return json_encode($data, JSON_UNESCAPED_UNICODE);
	}

	public function delltaikhoan(Request $rq){
		$idtaikhoan = taikhoan::where('id',$rq->id)->delete();   
		$delluser_role = user_role::where('user_id',$rq->id)->delete();  
		return json_encode($idtaikhoan, JSON_UNESCAPED_UNICODE);
	}

	public function resetpassword(Request $rq){        
		$find = taikhoan::find($rq->id);     
		$find->password = Hash::make('123456');      
		$success = $find->save();      
		return json_encode($success, JSON_UNESCAPED_UNICODE);  
	}


















}
