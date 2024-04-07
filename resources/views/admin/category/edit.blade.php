@extends('admin.layouts.admin')
 
@section('title')
    <title>Sửa danh mục</title>
@endsection
 
@section('content')
<div id="content" class="span10">
<ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">EDIT Category</a></li>
</ul>

<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Sửa danh mục sản phẩm: {{$category->CatID}}</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
        
        <form action="{{ route('categories.update',['CatID' => $category->CatID]) }}" method="POST">
            @csrf
            @method('PUT')
            <table  class="table table-striped table-bordered bootstrap-datatable datatable">
            <tbody>
            
                <tr>
                    <td>CatName</td>
                    <td><input type='text' name='CatName' id='CatName' value='{{$category->CatName}}'></td>                  
                </tr>
                <tr>
                    <td>MetaTitle</td>
                    <td><input type='text' name='MetaTitle' id='MetaTitle' value='{{$category->MetaTitle}}'></td>                  
                </tr>
                <tr>
                    <td>Stuffs</td>
                    <td><input type='text' name='Stuffs' id='Stuffs' value='{{$category->Stuffs}}'></td>                  
                </tr>
                <tr>
                    <td>RooID</td>
                    <td><input type='text' name='RootID' id='RootID' value='{{$category->RootID}}'></td>                  
                </tr>
                <tr>
                    <td>DisplayOrder</td>
                    <td><input type='text' name='DisplayOrder' id='DisplayOrder' value='{{$category->DisplayOrder}}'></td>                  
                </tr>
                <tr>
                    <td>CreateBy</td>
                    <td><input type='text' name='CreateBy' id='CreateBy' value='{{$category->CreateBy}}'></td>                  
                </tr>
                <tr>
                    <td>ModifiedDate</td>
                    <td><input type='text' name='ModifiedDate' id='ModifiedDate' value='{{$category->ModifiedDate}}'></td>                  
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input type='text' name='Status' id='Status' value='{{$category->Status}}'></td>                  
                </tr>
                <tr>
                    <td>ShowMenu</td>
                    <td><input type='text' name='ShowMenu' id='ShowMenu' value='{{$category->ShowMenu}}'></td>                  
                </tr>
                <tr>
                    <td>MetaDescriptions</td>
                    <td>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2"></label>
                            <div class="controls">
                                <textarea class="cleditor" id="textarea2" name="MetaDescriptions" rows="3" value="">{{ $category->MetaDescriptions }}</textarea>
                            </div>
                        </div>
                    </td>
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
