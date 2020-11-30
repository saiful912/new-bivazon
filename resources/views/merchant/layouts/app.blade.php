<!doctype html>
<html lang="{{config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}}| @yield('title','Merchant ')</title>
    <link rel="icon" href="{{upload_url('settings/favicon/'.\setting('favicon'))}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{mix('backend/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/jquery.dataTables.min.css')}}">
    @notifyCss
    <livewire:styles/>
    <style>
        div[x-description] {
            margin-top: 60px;
        }
    </style>
    @stack('css')
</head>

<body>
<div class="ecaps-page-wrapper">
    <!-- Sidemenu Area -->
@include('merchant.partials.sidebar')

<!-- Page Content -->
    <div class="ecaps-page-content">
        <!-- Top Header Area -->
    @include('merchant.partials.header')

    <!-- Main Content Area -->
        <div class="main-content">
        @yield('main')

        <!-- Footer Area -->
            @include('merchant.partials.footer')
        </div>
    </div>
</div>

<script src="{{mix('backend/js/all.js')}}"></script>
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#table_id').DataTable();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
@notifyJs
<x:notify-messages/>
<script>
    var upload = new FileUploadWithPreview('myUniqueUploadId');
    $(document).ready(function () {
        $('.js-select_2').select2();
    });
    tinymce.init({
        selector: '#mytextarea'
    });
    tinymce.init({
        selector: '#mytextarea1'
    });
</script>
<livewire:scripts/>
</body>
</html>
