<!-- header -->
<div class="agileits_header">
    <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
            <div class="quicktechl_logo">
                <a href="{{route('home')}}"><img src="{{upload_url('settings/logo/'.setting('logo'))}}" alt=""
                                                 style="width: 132px; height: 40px; object-fit: cover"></a>
            </div>

            <div class="quicktech-top-menu-bar">
                <div class="navbar-header nav_2">
                    <button type="button">
                        <span class="navbar-toggler widget-sidebar-toggler">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12" style="padding: 0;">
            <div class="quicktechl_search">
                <form action="#">
                    <input type="text"  class="search_data" placeholder="Search for products">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12" style="padding: 0;">
            <div class="header-top-right">
                <div class="quicktechl_header_call" style="display: flex">
                    <div class="btn-group">
                        <button class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"
                                style="color: white;font-size: 16px;font-weight: bold;">Eng
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Bangla</a></li>
                        </ul>
                    </div>
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background: gray;padding: 10px 10px;margin-top: 5px;border-radius: 5px;">
                                <i class="fa fa-location-arrow" aria-hidden="true"></i> Track Order
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li>
                                    <form action="{{route('track')}}" method="get">

                                        <input type="text" class="form-control" name="track" placeholder="Enter Your Order Number" required="">
                                        <button type="submit" class="btn btn-success" style="width: 100%">Search</button>
                                    </form>
                                    <!--// Login or sign up  -->
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="quicktech_header_fb">
                    <a href="https://web.facebook.com/bivazon/" class="facebook">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="quicktechl_header_login">
                    <ul>
                        <li class="dropdown profile_details_drop" style="display: flex">
                            <a href="{{route('shop.login')}}" style="margin-top: 0">Login/</a>
                            <a href="{{route('shop.register')}}" style="margin-left: 0;margin-top: 0">Sign Up</a>
                        </li>
                    </ul>
                </div>

                <!-- Login or sign up -->
                <div class="modal fade" id="LoginOrSignUp1" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="quicktech-customer-login modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class=" modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#"> <img src="{{asset('frontend/images/l-offer.png')}}" alt=""></a>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- login -->
                                        <div class="quicktech_login">
                                            <h3> Login/Sign Up </h3>
                                            <div class="quicktech_login_module">
                                                <div class="module form-module">
                                                    <div class="toggle"><i class="fa fa-times fa-sign-in"></i>

                                                    </div>
                                                    <div class="form">
                                                        <h2>Login to your account</h2>

                                                        <form action="https://grocery.com.bd/customer/panel/login"
                                                              method="post">
                                                            <input type="hidden" name="_token"
                                                                   value="Tvde39PfCKtsjl14qxP9Jr7qethR7KlBWise5Uv1">
                                                            <input type="text" name="phoneOremail" class=""
                                                                   placeholder="Enter Your Username" value=""
                                                                   required="">


                                                            <input type="password" name="password" class="" value=""
                                                                   placeholder="Enter Your Password" required="">


                                                            <input class="login-sub" type="submit" value="Login">
                                                        </form>
                                                        <div class="forgot">
                                                            <a href="forget/password.html">Forgot Password</a>
                                                        </div>
                                                    </div>
                                                    <div class="form">
                                                        <h2>Create an account</h2>
                                                        <form action="https://grocery.com.bd/customer/register"
                                                              method="POST">
                                                            <input type="hidden" name="_token"
                                                                   value="Tvde39PfCKtsjl14qxP9Jr7qethR7KlBWise5Uv1">
                                                            <input type="text" name="fullName"
                                                                   placeholder="Enter Your Name" required="">

                                                            <input type="email" name="email"
                                                                   placeholder="Enter Your Email Address">
                                                            <input type="text" name="phoneNumber"
                                                                   placeholder="Enter Your Phone Number"
                                                                   required="">

                                                            <input type="password" name="Password"
                                                                   placeholder="Enter Your Password" required="">
                                                            <input type="submit" value="Register">
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <!-- //login -->
                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!--// Login or sign up -->

                <div class="quicktechl_header_right1 cartTable">

                    <div class="cart-option">
                        <a class="show"><img src="{{asset('frontend/images/mybag.png')}}" alt=""> My Bag</a>
                        <div class="cart-count">
                            <p>{{$carts->count('ip')}}</p>
                        </div>
                    </div>

                    <div class="cartnavigation">
                        <div class="navigation">

                            <div class="cart-product">
                                <h2><img src="{{asset('frontend/images/mybag.png')}}" alt=""> My Bag <span
                                        class="quicktech_bag_items">({{$carts->count('ip')}} items)</span>
                                    <span class="close-btn hide">X</span>

                                </h2>
                                <div class="pro-subtotal-area">
                                    <div class="row">

                                            <ul class="quicktech_subtotal">
                                                @foreach($carts as $key=>$cart)
                                                    <li style="margin-left: 5px">
                                                        <a href="#">
                                                            <span class="subtitle">
                                                            <img src="{{upload_url('products/'.collect($cart->product->images)->first())}}" alt="cartProductImage" style="width: 60px;display: inline-block">
                                                                 <span class="sub_total">{{$cart->sub_total}}</span>

                                                        </span>
                                                            <br>
                                                            {{$cart->product->name}}
                                                            <span class="text-danger" style="float: right">Delete</span>
                                                        </a>
                                                      </li>
                                                @endforeach

                                            </ul>
                                    </div>

                                    <h4>Your total shopping<span class="total">৳ {{$carts->sum('sub_total')}} </span>
                                    </h4>
                                </div>

                                {{--<div class="cart-product-item-area">--}}
                                {{--</div>--}}

                                <div class="proCheckout">
                                    <ul>
                                        <li><a href="{{route('checkouts')}}">Proceed to Checkout <span>৳ {{$carts->sum('sub_total')}} </span></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- script-for sticky-nav -->
