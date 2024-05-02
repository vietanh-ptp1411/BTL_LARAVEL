<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        $danhMuc = Category::all();
        return view('thanhtoan', compact('danhMuc','customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login_checkout()
    {
        $danhMuc = Category::all();
        return view('login' , compact('danhMuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pay_submit(Request $request)
    {
        $data = array();

        $data['CusID'] = Session::get('CusID');
        $data['ReceivingName'] = $request->input('ReceivingName');
        $data['ReceivingPhone'] = $request->input('ReceivingPhone');
        $data['ReceivingEmail'] = $request->input('ReceivingEmail');
        $data['ReceivingAddress'] = $request->input('ReceivingAddress');
        // Kiểm tra giá trị của payment_option
        $paymentOption = $request->input('payment_option');
        if ($paymentOption === 'ATM') {
            $data['Payment'] = 'Thanh toán qua ATM';
            $data['Status'] = '1';

        } elseif ($paymentOption === 'TrucTiep') {
            $data['Payment'] = 'Thanh toán khi nhận hàng';
            $data['Status'] = '0';
        }
        $data['Note'] = $request->input('Note');
        $data['MoneyTotal'] = $request->input('MoneyTotal');
        $data['OrderDate'] = date("Y-m-d H:i:s");
        $data['updated_at'] = date("Y-m-d H:i:s");
        $data['created_at'] = date("Y-m-d H:i:s");

        $OrdID = DB::table('order')->insertGetId($data);
        // // Lưu các giá trị vào phiên
        // Session::put('OrdID', $OrdtID);


        $content = Cart::content();
        echo $content;
        foreach($content as $value)
        {
            $orderdetailData['OrdID']=$OrdID;
            $orderdetailData['ProID']=$value->id;
            $orderdetailData['Quantity']=$value->qty;
            $orderdetailData['Price']=$value->price;
            $orderdetailData['updated_at'] = date("Y-m-d H:i:s");
            $orderdetailData['created_at'] = date("Y-m-d H:i:s");
            DB::table('orderdetail')->insert($orderdetailData);
        }

        return Redirect::to('/thank');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function thank()
    {
        $danhMuc = Category::all();
        return view('camon' , compact('danhMuc'));
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
