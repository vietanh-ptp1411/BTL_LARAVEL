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

            <div  class="login">
                <div class="login1">
                    <ul class="login2">
                        <?php
                            $customerID= Session::get('CusID');
                            if($customerID != NULL){
                        ?>
                            <li style="margin-right: 10px"></li>
                            <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                        <?php
                        }else {
                            ?>
                            <li><a href="{{route('login')}}">Đăng Nhập</a></li>
                            <?php
                        }
                        ?>
                        
                    </ul>
                    <div class="count-cart">
                        <a href="{{route('giohang')}}"><div class="count-cart-icon"></div></a>
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