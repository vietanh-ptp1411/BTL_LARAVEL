<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('DoAn3_IMG/icon.png') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/danhmuc.css') }}"> 
    <title>Danh mục sản phẩm</title>
    <!-- <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/font/fontchu.css">
    <!-- phần lọc giá -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>
<body>
@include('partials.header') 

<!-- Kết thúc phần đầu trang -->

<main class="main1">
    <div class="contz">
        <div class="contz1">

            <div class="sanpham">
                    <div class="tsp">
                        <h1>
                            <ul class="setqua">
                                <li><a href="">Danh mục</a></li>
                                <li><a href="">{{$catName}}</a></li>
                            </ul>
                        </h1>  
                        <select name="" id="" class="moinhat">
                            <option value="">Mới nhất</option>
                            <option value="">Giá tăng dần</option>
                            <option value="">Giá giảm dần</option>
                        </select>
                    </div>
                    <div id="wrapper">
                        <ul class="product">
                            @foreach($categorysp as $catsp)
                                <li>
                                    <div class="product-item">
                                        <div class="product-top">
                                            <a href="{{ route('detailt', ['ProID' => $catsp->ProID]) }}" class="product-thumb">
                                                <img src="/DoAn3_IMG/{{$catsp->ProImage}}" alt="">  
                                            </a>
                                            <a href="" class="buy-now">Mua ngay</a>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{ route('detailt', ['ProID' => $catsp->ProID]) }}" class="product-name" title="{{$catsp->ProName}}">{{$catsp->ProName}}</a>
                                            <div class="product-price" style="text-align: center;">{{number_format($catsp->price)}} đ</div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="next">
                        <ul class="next-1">
                            <li class="one"><a href="">1</a></li>
                            <li class="t-n"><a href="">2</a></li>
                            <li class="t-n-n"><a href="">Next</a></li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
</main>



@include('partials.footer') 
</body>
</html>