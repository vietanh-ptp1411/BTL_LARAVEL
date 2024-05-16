<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="DoAn3_IMG/icon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dangnhap.css')}}">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="/font/fontchu.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
</head>
<body>
    
@include('partials.header') 

<!-- Kết thúc phần đầu trang -->


<div class="user-wrapper">
    <div class="user-nav anonymous-awe">
        <a href="{{route('login_auth')}}" class="active1" rel="nofollow">Đăng nhập</a>
        <a href="{{route('register_auth')}}" class="active" rel="nofollow">Đăng ký</a>
    </div>
    @if (session('error'))
        <div id="error-alert" style="text-align: center;color:red;margin-top:10px">
            {{ session('error') }}
        </div>
    @endif    
    <form action="{{route('register')}}" accept-charset="UTF-8" id="formAcount" class="validate" method="post">
        {{csrf_field()}}
        {{-- <input type="hidden" value="f1a2a33e7e0ae075bd6cbf28e458a262-cc51197bbc9dcf43d04796a35d5f0a0f" name="csrf" id="csrf" /> --}}
        
        <div style="margin-bottom: 1rem ">
            <p>Họ và tên</p>
            <input type="text" name="name"  placeholder="Họ và tên">
        </div>
        <div style="margin-bottom: 1rem ">
            <p>Số điện thoại</p>
            <input type="text" name="phone"  placeholder="Số điện thoại">
        </div>
        <div style="margin-bottom: 1rem ">
            <p>Email</p>
            <input type="text" name="email"  placeholder="Email">
        </div>
        <div style="margin-bottom: 1rem ">
            <p>Mật khẩu</p>
            <input type="password" name="password"  placeholder="Mật khẩu">
        </div>

        <div class="user-foot text-center">
            <button type="submit" id="btnsignin" class="dangnhap">Đăng ký</button>
        </div>
    </form>
</div>
@include('partials.footer') 
<script src="{{ asset('js/dangnhap.js') }}"></script> 
</body>
</html>