<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use App\Models\Category;
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
        $danhMuc = Category::all();
        return view('thanhtoan', compact('danhMuc'));
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

        $data['ReceivingName'] = $request->input('ReceivingName');
        $data['ReceivingPhone'] = $request->input('ReceivingPhone');
        $data['ReceivingEmail'] = $request->input('ReceivingEmail');
        $data['ReceivingAddress'] = $request->input('ReceivingAddress');
        $data['Note'] = $request->input('Note');
        $data['MoneyTotal'] = $request->input('MoneyTotal');
        $data['Note'] = $request->input('Note');
        $data['OrderDate'] = date("Y-m-d H:i:s");
        $data['updated_at'] = date("Y-m-d H:i:s");
        $data['created_at'] = date("Y-m-d H:i:s");
        

        $orderID = DB::table('order')->insertGetId($data);

        // Lưu các giá trị vào phiên
        Session::put('OrdID', $orderID);
        return redirect('/thank');
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
