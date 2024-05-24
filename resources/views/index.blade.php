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


    {{-- slide chuyển của blog --}}
    <link rel="stylesheet" type="text/css" href="/css/slide.css">
    <link rel="stylesheet" type="text/css" href="/css/slick1.css">
    <style type="text/css">
    
  </style>
		
</head>
<body>
    
@include('partials.header')

<!-- Kết thúc phần đầu trang -->

<div class="slide">
    <div class="v">
        <div class="v1">
            <div class="img">
                <img id="imgg" onclick="changeimage()" src="/DoAn3_IMG/slidehome1.png" alt="">
            </div>
            
        </div>

        <div class="v2">
            <div class="v2-2">
                <img src="/DoAn3_IMG/slidehome2.jpg" alt="">
            </div>
            <div class="v2-2">
                <img src="/DoAn3_IMG/slidehome3.webp" alt="">
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
                        @foreach($product as $sp)
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
                                    <div class="product-price" style="text-align: center;">{{number_format($sp->price)}} đ</div>
                                     
                                </div>  
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <!-- Nút "phân trang" -->
                    <div>
                        {{ $product->links() }} 
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
                        @foreach($newProducts->take(4) as $sp)
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
                                    <div class="product-price" style="text-align: center;">{{number_format($sp->price)}} đ</div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <!-- Nút "Xem thêm" -->
                    {{-- <div>
                        {{ $newProducts->links() }}
                    </div> --}}
                </div>
            </div>


            <div class="main5">
                <div><h2 style="font-size: 30px;margin-bottom: 30px; font-family: 'Nunito-ExtraBold';">Bài viết của balo.com</h2></div>
                <section class="regular slider">
                    @foreach($blog as $bl)
                        <div>
                            <a href="{{ route('blogdetail', ['BlogID' => $bl->BlogID]) }}">
                                <img style="height:280px" src="DoAn3_IMG/{{$bl->Image}}" alt="">
                            </a>
                            <h3><a style="color: black" href="{{ route('blogdetail', ['BlogID' => $bl->BlogID]) }}">{{$bl->Name}}</a></h3>
                        </div>
                    @endforeach
                </section>
            </div>
            
            <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
            <script src="./js/slide.js" type="text/javascript" charset="utf-8"></script>
            <script type="text/javascript">
                $(document).on('ready', function() {
                $(".regular").slick({
                    dots: true,
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 1
                });
                });
            </script>
            

        </div>
    </div>

</main>


@include('partials.footer')





<script src="{{ asset('js/trangchu.js') }}"></script>
</body>
</html>