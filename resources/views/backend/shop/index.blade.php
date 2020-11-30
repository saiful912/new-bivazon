<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('frontend/shop/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('frontend/img/png.jpg')}}"
          type="#" sizes="16x16">
    <script src="{{asset('frontend/shop/js/a076d05399.js')}}"></script>
    <title>Shop Registration</title>
</head>
<body>
<div style=" background: url({{asset('img/registar.jpg')}});">
    <header class="merchant-header">
        <div class="container-custome">
            <div style="width: 132px">
                <a href="{{url('/')}}">
                    <img style="width: 100%;object-fit: cover" src="{{asset('frontend/img/logo4.png')}}" alt="">
                </a>

            </div>
        </div>
    </header>
    <main class="main-box">
        <div class="container">
            <header>Shop Registration</header>
            <div class="progress-bar">
                <div class="step">
                    <p style="font-size: medium">Shop Type</p>
                    <div class="bullet">
                        <span>1</span>
                    </div>
                    <div class="check fas fa-check">
                    </div>
                </div>
                <div class="step">
                    <p style="font-size: medium">Store Name</p>
                    <div class="bullet">
                        <span>2</span>
                    </div>
                    <div class="check fas fa-check">
                    </div>
                </div>
                <div class="step">
                    <p>
                        Submit</p>
                    <div class="bullet">
                        <span>4</span>
                    </div>
                    <div class="check fas fa-check">
                    </div>
                </div>
            </div>
            <div class="form-outer">
                <form action="{{route('shop.create')}}" id="shop-register" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="page slide-page">
                        <div class="title">
                            Shop:
                        </div>
                        <div class="field">
                            <div class="label">
                                Category
                            </div>
                            <select required="required" name="category_id"
                                    class="@error('category_id') input-validation @enderror">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{ucfirst($category->name)}}</option>
                                @endforeach
                            </select>
                            @error('category_id') <span class="validation-text">{{$message}}</span> @enderror
                        </div>

                        <div class="field">
                            <div class="label">
                                Sale Type
                            </div>
                            <select name="type" required="required">
                                <option value="wholesale">Whole seller</option>
                                <option value="retail">Retail seller</option>
                            </select>
                            @error('type') <span class="validation-text">{{$message}}</span> @enderror
                        </div>
                        <div class="field">
                            <button type="button" class="firstNext next">Next</button>
                        </div>
                    </div>
                    <div class="page">
                        <div class="title">
                            Shop Info
                        </div>
                        <div class="field">
                            <div class="label">
                                Your Name
                            </div>
                            <input required="required" type="text" name="full_name" placeholder="Enter Your Name">
                            @error('full_name') <span class="validation-text">{{$message}}</span> @enderror
                        </div>
                        <div class="field">
                            <div class="label">
                                Store Name
                            </div>
                            <input required="required" type="text" name="shop_name" placeholder="Enter Your shop">
                            @error('shop_name') <span class="validation-text">{{$message}}</span> @enderror
                        </div>
                        <div class="field">
                            <div class="label">
                                Shopkeeper Image
                            </div>
                            <input type="file" name="image" required="required">
                            @error('image') <span class="validation-text">{{$message}}</span> @enderror
                        </div>
                        <div class="field btns">
                            <button type="button" class="prev-1 prev" style="width: 40%;float: left">Previous</button>
                            <button type="button" class="next-1 next" style="width: 40%;float: right">Next</button>
                        </div>
                    </div>
                    <div class="page">
                        <div class="title">
                            Shop keeper
                        </div>
                        <div class="field">
                            <div class="label">
                                Your Number
                            </div>
                            <input type="text" name="phone" required="required">
                            @error('phone') <span class="validation-text">{{$message}}</span> @enderror
                        </div>
                        <div class="field">
                            <div class="label">
                                Password
                            </div>
                            <input type="password" name="password" required="required">
                        </div>
                        <div class="field">
                            <div class="label">
                                Confirm Password
                            </div>
                            <input name="password_confirmation" id="confirm_password" type="password" required>
                        </div>
                        <div class="field btns">
                            <button type="button" class="prev-2 prev" style="width: 40%;float: left">Previous</button>
                            <button class="submit" style="width: 40%;float: right">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
<script>
    const slidePage = document.querySelector(".slide-page");
    const nextBtnFirst = document.querySelector(".firstNext");
    const prevBtnSec = document.querySelector(".prev-1");
    const nextBtnSec = document.querySelector(".next-1");
    const prevBtnThird = document.querySelector(".prev-2");
    const prevBtnFourth = document.querySelector(".prev-3");
    const submitBtn = document.querySelector(".submit");
    const progressText = [...document.querySelectorAll(".step p")];
    const progressCheck = [...document.querySelectorAll(".step .check")];
    const bullet = [...document.querySelectorAll(".step .bullet")];
    let max = 4;
    let current = 1;
    nextBtnFirst.addEventListener("click", function () {
        slidePage.style.marginLeft = "-25%";
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
    });
    nextBtnSec.addEventListener("click", function () {
        slidePage.style.marginLeft = "-50%";
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
    });
    submitBtn.addEventListener("click", function (e) {
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
        setTimeout(function () {
            document.getElementById('shop-register').submit();
        }, 100);
    });
    prevBtnSec.addEventListener("click", function () {
        slidePage.style.marginLeft = "0%";
        bullet[current - 2].classList.remove("active");
        progressCheck[current - 2].classList.remove("active");
        progressText[current - 2].classList.remove("active");
        current -= 1;
    });
    prevBtnThird.addEventListener("click", function () {
        slidePage.style.marginLeft = "-25%";
        bullet[current - 2].classList.remove("active");
        progressCheck[current - 2].classList.remove("active");
        progressText[current - 2].classList.remove("active");
        current -= 1;
    });
    prevBtnFourth.addEventListener("click", function () {
        slidePage.style.marginLeft = "-50%";
        bullet[current - 2].classList.remove("active");
        progressCheck[current - 2].classList.remove("active");
        progressText[current - 2].classList.remove("active");
        current -= 1;
    });
</script>
</body>
</html>
