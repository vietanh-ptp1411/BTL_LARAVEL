@extends('admin.layouts.admin')
 
@section('title')
    <title>Thêm nhà cung cấp</title>
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

<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Thêm nhà cung cấp</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
        <form action="{{ route('supplier.store')}}" method="post">
            @csrf
            <table  class="table table-striped table-bordered bootstrap-datatable datatable">
            <tbody>
                <tr>
                    <td>Tên nhân viên</td>
                    <td><input type="text" name="EmpName" id="EmpName" ></td>                  
                </tr>
                <tr>
                    <td>Ngày sinh</td>
                    <td><input type="text" name="Brithday" id="Brithday" ></td>                  
                </tr>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type='text' name='EmpAddress' id='EmpAddress'></td>                  
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type='text' name='EmpEmail' id='EmpEmail'></td>                  
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type='text' name='EmpPhone' id='EmpPhone'></td>                  
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type='text' name='Password' id='Password'></td>                  
                </tr>   
            </tbody> 
        </table> 
        <div class="form-actions">
            <button type="submit" class="btn btn-primary" name="">Save</button>                          
            <button type="reset" class="btn">Cancel</button>
		</div>
        </form>            
    </div>
</div>  
</div>    
@endsection
