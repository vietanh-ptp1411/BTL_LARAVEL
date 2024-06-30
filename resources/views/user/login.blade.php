<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="DoAn3_IMG/icon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dangnhap.css')}}">
    <title>Login</title>
    <link rel="stylesheet" href="/font/fontchu.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
</head>
<body>
    
@include('user.partials.header') 

<!-- Kết thúc phần đầu trang -->


<div class="user-wrapper">
  <div class="user-nav anonymous-awe">
    <a href="{{route('login')}}" class="active" rel="nofollow">Đăng nhập</a>
    <a href="{{route('register')}}" class="active1" rel="nofollow">Đăng ký</a>
</div>
  
  @if (session('error'))
      <div id="error-alert" style="text-align: center;color:red;margin-top:10px">
          {{ session('error') }}
      </div>
  @endif
  <form action="{{route('login.submit')}}" accept-charset="UTF-8" id="formAcount" class="validate" method="post">
      {{csrf_field()}}
      <div style="margin-bottom: 1rem ">
          <input type="text" name="username" class="validate[required]" placeholder="Nhập email hoặc tên đăng nhập">
      </div>
      <div style="margin-bottom: 1rem ">
          <input type="password" name="password"  class="validate[required]" placeholder="Mật khẩu">
      </div>

      <div class="user-foot text-center">
          <button type="submit" id="btnsignin" class="dangnhap">Đăng nhập</button>
          <div class="qmk-dktk">
            <a href="#" class="quenmk" rel="nofollow">Quên mật khẩu?</a>
            <div href="#" class="texttt" rel="nofollow">   nếu chưa có tài khoản hãy    </div>
            <a href="{{route('register')}}" class="quenmk" rel="nofollow">Đăng ký tài khoản</a>
          </div>
          
          <p class="clearfix">Hoặc đăng nhập với</p>

          <div class="loginFb" rel="nofollow">
            <a href="#" class="dangnhapkhac" >Đăng nhập bằng facebook</a>
          </div>
          <div  class="loginGg" rel="nofollow">
            <a href="#" class="dangnhapkhac">Đăng nhập Google</a>
          </div>
      </div>
  </form>
</div>
@include('user.partials.footer') 
<script src="{{ asset('js/dangnhap.js') }}"></script> 
</body>
</html>