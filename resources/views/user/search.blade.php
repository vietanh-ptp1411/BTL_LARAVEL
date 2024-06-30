<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('DoAn3_IMG/icon.png') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <title>Tìm kiếm</title>
    <!-- <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css"
        integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous" />
    <link rel="stylesheet" href="/font/fontchu.css">
</head>

<body>

    @include('user.partials.header')

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
                            @foreach ($search_product as $key => $product)
                                <li>
                                    <div class="product-item">
                                        <div class="product-top">
                                            <a href="{{ route('detailt', ['ProID' => $product->ProID]) }}"
                                                class="product-thumb">
                                                <img src="DoAn3_IMG/{{ $product->ProImage }}" alt="">
                                            </a>
                                            <a href="" class="buy-now">Mua ngay</a>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{ route('detailt', ['ProID' => $product->ProID]) }}"
                                                class="product-name"
                                                title="{{ $product->ProName }}">{{ $product->ProName }}</a>
                                            @foreach ($price as $p)
                                                @if ($p->ProID == $product->ProID)
                                                    <div class="product-price" style="text-align: center;">
                                                        {{ number_format($p->Cost) }} đ</div>
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
            </div>
        </div>

    </main>


    @include('user.partials.footer')


    <script src="{{ asset('js/trangchu.js') }}"></script>
</body>

</html>
