<div id="sidebar-left" class="span2">
    <div class="nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="{{ route('admin') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Trang chủ</span></a></li>
            <li>
                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Danh Mục </span></a>
                <ul>
                    <li><a class="submenu" href="{{ route('categories.index') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Danh Mục SP</span></a></li>
                    <li><a class="submenu" href="{{ route('categories.create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Thêm Danh Mục SP</span></a></li>
                </ul>
            </li>
            <li>
                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Sản Phẩm </span></a>
                <ul>
                    <li><a class="submenu" href="{{ route('product.index') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> DS Sản Phẩm</span></a></li>
                    <li><a class="submenu" href="{{ route('product.create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Thêm SP</span></a></li>
                </ul>
            </li>

            <li><a href="{{ route('order.index') }}"><i class="icon-list-alt"></i><span class="hidden-tablet"> Đơn hàng</span></a></li>
            <li>
                <a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet">  Hóa Đơn Nhập </span></a>
                <ul>
                    <li><a class="submenu" href="{{ route('importbill.index') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Danh sách hóa đơn nhập</span></a></li>
                    <li><a class="submenu" href="{{ route('importbill.create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Nhập hàng</span></a></li>
                </ul>
            </li>
            <li><a href="{{ route('SalesInvoice.index') }}"><i class="icon-tasks"></i><span class="hidden-tablet"> Hóa đơn bán</span></a></li>
			@if(Session::get('chucvu') == 'admin')
			<li>
                <a class="dropmenu" href="#"><i class="icon-eye-open"></i><span class="hidden-tablet">  Nhân viên </span></a>
                <ul>
                    <li><a class="submenu" href="{{ route('employee.index') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Danh sách nhân viên</span></a></li>
                    <li><a class="submenu" href="{{ route('employee.create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Thêm nhân viên</span></a></li>
                </ul>
            </li>
			@endif
            {{-- <li><a href="{{route('employee.index')}}"><i class="icon-eye-open"></i><span class="hidden-tablet"> </span></a></li> --}}
            <li>
                <a class="dropmenu" href="#"><i class="icon-align-justify"></i><span class="hidden-tablet"> Nhà cung cấp </span></a>
                <ul>
                    <li><a class="submenu" href="{{ route('supplier.index') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Danh sách nhà cung cấp</span></a></li>
                    <li><a class="submenu" href="{{ route('supplier.create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Thêm nhà cung cấp</span></a></li>
                </ul>
            </li>
        </ul>
    </div>	
</div>
