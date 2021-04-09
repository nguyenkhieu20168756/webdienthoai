@extends('layouts.template')

@section('title','Thông tin sản phẩm')

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
            <div class="row mt-4 mb-3">
                <div class="col-md-6 sp-large">
                    <a href=""><img src="{{asset('assets/img/products/phukien/phukien1.png')}}"
                            alt=""></a>
                </div>
                <div class="col-md-6 describe">
                    <h2 class="ng-binding"></h2>
                    <div class="price">
                        <span class="price-new ng-binding">3.400.000đ</span>
                    </div>
                    <span class="product-code ng-binding d-block mb-2"><b>Mã SP:</b></span>
                    <p class="describe-detail text-justify mb-2">
                        </p>
                    <iframe
                        class="mb-5"
                        src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fluankma&width=450&layout=standard&action=like&size=small&share=true&height=35&appId=415196006363533"
                        width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

                    <form class="add-to-cart">
                        <div class="product-detail-quantity">
                            <input type="hidden" value="" name="product_id">
                            <h5>Số lượng:</h5>
                            <div style="display: flex; flex-direction: row; ">
                                <button type="button" class="quantity-btn">
                                    <svg viewBox="0 0 409.6 409.6">
                                        <g>
                                            <g>
                                                <path
                                                    d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </button>
                                <input id="product-detail-quantity-input" class="quantity-input" type="number" value="1"
                                    class="text ng-valid ng-dirty ng-valid-number ng-touched" ng-model="InputQuantity"
                                    ng-init="InputQuantity=1" name="product_quantity">
                                <button type="button" class="quantity-btn">
                                    <svg viewBox="0 0 426.66667 426.66667">
                                        <path
                                            d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
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
                    Điều kiện <br>
                    - Hotdeal giao sản phẩm theo màu đến tận tay khách hàng. <br>
                    + Đối với khu vực TP.HCM: Miễn phí. <br>
                    + Đối với các tỉnh thành khác: Chuyển phát nhanh theo phí bưu điện. <br>
                    - Áp dụng cho Áo công sở tay búp sang trọng <br>
                    - Màu sắc: hồng, xanh, trắng <br>
                    - Kích cỡ: Freesize <br>
                    - Thời gian cuối giao sản phẩm đến hết 23/05/2015, không giao sản phẩm ngày chủ nhật.
                    <br>
                    - Khách hàng không bù thêm tiền khi nhận sản phẩm. <br>
                    - Khách hàng vui lòng kiểm tra sản phẩm trước khi nhận hàng, Hotdeal không chịu trách
                    nhiệm đổi trả sản phẩm sau khi giao hàng. <br>
                </div>

                <div class="heading-lg">
                    <h1>SẢN PHẨM HOT</h1>
                </div>
                {{-- <div class="row">
                    <div class="col-3 mt-3">
                        <div class="card">
                            <div class="card-image">
                                <a href="">
                                    <img src="" class="card-img-top" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="box-product-block">
                            <div class="name text-center">
                                <a href="" title="">
                                    <b></b>
                                </a>
                            </div>
                        </div>
                        <div class="price text-center">
                            <span class="price-new"></span>
                        </div>
                        <form class="add-to-cart" action="" method="POST">
                            <div class="col text-center">
                                <input type="hidden" name="product_id" value="" />
                                <input type="hidden" name="product_quantity" value="1" />
                                <button type="submit" class="buy" name="buy"><i class="fas fa-shopping-cart"></i> Mua</button>
                            </div>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection