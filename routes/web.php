<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'guest'], function(){
	Route::match(['get','post'],'login',['as' => 'login' , 'uses' => 'admin\LoginController@index']);//match sử dụng cho get với post
	Route::post('postlogin', [ 'as' => 'postlogin', 'uses' => 'admin\LoginController@postLogin']);
});


Route::group(['middleware' => 'auth'], function(){
	Route::match(['get','post'],'/','HomeController@index');//match sử dụng cho get với post 
	Route::get('getlogout', [ 'as' => 'getlogout', 'uses' => 'admin\LoginController@getLogout']);

	Route::get('taikhoan','admin\taikhoanController@index');
	Route::get('gettaikhoan','admin\taikhoanController@gettaikhoan');
	Route::post('updatetaikhoan','admin\taikhoanController@updatetaikhoan');
	Route::post('updatepassword','admin\taikhoanController@updatepassword');
	Route::post('addtaikhoan','admin\taikhoanController@addtaikhoan');
	Route::post('delltaikhoan','admin\taikhoanController@delltaikhoan');
	Route::post('resetpassword','admin\taikhoanController@resetpassword');

	//hoso

	//quyền
	Route::get('phanquyen','admin\phanquyenController@index');
	Route::get('getquyen','admin\phanquyenController@getquyen');
	Route::post('updaterole','admin\phanquyenController@updaterole');
	Route::post('addrole','admin\phanquyenController@addrole');
	Route::post('delrole','admin\phanquyenController@delrole');
	Route::post('deltoanborole','admin\phanquyenController@deltoanborole');

	//địa phương
	Route::get('diaphuong','admin\diaphuongController@index');
	Route::get('gettinh','admin\diaphuongController@gettinh');
	Route::post('updatetinh','admin\diaphuongController@updatetinh');
	Route::post('addtinh','admin\diaphuongController@addtinh');
	Route::post('deltinh','admin\diaphuongController@deltinh');

	Route::post('gethuyen','admin\diaphuongController@gethuyen');
	Route::post('updatehuyen','admin\diaphuongController@updatehuyen');
	Route::post('addhuyen','admin\diaphuongController@addhuyen');
	Route::post('delhuyen','admin\diaphuongController@delhuyen');

	Route::post('getxa','admin\diaphuongController@getxa');
	Route::post('updatexa','admin\diaphuongController@updatexa');
	Route::post('addxa','admin\diaphuongController@addxa');
	Route::post('delxa','admin\diaphuongController@delxa');

	//cơ quan
	Route::get('coquan','admin\coquanController@index');
	Route::get('getcoquan','admin\coquanController@getcoquan');
	Route::post('updatecoquan','admin\coquanController@updatecoquan');
	Route::post('addcoquan','admin\coquanController@addcoquan');
	Route::post('delcoquan','admin\coquanController@delcoquan');
	Route::post('deltoanbocoquan','admin\coquanController@deltoanbocoquan');

	//quản lí hồ sơ
	Route::get('hosocbnv','quanlihs\quanlihsController@index');
	Route::get('themhoso','quanlihs\quanlihsController@themhoso');
	Route::get('quanlynghihuu','quanlihs\quanlihsController@quanlynghihuu');
	Route::get('gethoso','quanlihs\hosoController@gethoso');
	Route::get('getallhoso','quanlihs\hosoController@getallhoso');
	Route::get('gethosochoduyet','quanlihs\hosoController@gethosoChoDuyet');
	Route::get('gethosoxuly','quanlihs\hosoController@gethosoXuLy');
	Route::get('gethosodanghihuu','quanlihs\hosoController@gethosoDaNghiHuu');

	//demhoso
	Route::get('demallhoso','quanlihs\hosoController@demallhoso');
	
	//hinhthucnghihuu
	Route::get('gethinhthucnghihuu','HinhThucNghiHuuController@getHinhThucNghiHuu');
	Route::get('tinhngay','ThongTinNghiHuuController@tinhngay');
	//thongtinnghihuu
	Route::post('updatethongtinnghihuu/{id}','ThongTinNghiHuuController@updatethongtinnghihuu');
	Route::post('updatetrangthaixuly/{id}','ThongTinNghiHuuController@updatetrangthaixuly');
	Route::post('updatetrangthaiduyet/{id}','ThongTinNghiHuuController@updatetrangthaiduyet');
	Route::post('addthongtinnghihuu','ThongTinNghiHuuController@addthongtinnghihuu');
	Route::get('deletethongtinnghihuu/{id}','ThongTinNghiHuuController@deletethongtinnghihuu');
	Route::get('demhosochoduyet','ThongTinNghiHuuController@demhosoChoDuyet');
	Route::get('demhosoxuly','ThongTinNghiHuuController@demhosoXuLy');
	Route::get('demhosodanghihuu','ThongTinNghiHuuController@demhosoDaNghiHuu');
});