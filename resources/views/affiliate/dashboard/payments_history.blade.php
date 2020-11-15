@extends('merchant.Layouts.app')
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
                                <div class="card-header">
                                    Payment History
                                </div>
                                {{--add Modal--}}
                                <table class="table table-bordered table-hover" id="table_data">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Pay Amount</th>
                                        <th>Number</th>
                                        <th>Pay Method</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>#PH454</td>
                                        <td>23 Sep 2020</td>

                                        <td>56,000</td>
                                        <td>01712345678</td>
                                        <td>Bkash</td>
                                        <td>
                                            <a href="#" data-toggle="modal" class="btn btn-success">View</a>
                                            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Payment</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="#" method="post"
                                                                  enctype="multipart/form-data">
                                                                {{csrf_field()}}
                                                                <div class="form-group">
                                                                    <label for="shop_type">Select Shop</label>
                                                                    <select class="form-control" name="shop_type" required >
                                                                        <option value="vai vai">Vai Vai</option>
                                                                        <option value="Mama Vagne">Mama Vagne</option>
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
                                                                    <input type="number" class="form-control" name="amount" id="amount">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="number">Payment Number</label>
                                                                    <input type="number" class="form-control" name="number" id="amount">
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
                                            <a href="#" class="btn btn-danger">Confirm</a>
                                        </td>
                                    </tr>
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
