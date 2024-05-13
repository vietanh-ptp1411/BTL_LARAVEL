<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use App\Models\OrderDetail;
use App\Models\SalesInvoice;
use App\Models\SalesInvoiceDetail;
use Illuminate\Support\Facades\DB;


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
        $MaDonHang = $order->MaDonHang;
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
        
        return view('admin.order.detail', compact('order','orderDetails','MaDonHang','CusID','ReceivingName','OrderDate','Status','ReceivingAddress','ReceivingPhone','MoneyTotal','Note','ReceivingEmail','Payment','created_at','updated_at','ProIDs','Quantities','Prices'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function confirm($OrdID)
    {
        $order = Order::find($OrdID);
        if (!$order) {
            return abort(404); // Xử lý khi không tìm thấy đơn hàng
        }
    
        $CusName = $order->customer->CusName; // Lấy tên khách hàng từ đơn hàng
    
        // Tạo một đối tượng SalesInvoice và sao chép thông tin từ đơn hàng
        $salesInvoice = new SalesInvoice();
        $salesInvoice->CusID = $order->CusID;
        $salesInvoice->MaDonHang = $order->MaDonHang;
        $salesInvoice->SalName = $CusName;
        $salesInvoice->Address = $order->ReceivingAddress;
        $salesInvoice->Phone = $order->ReceivingPhone;
        $salesInvoice->SalDate = now(); // Đặt ngày bán là ngày hiện tại
        $salesInvoice->MoneyTotal = $order->MoneyTotal;
        $salesInvoice->Note = $order->Note;
        $salesInvoice->save(); // Lưu hóa đơn vào cơ sở dữ liệu
    
        // Cập nhật trạng thái của đơn hàng thành "đã xác nhận"
        $order->Status = 1;
        $order->save();
    
        // Lấy các mục chi tiết đơn hàng tương ứng với đơn hàng
        $orderDetails = OrderDetail::where('OrdID', $OrdID)->get();
    
        // Tạo các chi tiết hóa đơn bán hàng từ các mục chi tiết đơn hàng và lưu chúng vào cơ sở dữ liệu
        foreach ($orderDetails as $detail) {

            $salesInvoiceDetailData['SalID']=$salesInvoice->SalID;
            $salesInvoiceDetailData['ProID']=$detail->ProID;
            $salesInvoiceDetailData['Quantity']=$detail->Quantity;
            $salesInvoiceDetailData['Price']=$detail->Price;
            DB::table('SalesInvoiceDetail')->insert($salesInvoiceDetailData);
        }
    
        // Chuyển hướng người dùng về trang danh sách đơn hàng và hiển thị thông báo thành công
        return redirect()->route('order.index')->with('success', 'Đã xác nhận đơn hàng.');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    //Hủy đơn hàng
    public function CancelCheckout(Request $request, $OrdID)
    {
        $dh = order::find($OrdID);
        $dh -> Status = 2;
        $dh -> save();
       
        return redirect()->route('order.index')->with('sucess', 'Đơn hàng đã hủy thành công');
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
