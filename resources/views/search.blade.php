@extends('layouts.template')

@section('title','Tìm kiếm')

@section('content')
<div class="container mt-3 mb-3">
    <div class="row mb-4">
        <div class="col-lg-3 col-md-12">
            <div class="menu-news">
                <h5 class="new-title">SẢN PHẨM</h5>
                <ul>
                    <li><i class="fas fa-arrow-circle-right"></i> <a href="">Phụ kiện Apple</a></li>
                    <hr />
                    <li><i class="fas fa-arrow-circle-right"></i> <a href="">Dán màn hình</a></li>
                    <hr />
                    <li><i class="fas fa-arrow-circle-right"></i> <a href="">Bao da,ốp lưng</a></li>
                    <hr />
                    <li><i class="fas fa-arrow-circle-right"></i> <a href="">Cáp sạc</a></li>
                    <hr />
                    <li><i class="fas fa-arrow-circle-right"></i> <a href="">Pin dự phòng</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9 col-md-12">
            <div class="row ml-4">
                <div class="col-md-3 mb-4">
                    <form action="" method="POST">
                        @csrf
                        {{-- <div class="product-item-box">
                            <div class="product-item">
                                <div class="image-search">
                                    <a href="">
                                        <img src="" alt="" width="100%"
                                            height="100%" name="product-image" class="product-image" />
                                    </a>
                                    <a href="" class="more-info-search"><i
                                            class="fas fa-search"></i> XEM THÊM</a>
                                </div>
                                <a href=""
                                    class="product-name-search mt-4"></a>
                                <div class="price-new" name="price-new">
                                    
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="price" value="" />
                        <input type="hidden" name="title" value="" />
                        <input type="hidden" name="quantity" value="" />
                        <div class="col text-center">
                            <button type="submit" class="buy" name="buy"><i class="fas fa-shopping-cart"></i>
                                Mua</button>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection