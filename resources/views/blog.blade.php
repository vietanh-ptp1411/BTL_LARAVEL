<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/DoAn3_IMG/icon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/blog.css')}}">
    <title>Blog</title>
    <!-- <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/font/fontchu.css">
</head>
<body>
    
@include('partials.header') 

<!-- Kết thúc phần đầu trang -->
<div class="mains">
    <div class="container">
        <div class="row">
            <ul class="u1">
                <li class="ll"><a href="">Trang chủ</a></li>
                <li class="ll"><a href="" style="color: #ffb0bd;"> Blog</a></li>
            </ul>


            <div class="blogmain">
                @foreach($blog as $bl)
                <div class="blogitem">
                    <div class="blogitemcenter">
                        <div class="blogimg">
                            <a href="{{ route('blogdetail', ['BlogID' => $bl->BlogID]) }}">
                                <img src="DoAn3_IMG/{{$bl->Image}}" alt="">
                            </a>
                        </div>
                        <div class="blogtext">
                            <h3 class="blogtitle"><a href="{{ route('blogdetail', ['BlogID' => $bl->BlogID]) }}">{{$bl->Name}}</a></h3>
                            <div class="khoangcach">
                            </div>
                            <div class="blognewdesc">
                                <p>{{$bl->Description}}</p>
                            </div>
                            <div class="blogmore">
                                <a href="{{ route('blogdetail', ['BlogID' => $bl->BlogID]) }}">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
       </div> 
    </div>
</div>


@include('partials.footer') 
</body>
</html>

