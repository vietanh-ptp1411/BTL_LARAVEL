<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/DoAn3_IMG/icon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dangnhap.css')}}">
    <title>Login</title>
    <!-- <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
</head>
<body>
    
@include('partials.header') 

<!-- Kết thúc phần đầu trang -->

<main class="dn">
  <div class="wrapper">
    <div class="login">
      <div class="login__container">
        <h1>Đăng Nhập</h1>
          <form method="POST" action="{{ route('login.submit') }}">
            @csrf
                <h4 style="margin:0 0 0 10px;">Username</h4>
                <input type="text" class="input-login-username" name="username"/>
                <span class="emaildn" style="color: red;display: none;">*</span><br><br>
                <h4 style="margin:0 0 0 10px;">Password</h4>
                <input type="password" class="input-login-password" name="  "/>
                <span class="passdn" style="color: red;display: none;">*</span><br><br>
                <button type="submit" class="login__signInButton">Đăng Nhập</button>
          </form>
              <a href="DangKy.html" class="login__registerButton"
                >Tạo tài khoản mới</a
              >
            </div>
      </div>
    </div>
</main>


@include('partials.footer') 
<script src="{{ asset('js/dangnhap.js') }}"></script> 
</body>
</html>