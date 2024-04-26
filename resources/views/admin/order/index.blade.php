@extends('admin.layouts.admin')
 
@section('title')
    <title>Đơn hàng</title>
@endsection
 
@section('content')
<div id="content" class="span10">
             
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Order</a></li>
			</ul>
			@if(session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Order</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						    <thead>
							    <tr>
								  <th style="text-align: center;">STT</th>
								  <th style="text-align: center;">Tên khách hàng</th>
								  <th style="text-align: center;">Tổng tiền</th>
								  <th style="text-align: center;">Phương thức thanh toán</th>
								  <th style="text-align: center;">Trạng thái</th>
								  <th style="text-align: center;">Chi tiết</th>
								  <th style="text-align: center;">Xóa đơn hàng</th>
								  <th style="text-align: center;">Xác nhận đơn hàng</th>
							    </tr>
						    </thead>   
						    <tbody>
								@php $i = 1; @endphp
								@foreach($order as $od)
								<tr>
									<td style="text-align: center;">{{ $i++ }}</td>
									<td style="text-align: left;  padding-left: 60px;">{{ $od->ReceivingName }}</td>
									<td style="text-align: center;">{{ number_format($od->MoneyTotal) }}đ</td>
									<td style="text-align: center;">{{ $od->Payment }}</td>
									<td style="text-align: center;"><input type="checkbox" {{ $od->Status ? 'checked' : '' }}></td>
									<td style="text-align: center;"><a href="{{route('order.detail',$od->OrdID)}}" class="btn btn-primary">Detail</a></td>
									<td style="text-align: center;"><a onclick="return confirm('Bạn có muốn hủy đơn hàng này không')" href="{{ route('order.destroy',$od->OrdID) }}" class="btn btn-danger">Destroy</a></td>
									<td style="text-align: center;"><a href="" class="btn btn-warning">Confirm</a></td>
								</tr>
								@endforeach
							</tbody>
					    </table>            
					</div>
				</div>

@endsection

