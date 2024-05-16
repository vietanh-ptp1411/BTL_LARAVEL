<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Category;

use App\Models\Admin\Roles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   
    public function authLogin()
    {
        // Kiểm tra xem quản trị viên có được xác thực không
        if (Auth::check()) {
            return Redirect::to('index_auth'); // Nếu được xác thực, chuyển hướng đến bảng điều khiển quản trị viên
        } else {
            return Redirect::to('login_auth')->send(); // Nếu không được xác thực, chuyển hướng đến trang đăng nhập
        }
    }


    
    public function showDashboard()
    {
        $this->authLogin(); // Check authentication status
        return view('admin.home'); // Render the admin dashboard view
    }
    

    public function index()
    {
        return view('admin.home');
    }


    public function register_auth()
    {
        $danhMuc = Category::all();
        return view('admin.customer_login.register',compact('danhMuc'));
    }


    public function logout_auth(){
        Auth::logout();
        return redirect('/login_auth')->with('message', 'Đăng xuất thành công');
    }

    public function login_auth(){
        $danhMuc = Category::all();
        return view('admin.customer_login.login_auth',compact('danhMuc'));
    }

    public function loginAuth(Request $request){
        $this->validate($request,[
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
        ]);
        // Không mã hóa lại mật khẩu khi sử dụng Auth::attempt
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($credentials)){
            return redirect('/index_auth');
        }
        else{
            return redirect('/login_auth')->with('error', 'Lỗi đăng nhập');
        }
        
    }


    public function register(Request $request){
        // Thực hiện xác nhận dữ liệu đầu vào
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);
    
        $data= $request->all();
    
        $admin = new Admin();
        $admin->name = $data['name'];
        $admin->email = $data['email'];
        $admin->password = Hash::make($data['password']); // Sử dụng bcrypt để mã hóa mật khẩu
        $admin->phone = $data['phone']; // Bạn có thể mã hóa số điện thoại nếu muốn, nhưng không nên sử dụng MD5
        $admin->save();
        return redirect('/login_auth');
    }
    
    public function validation($request){
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);
    }
    
}