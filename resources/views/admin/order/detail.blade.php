@extends('admin.layouts.admin')
 
@section('title')
    <title>Chi tiết đơn hàng</title>
@endsection
 
@section('content')
<div id="content" class="span10">
<ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Chi tiết đơn hàng</a></li>
</ul>

<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Chi tiết đơn hàng của : {{ $ReceivingName }}</h2>
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
                    <td>OrdID :</td>      
                    <td>{{$OrdID }}</td>            
                </tr>
                <tr>
                    <td>CusID:</td>      
                    <td>{{$CusID}}</td>            
                </tr>
                <tr>
                    <td>ReceivingName:</td>      
                    <td>{{$ReceivingName}}</td>            
                </tr>
                <tr>
                    <td>OrderDate:</td>      
                    <td>{{$OrderDate}}</td>            
                </tr>
                <tr>
                    <td>Status:</td>      
                    <td>{{$Status}}</td>            
                </tr>
                <tr>
                    <td>ReceivingAddress:</td>      
                    <td>{{$ReceivingAddress}}</td>            
                </tr>
                <tr>
                    <td>ReceivingPhone:</td>      
                    <td>{{$ReceivingPhone}}</td>            
                </tr>
                <tr>
                    <td colspan="2" style="padding-left: 100px; color: blue;">Chi tiết các sản phẩm khách mua là:</td>
                </tr>
                @php $i = 1; @endphp
                @foreach($ProIDs as $key => $ProID)
                    <tr>
                        <td>ProID thứ {{ $i++ }}:</td>      
                        <td>{{$ProID}}</td>            
                    </tr>
                    <tr>
                        <td>Quantity:</td>      
                        <td>{{$Quantities[$key]}}</td>            
                    </tr>
                    <tr>
                        <td>Price:</td>      
                        <td>{{$Prices[$key]}}</td>            
                    </tr>
                @endforeach        
                </tr>
                <tr>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td>MoneyTotal:</td>      
                    <td>{{ number_format($MoneyTotal) }}</td>            
                </tr>
                <tr>
                    <td>Note:</td>      
                    <td>{{$Note}}</td>            
                </tr>
                <tr>
                    <td>ReceivingEmail:</td>      
                    <td>{{$ReceivingEmail}}</td>            
                </tr>
                <tr>
                    <td>Payment:</td>      
                    <td>{{$Payment}}</td>            
                </tr>
                <tr>
                    <td>created_at:</td>      
                    <td>{{$created_at}}</td>            
                </tr>
                <tr>
                    <td>updated_at:</td>      
                    <td>{{$updated_at}}</td>            
                </tr>
                
            </tbody>
        </table>           
    </div>
</div>  
@endsection
