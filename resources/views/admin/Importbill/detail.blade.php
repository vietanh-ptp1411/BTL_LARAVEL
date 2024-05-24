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
        <li><a href="#">Hóa đơn nhập</a></li>
</ul>

<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Chi tiết hóa đơn nhập :</h2>
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
                    <td>Mã hóa đơn nhập:</td>      
                    <td>{{$importbill->MaHDN}}</td>            
                </tr>
                <tr>
                    <td>Tên nhà cung cấp:</td>          
                    <td>{{$importbill->supplier->SupName ?? 'N/A'}}</td>            
                </tr>
                <tr>
                    <td>Người nhập:</td>      
                    <td>{{$importbill->NguoiNhap}}</td>            
                </tr>
                <tr>
                    <td>Sản phẩm:</td>      
                    <td>{{$pro_name->product->ProName ?? 'N/A'}}</td>            
                </tr>
                <tr>
                    <td>Số lượng:</td>      
                    <td>{{$importbill->Quantity}}</td>            
                </tr>
                <tr>
                    <td>Giá nhập:</td>      
                    <td>{{number_format($importbill->ImpPrice)}}</td>            
                </tr>
                <tr>
                    <td>Tổng tiền:</td>      
                    <td>{{number_format($importbill->MoneyTotal)}}</td>            
                </tr>
                <tr>
                    <td>Ngày Nhập:</td>      
                    <td>{{$importbill->ImpDate}}</td>            
                </tr>
            </tbody>            
        </table>  
        <div>
            <a href="{{ route('printImportbill',['ImpID' => $importbill->ImpID])}}" class="btn btn-primary" name="">In hóa đơn</a>
        </div>          
    </div>
</div>  
@endsection
