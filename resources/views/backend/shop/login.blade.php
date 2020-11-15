<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    @notifyCss
    <link rel="stylesheet" href="{{asset('frontend/shop/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{asset('frontend/shop/js/a076d05399.js')}}"></script>
    <title>Merchant Login</title>
</head>
<body>
<div>
    <header class="merchant-header">
        <div class="container-custome">
            <a href="{{route('home')}}" style="width: 132px;height: 40px;display: block">
                <img style="width: 100%;object-fit: cover;height: 60px;"
                     src="{{upload_url('settings/logo/'.setting('logo'))}}" alt="">
            </a>
        </div>
    </header>
    <main class="main-box" style="display: flex; align-items: center; margin-top: 40px">
        <div class="container"
             style="background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);">
            <header style="color: #ffffff">Merchant Login</header>
            <div class="form-outer">
                <form action="{{route('shop.login.process')}}" id="shop-register" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="page">
                        <div class="field">
                            <div class="label" style="color: white">
                                Your Number
                            </div>
                            <input type="text" value="{{old('phone')}}" name="phone" required="required">
                            @error('phone') <span class="validation-text">{{$message}}</span> @enderror
                        </div>
                        <div class="field">
                            <div class="label" style="color: white">
                                Password
                            </div>
                            <input type="password" name="password" required="required">
                        </div>
                        <div class="field btns">
                            <button class="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
@notifyJs
<x:notify-messages/>
</body>
</html>
