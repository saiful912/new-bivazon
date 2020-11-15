@extends('backend.Layouts.app')
@section('main')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="main-panel">
            <div class="container-fluid">
                <div class="content-wrapper" style="margin-bottom: 30px">
                    <div class="card">
                        <div class="card-header">
                            Update {{$district->name}} District
                        </div>
                        <div class="card-body">

                            <form action="{{route('admin.district.update',$district->id)}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{$district->name}}">
                                </div>

                                <div class="form-group">
                                    <label for="priority">Priority</label>
                                    <input type="text" class="form-control" name="priority" id="priority" value="{{$district->priority}}">
                                </div>

                                <button type="submit" class="btn btn-success">Update </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop