@extends('backend.Layouts.app')

@section('main')
    <div class="dashboard-area">
        <div class="container-fluid">
            <div class="row">
                <!-- Whole Sale Order -->
                <div class="col-lg-12 box-margin">
                    <div class="card code-table">
                        <div class="card-body pb-0">

                            <div class="card-header mb-2">
                                Add New Category
                                <a href="{{route('category.create')}}" class="btn btn-info float-right"
                                   style="margin-top: -6px">
                                    <i class="fa fa-plus"></i> Add Category
                                </a>
                            </div>
                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table table-hover table-nowrap table-bordered" id="table_id">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Parent Category</th>
                                        <th>Banner Image</th>
                                        <th>Category Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>
                                                {{$loop->index+1}}
                                            </td>
                                            <td>
                                                {{$category->name}}
                                            </td>
                                            <td>
                                                @if($category->category_id == null)
                                                    <span class="text-danger">Main Category</span>
                                                @else
                                                    {{$category->parent['name']}}
                                                @endif
                                            </td>
                                            <td>
                                                <img src="{{upload_url('categories/'.$category->banner_image)}}"
                                                     width="100px">
                                            </td>

                                            <td>
                                                <img src="{{upload_url('categories/'.$category->image)}}"
                                                     width="100px">
                                            </td>
                                            <td>
                                                <a href="{{route('admin.category.edit',$category->id)}}"
                                                   class="btn btn-success">Edit</a>
                                                <a href="#deleteModal" data-toggle="modal"
                                                   class="btn btn-danger">Delete</a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteModal" tabindex="-1"
                                                     role="dialog" aria-labelledby="exampleModalLabel"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Are you
                                                                    sure to
                                                                    delete!</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <button type="submit" class="btn btn-danger">Permanent
                                                                    Delete
                                                                </button>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
