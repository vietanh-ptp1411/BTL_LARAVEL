@extends('admin.layouts.admin')
 
@section('title')
    <title>Category Create</title>
@endsection
 
@section('content')
<div id="content" class="span10">
<ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Category Create</a></li>
</ul>

<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Thêm Danh Mục Sản Phẩm</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
        <form action="{{ route('categories.store')}}" method="post">
            @csrf
            <table  class="table table-striped table-bordered bootstrap-datatable datatable">
            <tbody>
                
                <tr>
                    <td>CatName</td>
                    <td><input type="text" name="CatName" id="CatName" ></td>                  
                </tr>
                <tr>
                    <td>MetaTitle</td>
                    <td><input type="text" name="MetaTitle" id="MetaTitle"></td>                  
                </tr>
                <tr>
                    <td>Stuffs</td>
                    <td><input type="text" name="Stuffs" id="Stuffs"></td>                  
                </tr>
                <tr>
                    <td>RooID</td>
                    <td><input type="text" name="RooID" id="RooID"></td>                  
                </tr>
                <tr>
                    <td>DisplayOrder</td>
                    <td><input type="text" name="DisplayOrder" id="DisplayOrder"></td>                  
                </tr>
                <tr>
                    <td>CreateBy</td>
                    <td><input type="text" name="CreateBy" id="CreateBy"></td>                  
                </tr>
                <tr>
                    <td>ModifiedDate</td>
                    <td><input type="text" name="ModifiedDate" id="ModifiedDate"></td>                  
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input type="text" name="Status" id="Status"></td>                  
                </tr>
                <tr>
                    <td>ShowMenu</td>
                    <td><input type="text" name="ShowMenu" id="ShowMenu"></td>                  
                </tr> 
                <tr>
                    <td>MetaDescriptions</td>
                    <td>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2"></label>
                            <div class="controls">
                                <textarea class="cleditor" id="textarea2" rows="3" ></textarea>
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
