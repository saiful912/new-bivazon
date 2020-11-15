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
                                    <a href="#addPaymentModal" data-toggle="modal" class="btn btn-info float-right"
                                       style="margin-top: -6px">
                                        <i class="fa fa-plus"></i>Add Request
                                    </a>
                                </div>

                                {{--add Modal--}}
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
                                                <form action="#" method="post"
                                                      enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    <div class="form-group">
                                                        <label for="amount">Payment Amount</label>
                                                        <input type="number" class="form-control" name="amount" id="amount">
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
                                <table class="table table-bordered table-hover" id="table_data">
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
                                            <a href="#editModal" data-toggle="modal" class="btn btn-success">Edit</a>
                                            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Payment Request</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="#" method="post"
                                                                  enctype="multipart/form-data">
                                                                {{csrf_field()}}
                                                                <div class="form-group">
                                                                    <label for="amount">Payment Amount</label>
                                                                    <input type="number" class="form-control" name="amount" id="amount">
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
                                            <a href="#deleteModal" data-toggle="modal" class="btn btn-danger">Delete</a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete!</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="#" method="post">
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
