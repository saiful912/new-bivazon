@extends('merchant.layouts.app')
@section('main')
    <div class="dashboard-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-18">Orders</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Welcome to Orders Table</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 box-margin">
                    <div class="card code-table">
                        <div class="card-body pb-0">
                            <div
                                    class="card-header border-none bg-transparent d-flex align-items-center justify-content-between p-0 mb-30">
                                <div class="widgets-card-title">
                                    <h5 class="card-title mb-0">Recent Order</h5>
                                </div>
                                <div class="dashboard-dropdown">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button"
                                                id="dashboardDropdown7" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="ti-more"></i></button>
                                        {{--<div class="dropdown-menu dropdown-menu-right"--}}
                                        {{--aria-labelledby="dashboardDropdown7">--}}
                                        {{--<a class="dropdown-item" href="#"><i class="ti-pencil-alt"></i> Edit</a>--}}
                                        {{--<a class="dropdown-item" href="#"><i class="ti-settings"></i>--}}
                                        {{--Settings</a>--}}
                                        {{--<a class="dropdown-item" href="#"><i class="ti-eraser"></i>--}}
                                        {{--Remove</a>--}}
                                        {{--<a class="dropdown-item" href="#"><i class="ti-trash"></i>--}}
                                        {{--Delete</a>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </div>

                            <!-- Table -->
                            <div class="table-responsive">
                                <table  class="table table-hover table-nowrap" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Order Id</th>
                                        <th>Total</th>
                                        <th>View</th>
                                        <th>Download</th>
                                        <th>Done</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            Sep 9, 2020
                                        </td>
                                        <td>
                                            #WS8965
                                        </td>
                                        <td>
                                            5,600 TK
                                        </td>
                                        <td>
                                            <button class="btn btn-primary md-trigger mr-2 mb-2"  data-toggle="modal" data-target="#order">View</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-success">
                                                Download
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-dark">
                                                Complete
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div  id="order" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Order Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="content-wrapper">
                                <div class="card">
                                    <div class="card-header">
                                        View Order #PLE5
                                    </div>
                                    <div class="card-body">
                                        <h3 class="text-success">Order Information</h3>
                                        <hr>
                                        <h3>Order Items</h3>
                                        <table class="table table-bordered table-striped table-hover table-info">
                                            <tr>
                                                <th>No.</th>
                                                <th>Product Title</th>
                                                <th>Product Image</th>
                                                <th>Product Quantity</th>
                                                <th>Unit Price</th>
                                                <th>Sub total Price</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <a href="#">Horror House</a>
                                                </td>
                                                <td>

                                                    <img src="{{asset('frontend/img/products.png')}}" width="60px" alt="">

                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>355,000.00</td>
                                                <td>355,000.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"></td>
                                                <td>Total Amount  </td>
                                                <td colspan="2">
                                                    <strong>355,000.00 Taka</strong>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @stop