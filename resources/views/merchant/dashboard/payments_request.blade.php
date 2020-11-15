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
                                    Payments Request

                                </div>

                                {{--add Modal--}}

                                <table class="table table-bordered table-hover" id="table_id">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>#PH454</td>
                                        <td>23 Sep 2020</td>
                                        <td>56,000</td>
                                        <td>
                                            <button class="btn btn-default">Pending</button>
                                        </td>
                                        <td>
                                            <a href="#addPaymentModal" data-toggle="modal" class="btn btn-info">
                                                Add Request
                                            </a>
                                            {{--add modal--}}
                                            <div class="modal fade" id="addPaymentModal" tabindex="-1" role="dialog"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Add new Request</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('merchant.add.payment')}}" method="post"
                                                                  enctype="multipart/form-data">
                                                                {{csrf_field()}}
                                                                <div class="form-group">
                                                                    <label for="invoice_no">Order Invoice No</label>
                                                                    <select id="invoice_no" class="form-control" name="invoice_no" required >
                                                                        <option value="1">1</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="amount">Order Amount</label>
                                                                    <select id="amount" class="form-control" name="amount" required >
                                                                        <option value="100">100</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="message">Message</label>
                                                                    <textarea  class="form-control" name="message" id="message"></textarea>
                                                                </div>
                                                                <button type="submit" class="btn btn-success">Add new Request</button>
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Cancel
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
