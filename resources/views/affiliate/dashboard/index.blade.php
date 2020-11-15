@extends('affiliate.layouts.app')

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

                <div class="col-lg-12 box-margin">
                    <div class="card code-table">
                        <div class="card-body pb-0">
                            <div
                                    class="card-header border-none bg-transparent d-flex align-items-center justify-content-between p-0 mb-30">
                                <div class="widgets-card-title">
                                    <h5 class="card-title mb-0">Daily Stats</h5>
                                </div>
                                <div class="dashboard-dropdown">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button"
                                                id="dashboardDropdown7" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="ti-more"></i></button>
                                        {{--<div class="dropdown-menu dropdown-menu-right"--}}
                                        {{--aria-labelledby="dashboardDropdown7">--}}
                                        {{--<a class="dropdown-item" href="#"><i class="ti-pencil-alt"></i> Edit</a>--}}
                                        {{--<a class="dropdown-item" href="#"><i class="ti-settings"></i>--}}
                                        {{--Settings</a>--}}
                                        {{--<a class="dropdown-item" href="#"><i class="ti-eraser"></i>--}}
                                        {{--Remove</a>--}}
                                        {{--<a class="dropdown-item" href="#"><i class="ti-trash"></i>--}}
                                        {{--Delete</a>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </div>

                            <!-- Table -->
                            <div class="table-responsive">
                                <table  class="table table-hover table-nowrap" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Hits</th>
                                        <th>Uniques</th>
                                        <th>Clicks</th>
                                        <th>Ratio</th>
                                        <th>Leads</th>
                                        <th>EPC</th>
                                        <th>EPM</th>
                                        <th>Money</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            Sep 9, 2020
                                        </td>
                                        <td>
                                            #WS8965
                                        </td>
                                        <td>
                                            5,600
                                        </td>
                                        <td>
                                            45
                                        </td>
                                        <td>
                                            45
                                        </td>
                                        <td>
                                            45
                                        </td>
                                        <td>
                                            45
                                        </td>
                                        <td>
                                            45
                                        </td>
                                        <td>
                                            45
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