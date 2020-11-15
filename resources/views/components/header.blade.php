<header class="top-header-area d-flex align-items-center justify-content-between">
    <div class="left-side-content-area d-flex align-items-center">
        <!-- Mobile Logo -->
        <div class="mobile-logo mr-3 mr-sm-4">
            <a href="{{route('dashboard')}}"><img src="{{upload_url('settings/logo/'.setting('mobile_logo'))}}"
                                                  alt="Mobile Logo"></a>
        </div>

        <!-- Triggers -->
        <div class="ecaps-triggers mr-1 mr-sm-3">
            <div class="menu-collasped" id="menuCollasped">
                <i class='bx bx-menu'></i>
            </div>
            <div class="mobile-menu-open" id="mobileMenuOpen">
                <i class='bx bx-menu'></i>
            </div>
        </div>

        <!-- Left Side Nav -->
        <ul class="left-side-navbar d-flex align-items-center">
            <li class="hide-phone app-search">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="bx bx-search-alt"></span>
            </li>
        </ul>
    </div>

    <div class="right-side-navbar d-flex align-items-center justify-content-end">
        <!-- Mobile Trigger -->
        <div class="right-side-trigger" id="rightSideTrigger">
            <i class='bx bx-menu-alt-right'></i>
        </div>

        <!-- Top Bar Nav -->
        <ul class="right-side-content d-flex align-items-center">
            <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><span class="flag-thumb-cu"><img src="img/core-img/l1.jpg" alt=""></span>
                </button>
                <div class="dropdown-menu language-dropdown dropdown-menu-right">
                    <a href="#" class="dropdown-item mb-15"><img src="img/core-img/l5.jpg" alt="Image"> <span>USA</span></a>
                    <a href="#" class="dropdown-item mb-15"><img src="img/core-img/l2.jpg" alt="Image">
                        <span>German</span></a>
                    <a href="#" class="dropdown-item mb-15"><img src="img/core-img/l3.jpg" alt="Image">
                        <span>Italian</span></a>
                    <a href="#" class="dropdown-item"><img src="img/core-img/l4.jpg" alt="Image">
                        <span>Russian</span></a>
                </div>
            </li>

            <!-- Full Screen Mode -->
            <li class="full-screen-mode ml-1">
                <a href="javascript:" id="fullScreenMode"><i class='bx bx-exit-fullscreen'></i></a>
            </li>

            <li class="nav-item dropdown">
                <div class="dropdown d-none d-lg-inline-block ml-1 show">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-customize"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="px-lg-2">
                            <div class="row no-gutters">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="img/shop-img/18.jpg" alt="image">
                                        <span>Motriza</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="img/shop-img/19.jpg" alt="image">
                                        <span>Jisladtd</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="img/shop-img/20.jpg" alt="image">
                                        <span>Dribbble</span>
                                    </a>
                                </div>
                            </div>

                            <div class="row no-gutters">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="img/shop-img/13.png" alt="image">
                                        <span>GitHub</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="img/shop-img/14.png" alt="image">
                                        <span>Google</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="img/shop-img/17.jpg" alt="image">
                                        <span>Dribbble</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    <i class='bx bx-user-circle'></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- Top Notifications Area -->
                    <div class="top-notifications-area">
                        <!-- Heading -->
                        <div class="notifications-box" id="notificationsBox">
                            <a href="{{route('admin.profile')}}" class="dropdown-item">
                                <i class='bx bx-user'></i>
                                <div>
                                    <span>{{auth()->user()->full_name}}</span>
                                </div>
                            </a>

                            <a href="#" class="dropdown-item">
                                <i class='bx bx-star'></i>
                                <div>
                                    <span>Setting</span>
                                </div>
                            </a>
                            <a href="{{route('admin.profile')}}" class="dropdown-item">
                                <i class='bx bxs-user'></i>
                                <div>
                                    <span>Profile</span>
                                </div>
                            </a>

                            <a href="{{route('merchant.logout')}}" class="dropdown-item">
                                <i class='bx bx-log-out'></i>
                                <div>
                                    <span>Logout</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><img src="img/member-img/contact-2.jpg" alt=""></button>
                <div class="dropdown-menu profile dropdown-menu-right">
                    <!-- User Profile Area -->
                    <div class="user-profile-area">
                        <a href="#" class="dropdown-item"><i class="bx bx-user font-15" aria-hidden="true"></i>
                            My profile</a>
                        <a href="#" class="dropdown-item"><i class="bx bx-wallet font-15"
                                                             aria-hidden="true"></i> My wallet</a>
                        <a href="#" class="dropdown-item"><i class="bx bx-wrench font-15"
                                                             aria-hidden="true"></i> settings</a>
                        <a href="#" class="dropdown-item"><i class="bx bx-power-off font-15"
                                                             aria-hidden="true"></i> Sign-out</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
