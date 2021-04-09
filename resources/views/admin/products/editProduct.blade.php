@extends('admin.layouts.index')


@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Edit</small>
                </h1>
                <form action="{{ route('product.edit',['id' => $product['id']]) }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label for="img">Image path:</label>
                        <input type="text" class="form-control" placeholder="Enter image path" id="img" name="img" value={{ $product['imagePath'] }}>
                        <small style="color: #676767">Ex: ./img/product/product.png, you should update folder public</small>
                    </div>
                    <div class="form-group">
                        <label for="product-name">Product name:</label>
                        <input type="text" class="form-control" placeholder="Enter product name" id="product-name" name="product-name" value={{ $product['name'] }}>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" placeholder="Enter price" id="price" name="price" value={{ $product['price'] }}>
                    </div>
                    <div class="form-group">
                        <label for="color">Color:</label>
                        <input type="text" class="form-control" placeholder="Enter color" id="color" name="color" value={{ $product['color'] }}>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </form>
            </div>
        </div>
    </div>   
</div>
@endsection