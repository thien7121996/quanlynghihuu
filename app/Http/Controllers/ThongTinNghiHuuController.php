<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\Thongtinnghihuu;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
class ThongTinNghiHuuController extends Controller
{
	
	public function addthongtinnghihuu(Request $request){
			$data =  Thongtinnghihuu::where("hoso","=",$request->id)->get();
			$hosoCount = $data->count();
		
   if($hosoCount==0)
   {
   	 $thongtinnghihuu =  Thongtinnghihuu::create([
        'hinhthucnghihuu' => "1",
        'ngaynghihuu' => "",
        'soquyetdinh' => "",
        'ngayquyetdinh' => "",
        'coquanquyetdinh' => "",
        'trangthainghihuu' => "1",
        'hoso' => $request->id,
      ]);
   }
		 
    return response()->json('Tạo thành công');
	}
	public function updatethongtinnghihuu(Request $request,$id){

		  DB::table('thongtinnghihuu')
            ->where('id', $id)
            ->update([
             'hinhthucnghihuu' => $request->get('hinhthucnghihuu'),
             'ngaynghihuu' => $request->get('ngaynghihuu'),
             'soquyetdinh' => $request->get('soquyetdinh'),
             'ngayquyetdinh' => $request->get('ngayquyetdinh'),
             'coquanquyetdinh' => $request->get('coquanquyetdinh'),
             'trangthainghihuu' => $request->get('trangthainghihuu')
             ]);
      return response()->json('Tạo thành công');
	}
		public function updatetrangthaixuly(Request $request,$id){

		  DB::table('thongtinnghihuu')
            ->where('id', $id)
            ->update([
             'trangthainghihuu' => "2"
             ]);
      return response()->json('Tạo thành công');
	}
	public function updatetrangthaiduyet(Request $request,$id){

		  DB::table('thongtinnghihuu')
            ->where('id', $id)
            ->update([
             'trangthainghihuu' => "3"
             ]);
      return response()->json('Tạo thành công');
	}
	public function tinhngay(Request $request){

		 $datetime1 = strtotime("2021-03-19T17:00:00.000Z");
		$datetime2 = strtotime("now");
$interval = (int)(($datetime2 - $datetime1)/86400);
      return $interval;
	}
	public function deletethongtinnghihuu($id)
    {
      $thongtinnghihuu = Thongtinnghihuu::where('id',"=",$id);
      $thongtinnghihuu->delete();
      return response()->json('Xóa thành công');
    }
	

public function demhosoChoDuyet(){
			$hoso = Thongtinnghihuu::where('trangthainghihuu',"=","1")->get();
			$hosoCount = $hoso->count();

		return $hosoCount;
	}
public function demhosoXuLy(){
			$hoso = Thongtinnghihuu::where('trangthainghihuu',"=","2")->get();
			$hosoCount = $hoso->count();

		return $hosoCount;
	}
	public function demhosoDaNghiHuu(){
			$hoso = Thongtinnghihuu::where('trangthainghihuu',"=","3")->get();
			$hosoCount = $hoso->count();

		return $hosoCount;
	}



}
