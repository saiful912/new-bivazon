@extends('backend.Layouts.app')
@section('main')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="main-panel">
            <div class="container-fluid">
                <div class="content-wrapper" style="margin-bottom: 30px">
                    <div class="card">
                        <div class="card-header">
                            Update Product
                            <a href="{{route('products')}}" class="btn btn-info float-right" style="margin-top: -6px">
                                View Product
                            </a>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.product.update',$product->id)}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="district_id">Sale Type</label>
                                            <select class="form-control" name="product_type" required>
                                                @foreach($types as $type)
                                                    <option value="{{$type}}" {{$type==$product->type ? 'selected' : ''}}>{{ucfirst($type)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="district_id">Select Category Type</label>
                                            <select class="form-control js-select_2" name="category_id" required>
                                                @foreach($categories as $category)
                                                    <option selected
                                                            value="{{$category->id}}" >{{ucfirst($category->name)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="user_id">Select Seller Shop</label>
                                            <select class="form-control js-select_2" name="user_id" id="user_id">
                                                @foreach($shops as $shop)
                                                    <option
                                                            value="{{$shop->id}}" {{$shop==$product->user->merchant->shop_name ? 'selected' : ''}}>{{ucfirst($shop->merchant->shop_name)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Product Name</label>
                                            <input type="text" class="form-control" name="name" id="name" required
                                                   value="{{$product->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="sku">Product SKU</label>
                                            <input type="text" class="form-control" name="sku" id="sku"
                                                   value="{{$product->sku}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="code">Product Code</label>
                                            <input type="text" class="form-control" name="code" id="code"
                                                   value="{{$product->code}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="short_description">Short Description</label>
                                            <textarea type="text" class="form-control" name="short_description"
                                                      id="short_description">
                                                {!! $product->short_description !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="long_description">Long Description</label>
                                            <textarea type="text" class="form-control" name="long_description"
                                                      id="long_description">
                                                {!! $product->long_description !!}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="price">Product Price</label>
                                            <input type="number" class="form-control" name="price" id="price"
                                                   value="{{$product->price}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="discount">Product Discount Price</label>
                                            <input type="number" class="form-control" name="discount" id="discount"
                                                   value="{{$product->discount}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="images">Previous Image</label>
                                            <img src="{{upload_url('/products/'.collect($product->images)->first())}}"
                                                 alt="ProductImage" width="60px">
                                            <label for="images">Product Image</label>
                                            <input type="file" class="form-control" name="images[]" id="images"
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="status">Select Seller Shop</label>
                                            <select class="form-control js-select_2" name="status" id="status">
                                                <option value="1" @if($product->status == 1) selected @endif>Active
                                                </option>
                                                <option value="0" @if($product->status == 0) selected @endif>Inactive
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Product</button>
                                <a href="{{route('products')}}" class="btn btn-danger">back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop