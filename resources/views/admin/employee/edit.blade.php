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

<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Sửa Nhân viên: </h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
        
        <form action="{{ route('employee.update',['EmpID' => $employee->EmpID]) }}" method="POST">
            @csrf
            @method('PUT')
            <table  class="table table-striped table-bordered bootstrap-datatable datatable">
            <tbody>
                <tr>
                    <td>Tên nhân viên</td>
                    <td><input type='text' name='EmpName' id='EmpName' value='{{$employee->EmpName}}'></td>                  
                </tr>
                <tr>
                    <td>Ngày sinh</td>
                    <td><input type='text' name='Brithday' id='Brithday' value='{{$employee->Brithday}}'></td>                  
                </tr>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type='text' name='EmpAddress' id='EmpAddress' value='{{$employee->EmpAddress}}'></td>                  
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type='text' name='EmpEmail' id='EmpEmail' value='{{$employee->EmpEmail}}'></td>                  
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type='text' name='EmpPhone' id='EmpPhone' value='{{$employee->EmpPhone}}'></td>                  
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type='text' name='Password' id='Password' value='{{$employee->Password}}'></td>                  
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
