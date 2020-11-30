<div class="ecaps-sidemenu-area">
    <!-- Desktop Logo -->
    <div class="ecaps-logo bg-dark">
        <a href="{{route('dashboard')}}">
            <img src="{{upload_url('shop/profile/'.auth()->user()->image)}}" alt="profileImage"
                 style="display: block;margin-left: auto;margin-top: 5px;margin-right: auto;width: 50%;margin-bottom: 10px; object-fit: cover; object-position: center">
        </a>
    </div>

    <!-- Side Nav -->
    <div class="ecaps-sidenav  menu-collasped-active" id="ecapsSideNav">
        <!-- Side Menu Area -->
        <div class="side-menu-area">
            <!-- Sidebar Menu -->
            <nav>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="active"><a href="{{route('dashboard')}}"><i
                                class='bx bx-home-heart'></i><span>Dashboard</span></a></li>
                    <li><a href="{{route('orders')}}"><i
                                class='bx bx-money'></i><span>Orders</span></a></li>
                    <li><a href="{{route('admin.payment.request')}}"><i
                                class='bx bx-git-pull-request'></i><span>Payment Request</span></a></li>
                    <li><a href="{{route('admin.message')}}"><i
                                class='bx bx-message'></i><span>Messages</span></a></li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class='bx bx-briefcase-alt-2'></i> <span>Whole</span> <i
                                class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('wholesale.orders')}}">Wholesale Order</a></li>
                            <li><a href="{{route('wholesale.categories')}}">Wholesale Category</a></li>
                            <li><a href="{{route('wholesale.products')}}">Products</a></li>
                            <li><a href="{{route('wholesale.merchant.request')}}">New Merchant Request</a></li>
                            <li><a href="{{route('wholesale.all_merchant')}}">All Merchant</a></li>
                            <li><a href="{{route('wholesale.payment_history')}}">Payment History</a></li>
                            <li><a href="{{route('wholesale.returns')}}">Return Product</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class='bx bx-briefcase-alt-2'></i> <span>Retail</span> <i
                                class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('retail.orders')}}">Retail Order</a></li>
                            <li><a href="{{route('retail.categories')}}">Retail Category</a></li>
                            <li><a href="{{route('retail.products')}}">Products</a></li>
                            <li><a href="{{route('retail.merchant.request')}}">New Merchant Request</a></li>
                            <li><a href="{{route('retail.all_merchant')}}">All Merchant</a></li>
                            <li><a href="{{route('retail.payment_history')}}">Payment History</a></li>
                            <li><a href="{{route('retail.returns')}}">Return Product</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="fa fa-cube"></i> <span>Products</span> <i
                                class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('product.create')}}">Add New Product</a></li>
                            <li><a href="{{route('products')}}">View Products</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="bx bx-file"></i><span>Category</span> <i
                                class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('category.create')}}">Add Category</a></li>
                            <li><a href="{{route('categories')}}">View Category</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="bx bxs-home"></i> <span>District</span> <i
                                class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('district.create')}}">Add District</a></li>
                            <li><a href="{{route('districts')}}">View Districts</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="bx bxs-truck"></i> <span>Courier</span> <i
                                class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('courier.create')}}">Add Courier</a></li>
                            <li><a href="{{route('couriers')}}">View Couriers</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('sliders')}}"><i class="bx bxs-bolt-circle"></i> <span>Sliders</span></a>
                    </li>
                    <li>
                        <a href="{{route('feedback')}}" class="active">
                            <i class='fa fa-quote-left'></i><span>Feedback</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('settings.index')}}" class="active">
                            <i class='fa fa-cogs'></i><span>Settings</span>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
</div>
