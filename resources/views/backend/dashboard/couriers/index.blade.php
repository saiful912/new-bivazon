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
                            @foreach($couriers as $parent)
                            <div class="card-body pb-0">
                                <div class="card-header">
                                   {{$parent->name}}
                                    <div class="float-right" style="margin-top: -6px;">
                                        <a href="{{route('admin.courier.edit',$parent->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                        <a href="#deleteModall{{$parent->id}}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash"></i></a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModall{{$parent->id}}" tabindex="-1"
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
                                                        <form action="{{route('admin.courier.delete',$parent->id)}}"
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
                                    </div>
                                </div>
                                <table class="table table-bordered table-hover" id="table_id">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Courier Name</th>
                                        <th>Under District</th>
                                        <th>Courier Phone</th>
                                        <th>Courier Address</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(App\Models\Courier::orderBy('name','asc')->where('parent_id',$parent->id)->get() as $child)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$child['name']}}</td>
                                            <td>{{$child->district->name}}</td>
                                            <td>{{$child->phone}}</td>
                                            <td>{{$child->Address}}</td>
                                            <td>
                                                <a href="{{route('admin.courier.edit',$child->id)}}" class="btn btn-success">Edit</a>
                                                <a href="#deleteModal{{$child->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteModal{{$child->id}}" tabindex="-1"
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
                                                                <form action="{{route('admin.courier.delete',$child->id)}}"
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
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
