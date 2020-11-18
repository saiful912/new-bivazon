@extends('frontend.layouts.fronted_master')
@section('main')
    <!--quicktechl_wholesale_banner-->
    <section class="quicktechl_home_slider" style="margin-bottom: 0">
        <!--Quicktech Home banner -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="#"><img src="{{upload_url('categories/'.$category->banner_image)}}" alt=""></a>
                </div>
            </div>
            <!-- The Modal -->
        </div>
        <!--//Quicktech Home banner -->
    </section>
    {{--wholesale_category--}}
    <section class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('home')}}">Home</a><span>|</span></li>
                <li>Wholesale <span>|</span></li>
                <li>Shop</li>
            </ul>
        </div>
    </section>

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
    <section class="gallery-block cards-gallery">
        <h2 style="text-align: center;margin-bottom: 20px">{{$category->name}} Whole Sale Shop</h2>
        <div class="container-fluid">
            <div class="row">
                @foreach($category->merchants as $merchant)
                    @if($merchant->shop_type=='wholesale')
                        {{--@if(\App\Models\User::where('status',1)->get())--}}
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0 transform-on-hover">
                                <div class="card-body">

                                    <h6>
                                        <a href="{{route('subcategories_wholesale',['id'=>$category->id,'shop_id'=>$merchant->id])}}" style="padding-top: 5px;
padding-bottom: 5px;display: block">
                                            {{$merchant->shop_name}}
                                        </a>
                                    </h6>
                                    {{--<p style="margin-bottom: 10px">Propiter: {{$merchant->user->full_name}}</p>--}}
                                </div>
                                <a class="lightbox" href="{{route('subcategories_wholesale',['id'=>$category->id,'shop_id'=>$merchant->id])}}">
                                    <img src="{{upload_url('/shop/banner_image/'.$merchant->shop_banner)}}" alt="Card Image" class="card-img-top"
                                         style="width: 100%">
                                </a>

                            </div>
                        </div>
                            {{--@else--}}
                            {{--<div class="alert alert-danger">--}}
                                {{--There are nothing product in this Category--}}
                            {{--</div>--}}
                            {{--@endif--}}
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@stop
