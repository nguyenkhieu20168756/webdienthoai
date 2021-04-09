@extends('layouts.template')

@section('title','Các sản phẩm')

@section('content')
<div class="container mt-4 mb-4">
    <small><a href="{{ route('index') }}" class="text-dark">Trang chủ</a> <i class="fas fa-angle-double-right"></i> <span class="introduce">Sản phẩm</span></small>
    <div class="row">
        <div class="col-12 mt-4">
            <div class="menu-about">
                <div class="heading-lg mb-3">
                    <h1>SẢN PHẨM</h1>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-right mb-3">
            <span>Sắp xếp </span><select class="form-select" id="form-select-filter">
                <option value="0" selected>Mặc định</option>
                <option value="1">Giá giảm dần</option>
                <option value="2">Giá tăng dần</option>
                <option value="3">Tên sản phẩm A - Z</option>
                <option value="4">Tên sản phẩm Z - A</option>
            </select>
        </div>
    </div>
    <div class="row" id="body-product">
        <div class="col-lg-3 border">
            <div class="product-item-box">
                <div class="product-item border-0">
                    <div class="image">
                        <a href="{{ route('product-detail') }}">
                            <img src="{{asset('assets/img/products/phukien/phukien1.png')}}" alt="" width="100%" height="100%" name="product-image" class="product-image" />
                        </a>
                        <a href="" class="more-info"><i class="fas fa-search"></i> XEM THÊM</a>
                    </div>
                    <a href="" class="product-name mt-4">Tai nghe Bluetooth Apple AirPods 2 VN/A</a>
                    <div class="price-new" name="price-new">3.400.000đ</div>
                </div>
            </div>
            <form class="add-to-cart mb-5" action="" method="POST">
                <div class="col text-center">
                    <input type="hidden" name="product_id" value="" />
                    <input type="hidden" name="product_quantity" value="1" />
                    <button type="submit" class="buy" name="buy"><i class="fas fa-shopping-cart"></i> Mua</button>
                </div>
            </form>
        </div>
        <div class="col-lg-3 border">
            <div class="product-item-box">
                <div class="product-item border-0">
                    <div class="image">
                        <a href="{{ route('product-detail') }}">
                            <img src="{{asset('assets/img/products/phukien/phukien1.png')}}" alt="" width="100%" height="100%" name="product-image" class="product-image" />
                        </a>
                        <a href="" class="more-info"><i class="fas fa-search"></i> XEM THÊM</a>
                    </div>
                    <a href="" class="product-name mt-4">Tai nghe Bluetooth Apple AirPods 2 VN/A</a>
                    <div class="price-new" name="price-new">3.400.000đ</div>
                </div>
            </div>
            <form class="add-to-cart mb-5" action="" method="POST">
                <div class="col text-center">
                    <input type="hidden" name="product_id" value="" />
                    <input type="hidden" name="product_quantity" value="1" />
                    <button type="submit" class="buy" name="buy"><i class="fas fa-shopping-cart"></i> Mua</button>
                </div>
            </form>
        </div>
        <div class="col-lg-3 border">
            <div class="product-item-box">
                <div class="product-item border-0">
                    <div class="image">
                        <a href="{{ route('product-detail') }}">
                            <img src="{{asset('assets/img/products/phukien/phukien1.png')}}" alt="" width="100%" height="100%" name="product-image" class="product-image" />
                        </a>
                        <a href="" class="more-info"><i class="fas fa-search"></i> XEM THÊM</a>
                    </div>
                    <a href="" class="product-name mt-4">Tai nghe Bluetooth Apple AirPods 2 VN/A</a>
                    <div class="price-new" name="price-new">3.400.000đ</div>
                </div>
            </div>
            <form class="add-to-cart mb-5" action="" method="POST">
                <div class="col text-center">
                    <input type="hidden" name="product_id" value="" />
                    <input type="hidden" name="product_quantity" value="1" />
                    <button type="submit" class="buy" name="buy"><i class="fas fa-shopping-cart"></i> Mua</button>
                </div>
            </form>
        </div>
        <div class="col-lg-3 border">
            <div class="product-item-box">
                <div class="product-item border-0">
                    <div class="image">
                        <a href="{{ route('product-detail') }}">
                            <img src="{{asset('assets/img/products/phukien/phukien1.png')}}" alt="" width="100%" height="100%" name="product-image" class="product-image" />
                        </a>
                        <a href="" class="more-info"><i class="fas fa-search"></i> XEM THÊM</a>
                    </div>
                    <a href="" class="product-name mt-4">Tai nghe Bluetooth Apple AirPods 2 VN/A</a>
                    <div class="price-new" name="price-new">3.400.000đ</div>
                </div>
            </div>
            <form class="add-to-cart mb-5" action="" method="POST">
                <div class="col text-center">
                    <input type="hidden" name="product_id" value="" />
                    <input type="hidden" name="product_quantity" value="1" />
                    <button type="submit" class="buy" name="buy"><i class="fas fa-shopping-cart"></i> Mua</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection