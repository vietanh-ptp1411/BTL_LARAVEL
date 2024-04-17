<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('DoAn3_IMG/icon.png') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <title>Trang chủ</title>
    <!-- <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/font/fontchu.css">
</head>
<body>
    
@include('partials.header')

<!-- Kết thúc phần đầu trang -->

<div class="slide">
    <div class="v">
        <div class="v1">
            <div class="img">
                <img id="imgg" onclick="changeimage()" src="/anh/slide1.webp" alt="">
            </div>
            
        </div>

        <div class="v2">
            <div class="v2-2">
                <img src="/anh/slide4.webp" alt="">
            </div>
            <div class="v2-2">
                <img src="/anh/slide5.webp" alt="">
            </div>
        </div>   
    </div>
</div>



<main class="main">
    <div class="main1">
        <div class="main2">
            <div class="main3">
                <h2><a href="">Sản Phẩm Mới</a></h2>
                <div id="wrapper">
                    <ul class="product" id="product-list">
                        <!-- Hiển thị 8 sản phẩm ban đầu -->
                        @foreach($product->take(8) as $sp)
                        <li>
                            <div class="product-item">
                                <div class="product-top">
                                    <a href="{{ route('detailt', ['ProID' => $sp->ProID]) }}" class="product-thumb">
                                        <img src="DoAn3_IMG/{{$sp->ProImage}}" alt="">  
                                    </a>
                                    <a href="" class="buy-now">Mua ngay</a>
                                </div>
                                <div class="product-info">
                                    <a href="{{ route('detailt', ['ProID' => $sp->ProID]) }}" class="product-name" title="{{$sp->ProName}}">{{$sp->ProName}}</a>
                                    @foreach($price as $p)
                                        @if($p->ProID == $sp->ProID)
                                            <div class="product-price" style="text-align: center;">{{number_format($p->Cost)}} đ</div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <!-- Nút "Xem thêm" -->
                    <div class="xemt" id="load-more-container">
                        <button class="xemt1" id="load-more-button">Xem thêm</button>
                    </div>
                </div>    
            </div>              
           
            <div class="main4">
                <h2><a href="">Chủ đề mới</a></h2>
                <div class="z4anh">
                    <div class="cdm1">
                        <a href="/chi tiết 1 sản phẩm/chitiet.html"><img src="/anh/chude1.webp" alt=""></a>
                    </div>
                    <div class="cdm1">
                        <a href="/chi tiết 1 sản phẩm/chitiet.html"><img src="/anh/chude2.webp" alt=""></a>
                    </div>
                    <div class="cdm1">
                        <a href="/chi tiết 1 sản phẩm/chitiet.html"><img src="/anh/chude3.webp" alt=""></a>
                    </div>
                    <div class="cdm1">
                        <a href="/chi tiết 1 sản phẩm/chitiet.html"><img src="/anh/chude4.webp" alt=""></a>
                    </div>
                </div>
                <div id="wrapper">
                    <ul class="product" id="product-list2">
                        <!-- Hiển thị 4 sản phẩm ban đầu -->
                        @foreach($product->take(4) as $sp)
                        <li>
                            <div class="product-item">
                                <div class="product-top">
                                    <a href="{{ route('detailt', ['ProID' => $sp->ProID]) }}" class="product-thumb">
                                        <img src="DoAn3_IMG/{{$sp->ProImage}}" alt="">  
                                    </a>
                                    <a href="" class="buy-now">Mua ngay</a>
                                </div>
                                <div class="product-info">
                                    <a href="{{ route('detailt', ['ProID' => $sp->ProID]) }}" class="product-name" title="{{$sp->ProName}}">{{$sp->ProName}}</a>
                                    @foreach($price as $p)
                                        @if($p->ProID == $sp->ProID)
                                            <div class="product-price" style="text-align: center;">{{number_format($p->Cost)}} đ</div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <!-- Nút "Xem thêm" -->
                    <div class="xemt" id="load-more-container2">
                        <button class="xemt1" id="load-more-button2">Xem thêm</button>
                    </div>
                </div>
            </div>


            <div class="main5">
                <div><h2 style="font-size: 30px;margin-bottom: 30px; font-family: 'Nunito-ExtraBold';">Bộ sưu tập</h2></div>
                <div class="sli">
                    <div class="qqq">
                        <div class="zx">
                            <div class="zx1">
                                <img src="/anh/slc1.jpeg" alt="">    
                            </div>
                    
                            <div class="zx1">
                                <img src="/anh/slc2.jpeg" alt="">            
                            </div>
                    
                            <div class="zx1">
                
                                <img src="/anh/slc3.jpeg" alt="">            
                            </div>
                        </div>
                        <div class="zx">
                            <div class="zx1">
                                <img src="/anh/slc2.jpeg" alt="">    
                            </div>
                    
                            <div class="zx1">
                                <img src="/anh/slc3.jpeg" alt="">            
                            </div>
                    
                            <div class="zx1">
                
                                <img src="/anh/slc4.jpeg" alt="">            
                            </div>
                        </div>
                        <div class="zx">
                            <div class="zx1">
                                <img src="/anh/slc3.jpeg" alt="">    
                            </div>
                    
                            <div class="zx1">
                                <img src="/anh/slc4.jpeg" alt="">            
                            </div>
                    
                            <div class="zx1">
                
                                <img src="/anh/slc5.jpeg" alt="">            
                            </div>
                        </div>
                    </div>                     
            
                    <div class="asd">
                        <i class="fa fa-angle-left fa-angle-left-two"></i>
                        <i class="fa fa-angle-right fa-angle-right-two"></i>
                    </div>
                </div>
            </div>
            

        </div>
    </div>

</main>

                @include('partials.footer')





<script src="{{ asset('js/trangchu.js') }}"></script>
</body>
</html>