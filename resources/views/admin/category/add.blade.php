@extends('admin.layouts.admin')

@section('title')
    <title>Thêm Danh Mục</title>
@endsection

@section('content')
    <div id="content" class="span10">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.html">Home</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="#">Thêm danh mục</a></li>
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
                        <form action="{{ route('categories.store') }}" method="post">
                            @csrf
                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                <tbody>

                                    <tr>
                                        <td>Tên danh mục</td>
                                        <td><input type="text" name="CatName" id="CatName"></td>
                                    </tr>
                                    <tr>
                                        <td>Tiêu đề</td>
                                        <td><input type="text" name="MetaTitle" id="MetaTitle"></td>
                                    </tr>
                                    <tr>
                                        <td>Người tạo</td>
                                        <td><input type="text" name="CreateBy" id="CreateBy"></td>
                                    </tr>
                                    <tr>
                                        <td>Trạng thái</td>
                                        <td><input type="text" name="Status" id="Status"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary" name="">Save</button>
                                <button type="reset" class="btn">Cancel</button>
                            </div>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    @endsection
