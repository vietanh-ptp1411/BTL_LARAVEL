@extends('admin.layouts.admin')
 
@section('title')
    <title>Hóa đơn nhập</title>
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
	@if(session('success'))
		<div class="alert alert-success">
			{{ session('success') }}
		</div>
	@endif

	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white user"></i><span class="break"></span>Hóa đơn nhập</h2>
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
							<th>STT</th>
							<th>Sản phẩm</th>
							<th>Tên nhà cung cấp</th>
							<th>Ngày nhập</th>
							<th>Tổng tiền</th>
							<th>Chi tiết</th>
							<th>Xóa</th>
						</tr>
					</thead>   
					<tbody>
						@php $i = 1; @endphp
						@foreach($importbill as $ip)
						<tr>
							<td>{{ $i++ }}</td>
							<td>{{ $ip->SupID }}</td> {{-- Sau thay bằng tên sản phẩm --}}
							<td>{{ $ip->EmpID }}</td>
							<td>{{ $ip->MoneyTotal }}</td>
							<td>{{ $ip->ImpDate }}</td>
							<td><a href="{{route('importbill.detail',$ip->ImpID)}}" class="btn btn-primary">Detail</a></td>
							<td><a onclick="return confirm('Bạn có muốn xóa hóa đơn này không')" href="{{ route('importbill.destroy',$ip->ImpID) }}" class="btn btn-danger">Delete</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>            
			</div>
		</div>
	</div>
@endsection

