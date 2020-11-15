<div class="quicktechl_banner_nav_left widget-sidebar">
    <nav class="navbar nav_bottom ">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                    data-target="#bs-megadropdown-tabs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav nav_1">
                <h3>Promotions</h3>
                <li><a href="#"> Offers</a></li>

                <li><a href="#"> Discounts</a></li>


            </ul>


            <ul class="nav navbar-nav nav_1 panel-group" id="accordion" role="tablist"
                aria-multiselectable="true">
                <h3>All Categories</h3>
                <li><a href="#"><img src="{{asset('frontend/images/c1.png')}}" alt=""> Winter
                        Collection</a></li>
                <li><a href="#"><img src="{{asset('frontend/images/c2.png')}}" alt=""> Flash Sales </a>
                </li>
                <li>
                    <a href="#sidebar-link-mycomponents1" data-toggle="collapse" aria-expanded="true"
                       class="dropdown-toggle firsticon">
                        <img src="{{asset('frontend/img/wholesale.png')}}" alt="" style="width:30px"> <span> Whole Sale  <i
                                    class="fa fa-angle-right"></i></span>
                    </a>
                    <ul class="navigate collapse list-unstyled" id="sidebar-link-mycomponents1">
                        @foreach(App\Models\Category::orderBy('name','asc')->where('category_id',NULL)->get() as $parent)
                        <li><a href="{{route('wholesale_shop',$parent->id)}}">{{$parent->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="#sidebar-link-mycomponents2" data-toggle="collapse" aria-expanded="true"
                       class="dropdown-toggle firsticon">
                        <img src="{{asset('frontend/img/retail.jpg')}}" alt="" style="width:30px"> <span> Retail  <i
                                    class="fa fa-angle-right"></i></span>
                    </a>
                    <ul class="navigate collapse list-unstyled" id="sidebar-link-mycomponents2">
                        @foreach(App\Models\Category::orderBy('name','desc')->where('category_id',NULL)->get() as $parent)
                            <li><a href="{{route('retail_shop',$parent->id)}}">{{$parent->name}}</a></li>
                        @endforeach
                    </ul>
                </li>



            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div>