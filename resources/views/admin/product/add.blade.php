@extends('admin.layouts.admin')
 
@section('title')
    <title>Product Create</title>
@endsection
 
@section('content')
<div id="content" class="span10">
<ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Product Create</a></li>
</ul>

<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Thêm Sản Phẩm</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
        <form action="{{ route('product.store')}}" method="post">
            @csrf
            <table  class="table table-striped table-bordered bootstrap-datatable datatable">
                <tbody>  
                    <tr>
                        <td>Mã loại:</td>
                        <td><input style="width:400px" type='text' name='CatID' id='CatID' ></td>                  
                    </tr>
                    <tr>
                        <td>Tên sản phẩm:</td>
                        <td><input style="width:400px" type='text' name='ProName' id='ProName' ></td>                  
                    </tr>
                    <tr>
                        <td>Giá:</td>
                        <td><input style="width:400px" type='text' name='price' id='price' ></td>                  
                    </tr>
                    <tr>
                        <td>Chất liệu:</td>
                        <td><input style="width:400px" type='text' name='Materials' id='Materials' ></td>                  
                    </tr>
                    <tr>
                        <td>Size:</td>
                        <td><input style="width:400px" type='text' name='Size' id='Size' ></td>                  
                    </tr>
                    <tr>
                        <td>Ảnh sản phẩm:</td>
                        <td>
                            <input style="width:400px" type='file' name='ProImage' id='ProImage' accept="DoAn3_IMG/*">
                        </td>                  
                    </tr>
                    <tr>
                        <td>Ảnh chi tiết:</td>
                        <td>
                            <input style="width:500px" type='file' name='MoreImage1' id='MoreImage1' accept="DoAn3_IMG/*" multiple>
                            <input style="width:500px" type='file' name='MoreImage2' id='MoreImage2' accept="DoAn3_IMG/*" multiple>
                            <input style="width:500px" type='file' name='MoreImage3' id='MoreImage3' accept="DoAn3_IMG/*" multiple>
                        </td>                  
                    </tr>
                    <tr>
                        <td>Người tạo:</td>
                        <td><input style="width:400px" type='text' name='CreateBy' id='CreateBy' ></td>                  
                    </tr>
                    <tr>
                        <td>Displayhome:</td>
                        <td><input style="width:400px" type='text' name='Displayhome' id='Displayhome' ></td>                  
                    </tr>
                    <tr>
                        <td>Trạng thái:</td>
                        <td><input style="width:400px" type='text' name='Status' id='Status' ></td>                  
                    </tr>
                    <tr>
                        <td>Số lượng</td>
                        <td><input style="width:400px" type='text' name='SoLuong' id='SoLuong' ></td>                  
                    </tr>
                    <tr>
                        <td>Đã bán</td>
                        <td><input style="width:400px" type='text' name='DaBan' id='DaBan' ></td>                  
                    </tr>
                    <tr>
                        <td>Mô tả</td>
                        <td>
                            <div class="controls">
                                <textarea style="width:300px;height:150px" name='ProDescription' id='ProDescription' class="" rows="3" ></textarea>
                            </div>
                        </td>
                    </tr>             
                </tbody> 
            </table> 
        <div class="form-actions">
            <button type="submit" class="btn btn-primary" name="">Save</button>                          
            <button type="reset" class="btn">Cancel</button>
		</div>
        </form>            
    </div>
</div>  
</div>    
@endsection
