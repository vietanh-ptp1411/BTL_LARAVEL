@extends('admin.layouts.admin')
 
@section('title')
    <title>Chi tiết hóa đơn bán</title>
@endsection
 
@section('content')
<div id="content" class="span10">
<ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Chi tiết hóa đơn bán</a></li>
</ul>

<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Chi tiết hóa đơn bán</h2>
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
                        <td>Mã Đơn Hàng:</td>      
                        <td>{{$MaDonHang}}</td>            
                    </tr>
                    
                    <tr>
                        <td>Tên khách hàng:</td>      
                        <td>{{$SalName}}</td>            
                    </tr>
                    <tr>
                        <td>Địa chỉ:</td>      
                        <td>{{$Address}}</td>            
                    </tr>
                    <tr>
                        <td>Số điện thoại:</td>      
                        <td>{{$Phone}}</td>            
                    </tr>
                    <tr>
                        <td>Ngày xuất đơn:</td>      
                        <td>{{$SalDate}}</td>            
                    </tr>
                    <tr>
                        <td>Note:</td>      
                        <td>{{$Note}}</td>            
                    </tr>

                    <tr>
                        <td colspan="2" style="padding-left: 100px; color: blue;">Chi tiết các sản phẩm khách mua là:</td>
                    </tr>
                    
                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                        <thead>
                            <tr style="border-bottom: 1px solid #a2a2a2;">
                                <th style="width: 5%;text-align: center;">STT</th>
                                <th style="width: 40%;text-align: center;">Tên sản phẩm</th>
                                <th style="width: 20%;text-align: center;">Ảnh sản phẩm</th>
                                <th style="width: 10%;text-align: center;">Số lượng</th>
                                <th style="width: 10%;text-align: center;">Giá</th>
                                <th style="width: 15%;text-align: center;">Thành tiền</th>
                            </tr>
                        </thead>
                        @php $i = 1; @endphp
                        @foreach($ProIDs as $key => $ProID)
                            <tbody>
                                <tr>
                                    <td style="text-align: center;">{{ $i++ }}</td>      
                                    <td style="text-align: center;">
                                        @php
                                            $product = App\Models\Product::find($ProID);
                                            if($product) {
                                                echo $product->ProName;
                                            } else {
                                                echo "Không tìm thấy sản phẩm";
                                            }
                                        @endphp
                                    </td>          
                                    <td style="text-align: center;">
                                        @php
                                            $product = App\Models\Product::find($ProID);
                                            if($product) {
                                                echo '<img src="/DoAn3_IMG/' . $product->ProImage . '" style="width:100px" >';
                                            } else {
                                                echo "Không tìm thấy sản phẩm";
                                            }
                                        @endphp
                                    </td>    
                                    <td style="text-align: center;">{{$Quantities[$key]}}</td>        
                                    <td style="text-align: center;">{{number_format($Prices[$key])}}đ</td>            
                                    <td style="text-align: center;">{{number_format($Quantities[$key] * $Prices[$key]) }} đ</td>            
                                </td>
                            </tbody>   
                        @endforeach  
                    </table>    
                         
                    </tr>
                    
                    <div style="display: flex">
                        <p style="color: red; margin-right:15px">Tổng tiền:</p>      
                        <p>{{ number_format($MoneyTotal) }} đ</p>            
                    </div>
                    <div>
                        <a href="{{ route('printInvoices',['SalID' => $sale->SalID])}}" class="btn btn-primary" name="">In hóa đơn</a>
                    </div>
                </tbody>
            </table>           
        </div>
    </div>
</div>  
@endsection
