<div class="ecaps-sidemenu-area">
    <!-- Desktop Logo -->
    <div class="ecaps-logo bg-dark">
        <a href="{{route('merchant.dashboard')}}">
            <img src="{{upload_url('shop/profile/'.auth()->user()->image)}}" alt="profileImage"
                 style="display: block;margin-left: auto;margin-top: 5px;margin-right: auto;width: 50%;margin-bottom: 10px; object-fit: cover; object-position: center">
        </a>
    </div>
    <!-- Side Nav -->
    <div class="ecaps-sidenav  menu-collasped-active" id="ecapsSideNav">
        <!-- Side Menu Area -->
        <div class="side-menu-area" style="margin-top: 0">
            <!-- Sidebar Menu -->
            <nav>
                <h4 class="text-center bg-gray" style="padding: 5px 0;color: #353131;">
                    {{auth()->user()->merchant->category->name}}
                </h4>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="active"><a href="{{route('merchant.dashboard')}}"><i
                                class='bx bx-home-heart'></i><span>Dashboard</span></a></li>
                    <li><a href="{{route('merchant.settings')}}"><i
                                class='fa fa-cogs'></i><span>Settings</span></a></li>
                    <li><a href="{{route('merchant.orders')}}"><i
                                class='bx bx-money'></i><span>Orders</span></a></li>
                    <li><a href="{{route('merchant.message')}}">
                            <i class='bx bx-message'></i>
                            <span>Messages</span></a>
                    </li>
                    <li><a href="{{route('merchant.payment.request')}}">
                            <i class='bx bxs-send'></i>
                            <span>Payment Request</span></a>
                    </li>
                    <li><a href="{{route('merchant.payments')}}">
                            <i class='bx bx-money'></i>
                            <span>Payment History</span></a>
                    </li>
                    <li><a href="{{route('merchant.products')}}">
                            <i class='fa fa-cube'></i>
                            <span>Products</span></a>
                    </li>
                    <li><a href="{{route('merchant.returns')}}">
                            <i class='fa fa-repeat'></i>
                            <span>Returns</span></a>
                    </li>


                </ul>
            </nav>
        </div>
    </div>
</div>
