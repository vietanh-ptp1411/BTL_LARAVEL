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
        <li><a href="#">Nhà cung cấp</a></li>
</ul>

<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Chi tiết nhà cung cấp :</h2>
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
                    <td>Mã nhà cung cấp:</td>      
                    <td>{{$SupID}}</td>            
                </tr>
                <tr>
                    <td>Tên nhà cung cấp:</td>      
                    <td>{{$SupName}}</td>            
                </tr>
                <tr>
                    <td>Địa chỉ:</td>      
                    <td>{{$SupAddress}}</td>            
                </tr>
                <tr>
                    <td>Email:</td>      
                    <td>{{$SupEmail}}</td>            
                </tr>
                <tr>
                    <td>Số điện thoại:</td>      
                    <td>{{$SupPhone}}</td>            
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
