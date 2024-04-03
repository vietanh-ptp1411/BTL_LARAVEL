<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    
    public function showLoginForm()
    {
        $danhMuc = Category::all();
        return view('login',compact('danhMuc'));
    }
    public function login(Request $request)
    {
        $username = $request->input('username');
        $passwork = $request->input('password');
        
        //logic đăng nhập
    
    }
    public function showRegisterForm()
    {
        $danhMuc = Category::all();
        return view('login',compact('danhMuc'));
    }
    public function register(Request $request)
    {
        //logic đăng ký
    }

    
}
