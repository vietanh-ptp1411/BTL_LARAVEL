<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="DoAn3_IMG/icon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dangnhap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/orderstatus.css') }}">
    <title>Đơn Hàng</title>
    <link rel="stylesheet" href="/font/fontchu.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css"
        integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous" />
</head>

<body>

    @include('user.partials.header')

    <!-- Kết thúc phần đầu trang -->


    <div class="order">
        <div class="ord-header">
            <h2>Đơn hàng</h2>
        </div>
        <div class="ord-content">
            <table class="ord-table">
                <thead>
                    <tr>
                        <th style="text-align: center;">STT</th>
                        <th style="text-align: center;">Mã đơn hàng</th>
                        <th style="text-align: center;">Tên khách hàng</th>
                        <th style="text-align: center;">Sản Phẩm</th>
                        <th style="text-align: center;">Thành tiền</th>
                        <th style="text-align: center;">Ngày đặt hàng</th>
                        <th style="text-align: center;">Trạng thái</th>
                        <!-- <th style="text-align: center;">Chức năng</th> -->
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach ($orders as $od)
                       
                            <tr>
                                <td style="text-align: center;">{{ $i++ }}</td>
                                <td style="text-align: left;">{{ $od->MaDonHang }}</td>
                                <td style="text-align: left;">{{ $od->ReceivingName }}</td>
                                <td style="text-align: center;">
                                    @foreach ($details as $detail)
                                        @php
                                            $product = App\Models\Product::find($detail->ProID);
                                            if ($product) {
                                                echo $product->ProName;
                                            } else {
                                                echo 'Không tìm thấy sản phẩm';
                                            }
                                        @endphp
                                    @endforeach
                                </td>
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
                                <!-- <td style="text-align: center;">
                            <a href="{{ route('order.detail', $od->OrdID) }}" class="btn btn-primary">Chi tiết</a>
                            <a onclick="return confirm('Bạn có muốn hủy đơn hàng này không')" href="{{ route('order.CancelCheckout', $od->OrdID) }}" class="btn btn-danger">Hủy đơn</a>
                            <a onclick="return confirm('Bạn có chắc chắn xác nhận đơn hàng này không')" href="{{ route('order.confirm', $od->OrdID) }}" class="btn btn-warning">Xác nhận</a>
                        </td> -->

                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('user.partials.footer')
    <script src="{{ asset('js/dangnhap.js') }}"></script>
</body>

</html>
