
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/anh/logo-f.webp">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/camon.css')}}">
    <title>Đặt hàng thành công</title>
    <!-- <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/font/fontchu.css">
</head>
<body>
    @include('user.partials.header') 

<!-- Kết thúc phần đầu trang -->


<main class="main">
    <form class="formcheck">
        <div class="thongtin">
            <div class="camon">
                <div class="camon-title">
                    THANK YOU 
                    <i class="fa fa-heart"></i>
                </div>
                <div class="camon-main">
                    <div class="camon-img">
                        <img src="/anh/camon.png" alt="purchase">
                    </div>
                    <div class="camon-text">
                        <p>
                            <strong>BaloOnline đã nhận được yêu cầu đặt hàng của bạn!</strong>
                        </p>
                        <p>Mã đơn hàng của bạn là&nbsp;
                            <strong>
                                <strong style="color: #ffb0bd;">{{ Session::get('MaDonHang') }}</strong>
                            </strong>
                        </p>
                        <p>Bộ phận CSKH sẽ gọi điện xác nhận đơn hàng và hướng dẫn thanh toán</p>
                        <p>Đơn hàng trên website được xử lý trong giờ hành chính</p>
                        <p>Sau khi được xác nhận, đơn hàng sẽ được giao cho bạn trong vòng 2-4 ngày</p>
                        <p>Cảm ơn bạn đã&nbsp;đồng hành cùng BaloOnline.</p>
                    </div>
                </div>
                <a href="{{route('home')}}" class="camon-back" title="Quay lại trang sản phẩm">
                    <strong>Quay lại trang sản phẩm</strong>
                </a>
            </div>
        </div>
    </form>
</main>






@include('user.partials.footer') 
<script src="/chi tiết 1 sản phẩm/chitiet.js"></script>  
</body>
</html>