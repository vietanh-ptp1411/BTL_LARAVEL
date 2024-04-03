<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/anh/logo-f.webp">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/thanhtoan.css') }}">
    <title>Thanh toán</title>
    <!-- <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    <script src="java.js"></script>
    <link rel="stylesheet" href="/font/fontchu.css">
</head>
<body>
@include('partials.header') 

<!-- Kết thúc phần đầu trang -->


<main class="main">
    <form class="formcheck">
        <div class="thongtin">
            <div class="thongtin-nguoimua">
                <h2 class="title">
                    <span class="sokyhieu">1</span>
                    Thông tin người nhận
                </h2>
                <div class="form-group">
                    <input type="text" id="txtnamekh" class="input-ten" placeholder="Họ tên *" onblur="chkname()">
                    <span id="chkName" style="color: red;display: inline;"></span>
                </div>
                <div class="form-group">
                    <input type="text" class="input-ten" placeholder="Điện thoại *">
                </div>
                <div class="form-group">
                    <input type="text" class="input-ten" value="maivietanh0102@gmail.com" placeholder="Email *">
                </div>
                <div class="form-group">
                    <input type="text" class="input-ten"  placeholder="Địa chỉ chi tiết *">
                </div>
                <div class="form-group">
                    <select id="customerCityId" name="customerCityId" class="select-ten">
                        <option value="">Tỉnh/Thành phố *</option><option value="254">Hà Nội</option>
                        <option value="255">Hồ Chí Minh</option><option value="256">An Giang</option>
                        <option value="257">Bà Rịa - Vũng Tàu</option><option value="258">Bắc Ninh</option>
                        <option value="259">Bắc Giang</option><option value="260">Bình Dương</option>
                        <option value="261">Bình Định</option>
                        <option value="262">Bình Phước</option>
                        <option value="263">Bình Thuận</option>
                        <option value="264">Bến Tre</option>
                        <option value="265">Bắc Cạn</option>
                        <option value="266">Cần Thơ</option>
                        <option value="267">Khánh Hòa</option>
                        <option value="268">Thừa Thiên Huế</option>
                        <option value="269">Lào Cai</option>
                        <option value="270">Quảng Ninh</option>
                        <option value="271">Đồng Nai</option>
                        <option value="272">Nam Định</option>
                        <option value="273">Cà Mau</option>
                        <option value="274">Cao Bằng</option>
                        <option value="275">Gia Lai</option>
                        <option value="276">Hà Giang</option>
                        <option value="277">Hà Nam</option>
                        <option value="278">Hà Tĩnh</option>
                        <option value="279">Hải Dương</option>
                        <option value="280">Hải Phòng</option>
                        <option value="281">Hoà Bình</option>
                        <option value="282">Hưng Yên</option>
                        <option value="283">Kiên Giang</option>
                        <option value="284">Kon Tum</option>
                        <option value="285">Lai Châu</option>
                        <option value="286">Lâm Đồng</option>
                        <option value="287">Lạng Sơn</option>
                        <option value="288">Long An</option>
                        <option value="289">Nghệ An</option>
                        <option value="290">Ninh Bình</option><option value="291">Ninh Thuận</option>
                        <option value="292">Phú Thọ</option><option value="293">Phú Yên</option>
                        <option value="294">Quảng Bình</option><option value="295">Quảng Nam</option>
                        <option value="296">Quảng Ngãi</option><option value="297">Quảng Trị</option>
                        <option value="298">Sóc Trăng</option><option value="299">Sơn La</option>
                        <option value="300">Tây Ninh</option><option value="301">Thái Bình</option>
                        <option value="302">Thái Nguyên</option><option value="303">Thanh Hoá</option>
                        <option value="304">Tiền Giang</option><option value="305">Trà Vinh</option>
                        <option value="306">Tuyên Quang</option><option value="307">Vĩnh Long</option>
                        <option value="308">Vĩnh Phúc</option><option value="309">Yên Bái</option>
                        <option value="310">Đắk Lắk</option><option value="311">Đồng Tháp</option>
                        <option value="312">Đà Nẵng</option>
                        <option value="313">Đắc Nông</option><option value="314">Hậu Giang</option>
                        <option value="315">Bạc Liêu</option><option value="316">Điện Biên</option>
                    </select>
                </div>
                <div class="form-group">
                    <select id="customerCityId" name="customerCityId" class="select-ten">
                        <option value="">Quận/ Huyện *</option>
                    </select>
                </div>
                <div class="form-group-tera">
                    <textarea type="text" class="textarea-ten" rows="3 " placeholder="Ghi chú"></textarea>
                </div>
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
                        <input type="radio" class="check-input">
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
                        <input type="radio" class="check-input">
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
                        <p style="font-family:'Roboto Condensed', Arial, sans-serif;font-size:14px;margin:0px;padding:5px 0px;">
                            <span style="font-family: Arial, Helvetica, sans-serif;"> &nbsp; &nbsp; &nbsp; &nbsp;        </span>
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
                    <table class="table-check" cellspacing="10">
                        <thead>
                            <tr>
                                <th style="width: 55%;text-align: left;">Tên sản phẩm</th>
                                <th style="width: 20%;text-align: center;">Số lượng</th>
                                <th style="width: 25%;text-align: right;">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="" class="spm">Sữa Rửa Mặt Dạng Bọt Cấp Ẩm Chuyên Sâu Curél Foaming Facial Wash 150Ml</a>
                                    <div class="clearfix">                                   
                                        Đơn giá:
                                        <strong>325.600đ</strong>
                                    </div>
                                </td>
                                <td style="text-align: center;">1</td>
                                <td style="text-align: center;"><strong>325.600đ</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table-check-1" cellspacing="10">
                        <tfoot>
                            <tr >
                                <td colspan="2"><strong>Tạm tính</strong></td>
                                <td style="text-align: right;">325.600đ</td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Phí vận chuyển</strong></td>
                                <td style="text-align: right;">0đ</td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Mã giảm giá</strong></td>
                                <td style="text-align: right;">0đ</td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Tổng cộng</strong></td>
                                <td style="text-align: right;">325.600đ</td>
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
                        <input type="checkbox" class="form-check-input">
                        <p>
                            Tôi đồng ý với các điều khoản 
                            <a href="">chính sách giao hàng</a>
                        </p>
                    </label>
                </div>
                <div style="width: 368.200px;height: 70.600px;">
                    <div class="text-note">
                        <p>
                            <span style="font-size: 14px;">
                                Quý khách vui lòng đặt hàng với giá trị đơn từ 100k trở lên
                            </span>
                        </p>
                    </div>
                </div>
                <div class="thanhtoan">
                    <a href="/cảm ơn/camon.html">Thanh toán</a>
                </div>
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