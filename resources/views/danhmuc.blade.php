<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/anh/logo-f.webp">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}"> 
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
            <div class="danhmuc">
                <div class="danhmuc1">
                    <div class="tdmsp">
                        <h3 style="font-size: 20px;margin: 0;font-family: 'Nunito-Bold';">Danh mục sản phẩm</h3>
                        <i class="fa fa-plus" style="font-size: 16px;padding-top: 5px;"></i>
                    </div>
                    <ul class="dmch">
                        <li><a href="">Hàng mới</a></li>
                        <li><a href="">Set quà</a></li>
                        <li><a href="">Gấu bông & gối</a></li>
                        <li><a href="">Balo & Túi ví</a></li>
                        <li><a href="">Văn phòng phẩm</a></li>
                        <li><a href="">Điện tử Điện thoại</a></li>
                        <li><a href="">Phụ kiện Thời trang</a></li>
                        <li><a href="">Gia dụng</a></li>
                        <li><a href="">Trang điểm</a></li>
                        <li><a href="">Đồ chơi</a></li>
                        <li><a href="">Trang trí</a></li>
                    </ul>
                </div>
                <div class="giadd">
                    <div class="gia">
                        <h3>Giá</h3>  
                    </div>
                    <div class="thanhgia">
                        <p>
                            <label for="amount" style="font-size: 16px;font-family: 'Nunito-Regular';">Từ</label>
                            <input type="text" id="amount" readonly style="border:0; color:#000;font-size: 16px;font-family: 'Nunito-Regular';">
                        </p>
                        <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                            <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                        </div>
                    </div>
                    <script>
                        $( function() {
                          $( "#slider-range" ).slider({
                            range: true,
                            min: 0,
                            max: 500000,
                            values: [ 0, 500000 ],
                            slide: function( event, ui ) {
                              $( "#amount" ).val( ui.values[ 0 ]+"đ" + " : " + ui.values[ 1 ] +"đ   " );
                            }
                          });
                          $( "#amount" ).val( + $( "#slider-range" ).slider( "values", 0 ) +"đ" +
                            " : " + $( "#slider-range" ).slider( "values", 1 ) +"đ" );
                        } );
                        </script>
                </div>
            </div>

            <div class="sanpham">
                    <div class="tsp">
                        <h1>
                            <ul class="setqua">
                                <li><a href="">Set quà</a></li>
                                <li><a href="">Set quà yêu thương</a></li>
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
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm1.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Tinh Chất Dưỡng Sáng Da AHC Niacin Biome Mela Scissors Max Essence 30ml">Tinh Chất Dưỡng Sáng Da AHC Niacin Biome Mela Scissors Max Essence 30ml</a>
                                        <div class="product-price">1.050.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm2.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Sữa Rửa Mặt Dạng Bọt Cấp Ẩm Chuyên Sâu Curél Foaming Facial Wash 150Ml">Sữa Rửa Mặt Dạng Bọt Cấp Ẩm Chuyên Sâu Curél Foaming Facial Wash 150Ml</a>
                                        <div class="product-price">325.600đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm3.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Phấn Nước Căng Mướt Da Clio Kill Cover Mesh Glow Cushion SPF50+, PA++++ 15g (tặng kèm lõi)">Quạt USB cầm tay sạc tích điện Cute dinosaur khủng long heart paw</a>
                                        <div class="product-price">819.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm4.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>                    
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Má Hồng Dạng Kem Ofélia Lolli Liquid Blush 4.3g">Má Hồng Dạng Kem Ofélia Lolli Liquid Blush 4.3g</a>
                                        <div class="product-price">199.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm5.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>                    
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Son Kem Bóng Maybelline Superstay Vinyl Ink 4.2ml">Son Kem Bóng Maybelline Superstay Vinyl Ink 4.2ml</a>
                                        <div class="product-price">298.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm6.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</i></a>                    
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Sáp Dưỡng Môi Nuxe Reve De Miel Honey Lip Balm Ultra-Nourishing And Repairing 15G">Sáp Dưỡng Môi Nuxe Reve De Miel Honey Lip Balm Ultra-Nourishing And Repairing 15G</a>
                                        <div class="product-price">395.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm7.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>                    
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Sữa Dưỡng Cấp Ẩm AHC Premium Ex Hydra B5 Emulsion 140Ml">Sữa Dưỡng Cấp Ẩm AHC Premium Ex Hydra B5 Emulsion 140Ml</a>
                                        <div class="product-price">672.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm8.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>                    
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Tẩy Da Chết Toàn Thân Và Giảm Mụn Lưng Exclusive Cosmetic Gel Scrub Coffee Cinnamon Clove 380G">Tẩy Da Chết Toàn Thân Và Giảm Mụn Lưng Exclusive Cosmetic Gel Scrub Coffee Cinnamon Clove 380G</a>
                                        <div class="product-price">96.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm1.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Tinh Chất Dưỡng Sáng Da AHC Niacin Biome Mela Scissors Max Essence 30ml">Tinh Chất Dưỡng Sáng Da AHC Niacin Biome Mela Scissors Max Essence 30ml</a>
                                        <div class="product-price">1.050.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm2.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Sữa Rửa Mặt Dạng Bọt Cấp Ẩm Chuyên Sâu Curél Foaming Facial Wash 150Ml">Sữa Rửa Mặt Dạng Bọt Cấp Ẩm Chuyên Sâu Curél Foaming Facial Wash 150Ml</a>
                                        <div class="product-price">325.600đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm3.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Phấn Nước Căng Mướt Da Clio Kill Cover Mesh Glow Cushion SPF50+, PA++++ 15g (tặng kèm lõi)">Quạt USB cầm tay sạc tích điện Cute dinosaur khủng long heart paw</a>
                                        <div class="product-price">819.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm4.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>                    
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Má Hồng Dạng Kem Ofélia Lolli Liquid Blush 4.3g">Má Hồng Dạng Kem Ofélia Lolli Liquid Blush 4.3g</a>
                                        <div class="product-price">199.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm5.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>                    
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Son Kem Bóng Maybelline Superstay Vinyl Ink 4.2ml">Son Kem Bóng Maybelline Superstay Vinyl Ink 4.2ml</a>
                                        <div class="product-price">298.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm6.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</i></a>                    
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Sáp Dưỡng Môi Nuxe Reve De Miel Honey Lip Balm Ultra-Nourishing And Repairing 15G">Sáp Dưỡng Môi Nuxe Reve De Miel Honey Lip Balm Ultra-Nourishing And Repairing 15G</a>
                                        <div class="product-price">395.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm7.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>                    
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Sữa Dưỡng Cấp Ẩm AHC Premium Ex Hydra B5 Emulsion 140Ml">Sữa Dưỡng Cấp Ẩm AHC Premium Ex Hydra B5 Emulsion 140Ml</a>
                                        <div class="product-price">672.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm8.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>                    
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Tẩy Da Chết Toàn Thân Và Giảm Mụn Lưng Exclusive Cosmetic Gel Scrub Coffee Cinnamon Clove 380G">Tẩy Da Chết Toàn Thân Và Giảm Mụn Lưng Exclusive Cosmetic Gel Scrub Coffee Cinnamon Clove 380G</a>
                                        <div class="product-price">96.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm1.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Tinh Chất Dưỡng Sáng Da AHC Niacin Biome Mela Scissors Max Essence 30ml">Tinh Chất Dưỡng Sáng Da AHC Niacin Biome Mela Scissors Max Essence 30ml</a>
                                        <div class="product-price">1.050.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm2.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Sữa Rửa Mặt Dạng Bọt Cấp Ẩm Chuyên Sâu Curél Foaming Facial Wash 150Ml">Sữa Rửa Mặt Dạng Bọt Cấp Ẩm Chuyên Sâu Curél Foaming Facial Wash 150Ml</a>
                                        <div class="product-price">325.600đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm3.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Phấn Nước Căng Mướt Da Clio Kill Cover Mesh Glow Cushion SPF50+, PA++++ 15g (tặng kèm lõi)">Quạt USB cầm tay sạc tích điện Cute dinosaur khủng long heart paw</a>
                                        <div class="product-price">819.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm4.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>                    
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Má Hồng Dạng Kem Ofélia Lolli Liquid Blush 4.3g">Má Hồng Dạng Kem Ofélia Lolli Liquid Blush 4.3g</a>
                                        <div class="product-price">199.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm5.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>                    
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Son Kem Bóng Maybelline Superstay Vinyl Ink 4.2ml">Son Kem Bóng Maybelline Superstay Vinyl Ink 4.2ml</a>
                                        <div class="product-price">298.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm6.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</i></a>                    
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Sáp Dưỡng Môi Nuxe Reve De Miel Honey Lip Balm Ultra-Nourishing And Repairing 15G">Sáp Dưỡng Môi Nuxe Reve De Miel Honey Lip Balm Ultra-Nourishing And Repairing 15G</a>
                                        <div class="product-price">395.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm7.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>                    
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Sữa Dưỡng Cấp Ẩm AHC Premium Ex Hydra B5 Emulsion 140Ml">Sữa Dưỡng Cấp Ẩm AHC Premium Ex Hydra B5 Emulsion 140Ml</a>
                                        <div class="product-price">672.000đ</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <div class="product-top">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-thumb">
                                            <img src="/anh/spm8.webp" alt="">  
                                        </a>
                                        <a href="" class="buy-now">Mua ngay</a>                    
                                    </div>
                                    <div class="product-info">
                                        <a href="/chi tiết 1 sản phẩm/chitiet.html" class="product-name" title="Tẩy Da Chết Toàn Thân Và Giảm Mụn Lưng Exclusive Cosmetic Gel Scrub Coffee Cinnamon Clove 380G">Tẩy Da Chết Toàn Thân Và Giảm Mụn Lưng Exclusive Cosmetic Gel Scrub Coffee Cinnamon Clove 380G</a>
                                        <div class="product-price">96.000đ</div>
                                    </div>
                                </div>
                            </li>
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