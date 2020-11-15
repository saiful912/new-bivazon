<!doctype html>
<html lang="en">


<!-- Mirrored from demo.riktheme.com/metrozi/side-menu-light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Aug 2020 18:45:48 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Login</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('backend')}}/img/core-img/favicon.png">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="{{asset('backend/css')}}/style.css">

</head>

<body class="login-area">
<div class="main-content- h-100vh">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-sm-10 col-md-7 col-lg-5">
                <!-- Middle Box -->
                <div class="middle-box">
                    <div class="card">
                        <div
                            class="log-header-arae bg-img d-flex align-items-center p-3 primary-color-overlay height-130"
                            style="background-image: url( {{asset('backend')}}/img/bg-img/7.jpg)">
                            <!-- Logo -->
                            <h4 class="font-22 mb-0 text-white">Log in to your account.</h4>

                        </div>
                        <div class="card-body p-4">
                            <form action="{{route('admin.login')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="float-left" for="emailaddress">Email address</label>
                                    <input name="email" class="form-control @error('email') is-invalid @enderror"
                                           type="email"
                                           id="emailaddress"
                                           placeholder="Enter your email">
                                    @error('email') <span class="text-danger mt-2">{{$message}}</span> @enderror
                                </div>

                                <div class="form-group">
                                    <a href="forget-password.html" class="text-dark float-right"></a>
                                    <label class="float-left" for="password">Password</label>
                                    <input class="form-control @error('email') is-invalid @enderror" name="password"
                                           type="password" required=""
                                           id="password"
                                           placeholder="Enter your password">
                                    @error('password') <span class="text-danger mt-2">{{$message}}</span> @enderror
                                </div>

                                <div class="form-group d-flex justify-content-between align-items-center mb-3">
                                    <div class="checkbox d-inline mb-0">
                                        <input type="checkbox" name="checkbox-1" id="checkbox-8">
                                        <label for="checkbox-8" class="cr mb-0">Remember me</label>
                                    </div>
                                    <span class="font-13 text-primary"><a
                                            href="forget-password.html">Forgot password?</a></span>
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block" type="submit"> Log In</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

<!-- Must needed plugins to the run this Template -->
<script src="{{asset('backend')}}/js/jquery.min.js"></script>
<script src="{{asset('backend')}}/js/popper.min.js"></script>
<script src="{{asset('backend')}}/js/bootstrap.min.js"></script>
<script src="{{asset('backend')}}/js/bundle.js"></script>

<!-- Active JS -->
<script src="{{asset('backend')}}/js/default-assets/active.js"></script>
</body>
</html>
