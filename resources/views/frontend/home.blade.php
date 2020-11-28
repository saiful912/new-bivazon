@extends('frontend.layouts.fronted_master')
@section('main')
    <style>
        .gallery-block {
            padding-bottom: 20px;
            padding-top: 10px;
        }

        .gallery-block .heading {
            margin-bottom: 50px;
            text-align: center;
        }

        .gallery-block .heading h2 {
            font-weight: bold;
            font-size: 1.4rem;
            text-transform: uppercase;
        }

        .gallery-block.cards-gallery h6 {
            font-size: 17px;
            font-weight: bold;
            margin-top: 6px;
        }

        .gallery-block.cards-gallery .card {
            transition: 0.4s ease;
            border-radius: 10px;
        }

        .gallery-block.cards-gallery .card img {
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15);
            width: 100%;
            border-radius: 10px;
        }

        .gallery-block.cards-gallery .card-body {
            text-align: center;
        }

        .gallery-block.cards-gallery .card-body p {
            font-size: 15px;
        }

        .gallery-block.cards-gallery a {
            color: #212529;
        }

        .gallery-block.cards-gallery a:hover {
            text-decoration: none;
        }

        .gallery-block.cards-gallery .card {
            margin-bottom: 30px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15);
        }

        @media (min-width: 576px) {

            .gallery-block .transform-on-hover:hover {
                transform: translateY(-10px) scale(1.02);
                box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.15) !important;
            }
        }
    </style>
    <section class="quicktechl_home_slider">
        <!--Quicktech Home banner -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->

            <div class="carousel-inner" role="listbox">
                @foreach($sliders as $key=>$slider)
                    <div class="item {{$loop->index == 0 ? 'active' : ''}}">
                        <a href="#"><img src="{{asset('img/slider/'.$slider->image)}}" alt=""></a>
                    </div>
                @endforeach
            </div>
            <!-- The Modal -->
        </div>
        <!--//Quicktech Home banner -->
    </section>

    <!--quicktech-home-first-add -->
    <section class="quicktech-home-first-add">
        <!-- // offer banner -->
        <h2 style="margin-bottom: 30px;text-align: center">Our sales Type </h2>
        <div class="sale-button">
            <div class="row">
                <style>
                    .saleBox {
                        width: 100%;
                        border: 1px solid #d4d4d4;
                        float: left;
                        margin-bottom: 20px;
                        -webkit-border-radius: 3px;
                        -moz-border-radius: 3px;
                        border-radius: 3px;
                    }
                </style>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <a href="{{route('categories_wholesale')}}" class="btn-style btn-wholesale text-center" style="width: 100%;
    margin-bottom: 20px; font-size: 40px;color: dimgrey">
                        <div class="saleBox">
                            <div class="saleName">WholeSale
                                <i class="fa fa-home" style="color: burlywood;"></i>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <a href="{{route('categories_retail')}}" class="btn-style btn-wholesale text-center" style="width: 100%;
    margin-bottom: 20px;  font-size: 40px;color: dimgrey">
                        <div class="saleBox">
                            <div class="saleName">Retail
                                <i class="fa fa-home" style="color: burlywood;"></i>
                            </div>

                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="offer-banner">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <a href="#"><img src="{{asset('frontend/img/wholess.jpg')}}" alt=""></a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">

                    <a href="#">
                        <img src="{{asset('frontend/img/retails.jpg')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- // offer banner -->
    </section>
    <!--//quicktech-home-first-add -->
    <section class="gallery-block cards-gallery">
        <h2 style="text-align: center;margin-bottom: 20px">Whole Sale</h2>
        <div class="#">

            <div class="row">
                @foreach(App\Models\Category::orderBy('name','desc')->where('category_id',NULL)->get() as $category)
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 transform-on-hover">
                            <a class="lightbox" href="{{route('wholesale_shop',$category->id)}}">
                                <img src="{{upload_url('categories/'.$category->banner_image)}}" alt="Card Image"
                                     class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h6><a href="{{route('wholesale_shop',$category->id)}}">{{$category->name}}</a></h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="gallery-block cards-gallery">
        <h2 style="text-align: center;margin-bottom: 20px">Retail</h2>
        <div class="#">

            <div class="row">
                @foreach(App\Models\Category::orderBy('name','asc')->where('category_id',NULL)->get() as $category)
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 transform-on-hover">
                            <a class="lightbox" href="{{route('retail_shop',$category->id)}}">
                                <img src="{{upload_url('categories/'.$category->banner_image)}}" alt="Card Image"
                                     class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h6><a href="{{route('retail_shop',$category->id)}}">{{$category->name}}</a></h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="gallery-block cards-gallery">
        <h2 style="text-align: center;margin-bottom: 20px">Whole Seller Shop</h2>
        <div class="#">
            <div class="row">
                @foreach($users as $user)
                    @if($user->merchant->shop_type == 'wholesale')
                        {{--@if($user->merchant_id > 0)--}}
                    <div class="col-md-6 col-lg-3 col-xs-12">
                        <div class="card border-0 transform-on-hover">
                            <div class="card-body">

                                <h6><a href="{{route('merchant.subcategory',$user->id)}}" style="padding-top: 5px;padding-bottom: 5px;display: block">
                                        {{$user->merchant->shop_name}}
                                    </a></h6>

                            </div>
                            <a class="lightbox" href="{{route('merchant.subcategory',$user->id)}}">
                                <img src="{{upload_url('/shop/banner_image/'.$user->merchant->shop_banner)}}" alt="Card Image" class="card-img-top">
                            </a>

                        </div>
                    </div>
                        @endif
                    {{--@endif--}}
                @endforeach
            </div>
        </div>
    </section>
    <section class="gallery-block cards-gallery">
        <h2 style="text-align: center;margin-bottom: 20px">Retail Seller Shop</h2>
        <div class="#">
            <div class="row">
                @foreach($users as $user)
                    @if($user->merchant->shop_type == 'retail')
                        {{--@if($user->merchant_id > 0)--}}
                        <div class="col-md-6 col-lg-3 col-xs-12">
                            <div class="card border-0 transform-on-hover">
                                <div class="card-body">

                                    <h6><a href="{{route('merchant.subcategory',$user->id)}}" style="padding-top: 5px;padding-bottom: 5px;display: block">
                                            {{$user->merchant->shop_name}}
                                        </a></h6>

                                </div>
                                <a class="lightbox" href="{{route('merchant.subcategory',$user->id)}}">
                                    <img src="{{upload_url('/shop/banner_image/'.$user->merchant->shop_banner)}}" alt="Card Image" class="card-img-top">
                                </a>

                            </div>
                        </div>
                    @endif
                    {{--@endif--}}
                @endforeach
            </div>
        </div>
    </section>
    <section class="quicktech-home-second-add">
        <!--offer banner -->

        <h2 style="    text-align: center; margin: 30px;">How to order from Bivazon ?</h2>
        <section class="quicktechl_home_slider">
            <!-- Home banner -->
            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a href="#"><img src="{{asset('frontend/img/b1.png')}}" alt=""></a>
                    </div>
                    <div class="item ">
                        <a href="#"><img src="{{asset('frontend/img/b2.png')}}" alt=""></a>
                    </div>
                    <div class="item ">
                        <a href="#"><img src="{{asset('frontend/img/b3.png')}}" alt=""></a>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!-- The Modal -->
            </div>
            <!--//Quicktech Home banner -->
        </section>
        <!-- // offer banner -->
    </section>
    <!--Quicktech testimonials -->

    <section class="gallery-block cards-gallery" >
        {{--<div class="">--}}
            <h3 class="text-center">Customers Feedback</h3>
        <div class="container" style="margin: 3rem 0 0;">
            <div class="row">
                <div class="col-md-6 col-xs-12" style="margin-bottom: 10px">
                    <form action="{{route('admin.feedback.store')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <h5><label for="name" style="margin-bottom: 5px">Name</label></h5>

                            <input type="text" name="name" class="form-control" tabindex="2"
                                   placeholder="Enter your Name" required>
                        </div>
                        <div class="form-group">
                            <h5><label for="email" style="margin-bottom: 5px">Email</label></h5>

                            <input type="email" name="email" class="form-control" tabindex="2"
                                   placeholder="Enter your email address" required>
                        </div>

                        <div class="form-group">
                            <h5><label for="message" style="margin-bottom: 5px">Message</label>
                            </h5>

                            <textarea type="text" name="message" class="form-control"
                                      tabindex="4" placeholder="Write your details" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block"
                                tabindex="5">Submit
                        </button>
                    </form>
                </div>
                @foreach($feedbacks as $feedback)
                    <div class="col-md-6 col-xs-12" >
                        <div>
                            <img src="{{asset('frontend/images/t1.png')}}" alt="" style="border-radius: 50%;background: #ee534f;">
                            <span>Name : {{$feedback->name}}</span>
                        </div>
                        <div>
                            <span>Email : {{$feedback->email}}</span>
                        </div>

                        <p>
                            {{$feedback->message}}
                        </p>

                    </div>
                @endforeach
            </div>
        </div>

    </section>
    <!-- // Quicktech testimonials -->



@endsection
