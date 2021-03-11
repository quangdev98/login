<?php

namespace App\Http\Controllers;
use App\Http\Requests\AdminCreateReuest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\admin_customer;

class adminController extends Controller
{
    public function getLogin(){
    	return view('login-admin');
    }
    public function postLoginAdmin(AdminCreateReuest $request){
    	$arr = $request->only('email', 'password');
        if (Auth::guard('admin_customer')->attempt($arr)) {

            dd('đăng nhập thành công');
            
        } else {

            dd('tài khoản và mật khẩu chưa chính xác');
        }
    }
}
