@extends('backend.Layouts.app')
@section('main')
    <!-- Main Content Area -->
    <div class="main-content">
    <div class="main-panel">
        <div class="container-fluid">
            <div class="content-wrapper" style="margin-bottom: 30px">
                <div class="card">
                    <div class="card-header">
                        Add District
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.district.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>

                            <div class="form-group">
                                <label for="priority">Priority</label>
                                <input type="number" class="form-control" name="priority" id="priority">
                            </div>
                            <button type="submit" class="btn btn-primary">Add District</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    @stop