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
                                    Mange Customer Feedback Message
                                </div>

                                <table class="table table-bordered table-hover" id="table_id">
                                    <thead>
                                    <tr>
                                        <th>##</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($feedbacks as $feedback)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$feedback['name']}}</td>
                                            <td>{{$feedback['email']}}</td>
                                            <td>
                                                @if($feedback['status']==0)
                                                    <h4 class="badge-danger text-center">Inactive</h4>
                                                    @else
                                                    <h4 class="badge-success text-center">Active</h4>
                                                @endif
                                            </td>
                                            <td>{{$feedback['message']}}</td>

                                            <td class="d-flex">
                                                <a href="#editModal{{$feedback->id}}" data-toggle="modal" class="btn btn-success mr-1">Edit</a>
                                                <div class="modal fade" id="editModal{{$feedback->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Feedback</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('admin.feedback.edit',$feedback->id) }}" method="post" enctype="multipart/form-data">
                                                                    {{csrf_field()}}
                                                                    <div class="form-group">
                                                                        <label for="title">Name </label>
                                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required value="{{$feedback->name}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="email">Email</label>
                                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{$feedback->email}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message">Message</label>
                                                                        <textarea type="text" class="form-control" name="message" id="message">
                                                                            {{$feedback->message}}
                                                                        </textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="status">Status</label><br>
                                                                        <input type="checkbox" name="status" id="status"  @if($feedback->status=="1") checked @endif value="1" style="height: 28px;width: 28px;">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-success">Update</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#deleteModal{{$feedback->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteModal{{$feedback->id}}" tabindex="-1"
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
                                                                <form action="{!! route('admin.feedback.delete',$feedback->id) !!}"
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