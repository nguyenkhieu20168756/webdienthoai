<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Bảng điều khiển</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i> Danh mục sản phẩm<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('category.list') }}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{ route('category.add.form') }}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fas fa-box-open"></i> Sản phẩm<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('product.list') }}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{ route('product.add.form') }}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fas fa-user-circle"></i> Nhà cung cấp<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('product.list') }}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{ route('product.add.form') }}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fas fa-images"></i> Slide<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('slide.list') }}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{ route('slide.add.form') }}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fas fa-pager"></i> Tin tức<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('article.list') }}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{ route('article.add.form') }}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> Người dùng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('user.list') }}">Danh sách</a>
                    </li>
                    <li>
                        <a href="{{ route('user.add.form') }}">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fas fa-envelope"></i> Đánh giá<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('comment.list') }}">Danh sách</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Đơn hàng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('order.list') }}">Danh sách</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>