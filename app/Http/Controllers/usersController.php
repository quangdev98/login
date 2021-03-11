<?php

namespace App\Http\Controllers;
use App\Http\Requests\UsersCreateReuest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usersController extends Controller
{
    public function getLoginUser(){
    	return view('login-user');
    }
    public function postLoginUser(UsersCreateReuest $request){
    	$arr = $request -> only('email', 'password');
    	if (Auth::attempt($arr)) {

    		dd('đăng nhập thành công');
            
        } else {

            dd('tài khoản và mật khẩu chưa chính xác');
        }
    }
}
