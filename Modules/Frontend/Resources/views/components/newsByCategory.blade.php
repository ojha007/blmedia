@extends('frontend::layouts.master')
@section('content')
    <section class="breadcrumb-section">
        <div class="breadcrumb-wrapper">
            <div class="container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="https://www.breaknlinks.com/hindi/">
                                    गृहपृष्ठ
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="https://www.breaknlinks.com/hindi/category/blspecial-23" itemprop="item">
                                    बिएल स्पेशल
                                </a>
                            </li>

                        </ol>
                    </nav>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <section class="body-section">
        <section class="page-body">
            <div class="container-fluid">
                <section class="cmn-section">
                    <!--news listing section-->
                    <div class="col-sm-12 col-md-8 col-lg-9 col-xl-9 float-left">
                        <div class="gn-heading">
                            <h2>{{$newsByCategory->first()->category ?? ''}}</h2>
                        </div>
                        <div class="news-list-view">
                            <!--repeatable block-->
                            @foreach($newsByCategory as $news)
                                @dd($news)
                                <div class="news-item">
                                    <div class="news-image">
                                        <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                            <img
                                                src="https://www.breaknlinks.com/hindi/uploads/Mumbai%20Local%20Photo/unnamed.png"
                                                title="खाली पेट चबाएं तुलसी और पुदीना !"
                                                alt=""
                                                class="arch-img responsive-img">


                                        </a>
                                    </div>
                                    <div class="news-content">
                                        <h4 class="news-title">
                                            <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                                {{$news->title}}
                                            </a></h4>

                                        <ul class="hr-list wide stamp">
                                            <li>
                                                <i class="fa fa-clock-o"></i>
                                                {{\Carbon\Carbon::parse($news->publish_date)->format('Y-mm-d')}}
                                            </li>
                                            <li>
                                                <i class="fa fa-clock-o"></i>
                                                {{$news->author}}
                                            </li>

                                        </ul>
                                        <p>{!! $news->short_description !!}</p>
                                        <p><a href="{{route($routePrefix.'news.show',$news->news_slug)}}"
                                              class=" btn btn-viewAll"
                                              role="button">पूरी पढ़ें</a></p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--ended repeatable block-->
                        <div class="pagination-wrapper">
                            <nav class="base-pagination" aria-label="news-list-view">
                                <ul class="pagination">
                                    <li class="disabled"></li>
                                    <li class="active page-item"><a>1<span class="sr-only"></span></a></li>
                                    <li class="page-item"><a
                                            href="https://www.breaknlinks.com/hindi/category/blspecial-23/9">2</a>
                                    </li>
                                    <li class="page-item"><a
                                            href="https://www.breaknlinks.com/hindi/category/blspecial-23/18">3</a>
                                    </li>
                                    <li class="page-item"><a
                                            href="https://www.breaknlinks.com/hindi/category/blspecial-23/9">अर्को</a>
                                    </li>
                                    <li class="page-item"><a
                                            href="https://www.breaknlinks.com/hindi/category/blspecial-23/90">अन्तिम</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 float-right">
                        <div class="newsBlock type-1">
                            <div class="block-header gn-heading nh">
                                <h2><a>बिएल विशेष</a></h2>
                            </div>
                            <div class="block-body blspecial-body">
                                <!--repeatable news item block-->
                                <div class="news-item">
                                    <figure class="news-image">
                                        <img
                                            src="https://www.breaknlinks.com/hindi/uploads/Mumbai%20Local%20Photo/unnamed.png"
                                            alt="खाली पेट चबाएं तुलसी और पुदीना !">


                                    </figure>
                                    <div class="news-content">
                                        <h5 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1939">खाली
                                                पेट चबाएं तुलसी और पुदीना !</a></h5>


                                    </div>
                                    <ul class="hr-list wide stamp">
                                        <li> बिएल संवाददाता</li>
                                    </ul>
                                </div>


                                <div class="news-item">
                                    <figure class="news-image">
                                        <img
                                            src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/sumant_1.jpg"
                                            alt="वैश्विक सांस्कृतिक साम्राज्य के आगे दम तोड़ती पत्र-पत्रिकाएं।">


                                    </figure>
                                    <div class="news-content">
                                        <h5 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1911">वैश्विक
                                                सांस्कृतिक साम्राज्य के आगे दम तोड़ती पत्र-पत्रिकाएं।</a></h5>


                                    </div>
                                    <ul class="hr-list wide stamp">
                                        <li> बिएल संवाददाता</li>
                                    </ul>
                                </div>


                                <div class="news-item">
                                    <figure class="news-image">
                                        <img
                                            src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/yoga%20-%20exercise.jpg"
                                            alt="ब्रीदिंग एक्सरसाइज इंफेक्शन से लड़ने के लिए आपके फेफड़ों को बनाएगा मजबूत">


                                    </figure>
                                    <div class="news-content">
                                        <h5 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1863">ब्रीदिंग
                                                एक्सरसाइज इंफेक्शन से लड़ने के लिए आपके फेफड़ों को बनाएगा मजबूत</a></h5>


                                    </div>
                                    <ul class="hr-list wide stamp">
                                        <li> बिएल संवाददाता</li>
                                    </ul>
                                </div>


                                <div class="news-item">
                                    <figure class="news-image">
                                        <img
                                            src="https://www.breaknlinks.com/hindi/uploads/Indian%20Public%20Person/ravish-kumar-1028.jpg"
                                            alt="मीडिया के समाप्त कर दिए जाने के बाद उसी से उम्मीद के पत्र">


                                    </figure>
                                    <div class="news-content">
                                        <h5 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1852">मीडिया
                                                के समाप्त कर दिए जाने के बाद उसी से उम्मीद के पत्र</a></h5>


                                    </div>
                                    <ul class="hr-list wide stamp">
                                        <li> रवीश कुमार</li>
                                    </ul>
                                </div>


                                <div class="news-item">
                                    <figure class="news-image">
                                        <img
                                            src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/mouthwash.jpg"
                                            alt="माउथवॉश घर पर करें तैयार !">


                                    </figure>
                                    <div class="news-content">
                                        <h5 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1820">माउथवॉश
                                                घर पर करें तैयार !</a></h5>


                                    </div>
                                    <ul class="hr-list wide stamp">
                                        <li> बिएल संवाददाता</li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                        <div class="newsBlock type-8">
                            <div class="block-header gn-heading">
                                <h2><a href="#">ट्रेडिंग</a></h2>
                            </div>
                            <div class="block-body trendingNew">
                                <div class="news-item">
                                    <figure class="news-image">
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Bollyhood%20Mumbai/riya.jpg"
                                             alt="ड्रग्स केस में NCB ने बॉलीवुड अभिनेत्री रिया चक्रवर्ती को किया गिरफ्तार">


                                    </figure>
                                    <div class="news-content">
                                        <h4 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1954">ड्रग्स
                                                केस में NCB ने बॉलीवुड अभिनेत्री रिया चक्रवर्ती को किया गिरफ्तार</a>
                                        </h4>

                                    </div>

                                </div>

                                <div class="news-item">
                                    <figure class="news-image">
                                        <img
                                            src="https://www.breaknlinks.com/hindi/uploads/Mumbai%20Local%20Photo/dojar.jpg"
                                            alt="मुंबई आ रही कंगना, JCB से तोडा जा रहा उनका ऑफिस">


                                    </figure>
                                    <div class="news-content">
                                        <h4 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1956">मुंबई
                                                आ रही कंगना, JCB से तोडा जा रहा उनका ऑफिस</a></h4>

                                    </div>

                                </div>

                                <div class="news-item">
                                    <figure class="news-image">
                                        <img
                                            src="https://www.breaknlinks.com/hindi/uploads/Bollyhood%20Mumbai/Riya%20chakrawati.jpg"
                                            alt="रिया को कोर्ट में पेश किया गया, कोर्ट ने 14 दिन की न्यायिक हिरासत में भेजा">


                                    </figure>
                                    <div class="news-content">
                                        <h4 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1955">रिया
                                                को कोर्ट में पेश किया गया, कोर्ट ने 14 दिन की न्यायिक हिरासत में
                                                भेजा</a></h4>

                                    </div>

                                </div>

                                <div class="news-item">
                                    <figure class="news-image">
                                        <img
                                            src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/dojar.jpg"
                                            alt="बॉम्बे हाईकोर्ट ने कंगना रनौत के दफ्तर में तोड़फोड़ पर लगाई रोक">


                                    </figure>
                                    <div class="news-content">
                                        <h4 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1959">बॉम्बे
                                                हाईकोर्ट ने कंगना रनौत के दफ्तर में तोड़फोड़ पर लगाई रोक</a></h4>

                                    </div>

                                </div>

                                <div class="news-item">
                                    <figure class="news-image">
                                        <img
                                            src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/corona-in-maharashtra-800x445.jpg"
                                            alt="भारत में कोरोना के 89,706 नए मामले, 1,115 और लोगों की मौत">


                                    </figure>
                                    <div class="news-content">
                                        <h4 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1958">भारत
                                                में कोरोना के 89,706 नए मामले, 1,115 और लोगों की मौत</a></h4>

                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="tabNews-listing">
                            <div class="newsBlock type-1">
                                <div class="block-header gn-heading">
                                    <h2><a href="https://www.breaknlinks.com/hindi/category/link-27">लिंक</a></h2>
                                </div>
                                <div class="block-body">

                                    <div class="news-item">
                                        <figure class="news-image">

                                            <a href="https://www.breaknlinks.com/hindi/news/1931">

                                                <img
                                                    src="https://www.breaknlinks.com/hindi/uploads/reporter/0d1fef8a48c96d4c4b8a51e392059de7ndtv.jpg"
                                                    class="responsive-img">


                                            </a>
                                        </figure>
                                        <div class="news-content">
                                            <h5 class="news-title"><a
                                                    href="https://www.breaknlinks.com/hindi/news/1931">क्या कड़े
                                                    निर्णय के चक्कर में देश को गर्त में पहुंचा दिया PM मोदी ने?</a></h5>
                                            <ul class="hr-list wide stamp">
                                                <li> रवीश कुमार</li>

                                            </ul>
                                        </div>
                                    </div>


                                    <div class="news-item">
                                        <figure class="news-image">

                                            <a href="https://www.breaknlinks.com/hindi/news/1927">

                                                <img
                                                    src="https://www.breaknlinks.com/hindi/uploads/reporter/f32f236e5ecd7098f92bb591463965ccNavabharat.jpg"
                                                    class="responsive-img">


                                            </a>
                                        </figure>
                                        <div class="news-content">
                                            <h5 class="news-title"><a
                                                    href="https://www.breaknlinks.com/hindi/news/1927">हमेशा याद रखे
                                                    जाएंगे प्रणब मुखर्जी</a></h5>
                                            <ul class="hr-list wide stamp">
                                                <li> नवभारत</li>

                                            </ul>
                                        </div>
                                    </div>


                                    <div class="news-item">
                                        <figure class="news-image">

                                            <a href="https://www.breaknlinks.com/hindi/news/1923">

                                                <img
                                                    src="https://www.breaknlinks.com/hindi/uploads/reporter/8b76ca4198e7ff1d460754313905143dabplive.jpg"
                                                    class="responsive-img">


                                            </a>
                                        </figure>
                                        <div class="news-content">
                                            <h5 class="news-title"><a
                                                    href="https://www.breaknlinks.com/hindi/news/1923">चीन ने चुमार
                                                    में आज फिर घुसपैठ की कोशिश की, सेना ने मंसूबों को किया नाकाम</a>
                                            </h5>
                                            <ul class="hr-list wide stamp">
                                                <li> ABP Live</li>

                                            </ul>
                                        </div>
                                    </div>


                                    <div class="news-item">
                                        <figure class="news-image">

                                            <a href="https://www.breaknlinks.com/hindi/news/1918">

                                                <img
                                                    src="https://www.breaknlinks.com/hindi/uploads/reporter/5abef3854ec92abd6b1f37072b45db33dw.jpg"
                                                    class="responsive-img">


                                            </a>
                                        </figure>
                                        <div class="news-content">
                                            <h5 class="news-title"><a
                                                    href="https://www.breaknlinks.com/hindi/news/1918">क्या रिया
                                                    चक्रवर्ती का मीडिया ट्रायल हो रहा है?</a></h5>
                                            <ul class="hr-list wide stamp">
                                                <li> DW</li>

                                            </ul>
                                        </div>
                                    </div>


                                    <div class="news-item">
                                        <figure class="news-image">

                                            <a href="https://www.breaknlinks.com/hindi/news/1915">

                                                <img
                                                    src="https://www.breaknlinks.com/hindi/uploads/reporter/6f3ca753f732573014cd2833cf8fe8f1bbc.jpg"
                                                    class="responsive-img">


                                            </a>
                                        </figure>
                                        <div class="news-content">
                                            <h5 class="news-title"><a
                                                    href="https://www.breaknlinks.com/hindi/news/1915">नरेंद्र मोदी
                                                    के मन की बात को यूट्यूब पर किया जा रहा है 'नापसंद'</a></h5>
                                            <ul class="hr-list wide stamp">
                                                <li> बीबीसी हिंदी</li>

                                            </ul>
                                        </div>
                                    </div>


                                    <div class="news-item">
                                        <figure class="news-image">

                                            <a href="https://www.breaknlinks.com/hindi/news/1910">

                                                <img
                                                    src="https://www.breaknlinks.com/hindi/uploads/reporter/732d5c0a1c96d7f2b1a6cb6bde6d281camar.jpg"
                                                    class="responsive-img">


                                            </a>
                                        </figure>
                                        <div class="news-content">
                                            <h5 class="news-title"><a
                                                    href="https://www.breaknlinks.com/hindi/news/1910">गणेशोत्सव
                                                    शुरू करने में क्यों हुआ था तिलक का विरोध?</a></h5>
                                            <ul class="hr-list wide stamp">
                                                <li> हरगोविंद विश्वकर्मा</li>

                                            </ul>
                                        </div>
                                    </div>


                                    <div class="news-item">
                                        <figure class="news-image">

                                            <a href="https://www.breaknlinks.com/hindi/news/1908">

                                                <img
                                                    src="https://www.breaknlinks.com/hindi/uploads/reporter/bbb5a377caa8fabf86ca2c810df41376livehindustan.jpg"
                                                    class="responsive-img">


                                            </a>
                                        </figure>
                                        <div class="news-content">
                                            <h5 class="news-title"><a
                                                    href="https://www.breaknlinks.com/hindi/news/1908">जम्मू-कश्मीर:
                                                    सांबा सेक्टर में इंटरनेशनल बॉर्डर पर मिली सुरंग, रेत से भरी बोरियों
                                                    पर पाकिस्तान की मार्किंग</a></h5>
                                            <ul class="hr-list wide stamp">
                                                <li> Live हिन्दुस्तान</li>

                                            </ul>
                                        </div>
                                    </div>


                                    <div class="news-item">
                                        <figure class="news-image">

                                            <a href="https://www.breaknlinks.com/hindi/news/1907">

                                                <img
                                                    src="https://www.breaknlinks.com/hindi/uploads/reporter/d656db842338d75ddb40cf87902f559dbhaskar.jpg"
                                                    class="responsive-img">


                                            </a>
                                        </figure>
                                        <div class="news-content">
                                            <h5 class="news-title"><a
                                                    href="https://www.breaknlinks.com/hindi/news/1907">घरेलू उड़ानों
                                                    को लेकर सरकार की नई गाइडलाइन के बारे में वह सब कुछ जो आपको जानना
                                                    चाहिए</a></h5>
                                            <ul class="hr-list wide stamp">
                                                <li> दैनिक भास्कर</li>

                                            </ul>
                                        </div>
                                    </div>


                                    <div class="news-item">
                                        <figure class="news-image">

                                            <a href="https://www.breaknlinks.com/hindi/news/1906">

                                                <img
                                                    src="https://www.breaknlinks.com/hindi/uploads/reporter/8b76ca4198e7ff1d460754313905143dabplive.jpg"
                                                    class="responsive-img">


                                            </a>
                                        </figure>
                                        <div class="news-content">
                                            <h5 class="news-title"><a
                                                    href="https://www.breaknlinks.com/hindi/news/1906">बड़ी खबर: 7
                                                    सितंबर से देश भर में शुरू हो जाएगी मेट्रो सेवा</a></h5>
                                            <ul class="hr-list wide stamp">
                                                <li> ABP Live</li>

                                            </ul>
                                        </div>
                                    </div>


                                    <!--ended repeatbale block-->


                                    <a href="https://www.breaknlinks.com/hindi/category/link-27"
                                       class=" btn btn-viewAll float-right" role="button">सबै</a>


                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            </div>
        </section>
    </section>
@endsection
