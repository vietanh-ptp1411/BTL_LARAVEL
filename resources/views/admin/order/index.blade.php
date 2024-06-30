@extends('admin.layouts.admin')

@section('title')
    <title>Đơn hàng</title>
@endsection

@section('content')
    <div id="content" class="span10">

        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.html">Home</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="#">Order</a></li>
        </ul>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon white user"></i><span class="break"></span>Order</h2>
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
                                <th style="text-align: center;">STT</th>
                                <th style="text-align: center;">Mã đơn hàng</th>
                                <th style="text-align: center;">Tên khách hàng</th>
                                <th style="text-align: center;">Số điện thoại</th>
                                <th style="text-align: center;">Thành tiền</th>
                                <th style="text-align: center;">Ngày đặt hàng</th>
                                <th style="text-align: center;">Trạng thái</th>
                                <th style="text-align: center;">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($order as $od)
                                <tr>
                                    <td style="text-align: center;">{{ $i++ }}</td>
                                    <td style="text-align: left;">{{ $od->MaDonHang }}</td>
                                    <td style="text-align: left;">{{ $od->ReceivingName }}</td>
                                    <td style="text-align: center;">{{ $od->ReceivingPhone }}</td>
                                    <td style="text-align: center;">{{ number_format($od->MoneyTotal) }}đ</td>
                                    <td style="text-align: center;">{{ $od->OrderDate }}</td>
                                    <td style="text-align: center;">
                                        @if ($od->Status == 1)
                                            <span style="margin-top: 8PX" class="badge badge-success">Đã xác nhận</span>
                                        @elseif($od->Status == 2)
                                            <span style="margin-top: 8PX" class="badge badge-danger">Đơn đã hủy</span>
                                        @else
                                            <span style="margin-top: 8PX" class="badge badge-warning">Chờ xác nhận</span>
                                        @endif
                                    </td>
                                    <td style="text-align: center;">
                                        <a href="{{ route('order.detail', $od->OrdID) }}" class="btn btn-primary">Chi
                                            tiết</a>
                                        <a onclick="return confirm('Bạn có muốn hủy đơn hàng này không')"
                                            href="{{ route('order.CancelCheckout', $od->OrdID) }}" class="btn btn-danger">Hủy
                                            đơn</a>

                                        @if ($od->Status != 1)
                                            <a onclick="return confirm('Bạn có chắc chắn xác nhận đơn hàng này không')"
                                                href="{{ route('order.confirm', $od->OrdID) }}" class="btn btn-warning">Xác
                                                nhận</a>
										@endif

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
