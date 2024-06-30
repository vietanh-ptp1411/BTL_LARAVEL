<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('DoAn3_IMG/icon.png') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chitiet.css') }}">
    <title>Chi tiết sản phẩm</title>
    <!-- <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/font/fontchu.css">
</head>
<body>
    @include('user.partials.header')
<!-- Kết thúc phần đầu trang -->
<main class="main">
    <div class="container">
        <div class="detail">
            <div class="k1">
                <ul class="u1">
                    <li class="ll"><a href="">Trang chủ</a></li>
                    <li class="ll"><a href="" style="color: #ffb0bd;">Chi tiết Sản Phẩm</a></li>
                </ul>
            </div>

            <div class="sp000">
                <div class="k2">
                    <a id="vap" href="#"><img id="mainImage" class="vap1" src="{{ asset('DoAn3_IMG/' . $ProImage) }}" alt=""></a>
                    <div class="u2">
                        <div class="u2-2">
                            <div class="u2-2-2">
                                <div class="u2-img" onclick="changeImage('{{ asset('DoAn3_IMG/' . $ProImage) }}', this.children[0])">
                                    <img data-imgbigurl="{{ asset('DoAn3_IMG/' . $ProImage) }}" src="{{ asset('DoAn3_IMG/' . $ProImage) }}" alt="">
                                </div>
                                <div class="u2-img" onclick="changeImage('{{ asset('DoAn3_IMG/' . $MoreImage1) }}', this.children[0])">
                                    <img data-imgbigurl="{{ asset('DoAn3_IMG/' . $MoreImage1) }}" src="{{ asset('DoAn3_IMG/' . $MoreImage1) }}" alt="">
                                </div>
                                <div class="u2-img" onclick="changeImage('{{ asset('DoAn3_IMG/' . $MoreImage2) }}', this.children[0])">
                                    <img data-imgbigurl="{{ asset('DoAn3_IMG/' . $MoreImage2) }}" src="{{ asset('DoAn3_IMG/' . $MoreImage2) }}" alt="">
                                </div>
                                <div class="u2-img" onclick="changeImage('{{ asset('DoAn3_IMG/' . $MoreImage3) }}', this.children[0])">
                                    <img data-imgbigurl="{{ asset('DoAn3_IMG/' . $MoreImage3) }}" src="{{ asset('DoAn3_IMG/' . $MoreImage3) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <script>
                    function changeImage(newImageUrl, clickedElement) {
                        // Lấy thẻ ảnh chính
                        var mainImage = document.getElementById('mainImage');
                        // Đổi đường dẫn ảnh của ảnh chính thành đường dẫn mới
                        mainImage.src = newImageUrl;
                
                        // Xóa lớp selected-image khỏi tất cả các hình ảnh
                        var images = document.querySelectorAll('.u2-img img');
                        images.forEach(function(img) {
                            img.classList.remove('selected-image');
                        });
                
                        // Thêm lớp selected-image vào hình ảnh được nhấp
                        clickedElement.classList.add('selected-image');
                    }
                </script>
                
    
                <div class="k3">
                    <div class="ten">
                        <h1 class="title">{{$ProName}}</h1>
                        <div class="code">Đã bán {{$DaBan}}</div>
                    </div>
                    <div class="ten1">
                        <div class="ten1-1">
                            <i class="fa fa-share-alt"></i>
                        </div>
                        <div class="ten1-1">
                            <i class="fas fa-heart"></i>    
                        </div>
                    </div>
                    <div class="gia">
                        <div class="gia-price">
                            <span>{{number_format($price)}}đ</span>
                        </div>
                    </div>
                    <div class="vanchuyen">
                        <div class="vc">
                            Vận chuyển
                        </div>
                        <div class="loaivc">
                            <p>Xử lý bởi baloonline</p>
                            <p>Miễn phí vận chuyển</p>
                        </div>
                    </div>
                    <div class="msl">
                        <form action="{{ route('save-cart') }}" method="POST">
                            {{csrf_field()}}
                            <div class="slz">
                                <label class="sll1" for="">Số lượng</label>
                                <input class="slz1" name="qty" type="number"  value="1" min="1">
                                <label class="sll1"> <p>{{$SoLuong}} sản phẩm có sẵn</p></label>
                                <input class="slz1" name="productID_hidden" type="hidden"  value="{{$ProID}}">
                            </div>

                            <div class="slzz">
                                <button type="submit" class="tvgh" style="margin-right: 1%;"  href="{{route('giohang')}}">Thêm vào giỏ hàng</button>
                                <a class="tvgh" style="margin-left: 1%;" href="{{route('thanhtoan')}}">Mua ngay</a>
                            </div>
                        </form>

                    </div>
        
                    <div class="giaohang">
                        <div class="fll">
                            <div class="fll1"><i class="fas fa-truck"></i>
                            </i>Giao hàng toàn quốc đơn hàng từ 100k</div>
                            <div class="fll2"><i class="fas fa-coins"></i>
                                COD nội thành HN, HCM</div>
                            <div class="fll2"><i class="fas fa-retweet"></i>
                                Đổi trả trong 24h</div>
                        </div>
                        <div class="notee">
                            <i style="padding-left: 20px;" class="fas fa-truck"></i>
                            <div class="notee-1">
                                <p>Hỗ trợ ship 20k cho đơn hàng từ 300k nội thành HN, HCM</p>
                                <p>Hỗ trợ ship 30k cho đơn hàng từ 500k các khu vực khác</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="k4">
                <div class="u4">
                    <h2>Mô tả sản phẩm</h2>
                    <div class="thongtinsp">
                        <div class="ttsp1"> 
                            <p style="font-size: 20px; font-weight: bold;">Giới thiệu</p>
                        </div>
                        <div class="ttsp2">
                            <p style="text-align:justify;">
                                {{$ProDescription}}
                            </p>
                        </div>    
                    </div>
                    <div class="thongtinsp">
                        <div class="ttsp1"> 
                            <p style="font-size: 20px; font-weight: bold;">Chất liệu</p>
                        </div>
                        <div class="ttsp2">
                            <p style="text-align:justify;">
                                {{$Materials}}
                            </p>
                        </div>    
                    </div>
                    <div class="thongtinsp">
                        <div class="ttsp1"> 
                            <p style="font-size: 20px; font-weight: bold;">Size</p>
                        </div>
                        <div class="ttsp2">
                            <p style="text-align:justify;">
                                {{$Size}}
                            </p>
                        </div>    
                    </div>
                </div>  
            </div>

            <div class="k5">
                <h2><a href="">Các sản phẩm liên quan</a></h2>
                <div id="wrapper">
                    <ul class="product">
                    @foreach($sp as $s)
                        <li>
                            <div class="product-item">
                                <div class="product-top">
                                    <a href="{{ asset('DoAn3_IMG/' . $s->ProImage) }}" class="product-thumb">
                                        <img src="{{ asset('DoAn3_IMG/' . $s->ProImage) }}" alt="">  
                                    </a>
                                    <a href="" class="buy-now">Mua ngay</a>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name" title="{{ $s->ProName }}">{{ $s->ProName }}</a>
                                    <div class="product-price" style="text-align: center;">{{number_format($price)}} đ</div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </div>
            </div>
    </div>
</main>






@include('user.partials.footer') 

<script src="js/giohang.js"></script> 
</body>
</html>