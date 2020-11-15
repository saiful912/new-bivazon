@extends('frontend.layouts.fronted_master')
@section('main')
    <!--quicktechl_wholesale_banner-->
    <section class="quicktechl_home_slider" style="margin-bottom: 0">
        <!--Quicktech Home banner -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="#"><img src="{{upload_url('categories/'.$category->banner_image)}}" alt="bannerImage"></a>
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
                <li>Retail <span>|</span></li>
                <li>Item </li>
            </ul>
        </div>
    </section>

    <section class="quicktech-categories">
        <div class="row">
            <h2 style="text-align: center;margin-bottom: 20px">{{$category->name}} Available Item</h2>
            @foreach($categories as $child)
            <div class="col-md-2 col-lg-2 col-sm-4 col-xs-6">
                <div class="item">
                    <a href="{{route('retail_products',['id'=>$child->id, 'shop_id'=>$user->id])}}">
                        <img src="{{upload_url('categories/'.$child->image)}}" alt="subCatImg">
                        <p>{{$child->name}}</p>
                    </a>
                </div>
            </div>
                @endforeach
        </div>
    </section>
@stop