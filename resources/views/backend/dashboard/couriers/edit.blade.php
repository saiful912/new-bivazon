@extends('backend.Layouts.app')
@section('main')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="main-panel">
            <div class="container-fluid">
                <div class="content-wrapper" style="margin-bottom: 30px">
                    <div class="card">
                        <div class="card-header">
                            Update Courier
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.courier.update',$courier->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="district_id">Select a District for this Courier</label>
                                    <select class="form-control" name="district_id" required >
                                        <option value="">Please select a District for this Courier</option>
                                        @foreach($districts as $district)
                                            <option value="{{$district->id}}"{{$courier->district->id == $district['id']? 'selected' : ''}}>{{$district->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Name of Courier</label>
                                    <input type="text" class="form-control" name="name" id="name" required value="{{ $courier->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone (optional)</label>
                                    <input type="text" class="form-control" name="phone" id="phone" value="{{ $courier->phone }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address (optional)</label>
                                    <textarea type="text" class="form-control" name="address" id="address" value="{{ $courier->address }}"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputText">Parent Courier (optional)</label>
                                    <select class="form-control" name="parent_id">
                                        <option value="">Please select a Parent Courier</option>
                                        @foreach(\App\Models\Courier::orderBy('name', 'desc')->where('parent_id',null)->get() as $courierr)
                                            <option value="{{$courierr->id}}"{{$courierr->id == $courier->parent_id ? 'selected' : ''}}>{{$courierr->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Courier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop