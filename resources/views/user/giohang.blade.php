<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="DoAn3_IMG/icon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/giohang.css')}}">
    <title>Giỏ hàng</title>
    <!-- <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    <script src="java.js"></script>
    <link rel="stylesheet" href="/font/fontchu.css">
</head>
<body>

@include('user.partials.header') 
<!-- Kết thúc phần đầu trang -->
<main style="margin-bottom: 40px;margin-top: 20px;">
    <div class="contaier">
        <div class="gh">
            <div class="cart">
                <?php
                    use Gloudemans\Shoppingcart\Facades\Cart;
                    $content = Cart::content();
                    // echo '<pre>';
                    // print_r($content) ;
                    // echo '<pre>';
                ?>
                <table class="table-cart">
                    <thead>
                        <tr>
                            <th width="20%" class="text-center">Ảnh</th>
                            <th width="25%" class="text-center">Tên Sản Phẩm</th>
                            <th width="15%" class="text-center">Đơn giá</th>
                            <th width="15%" class="text-center">Số lượng</th>
                            <th width="15%" class="text-center">Tổng</th>
                            <th width="10%" class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($content as $value)
                        <tr class="cart-item">
                            <td class="img">
                                <a  href="#" title="">
                                    <img style="width: 100%;height: 100%;" src="{{URL::to('DoAn3_IMG/' .$value->options->image)}}" alt="">
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="#" title="">
                                    {{$value->name}}
                                </a>
                            </td>
                            <td class="text-center">
                                <strong class="block">{{number_format($value->price )}} đ</strong>
                            </td>
                            <td class="text-center">
                                <div class="slgh">
                                    <form action="{{route('update-cart-quatity')}}" method="POST">
                                        {{csrf_field()}}
                                    <input class="inputsoluong" type="number" name="quantity_cart" value="{{$value->qty}}" >
                                    <input class="inputsoluong1" type="submit" name="update_quantity" value="Cập nhật">
                                    <input class="inputsoluong1" type="hidden" name="rowId_cart" value="{{$value->rowId}}">
                                    </form>
                                </div>
                                
                            </td>
                            <td class="text-center">
                                <strong class="block">
                                    <?php
                                        $suptotal = $value->price * $value->qty;
                                        echo number_format($suptotal);
                                    ?> 
                                đ</strong>
                            </td>
                            <td class="text-center">
                                <a href="{{URL::to('/delete_cart/'.$value->rowId)}}" class="remove">Xóa</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                <div class="note">
                    <p>Hỗ trợ ship 20k  cho đơn hàng từ 300k nội thành HN, HCM</p>
                    <p>Hỗ trợ ship 30k cho đơn hàng từ 500k các khu vực khác</p>
                    <p>Đơn hàng trên website được xử lý trong giờ hành chính</p>
                </div>
                <div class="cart-total">
                    <div class="total">Tổng:  {{Cart::priceTotal(0, ',','.')  }} <sup>đ</sup></div>
                    <div class="clearfix" style="height: 0;"></div>
                    <a href="{{route('home')}}" class="mstt">Tiếp tục mua sắm</a>
                    <?php
                            $customerID= Session::get('CusID');
                            if($customerID != NULL){
                        ?>
                            <a href="{{ route('thanhtoan') }}" class="ttgh">Thanh toán</a>
                        <?php
                        }else {
                            ?>
                            <a href="{{ route('login_checkout') }}" class="ttgh">Thanh toán</a>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class="spdx">
                <h2><a href="">Sản Phẩm Mới</a></h2>
                <div id="wrapper">
                    <ul class="product" id="product-list">
                        <!-- Hiển thị 8 sản phẩm ban đầu -->
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
                </div>   
            </div>
        </div>
    </div>
</main>



@include('user.partials.footer')
<script>
    
</script> 
</body>
</html>