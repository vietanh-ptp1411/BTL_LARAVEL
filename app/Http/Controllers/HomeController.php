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
        // $product = DB::table('product')->get();
        $product = product::paginate(8); 
        $menu = DB::table('menu')->select('ID', 'Text')->whereNull('parentID')->get();
        $price = DB::table('price')->select('ProID','Cost')->get();
        $category = DB::table('category')->select('CatName','CatIMG')->whereNull('MetaTitle')->get();
        $blog = DB::table('blog')->select('BlogID','Name','Image','Description')->get();
        return view('index', compact('product', 'menu','category','price','danhMuc','blog'));

    }
    
    // ////nút xem thêm
    // public function getMoreProducts(Request $request)
    // {
    //     $page = $request->input('page', 1); // Trang mặc định là 1
    //     $perPage = 8; // Số lượng sản phẩm mỗi lần tải thêm

    //     // Lấy các sản phẩm cho trang hiện tại
    //     $products = Product::skip(($page - 1) * $perPage)->take($perPage)->get();

    //     return response()->json($products);
    // }

    // ////nút xem thêm chủ đề mới/
    // public function getMoreProducts2(Request $request)
    // {
    //     $page2 = $request->input('page2', 1); // Trang mặc định là 1
    //     $perPage2 = 4; // Số lượng sản phẩm mỗi lần tải thêm

    //     // Lấy các sản phẩm cho trang hiện tại
    //     $products = Product::skip(($page2 - 1) * $perPage2)->take($perPage2)->get();

    //     return response()->json($products);
    // }


    public function search(Request $request)
    {
        $danhMuc = Category::all();
        $product = DB::table('product')->select('ProID','ProName','ProImage')->get();
        $menu = DB::table('menu')->select('ID', 'Text')->whereNull('parentID')->get();
        $price = DB::table('price')->select('ProID','Cost')->get();
        $category = DB::table('category')->select('CatName','CatIMG')->whereNull('MetaTitle')->get();
        


        $keywords = $request->keywordsubmit;
        $search_product = DB::table('product')->where('ProName' , 'like', '%' .$keywords.  '%')->get();

        return view('search', compact('product', 'menu','category','price','danhMuc','search_product'));
    }

}
