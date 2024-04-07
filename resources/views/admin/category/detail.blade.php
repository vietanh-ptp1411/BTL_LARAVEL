@extends('admin.layouts.admin')
 
@section('title')
    <title>Category Details</title>
@endsection
 
@section('content')
<div id="content" class="span10">
<ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Category Details</a></li>
</ul>

<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Chi tiết sản phẩm : {{ $CatName }}</h2>
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
                    <td>CatID:</td>      
                    <td>{{$CatID}}</td>            
                </tr>
                <tr>
                    <td>CatName:</td>      
                    <td>{{$CatName}}</td>            
                </tr>
                <tr>
                    <td>MetaTitle:</td>      
                    <td>{{$MetaTitle}}</td>            
                </tr>
                <tr>
                    <td>Stuffs:</td>      
                    <td>{{$Stuffs}}</td>            
                </tr>
                <tr>
                    <td>RootID:</td>      
                    <td>{{$RootID}}</td>            
                </tr>
                <tr>
                    <td>DisplayOrder:</td>      
                    <td>{{$DisplayOrder}}</td>            
                </tr>
                <tr>
                    <td>created_at:</td>      
                    <td>{{$created_at}}</td>            
                </tr>
                <tr>
                    <td>CreateBy:</td>      
                    <td>{{$CreateBy}}</td>            
                </tr>
                <tr>
                    <td>ModifiedDate:</td>      
                    <td>{{$ModifiedDate}}</td>            
                </tr>
                <tr>
                    <td>MetaDescriptions:</td>      
                    <td>{{$MetaDescriptions}}</td>            
                </tr>
                <tr>
                    <td>Status:</td>      
                    <td>{{$Status}}</td>            
                </tr>
                <tr>
                    <td>ShowMenu:</td>      
                    <td>{{$ShowMenu}}</td>            
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
