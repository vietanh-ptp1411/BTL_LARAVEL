@extends('admin.layouts.admin')
 
@section('title')
    <title>Danh sách danh mục</title>
@endsection
 
@section('content')
<div id="content" class="span10">
             
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index.html">Home</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#">Category</a></li>
	</ul>
	@if(session('success'))
		<div class="alert alert-success">
			{{ session('success') }}
		</div>
	@endif

	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white user"></i><span class="break"></span>Category</h2>
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
							<th>DM ID</th>
							<th>Tên DM</th>
							<th>Trạng thái</th>
							<th>Chi Tiết </th>
							<th>Sửa</th>
							<th>Xóa</th>
						</tr>
					</thead>   
					<tbody>
						@php $i = 1; @endphp
						@foreach($category as $sp)
						<tr>
							<td>{{ $i++ }}</td>
							<td>{{ $sp->CatName }}</td>
							<td><input type="checkbox" {{ $sp->Status ? 'checked' : '' }}></td>
							<td><a href="{{route('categories.detail',$sp->CatID)}}" class="btn btn-primary">Detail</a></td>
							<td><a href="{{route('categories.edit',$sp->CatID)}}" class="btn btn-warning">Edit</a></td>
							<td><a onclick="return confirm('Bạn có muốn xóa sản phẩm này không')" href="{{ route('categories.destroy',$sp->CatID) }}" class="btn btn-danger">Xoá</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>            
			</div>
		</div>
	</div>
@endsection

