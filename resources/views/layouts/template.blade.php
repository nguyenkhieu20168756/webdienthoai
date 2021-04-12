<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" media="all" />
	<!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- jQuery -->
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" type="image/png" href="{{asset('favicon.ico')}}" />
	<title>@yield('title')</title>
</head>

<body>
	<div class="wrapper">
		<!-- Header -->
		<!-- A grey horizontal navbar that becomes vertical on small screens -->
        <nav class="navbar navbar-expand-lg text-white header">
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-list text-white"></i></button>
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-phone-alt"></i> Hotline:0898 10 3236</a></li>
						<li class="nav-item"><a href="{{  route('account') }}"  class="nav-link"><i class="far fa-edit"></i>Tài Khoản</a></li>
						<li class="nav-item"><a href=""  class="nav-link"><i class="fas fa-sign-out-alt"></i> Đăng Xuất</a></li>
						<li class="nav-item"><a href="{{  route('login') }}"  class="nav-link"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a></li>
						<li class="nav-item"><a href="{{  route('register') }}"  class="nav-link"><i class="fas fa-key"></i> Đăng ký</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-4 mb-4 logo">
            <a href="{{ route('index') }}">
                <h1 style="font-family: 'Exo 2', sans-serif; color: gray">ACCESSORIES
                <span style="color: #f46164">STORE</span></h1>
            </a>
            <form method="POST" action="" class="form-search" enctype="multipart/form-data">
				@csrf
                <div class="form-group d-flex">
                    <input type="text" placeholder="Tìm kiếm..." class="search-text-box" name="q" />
                    <button type="submit" class="button-search"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <div class="cart">
                <a href="{{ route('cart') }}" class="text-dark cart-child">
                    <img src="{{asset('assets/img/cart/cart.png')}}" alt="cart" />
                    <span id="cart-total" class="cart-total ml-2 mr-2 mt-2"></span>
                    <i class="fa fa-arrow-right mt-2"></i>
                </a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg text-white bg-dark options">
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#product">
                <i class="fas fa-list text-white"></i>
            </button>
            <div class="container">
                <div class="collapse navbar-collapse" id="product">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{  route('index') }}" class="nav-link">TRANG CHỦ</a></li>
                        <li class="nav-item"><a href="{{  route('introduce') }}" class="nav-link">GIỚI THIỆU</a></li>
                        <li class="nav-item"><a href="{{  route('products') }}" class="nav-link">PHỤ KIỆN</a></li>
                        <li class="nav-item"><a href="{{  route('article') }}" class="nav-link">BÀI VIẾT</a></li>
                        <li class="nav-item"><a href="{{  route('contact') }}" class="nav-link">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<div class="container">
			@yield('content')
			<!-- Footer -->
			<div id="brands" class="row">
				<div class="col-lg-2">
					<img src="{{asset('assets/img/brands/brand1.png')}}" width="150px" height="100px" alt="" />
				</div>
				<div class="col-lg-2">
					<img src="{{asset('assets/img/brands/brand2.png')}}" width="150px" height="100px" alt="" />
				</div>
				<div class="col-lg-2">
					<img src="{{asset('assets/img/brands/brand3.png')}}" width="150px" height="100px" alt="" />
				</div>
				<div class="col-lg-2">
					<img src="{{asset('assets/img/brands/brand4.png')}}" width="150px" height="100px" alt="" />
				</div>
				<div class="col-lg-2">
					<img src="{{asset('assets/img/brands/brand5.png')}}" width="150px" height="100px" alt="" />
				</div>
				<div class="col-lg-2">
					<img src="{{asset('assets/img/brands/brand6.png')}}" width="150px" height="100px" alt="" />
				</div>
			</div>
			<hr />
			<div id="footer" class="container">
				<div class="row">
					<div class="col-lg-3">
						<h6>GIỚI THIỆU</h6>
						<div class="items">
							<a href=""><i class="fas fa-angle-double-right"></i> Về chúng tôi</a>
							<a href=""><i class="fas fa-angle-double-right"></i> Lĩnh vực hoạt động</a>
							<a href=""><i class="fas fa-angle-double-right"></i> Hỏi đáp</a>
							<a href=""><i class="fas fa-angle-double-right"></i> Quy chế hoạt động</a>
							<a href=""><i class="fas fa-angle-double-right"></i> Tuyển dụng</a>
						</div>
					</div>
					<div class="col-lg-3">
						<h6>TRỢ GIÚP</h6>
						<div class="items">
							<a href=""><i class="fas fa-angle-double-right"></i> Hướng dẫn thanh toán</a>
							<a href=""><i class="fas fa-angle-double-right"></i> Quy định đổi trả</a>
							<a href=""><i class="fas fa-angle-double-right"></i> Quy định thảo luận</a>
							<a href=""><i class="fas fa-angle-double-right"></i> Chính sức bảo mật</a>
							<a href=""><i class="fas fa-angle-double-right"></i> Chính sách bán hàng</a>
						</div>
					</div>
					<div class="col-lg-3">
						<h6>THÔNG TIN CÔNG TY</h6>
						<div class="items">
							<p>Cửa hàng phụ kiện</p>
							<p><i class="fas fa-map-marker-alt"></i> Chuyên bán các loại phụ kiện</p>
						</div>
					</div>
					<div class="col-lg-3">
						<h6>LIÊN HỆ</h6>
						<div class="contact">
							<div class="google"><a href=""><i class="fab fa-google-plus-g"></i></a></div>
							<div class="facebook"><a href=""><i class="fab fa-facebook-square"></i></a></div>
							<div class="youtube"><a href=""><i class="fab fa-youtube"></i></a></div>
							<div class="skype"><a href=""><i class="fab fa-skype"></i></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="scrollback" id="scrollback">
				<i class="fas fa-arrow-circle-up float-right"></i>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>