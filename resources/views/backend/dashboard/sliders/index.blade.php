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

                                <div class="card-header mb-2">
                                    Manage Sliders
                                    <a href="#addSliderModal" data-toggle="modal" class="btn btn-info float-right"
                                       style="margin-top: -6px">
                                        <i class="fa fa-plus"></i>Add new Slider
                                    </a>
                                </div>

                                {{--add Modal--}}
                                <div class="modal fade" id="addSliderModal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add new Slider</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('admin.slider.store')}}" method="post"
                                                      enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    <div class="form-group">
                                                        <label for="title">Slider title <small class="text-danger">(required)</small></label>
                                                        <input type="text"
                                                               class="form-control @error('title') is-valid @enderror"
                                                               name="title" id="title" placeholder="Slider Title"

                                                        >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="image">Slider Image<small class="text-danger">(required)</small></label>
                                                        <input type="file" class="form-control" name="image" id="image"
                                                               placeholder="Slider image" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="button_text">Slider Button Text <small
                                                                class="text-danger">(optional)</small></label>
                                                        <input type="text" class="form-control" name="button_text"
                                                               id="button_text"
                                                               placeholder="Slider Button Text (if need)">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="button_link">Slider Button Link <small
                                                                class="text-danger">(optional)</small></label>
                                                        <input type="url" class="form-control" name="button_link"
                                                               id="button_link"
                                                               placeholder="Slider Button Link (if need)">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="priority">Slider Priority <small
                                                                class="text-danger">(optional)</small></label>
                                                        <input type="number" class="form-control" name="priority"
                                                               id="priority" placeholder="Slider Priority; e.g: 10"
                                                               value="1" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-success">Add new</button>
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Cancel
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered table-hover" id="table_id">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Slider Title</th>
                                        <th>Slider Image</th>
                                        <th>Button Name</th>
                                        <th>Button Url</th>
                                        <th>Slider Priority</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sliders as $slider)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$slider->title}}</td>
                                        <td><img src="{{asset('img/slider/'.$slider->image)}}" width="40" alt="Image"></td>
                                        <td>{{$slider->button_text}}</td>
                                        <td>{{$slider->button_link}}</td>
                                        <td>{{$slider->priority}}</td>
                                        <td>
                                            <a href="#editModal{{$slider->id}}" data-toggle="modal" class="btn btn-success">Edit</a>
                                            <div class="modal fade" id="editModal{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Slider</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.sliders.edit',$slider->id) }}" method="post" enctype="multipart/form-data">
                                                                {{csrf_field()}}
                                                                <div class="form-group">
                                                                    <label for="title">Slider title <small class="text-danger">(required)</small></label>
                                                                    <input type="text" class="form-control" name="title" id="title" placeholder="Slider Title" required value="{{$slider->title}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="image">Slider Image <a href="{{asset('img/slider/'.$slider->image)}}" target="_blank">
                                                                            Previous Image
                                                                        </a>
                                                                        <small class="text-danger">(required)</small>
                                                                    </label>
                                                                    <input type="file" class="form-control" name="image" id="image" placeholder="Slider image">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="button_text">Slider Button Text <small class="text-danger">(optional)</small></label>
                                                                    <input type="text" class="form-control" name="button_text" id="button_text" placeholder="Slider Button Text (if need)" value="{{$slider->button_text}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="button_link">Slider Button Link <small class="text-danger">(optional)</small></label>
                                                                    <input type="url" class="form-control" name="button_link" id="button_link" placeholder="Slider Button Link (if need)" value="{{$slider->button_link}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="priority">Slider Priority <small class="text-danger">(optional)</small></label>
                                                                    <input type="number" class="form-control" name="priority" id="priority" placeholder="Slider Priority; e.g: 10" value="{{$slider->priority}}" required >
                                                                </div>
                                                                <button type="submit" class="btn btn-success">Update</button>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#deleteModal{{$slider->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete!</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{!! route('admin.slider.delete',$slider->id) !!}" method="post">
                                                                {{csrf_field()}}
                                                                <button type="submit" class="btn btn-danger">Permanent Delete</button>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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


                    {{--Retail Order--}}

                </div>
            </div>
        </div>
    </div>
@stop
