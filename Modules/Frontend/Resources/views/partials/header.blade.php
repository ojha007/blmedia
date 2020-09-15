<header class="page-header ">
    <!--header top start-->
@include('frontend::components.headers.header-top')

<!--ended header top-->

    <!--header mid start-->
    <section class="header-mid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2 float-left">
                    <figure class="brand-logo">
                        <a href="{{route($routePrefix.'index')}}">
                            <img class="responsive-img" id="logo_image_nav"
                                 src="https://www.breaknlinks.com/nepali/uploads/pictures/9b985eb1206505396c15126062c31befblnepali.png"
                                 alt="BL Media">
                        </a>
                    </figure>
                </div>
                <div class="col-sm-12 col-md-10 col-lg-10 col-xl-10 float-right d-sm-none d-md-block">

                    <div class="ggl_adBlk _768x90 float-right logo-adv">

                        <!--- Google Ads Start--->
                        <script async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Aside Logo -->
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6371925597086820"
                             data-ad-slot="3110130257" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                        <!--- Google Ads End --->

                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!--ended header mid section-->
@include('frontend::components.headers.header-mid')
<!--ended header mid section-->
    <!--main Navigation bar-->
    <section class="amnavnd">
        <div class="container-fluid">

            <div class="row" style="border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;">
                <div class="col-md-2 col-lg-2 hiderfixed_navbar12">
                    <a class="navbar-brand  hiderfixed_navbar-brand" href="https://www.breaknlinks.com/hindi/">
                    </a>
                </div>
                <div class="col-md-4 col-lg-0 col-xl-4 nav-pills-float">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <form class="form-inline base-form">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="search" name="newsSearch" class="form-control"
                                               placeholder="Search..." required="">

                                        <div class="input-group-append">
                                            <button type="submit" name="search" class="btn btn-trans"><i
                                                        class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-10 p-0">
                    <nav class="navbar navbar-expand-lg navbar-light primary-nav navbar_fixed" id="stickyAM">

                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#primaryNav"
                                aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="primaryNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active home-site-logo-home">
                                    <a href="{{route($routePrefix.'index')}}" class="nav-link"><i
                                                class="fa fa-home"></i> <span class="sr-only">Home</span>
                                    </a>
                                </li>
                                <li class="nav-item active home-site-logo">
                                    <a class="nav-link navbar-brand-img-logo  " href="#">
                                        <img class="responsive-img" id="logo_image_nav"
                                             src="https://www.breaknlinks.com/nepali/uploads/pictures/9b985eb1206505396c15126062c31befblnepali.png"
                                             alt="BL Media">
                                    </a>
                                </li>
                                <li cclass="nav-item">

                                    <a href="{{route($routePrefix.'singlePage')}}" class="nav-link">बिएल
                                        स्पेशल</a>


                                </li>


                                <li cclass="nav-item">

                                    <a href="https://www.breaknlinks.com/hindi/category/abroad-10" class="nav-link">विदेश</a>


                                </li>


                                <li cclass="nav-item">

                                    <a href="https://www.breaknlinks.com/hindi/category/country-38-27-36"
                                       class="nav-link">देश</a>


                                </li>


                                <li cclass="nav-item">

                                    <a href="https://www.breaknlinks.com/hindi/category/break"
                                       class="nav-link">ब्रेक</a>


                                </li>


                                <li cclass="nav-item">

                                    <a href="https://www.breaknlinks.com/hindi/category/sports" class="nav-link">खेल</a>


                                </li>


                                <li cclass="nav-item">

                                    <a href="https://www.breaknlinks.com/hindi/category/tourism-47" class="nav-link">यात्रा</a>


                                </li>


                                <li cclass="nav-item">

                                    <a href="https://www.breaknlinks.com/hindi/category/econimics-5" class="nav-link">कारोबार</a>


                                </li>


                                <li cclass="nav-item">

                                    <a href="https://www.breaknlinks.com/hindi/category/art-1-39" class="nav-link">मनोरंजन</a>


                                </li>


                                <li cclass="nav-item">

                                    <a href="https://www.breaknlinks.com/hindi/category/opinion-32" class="nav-link">ब्लाँग</a>


                                </li>


                                <li cclass="nav-item">

                                    <a href="https://www.breaknlinks.com/hindi/category/video"
                                       class="nav-link">वीडियो</a>


                                </li>


                                <li cclass="nav-item">

                                    <a href="https://www.breaknlinks.com/hindi/category/literature-18" class="nav-link">साहित्य </a>


                                </li>


                            </ul>
                        </div>
                    </nav>

                </div>

                <div class="col-md-12 col-lg-2 pl-0">

                    <ul class="follow-social-media">
                        <li>
                            <button type="button" class="btn btn-link">फलाे करें</button>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/breaknlinkshd/" target="_blank"><i
                                        class="fab fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/breaknlinksin" target="_blank"><i
                                        class="fab fa-twitter-square"></i></a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <!--ended main navigation bar-->
@include('frontend::components.headers.header-end')
<!--ended main navigation bar-->
</header>
@push('scripts')
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                var sticky = $('.amnavnd'),
                    scroll = $(window).scrollTop();

                if (scroll >= 150) sticky.addClass('headerfixed');
                else sticky.removeClass('headerfixed');
            });
        });
    </script>
@endpush
