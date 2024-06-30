<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
    public function showLoginForm()
    {
        $danhMuc = Category::all();
        return view('user.login',compact('danhMuc'));
    }


    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $customer = DB::table('customer')->where('UserName', $username)->first();
        $admin = DB::table('admin')->where('email', $username)->first();
        $employee = DB::table('employee')->where('EmpEmail', $username)->first();
        
        if($customer && Hash::check($password, $customer->Password)){
            Session::put('CusID', $customer->CusID);
            Session::put('CusName', $customer->CusName);
            return redirect('home');
        }
        elseif($admin && Hash::check($password, $admin->password)){
            Session::put('id', $admin->id);
            Session::put('name', $admin->name);
            Session::put('chucvu', $admin->chucvu);
            return redirect('/admin');
        }
        elseif($employee && Hash::check($password, $employee->Password)){
            Session::put('EmpID', $employee->EmpID);
            Session::put('EmpName', $employee->EmpName);
            Session::put('Role', $employee->Role);
            return redirect('/admin');
        }
        else{
            return redirect('login')->with('error', 'Tài khoản hoặc mật khẩu không chính xác.');
        }
    }


    public function showRegisterForm()
    {
        $danhMuc = Category::all();
        return view('user.register',compact('danhMuc'));
    }
    public function register(Request $request)
    {
        $brithday = Carbon::createFromFormat('Y-m-d', $request->input('Brithday'))->toDateString();

        $data = 
        [
            'UserName' => $request->input('UserName'),
            'CusName' => $request->input('CusName'),
            'Brithday' => $brithday,
            'CusPhone' => $request->input('CusPhone'),
            'CusEmail' => $request->input('CusEmail'),
            'CusAddress' => $request->input('CusAddress'),
            'Password' => Hash::make($request->input('Password')), // Sử dụng bcrypt để mã hóa mật khẩu
            'updated_at' => date("Y-m-d H:i:s"),
            'created_at' => date("Y-m-d H:i:s"),
        ];

        
        DB::table('customer')->insertGetId($data);

        // Lưu các giá trị vào phiên
        // Session::put('CusID', $customerID);
        // Session::put('CusName', $request->input('CusName'));

        return Redirect('/register')->with('success', 'Đã đăng ký thành công tài khoản.');
    }

    public function logout()
    {
        Session::flush();
        return Redirect('login');
    }  
}
