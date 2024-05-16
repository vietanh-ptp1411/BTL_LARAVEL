<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('DoAn3_IMG/icon.png') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/thanhtoan.css') }}">
    <title>Thanh toán</title>
    <!-- <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    <script src="{{ asset('js/thanhtoan.js') }}"></script>
    <link rel="stylesheet" href="/font/fontchu.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js'></script>
</head>
<body>
@include('partials.header') 

<!-- Kết thúc phần đầu trang -->


<main class="main">
    <form class="formcheck" action="{{route('pay_submit')}}"  method="POST">
        {{csrf_field()}}
        <div class="thongtin">
            <div class="thongtin-nguoimua">
                <h2 class="title">
                    <span class="sokyhieu">1</span>
                    Thông tin người nhận
                </h2>
                @foreach($customer as $cus)
                    @if($cus->CusID == Session::get('CusID'))
                        <div class="form-group">
                            <p>Tên người nhận:</p>
                            <input type="text" name="ReceivingName" class="input-ten" value="{{ old('ReceivingName', isset($cus) ? $cus->CusName : '') }}">
                        </div>
                        <div class="form-group">
                            <p>Số điện thoại liên hệ:</p>
                            <input type="text" name="ReceivingPhone" class="input-ten" value="{{ old('ReceivingPhone', isset($cus) ? $cus->CusPhone : '') }}">
                        </div>
                        <div class="form-group">
                            <p>Email liên hệ:</p>
                            <input type="text" name="ReceivingEmail" class="input-ten" value="{{ old('ReceivingEmail', isset($cus) ? $cus->CusEmail : '') }}">
                        </div>
                        <div class="form-group">
                            <p>Địa chỉ nhận hàng:</p>
                            <input type="text" name="ReceivingAddress" class="input-ten"  value="{{ old('ReceivingAddress', isset($cus) ? $cus->CusAddress : '') }}">
                        </div>
                        <div class="form-group-tera">
                            <p>Ghi chú:</p>
                            <textarea type="text" name="Note" class="textarea-ten" rows="3 " placeholder="Nhập ghi chú..."></textarea>
                        </div>
                    @endif
                @endforeach
                <div>Đơn hàng trên website được xử lý trong giờ hành chính</div>
                <div>Vui lòng liên hệ fanpage ngoài khung giờ trên để được hỗ trợ</div>
            </div>


            <div class="thongtin-phuongthuc">
                <h2 class="title">
                    <span class="sokyhieu">2</span>
                    Phương thức thanh toán
                </h2>
                <div class="block-item">
                    <label class="label-check">
                        <input name="payment_option" value="ATM" type="radio" class="check-input">
                        <div class="text-block">Chuyển khoản trước toàn bộ tiền hàng</div>
                    </label>
                    <div class="pay">
                        <p style="font-size: 14px;">
                            <span style="font-family: Arial, Helvetica, sans-serif;">Với phương thức Chuyển khoản trước toàn bộ tiền hàng, bộ phận CSKH sẽ gọi điện đến bạn để xác nhận đơn hàng và hướng dẫn cách thức thanh toán chuyển khoản</span>
                        </p>
                    </div>
                </div>
                <div class="block-item">
                    <label class="label-check">
                        <input name="payment_option" value="TrucTiep" type="radio" class="check-input" checked>
                        <div class="text-block">Thanh toán khi nhận hàng</div>
                    </label>
                    <div class="pay">
                        <p style="font-size: 14px;">
                            <span style="font-family: Arial, Helvetica, sans-serif;">Thanh toán khi nhận hàng (COD) chỉ áp dụng cho các đơn hàng ở các quận/huyện dưới đây thuộc Hà Nội/TP.HCM:</span>
                        </p>
                        <p style="font-family:'Roboto Condensed', Arial, sans-serif;font-size:14px;margin:0px;padding:5px 0px;">
                            <span style="font-family: Arial, Helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp;      + Hà Nội: Quận Hoàn Kiếm, Ba Đình, Đống Đa, Hoàng Mai, Hai Bà Trưng, Cầu Giấy, Thanh Xuân,Tây Hồ, Từ Liêm, Hà Đông, Long Biên, Gia Lâm, Sơn Tây, Ba Vì, Mê Linh, Đông Anh, Thường Tín, Thanh Trì </span>
                        </p>
                        <p style="font-family:'Roboto Condensed', Arial, sans-serif;font-size:14px;margin:0px;padding:5px 0px;">
                            <span style="font-family: Arial, Helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp;       + HCM: Quận 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, Tân Bình, Tân Phú, Phú Nhuận, Bình Thạnh, Gò Vấp,Bình Tân, Thủ Đức, Bình Chánh, Nhà Bè, Hooc Môn </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="thongtin-giohang">
                <h2 class="title">
                    <span class="sokyhieu">3</span>
                    Thông tin giỏ hàng
                </h2>
                
                <div class="table-thanhtoan">
                    <?php
                        use Gloudemans\Shoppingcart\Facades\Cart;
                        $content = Cart::content();
                        // echo '<pre>';
                        // print_r($content) ;
                        // echo '<pre>';
                    ?>
                    <table class="table-check">
                        <thead>
                            <tr style="border-bottom: 1px solid #a2a2a2;">
                                <th style="width: 55%;margin-left: 15px;">Tên sản phẩm</th>
                                <th style="width: 20%;text-align: center;">Đơn Giá</th>
                                <th style="width: 20%;text-align: center;">Số lượng</th>
                                <th style="width: 20%;text-align: center;">Thành tiền</th>
                                <th style="width: 25%;text-align: center;"></th>
                            </tr>
                        </thead>
                        <tbody>
                                    @foreach($content as $value)
                                    <tr class="itemmm">
                                        <td>
                                            <a href="#" class="spm">
                                                {{$value->name}}
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <strong class="block">{{number_format($value->price )}} đ</strong>
                                        </td>
                                        <td style="text-align: center;">
                                            <strong class="block">{{$value->qty}}</strong>
                                        </td>
                                        <td style="text-align: center;">
                                            <strong class="block">
                                                <?php
                                                    $suptotal = $value->price * $value->qty;
                                                    echo number_format($suptotal);
                                                ?> 
                                            đ</strong>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </tbody>
                    </table>
                    <table class="table-check-1">
                        <tfoot>
                            <tr >
                                <td colspan="2"><strong>Tạm tính</strong></td>
                                <td style="text-align: right; font-weight: bold; ">
                                    {{Cart::priceTotal(0, ',','.')  }} đ
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Phí vận chuyển</strong></td>
                                <td style="text-align: right;">0 đ</td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Mã giảm giá</strong></td>
                                <td style="text-align: right;">0 đ</td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Tổng cộng</strong></td>
                                <td style="text-align: right;">
                                    {{ Cart::priceTotal(0, ',', '.') }} đ
                                    <input type="hidden" name="MoneyTotal" value="{{ Cart::priceTotal(0, ',', '.') }}">
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="form-code">
                    <strong style=" margin-bottom: 5px;">Nhập mã ưu đãi</strong>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Mã giảm giá">
                        <div class="input-group-btn">
                            <button class="btn btn-pink" id="getCoupon" type="button">Áp dụng</button>
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <label class="form-check-label">  
                        <input type="checkbox" class="form-check-input" checked>
                        <p>
                            Tôi đồng ý với các điều khoản 
                            <a href="">chính sách giao hàng</a>
                        </p>
                    </label>
                </div>
                <div style="width:100%;">
                    <div class="text-note">
                        <p>
                            <span style="font-size: 14px;">
                                Quý khách vui lòng đặt hàng với giá trị đơn từ 100k trở lên
                            </span>
                        </p>
                    </div>
                </div>
                <button type="submit" class="thanhtoan">Thanh toán</button>
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
</body>
</html>
