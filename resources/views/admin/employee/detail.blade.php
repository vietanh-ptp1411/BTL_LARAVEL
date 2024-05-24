@extends('admin.layouts.admin')
 
@section('title')
    <title>Nhân viên</title>
@endsection
 
@section('content')
<div id="content" class="span10">
<ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Nhân viên</a></li>
</ul>

<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Chi tiết nhân viên :</h2>
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
                    <td>Mã nhân viên:</td>      
                    <td>{{$EmpID}}</td>            
                </tr>
                <tr>
                    <td>Tên nhân viên:</td>      
                    <td>{{$EmpName}}</td>            
                </tr>
                <tr>
                    <td>Sinh nhật:</td>      
                    <td>{{$Brithday}}</td>            
                </tr>
                <tr>
                    <td>Số điện thoại:</td>      
                    <td>{{$EmpPhone}}</td>            
                </tr>
                <tr>
                    <td>Email:</td>      
                    <td>{{$EmpEmail}}</td>            
                </tr>
                <tr>
                    <td>Địa chỉ:</td>      
                    <td>{{$EmpAddress}}</td>            
                </tr>
                </tr>
                <tr>
                    <td>Password:</td>      
                    <td>{{$Password}}</td>            
                </tr>
            </tbody> 
        </table>            
    </div>
</div>  
@endsection
