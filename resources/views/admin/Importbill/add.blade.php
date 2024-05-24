@extends('admin.layouts.admin')

@section('title')
    <title>Nhập hàng</title>
@endsection

@section('content')
    <div id="content" class="span10">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.html">Home</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="#">Nhập hàng</a></li>
        </ul>

        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon white user"></i><span class="break"></span>Nhập hàng</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <!-- <table class="table table-striped table-bordered bootstrap-datatable datatable"> -->
                    <form action="{{ route('importbill.store') }}" method="post">
                        @csrf
                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <tbody>
                                <?php
                                // Định nghĩa hàm tạo chuỗi ngẫu nhiên
                                function generateRandomString($length = 4)
                                {
                                    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                    $randomString = '';
                                    for ($i = 0; $i < $length; $i++) {
                                        $randomString .= $characters[rand(0, strlen($characters) - 1)];
                                    }
                                    return $randomString;
                                }
                                ?>
                                <tr>
                                    <td>Mã đơn nhập</td>
                                    <td><input type="text" name="MaHDN" id="MaHDN" value="{{ generateRandomString(4) . date('Ymd') }}"></td>
                                </tr>
                                <tr>
                                    <td>Tên người nhập</td>
                                    <td><input type="text" name="NguoiNhap" id="NguoiNhap"></td>
                                </tr>
                                <tr>
                                    <td>Nhà cung cấp</td>
                                    <td>
                                        <select name="SupID" id="SupID">
                                            <option value="" selected>Chọn nhà cung cấp</option>
                                            @foreach ($supplier as $sup)
                                                <option value="{{ $sup->SupID }}" name="SupID" id="SupID">
                                                    {{ $sup->SupName }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sản phẩm</td>
                                    <td>
                                        <select name="ProID" id="ProID" style="width:300px">
                                            <option value="" selected>Chọn sản phẩm</option>
                                            @foreach ($product as $pro)
                                                <option value="{{ $pro->ProID }}" name="ProID" id="ProID">
                                                    {{ $pro->ProName }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Số lượng</td>
                                    <td><input type='text' name='Quantity' id='Quantity'></td>
                                </tr>
                                <tr>
                                    <td>Giá nhập</td>
                                    <td><input type='text' name='ImpPrice' id='ImpPrice'></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>Ngày nhập hàng</td>
                                    <td><input type='text' name='ImpDate' id='ImpDate'></td>
                                </tr>
                                <tr>
                                    <td>Tổng tiền</td>
                                    <td><input type='text' name='MoneyTotal' id='MoneyTotal'></td>
                                </tr>
                                <tr>
                                    <td>Note</td>
                                    <td><input type='text' name='Note' id='Note'></td>
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
    </div>
@endsection
