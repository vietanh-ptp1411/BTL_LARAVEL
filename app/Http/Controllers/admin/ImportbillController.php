<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Importbill;
use App\Models\ImportbillDetail;
use App\Models\Customer;
use App\Models\Product;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Supplier;

class ImportbillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $importbill = Importbill::all();
        $importbill = Importbill::with('supplier')->get(); // tạo mối quan hệ 
        return view('admin.Importbill.index', compact('importbill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = Supplier::all();
        $product = Product::all();
        return view('admin.importbill.add', compact('supplier', 'product'));
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
            'SupID' => $request->input('SupID'),
            'MaHDN' => $request->input('MaHDN'),
            'NguoiNhap' => $request->input('NguoiNhap'),
            'ImpDate' => $request->input('ImpDate'),
            'MoneyTotal' => $request->input('MoneyTotal'),
            'Note' => $request->input('Note'),
            'ProID' => $request->input('ProID'),
            'Quantity' => $request->input('Quantity'),
            'ImpPrice' => $request->input('ImpPrice'),
        ];
        Importbill::create($data);

        //sau khi thêm xong hiển thị sang trang index thông báo thêm thành công
        return redirect()->route('importbill.index')->with('success', 'Nhập hàng thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ImpID)
    {
        $importbill = Importbill::where('ImpID', $ImpID)->with('supplier')->first();
        $pro_name = Importbill::where('ImpID', $ImpID)->with('product')->first();
        return view('admin.importbill.detail', compact('importbill','pro_name'));
    }


    public function printImportbill($ImpID)
    {
        $importbill = Importbill::where('ImpID', $ImpID)->with('supplier')->first();
        $pro_name = Importbill::where('ImpID', $ImpID)->with('product')->first();
        $pdf =Pdf::loadView('admin.importbill.imvoice' , compact('importbill'));
        return $pdf->stream( 'ImportBill.pdf' ) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
