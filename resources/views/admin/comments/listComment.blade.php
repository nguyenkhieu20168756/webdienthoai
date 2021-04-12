@extends('admin.layouts.index')


@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đánh giá
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>Số thứ tự</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Thứ tự hiển thị</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody align="center">
                    @foreach ($comments as $comment)
                        <tr>
                            <td>{{ $comment['id'] }}</td>
                            <td>{{ $comment['title'] }}</td>
                            <td>{{ $comment['content'] }}</td>
                            <td>{{ $comment['sort_order'] }}</td>
                            <td>
                                <a href="{{ route('comment.delete',['id'=>$comment['id']]) }}"><i class="fa fa-times" aria-hidden="true"></i></a>
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