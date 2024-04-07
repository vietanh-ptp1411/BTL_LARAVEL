<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = product::all();
        return view('admin.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $sp = new Product();
        // $sp->ProID = $request->input('ProID');
        // $sp->CatID = $request->input('CatID');
        // $sp->Metatitle = $request->input('Metatitle');
        // $sp->ProName = $request->input('ProName');
        // $sp->ProDescription = $request->input('ProDescription');
        // $sp->ProColor = $request->input('ProColor');
        // $sp->Materials = $request->input('Materials');
        // $sp->Size = $request->input('Size');
        // $sp->ProImage = $request->input('ProImage');
        // $sp->Tags = $request->input('Tags');
        // $sp->MoreImage = $request->input('MoreImage');
        // $sp->created_at = $request->input('created_at');
        // $sp->CreateBy = $request->input('CreateBy');
        // $sp->MetaDescriptions = $request->input('MetaDescriptions');
        // $sp->Displayhome = $request->input('Displayhome');
        // $sp->Status = $request->input('Status');
        // $sp->inventory = $request->input('inventory');
        // $sp->sold = $request->input('sold');
        // $sp->updated_at = $request->input('updated_at');

        // $sp->save();
        
        // return redirect()->route('product.index')->with('success','Thêm thành công danh mục!');
        $data = [
             
             // $sp->ProID = $request->input('ProID');
            'CatID' => $request->input('CatID'),
            'Metatitle' => $request->input('Metatitle'),
            'ProName' => $request->input('ProName'),
            'ProDescription' => $request->input('ProDescription'),
            'ProColor' => $request->input('ProColor'),
            'Materials' => $request->input('Materials'),
            'Size' => $request->input('Size'),
            'ProImage' => $request->input('ProImage'),
            'Tags' => $request->input('Tags'),
            'MoreImage' => $request->input('MoreImage'),
            'created_at' => date("Y-m-d H:i:s"),
            'CreateBy' => $request->input('CreateBy'),
            'MetaDescriptions' => $request->input('MetaDescriptions'),
            'Displayhome' => $request->input('Displayhome'),
            'Status' => $request->input('Status')?1:0,
            'inventory' => $request->input('inventory'),
            'sold' => $request->input('sold'),
            'updated_at' => date("Y-m-d H:i:s"),
        ];
        Product::create($data);
        //sau khi thêm xong hiển thị sang trang index thông báo thêm thành công
        return redirect()->route('product.index')->with('success','Thêm thành công sản phẩm!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ProID)
    {
        $product = product::where('ProID', $ProID)->first();

        if (!$product) {
            // Xử lý khi không tìm thấy category với CatID tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        $CatID = $product->CatID;
        $Metatitle = $product->Metatitle;
        $ProName = $product->ProName;
        $ProDescription = $product->ProDescription;
        $ProColor = $product->ProColor;
        $Materials = $product->Materials;
        $Size = $product->Size;
        $ProImage = $product->ProImage;
        $Tags = $product->Tags;
        $MoreImage = $product->MoreImage;
        $created_at = $product->created_at;
        $CreateBy = $product->CreateBy;
        $MetaDescriptions = $product->MetaDescriptions;
        $Displayhome = $product->Displayhome;
        $Status = $product->Status;
        $inventory = $product->inventory;
        $sold = $product->sold;
        $updated_at = $product->updated_at;
        $imagemore = explode(',', $product->MoreImage);

        return view('admin.product.detail', compact('product','imagemore','ProID','CatID','Metatitle','ProName','ProDescription','ProColor','Materials','Size','ProImage','Tags','MoreImage','created_at','CreateBy','MetaDescriptions','Displayhome','Status','inventory','sold','updated_at'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ProID)
    {
        $product = product::where('ProID', $ProID)->first();
        if (!$product) {
            // Xử lý khi không tìm thấy category với CatID tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ProID)
    {
        $product = product::find($ProID);
        if (!$product) {
            // Xử lý khi không tìm thấy product với CatID tương ứng
            return abort(404); // Trả về trang lỗi 404
        }
        $request->validate([
            // Định nghĩa các quy tắc kiểm tra dữ liệu
            // Ví dụ: 'CatName' => 'required|max:255',
        ]);
        // Cập nhật các thuộc tính của product từ dữ liệu được gửi từ form
        $product->CatID = $request->CatID;
        $product->Metatitle = $request->Metatitle;
        $product->ProName = $request->ProName;
        $product->ProDescription = $request->ProDescription;
        $product->ProColor = $request->ProColor;
        $product->Materials = $request->Materials;
        $product->Size = $request->Size;
        $product->ProImage = $request->ProImage;
        $product->Tags = $request->Tags;
        $product->MoreImage = $request->MoreImage;
        $product->CreateBy = $request->CreateBy;
        $product->MetaDescriptions = $request->MetaDescriptions;
        $product->Displayhome = $request->Displayhome;
        $product->Status = $request->Status;
        $product->inventory = $request->inventory;
        $product->sold = $request->sold;

        // Cập nhật các thuộc tính khác tương tự
        $product->save();
        return redirect()->route('product.index', ['ProID' => $ProID])->with('success', 'Sản phẩm đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ProID)
    {
        $product = product::find($ProID);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Xóa sản phẩm thành công!');
    }
}
