<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        return view('admin.employee.index',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employee.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [  
            'EmpName' => $request->input('EmpName') ,
            'Brithday' => $request->input('Brithday') ,
            'EmpPhone' => $request->input('EmpPhone') ,
            'EmpEmail' => $request->input('EmpEmail') ,
            'EmpAddress' => $request->input('EmpAddress') ,
            'Password' => Hash::make($request->input('Password')),
        ];
        Employee::create($data);
        //sau khi thêm xong hiển thị sang trang index thông báo thêm thành công
        return redirect()->route('supplier.index')->with('success','Thêm thành công nhân viên!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($EmpID)
    {
        $employee = Employee::where('EmpID', $EmpID)->first();

        if (!$employee) {
            // Xử lý khi không tìm thấy sup$employee với CatID tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        $EmpID = $employee->EmpID;
        $EmpName = $employee->EmpName ;
        $Brithday = $employee->Brithday ;
        $EmpPhone = $employee->EmpPhone ;
        $EmpEmail = $employee->EmpEmail ;
        $EmpAddress = $employee->EmpAddress ;
        $Password = Hash::make($employee->Password);
        return view('admin.employee.detail', compact('employee','EmpID','EmpName','Brithday','EmpPhone','EmpEmail','EmpAddress','Password'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($EmpID)
    {
        $employee = Employee::where('EmpID', $EmpID)->first();
        if (!$employee) {
            // Xử lý khi không tìm thấy category với CatID tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        return view('admin.employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $EmpID)
    {
        $employee = Employee::find($EmpID);
        if (!$employee) {
            // Xử lý khi không tìm thấy category với CatID tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        $request->validate([
            // Định nghĩa các quy tắc kiểm tra dữ liệu
            // Ví dụ: 'CatName' => 'required|max:255',
        ]);
        // Cập nhật các thuộc tính của category từ dữ liệu được gửi từ form
        $employee->EmpID = $request->EmpID;
        $employee->EmpName = $request->EmpName ;
        $employee->Brithday = $request->Brithday ;
        $employee->EmpPhone = $request->EmpPhone ;
        $employee->EmpEmail = $request->EmpEmail ;
        $employee->EmpAddress = $request->EmpAddress ;
        $employee->Password = Hash::make($employee->Password);    
        // Cập nhật các thuộc tính khác tương tự
        $employee->save();
        return redirect()->route('employee.index', ['EmpID' => $EmpID])->with('success', 'Nhân viên đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
