
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
    @include('partials.header') 

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
                            <strong>Beauty Box đã nhận được yêu cầu đặt hàng của bạn!</strong>
                        </p>
                        <p>Mã đơn hàng của bạn là&nbsp;
                            <strong>
                                <strong style="color: #ffb0bd;">248473837</strong>
                            </strong>
                        </p>
                        <p>Bộ phận CSKH sẽ gọi điện xác nhận đơn hàng và hướng dẫn thanh toán</p>
                        <p>Đơn hàng trên website được xử lý trong giờ hành chính</p>
                        <p>Sau khi được xác nhận, đơn hàng sẽ được giao cho bạn trong vòng 2-4 ngày</p>
                        <p>Cảm ơn bạn đã&nbsp;đồng hành cùng Moji.</p>
                    </div>
                </div>
                <a href="/danhmucsp/danhmuc.html" class="camon-back" title="Quay lại trang sản phẩm">
                    <strong>Quay lại trang sản phẩm</strong>
                </a>
            </div>
        </div>
    </form>

    <div class="k5">
        <h2><a href="">Các sản phẩm đã xem</a></h2>
        <div id="wrapper">
            <ul class="product">
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                <img src="/anh/spm1.webp" alt="">  
                            </a>
                            <a href="" class="buy-now">Mua ngay</a>
                        </div>
                        <div class="product-info">
                            <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Tinh Chất Dưỡng Sáng Da AHC Niacin Biome Mela Scissors Max Essence 30ml">Tinh Chất Dưỡng Sáng Da AHC Niacin Biome Mela Scissors Max Essence 30ml</a>
                            <div class="product-price">1.050.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                <img src="/anh/spm2.webp" alt="">  
                            </a>
                            <a href="" class="buy-now">Mua ngay</a>
                        </div>
                        <div class="product-info">
                            <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Sữa Rửa Mặt Dạng Bọt Cấp Ẩm Chuyên Sâu Curél Foaming Facial Wash 150Ml">Sữa Rửa Mặt Dạng Bọt Cấp Ẩm Chuyên Sâu Curél Foaming Facial Wash 150Ml</a>
                            <div class="product-price">325.600đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                <img src="/anh/spm3.webp" alt="">  
                            </a>
                            <a href="" class="buy-now">Mua ngay</a>
                        </div>
                        <div class="product-info">
                            <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Phấn Nước Căng Mướt Da Clio Kill Cover Mesh Glow Cushion SPF50+, PA++++ 15g (tặng kèm lõi)">Quạt USB cầm tay sạc tích điện Cute dinosaur khủng long heart paw</a>
                            <div class="product-price">819.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                <img src="/anh/spm4.webp" alt="">  
                            </a>
                            <a href="" class="buy-now">Mua ngay</a>                    
                        </div>
                        <div class="product-info">
                            <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Má Hồng Dạng Kem Ofélia Lolli Liquid Blush 4.3g">Má Hồng Dạng Kem Ofélia Lolli Liquid Blush 4.3g</a>
                            <div class="product-price">199.000đ</div>
                        </div>
                    </div>
                </li>
        </div>
    </div>
</main>






@include('partials.footer') 
<script src="/chi tiết 1 sản phẩm/chitiet.js"></script>  
</body>
</html>