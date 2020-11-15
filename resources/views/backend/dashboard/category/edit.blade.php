@extends('backend.Layouts.app')
@section('main')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="main-panel">
            <div class="container-fluid">
                <div class="content-wrapper" style="margin-bottom: 30px">
                    <div class="card">
                        <div class="card-header">
                            Update {{$category->name}} Category
                            <a href="{{route('categories')}}" class="btn btn-info float-right" style="margin-top: -6px">
                                View Category
                            </a>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.category.update',$category->id)}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="district_id">Select Category Type</label>
                                            <select class="form-control" name="category_id">
                                                <option value="">Parent Category</option>
                                                @foreach($main_categories as $categorys)
                                                    <option
                                                        value="{{$categorys->id}}"{{$categorys->id == $category->category_id ? 'selected' : ''}}>{{$categorys->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="name">Category Name</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                   value="{{$category->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="status">Status</label><br>
                                            <input type="checkbox" name="status" id="status"
                                                   @if($category->status=="1") checked @endif value="1" style="height: 28px;
    width: 28px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label for="banner_image">Banner Image</label>
                                            <input type="file" class="form-control" name="banner_image"
                                                   id="banner_image" value="">
                                            <img class="mt-2"
                                                 src="{{upload_url('categories/'.$category->banner_image)}}"
                                                 width="100px">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" name="image" id="image" value="">
                                            <img class="mt-2"
                                                 src="{{upload_url('categories/'.$category->image)}}"
                                                 width="100px">
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
