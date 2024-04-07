<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="DoAn3_IMG/icon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/giohang.css')}}">
    <title>Giỏ hàng</title>
    <!-- <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    <script src="java.js"></script>
    <link rel="stylesheet" href="/font/fontchu.css">
</head>
<body>

@include('partials.header') 
<!-- Kết thúc phần đầu trang -->
<main style="margin-bottom: 40px;margin-top: 20px;">
    <div class="contaier">
        <div class="gh">
            <div class="cart">
                <?php
                    use Gloudemans\Shoppingcart\Facades\Cart;
                    $content = Cart::content();
                    // echo '<pre>';
                    // print_r($content) ;
                    // echo '<pre>';
                ?>
                <table class="table-cart">
                    <thead>
                        <tr>
                            <th width="20%" class="text-center">Ảnh</th>
                            <th width="25%" class="text-center">Tên Sản Phẩm</th>
                            <th width="15%" class="text-center">Đơn giá</th>
                            <th width="15%" class="text-center">Số lượng</th>
                            <th width="15%" class="text-center">Tổng</th>
                            <th width="10%" class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($content as $value)
                        <tr class="cart-item">
                            <td class="img">
                                <a  href="#" title="">
                                    <img style="width: 100%;height: 100%;" src="{{URL::to('DoAn3_IMG/' .$value->options->image)}}" alt="">
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="#" title="">
                                    {{$value->name}}
                                </a>
                            </td>
                            <td class="text-center">
                                <strong class="block">{{number_format($value->price )}} đ</strong>
                            </td>
                            <td class="text-center">
                                <div class="slgh">
                                    <form action="{{route('update-cart-quatity')}}" method="POST">
                                        {{csrf_field()}}
                                    <input class="inputsoluong" type="number" name="quantity_cart" value="{{$value->qty}}" >
                                    <input class="inputsoluong1" type="submit" name="update_quantity" value="Cập nhật">
                                    <input class="inputsoluong1" type="hidden" name="rowId_cart" value="{{$value->rowId}}">
                                    </form>
                                </div>
                                
                            </td>
                            <td class="text-center">
                                <strong class="block">
                                    <?php
                                        $suptotal = $value->price * $value->qty;
                                        echo number_format($suptotal);
                                    ?> 
                                đ</strong>
                            </td>
                            <td class="text-center">
                                <a href="{{URL::to('/delete_cart/'.$value->rowId)}}" class="remove">Xóa</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                <div class="note">
                    <p>Hỗ trợ ship 20k  cho đơn hàng từ 300k nội thành HN, HCM</p>
                    <p>Hỗ trợ ship 30k cho đơn hàng từ 500k các khu vực khác</p>
                    <p>Đơn hàng trên website được xử lý trong giờ hành chính</p>
                </div>
                <div class="cart-total">
                    <div class="total">Tổng:  {{Cart::priceTotal(0, ',','.')  }} <sup>đ</sup></div>
                    <div class="clearfix" style="height: 0;"></div>
                    <a href="{{route('home')}}" class="mstt">Tiếp tục mua sắm</a>
                    <a href="{{route('thanhtoan')}}" class="ttgh">Thanh toán</a>
                </div>
            </div>
            <div class="spdx">
                <h2><a href="">Sản Phẩm Mới</a></h2>
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
    </div>
</main>



@include('partials.footer')
<script>
    
</script> 
</body>
</html>