<section class="header-mid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2 float-left">
                <figure class="brand-logo">
                    <a href="{{route($routePrefix.'index')}}">
                        <img class="responsive-img" id="logo_image_nav"
                             src="{{asset('frontend/img/logo.png')}}"
                             alt="BL Media">
                    </a>
                </figure>
            </div>
            <div class="col-sm-12 col-md-10 col-lg-10 col-xl-10 float-right d-sm-none d-md-block">

                <div class="ggl_adBlk _768x90 float-right logo-adv">
                     @include('frontend::components.ads.ads-1',['ads'=>$ads_aside_logo])
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
@include('frontend::components.ads.ads-1',['ads'=>$ads_below_top_menu])
