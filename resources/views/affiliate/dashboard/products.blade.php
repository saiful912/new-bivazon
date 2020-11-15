@extends('merchant.Layouts.app')

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
                                    <h5 class="card-title mb-0">All Product</h5>
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
                                <table  class="table table-hover table-nowrap" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>price</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            #WS8965
                                        </td>
                                        <td>
                                            Formal women's Leather Purse
                                        </td>
                                        <td>
                                            600 TK
                                        </td>
                                        <td>
                                            <img src="{{asset('backend/img/parse.jpg')}}" alt="ProductImage" width="60px">
                                        </td>
                                        <td>
                                            Bags->purse
                                        </td>
                                        <td>
                                            <a href="{{route('merchant.edit.product')}}" class="btn btn-success">Edit</a>
                                            <a href="#deleteModal" data-toggle="modal" class="btn btn-danger">Block</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal" tabindex="-1"
                                                 role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Are you sure to
                                                                Block!</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="#"
                                                                  method="post">
                                                                {{csrf_field()}}
                                                                <button type="submit" class="btn btn-danger">Permanent Block
                                                                </button>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cancel
                                                            </button>
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
                </div>
            </div>
        </div>
    </div>

@stop