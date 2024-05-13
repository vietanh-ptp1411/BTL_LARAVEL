<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhMuc = Category::all();
        return view('danhmuc', compact('danhMuc'));
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
    public function store($CatID)
    {
        $danhMuc = Category::all();
        $product = DB::table('product')->where('Status', '1')->orderby('ProID','desc')->get();
        $category = DB::table('category')->where('Status', '1')->orderby('CatID','desc')->get();
        $price = DB::table('price')->select('ProID','Cost')->get();
         // Lấy sản phẩm của danh mục cụ thể
        $categorysp = DB::table('product')
        ->join('category', 'product.CatID', '=', 'category.CatID')
        ->where('product.CatID', $CatID)
        ->get();
        // Lấy tên của danh mục dựa trên $CatID
        $catName = DB::table('category')->where('CatID', $CatID)->value('CatName');
        return view('danhMuc',compact('product','category','categorysp','danhMuc','price', 'catName'));
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
    public function destroy($id)
    {
        //
    }
}
