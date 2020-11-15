@extends('backend.Layouts.app')
@section('main')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="main-panel">
            <div class="container-fluid">
                <div class="content-wrapper" style="margin-bottom: 30px">
                    <div class="card">
                        <div class="card-header">
                            Update Your Information
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.update')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Admin Name</label>
                                            <input type="text" class="form-control" name="full_name" id="name" required
                                                   value="{{auth()->user()->full_name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                   value="{{auth()->user()->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="number" class="form-control" name="phone" id="phone"
                                                   value="{{auth()->user()->phone}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="images">Previous Profile Image</label>
                                            <img src="{{upload_url('/shop/profile/'.auth()->user()->image)}}"
                                                 alt="ProfileImage" width="60px">
                                            <label for="image">Profile Image</label>
                                            <input type="file" class="form-control" name="image" id="image" value="">
                                        </div>
                                    </div>
                                    {{--                                    <div class="col-md-6">--}}
                                    {{--                                        <div class="form-group">--}}
                                    {{--                                            <label for="old_password">Old Password</label>--}}
                                    {{--                                            <input type="password" class="form-control" name="old_password" id="old_password">--}}
                                    {{--                                            <label for="password">New Password</label>--}}
                                    {{--                                            <input type="password" class="form-control" name="password" id="password">--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                </div>
                                <button type="submit" class="btn btn-primary">Update Admin</button>
                            </form>
                            <br>
                            <div class="card-header font-weight-bold">
                                Update Password
                            </div>
                            <form action="{{route('update.password')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="old_password">Old Password</label>
                                            <input type="password" placeholder="Enter old password" class="form-control" name="old_password"
                                                   id="old_password">
                                            @error('old_password') <span
                                                    class="text-red-600">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">New Password</label>
                                            <input type="password" placeholder="Enter new password" class="form-control" name="password" id="password">
                                            @error('password') <span
                                                    class="text-red-600">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>Confirm Password</b></label>
                                            <input type="password" class="form-control" id="cfmPwd"
                                                   placeholder="Enter confirm password" name="password_confirmation" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
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
@endsection