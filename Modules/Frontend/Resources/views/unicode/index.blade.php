<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Preeti to Nepali Unicode Converter</title>
    <meta name="keywords" content="BL media Unicode Nepali Devanagari Roman Typing Keyboard">
    <meta name="keywords" content="BreakNLinks">
    <meta name="description" content="BL media language convertor">
    <meta name="author" content="Bl Media">
    <meta name="ROBOTS" content="ALL">
    <meta name="Googlebot" content="index, follow">
    <meta name="distribution" content="Global">
    <meta name="document-type" content="web page">
    <meta name="resource-type" content="document">
    <link href="{{asset('/frontend/uikit.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/masterLayout.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <style>
        body, html {
            height: 100vh;
        }

        .converter {
            height: 80%;
        }
        .navbar-nav li {
            /*padding: 5px 0;*/
        }

        .navbar-nav li a {
            padding: 0 20px;
            color: white;
            opacity: 0.7;
            font-size: 18px;
        }

        .navbar-nav li a.active {
            color: white;
            opacity: 1;
        }

        .navbar-nav li:hover {
            border-bottom: 2px solid white;
        }

        .navbar-nav li:hover a {
            color: white;
            opacity: 1;
        }
        .converter .card .card-footer a:hover{
            background-color: black;
        }
    </style>
</head>
<body >
@include('frontend::unicode.partials.header')

<div class="container-fluid converter justify-content-center">
    <div class="col-sm-12 py-3  ">
        <div class="card text-center ">
            <div class="card-header">
                Unicode Converter
            </div>
            <div class="card-body">
               <div class="row">
                   <div class="col-sm-12 col-md-12 col-lg-6 my-3 p-0">
                       <div class="card" >

                           <div class="card-body">
                               <form action="#">
                                   <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"
                                                  placeholder="nepali" style="border: none;"></textarea>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-12 col-md-12 col-lg-6  my-3 p-0">
                       <div class="card" >

                           <div class="card-body">
                               <form action="#">
                                   <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"
                                                  placeholder="nepali" style="border: none;"></textarea>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
            <div class="card-footer text-muted p-0">
                <a href="" class="btn bg-site-color text-white btn-block">Click To Convert</a>
            </div>
        </div>
    </div>
</div>
@include('frontend::partials.footer')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="js/uikit-icons.min.js"></script>
<script language="JavaScript" src="js/preeti.js"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
</body>
</html>
