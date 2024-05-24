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
	@if(session('success'))
		<div class="alert alert-success">
			{{ session('success') }}
		</div>
	@endif

	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white user"></i><span class="break"></span>Nhân viên</h2>
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
							<th style="text-align: center">Tên nhân viên</th>
							<th style="text-align: center">Địa chỉ</th>
							<th style="text-align: center">Email</th>
							<th style="text-align: center">Phone</th>
							<th style="text-align: center">Chức năng</th>
						</tr>
					</thead>   
					<tbody>
						@php $i = 1; @endphp
						@foreach($employee as $emp)
						<tr>
							<td>{{ $i++ }}</td>
							<td>{{ $emp->EmpName }}</td>
							<td>{{ $emp->EmpAddress }}</td>
							<td>{{ $emp->EmpEmail }}</td>
							<td>{{ $emp->EmpPhone }}</td>
							<td style="display:flex; justify-content: space-between;">
								<a href="{{route('employee.detail',$emp->EmpID)}}" class="btn btn-primary">Detail</a>
								<a href="{{route('employee.edit',$emp->EmpID)}}" class="btn btn-warning">Edit</a>
								<a onclick="return confirm('Bạn có muốn xóa hóa đơn này không')" href="{{ route('employee.destroy',$emp->EmpID) }}" class="btn btn-danger">Delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>            
			</div>
		</div>
	</div>
@endsection

