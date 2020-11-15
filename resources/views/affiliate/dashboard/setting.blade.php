@extends('affiliate.Layouts.app')
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
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input name="full_name" class="form-control" placeholder="Full name" type="text" required>
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                    </div>
                                    <input name="email" class="form-control" placeholder="Email address" type="email" required>
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                    </div>
                                    <select class="custom-select" style="max-width: 120px;">
                                        <option selected="">+88</option>
                                    </select>
                                    <input name="phone" class="form-control" placeholder="Phone number" type="text" required>
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-paperclip" aria-hidden="true"></i></span>
                                    </div>
                                    <input name="ref_url" class="form-control" placeholder="Ref Url" type="text" required>
                                </div> <!-- form-group// -->
                                <div class="d-block">
                                    <img src="#" alt="profile Image" width="80px">
                                </div>
                                <div class="form-group input-group">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-upload" aria-hidden="true"></i></span>
                                    </div>
                                    <input name="image" class="form-control" placeholder="Profile Image" type="file" required>
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input name="password" class="form-control" placeholder="Old password" type="password">
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input name="password" class="form-control" placeholder="Create password" type="password">
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input name="password_confirmation" class="form-control" placeholder="Repeat password" type="password">
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block"> Update Account  </button>
                                </div> <!-- form-group// -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop