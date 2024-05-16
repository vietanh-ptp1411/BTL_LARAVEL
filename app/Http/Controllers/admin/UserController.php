<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Admin\Roles;
use App\Models\Admin\TaiKhoan;
use Illuminate\Support\Facades\Auth;

use Session;

class UserController extends Controller
{
    public function index(){
        $admin = Admin::with('roles')->orderBy('id','DESC')->paginate(5);
        return view('admin.users.all_users',compact('admin'));
    }


    public function assign_roles(Request $request){
        if(Auth::id()==$request->id){
            return redirect()->back()->with('message','Bạn không được phân quyền chính mình :))');
        }
        $user = Admin::where('email',$request->email)->first();
        $user->roles()->detach();
        if($request->author_role){
            $user->roles()->attach(Roles::where('name','author')->first());
        }
        if($request->admin_role){
            $user->roles()->attach(Roles::where('name','admin')->first());
        }
        if($request->user_role){
            $user->roles()->attach(Roles::where('name','user')->first());
        }
        return redirect()->back()->with('message','Cấp quyền thành công');
    }



    public function impersonate($id){
        $user = Admin::where('id',$id)->first();
        if($user){
            session()->put('impersonate',$user->id);
        }
        return redirect('/indexUsers');
    }



    public function impersonate_destroy(){
        session()->forget('impersonate');
        return redirect('/indexUsers');
    }



    public function create(){
        $acc = TaiKhoan::all();
        return view('admin.users.add_users',compact('acc'));
    }



    public function store(Request $request)
    {
        $data = [
            'id' => $request->input('id'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'Status' => $request->input('Status') ? 1 : 0,
        ];
        TaiKhoan::create($data);
        return redirect()->route('indexUsers')->with('success','Thêm thành công tài khoản');
    }



    public function delete_user_roles($id){
        if(Auth::id()==$id){
            return redirect()->back()->with('message','Bạn không được quyền xóa chính mình :))');
        }
        $admin = Admin::find($id);
        if($admin){
            $admin->roles()->detach();
            $admin->delete();
        }
        return redirect()->back()->with('message','Xóa quyền thành công');
    }
   
}