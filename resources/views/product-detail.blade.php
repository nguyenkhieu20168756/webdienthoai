@extends('layouts.template')

@section('title')
{{ $product['title'] }}
@endsection
@section('content')
<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-lg-3">
            <div class="menu-about">
                <div class="heading-lg">
                    <h1>CHÍNH SÁCH GIAO HÀNG</h1>
                </div>
                <ul class="list-group mb-5">
                    <li class="list-group-item">Giao hàng TOÀN QUỐC</li>
                    <li class="list-group-item">Thanh toán khi nhận hàng</li>
                    <li class="list-group-item">Đổi trả trong
                        <span class="color-pink">15 ngày</span></li>
                    <li class="list-group-item">Hoàn ngay tiền mặt</li>
                    <li class="list-group-item">Chất lượng đảm bảo</li>
                    <li class="list-group-item">Miễn phí vận chuyển:
                        <span class="color-pink">Đơn hàng từ 3 món trở lên</span></li>
                </ul>
                <div class="heading-lg">
                    <h1>HƯỚNG DẪN MUA HÀNG</h1>
                </div>
                <ul class="list-group mb-5">
                    <li class="list-group-item">Gọi điện thoại
                        <b class="color-pink">089 810 3236</b> để mua hàng</li>
                    <li class="list-group-item">Mua tại cửa hàng Phone Store:
                        <b class="color-pink">Hà Nội</b></li>
                    <li class="list-group-item">Mua sỉ/buôn xin gọi
                        <b>0899 10 32 36</b> để được hỗ trợ</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9">
            <small><a href="{{ route('index') }}" class="text-dark">Trang chủ</a> <i class="fas fa-angle-double-right"></i> <a
                    href="{{ route('products') }}" class="text-dark">Sản phẩm</a>
                <i class="fas fa-angle-double-right"></i> <span class="introduce">Chi tiết sản
                    phẩm</span></small>
            @if(Session::has('invalid'))
                <div class="alert alert-danger alert-dismissible mt-2">
                        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{Session::get('invalid')}}
                </div>
            @endif
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible mt-2">
                        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{Session::get('success')}}
                </div>
            @endif
            <div class="row mt-4 mb-3">
                <div class="col-md-6 sp-large">
                    <a href=""><img src="{{ asset('storage/images/products/'.$product['image_path']) }}" alt="{{ $product['id'] }}"
                            alt=""></a>
                </div>
                <div class="col-md-6 describe">
                    <h2 class="ng-binding">{{ $product['name'] }}</h2>
                    <div class="price">
                        <span class="price-new ng-binding">Giá: {{ number_format($product['price'],-3,',',',') }} VND</span>
                    </div>
                    <span class="product-code ng-binding d-block mb-2"><b>Mã SP:</b> {{ $product['sku'] }} </span>
                    <form class="add-to-cart" method="POST" action="{{ route('add.to.cart',['id' => $product['id']]) }}">
                        @csrf
                        <div class="btn-buy mt-4">
                            <button type="submit" class="btn btn-danger btn-add-to-cart">
                                <i class="fas fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="menu-about">
                <div class="heading-lg mb-2">
                    <h1>CHI TIẾT SẢN PHẨM</h1>
                </div>
                <div class="content-describe mb-5 text-justify">
                    {!! $product['description'] !!}
                </div>

                <div class="heading-lg">
                    <h1>SẢN PHẨM HOT</h1>
                </div>
                    <div class="row">
                        @foreach ($randomProduct as $item)
                        <div class="col-3 mt-3">
                            <div class="card">
                                <div class="card-image">
                                    <a href="{{ route('product.detail',['id' => $item['id']]) }}">
                                        <img src="{{ asset('storage/images/products/'.$item['image_path']) }}" class="card-img-top" />
                                    </a>
                                </div>
                            </div>
                            <div class="box-product-block">
                                <div class="name text-center">
                                    <a href="{{ route('product.detail',['id' => $item['id']]) }}" class="text-dark">
                                        <b>{{ $item['title'] }}</b>
                                    </a>
                                </div>
                            </div>
                            <div class="price text-center">
                                <span class="price-new">{{ number_format($item['price'],-3,',',',') }} VND</span>
                            </div>

                        </div>
                        @endforeach
                    </div>
        </div>
    </div>
</div>
@endsection