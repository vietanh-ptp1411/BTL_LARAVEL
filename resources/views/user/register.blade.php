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
    
@include('user.partials.header') 

<!-- Kết thúc phần đầu trang -->


<div class="user-wrapper">
    <div class="user-nav anonymous-awe">
        <a href="{{route('login')}}" class="active1" rel="nofollow">Đăng nhập</a>
        <a href="{{route('register')}}" class="active" rel="nofollow">Đăng ký</a>
    </div>
    @if (session('success'))
        <div id="success-alert" style="text-align: center;color:red;margin-top:10px">
            {{ session('success') }}
        </div>
    @endif  
    <form action="{{route('register.submit')}}" accept-charset="UTF-8" id="formAcount" class="validate" method="post">
        {{csrf_field()}}
        {{-- <input type="hidden" value="f1a2a33e7e0ae075bd6cbf28e458a262-cc51197bbc9dcf43d04796a35d5f0a0f" name="csrf" id="csrf" /> --}}
        <div style="margin-bottom: 1rem ">
            <input type="text" name="UserName"  placeholder="Tên đăng nhập">
        </div>
        <div style="margin-bottom: 1rem ">
            <input type="text" name="CusName"  placeholder="Họ tên">
        </div>
        <div style="margin-bottom: 1rem ">
            <input type="date" name="Brithday"  placeholder="Ngày sinh">
        </div>
        <div style="margin-bottom: 1rem ">
            <input type="text" name="CusPhone"  placeholder="Số điện thoại">
        </div>
        <div style="margin-bottom: 1rem ">
            <input type="text" name="CusEmail"  placeholder="Email">
        </div>
        <div style="margin-bottom: 1rem ">
            <input type="text" name="CusAddress"  placeholder="Địa chỉ">
        </div>
        <div style="margin-bottom: 1rem ">
            <input type="password" name="Password"  placeholder="Mật khẩu">
        </div>

        <div class="user-foot text-center">
            <button type="submit" id="btnsignin" class="dangnhap">Đăng ký</button>
        </div>
    </form>
</div>
@include('user.partials.footer') 
<script src="{{ asset('js/dangnhap.js') }}"></script> 
</body>
</html>