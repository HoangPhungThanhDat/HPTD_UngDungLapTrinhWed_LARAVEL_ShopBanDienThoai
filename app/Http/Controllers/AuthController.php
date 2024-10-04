<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getlogin()
    {
        return view("login");
    }
    
    public function dologin(Request $request)
    {
        // Lấy thông tin từ form đăng nhập
        $credentials = [
            'password' => $request->password,
            'status'=>1
        ];

        // Kiểm tra nếu username là email hợp lệ thì đăng nhập bằng email, ngược lại đăng nhập bằng username
        if (filter_var($request->username, FILTER_VALIDATE_EMAIL)) {
            $credentials["email"] = $request->username;
        } else {
            $credentials["username"] = $request->username;
        }

        // Thử đăng nhập
        if (Auth::attempt($credentials)) {
            $user = Auth::user();  

            // Đăng nhập thành công, chuyển hướng đến trang chủ (route có tên 'site.home')
            return redirect()->route('site.home');
        } else {
            // Đăng nhập không thành công, quay lại trang đăng nhập và hiển thị thông báo lỗi
            return redirect()->route('website.getlogin')->with("message", "Đăng nhập không thành công");
        }
    }
    function logout(){
        
        Auth::logout();
        return redirect()->route('site.home');
    }
}
