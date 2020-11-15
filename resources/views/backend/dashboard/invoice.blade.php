<!doctype html>
<html lang="en">
<!-- Mirrored from demo.riktheme.com/metrozi/side-menu-light/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Aug 2020 18:45:30 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Print PDF File this order--->{{$order->invoice_no}}</title>
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">
    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
</head>
<body>
<!-- Preloader -->
<div id="preloader"></div>

<!-- ======================================
******* Page Wrapper Area Start **********
======================================= -->
<div class="ecaps-page-wrapper">
    <!-- Page Content -->
    <div class="ecaps-page-content">
        <!-- Top Header Area -->
        <!-- Main Content Area -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <div class="row" style="display: flex">

                                    <div class="logo-area">
                                        <div class="col-sm-6 pb-4">

                                            <div class="media align-items-center">
                                                <!-- Logo -->
                                                <div class="card-body-login mb-30">
                                                    <h1>Bivazon</h1>
                                                </div>
                                            </div>

                                            <div class="mb-1 font-15">Office 154, Chakh-Bazaar, Dhaka, Bangladesh</div>
                                            <div class="mb-1 font-15">E-Mail : uriaz0046@gmail.com</div>
                                            <div class="font-15">(+88 ) 01856126296</div>

                                        </div>
                                    </div>


                                    <div class="col-sm-6 text-right pb-4" style="float: right">

                                        <h6 class="font-15 mb-3">INVOICE #{{$order->invoice_no}}</h6>
                                        <div class="mb-1 font-15">Order Date: {{$order->created_at->format('d M Y')}}</div>
                                        <div class="font-15">Delivery date: {{$order->updated_at->format('d M Y')}}</div>

                                    </div>
                                </div>

                                <hr class="mb-4">

                                <div class="row" style="display: flex">
                                    <div class="col-sm-6 mb-4">
                                        <div class="mb-2">Invoice To:</div>
                                        <div class="font-14 mb-1">Name : {{$order->name}}</div>
                                        <div class="font-14 mb-1">E-Mail : {{$order->email}}</div>
                                        <div class="font-14 mb-1">Phone : {{$order->phone}}</div>
                                        <div class="font-14 mb-1">Address : {{$order->address}}</div>
                                        <div class="font-14 mb-1">District : {{$order->district->name}}</div>
                                        <div class="font-14 mb-1">Courier : {{$order->courier->name}}</div>
                                        <br/>
                                    </div>

                                    <div class="col-sm-6 mb-4" style="float: right">
                                        <div class="mb-2">Payment Details:</div>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td class="pr-3 font-14">Total Amount: {{$order->total_amount}}</td>
                                            </tr>
                                            <tr>
                                                <td class="pr-3 font-14">Payment Method: Bkash</td>
                                            </tr>
                                            <tr>
                                                <td class="font-14">Payment Number: 01800899084</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <style>
                                    .table{
                                        font-family: "Trebuchet MS",Arial,Helvetica,sans-serif;
                                        border-collapse: collapse;
                                        width: 100%;
                                    }
                                    .table td, .table th{
                                        border: 1px solid #ddd;
                                        padding: 8px;
                                    }
                                    .table tr:hover{
                                        background-color: #dddddd;
                                    }
                                    .table th{
                                        padding-top: 12px;
                                        padding-bottom: 12px;
                                        background-color: #4CAF50;
                                        color: white;
                                        text-align: center;
                                    }
                                </style>
                                <div class="table-responsive mb-4" >
                                    <table class="table m-0">
                                        <thead>
                                        <tr>
                                            <th class="py-3">
                                                SL
                                            </th>
                                            <th class="py-3">
                                                Title
                                            </th>
                                            <th class="py-3">
                                                Quantity
                                            </th>
                                            <th class="py-3">
                                               Price
                                            </th>
                                            <th class="py-3">
                                                Total
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                               1
                                            </td>
                                            <td class="py-3">
                                                <div class="font-16 mb-1">Website design and development</div>
                                            </td>
                                            <td class="py-3">
                                                3
                                            </td>
                                            <td class="py-3">
                                                63
                                            </td>
                                            <td class="py-3">
                                                $3,150.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right py-3" style="float: right">
                                                Subtotal:<br>
                                                Delivery Charge:<br>
                                                Advance Payment:<br>
                                                <span class="d-block text-big mt-2">Grand-Total:</span>
                                            </td>
                                            <td class="py-3">
                                                $4,876.20<br>
                                                $12<br>
                                                $10<br>
                                                $6,095.25
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
               <div style="display: flex">
                   <div class="thanks mt-3" style="float: left">
                       <h4>Thank You for your business ! </h4>
                   </div>

                   <div class="authority float-right" style="float: right">
                       ................................ <br>
                       Authority Signature
                   </div>
               </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

</body>


<!-- Mirrored from demo.riktheme.com/metrozi/side-menu-light/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Aug 2020 18:45:30 GMT -->
</html>