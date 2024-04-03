@extends('admin.layouts.admin')
 
@section('title')
    <title>Product Create</title>
@endsection
 
@section('content')
<div id="content" class="span10">
<ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Product Create</a></li>
</ul>

<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon white user"></i><span class="break"></span>Thêm Sản Phẩm</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
        </div>
    </div>
    <div class="box-content">
        <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
        <form action="{{ route('product.store')}}" method="post">
            @csrf
            <table  class="table table-striped table-bordered bootstrap-datatable datatable">
                <tbody>  
                    <tr>
                        <td>CatID</td>
                        <td><input type='text' name='CatID' id='CatID' ></td>                  
                    </tr>
                    <tr>
                        <td>Metatitle</td>
                        <td><input type='text' name='Metatitle' id='Metatitle' ></td>                  
                    </tr>
                    <tr>
                        <td>ProName</td>
                        <td><input type='text' name='ProName' id='ProName' ></td>                  
                    </tr>
                    <tr>
                        <td>ProDescription</td>
                        <td><input type='text' name='ProDescription' id='ProDescription' ></td>                  
                    </tr>
                    <tr>
                        <td>ProColor</td>
                        <td><input type='text' name='ProColor' id='ProColor' ></td>                  
                    </tr>
                    <tr>
                        <td>Materials</td>
                        <td><input type='text' name='Materials' id='Materials' ></td>                  
                    </tr>
                    <tr>
                        <td>Size</td>
                        <td><input type='text' name='Size' id='Size' ></td>                  
                    </tr>
                    <tr>
                        <td>ProImage</td>
                        <td>
                            <input type='file' name='ProImage' id='ProImage' accept="DoAn3_IMG/*">
                        </td>                  
                    </tr>

                    <tr>
                        <td>Tags</td>
                        <td><input type='text' name='Tags' id='Tags' ></td>                  
                    </tr>
                    <tr>
                        <td>MoreImage</td>
                        <td><input type='text' name='MoreImage' id='MoreImage' ></td>                  
                    </tr>
                    <tr>
                        <td>CreateBy</td>
                        <td><input type='text' name='CreateBy' id='CreateBy' ></td>                  
                    </tr>
                    <tr>
                        <td>Displayhome</td>
                        <td><input type='text' name='Displayhome' id='Displayhome' ></td>                  
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><input type='text' name='Status' id='Status' ></td>                  
                    </tr>
                    <tr>
                        <td>inventory</td>
                        <td><input type='text' name='inventory' id='inventory' ></td>                  
                    </tr>
                    <tr>
                        <td>sold</td>
                        <td><input type='text' name='sold' id='sold' ></td>                  
                    </tr>
                    <tr>
                        <td>MetaDescriptions</td>
                        <td>
                            <div class="control-group hidden-phone">
                                <label class="control-label" for="textarea2"></label>
                                <div class="controls">
                                    <textarea name='MetaDescriptions' id='MetaDescriptions' class="cleditor" id="textarea2" rows="3" ></textarea>
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
