<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bl Media</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
</body>

@include('frontend::partials.script')
@stack('scripts')
</html>

