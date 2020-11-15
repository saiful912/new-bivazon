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
                                    <h5 class="card-title mb-0">Returns Order</h5>
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
                                        <th>Order Id</th>
                                        <th>Date</th>
                                        <th>Product Name</th>
                                        <th>Shop Name</th>
                                        <th>Shop Type</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            #WS8965
                                        </td>
                                        <td>
                                            Sep 9, 2020
                                        </td>
                                        <td>
                                            Olive oil 500 ml
                                        </td>
                                        <td>
                                            Vai vai shop
                                        </td>
                                        <td>
                                            Cosmetics
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary md-trigger"  data-toggle="modal" data-target="#return-order">View</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div  id="return-order" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Return Order Details</h5>
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
                                            <p class="text-warning">Customer not pickup this product</p>
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