@extends('layouts.template')

@section('title','Bài viết')

@section('content')
<div class="row mb-4 mt-4">
    <div class="col-lg-9 col-md-12">
        <small><a href="{{ route('index') }}" class="text-dark">Trang chủ</a> <i class="fas fa-angle-double-right"></i> <span
                class="introduce">Tin tức</span></small>
        <div class="heading-lg mt-3 mb-3">
          <h1>BÀI VIẾT</h1>
        </div>
        <div class="news-content">
            <div classs="news-block">
                <div class="news-item">
                    <div class="row">
                        <div class="col-lg-12 title-news">
                            <h4><a href=""></a></h4>
                            <small></small>
                            <p class="text-justify"></p>
                        </div>
                    </div>
                </div>
            <hr>
        </div>
    </div>
</div>
@endsection