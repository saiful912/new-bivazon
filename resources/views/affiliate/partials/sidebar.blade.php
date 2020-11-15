<div class="ecaps-sidemenu-area" style="background: black">
    <!-- Desktop Logo -->
    <div class="ecaps-logo bg-dark">
        <a href="index.html">
            <img class="desktop-logo" src="{{asset('backend')}}/img/core-img/small-logo.png"
                 alt="Desktop Logo">
            <img class="small-logo" src="{{asset('backend')}}/img/core-img/small-logo.png" alt="Mobile Logo"></a>
    </div>

    <!-- Side Nav -->
    <div class="ecaps-sidenav  menu-collasped-active" id="ecapsSideNav" style="background: black">
        <!-- Side Menu Area -->
        <div class="side-menu-area" style="margin-top: 0">
            <!-- Sidebar Menu -->
            <h4 class="text-center bg-gray" style="padding: 5px 0;color: #353131;background: black">Kamrul Islam</h4>
            <img src="{{asset('img/profile.png')}}" alt="profileImage" style="display: block;margin-left: auto;margin-top: 5px;margin-right: auto;width: 50%;border-radius: 50%;margin-bottom: 5px;">
            <nav>

                <ul class="sidebar-menu" data-widget="tree">
                    <li class="active"><a href="{{route('affiliate.dashboard')}}"><i
                                class='bx bx-home-heart'></i><span>Stats</span></a></li>
                    <li><a href="{{route('affiliate.settings')}}"><i
                                    class='fa fa-cogs'></i><span>Settings</span></a></li>
                    <li><a href="#">
                            <i class='bx bx-message'></i>
                            <span>Messages</span></a>
                    </li>
                    <li><a href="{{route('affiliate.payment.request')}}">
                            <i class='bx bx-money'></i>
                            <span>Payment Request</span></a>
                    </li>
                    <li><a href="{{route('affiliate.payments')}}">
                            <i class='bx bx-money'></i>
                            <span>Payment History</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
