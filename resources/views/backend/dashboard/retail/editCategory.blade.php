@extends('backend.Layouts.app')
@section('main')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="main-panel">
            <div class="container-fluid">
                <div class="content-wrapper" style="margin-bottom: 30px">
                    <div class="card">
                        <div class="card-header">
                            Update Leather Bags
                        </div>
                        <div class="card-body">
                            <form action="#" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="district_id">Select Category Type</label>
                                            <select class="form-control" name="category_id" required >
                                                <option value="bags">Bag's</option>
                                                <option value="toys">Toy's</option>
                                            </select>
                                        </div>
                                    </div>
                                   <div class="col-md-5">
                                       <div class="form-group">
                                           <label for="name">Category Name</label>
                                           <input type="text" class="form-control" name="name" id="name"  value="">
                                       </div>
                                   </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                        <label for="status">Status</label><br>
                                        <input type="checkbox" name="status" id="status" value="1" style="height: 28px;
    width: 28px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <img src="banner.jpg" alt="BannerImage">
                                        <label for="banner_image">Banner Image</label>
                                        <input type="file" class="form-control" name="banner_image" id="banner_image"  value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <img src="banner.jpg" alt="CategoryImage">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" name="image" id="image"  value="">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Update Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop