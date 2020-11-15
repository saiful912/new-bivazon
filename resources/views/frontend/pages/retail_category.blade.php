@extends('frontend.layouts.fronted_master')
@section('main')
    <!--quicktechl_wholesale_banner-->
    <section class="quicktechl_home_slider" style="margin-bottom: 0">
        <!--Quicktech Home banner -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="#"><img src="{{asset('frontend/img/retail_banner.jpg')}}" alt=""></a>
                </div>
            </div>
            <!-- The Modal -->
        </div>
        <!--//Quicktech Home banner -->
    </section>
    <section class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('home')}}">Home</a><span>|</span></li>
                <li>Retail<span>|</span></li>
                <li>Category </li>
            </ul>
        </div>
    </section>
    {{--wholesale_category--}}

    <style>
        .gallery-block{
            padding-bottom: 20px;
            padding-top: 10px;
        }

        .gallery-block .heading{
            margin-bottom: 50px;
            text-align: center;
        }

        .gallery-block .heading h2{
            font-weight: bold;
            font-size: 1.4rem;
            text-transform: uppercase;
        }

        .gallery-block.cards-gallery h6 {
            font-size: 17px;
            font-weight: bold;
            margin-top: 6px;
        }

        .gallery-block.cards-gallery .card{
            transition: 0.4s ease;
        }

        .gallery-block.cards-gallery .card img {
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15);
            width: 100%;
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
    <section class="gallery-block cards-gallery">
        <h2 style="text-align: center;margin-bottom: 20px">Retail</h2>
        <div class="container-fluid">

            <div class="row">
                <div class="row">
                    @foreach($categories as $category)
                        <div class="col-md-6 col-lg-3">
                            <div class="card border-0 transform-on-hover">
                                <a class="lightbox" href="{{route('retail_shop',$category->id)}}">
                                    <img src="{{upload_url('categories/'.$category->image)}}" alt="Card Image" class="card-img-top">
                                </a>
                                <div class="card-body">
                                    <h6><a href="{{route('retail_shop',$category->id)}}">{{$category->name}}</a></h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@stop