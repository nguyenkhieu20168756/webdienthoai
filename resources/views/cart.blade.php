@extends('layouts.template')

@section('title','Giỏ hàng')

@section('content')
<div class="container mb-5">
    <div class="heading-link mt-3">
         <ul class="item">
              <li class="home">
                   <a href="{{ route('index') }}">Trang chủ</a>
              </li>
              <li class="icon active">
                   <a href={{ route('cart') }}>Giỏ hàng</a>
              </li>
         </ul>
    </div>
    <div class="heading-lg">
         <h1>GIỎ HÀNG CỦA TUI</h1>
    </div>
    <div class="step">
         <div class="step-item active">
              <div class="step-item-icon mr-0">
                   <i class="fas fa-cart-plus"></i>
              </div>
              <span>GIỎ HÀNG</span>
              <div class="step-number">1</div>
         </div>
         <div class="liner mr-0"></div>
         <div class="step-item">
              <div class="step-item-icon">
                   <i class="fas fa-dollar-sign"></i>
              </div>
              <span>THANH TOÁN</span>
              <div class="step-number">2</div>
         </div>
         <div class="liner mr-0"></div>
         <div class="step-item">
              <div class="step-item-icon">
                   <i class="fas fa-check"></i>
              </div>
              <span>HOÀN TẤT</span>
              <div class="step-number">3</div>
         </div>
    </div>
    <div class="cart-block">
        <div class="cart-info table-responsive">
            <div class="alert alert-light text-center" role="alert">
                Không có sản phẩm nào trong giỏ hàng
            </div>
            <table class="table product-list">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th class="text-center">Hình ảnh</th>
                        <th class="text-right">Giá</th>
                        <th class="text-center">Số lượng</th>
                        <th class="text-right">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td class="name"><a href=""></a></td>
                            <td class="image-product">
                                {{-- <img src=""> --}}
                            </td>
                            <td class="price text-right"></td>
                            <td class="quantity">
                                <div class="quantity-control" data-quantity="">
                                    {{-- <button class="quantity-btn" ><svg viewBox="0 0 409.6 409.6"><g><g><path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" /></g></g></svg></button>
                                    <input type="number" class="quantity-input"
                                            step="1" min="1" name="quantity">
                                    <button class="quantity-btn" data-quantity-plus=""><svg viewBox="0 0 426.66667 426.66667"><path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0" /></svg></button> --}}
                                </div>
                            </td>
                            <td class="amount text-right">
                                
                            </td>
                            {{-- <td class="remove" style="cursor: pointer">
                                <i class="far fa-trash-alt"></i>
                            </td> --}}
                        </tr>
                </tbody>
            </table>
        </div>
        <div class="clearfix text-right">
            <span><b>Tổng thanh toán:</b></span>
            <span class="pay-price">
            </span>
        </div>
        <div class="button text-right mt-3">
            <a class="btn btn-default" href="{{ route('index') }}" onclick="window.history.back()">Tiếp tục mua hàng</a>
            <a class="btn btn-primary" href="">Thanh toán</a>
        </div>
    </div>
</div>
@endsection