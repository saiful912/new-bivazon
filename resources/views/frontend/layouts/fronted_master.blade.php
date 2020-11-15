<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <title>Bivazon || Online WholeSale & Retail Bazaar </title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="icon" href="{{asset('frontend/img/png.jpg')}}"
          type="#" sizes="16x16">
    <link rel="stylesheet" href="{{asset('frontend/css/frontend.css')}}">
    <!-- //js -->
    <link
        href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic'
        rel='stylesheet' type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    @notifyCss
    <style>
        div[x-description] {
            margin-top: 60px;
        }
    </style>
    <!-- start-smoth-scrolling -->
</head>
<body>
@include('frontend.partials.mobile_header')

<div id="my-sidebar-context" class="widget-sidebar-context">
    <!-- header -->
@include('frontend.partials.header')
<!-- //header -->
    <!-- quicktech-all-section -->
    <div class="quicktech-all-section">
        {{--sidebar--}}
        @include('frontend.partials.sidebar')
        {{--//sidebar--}}
        <div class="quicktechl_banner_nav_right">

            @yield('main')


            {{--footer--}}
            <div class="footer">
                <div class="container">
                    <div class="agile_footer_grids">
                        <div class="col-md-8 quicktech_footer_grid agile_footer_grids_quicktech_footer">
                            <h3><img src="{{asset('frontend/img/logo4.png')}}" alt="" style="width: 150px"></h3>
                            <p> Day by day life is getting busier specially in a city like Dhaka. So residence of Dhaka
                                city need to plan their time for all the daily activities. Within tight schedule, it is
                                hard most of the time to buy the necessities of their own.

                                Bivazon.com is an online Business in Dhaka, Bangladesh. Using the technology, we want to
                                provide the service to our fellow Dhaka residence to fulfill their daily necessities.

                                Bivazon.com believe that there are always improvement opportunities. As this work in
                                progress, for improvement we will highly appreciate your feedback. Please do email
                                us.</p>

                            <br><br>
                            <div class="col-md-6 quicktech_footer_grid">
                                <h3>Customer Service</h3>
                                <ul class="quicktech_footer_grid_list">
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Faq</a></li>

                                </ul>
                            </div>
                            <div class="col-md-6 quicktech_footer_grid">
                                <h3>About Bivazon </h3>
                                <ul class="quicktech_footer_grid_list">

                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms Of Use</a></li>
                                    <li><a href="{{route('affiliate.register')}}">Create Affiliate</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-md-4 quicktech_footer_grid agile_footer_grids_quicktech_footer">
                            <div class="quicktech_footer_grid_bottom">
                                <h4>Pay with: </h4>
                                <img src="{{asset('frontend/images/card.png')}}" alt=" " class="img-responsive"/>
                            </div>
                            <br><br>
                            <div class="quicktech_footer_grid_bottom">
                                <h5>connect with us</h5>
                                <ul class="agileits_social_icons">
                                    <li><a href="#" class="facebook"><i
                                                class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#" class="dribbble"><i class="fa fa-youtube"
                                                                        aria-hidden="true"></i></a></li>
                                </ul>

                                <br>
                                <br>
                                <h3><label class="fa fa-phone" aria-hidden="true"></label> 01856126296</h3>
                                <ul class="quicktech_footer_grid_list1">

                                    <li>or email <label class="fa fa-envelope-o" aria-hidden="true"></label><a href="#">uriaz0046@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>


                    <div class="clearfix"></div>

                    <div class="wthree_footer_copy">
                        <p>© 2020 BivaZon. All rights reserved | Design & Developed By <a
                                href="#"> IT.</a></p>
                    </div>
                </div>
            </div>
            {{--//footer--}}
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Bootstrap Core JavaScript -->
<script>

    function scroll_to(clicked_link, nav_height) {
        var element_class = clicked_link.attr('href').replace('#', '.');
        var scroll_to = 0;
        if (element_class != '.top-content') {
            element_class += '-container';
            scroll_to = $(element_class).offset().top - nav_height;
        }
        if ($(window).scrollTop() != scroll_to) {
            $('html, body').stop().animate({scrollTop: scroll_to}, 1000);
        }
    }


    jQuery(document).ready(function () {

        /*
            Navigation
        */
        $('a.scroll-link').on('click', function (e) {
            e.preventDefault();
            scroll_to($(this), $('nav').outerHeight());
        });

        /*
            Background
        */
        $('.section-4-container').backstretch("assets/img/backgrounds/bg.jpg");

        /*
            Wow
        */
        new WOW().init();

        /*
            Carousel
        */
        $('#carousel-example').on('slide.bs.carousel', function (e) {

            /*
                CC 2.0 License Iatek LLC 2018
                Attribution required
            */
            var $e = $(e.relatedTarget);
            var idx = $e.index();
            var itemsPerSlide = 5;
            var totalItems = $('.carousel-item').length;

            if (idx >= totalItems - (itemsPerSlide - 1)) {
                var it = itemsPerSlide - (totalItems - idx);
                for (var i = 0; i < it; i++) {
                    // append slides to end
                    if (e.direction == "left") {
                        $('.carousel-item').eq(i).appendTo('.carousel-inner');
                    } else {
                        $('.carousel-item').eq(0).appendTo('.carousel-inner');
                    }
                }
            }
        });

    });

</script>
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.rollingslider.js')}}"></script>
<script>
    $('#demo').RollingSlider({
        showArea: "#example",
        prev: "#jprev",
        next: "#jnext",
        moveSpeed: 300,
        autoPlay: true
    });
</script>
<!--<script type="text/javascript">-->

<!--var _gaq = _gaq || [];-->
<!--_gaq.push(['_setAccount', 'UA-36251023-1']);-->
<!--_gaq.push(['_setDomainName', 'jqueryscript.net']);-->
<!--_gaq.push(['_trackPageview']);-->

<!--(function() {-->
<!--var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;-->
<!--ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';-->
<!--var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);-->
<!--})();-->

<!--</script>-->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/js-offcanvas.pkgd.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/simplesidebar.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/easing.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="{{asset('frontend/js/toastr.min.js')}}"></script>
<script src="{{asset('frontend/js/custom.html')}}"></script>
@notifyJs
<x:notify-messages/>
<script>
    $('.fa-bars').click(function () {
        $('.widget-sidebar').toggle();
    })
</script>
<script>
    $('.fa-times').click(function () {
        alert('dfotoet');
        $('.widget-sidebar-context').removeClass('.sidebar-show');
        $('.widget-sidebar-context').addClass('sidebar-hide');
    })
</script>
<script>
    $('.fa-times').click(function () {
        alert('data');
        $('.widget-sidebar').removeClass('mobileshow');
        $('.hidesidebar').removeClass('fa-times');
        $('.hidesidebar').addClass('fa-bars');
        $('.hidesidebar').removeClass('hidesidebar');
        $('.hidesidebar').addClass('showsidebar');
    })
</script>
<script>
    $('.showsidebar').click(function () {
        $('.widget-sidebar').addClass('mobileshow');
        $('.showsidebar').addClass('fa-times');
        $('.showsidebar').removeClass('fa-bars');
        $('.showsidebar').removeClass('fa-times');
        $('.showsidebar').addClass('fa-bars');
    })
</script>

<script type="text/javascript"></script>
<script>
    flatpickr("#myID", {
        dateFormat: "d-M-Y h:i",
        enableTime: true,
        minTime: "10:00",
        maxTime: "18:00"
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });

</script>
<script>
    $("#district_id").change(function () {
        var district = $("#district_id").val();
        //send an ajax request to server with this division
        $("#courier_id").html("");
        var option="";
        $.get("/get-couriers/"+district,
            function (data) {
                data = JSON.parse(data);
                data.forEach(function (element) {
                    option += "<option value='"+ element.id +"'>"+ element.name +"</option>";
                });
                $("#courier_id").html(option);
            });
    })
</script>
<!-- start-smoth-scrolling -->
<!--offcanvas js-->

<!-- <script>
    $(document).ready(function() {
        $(".dropdown").click(
            alert('test');
            function() {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });

</script> -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });

</script>
<!-- //here ends scrolling icon -->

<script>
    $(document).ready(function () {

        $("#my-sidebar-context").simpleSidebar();

    });

</script>
<script>
    $(".firsticon").click(function () {
        $('.firsticon').addClass('removeicon');
    })

</script>

<script>
    $('.toggle').click(function () {
        // Switches the Icon
        $(this).children('i').toggleClass('fa-pencil');
        // Switches the forms
        $('.form').animate({
            height: "toggle",
            'padding-top': 'toggle',
            'padding-bottom': 'toggle',
            opacity: "toggle"
        }, "slow");
    });

</script>
<script>
    $(document).ready(function () {
        var navoffeset = $(".agileits_header").offset().top;
        $(window).scroll(function () {
            var scrollpos = $(window).scrollTop();
            if (scrollpos >= navoffeset) {
                $(".agileits_header").addClass("fixed");
            } else {
                $(".agileits_header").removeClass("fixed");
            }
        });

    });

</script>

<script>
    $(function () {

        $('.show').on('click', function () {
            $('.navigation').addClass('open');
        });
        $('.navigation .hide').on('click', function () {
            $('.navigation').removeClass('open');
        });


        $('.navigation .has-menu a').on('click', function (e) {
            e.stopPropagation();
        });
        $('.navigation .has-menu').on('click', function () {
            $(this).toggleClass('open');
        });

    });

</script>


<script>
    $('.mainslider').owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        autoplay: true,
        nav: true,
        autoplayHoverPause: false,
        margin: 0,
        smartSpeed: 1000,
        autoplayTimeout: 5000,
        mouseDrag: false,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    });
</script>

<script>
    $('#slider').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        nav: true,
        dots: true,
        autoplayHoverPause: false,
        margin: 0,
        smartSpeed: 1000,
        autoplayTimeout: 5000,
        mouseDrag: false,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    });
</script>
</body>
</html>
