@extends('frontend.layouts.fronted_master')
@section('main')
    <section class="quicktechl_home_slider" style="margin-bottom: 0">
        <!--Quicktech Home banner -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="#"><img src="{{upload_url('categories/'.$category->banner_image)}}" alt="subCatIMage"></a>
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
                <li>Sub Categories <span>|</span></li>
                <li>Products</li>
            </ul>
        </div>
    </section>

    <section class="quicktech-categories">
        <div class="container">

        </div>
        <div class="row">
            <style>
                /*----------------------------------------*/
                /*  7.2 roduct List Area CSS
                /*----------------------------------------*/
                .tab-menu {
                    float: left;
                }

                .tab-menu ul.nav-tabs {
                    border: medium none;
                    margin-bottom: 10px;
                }

                .tab-menu ul.nav-tabs > li a {
                    color: #353535;
                    cursor: pointer;
                    float: left;
                    font-size: 22px;
                    font-weight: 600;
                    line-height: 1;
                    padding: 0;
                    position: relative;
                    text-transform: uppercase;
                }

                .tab-menu ul.nav-tabs li.first-item a {
                    margin-left: 0;
                }

                .nav > li > a:hover {
                    background-color: rgba(0, 0, 0, 0);
                }

                .tab-menu ul.nav-tabs > li.active > a, .tab-menu ul.nav-tabs > li.active > a:focus, .tab-menu ul.nav-tabs > li.active > a:hover {
                    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
                    border: medium none;
                    color: #01a6a9;
                    cursor: pointer;
                }

                .tab-menu ul.nav-tabs > li > a {
                    border: medium none;
                    margin: 0 17px;
                }

                .tab-menu ul.nav-tabs li:last-child a {
                    margin-right: 0;
                }

                .new-label {
                    border: 1px dotted #01a6a9;
                    border-radius: 50%;
                    color: #01a6a9;
                    font-size: 18px;
                    font-weight: 600;
                    height: 56px;
                    line-height: 56px;
                    position: absolute;
                    right: 10px;
                    text-align: center;
                    top: 10px;
                    width: 56px;
                }

                .red-color {
                    border: 1px solid red;
                    color: red;
                }

                .product-img-content {
                    position: relative;
                }

                .rating-icon i {
                    color: #fac62a;
                }

                .product-content a {
                    color: #252525;
                    font-weight: 500;
                }

                .product-content a:hover {
                    color: #01a6a9;
                }

                .single-product:hover .product-img img {
                    box-shadow: 0 0 10px 6px rgba(0, 0, 0, 0.13);
                }

                .product-img img {
                    transition: all 0.4s ease 0s;
                    width: 100%;
                }

                .product-img a::before {
                    background: rgba(0, 0, 0, 0.5) none repeat scroll 0 0;
                    bottom: 10px;
                    content: "";
                    left: 10px;
                    position: absolute;
                    right: 10px;
                    top: 10px;
                    transform: scale(0);
                    transition: all 300ms ease 0s;
                }

                .product-img a {
                    position: relative;
                }

                /*.single-product:hover .product-img a:before {*/
                /*transform: scale(1);*/
                /*}*/
                .product-action {
                    /*background: #ffffff none repeat scroll 0 0;*/
                    border-radius: 2px;
                    left: 0;
                    margin: 0 auto;
                    opacity: 0;
                    padding: 5px 0;
                    position: absolute;
                    right: 0;
                    /*top: 68%;*/
                    transform: scale(1);
                    transition: all 0.3s ease 0s;
                    visibility: hidden;
                    width: 85%;
                }

                .add-action {
                    /*background: #ffffff none repeat scroll 0 0;*/
                    border-radius: 2px;
                    left: 0;
                    margin: 0 auto;
                    opacity: 0;
                    padding: 5px 0;
                    position: absolute;
                    right: 0;
                    top: 68%;
                    transform: scale(1);
                    transition: all 0.3s ease 0s;
                    visibility: hidden;
                    width: 85%;
                }

                .product-action a:first-child {
                    padding-left: 0;
                    color: black;
                }

                .product-action a:last-child {
                    border-right: medium none;
                    padding-right: 0;
                }

                .product-img:hover .add-action {
                    margin-top: -80px;
                    opacity: 1;
                    visibility: visible;
                }

                .product-img:hover .product-action {
                    margin-top: -30px;
                    opacity: 1;
                    visibility: visible;
                }

                .product-price span {
                    font-weight: 500;
                }

                .new-price {
                    color: #252525;
                    font-size: 18px;
                }

                .old-price {
                    color: #909090;
                    text-decoration: line-through;
                }

                .add-action h1 a {
                    color: black;
                    display: block;
                    text-align: center;
                }

                .product-action a:hover {
                    color: black;
                }

                .buttonn {
                    font-family: 'Droid Sans', sans-serif;
                    /*-webkit-border-radius: 25px;*/
                    /*-moz-border-radius: 25px;*/
                    /*border-radius: 25px;*/
                    /*margin: 40px;*/
                    margin-top: 10px;
                    margin-bottom: 20px;
                    border: 1px solid rgba(0, 0, 0, 0.4);
                    box-shadow: inset 0 1px 0 0 rgba(255, 255, 255, 0.5),
                    0 0 1px 1px rgba(255, 255, 255, 0.8),
                    0 0 0 6px rgba(0, 0, 0, 0.06),
                    0 0 0 3px rgba(0, 0, 0, 0.1);
                    cursor: pointer;
                }

                .title {
                    padding: 5px;
                    color: #fff;
                    font-weight: 800;
                    /*font-size: 20px;*/
                    text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
                    text-transform: uppercase;
                }

                /* colors */
                .yellow {
                    background: rgb(255, 214, 94);
                    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZDY1ZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZWJmMDQiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
                    background: -moz-linear-gradient(top, rgba(255, 214, 94, 1) 0%, rgba(254, 191, 4, 1) 100%);
                    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(255, 214, 94, 1)), color-stop(100%, rgba(254, 191, 4, 1)));
                    background: -webkit-linear-gradient(top, rgba(255, 214, 94, 1) 0%, rgba(254, 191, 4, 1) 100%);
                    background: -o-linear-gradient(top, rgba(255, 214, 94, 1) 0%, rgba(254, 191, 4, 1) 100%);
                    background: -ms-linear-gradient(top, rgba(255, 214, 94, 1) 0%, rgba(254, 191, 4, 1) 100%);
                    background: linear-gradient(top, rgba(255, 214, 94, 1) 0%, rgba(254, 191, 4, 1) 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd65e', endColorstr='#febf04', GradientType=0);
                }

                .product-img:hover {
                    background: black;
                    opacity: 50%;
                }

                .yellow:hover {
                    background: rgb(254, 191, 4);
                    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZlYmYwNCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmQ2NWUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
                    background: -moz-linear-gradient(top, rgba(254, 191, 4, 1) 0%, rgba(255, 214, 94, 1) 100%);
                    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(254, 191, 4, 1)), color-stop(100%, rgba(255, 214, 94, 1)));
                    background: -webkit-linear-gradient(top, rgba(254, 191, 4, 1) 0%, rgba(255, 214, 94, 1) 100%);
                    background: -o-linear-gradient(top, rgba(254, 191, 4, 1) 0%, rgba(255, 214, 94, 1) 100%);
                    background: -ms-linear-gradient(top, rgba(254, 191, 4, 1) 0%, rgba(255, 214, 94, 1) 100%);
                    background: linear-gradient(top, rgba(254, 191, 4, 1) 0%, rgba(255, 214, 94, 1) 100%);
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#febf04', endColorstr='#ffd65e', GradientType=0);
                }
            </style>
            <div class="product-list tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="arrival">
                    @foreach($products as $key=>$product)
                    <div class="col-md-3 col-sm-4">

                            <div class="single-product mb-40">
                                <div class="product-img-content mb-20">
                                    <div class="product-img">
                                        <img src="{{upload_url('products/'.collect($product->images)->first())}}"
                                             alt="proImage" style="border: 1px solid gainsboro">
                                        <div class="add-action">
                                            <h1>
                                                <a href="#">Add To Bag</a>
                                            </h1>
                                        </div>
                                        <div class="product-action text-center">
                                        </div>

                                    </div>

                                    <span class="new-label text-uppercase">-{{$product->price - $product->discount}}</span>

                                </div>
                                <div class="product-content text-center text-uppercase">
                                            <a style="color: #01a6a9;" href="#" title="Quick view" data-toggle="modal"
                                               data-target="#productModal-{{$product->id}}">View Details</a>
                                        <br>
                                    <a href="product-details.html" title="Ripcurl Furry Fleece">{{$product->name}}</a>
                                    <div class="rating-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="product-price">
                                        <del><span class="new-price">{{$product->price}}</span></del>
                                        <span class="new-price">{{$product->discount}}</span>
                                    </div>
                                    <a href="{{route('addToCart',$product->id)}}" class="buttonn yellow"
                                       style="width: 100%;display: block">
                                        <div class="title">Add to cart</div>
                                    </a>
                                </div>
                            </div>
                            <style>
                                #productModal .modal-dialog {
                                    margin: 5% auto;
                                    max-width: 96%;
                                    min-height: 300px;
                                    padding: 20px;
                                    transition: all 0.5s ease 0s;
                                    width: 965px;
                                }

                                #productModal .modal-header {
                                    border: 0 none;
                                    min-height: auto;
                                    padding: 0;
                                }

                                #productModal button.close {
                                    opacity: 1;
                                    position: absolute;
                                    right: 10px;
                                    top: 10px;
                                    transition: all 0.3s ease 0s;
                                    z-index: 2;
                                }

                                #productModal button.close span {
                                    border: 1px solid #909295;
                                    border-radius: 60px;
                                    color: #909295;
                                    display: block;
                                    height: 30px;
                                    line-height: 30px;
                                    padding-top: 1px;
                                    text-align: center;
                                    width: 30px;
                                }

                                .modal-product {
                                    overflow: hidden;
                                }

                                .modal-product .single-product-image {
                                    float: left;
                                    width: 40%;
                                }

                                .modal-product .product-details-content {
                                    float: left;
                                    padding-left: 30px;
                                    width: 60%;
                                }

                                .modal-product .single-product-image div.pro-view {
                                    width: 22%;
                                }
                            </style>
                            <div id="quickview-wrapper">
                                <!-- Modal -->
                                <div class="modal fade" id="productModal-{{$product->id}}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modal-product">
                                                    <div class="single-product-image">
                                                        <div id="product-img-content">
                                                            <div id="my-tab-content" class="tab-content mb-20">
                                                                <div class="tab-pane b-img active" id="view1">
                                                                    <a class="venobox" href="#" data-gall="gallery"
                                                                       title="">
                                                                        <img
                                                                                src="{{upload_url('products/'.collect($product->images)->first())}}"
                                                                                alt="proImage"></a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-details-content">
                                                        <div class="product-content text-uppercase">
                                                            <a href="#"
                                                               title="Slim Shirt With Stretch">{{$product->name}}</a>
                                                            <div class="rating-icon pb-20 mt-10">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                            </div>
                                                            <div class="product-price pb-20">
                                                                <span class="new-price">TK {{$product->discount}}</span>
                                                                <span class="old-price">TK {{$product->price}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-view pb-20">
                                                            <h4 class="product-details-tilte text-uppercase">
                                                                overview</h4>
                                                            <p>{!! $product->short_description !!}</p>
                                                        </div>

                                                        <div class="product-attributes clearfix">
                                                            <div class="pull-left" id="quantity-wanted">
                                                                <h4 class="product-details-tilte text-uppercase pb-10">
                                                                    quantity</h4>
                                                                <input type="number" value="1">
                                                            </div>
                                                        </div>
                                                        <div class="product-action-shop mb-30">
                                                            <a href="{{route('addToCart',$product->id)}}" class="buttonn yellow"
                                                               style="width: 100%;display: block;text-align: center">
                                                                <div class="title">Add to cart</div>
                                                            </a>
                                                        </div>
                                                        <style>
                                                            .socialsharing-product button {
                                                                background: transparent none repeat scroll 0 0;
                                                                border: 1px solid #01a6a9;
                                                                border-radius: 50%;
                                                                color: #01a6a9;
                                                                height: 30px;
                                                                line-height: 30px;
                                                                margin-right: 6px;
                                                                transition: all 0.3s ease 0s;
                                                                width: 30px;
                                                            }
                                                        </style>
                                                        <div class="socialsharing-product">
                                                            <h4 class="product-details-tilte text-uppercase"
                                                                style="padding-bottom: 10px">share
                                                                this on</h4>
                                                            <button type="button"><i class="fa fa-facebook"></i>
                                                            </button>
                                                            <button type="button"><i class="fa fa-instagram"></i>
                                                            </button>
                                                            <button type="button"><i class="fa fa-google-plus"></i>
                                                            </button>
                                                            <button type="button"><i class="fa fa-twitter"></i></button>
                                                            <button type="button"><i class="fa fa-pinterest"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!-- .product-info -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--Quickview Product Start -->
@stop
