@extends('admin.layouts.admin')
 
@section('title')
    <title>Product Details</title>
@endsection
 
@section('content')
<div id="content" class="span10">
<ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Product Details</a></li>
</ul>

<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Chi tiết sản phẩm : {{ $ProName }}</h2>
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
                    <td>ProID:</td>      
                    <td>    {{$ProID}}</td>            
                </tr>
                <tr>
                    <td>CatID:</td>      
                    <td>    {{$CatID}}</td>            
                </tr>
                <tr>
                    <td>Metatitle:</td>      
                    <td>    {{$Metatitle}}</td>            
                </tr>
                <tr>
                    <td>ProName:</td>      
                    <td>    {{$ProName}}</td>            
                </tr>
                <tr>
                    <td>ProDescription:</td>      
                    <td>    {{$ProDescription}}</td>            
                </tr>
                <tr>
                    <td>ProColor:</td>      
                    <td>    {{$ProColor}}</td>            
                </tr>
                <tr>
                    <td>Materials:</td>      
                    <td>    {{$Materials}}</td>            
                </tr>
                <tr>
                    <td>Size:</td>      
                    <td>    {{$Size}}</td>            
                </tr>
                <tr>
                    <td>ProImage:</td>   
                    <td><img src="/DoAn3_IMG/{{$ProImage}}" style="width:100px" ></td>            
                </tr>

                <tr>
                    <td>Tags:</td>      
                    <td>    {{$Tags}}</td>            
                </tr>
                <tr>
                    <td>MoreImage:</td>
                    <td>
                        <div class="image-container">
                            @foreach($imagemore as $m)
                                <img data-imgbigurl="{{ asset('DoAn3_IMG/' . $m) }}"
                                    src="{{ asset('DoAn3_IMG/' . $m) }}"
                                    alt="" style="width:100px">
                            @endforeach
                        </div>
                    </td>            
                </tr>

                        
                               
                </tr>

                <tr>
                    <td>created_at:</td>      
                    <td>    {{$created_at}}</td>            
                </tr>
                <tr>
                    <td>CreateBy:</td>      
                    <td>    {{$CreateBy}}</td>            
                </tr>
                <tr>
                    <td>MetaDescriptions:</td>      
                    <td>    {{$MetaDescriptions}}</td>            
                </tr>
                <tr>
                    <td>Displayhome:</td>      
                    <td>    {{$Displayhome}}</td>            
                </tr>
                <tr>
                    <td>Status:</td>      
                    <td>    {{$Status}}</td>            
                </tr>
                <tr>
                    <td>inventory:</td>      
                    <td>    {{$inventory}}</td>            
                </tr>
                <tr>
                    <td>sold:</td>      
                    <td>    {{$sold}}</td>            
                </tr>
                <tr>
                    <td>updated_at:</td>      
                    <td>    {{$updated_at}}</td>            
                </tr>
            </tbody>
        </table>           
    </div>
</div>  
@endsection
