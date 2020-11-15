@extends('backend.Layouts.app')
@section('main')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="main-panel">
            <div class="container-fluid">
                <div class="content-wrapper" style="margin-bottom: 30px">
                    <div class="card">
                        <div class="card-header">
                            Add New Category
                            <a href="{{route('categories')}}" class="btn btn-info float-right" style="margin-top: -6px">
                                View Category
                            </a>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.category.store')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="category_id">Select Category Type</label>
                                            <select class="form-control" id="category_id" name="category_id">
                                                <option value="">Parent Category</option>
                                                @foreach(App\Models\Category::orderby('name','desc')->where('category_id', null)->get() as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="name">Category Name</label>
                                            <input type="text" class="form-control" name="name" id="name" value=""
                                                   required>
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
                                            <label for="banner_image">Banner Image</label>
                                            <input type="file" class="form-control" name="banner_image"
                                                   id="banner_image" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" name="image" id="image" value="">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop
