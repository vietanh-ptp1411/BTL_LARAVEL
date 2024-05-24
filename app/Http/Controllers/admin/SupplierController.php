<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view('admin.supplier.index',compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.supplier.add');
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
            'SupName' => $request->input('SupName') ,
            'SupAddress' => $request->input('SupAddress') ,
            'SupEmail' => $request->input('SupEmail') ,
            'SupPhone' => $request->input('SupPhone') ,
            'Status' => $request->input('Status') ? 1 : 0,
        ];
        Supplier::create($data);
        //sau khi thêm xong hiển thị sang trang index thông báo thêm thành công
        return redirect()->route('supplier.index')->with('success','Thêm thành công nhà cung cấp!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($SupID)
    {
        $supplier = Supplier::where('SupID', $SupID)->first();

        if (!$supplier) {
            // Xử lý khi không tìm thấy sup$supplier với CatID tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        $SupID = $supplier->SupID;
        $SupName = $supplier->SupName;
        $SupAddress = $supplier->SupAddress;
        $SupEmail = $supplier->SupEmail;
        $SupPhone = $supplier->SupPhone;
        $Status = $supplier->Status;
        return view('admin.supplier.detail', compact('supplier','SupAddress','SupEmail','SupPhone','Status','SupName','SupID'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($SupID)
    {
        $supplier = Supplier::where('SupID', $SupID)->first();
        if (!$supplier) {
            // Xử lý khi không tìm thấy category với CatID tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        return view('admin.supplier.edit',compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $SupID)
    {
        $supplier = Supplier::find($SupID);
        if (!$supplier) {
            // Xử lý khi không tìm thấy category với CatID tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        $request->validate([
            // Định nghĩa các quy tắc kiểm tra dữ liệu
            // Ví dụ: 'CatName' => 'required|max:255',
        ]);
        // Cập nhật các thuộc tính của category từ dữ liệu được gửi từ form
        $supplier->SupID = $request->SupID;
        $supplier->SupName = $request->SupName;
        $supplier->SupAddress = $request->SupAddress;
        $supplier->SupEmail = $request->SupEmail;
        $supplier->SupPhone = $request->SupPhone;
        $supplier->Status = $request->Status ? 1 : 0;
        // Cập nhật các thuộc tính khác tương tự
        $supplier->save();
        return redirect()->route('supplier.index', ['SupID' => $SupID])->with('success', 'Nhà cung cấp đã được cập nhật thành công.');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($SupID)
    {
        $supplier = Supplier::find($SupID);
        $supplier->delete();
        return redirect()->route('supplier.index')->with('success', 'Xóa nhà cung cấp thành công!');
    }
}
