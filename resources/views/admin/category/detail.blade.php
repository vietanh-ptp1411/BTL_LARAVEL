@extends('admin.layouts.admin')
 
@section('title')
    <title>Chi tiết danh mục</title>
@endsection
 
@section('content')
<div id="content" class="span10">
<ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Chi tiết danh mục</a></li>
</ul>

<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Chi tiết sản phẩm : {{ $CatName }}</h2>
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
                    <td>Mã danh mục:</td>      
                    <td>{{$CatID}}</td>            
                </tr>
                <tr>
                    <td>Tên danh mục:</td>      
                    <td>{{$CatName}}</td>            
                </tr>
                <tr>
                    <td>Tiêu đề:</td>      
                    <td>{{$MetaTitle}}</td>            
                </tr>
                <tr>
                    <td>Trạng thái:</td>      
                    <td>{{$Status}}</td>            
                </tr>
            </tbody> 
        </table>            
    </div>
</div>  
@endsection
