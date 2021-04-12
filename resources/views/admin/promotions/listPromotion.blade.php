@extends('admin.layouts.index')


@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Mã khuyến mãi
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>Số thứ tự</th>
                        <th>Tên mã</th>
                        <th>Mã</th>
                        <th>Trị giá</th>
                        <th>Số lượng</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody align="center">
                    @foreach ($promotions as $promotion)
                        <tr>
                            <td>{{ $promotion['id'] }}</td>
                            <td>{{ $promotion['title'] }}</td>
                            <td>{{ $promotion['code'] }}</td>
                            <td>{{ $promotion['price'] }}</td>
                            <td>{{ $promotion['quantity'] }}</td>
                            <td>
                                <a href="{{ route('promotion.delete',['id'=>$promotion['id']]) }}"><i class="fa fa-times" aria-hidden="true"></i></a>
                                <a href="{{ route('promotion.edit.form',['id'=>$promotion['id']]) }}" style="margin:0 1rem;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection