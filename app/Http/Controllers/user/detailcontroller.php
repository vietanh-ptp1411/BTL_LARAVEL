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
        $product = Product::join('price', 'product.ProID', '=', 'price.ProID')
            ->where('product.ProID', $ProID)
            ->select('product.*', 'price.Cost')
            ->first();

        if (!$product) {
            return redirect()->route('home');
        }

        $images = explode(',', $product->MoreImage);
        $sp = Product::where('CatID', $product->CatID)
            ->limit(20)
            ->get()
            ->except($ProID);
        return view('detailt', compact('product', 'images', 'sp','danhMuc'));
    }
    
}
