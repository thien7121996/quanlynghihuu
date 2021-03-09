<?php

namespace App\Http\Controllers\quanlihs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\hoso;

class hosoController extends Controller
{
	
	public function getallhoso(){
		$data =  hoso::leftjoin('chucvudang', 'chucvudang.id', '=', 'hoso.ChucVuDang')->leftjoin('nghidinh24hoso', 'hoso.id', '=', 'nghidinh24hoso.hoso')->leftjoin('ngach', 'ngach.id', '=', 'nghidinh24hoso.Ngach')->select("hoso.*",
\DB::raw('(CASE 
                        WHEN hoso.GioiTinh = "0" THEN "Nữ" 
                        ELSE "Nam" 
                        END) AS gioitinhx'),
			"nghidinh24hoso.HinhThucHuong","nghidinh24hoso.Bac","Ngach.MaNgach","Ngach.TenNgach","chucvudang.TenChucVuDang as tenchucvu")->get();

		return json_encode([$data], JSON_UNESCAPED_UNICODE);
	}
	public function gethoso(){
		$data =  hoso::join('chucvudang', 'chucvudang.id', '=', 'hoso.ChucVuDang')->join('thongtinnghihuu', 'thongtinnghihuu.hoso', '=', 'hoso.id')->join('nghidinh24hoso', 'hoso.id', '=', 'nghidinh24hoso.hoso')->join('ngach', 'ngach.id', '=', 'nghidinh24hoso.Ngach')->select("hoso.*", "thongtinnghihuu.*",
\DB::raw('(CASE 
                        WHEN hoso.GioiTinh = "0" THEN "Nữ" 
                        ELSE "Nam" 
                        END) AS gioitinhx'),
\DB::raw('(CASE 
                        WHEN thongtinnghihuu.hinhthucnghihuu = "1" THEN "Hưởng bảo hiểm xã hội" 
                        ELSE "Hưởng bảo hiểm theo cơ quan hành chính" 
                        END) AS tenhuongnghihuu'),
			"nghidinh24hoso.HinhThucHuong","nghidinh24hoso.Bac","Ngach.MaNgach","Ngach.TenNgach","chucvudang.TenChucVuDang as tenchucvu")->get();

		return json_encode([$data], JSON_UNESCAPED_UNICODE);
	}
	public function gethosoChoDuyet(){
		$data =  hoso::join('chucvudang', 'chucvudang.id', '=', 'hoso.ChucVuDang')->join('thongtinnghihuu', 'thongtinnghihuu.hoso', '=', 'hoso.id')->join('nghidinh24hoso', 'hoso.id', '=', 'nghidinh24hoso.hoso')->join('ngach', 'ngach.id', '=', 'nghidinh24hoso.Ngach')->select("hoso.*", "thongtinnghihuu.*",
\DB::raw('(CASE 
                        WHEN hoso.GioiTinh = "0" THEN "Nữ" 
                        ELSE "Nam" 
                        END) AS gioitinhx'),
\DB::raw('(CASE 
                        WHEN thongtinnghihuu.hinhthucnghihuu = "1" THEN "Hưởng bảo hiểm xã hội" 
                        ELSE "Hưởng bảo hiểm theo cơ quan hành chính" 
                        END) AS tenhuongnghihuu'),
			"nghidinh24hoso.HinhThucHuong","nghidinh24hoso.Bac","Ngach.MaNgach","Ngach.TenNgach","chucvudang.TenChucVuDang as tenchucvu")->Where("thongtinnghihuu.trangthainghihuu","=",1)->get();

		return json_encode([$data], JSON_UNESCAPED_UNICODE);
	}
	public function gethosoXuLy(){
		$data =  hoso::join('chucvudang', 'chucvudang.id', '=', 'hoso.ChucVuDang')->join('thongtinnghihuu', 'thongtinnghihuu.hoso', '=', 'hoso.id')->join('nghidinh24hoso', 'hoso.id', '=', 'nghidinh24hoso.hoso')->join('ngach', 'ngach.id', '=', 'nghidinh24hoso.Ngach')->select("hoso.*", "thongtinnghihuu.*",
\DB::raw('(CASE 
                        WHEN hoso.GioiTinh = "0" THEN "Nữ" 
                        ELSE "Nam" 
                        END) AS gioitinhx'),
\DB::raw('(CASE 
                        WHEN thongtinnghihuu.hinhthucnghihuu = "1" THEN "Hưởng bảo hiểm xã hội" 
                        ELSE "Hưởng bảo hiểm theo cơ quan hành chính" 
                        END) AS tenhuongnghihuu'),
			"nghidinh24hoso.HinhThucHuong","nghidinh24hoso.Bac","Ngach.MaNgach","Ngach.TenNgach","chucvudang.TenChucVuDang as tenchucvu")->Where("thongtinnghihuu.trangthainghihuu","=","2")->get();

		return json_encode([$data], JSON_UNESCAPED_UNICODE);
	}
	public function gethosoDaNghiHuu(){
		$data =  hoso::join('chucvudang', 'chucvudang.id', '=', 'hoso.ChucVuDang')->join('thongtinnghihuu', 'thongtinnghihuu.hoso', '=', 'hoso.id')->join('nghidinh24hoso', 'hoso.id', '=', 'nghidinh24hoso.hoso')->join('ngach', 'ngach.id', '=', 'nghidinh24hoso.Ngach')->select("hoso.*", "thongtinnghihuu.*",
\DB::raw('(CASE 
                        WHEN hoso.GioiTinh = "0" THEN "Nữ" 
                        ELSE "Nam" 
                        END) AS gioitinhx'),
\DB::raw('(CASE 
                        WHEN thongtinnghihuu.hinhthucnghihuu = "1" THEN "Hưởng bảo hiểm xã hội" 
                        ELSE "Hưởng bảo hiểm theo cơ quan hành chính" 
                        END) AS tenhuongnghihuu'),
			"nghidinh24hoso.HinhThucHuong","nghidinh24hoso.Bac","Ngach.MaNgach","Ngach.TenNgach","chucvudang.TenChucVuDang as tenchucvu")->Where("thongtinnghihuu.trangthainghihuu","=","3")->get();

		return json_encode([$data], JSON_UNESCAPED_UNICODE);
	}
	
public function demallhoso(){
			$hoso =  Hoso::get();
			$hosoCount = $hoso->count();

		return $hosoCount;
	}





}
