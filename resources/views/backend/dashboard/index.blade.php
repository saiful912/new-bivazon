@extends('backend.Layouts.app')

@section('main')
    <div class="dashboard-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-18">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Welcome to Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- Single Widget -->
                <div class="col-md-6 col-lg-3">
                    <div class="single-widger-cart mb-30">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right"><i
                                        class='bx bxs-user-rectangle single-widget-icon'></i></div>
                                <h5 class="font-14 mt-0">Customers</h5>
                                <h3 class="mt-3 mb-3 font-20">{{$customers}}</h3>
                                <p class="mb-0"><span class="text-success mr-2"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-widger-cart mb-30">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right"><i
                                        class='bx bxs-user-rectangle single-widget-icon'></i></div>
                                <h5 class="font-14 mt-0">Merchants</h5>
                                <h3 class="mt-3 mb-3 font-20">{{$marchants}}</h3>
                                <p class="mb-0"><span class="text-success mr-2"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-widger-cart mb-30">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right"><i
                                        class='bx bxs-user-rectangle single-widget-icon'></i></div>
                                <h5 class="font-14 mt-0">Affiliate</h5>
                                <h3 class="mt-3 mb-3 font-20">{{$affilates}}</h3>
                                <p class="mb-0"><span class="text-success mr-2"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Widget -->
                <div class="col-md-6 col-lg-3">
                    <div class="single-widger-cart mb-30">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right"><i class='bx bx-cart single-widget-icon'></i></div>
                                <h5 class="font-14 mt-0">Orders</h5>
                                <h3 class="mt-3 mb-3 font-20">{{$orders}}</h3>
                                <p class="mb-0"><span class="text-danger mr-2"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Widget -->
                <div class="col-md-6 col-lg-3">
                    <div class="single-widger-cart mb-30">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right"><i class='bx bx-dollar single-widget-icon'></i></div>
                                <h5 class="font-14 mt-0">Revenue</h5>
                                <h3 class="mt-3 mb-3 font-20">$45, 723</h3>
                                <p class="mb-0"><span class="text-success mr-2"><i
                                            class='bx bx-trending-up font-16'></i> 9.28%</span><span>Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-widger-cart mb-30">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right"><i class='bx bx-dollar single-widget-icon'></i></div>
                                <h5 class="font-14 mt-0">Revenue</h5>
                                <h3 class="mt-3 mb-3 font-20">$45, 723</h3>
                                <p class="mb-0"><span class="text-success mr-2"><i
                                            class='bx bx-trending-up font-16'></i> 9.28%</span><span>Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-widger-cart mb-30">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right"><i class='bx bx-dollar single-widget-icon'></i></div>
                                <h5 class="font-14 mt-0">Revenue</h5>
                                <h3 class="mt-3 mb-3 font-20">$45, 723</h3>
                                <p class="mb-0"><span class="text-success mr-2"><i
                                            class='bx bx-trending-up font-16'></i> 9.28%</span><span>Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Widget -->
                <div class="col-md-6 col-lg-3">
                    <div class="single-widger-cart mb-30">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right"><i class='bx bx-bar-chart-alt single-widget-icon'></i>
                                </div>
                                <h5 class="font-14 mt-0">Average Price</h5>
                                <h3 class="mt-3 mb-3 font-20">$18.00</h3>
                                <p class="mb-0"><span class="text-success mr-2"><i
                                            class='bx bx-trending-up font-16'></i> 9.28%</span><span>Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Revenue Area -->
                <!-- Dashboard Timeline -->
                {{--<div class="col-lg-4 box-margin">--}}
                    {{--<div class="card">--}}
                        {{--<div class="card-body">--}}
                            {{--<div--}}
                                {{--class="card-header border-none bg-transparent d-flex align-items-center justify-content-between p-0 mb-30">--}}
                                {{--<div class="widgets-card-title">--}}
                                    {{--<h5 class="card-title mb-0">Activity Timeline</h5>--}}
                                {{--</div>--}}
                                {{--<div class="dashboard-dropdown">--}}
                                    {{--<div class="dropdown">--}}
                                        {{--<button class="btn dropdown-toggle" type="button"--}}
                                                {{--id="dashboardDropdown6" data-toggle="dropdown"--}}
                                                {{--aria-haspopup="true" aria-expanded="false"><i--}}
                                                {{--class="ti-more"></i></button>--}}
                                        {{--<div class="dropdown-menu dropdown-menu-right"--}}
                                             {{--aria-labelledby="dashboardDropdown6">--}}
                                            {{--<a class="dropdown-item" href="#"><i class="ti-pencil-alt"></i> Edit</a>--}}
                                            {{--<a class="dropdown-item" href="#"><i class="ti-settings"></i>--}}
                                                {{--Settings</a>--}}
                                            {{--<a class="dropdown-item" href="#"><i class="ti-eraser"></i>--}}
                                                {{--Remove</a>--}}
                                            {{--<a class="dropdown-item" href="#"><i class="ti-trash"></i>--}}
                                                {{--Delete</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<!-- Dashboard Active Timeline -->--}}
                            {{--<ul class="dashboard-active-timeline list-unstyled" id="dashboardTimeline">--}}
                                {{--<li class="d-flex align-items-center mb-15">--}}
                                    {{--<div class="timeline-icon bg-primary mr-3">--}}
                                        {{--<i class="icon_plus"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="timeline-info">--}}
                                        {{--<h6 class="mb-1 font-15">Client Meeting</h6>--}}
                                        {{--<span>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</span>--}}
                                        {{--<p class="mb-0 font-13">25 mins ago</p>--}}
                                    {{--</div>--}}
                                {{--</li>--}}

                                {{--<li class="d-flex align-items-center mb-15">--}}
                                    {{--<div class="timeline-icon bg-warning mr-3">--}}
                                        {{--<i class="icon_mic_alt"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="timeline-info">--}}
                                        {{--<h6 class="mb-1 font-15">Email Newsletter</h6>--}}
                                        {{--<span>Cupcake gummi bears soufflé caramels candy</span>--}}
                                        {{--<p class="mb-0 font-13">29 mins ago</p>--}}
                                    {{--</div>--}}
                                {{--</li>--}}

                                {{--<li class="d-flex align-items-center mb-15">--}}
                                    {{--<div class="timeline-icon bg-danger mr-3">--}}
                                        {{--<i class="icon_mail_alt"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="timeline-info">--}}
                                        {{--<h6 class="mb-1 font-15">Plan Webinar</h6>--}}
                                        {{--<span>Candy ice cream cake.</span>--}}
                                        {{--<p class="mb-0 font-13">28 mins ago</p>--}}
                                    {{--</div>--}}
                                {{--</li>--}}

                                {{--<li class="d-flex align-items-center mb-15">--}}
                                    {{--<div class="timeline-icon bg-success mr-3">--}}
                                        {{--<i class="icon_check"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="timeline-info">--}}
                                        {{--<h6 class="mb-1 font-15">Launch Website</h6>--}}
                                        {{--<span>Candy ice cream cake. </span>--}}
                                        {{--<p class="mb-0 font-13">45 mins ago</p>--}}
                                    {{--</div>--}}
                                {{--</li>--}}

                                {{--<li class="d-flex align-items-center mb-15">--}}
                                    {{--<div class="timeline-icon bg-danger mr-3">--}}
                                        {{--<i class="icon_mail_alt"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="timeline-info">--}}
                                        {{--<h6 class="mb-1 font-15">Plan Webinar</h6>--}}
                                        {{--<span>Candy ice cream cake.</span>--}}
                                        {{--<p class="mb-0 font-13">50 mins ago</p>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <!-- Whole Sale Order -->
                <div class="col-lg-12 box-margin">
                    <div class="card code-table">
                        <div class="card-body pb-0">
                            <div
                                class="card-header border-none bg-transparent d-flex align-items-center justify-content-between p-0 mb-30">
                                <div class="widgets-card-title">
                                    <h5 class="card-title mb-0">Wholesale Order</h5>
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
                                <table  class="table table-hover table-nowrap table-bordered" id="table_id">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Order Id</th>
                                        <th>Total</th>
                                        <th>View</th>
                                        <th>Confirm</th>
                                        <th>Done</th>
                                        <th>Download</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($wholesaleOrders as $wholesaleOrder)
                                        <tr>
                                            <td>
                                                {{$wholesaleOrder->created_at->format('Y-M-D')}}
                                            </td>
                                            <td>
                                                {{$wholesaleOrder->invoice_no}}
                                            </td>
                                            <td>
                                                {{$wholesaleOrder->total_amount}}
                                            </td>
                                        <td>
                                            <button class="btn btn-primary md-trigger mr-2 mb-2"  data-toggle="modal" data-target="#wholesale-order-{{$wholesaleOrder->id}}">View</button>
                                            <div  id="#wholesale-order-{{$wholesaleOrder->id}}" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Retail Order Details</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="content-wrapper">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        View Order {{$wholesaleOrder->invoice_no}}
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h3 class="text-success">Order Information</h3>
                                                                        <div class="row">
                                                                            <div class="col-md-6 border-right">
                                                                                <p><strong>Order Name : {{optional($wholesaleOrder)->name}}</strong></p>
                                                                                <p><strong>Order Phone :{{optional($wholesaleOrder)->phone}}</strong></p>
                                                                                <p><strong>Order Email : {{optional($wholesaleOrder)->email}}</strong></p>
                                                                                <p><strong>Order Address : {{optional($wholesaleOrder)->address}}</strong></p>
                                                                                <p><strong>Order District : {{optional($wholesaleOrder->district)->name}}</strong></p>
                                                                                <p><strong>Order Courier : {{optional($wholesaleOrder->courier)->name}}</strong></p>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <p><strong>Order Payment Method : Bkash</strong></p>
                                                                                <p><strong>Order Payment Number : 01935901315</strong></p>
                                                                                <p><strong>Order Transaction Id : 45dsfjdg45</strong></p>
                                                                            </div>
                                                                        </div>
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
                                                                                <th>Delete</th>
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
                                                                                <td>
                                                                                    <form class="form-inline" action="#" method="post">
                                                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                                                    </form>
                                                                                </td>
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
                                        </td>
                                            <td>
                                                <a href="{{route('orders.status',['id'=>$wholesaleOrder->id,'status'=> 'confirmed'])}}" class="btn btn-success">
                                                    Confirm
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{route('orders.status',['id'=>$wholesaleOrder->id,'status'=> 'completed'])}}" class="btn btn-dark">
                                                    Complete
                                                </a>
                                            </td>
                                        <td>
                                            <a href="{{route('orders.invoice',$wholesaleOrder->id)}}" class="btn btn-danger">
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

                {{--Retail Order--}}

                <div class="col-lg-12 box-margin">
                    <div class="card code-table">
                        <div class="card-body pb-0">
                            <div
                                    class="card-header border-none bg-transparent d-flex align-items-center justify-content-between p-0 mb-30">
                                <div class="widgets-card-title">
                                    <h5 class="card-title mb-0">Retail Order</h5>
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
                                <table class="table table-hover table-nowrap table-bordered" id="data_table">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Order Id</th>
                                        <th>Total</th>
                                        <th>View</th>
                                        <th>Confirm</th>
                                        <th>Done</th>
                                        <th>Download</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($retailOrders as $retailOrder)
                                    <tr>
                                        <td>
                                            {{$retailOrder->created_at->format('Y,M,D')}}
                                        </td>
                                        <td>
                                            {{$retailOrder->invoice_no}}
                                        </td>
                                        <td>
                                            {{$retailOrder->total_amount}}
                                        </td>
                                        <td>
                                            <button class="btn btn-primary md-trigger mr-2 mb-2"  data-toggle="modal" data-target="#retail-order-{{$retailOrder->id}}">View</button>
                                            <div  id="retail-order-{{$retailOrder->id}}" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Retail Order Details</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="content-wrapper">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        View Order {{$retailOrder->invoice_no}}
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h3 class="text-success">Order Information</h3>
                                                                        <div class="row">
                                                                            <div class="col-md-6 border-right">
                                                                                <p><strong>Order Name : {{optional($retailOrder)->name}}</strong></p>
                                                                                <p><strong>Order Phone :{{optional($retailOrder)->phone}}</strong></p>
                                                                                <p><strong>Order Email : {{optional($retailOrder)->email}}</strong></p>
                                                                                <p><strong>Order Address : {{optional($retailOrder)->address}}</strong></p>
                                                                                <p><strong>Order District : {{optional($retailOrder->district)->name}}</strong></p>
                                                                                <p><strong>Order Courier : {{optional($retailOrder->courier)->name}}</strong></p>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <p><strong>Order Payment Method : Bkash</strong></p>
                                                                                <p><strong>Order Payment Number : 01935901315</strong></p>
                                                                                <p><strong>Order Transaction Id : 45dsfjdg45</strong></p>
                                                                            </div>
                                                                        </div>
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
                                                                                <th>Delete</th>
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
                                                                                <td>
                                                                                    <form class="form-inline" action="#" method="post">
                                                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                                                    </form>
                                                                                </td>
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
                                        </td>
                                        <td>
                                            <a href="{{route('orders.status',['id'=>$retailOrder->id,'status'=> 'confirmed'])}}" class="btn btn-success">
                                                Confirm
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('orders.status',['id'=>$retailOrder->id,'status'=> 'completed'])}}" class="btn btn-dark">
                                                Complete
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('orders.invoice',$retailOrder->id)}}" class="btn btn-danger">
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
            <div  id="wholesale-order" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Wholesale Order Details</h5>
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
                                        <div class="row">
                                            <div class="col-md-6 border-right">
                                                <p><strong>Order Name : Saiful Islam</strong></p>
                                                <p><strong>Order Phone : 01700899084</strong></p>
                                                <p><strong>Order Email : mdsaifulislampyada@gmail.com</strong></p>
                                                <p><strong>Order Address : Gournadi, Barisal</strong></p>
                                                <p><strong>Order District : Barisal</strong></p>
                                                <p><strong>Order Courier : Gournadi Branch, Barisal</strong></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><strong>Order Payment Method : Bkash</strong></p>
                                                <p><strong>Order Payment Number : 01935901315</strong></p>
                                                <p><strong>Order Transaction Id : 45dsfjdg45</strong></p>
                                            </div>
                                        </div>
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
                                                <th>Delete</th>
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
                                                <td>
                                                    <form class="form-inline" action="#" method="post">
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
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
            <div  id="retail-order" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Retail Order Details</h5>
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
                                        <div class="row">
                                            <div class="col-md-6 border-right">
                                                <p><strong>Order Name : Saiful Islam</strong></p>
                                                <p><strong>Order Phone : 01700899084</strong></p>
                                                <p><strong>Order Email : mdsaifulislampyada@gmail.com</strong></p>
                                                <p><strong>Order Address : Gournadi, Barisal</strong></p>
                                                <p><strong>Order District : Barisal</strong></p>
                                                <p><strong>Order Courier : Gournadi Branch, Barisal</strong></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><strong>Order Payment Method : Bkash</strong></p>
                                                <p><strong>Order Payment Number : 01935901315</strong></p>
                                                <p><strong>Order Transaction Id : 45dsfjdg45</strong></p>
                                            </div>
                                        </div>
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
                                                <th>Delete</th>
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
                                                <td>
                                                    <form class="form-inline" action="#" method="post">
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
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
@endsection
