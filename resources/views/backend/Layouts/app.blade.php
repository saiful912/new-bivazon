<!doctype html>
<html lang="{{config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}}| @yield('title','admin')</title>
    <link rel="icon" href="{{upload_url('settings/favicon/'.\setting('favicon'))}}">
    <link rel="stylesheet" type="text/css"
          href="https://unpkg.com/file-upload-with-preview@4.0.2/dist/file-upload-with-preview.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('backend/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/jquery.dataTables.min.css')}}">
    @notifyCss
    <style>
        div[x-description] {
            margin-top: 60px;
        }
    </style>
    @stack('css')
    <livewire:styles/>
</head>

<body>
<div class="ecaps-page-wrapper menu-collasped-active">
    <!-- Sidemenu Area -->
@include('backend.partials.sidebar')

<!-- Page Content -->
    <div class="ecaps-page-content">
        <!-- Top Header Area -->
        <x-header/>

        <!-- Main Content Area -->
        <div class="main-content">
        @yield('main')

        <!-- Footer Area -->
            <x-footer/>
        </div>
    </div>
</div>


<script src="{{asset('backend/js/all.js')}}"></script>
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#table_id').DataTable();
    });
</script>
<script>
    $(document).ready(function () {
        $('#data_table').DataTable();
    });

</script>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://unpkg.com/file-upload-with-preview@4.0.2/dist/file-upload-with-preview.min.js"></script>
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
