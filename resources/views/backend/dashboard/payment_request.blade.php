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
                                    Payment Request
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Date</th>
                                            <th>Invoice No</th>
                                            <th>Amount</th>
                                            <th>Message</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($paymentRequest as $request)
                                        <tr>
                                            <td>#PR{{$request->id}}</td>
                                            <td>{{$request->created_at->format('D M Y')}}</td>
                                            <td>{{$request->invoice_no}}</td>
                                            <td>{{$request->amount}}</td>
                                            <td>{{$request->message}}</td>
                                        </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>


                    {{--Retail Order--}}

                </div>
            </div>
        </div>
    </div>
@stop
