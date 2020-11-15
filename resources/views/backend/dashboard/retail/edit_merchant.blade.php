@extends('backend.Layouts.app')
@section('main')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="main-panel">
            <div class="container-fluid">
                <div class="content-wrapper" style="margin-bottom: 30px">
                    <div class="card">
                        <div class="card-header">
                            Update Merchant
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
                                            <label for="shop_type">Select Shop Type</label>
                                            <select class="form-control" name="shop_type" required >
                                                <option value="wholesale">Whole Sale</option>
                                                <option value="retail">Retail</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Merchant Name</label>
                                            <input type="text" class="form-control" name="name" id="name" required value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shop_name">Merchant Shop Name</label>
                                            <input type="text" class="form-control" name="shop_name" id="shop_name"  value="">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"  value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="number" class="form-control" name="phone" id="phone"  value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="commission">Add Percentage (%)</label>
                                            <input type="number" class="form-control" name="commission" id="commission"  value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="address">Merchant Address</label>
                                            <textarea type="text" class="form-control" name="address" id="address"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="images">Previous Image</label>
                                            <img src="{{asset('backend/img/parse.jpg')}}" alt="ProfileImage" width="60px">
                                            <label for="image">Profile Image</label>
                                            <input type="file" class="form-control" name="image" id="image"  value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="banner_image">Previous Banner Image</label>
                                            <img src="{{asset('backend/img/parse.jpg')}}" alt="ProfileImage" width="60px">
                                            <label for="banner_image">Banner Image</label>
                                            <input type="file" class="form-control" name="banner_image" id="banner_image"  value="">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Merchant</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop