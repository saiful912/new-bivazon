const mix = require('laravel-mix');

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'public/frontend/css/normalize.css',
    'public/frontend/css/bootstrap.css',
    'public/frontend/css/font-awesome.css',
    'public/frontend/css/js-offcanvas.css',
    'public/frontend/css/owl.theme.default.css',
    'public/frontend/css/owl.carousel.min.css',
    'public/frontend/css/simplesidebar.css',
    'public/frontend/css/style.css',
    'public/frontend/css/custom.css',
], 'public/frontend/css/frontend.css');
mix.scripts([
    'public/frontend/js/bootstrap.min.js',
    'public/frontend/js/easing.js',
    'public/frontend/js/jquery.rollingslider.js',
    'public/frontend/js/jquery.wmuSlider.js',
    'public/frontend/js/jquery-1.11.1.min.js',
    'public/frontend/js/jquery-3.4.1.min.js',
    'public/frontend/js/js-offcanvas.pkgd.js',
    'public/frontend/js/move-top.js',
    'public/frontend/js/owl.carousel.min.js',
    'public/frontend/js/simplesidebar.js',
], 'public/frontend/js/app.js');
//backend assets
mix.styles([
    'public/backend/css/style.css'
], 'public/backend/css/app.css');

mix.scripts([
    'public/backend/js/jquery.min.js',
    'public/backend/js/popper.min.js',
    'public/backend/js/bootstrap.min.js',
    'public/backend/js/bundle.js',
    'public/backend/js/default-assets/setting.js',
    'public/backend/js/default-assets/fullscreen.js',
    'public/backend/js/default-assets/active.js',
    'public/backend/js/default-assets/apexchart.min.js',
    'public/backend/js/default-assets/dashboard-active.js',
], 'public/backend/js/all.js');
