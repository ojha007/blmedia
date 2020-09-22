<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="bx">
                    <div class="gn-heading nh">
                        <h2>खेल </h2>
                    </div>
                    <div class="">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="big_bx">
                                    <a href="https://www.breaknlinks.com/hindi/news/1995">
                                        <img
                                            src="https://www.breaknlinks.com/hindi/uploads/Game%20-%20Player/Stoinis-ipl-fifty-764x430.jpg"
                                            title="स्टोइनिस का कमाल, दिल्ली ने किंग्स इलेवन को सुपर ओवर में हराया"
                                            class="arch-img img-fluid">

                                    </a>
                                    <div class="ovrLay">
                                        <h2 class="news-title"><a
                                                href="https://www.breaknlinks.com/hindi/news/1995">स्टोइनिस का कमाल,
                                                दिल्ली ने किंग्स इलेवन को सुपर ओवर में हराया</a></h2>
                                    </div>
                                    <p> मार्कस स्टोइनिस ने पहले धमाकेदार पारी खेली और बाद में आखिरी दो गेंदों पर दो
                                        विकेट लिये जिससे दिल्ली कैपिटल्स ने हार के कगार पर पहुंचने के बावजूद रविवार
                                        को यहां किंग्स इलेवन पंजाब को सुपर ओवर में हराकर 13वें इंडियन प्रीमियर लीग
                                        में अपना खाता खोला। स्टोइनिस ने सात चौकों और तीन छक्कों की मदद से 21 गेंदों
                                        पर 53 रन बनाये </p>
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="row">
                                    @foreach($firstPositionNews->take(4) as $news)
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="small_bx">
                                                <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                                    <img src="{{asset('frontend/img/orange.jpg')}}" alt=""
                                                         class="arch-img img-fluid">
                                                </a>
                                                <h2 class="news-title"><a
                                                        href="{{route($routePrefix.'news.show',$news->slug)}}">{{$news->title}}</a>
                                                </h2>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class=" col col-12">
                                @include('frontend::components.buttons.view-all-category-button', ['position' => $firstPositionNews])
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contentH">
                            <div class="gn-heading nh">
                                <h2>क्रिकेट</h2>
                            </div>
                            <div class="">
                                <div class="bigOverLay">
                                    <a href="https://www.breaknlinks.com/hindi/news/53">
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Cricket/ipl.jpg"
                                             title="आईपीएल फाइनल २४ मई को" class="arch-img img-fluid">

                                    </a>
                                    <div class="ovLay">
                                        <h2 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/53">आईपीएल
                                                फाइनल २४ मई को</a></h2>
                                    </div>
                                </div>
                            </div>
                            @foreach($firstPositionNews->take(4) as $news)
                                <div class="smallHorizBx">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                            <a href="https://www.breaknlinks.com/hindi/news/44">
                                                <img src="{{asset('frontend/img/orange.jpg')}}" alt=""
                                                     class="arch-img img-fluid">
                                            </a>
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <h2 class="news-title"><a
                                                    href="{{route($routePrefix.'news.show',$news->slug)}}">{{$news->title}}</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="" style="margin-bottom: 20px;">
                                @include('frontend::components.buttons.view-all-category-button', ['position' => $firstPositionNews])
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contentH">
                            <div class="gn-heading nh">
                                <h2>क्रिकेट</h2>
                            </div>
                            <div class="">
                                <div class="bigOverLay">
                                    <a href="https://www.breaknlinks.com/hindi/news/53">
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Cricket/ipl.jpg"
                                             title="आईपीएल फाइनल २४ मई को" class="arch-img img-fluid">

                                    </a>
                                    <div class="ovLay">
                                        <h2 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/53">आईपीएल
                                                फाइनल २४ मई को</a></h2>
                                    </div>
                                </div>
                            </div>
                            @foreach($firstPositionNews->take(4) as $news)
                                <div class="smallHorizBx">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                            <a href="https://www.breaknlinks.com/hindi/news/44">
                                                <img src="{{asset('frontend/img/orange.jpg')}}" alt=""
                                                     class="arch-img img-fluid">
                                            </a>
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <h2 class="news-title"><a
                                                    href="{{route($routePrefix.'news.show',$news->slug)}}">{{$news->title}}</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="" style="margin-bottom: 20px;">
                                @include('frontend::components.buttons.view-all-category-button', ['position' => $firstPositionNews])
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contentN">
                            <div class="gn-heading nh">
                                <h2>१३ औं दक्षिण एसियाली खेलकुद </h2>
                            </div>
                            <div class="">
                                <ul class="lst">
                                </ul>
                            </div>
                            <div class="" style="margin-bottom: 20px;"><a
                                    href="https://www.breaknlinks.com/hindi/category/sagnepal-1"
                                    class=" btn btn-viewAll float-right" role="button">सबै</a></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contentN">
                            <div class="gn-heading nh">
                                <h2>एथ्लेटीक्स</h2>
                            </div>
                            <div class="">
                                <ul class="lst">
                                </ul>
                            </div>
                            <div class="" style="margin-bottom: 20px;"><a
                                    href="https://www.breaknlinks.com/hindi/category/athletics"
                                    class=" btn btn-viewAll float-right" role="button">सबै</a></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contentN">
                            <div class="gn-heading nh">
                                <h2>भलिबल</h2>
                            </div>
                            <div class="">
                                <ul class="lst">
                                </ul>
                            </div>
                            <div class="" style="margin-bottom: 20px;"><a
                                    href="https://www.breaknlinks.com/hindi/category/bholleyball"
                                    class=" btn btn-viewAll float-right" role="button">सबै</a></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

