<!DOCTYPE html>
<html>
<head>
    <title>Bivazon | Create An Affiliate User</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <style>
        .divider-text {
            position: relative;
            text-align: center;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .divider-text span {
            padding: 7px;
            font-size: 12px;
            position: relative;
            z-index: 2;
        }
        .divider-text:after {
            content: "";
            position: absolute;
            width: 100%;
            border-bottom: 1px solid #ddd;
            top: 55%;
            left: 0;
            z-index: 1;
        }
    </style>
</head>

<body>
<div class="container">
    <header class="merchant-header" style="background: #ee534f">
        <div class="container-custome">
            <div style="width: 132px">
                <a href="{{url('/')}}">
                    <img style="width: 100%;object-fit: cover;margin-left: 20px" src="{{asset('frontend/img/logo4.png')}}" alt="">
                </a>

            </div>
        </div>
    </header>
<div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Create An Affiliate Account</h4>
        <p class="text-center">Get started with your free account</p>
        <form action="{{route('affiliate.register')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-shopping-bag"></i> </span>
                </div>
                <select class="form-control" name="type" required="required">
                    <option value="affiliate">Affiliate</option>
                </select>
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="full_name" class="form-control" placeholder="Full name" type="text" required>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="email" class="form-control" placeholder="Email address" type="email" required>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <input name="phone" class="form-control" placeholder="Phone number" type="text" required>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-paperclip" aria-hidden="true"></i></span>
                </div>
                <input name="ref_url" class="form-control" placeholder="Ref Url" type="text" required>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-upload" aria-hidden="true"></i></span>
                </div>
                <input name="image" class="form-control" placeholder="Profile Image" type="file" required>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="password" class="form-control" placeholder="Create password" type="password">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="password_confirmation" class="form-control" placeholder="Repeat password" type="password">
            </div> <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
            </div> <!-- form-group// -->
            <p class="text-center">Have an account? <a href="{{route('affiliate.login')}}">Log In</a> </p>
        </form>
    </article>
</div> <!-- card.// -->

</div>
<!--container end.//-->
</body>
</html>

