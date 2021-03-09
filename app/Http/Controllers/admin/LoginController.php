<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Auth;
use Session;
use App\taikhoan;

class LoginController extends Controller
{
	public function index()
	{
		return view('admin.login');
	}

	public function postLogin(Request $request)
	{
        // Kiểm tra dữ liệu nhập vào
		
		$rules = [
			'tendangnhap' =>'required',
			'password' => 'required|min:6'
		];
		$messages = [
			'tendangnhap.required' => 'Tên đăng nhập là trường bắt buộc',
			'tendangnhap.required' => 'Tên đăng nhập không được bỏ trống',
			'password.required' => 'Mật khẩu là trường bắt buộc',
			'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
		];
		$validator = Validator::make($request->all(), $rules, $messages);

		if ($validator->fails()) {
        // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
			return redirect('login')->withErrors($validator)->withInput();
		} else {
        // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
			$tendangnhap = $request->get('tendangnhap');
			$password = $request->get('password');
			
			if(Auth::attempt(['tendangnhap' => $tendangnhap, 'password' =>$password])) {
            // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
				$user = Auth::user();
				Session::put('tendangnhap', $user->tendangnhap);
                // Auth::login($user, true);
				
				return redirect('/');
			} else {
				//return 'Tài khoản hoặc mật khẩu không đúng!';
            	// Kiểm tra không đúng sẽ hiển thị thông báo lỗi
				Session::flash('error', 'Tài khoản hoặc mật khẩu không đúng!');
				return redirect()->route('login');
			}
		}
	}


	public function getLogout()
	{
		Auth::logout();
		return redirect()->route('login');
	}



}
