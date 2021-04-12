@extends('layouts.template')

@section('title','Đăng nhập')

@section('content')
<div class="container">
    <div class="heading-link mt-3">
         <ul class="item">
              <li class="home">
                   <a href="{{  route('index') }}">Trang chủ</a>
              </li>
              <li class="icon active">
                   <a href="{{  route('login') }}">Đăng nhập</a>
              </li>
         </ul>
    </div>
    <div class="row">
         <div class="col-md-3 mt-1 mb-3">
              <div class="heading-lg">
                   <h1>TÀI KHOẢN</h1>
              </div>
              <ul>
                   <li>
                        <a href="{{  route('login') }}">
                             <i class="fas fa-sign-in-alt"></i>
                             Đăng nhập
                        </a>
                   </li>
                   <li href="{{  route('register') }}">
                        <a href="{{  route('register') }}">
                             <i class="fas fa-sign-in-alt"></i>
                             Đăng ký
                        </a>
                   </li>
                   <li>
                        <a href="{{  route('resetpwd') }}">
                             <i class="fas fa-sign-in-alt"></i>
                             Quên mật khẩu
                        </a>
                   </li>
              </ul>
         </div>
         <div class="col-md-9 mt-1 mb-3">
              <div class="heading-lg">
                   <h1>ĐĂNG NHẬP HỆ THỐNG</h1>
              </div>
              <form class="form-horizontal mt-4" action="" method="POST">
                    @csrf
                   <div class="form-group">
                        <label class="control-label col-sm-2" for="username">Tài khoản người dùng:</label>
                        <div class="col-sm-10">
                             <input type="text" class="form-control" name="username" id="username" placeholder="Nhập username">
                        </div>
                   </div>
                   <div class="form-group">
                        <label class="control-label col-sm-2" for="password">Mật khẩu:</label>
                        <div class="col-sm-10">
                             <input type="password" class="form-control" id="password" name="password" placeholder="Nhập password">
                             <a href="{{  route('resetpwd') }}">Quên mật khẩu</a>
                        </div>
                   </div>
                   <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                             <button type="submit" class="btn-login">Đăng nhập</button>
                             
                        </div>
                   </div>
              </form>      
         </div>
    </div>
</div>
@endsection