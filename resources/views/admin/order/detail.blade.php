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
                    <td>Mã đơn hàng :</td>      
                    <td>{{$MaDonHang }}</td>            
                </tr>
                <tr>
                    <td>Mã người dùng:</td>      
                    <td>{{$CusID}}</td>            
                </tr>
                <tr>
                    <td>Tên khách hàng:</td>      
                    <td>{{$ReceivingName}}</td>            
                </tr>
                <tr>
                    <td>Ngày tạo đơn:</td>      
                    <td>{{$OrderDate}}</td>            
                </tr>
                <tr>
                    <td>Trạng thái:</td>      
                    <td>
                        @php
                            if($Status==0){
                                echo "Chưa xác nhận";
                            }
                            else {
                                echo "Đã xác nhận";
                            }
                        @endphp
                    </td>            
                </tr>
                <tr>
                    <td>Địa chỉ:</td>      
                    <td>{{$ReceivingAddress}}</td>            
                </tr>
                <tr>
                    <td>Số điện thoại:</td>      
                    <td>{{$ReceivingPhone}}</td>            
                </tr>
                <tr>
                    <td>Email:</td>      
                    <td>{{$ReceivingEmail}}</td>            
                </tr>
                <tr>
                    <td colspan="2" style="padding-left: 100px; color: blue;">Chi tiết các sản phẩm khách mua là:</td>
                </tr>
                @php $i = 1; @endphp
                @foreach($ProIDs as $key => $ProID)
                    <tr>
                        <td>Sản phẩm thứ {{ $i++ }}:</td>      
                        <td>
                            @php
                                $product = App\Models\Product::find($ProID);
                                if($product) {
                                    echo $product->ProName;
                                } else {
                                    echo "Không tìm thấy sản phẩm";
                                }
                            @endphp
                        </td>            
                    </tr>
                    <tr>
                        <td>Số lượng:</td>      
                        <td>{{$Quantities[$key]}}</td>            
                    </tr>
                    <tr>
                        <td>Giá:</td>      
                        <td>{{$Prices[$key]}}</td>            
                    </tr>
                @endforeach        
                </tr>
                <tr>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td>Tổng tiền:</td>      
                    <td>{{ number_format($MoneyTotal) }}</td>            
                </tr>
                <tr>
                    <td>Ghi chú:</td>      
                    <td>{{$Note}}</td>            
                </tr>
                <tr>
                    <td>Hình thức thanh toán:</td>      
                    <td>{{$Payment}}</td>            
                </tr>
            </tbody>
        </table>           
    </div>
</div>  
@endsection
