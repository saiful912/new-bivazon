@extends('frontend.layouts.fronted_master')
@section('main')

    <section class="quicktech_banner">
        <img src="https://www.grocery.com.bd/public/frontEnd/images/offer-1.jpg" alt="">
    </section>
    <!--quicktech products-breadcrumb -->
    <section class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('home')}}">Home</a><span>|</span></li>
                <li>Shopping Cart <span>|</span></li>
                <li>Shipping</li>
            </ul>
        </div>
    </section>
    <!-- //quicktech products-breadcrumb -->
    <!--custom breadcrumb end-->
    <section class="section-padding orderpage">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="login-content">
                        <h2 class="login-title">Shipping Address</h2>
                        <form action="{{route('order.process')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" required="" class="form-control @error('name') is-invalid @enderror" value="">
                                @error('name')<span class="text-danger">
                                    {{$message}}
                                </span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" name="phone" required="" class="form-control @error('phone') is-invalid @enderror" value="">
                                @error('phone')<span class="text-danger">
                                    {{$message}}
                                </span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" rows="3" required="" class="form-control @error('address') is-invalid @enderror" value=""></textarea>
                                @error('address')<span class="text-danger">
                                    {{$message}}
                                </span>@enderror
                            </div>
                            <div class="form-group selectfont">
                                <label for="district_id">District</label>
                                <select name="district_id" id="district_id" class="form-control @error('district_id') is-invalid @enderror"
                                        style="border: 1px solid #ddd">
                                    <option>===Select District===</option>
                                    @foreach($districts as $district)
                                        <option type="text" value="{{$district->id}}">{{$district->name}}</option>
                                    @endforeach
                                </select>
                                @error('district_id')<span class="text-danger">
                                    {{$message}}
                                </span>@enderror
                            </div>
                            <!-- col end -->
                            <div class="form-group selectfont">
                                <label for="courier_id">Courier Area</label>
                                <select name="courier_id" class="form-control @error('courier_id') is-invalid @enderror" style="border: 1px solid #ddd"
                                        id="courier_id">
                                    <option>===Select Couriers===</option>
                                </select>
                                @error('courier_id')<span class="text-danger">
                                    {{$message}}
                                </span>@enderror
                            </div>
                            <div class="form-group selectfont">
                                <label for="pay_method">Select Payment Method</label>
                                <select name="payment_method" class="form-control @error('payment_method') is-invalid @enderror" style="border: 1px solid #ddd"
                                        id="pay_method">
                                    <option value="0">===Select Payment Method===</option>
                                    <option type="text" value="cash_on">Cash On Delivery</option>
                                    <option type="text" value="bkash">Bkash</option>
                                    <option type="text" value="rocket">Rocket</option>
                                    <option type="text" value="nagot">Nagot</option>
                                </select>
                                @error('payment_method')<span class="text-danger">
                                    {{$message}}
                                </span>@enderror
                            </div>
                            <div class="form-group">
                                <label>Other Message <span>(if any query please write here)</span></label>
                                <textarea name="note" rows="3" placeholder="Note" class="form-control"
                                          value=""></textarea>
                            </div>
                            <div class="form-group">
                                <input class="login-sub" type="submit" value="Process to Order">
                            </div>
                        </form>
                    </div>
                    <!--login content end-->
                </div>
                <!-- col end -->
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="coupon_code right">
                        <h3>Cart Totals</h3>
                        <div class="coupon_inner">
                            @foreach($carts as $key=>$cart)
                                <div class="cart_subtotal">
                                    <p>{{$cart->product->name}}</p>
                                    <p class="cart_amount">৳ {{$cart->price}}</p>
                                </div>
                            @endforeach
                            <div class="cart_subtotal">
                                <p>Subtotal</p>
                                <p class="cart_amount">৳ {{$carts->sum('sub_total')}}</p>
                            </div>
                            <div class="cart_subtotal">
                                <p>Total <span style="color: #D94939">(with shipping charge)</span></p>
                                <p class="cart_amount">৳ {{60 + $carts->sum('sub_total')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

