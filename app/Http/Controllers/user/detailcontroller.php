<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Price;

class detailcontroller extends Controller
{
    
    public function showProduct($ProID)
    {
        $danhMuc = Category::all();
        $product = Product::where('ProID', $ProID)->first();

        if (!$product) {
            
            return redirect()->route('user.home'); // Trả về trang chủ
        }
        $ProID = $product->ProID;
        $ProName = $product->ProName;
        $ProDescription = $product->ProDescription;
        $Materials = $product->Materials;
        $Size = $product->Size;
        $ProImage = $product->ProImage;
        $MoreImage1 = $product->MoreImage1;
        $MoreImage2 = $product->MoreImage2;
        $MoreImage3 = $product->MoreImage3;
        $SoLuong = $product->SoLuong;
        $DaBan = $product->DaBan;
        $price = $product->price;


        
        //Sản phẩm có chung CatID (danh mục)
        $sp = Product::where('CatID', $product->CatID)
            ->limit(20)
            ->get()
            ->except($ProID);

        return view('user.detailt', compact('product',  'sp','danhMuc','ProID','ProName','ProDescription','Materials','Size','ProImage','MoreImage1','MoreImage2','MoreImage3','SoLuong','DaBan','price',));
    }
    
}
