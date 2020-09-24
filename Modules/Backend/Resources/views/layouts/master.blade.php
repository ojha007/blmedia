<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="shortcut icon" type="image/png" href="{{ asset('backend/images/logo.png') }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bl Media</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    @include('backend::partials.styles')
    @stack('styles')
    <style>
        .skin-yellow .main-header .navbar {
            background-color: #FF5E14;
        }

        .skin-yellow .main-header .logo {
            background-color: #FF5E12;
            color: #fff;
            border-bottom: 0 solid transparent;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini skin-yellow @yield('sidebar-type')">
<div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">
        @include('backend::partials.header')
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        @include('backend::partials.sidebar')
    </aside>
    {{--    <!-- Content Wrapper. Contains page content -->--}}
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                @yield('header')
                <small>
                    @yield('subHeader')
                </small>
            </h1>
            @yield('breadcrumb')
        </section>
        <!-- Main content -->
        <section class="content container-fluid" id="app">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('backend::partials.footer')
</div>
</body>
@include('backend::partials.scripts')
@stack('scripts')
<script>
    function fmSetLink($url) {
        document.getElementById('image_label').value = $url;
        document.getElementById('holder').src = $url;
    }

    document.addEventListener("DOMContentLoaded", function () {
        if (document.getElementById('banner_image')) {
            document.getElementById('banner_image').addEventListener('click', (event) => {
                event.preventDefault();
                window.open('/bl-secure/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        }

    });


    $(document).ready(function () {
        $('select.select2').select2({dropdownAutoWidth: true});

        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            orientation: "bottom auto",
            "autoclose": true
        });

    $('.dataTable').DataTable();
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
    });

    });
</script>
</html>

