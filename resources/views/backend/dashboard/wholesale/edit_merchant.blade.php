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
                            <form action="{{route('wholesale.edit_merchant',$user->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="category_id">Select Category Type</label>
                                            <select class="form-control" name="category_id" required >
                                                @foreach($categories as $category)
                                                    <option
                                                            value="{{$category->id}}" {{$user->merchant->category_id == $category->id ? 'selected' : ''}}>{{ucfirst($category->name)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shop_type">Select Shop Type</label>
                                            <select class="form-control" name="shop_type" required >
                                                <option value="{{$user->merchant->shop_type}}">{{$user->merchant->shop_type}}</option>
                                                <option value="wholesale">Wholesale</option>
                                                <option value="retail">Retail</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="full_name">Merchant Name</label>
                                            <input type="text" class="form-control" name="full_name" id="full_name" required value="{{$user->full_name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shop_name">Merchant Shop Name</label>
                                            <input type="text" class="form-control" name="shop_name" id="shop_name"  value="{{$user->merchant->shop_name}}">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"  value="{{$user->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="number" class="form-control" name="phone" id="phone"  value="{{$user->phone}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="commission">Add Percentage (%)</label>
                                            <input type="number" class="form-control" name="commission" id="commission"  value="{{$user->merchant->commission}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="address">Merchant Address</label>
                                            <textarea type="text" class="form-control" name="address" id="address">{{$user->merchant->address}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="images">Previous Image</label>
                                            <img src="{{upload_url('/shop/profile/'.$user->image)}}" alt="ProfileImage" width="60px">
                                            <label for="image">Profile Image</label>
                                            <input type="file" class="form-control" name="image" id="image"  value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="images">Previous Banner Image</label>
                                            <img src="{{upload_url('/shop/banner_image/'.$user->merchant->shop_banner)}}"
                                                 alt="BannerImage" width="60px">
                                            <label for="shop_banner">Banner Image</label>
                                            <input type="file" class="form-control" name="shop_banner" id="shop_banner" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                        <input type="password" id="password" class="form-control" name="password" />
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="confirm_password">Confirm Password</label>
                                        <input class="form-control" name="password_confirmation" id="confirm_password" type="password">
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