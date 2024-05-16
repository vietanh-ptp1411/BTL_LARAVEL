<?php

namespace App\Http\Controllers\admin;


use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SalesInvoice;
use App\Models\SalesInvoiceDetail;
use App\Models\Customer;



class SalesInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        $salesinvoice = SalesInvoice::all();
        return view('admin.SalesInvoice.index',compact('salesinvoice','customer'));
    }
    public function fileHoaDon()
    {
        
        return view('admin.SalesInvoice.index',compact('salesinvoice','customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($SalID)
    {
        $sale = SalesInvoice::where('SalID', $SalID)->first();

        if (!$sale) {
            // Xử lý khi không tìm thấy category với CatID tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        $MaDonHang = $sale->MaDonHang;
        $CusID = $sale->CusID;
        $SalName = $sale->SalName;
        $Address = $sale->Address;
        $Phone = $sale->Phone;
        $SalDate = $sale->SalDate;
        $MoneyTotal = $sale->MoneyTotal;
        $Note = $sale->Note;
        $MoneyTotal = $sale->MoneyTotal;
        $Note = $sale->Note;
        $created_at = $sale->created_at;
        $updated_at = $sale->updated_at;

        

        $saleDetails = SalesInvoiceDetail::where('SalID', $SalID)->get();
        $ProIDs = [];
        $Quantities = [];
        $Prices = [];
        foreach ($saleDetails as $detail) {
            $ProIDs[] = $detail->ProID;
            $Quantities[] = $detail->Quantity;
            $Prices[] = $detail->Price;
        }
        return view('admin.SalesInvoice.detail', compact('sale','saleDetails','MaDonHang', 'CusID','SalName','SalDate','Address','Phone','MoneyTotal','Note','created_at','updated_at','ProIDs','Quantities','Prices'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    //in hóa đơn
    public function printInvoices($SalID)
    {
        $sale = SalesInvoice::where('SalID', $SalID)->first();

        if (!$sale) {
            // Xử lý khi không tìm thấy category với CatID tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        $MaDonHang = $sale->MaDonHang;
        $CusID = $sale->CusID;
        $SalName = $sale->SalName;
        $Address = $sale->Address;
        $Phone = $sale->Phone;
        $SalDate = $sale->SalDate;
        $MoneyTotal = $sale->MoneyTotal;
        $Note = $sale->Note;
        $MoneyTotal = $sale->MoneyTotal;
        $Note = $sale->Note;
        $created_at = $sale->created_at;
        $updated_at = $sale->updated_at;

        

        $saleDetails = SalesInvoiceDetail::where('SalID', $SalID)->get();
        $ProIDs = [];
        $Quantities = [];
        $Prices = [];
        foreach ($saleDetails as $detail) {
            $ProIDs[] = $detail->ProID;
            $Quantities[] = $detail->Quantity;
            $Prices[] = $detail->Price;
        }

        
        $pdf =Pdf::loadView('admin.SalesInvoice.invoice' , compact('sale','saleDetails','MaDonHang', 'CusID','SalName','SalDate','Address','Phone','MoneyTotal','Note','created_at','updated_at','ProIDs','Quantities','Prices'));
        return $pdf->stream( 'Orderlnvoice.pdf' ) ;
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
    public function destroy($SalID)
    {
        // Tìm và xóa order
        $sale = SalesInvoice::find($SalID);
        if (!$sale) {
            return redirect()->route('SalesInvoice.index')->with('error', 'Không tìm thấy hóa đơn!');
        }
        $sale->delete();
    
        // Tìm và xóa tất cả các order details có liên quan đến order này
        SalesInvoiceDetail::where('SalID', $SalID)->delete();
    
        return redirect()->route('SalesInvoice.index')->with('success', 'Xóa hóa đơn thành công!');
    }
}
