

@extends('backend.Layouts.app')
@section('main')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <!-- Whole Sale Order -->
                <div class="row">
                    <div class="col-lg-12 box-margin">
                    <div class="card">
                        <div class="card-header">
                            View Merchant Payment History
                        </div>
                        <div class="card-body">
                            <h3 class="text-success">Merchant Information</h3>
                            <div class="row">
                                <div class="col-md-6 border-right">
                                    <p><strong>Name : Saiful Islam</strong></p>
                                    <p><strong>Phone : 01700899084</strong></p>
                                    <p><strong>Shop : Vai Vai Store</strong></p>
                                    <p><strong>Email : mdsaifulislampyada@gmail.com</strong></p>
                                    <p><strong>Address : Gournadi, Barisal</strong></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Last Payment : 5679.00</strong></p>
                                    <p><strong>Total Sell: 565570.00</strong></p>
                                    <p><strong>Total Payment: 65656.00</strong></p>
                                    <hr>
                                    <p><strong>Total Due: 650.00</strong></p>
                                </div>
                            </div>
                            <hr>
                            <h3>Order Items</h3>
                            <table class="table table-bordered table-striped table-hover table-info">
                                <tbody><tr>
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

                                        <img src="http://bivazon.test/frontend/img/products.png" width="60px" alt="">

                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>355,000.00</td>
                                    <td>355,000.00</td>
                                    <td>
                                        <form class="form-inline" action="#" method="post">
                                            <button type="submit" class="btn btn-danger">Confirm</button>
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
                                </tbody></table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
