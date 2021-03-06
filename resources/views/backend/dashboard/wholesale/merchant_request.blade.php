@extends('backend.Layouts.app')

@section('main')
    <div class="dashboard-area">
        <div class="container-fluid">
            <div class="row">
                <!-- Whole Sale Order -->
                <div class="col-lg-12 box-margin">
                    <div class="card code-table">
                        <div class="card-body pb-0">
                            <div
                                class="card-header border-none bg-transparent d-flex align-items-center justify-content-between p-0 mb-30">
                                <div class="widgets-card-title">
                                    <h5 class="card-title mb-0">Wholesale New Merchant</h5>
                                </div>
                                <div class="dashboard-dropdown">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button"
                                                id="dashboardDropdown7" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                class="ti-more"></i></button>
                                    </div>
                                </div>
                            </div>

                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table table-hover table-nowrap table-bordered text-center" id="table_id">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Merchant Name</th>
                                        <th>Phone</th>
                                        <th>Store Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        @if($user->merchant->shop_type == 'wholesale')
                                            <tr>
                                                <td>
                                                    {{$user->created_at->format('M D,Y')}}
                                                </td>
                                                <td>
                                                    {{$user->full_name}}
                                                </td>
                                                <td>
                                                    {{$user->phone}}
                                                </td>
                                                <td>
                                                    {{$user->merchant->shop_name}}
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary" data-toggle="modal"
                                                            data-target="#wholesale-{{$user->id}}">View
                                                    </button>
                                                    <div id="wholesale-{{$user->id}}"
                                                         class="modal fade bd-example-modal-lg" tabindex="-1"
                                                         role="dialog" aria-labelledby="myLargeModalLabel"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg"
                                                             role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="exampleModalLongTitle">Merchant
                                                                        Details</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="content-wrapper">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                View Request #PLE-{{$user->id}}
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <h3 class="text-success">Merchant
                                                                                    Information</h3>
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-md-6 border-right text-left">
                                                                                        <p><strong>Merchant Name
                                                                                                : {{$user->full_name}}</strong>
                                                                                        </p>
                                                                                        <p><strong>Merchant Phone
                                                                                                : {{$user->phone}}</strong>
                                                                                        </p>
                                                                                        <p><strong>Merchant Email
                                                                                                : {{$user->email}}</strong>
                                                                                        </p>
                                                                                        <p><strong>Merchant Address
                                                                                                : {{optional($user->merchant)->address}}</strong>
                                                                                        </p>
                                                                                        <p>
                                                                                            <strong>Merchant
                                                                                                Profile</strong>
                                                                                            <img
                                                                                                src="{{upload_url('/shop/profile/'.$user->image)}}"
                                                                                                alt="MerchantProfile"
                                                                                                width="120px">
                                                                                        </p>

                                                                                    </div>
                                                                                    <div class="col-md-6 text-left">

                                                                                        <p><strong>Merchant Store
                                                                                                Name
                                                                                                : {{$user->merchant->shop_name}}</strong>
                                                                                        </p>
                                                                                        <p><strong>Merchant Type
                                                                                                : {{$user->merchant->shop_type}}</strong>
                                                                                        </p>
                                                                                        <p><strong>Merchant
                                                                                                Category: {{optional($user->category)->name}}</strong>
                                                                                        </p>
                                                                                        <p>
                                                                                            <strong>Merchant Shop
                                                                                                Banner</strong>
                                                                                            <img
                                                                                                src="{{upload_url('/shop/banner_image/'.$user->merchant->shop_banner)}}"
                                                                                                alt="MerchantBanner"
                                                                                                width="200px">
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <hr>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form class="d-inline-block"
                                                                          action="{{route('update.merchant_status',$user->id)}}"
                                                                          method="post">
                                                                        @csrf
                                                                        @if($user->status)
                                                                            <input type="submit" value="Block"
                                                                                   class="btn btn-warning">
                                                                        @else
                                                                            <input type="submit" value="Confirm"
                                                                                   class="btn btn-success">
                                                                        @endif
                                                                    </form>
                                                                    <a href="#deleteModal2{{$user->id}}"
                                                                       data-toggle="modal"
                                                                       class="btn btn-danger">Delete</a>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade"
                                                                         id="deleteModal2{{$user->id}}"
                                                                         tabindex="-1" role="dialog"
                                                                         aria-labelledby="exampleModalLabel"
                                                                         aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="exampleModalLabel">Are
                                                                                        you sure to delete!</h5>
                                                                                    <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                        <span
                                                                                            aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form
                                                                                        action="{!! route('merchant.delete',$user->id) !!}"
                                                                                        method="post">
                                                                                        {{csrf_field()}}
                                                                                        <button type="submit"
                                                                                                class="btn btn-danger float-left">
                                                                                            Permanent Delete
                                                                                        </button>
                                                                                    </form>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-dismiss="modal">
                                                                                        Cancel
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    @if($user->status)
                                                        <button type="button" class="btn btn-success">Activated
                                                        </button>
                                                    @else
                                                        <button type="button" class="btn btn-dark">Pending</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('wholesale.edit_merchant',$user->id)}}"
                                                       class="btn btn-primary md-trigger">Edit</a>
                                                    <a href="#deleteModal{{$user->id}}" data-toggle="modal"
                                                       class="btn btn-danger">Delete</a>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="deleteModal{{$user->id}}"
                                                         tabindex="-1" role="dialog"
                                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Are you sure to delete!</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form
                                                                        action="{!! route('merchant.delete',$user->id) !!}"
                                                                        method="post">
                                                                        {{csrf_field()}}
                                                                        <button type="submit"
                                                                                class="btn btn-danger float-left">
                                                                            Permanent Delete
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
                                        @endif
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
