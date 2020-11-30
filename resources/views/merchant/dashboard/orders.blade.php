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
                                                class="ti-more"></i>
                                        </button>

                                    </div>
                                </div>
                            </div>

                            <!-- Table -->
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered" id="table_id">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Order Id</th>
                                        <th>Total</th>
                                        <th>View</th>
                                        <th>Download</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $key=>$order)
                                        <tr>
                                            <td>{{$order->created_at->format('Y-m-d')}}</td>
                                            <td>
                                                {{$order->invoice_no}}
                                            </td>
                                            <td>
                                                {{$order->total_amount}}
                                            </td>
                                            <td>
                                                <button class="btn btn-primary md-trigger mr-2 mb-2" data-toggle="modal"
                                                        data-target="#wholesale-order-{{$order->id}}">View
                                                </button>
                                                <div id="#wholesale-order-{{$order->id}}"
                                                     class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                                     aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg"
                                                         role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Order
                                                                    Details</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="content-wrapper">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            View Order {{$order->invoice_no}}
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <h3 class="text-success">Order
                                                                                Information</h3>
                                                                            <div class="row">
                                                                                <div class="col-md-6 border-right">
                                                                                    <p><strong>Order Name
                                                                                            : {{optional($order)->name}}</strong>
                                                                                    </p>
                                                                                    <p><strong>Order Phone
                                                                                            :{{optional($order)->phone}}</strong>
                                                                                    </p>
                                                                                    <p><strong>Order Email
                                                                                            : {{optional($order)->email}}</strong>
                                                                                    </p>
                                                                                    <p><strong>Order Address
                                                                                            : {{optional($order)->address}}</strong>
                                                                                    </p>
                                                                                    <p><strong>Order District
                                                                                            : {{optional($order->district)->name}}</strong>
                                                                                    </p>
                                                                                    <p><strong>Order Courier
                                                                                            : {{optional($order->courier)->name}}</strong>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <p><strong>Order Payment Method :
                                                                                            Bkash</strong></p>
                                                                                    <p><strong>Order Payment Number :
                                                                                            01935901315</strong></p>
                                                                                    <p><strong>Order Transaction Id :
                                                                                            45dsfjdg45</strong></p>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <h3>Order Items</h3>
                                                                            <table
                                                                                class="table table-bordered table-striped table-hover table-info">
                                                                                <tr>
                                                                                    <th>No.</th>
                                                                                    <th>Product Title</th>
                                                                                    <th>Product Image</th>
                                                                                    <th>Product Quantity</th>
                                                                                    <th>Unit Price</th>
                                                                                    <th>Sub total Price</th>
                                                                                    <th>Delete</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>1</td>
                                                                                    <td>
                                                                                        <a href="#">Horror House</a>
                                                                                    </td>
                                                                                    <td>

                                                                                        <img
                                                                                            src="{{asset('frontend/img/products.png')}}"
                                                                                            width="60px" alt="">

                                                                                    </td>
                                                                                    <td>
                                                                                        2
                                                                                    </td>
                                                                                    <td>355,000.00</td>
                                                                                    <td>355,000.00</td>
                                                                                    <td>
                                                                                        <form class="form-inline"
                                                                                              action="#" method="post">
                                                                                            <button type="submit"
                                                                                                    class="btn btn-danger">
                                                                                                Delete
                                                                                            </button>
                                                                                        </form>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td colspan="4"></td>
                                                                                    <td>Total Amount</td>
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
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{route('orders.invoice',$order->id)}}" class="btn btn-danger">
                                                    <i class="fa fa-download"></i> Download
                                                </a>
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
            <div id="order" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                 aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

                                                    <img src="{{asset('frontend/img/products.png')}}" width="60px"
                                                         alt="">

                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>355,000.00</td>
                                                <td>355,000.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"></td>
                                                <td>Total Amount</td>
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
