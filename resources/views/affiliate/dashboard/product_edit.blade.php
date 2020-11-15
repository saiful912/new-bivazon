@extends('merchant.Layouts.app')
@section('main')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="main-panel">
            <div class="container-fluid">
                <div class="content-wrapper" style="margin-bottom: 30px">
                    <div class="card">
                        <div class="card-header">
                            Update Formal women's Leather Purse
                        </div>
                        <div class="card-body">
                            <form action="#" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Product Name</label>
                                            <input type="text" class="form-control" name="name" id="name" required value="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="price">Product Price</label>
                                            <input type="number" class="form-control" name="price" id="price"  value="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="discount">Product Discount Price</label>
                                            <input type="number" class="form-control" name="discount" id="discount"  value="">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Product</button>
                                <button type="submit" class="float-right btn btn-danger">Block</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop