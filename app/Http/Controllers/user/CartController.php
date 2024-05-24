<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\Cast;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhMuc = Category::all();
        $product = DB::table('product')->select('ProID','ProName','ProImage')->get();
        $price = DB::table('price')->select('ProID','Cost')->get();
        return view('giohang', compact('danhMuc','product','price'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function savecart(Request $request)
    {
        $productID = $request->productID_hidden;
        $quantity = $request->qty;
        $product_info = DB::table('product')->where('ProID',$productID)->first();

        
        $data['id'] = $product_info->ProID;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->ProName;
        $data['price'] = $product_info->price;
        $data['weight'] = '123';
        $data['taxRate'] = '0';
        $data['options']['image'] = $product_info->ProImage;
        Cart::add($data);
        // Cart::destroy();
        return Redirect::to('/showcart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatecart(Request $request)
    {
        $rowId = $request->rowId_cart;
        $qty = $request->quantity_cart;
        Cart::update($rowId,$qty);
        return Redirect::to('/showcart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($rowId)
    {
        Cart::update($rowId,0);
        return Redirect::to('/showcart');
    }
}
