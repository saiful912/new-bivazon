<!doctype html>
<html lang="{{config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}}| @yield('title','Affiliate ')</title>
    <link rel="icon" href="{{upload_url('settings/favicon/'.\setting('favicon'))}}">
    <link rel="stylesheet" href="{{mix('backend/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/datatables.min.css')}}">

</head>

<body>
<div id="preloader"></div>
<div class="ecaps-page-wrapper">
    <!-- Sidemenu Area -->
@include('affiliate.partials.sidebar')

<!-- Page Content -->
    <div class="ecaps-page-content">
        <!-- Top Header Area -->
    @include('affiliate.partials.header')

    <!-- Main Content Area -->
        <div class="main-content">
        @yield('main')

        <!-- Footer Area -->
            @include('affiliate.partials.footer')
        </div>
    </div>
</div>

<script src="{{mix('backend/js/all.js')}}"></script>
<script src="{{asset('backend/js/datatables.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });
</script>
</body>
</html>
