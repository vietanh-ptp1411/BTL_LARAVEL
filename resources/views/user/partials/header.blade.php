<header>   
    <div class="menu">
        <a href="index.html"><img src="/anh/anhTitle.webp" alt=""></a>
    </div>

    <div style="width: 100%; height: 101px;">
        <div class="menu2">
            <div class="logo">
                <a href="{{route('home')}}"><img src="/DoAn3_IMG/logo.png" style="height: 66px;width: 250px; padding-top: 15px;"></a>
            </div>
            <div class="box">
                <form class="form" action="{{route('search')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="search">
                        <input type="text" class="search1" name="keywordsubmit" placeholder="Tìm kiếm sản phẩm">
                        <span class="search2">
                            <button type="submit" class="search3" ><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form> 
                <div class="research">
                    <a href="">
                        <span>Thương hiệu</span>
                    </a>
                    <a href="">
                        <span>Khuyến mãi hot</span>
                    </a>
                    <a href="">
                        <span>Sản phẩm mới</span>
                    </a>
                    <a href="">
                        <span>Balo</span>
                    </a>
                    <a href="">
                        <span>Phụ Kiện</span>
                    </a>
                </div>
            </div>

            <div class="login">
                <div class="login1">
                    <div class="account">
                        <?php
                        $customerID = Session::get('CusID');
                        if ($customerID != NULL) {
                            $userName = Session::get('CusName');
                        ?>
                            <a href="#" class="account-link"><?php echo $userName; ?></a>
                        <?php
                        } else {
                        ?>
                            <a href="{{ route('login') }}" class="account-link">Đăng Nhập</a>
                        <?php
                        }
                        ?>
                        <div class="dropdown-content">
                            <ul class="login2">
                                <?php
                                if ($customerID != NULL) {
                                ?>
                                    <li><a href="{{ route('OrderStatus') }}">Đơn hàng</a></li>
                                    <li style="border-top: 1px solid #fff;"><a href="{{ route('logout') }}">Đăng xuất</a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="count-cart">
                        <a href="{{ route('giohang') }}">
                            <div class="count-cart-icon"></div>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    

    <div class="menu3">
        <div class="menu3_1-container">
                
                <ul class="menu3_1">
                    @foreach($danhMuc as $item)
                        <li class="menu3_1-item">
                            @if($item->CatID == 9)
                                <a href="{{ route('blog')}}">{{ $item->CatName }}</a>
                            @else
                                <a href="{{ route('danhmuc', ['CatID' => $item->CatID]) }}">{{ $item->CatName }}</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
                
          </div>
    </div>
</div>
</header>