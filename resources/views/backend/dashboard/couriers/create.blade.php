@extends('backend.Layouts.app')
@section('main')
    <!-- Main Content Area -->
    <div class="main-content">
    <div class="main-panel">
        <div class="container-fluid">
            <div class="content-wrapper" style="margin-bottom: 30px">
                <div class="card">
                    <div class="card-header">
                        Add Courier
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.courier.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="district_id">Select a District for this Courier</label>
                                <select class="form-control" name="district_id" required >
                                    <option value="">Please select a District for this Courier</option>
                                    @foreach($districts as $district)
                                        <option value="{{$district->id}}">{{$district->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Name of Courier</label>
                                <input type="text" class="form-control" name="name" id="name" required value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone (optional)</label>
                                <input type="text" class="form-control" name="phone" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="address">Address (optional)</label>
                                <textarea type="text" class="form-control" name="address" id="address"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText">Parent Courier (optional)</label>
                                <select class="form-control" name="parent_id">
                                    <option value="">Please select a Parent Courier</option>
                                    @foreach(\App\Models\Courier::orderBy('name', 'desc')->where('parent_id',null)->get() as $courier)
                                        <option value="{{$courier->id}}">{{$courier->name}}</option>
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