@extends('admin.layouts.index')


@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Số thứ tự</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá tiền</th>
                        <th>Mô tả</th>
                        <th>Danh mục sản phẩm</th>
                        <th>Nhà cung cấp</th>
                        <th>Thương hiệu</th>
                        <th>Số lượng</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product['id'] }}</td>
                                <td>{{ $product['title'] }}</td>
                                <td>{{ $product['price'] }}</td>
                                <td>{{ $product['description'] }}</td>
                                <td>{{ $product['category_id'] }}</td>
                                <td>{{ $product['producer_id'] }}</td>
                                <td>{{ $product['brand_id'] }}</td>
                                <td>{{ $product['quantity'] }}</td>
                                <td>{{ $product['status'] }}</td>
                                <td>
                                    <a href="{{ route('product.delete',['id'=>$product['id']]) }}"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    <a href="{{ route('product.edit.form',['id'=>$product['id']]) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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