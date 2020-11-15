<div class="mobile-header" style="padding: 0;">
    <div class="row">
        <div class="col-xs-2" style="margin: 0;padding: 0;">
            <div class="quicktech-top-menu-bar">
                <!-- Brand and toggle get grouped for better  display -->
                <div class="navbar-header nav_2">
                    <button type="button">
                        <span class="navbar-toggler widget-sidebar-toggler"><i class="fa fa-bars"
                                                                               aria-hidden="true"></i></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>
            {{--<div class="quicktechl_logo">--}}
                {{--<a href="{{route('home')}}"><img src="{{asset('frontend/img/logo4.png')}}" alt=""></a>--}}
            {{--</div>--}}
        </div>

        <div class=" col-xs-8" style="padding: 0;">
            <div class="quicktechl_search" style="margin: 0;">
                <form>
                    <input type="text" class="search_data" placeholder="Search for products">
                    <button type="text"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="header-top-right" style="margin-top: 12px">
                <a href="#" style="color: white" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-ellipsis-v" aria-hidden="true" style="font-size:32px;"></i>
                </a>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="width: 78%;left: 11%;">
                            <div class="modal-header" style="background: #f58226">
                                <div class="float-right">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" style="font-size: 30px">&times;</span>
                                    </button>
                                </div>
                                <div class="float-left">
                                    <a href="{{route('home')}}">
                                        <img src="{{asset('frontend/img/logo4.png')}}" alt="logoimg" width="70px">
                                    </a>
                                </div>


                            </div>
                            <div class="modal-body">
                                <style>
                                    .mobile_list li a{
                                        font-size: 30px;
                                        color: gray;
                                    }
                                </style>
                                    <ul class="mobile_list">
                                        <li><a href="{{route('shop.register')}}" >
                                                 <i class="fa fa-user"></i> Sign Up
                                            </a></li>
                                        <li><a href="{{route('shop.login')}}" >
                                              <i class="fa fa-sign-out" ></i>  Sign In
                                            </a></li>
                                        <li><a href="#">
                                              <i class="fa fa-book"></i>  ENG/BN
                                            </a></li>
                                        <li><a href="#">
                                              <i class="fa fa-truck"></i> Track Order
                                            </a></li>
                                        <li><a href="#" class="show">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart ( 0 )
                                            </a></li>
                                        {{--<li class="dropdown profile_details_drop">--}}
                                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                                                {{--<i class="fa fa-user"></i>--}}
                                            {{--</a>--}}
                                            {{----}}
                                            {{--<ul class="dropdown-menu drp-mnu">--}}
                                                {{--<li>--}}
                                                    {{--<!-- Login or sign up -->--}}
                                                    {{--<button type="button" class="btn btn-primary" data-toggle="modal"--}}
                                                            {{--data-target="#LoginOrSignUp">Login or Sign Up--}}
                                                    {{--</button>--}}
                                                    {{--<!--// Login or sign up  -->--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                    </ul>
                                </div>

                                {{--<!-- Login-->--}}
                                {{--<div class="modal fade" id="LoginOrSignUp" tabindex="-1" role="dialog"--}}
                                     {{--aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                    {{--<div class="modal-dialog" role="document">--}}
                                        {{--<div class="quicktech-customer-login modal-content">--}}
                                            {{--<div class="modal-header">--}}

                                                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                                    {{--<span aria-hidden="true">&times;</span>--}}
                                                {{--</button>--}}
                                            {{--</div>--}}
                                            {{--<div class="modal-body">--}}
                                                {{--<div class="row">--}}
                                                    {{--<div class="col-md-6">--}}
                                                        {{--<!--<a href="#"> <img src="public/frontEnd/images/l-offer.png" alt=""></a>-->--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-6">--}}
                                                        {{--<!-- login -->--}}
                                                        {{--<div class="quicktech_login">--}}
                                                            {{--<h3 class="text-center">Sign In</h3>--}}
                                                            {{--<div class="quicktech_login_module">--}}
                                                                {{--<div class="module form-module">--}}
                                                                    {{--<div class="">--}}

                                                                    {{--</div>--}}
                                                                    {{--<div class="form">--}}
                                                                        {{--<h2>Login to your account</h2>--}}
                                                                        {{--<form action="#"--}}
                                                                              {{--method="POST">--}}
                                                                            {{--<input type="hidden" name="_token"--}}
                                                                                   {{--value="Tvde39PfCKtsjl14qxP9Jr7qethR7KlBWise5Uv1">--}}
                                                                            {{--<input type="text" name="phoneOremail" class=""--}}
                                                                                   {{--placeholder="Enter Your Username" value=""--}}
                                                                                   {{--required="">--}}


                                                                            {{--<input type="password" name="password" class="" value=""--}}
                                                                                   {{--placeholder="Enter Your Password" required="">--}}


                                                                            {{--<input class="login-sub" type="submit" value="Login">--}}
                                                                        {{--</form>--}}
                                                                        {{--<div class="forgot">--}}
                                                                            {{--<a href="forget/password.html">Forgot Password</a>--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="form">--}}
                                                                        {{--<h2>Create an account</h2>--}}
                                                                        {{--<form action="#"--}}
                                                                              {{--method="POST">--}}
                                                                            {{--<input type="hidden" name="_token"--}}
                                                                                   {{--value="Tvde39PfCKtsjl14qxP9Jr7qethR7KlBWise5Uv1">--}}
                                                                            {{--<input type="text" name="fullName"--}}
                                                                                   {{--placeholder="Enter Your Name" required="">--}}

                                                                            {{--<input type="email" name="email"--}}
                                                                                   {{--placeholder="Enter Your Email Address">--}}
                                                                            {{--<input type="text" name="phoneNumber"--}}
                                                                                   {{--placeholder="Enter Your Phone Number" required="">--}}

                                                                            {{--<input type="password" name="Password"--}}
                                                                                   {{--placeholder="Enter Your Password" required="">--}}
                                                                            {{--<input type="submit" value="Register">--}}
                                                                        {{--</form>--}}
                                                                    {{--</div>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                        {{--</div>--}}
                                                        {{--<!-- //login -->--}}
                                                    {{--</div>--}}


                                                {{--</div>--}}

                                            {{--</div>--}}

                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!--// Login or sign up -->--}}
                            {{--<!-- Login-->--}}
                            {{--<div class="modal fade" id="signup" tabindex="-1" role="dialog"--}}
                                 {{--aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                {{--<div class="modal-dialog" role="document">--}}
                                    {{--<div class="quicktech-customer-login modal-content">--}}
                                        {{--<div class="modal-header">--}}

                                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                                {{--<span aria-hidden="true">&times;</span>--}}
                                            {{--</button>--}}
                                        {{--</div>--}}
                                        {{--<div class="modal-body">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-md-6">--}}
                                                    {{--<!--<a href="#"> <img src="public/frontEnd/images/l-offer.png" alt=""></a>-->--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-6">--}}
                                                    {{--<!-- login -->--}}
                                                    {{--<div class="quicktech_login">--}}
                                                        {{--<h3>Sign Up</h3>--}}
                                                        {{--<div class="quicktech_login_module">--}}
                                                            {{--<div class="module form-module">--}}
                                                                {{--<div class="">--}}

                                                                {{--</div>--}}

                                                                {{--<div class="form">--}}
                                                                {{--<h2>Create an account</h2>--}}
                                                                {{--<form action="#"--}}
                                                                {{--method="POST">--}}
                                                                {{--<input type="hidden" name="_token"--}}
                                                                {{--value="Tvde39PfCKtsjl14qxP9Jr7qethR7KlBWise5Uv1">--}}
                                                                {{--<input type="text" name="fullName"--}}
                                                                {{--placeholder="Enter Your Name" required="">--}}

                                                                {{--<input type="email" name="email"--}}
                                                                {{--placeholder="Enter Your Email Address">--}}
                                                                {{--<input type="text" name="phoneNumber"--}}
                                                                {{--placeholder="Enter Your Phone Number" required="">--}}

                                                                {{--<input type="password" name="Password"--}}
                                                                {{--placeholder="Enter Your Password" required="">--}}
                                                                {{--<input type="submit" value="Register">--}}
                                                                {{--</form>--}}
                                                                {{--</div>--}}

                                                            {{--</div>--}}
                                                        {{--</div>--}}

                                                    {{--</div>--}}
                                                    {{--<!-- //login -->--}}
                                                {{--</div>--}}


                                            {{--</div>--}}

                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <!--// Login or sign up -->
                                {{--<div class="quicktechl_header_right1 cartTable">--}}

                                    {{--<div class="cart-option">--}}
                                        {{--<a class="show"><img src="{{asset('frontend/images/mybag.png')}}" alt=""> My Bag</a>--}}
                                        {{--<div class="cart-count">--}}
                                            {{--<p>0</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    <div class="cartnavigation">
                                        <div class="navigation">

                                            <div class="cart-product">
                                                <h2><img src="{{asset('frontend/images/mybag.png')}}" alt=""> My Bag <span
                                                            class="quicktech_bag_items">(0 items)</span>
                                                    <span class="close-btn hide">X</span>

                                                </h2>
                                                <div class="pro-subtotal-area">
                                                    <ul class="quicktech_subtotal">
                                                        <li><span class="subtitle">subtitle:</span><span class="sub_total">৳ 0 </span>
                                                        </li>

                                                    </ul>
                                                    <h4>Your total shopping<span class="total">৳ 0 </span></h4>

                                                </div>
                                                <div class="cart-product-item-area" style="background: #fff">


                                                </div>
                                                <div class="proCheckout">
                                                    <ul>
                                                        <li><a href="{{route('checkouts')}}">Proceed to Checkout <span>৳ 0 </span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
                            </div>
                                </div>

                                </div>
                            </div>
                        </div>

                            </div>

                        </div>
                    </div>


