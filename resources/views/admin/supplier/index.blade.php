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
		<li><a href="#">Nhà cung cấp</a></li>
	</ul>
	@if(session('success'))
		<div class="alert alert-success">
			{{ session('success') }}
		</div>
	@endif

	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white user"></i><span class="break"></span>Nhà cung cấp</h2>
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
							<th style="text-align: center">STT</th>
							<th style="text-align: center">Tên nhà cung cấp</th>
							<th style="text-align: center">Địa chỉ</th>
							<th style="text-align: center">Email</th>
							<th style="text-align: center">Phone</th>
							<th style="text-align: center">Chức năng</th>
						</tr>
					</thead>   
					<tbody>
						@php $i = 1; @endphp
						@foreach($supplier as $sup)
						<tr>
							<td>{{ $i++ }}</td>
							<td>{{ $sup->SupName }}</td> {{-- Sau thay bằng tên sản phẩm --}}
							<td>{{ $sup->SupAddress }}</td>
							<td>{{ $sup->SupEmail }}</td>
							<td>{{ $sup->SupPhone }}</td>
							<td>
								<a href="{{route('supplier.detail',$sup->SupID)}}" class="btn btn-primary">Detail</a>
								<a href="{{route('supplier.edit',$sup->SupID)}}" class="btn btn-warning">Edit</a>
								<a onclick="return confirm('Bạn có muốn xóa hóa đơn này không')" href="{{ route('supplier.destroy',$sup->SupID) }}" class="btn btn-danger">Delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>            
			</div>
		</div>
	</div>
@endsection

