<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $danhMuc = Category::all();
        $product = DB::table('product')->select('ProID','ProName','ProImage')->limit(8)->get();
        $menu = DB::table('menu')->select('ID', 'Text')->whereNull('parentID')->get();
        $price = DB::table('price')->select('ProID','Cost')->limit(8)->get();
        $category = DB::table('category')->select('CatName','CatIMG')->whereNull('MetaTitle')->get();
        return view('index', compact('product', 'menu','category','price','danhMuc'));

    }
    
    public function shopgrid()
    {
        return view('shop-grid');
    }
    public function giohang()
    {
        $danhMuc = Category::all();
        return view('giohang', compact('danhMuc'));
    }
    public function danhmuc()
    {
        $danhMuc = Category::all();
        return view('danhmuc', compact('danhMuc'));
    }
    public function thanhtoan()
    {
        $danhMuc = Category::all();
        return view('thanhtoan', compact('danhMuc'));
    }
}
