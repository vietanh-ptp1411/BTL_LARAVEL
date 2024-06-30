<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/DoAn3_IMG/icon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/blogdetail.css')}}">
    <title>Blog</title>
    <!-- <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/font/fontchu.css">
</head>
<body>
    
@include('user.partials.header') 

<!-- Kết thúc phần đầu trang -->
<div class="mains">
    <div class="container">
        <div class="row">
            <ul class="u1">
                <li class="ll"><a href="#">Trang chủ</a></li>
                <li class="ll"><a href="#"> Blog</a></li>
                <li class="ll"><a href="" style="color: #ffb0bd;"> {{$blogdetail->Name}}</a></li>
            </ul>
            
            <div class="blogdetail">
                <h1>{{$blogdetail->Name}}</h1>
                <div class="blogimgdt">
                    <img src="{{ asset('DoAn3_IMG/' . $blogdetail->Image) }}" alt="">
                </div>
                <div class="content">
                    <h3>{{$blogdetail->Details}}</h3>
                    <p>{!! nl2br($blogdetail->MetaDescriptions)!!}</p>
                </div>
                <div class="content">
                    <h3>{{$blogdetail->Details1}}</h3>
                    <p>{!! nl2br($blogdetail->MetaDescriptions1)!!}</p>
                </div>
                <div class="content">
                    <h3>{{$blogdetail->Details2}}</h3>
                    <div >{!! nl2br($blogdetail->MetaDescriptions2) !!}</div>
                </div>
            </div>
            
       </div> 
    </div>
</div>


@include('user.partials.footer') 
</body>
</html>

 

 