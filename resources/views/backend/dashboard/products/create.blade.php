@extends('backend.Layouts.app')
@section('main')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="main-panel">
            <div class="container-fluid">
                <div class="content-wrapper" style="margin-bottom: 30px">
                    <div class="card">
                        <div class="card-header">
                            Add Product
                            <a href="{{route('products')}}" class="btn btn-info float-right" style="margin-top: -6px">
                                View Product
                            </a>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="user_id">Select Seller Shop</label>
                                            <select class="form-control js-select_2" name="user_id" id="user_id"
                                                    required>
                                                @foreach($shops as $shop)
                                                    <option value="{{$shop->id}}">{{ucfirst(optional($shop->merchant)->shop_name)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="user_id">Sale Type</label>
                                            <select class="form-control" name="product_type" required>
                                                @foreach($types as $type)
                                                    <option value="{{$type}}">{{ucfirst($type)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="category_id">Select Category Type</label>
                                            <select class="form-control py-5 js-select_2" name="category_id" required>
                                                @foreach($categories as $category)
                                                    <option
                                                        value="{{$category->id}}">{{ucfirst($category->name)}}</option>
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
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="sku">Product SKU</label>
                                            <input type="text" class="form-control" name="sku" id="sku" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="code">Product Code</label>
                                            <input type="text" class="form-control" name="code" id="code" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price">Product Price</label>
                                            <input type="number" class="form-control" name="price" id="price" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="discount">Product Discount Price</label>
                                            <input type="number" class="form-control" name="discount" id="discount"
                                                   value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="mytextarea">Short Description</label>
                                            <textarea type="text" class="form-control" name="short_description"
                                                      id="mytextarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="mytextarea1">Long Description</label>
                                            <textarea class="form-control" name="long_description"
                                                      id="mytextarea1"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="custom-file-container" data-upload-id="myUniqueUploadId">
                                            <label>Upload File <a href="javascript:void(0)"
                                                                  class="custom-file-container__image-clear"
                                                                  title="Clear Image">
                                                    clear
                                                </a>
                                            </label>
                                            <label class="custom-file-container__custom-file">
                                                <input type="file"
                                                       name="images[]"
                                                       class="custom-file-container__custom-file__custom-file-input"
                                                       accept="*" multiple aria-label="Choose File">
                                                <span
                                                    class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 flex">
                                        <label class="switch">
                                            <input type="checkbox" name="status" value="true">
                                            <span class="slider round"></span>
                                        </label>
                                        <span class="text-gray-900 font-semibold">Product status</span>
                                    </div>
                                    <div class="col-md-6 flex justify-end ">
                                        <button type="submit" class="btn btn-primary float-right">
                                            <i class="fa fa-save"></i>
                                            Save
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
