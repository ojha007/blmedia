<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Media for all across the globe">
    <meta name="description" content="Media for all across the globe">
    <meta name="keywords" content="Media for all across the globe">
    <title>
        Media for all across the globe
    </title>
    @include('frontend::partials.style')
    @stack('styles')
</head>

<body>
<!-- Main Header -->
@include('frontend::partials.header')
{{--    Header Close--}}
<!-- Main content -->
@yield('content')
<!-- /.content -->
{{--Main Footer--}}
@include('frontend::partials.footer')
{{--    Close Footer--}}
<button onclick="topFunction()" id="scrollTop" class="btn btn-sm " title="Scroll top"><i class="fas fa-arrow-up"></i>
</button>
</body>

@include('frontend::partials.script')
@stack('scripts')
</html>

