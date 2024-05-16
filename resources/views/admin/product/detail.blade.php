@extends('admin.layouts.admin')
 
@section('title')
    <title>Product Details</title>
@endsection
 
@section('content')
<div id="content" class="span10">
<ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Product Details</a></li>
</ul>

<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Chi tiết sản phẩm : {{ $ProName }}</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <tbody>  
            <tr>
                    <td>Mã sản phẩm:</td>      
                    <td>{{$ProID}}</td>            
                </tr>
                <tr>
                    <td>Mã loại:</td>      
                    <td>{{$CatID}}</td>            
                </tr>
                <tr>
                    <td>Tên sản phẩm:</td>      
                    <td>{{$ProName}}</td>            
                </tr>
                <tr>
                    <td>Giá:</td>      
                    <td>{{number_format($price)}} đ</td>            
                </tr>
                <tr>
                    <td>Mô tả:</td>      
                    <td>{{$ProDescription}}</td>            
                </tr>
                <tr>
                    <td>Chất liệu:</td>      
                    <td>{{$Materials}}</td>            
                </tr>
                <tr>
                    <td>Size:</td>      
                    <td>{{$Size}}</td>            
                </tr>
                <tr>
                    <td>Ảnh:</td>   
                    <td><img src="/DoAn3_IMG/{{$ProImage}}" style="width:100px" ></td>            
                </tr>
                <tr>
                    <td>Ảnh chi tiết:</td>
                    <td>
                        <img src="/DoAn3_IMG/{{$MoreImage1}}" style="width:100px" > 
                        <img src="/DoAn3_IMG/{{$MoreImage2}}" style="width:100px" >
                        <img src="/DoAn3_IMG/{{$MoreImage3}}" style="width:100px" >
                    </td>            
                </tr>
                <tr>
                    <td>Displayhome:</td>      
                    <td>{{$Displayhome}}</td>            
                </tr>
                <tr>
                    <td>Trạng thái:</td>      
                    <td>{{$Status}}</td>            
                </tr>
                <tr>
                    <td>Số lượng:</td>      
                    <td>{{$SoLuong}}</td>            
                </tr>
                <tr>
                    <td>Đã bán:</td>      
                    <td>{{$DaBan}}</td>            
                </tr>
                <tr>
                    <td>Người tạo:</td>      
                    <td>{{$CreateBy}}</td>            
                </tr>
                <tr>
                    <td>Ngày tạo:</td>      
                    <td>{{$created_at}}</td>            
                </tr>
            </tbody>
        </table>           
    </div>
</div>  
@endsection
