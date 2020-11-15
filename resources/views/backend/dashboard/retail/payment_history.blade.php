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
                                    Payment History
                                </div>
                                <table class="table table-bordered table-hover" id="table_id">
                                    <thead>
                                    <tr>
                                        <th>Invoice No</th>
                                        <th>Name</th>
                                        <th>Payment type</th>
                                        <th>Pay Amount</th>
                                        <th>Number</th>
                                        <th>Date</th>
                                        <th>Shop Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($payments as $payment)
                                        @if($payment->order->type == 'retail')
                                        <tr>
                                            <td>{{optional($payment->order)->invoice_no}}</td>
                                            <td>{{optional($payment->order)->name}}</td>
                                            <td>{{$payment->payment_method}}</td>
                                            <td>{{$payment->amount}}</td>
                                            <td>{{$payment->number}}</td>
                                            <td>{{$payment->created_at->format('M D, Y')}}</td>
                                            <td>{{$payment->merchant->shop_name}}</td>
                                            <td>
                                                <a href="#editModal-{{$payment->id}}" data-toggle="modal" class="btn btn-success">Edit</a>
                                                <div class="modal fade" id="editModal-{{$payment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Payment</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('retail.edit_payment',$payment->id)}}" method="post"
                                                                      enctype="multipart/form-data">
                                                                    {{csrf_field()}}
                                                                    <div class="form-group">
                                                                        <label for="order_id">Select Order ID</label>
                                                                        <select id="order_id" class="form-control" name="order_id" required >
                                                                            <option value="{{$payment->order->id}}">{{$payment->order->invoice_no}}</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="merchant_id">Select Shop</label>
                                                                        <select id="merchant_id" class="form-control" name="merchant_id" required >
                                                                            <option>Select A Shop</option>
                                                                            @foreach($sellers as $seller)
                                                                                <option value="{{$seller->id}}"{{$seller->id == $payment->merchant->id ? 'selected' : ''}} >{{$seller->shop_name}}</option>
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
                                                                            <option value="{{$payment->amount}}">{{$payment->amount}}</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="number">Payment Number</label>
                                                                        <input type="text" class="form-control" name="number" id="number" value="{{$payment->number}}">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-success">Update Payment</button>
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Cancel
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#deleteModal-{{$payment->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteModal-{{$payment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete!</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('retail.delete_payment',$payment->id)}}" method="post">
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
                                        @endif
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
