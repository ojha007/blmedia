@isset($ads_above_footer)
    @include('frontend::components.ads.ads-1',['ads'=>$ads_above_footer])
@endisset
<footer class="page-footer">
    <div class="container-fluid">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 float-left">
            <div class="footer-brand">
                <figure class="brand-logo">
                    <img src="{{asset('frontend/img/logo.png')}}" alt="Bl Media"/>
                </figure>
                <div class="brand-info">
                    <h2 class="brand-name">In Association with BL Media Inc.</h2>
                    <p> Copyright &copy; <?php echo date('Y'); ?>, www.breaknlinks.com </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 float-left">
            बिएल मिडिया प्रा.लि., भायन्दर, मुम्बई - महाराष्ट्र,
            <br>
            इमेलः info@breaknlinks.com
        </div>

    </div>
</footer>
@isset($ads_below_footer)
    @include('frontend::components.ads.ads-1',['ads'=>$ads_below_footer])
@endisset
<!--ended page footer-->
