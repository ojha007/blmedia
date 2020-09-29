<section class="ads-section pb-3">
    <div class="container-fluid text-center">
        @include('frontend::components.ads.ads-2',['ads'=>$allAds,'placement'=>'above',
                            'sub_for'=>'footer'])
    </div>
</section>
<!--start page footer-->
<footer class="page-footer">
    <div class="container-fluid">
        <div class="row">
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
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 pt-3 footerButtom">
              <span>  बिएल मिडिया प्रा.लि., भायन्दर, मुम्बई - महाराष्ट्र,</span>
                <br>
               <span> इमेलः info@breaknlinks.com</span>
            </div>
        </div>
    </div>
</footer>
<!--ended page footer-->
