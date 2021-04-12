@extends('admin.layouts.index')


@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin tức
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
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{ $article['id'] }}</td>
                            <td>{{ $article['title'] }}</td>
                            <td>{{ $article['content'] }}</td>
                            <td>{{ $article['sort_order'] }}</td>
                            <td>
                                <a href="{{ route('category.delete',['id'=>$article['id']]) }}"><i class="fa fa-times" aria-hidden="true"></i></a>
                                <a href="{{ route('category.edit.form',['id'=>$article['id']]) }}" style="margin:0 1rem;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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