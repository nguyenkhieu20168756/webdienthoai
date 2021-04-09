@extends('layouts.template')

@section('title','Trang chủ')

@section('content')
    <div class="row banner-container">
        <div class="col-lg-9">
            <div id="banner" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#banner" data-slide-to="0" class="active"></li>
                    <li data-target="#banner" data-slide-to="1"></li>
                    <li data-target="#banner" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('assets/img/slides/slide1.png')}}" alt="1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/img/slides/slide2.png')}}" alt="2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/img/slides/slide3.png')}}" alt="3">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#banner" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#banner" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="box-banner">
                <div class="banners">
                    <a href="#">
                        <img src="{{asset('assets/img/brands/brand1.png')}}" class="img-responsive mt-3" width="150px" height="100px"/>
                    </a>
                    <a href="#">
                        <img src="{{asset('assets/img/brands/brand2.png')}}" class="img-responsive mt-3" width="150px" height="100px"/>
                    </a>
                    <a href="#">
                        <img src="{{asset('assets/img/brands/brand3.png')}}" class="img-responsive mt-3" width="150px" height="100px"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="banners-2 row mt-4 mb-4">
        <div class="col-lg-4">
            <a href="">
                <img src="{{asset('assets/img/brands/brand4.png')}}" class="img-responsive" width="300px" height="150px"/>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="">
                <img src="{{asset('assets/img/brands/brand5.png')}}" class="img-responsive" width="300px" height="150px"/>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="">
                <img src="{{asset('assets/img/brands/brand6.png')}}" class="img-responsive" width="300px" height="150px"/>
            </a>
        </div>
    </div>
    <ul class="nav nav-tabs mb-4">
        <li class="nav-item">
            <a class="nav-link active text-dark" data-toggle="tab" href="#phukien">Phụ kiện Apple</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" data-toggle="tab" href="#manhinh">Dán màn hình</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" data-toggle="tab" href="#baoda">Bao da,ốp lưng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" data-toggle="tab" href="#capsac">Cáp sạc</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" data-toggle="tab" href="#pin">Pin dự phòng</a>
        </li>
    </ul>
    <div class="row mb-4" id="phukien">
        <div class="col-lg-3">
            <div class="product-item-box">
                <div class="product-item">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('assets/img/products/phukien/phukien1.png')}}" alt="" width="100%" height="100%" name="product-image" class="product-image" />
                        </a>
                        <a href="" class="more-info"><i class="fas fa-search"></i> XEM THÊM</a>
                    </div>
                    <a href="" class="product-name mt-4">Tai nghe Bluetooth Apple AirPods 2 VN/A</a>
                    <div class="price-new" name="price-new">3.400.000đ</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="product-item-box">
                <div class="product-item">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('assets/img/products/phukien/phukien1.png')}}" alt="" width="100%" height="100%" name="product-image" class="product-image" />
                        </a>
                        <a href="" class="more-info"><i class="fas fa-search"></i> XEM THÊM</a>
                    </div>
                    <a href="" class="product-name mt-4">Tai nghe Bluetooth Apple AirPods 2 VN/A</a>
                    <div class="price-new" name="price-new">3.400.000đ</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="product-item-box">
                <div class="product-item">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('assets/img/products/phukien/phukien1.png')}}" alt="" width="100%" height="100%" name="product-image" class="product-image" />
                        </a>
                        <a href="" class="more-info"><i class="fas fa-search"></i> XEM THÊM</a>
                    </div>
                    <a href="" class="product-name mt-4">Tai nghe Bluetooth Apple AirPods 2 VN/A</a>
                    <div class="price-new" name="price-new">3.400.000đ</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="product-item-box">
                <div class="product-item">
                    <div class="image">
                        <a href="">
                            <img src="{{asset('assets/img/products/phukien/phukien1.png')}}" alt="" width="100%" height="100%" name="product-image" class="product-image" />
                        </a>
                        <a href="" class="more-info"><i class="fas fa-search"></i> XEM THÊM</a>
                    </div>
                    <a href="" class="product-name mt-4">Tai nghe Bluetooth Apple AirPods 2 VN/A</a>
                    <div class="price-new" name="price-new">3.400.000đ</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-lg-3">
            <div class="sale-policy-block">
                <i class="fas fa-sync-alt"></i> HOÀN TRẢ TRONG VÒNG 30 NGÀY
            </div>
        </div>
        <div class="col-lg-3">
            <div class="sale-policy-block">
                <i class="fas fa-truck"></i> GIAO HÀNG MIỄN PHÍ
            </div>
        </div>
        <div class="col-lg-3">
            <div class="sale-policy-block">
                <i class="fas fa-shopping-basket"></i> THANH TOÁN LINH HOẠT
            </div>
        </div>
        <div class="col-lg-3">
            <div class="sale-policy-block">
                <i class="fas fa-users"></i> HỖ TRỢ KHÁCH HÀNG
            </div>
        </div>
    </div>
@endsection