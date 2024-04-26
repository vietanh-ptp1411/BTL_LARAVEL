<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        return view('admin.order.index',compact('order'));
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
    public function show($OrdID)
    {
        $order = order::where('OrdID', $OrdID)->first();

        if (!$order) {
            // Xử lý khi không tìm thấy category với CatID tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        $OrdID = $order->OrdID;
        $CusID = $order->CusID;
        $ReceivingName = $order->ReceivingName;
        $OrderDate = $order->OrderDate;
        $Status = $order->Status;
        $ReceivingAddress = $order->ReceivingAddress;
        $ReceivingPhone = $order->ReceivingPhone;
        $MoneyTotal = $order->MoneyTotal;
        $Note = $order->Note;
        $ReceivingEmail = $order->ReceivingEmail;
        $Payment = $order->Payment;
        $created_at = $order->created_at;
        $updated_at = $order->updated_at;

        $orderDetails = OrderDetail::where('OrdID', $OrdID)->get();
        $ProIDs = [];
        $Quantities = [];
        $Prices = [];
        foreach ($orderDetails as $detail) {
            $ProIDs[] = $detail->ProID;
            $Quantities[] = $detail->Quantity;
            $Prices[] = $detail->Price;
        }
        
        return view('admin.order.detail', compact('order','orderDetails','OrdID','CusID','ReceivingName','OrderDate','Status','ReceivingAddress','ReceivingPhone','MoneyTotal','Note','ReceivingEmail','Payment','created_at','updated_at','ProIDs','Quantities','Prices'));
    
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
    public function destroy($OrdID)
    {
        // Tìm và xóa order
        $order = Order::find($OrdID);
        if (!$order) {
            return redirect()->route('order.index')->with('error', 'Không tìm thấy order!');
        }
        $order->delete();
    
        // Tìm và xóa tất cả các order details có liên quan đến order này
        OrderDetail::where('OrdID', $OrdID)->delete();
    
        return redirect()->route('order.index')->with('success', 'Xóa order và các order details liên quan thành công!');
    }    
}
