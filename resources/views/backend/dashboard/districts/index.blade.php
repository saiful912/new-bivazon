@extends('backend.Layouts.app')
@section('main')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <!-- Whole Sale Order -->
                <div class="row">
                    <div class="col-lg-12 box-margin">
                        <div class="card code-table">
                            <div class="card-body pb-0">
                                <div class="card-header">
                                    Mange Districts
                                </div>

                                <table class="table table-bordered table-hover" id="table_id">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>District Name</th>
                                        <th>District Priority</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($districts as $district)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$district['name']}}</td>
                                            <td>{{$district['priority']}}</td>

                                            <td>
                                                <a href="{{route('admin.district.edit',$district->id)}}" class="btn btn-success">Edit</a>
                                                <a href="#deleteModal{{$district->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteModal{{$district->id}}" tabindex="-1"
                                                     role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Are you sure to
                                                                    delete!</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{!! route('admin.district.delete',$district->id) !!}"
                                                                      method="post">
                                                                    {{csrf_field()}}
                                                                    <button type="submit" class="btn btn-danger">Permanent Delete
                                                                    </button>
                                                                </form>
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