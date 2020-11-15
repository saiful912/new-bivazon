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

                                                <a href="#addPaymentModal-{{$retailOrder->id}}" data-toggle="modal" class="btn btn-info">
                                                    Payment
                                                </a>
                                                <div class="modal fade" id="addPaymentModal-{{$retailOrder->id}}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Add new Payment</h5>

                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('retail.add_payment')}}" method="post"
                                                                      enctype="multipart/form-data">
                                                                    {{csrf_field()}}
                                                                    <div class="form-group">
                                                                    <label for="order_id">Select Order ID</label>
                                                                    <select id="order_id" class="form-control" name="order_id" required >
                                                                    <option value="{{$retailOrder->id}}">{{$retailOrder->invoice_no}}</option>
                                                                    </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="merchant_id">Select Shop</label>
                                                                        <select id="merchant_id" class="form-control" name="merchant_id" required >
                                                                            <option>Select A Shop</option>
                                                                            @foreach($sellers as $seller)
                                                                                <option value="{{$seller->id}}">{{$seller->shop_name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="payment_method">Select Payment Method</label>
                                                                        <select class="form-control" name="payment_method" required >
                                                                            <option value="bkash">Bkash</option>
                                                                            <option value="rocket">Rocket</option>
                                                                            <option value="nagat">Nagat</option>
                                                                            <option value="Card">Card Payment</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="amount">Payment Amount</label>
                                                                        <select class="form-control" name="amount" id="amount" required >
                                                                            <option value="{{$retailOrder->total_amount}}">{{$retailOrder->total_amount}}</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="number">Payment Number</label>
                                                                        <input type="text" class="form-control" name="number" id="number">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-success">Add new Payment</button>
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Cancel
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
    </div>

    @stop