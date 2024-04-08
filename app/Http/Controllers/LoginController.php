<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    
    public function showLoginForm()
    {
        $danhMuc = Category::all();
        return view('login',compact('danhMuc'));
    }
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $result = DB::table('customer')->where('UserName',$username)->where('Password',$password)->first();
        
        if($result){
            Session::put('CusID',$result->CusID);
            return Redirect::to('home');
        }
        else{
            return Redirect::to('login')->with('error', 'Tài khoản hoặc mật khẩu không chính xác.');
        }
    }
    public function showRegisterForm()
    {
        $danhMuc = Category::all();
        return view('register',compact('danhMuc'));
    }
    public function register(Request $request)
    {
        $data = array();

        $data['UserName'] = $request->input('UserName');
        $data['CusName'] = $request->input('CusName');
        // Xử lý định dạng ngày tháng
        $brithday = Carbon::createFromFormat('Y-m-d', $request->input('Brithday'))->toDateString();
        $data['Brithday'] = $brithday;
        $data['CusPhone'] = $request->input('CusPhone');
        $data['CusEmail'] = $request->input('CusEmail');
        $data['CusAddress'] = $request->input('CusAddress');
        $data['Password'] = $request->input('Password');
        $data['updated_at'] = date("Y-m-d H:i:s");
        $data['created_at'] = date("Y-m-d H:i:s");
        

        $customerID = DB::table('customer')->insertGetId($data);

        // Lưu các giá trị vào phiên
        Session::put('CusID', $customerID);
        Session::put('CusName', $request->input('CusName'));

        return Redirect('/thanhtoan');
    }

    public function logout()
    {
        Session::flush();
        return Redirect('login');
    }  


}
