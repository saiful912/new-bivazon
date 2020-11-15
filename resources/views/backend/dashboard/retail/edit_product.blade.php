@extends('backend.Layouts.app')
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
                                        <label for="district_id">Select Category Type</label>
                                        <select class="form-control" name="category_id" required >
                                            <option value="bags">Bag's</option>
                                            <option value="toys">Toy's</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="district_id">Select Whole Seller</label>
                                        <select class="form-control" name="user_id" required >
                                            <option value="rahim store">Rarim Store</option>
                                            <option value="karim store">Karim Store</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Product Name</label>
                                            <input type="text" class="form-control" name="name" id="name" required value="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="sku">Product SKU</label>
                                            <input type="text" class="form-control" name="sku" id="sku"  value="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="code">Product Code</label>
                                            <input type="text" class="form-control" name="code" id="code"  value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="short_description">Short Description</label>
                                            <textarea type="text" class="form-control" name="short_description" id="short_description" ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="long_description">Long Description</label>
                                            <textarea type="text" class="form-control" name="long_description" id="long_description" ></textarea>
                                        </div>
                                    </div>
                                </div>
                               <div class="row">
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
                                   <div class="col-md-6">
                                       <div class="form-group">
                                           <label for="images">Previous Image</label>
                                           <img src="{{asset('backend/img/parse.jpg')}}" alt="ProductImage" width="60px">
                                           <label for="images">Product Image</label>
                                           <input type="file" class="form-control" name="images" id="images"  value="">
                                       </div>
                                   </div>
                               </div>
                                <button type="submit" class="btn btn-primary">Update Product</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop