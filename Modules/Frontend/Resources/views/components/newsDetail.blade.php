@extends('frontend::layouts.master')
@section('content')
        <section class="page-body">
            <div class="container-fluid">
                <section class="cmn-section">
                    <div class="col-sm-12">
                    </div>
                    <!--section news details-->
                    <div class="col-sm-12 col-md-8 col-lg-9 col-xl-9 float-left">
                        <div class="news-details">
                            <div class="details-header">
                                <h2 class="news-title">{!! $news->title !!}</h2>
                                <p class="subtitles">
                                    {!! $news->sub_title !!}
                                </p>
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <div class="post-info">
                                            <span>
                                                <img
                                                    src="https://www.breaknlinks.com/hindi/uploads/reporter/2487634d11ab76a0bf08a3facdb9de10BLLOGO.jpg"
                                                    class="responsive-img" alt="">
                                            </span>
                                            <p>
                                                <a href="https://www.breaknlinks.com/hindi/author/reporter/breaknlinks"
                                                   class="highlight"><span class="usr"> बिएल संवाददाता</span></a>

                                            </p>
                                            <ul class="post-info-details">
                                                <li>
                                                    <p> Sep 05, 2020 </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-8 col-lg-6">
                                        <div class="adsssss">
                                            <div class="addthis_inline_share_toolbox_lt3c"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    </div>
                                </div>
                            </div>
                            <div class="news-banner">
                                <figure class="bannerImg">
                                    <img width="100%"
                                         src="https://www.breaknlinks.com/hindi/uploads/Mumbai%20Local%20Photo/unnamed.png"
                                         class="img-responsive" alt="खाली पेट चबाएं तुलसी और पुदीना !">
                                </figure>
                            </div>

                            <div class="news-story">
                                <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 offset-lg-1">
                                    {!! $news->description !!}
                                    <div class="col-sm-6 col-xs-12">
                                        Sep 05, 2020 11:04:15 <b> - मे प्रकाशित </b>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="adsssss amadam">
                                            <div class="addthis_inline_share_toolbox_lt3c"></div>
                                        </div>
                                    </div>


                                </div>


                            </div>
                        </div>

                        <div class="cmn-fw">
                            <div class="hr-c">
                                <div class="ggl_adBlk _930x180">
                                </div>
                            </div>
                        </div>
                        <!--ended horizontal wide banner ad-->
                        <div class="section-row">
                            <div class="commentReview">
                                <div class="block-header">
                                    <h2>अपना काँमेंट लिखें</h2>
                                </div>
                                <div class="block-body">
                                    <!--if user is not logged then this block shold be display-->
                                    <div class="commentLogin">
                                        <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop"
                                             data-href="https://www.breaknlinks.com/hindi/news/1939" data-width="100%"
                                             data-numposts="5" fb-xfbml-state="rendered"
                                             fb-iframe-plugin-query="app_id=264188744527053&amp;container_width=912&amp;height=100&amp;href=https%3A%2F%2Fwww.breaknlinks.com%2Fhindi%2Fnews%2F1939&amp;locale=en_US&amp;numposts=5&amp;sdk=joey&amp;version=v4.0&amp;width="
                                             style="width: 100%;"><span
                                                style="vertical-align: top; width: 100%; height: 0px; overflow: hidden;"><iframe
                                                    name="f10491cb376b48" width="1000px" height="100px"
                                                    data-testid="fb:comments Facebook Social Plugin"
                                                    title="fb:comments Facebook Social Plugin" frameborder="0"
                                                    allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                    allow="encrypted-media"
                                                    src="https://www.facebook.com/v4.0/plugins/comments.php?app_id=264188744527053&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df202fa61db2be6c%26domain%3Dwww.breaknlinks.com%26origin%3Dhttps%253A%252F%252Fwww.breaknlinks.com%252Ff29dde41e6a9a1%26relation%3Dparent.parent&amp;container_width=912&amp;height=100&amp;href=https%3A%2F%2Fwww.breaknlinks.com%2Fhindi%2Fnews%2F1939&amp;locale=en_US&amp;numposts=5&amp;sdk=joey&amp;version=v4.0&amp;width="
                                                    style="border: none; visibility: visible; width: 0px; height: 0px;"
                                                    __idm_frm__="164"></iframe></span></div>
                                    </div>
                                    <!--ended login block-->


                                </div>
                            </div>
                        </div>
                        <div class="section-row">
                            <div class="newsBlock type-4">
                                <div class="block-header gn-heading">
                                    <h2><a href="#">अन्य खबरें</a></h2>
                                </div>
                                <div class="block-body">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 float-left">
                                            <div class="news-item no-bdr">
                                                <figure class="news-image">
                                                    <a href="https://www.breaknlinks.com/hindi/news/1974"> <img
                                                            src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/Untitled-1%20copy_9.jpg"
                                                            alt="डॉ. रघुवंश के निधन पर PM ने जताया दुख, बोले- 'रघुवंश बाबू के जाने से बिहार और देश की राजनीति में शून्य पैदा हुआ है'"></a>
                                                </figure>
                                                <div class="news-content">
                                                    <h4 class="news-title"><a
                                                            href="https://www.breaknlinks.com/hindi/news/1974">डॉ.
                                                            रघुवंश के निधन पर PM ने जताया दुख, बोले- 'रघुवंश बाबू के
                                                            जाने से बिहार और देश की राजनीति में शून्य पैदा हुआ है'</a>
                                                    </h4>
                                                    <ul class="hr-list wide stamp">
                                                        <li>
                                                            <p><i class="fa fa-clock-o"></i>
                                                                Sep 13, 2020 </p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 float-left">
                                            <div class="news-item no-bdr">
                                                <figure class="news-image">
                                                    <a href="https://www.breaknlinks.com/hindi/news/1973"> <img
                                                            src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/kangna-and-uddhav-thackeray-764x430.jpg"
                                                            alt="विवादों में फंस क्या परेशान हैं कंगना? कहा- उलझती जा रही हूं"></a>
                                                </figure>
                                                <div class="news-content">
                                                    <h4 class="news-title"><a
                                                            href="https://www.breaknlinks.com/hindi/news/1973">विवादों
                                                            में फंस क्या परेशान हैं कंगना? कहा- उलझती जा रही हूं</a>
                                                    </h4>
                                                    <ul class="hr-list wide stamp">
                                                        <li>
                                                            <p><i class="fa fa-clock-o"></i>
                                                                Sep 13, 2020 </p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 float-left">
                                            <div class="news-item no-bdr">
                                                <figure class="news-image">
                                                    <a href="https://www.breaknlinks.com/hindi/news/1972"> <img
                                                            src="https://www.breaknlinks.com/hindi/uploads/Indian%20leader/amit-shah-10-764x430.jpg"
                                                            alt="अमित शाह देर रात एम्स में भर्ती, सांस लेने में तकलीफ"></a>
                                                </figure>
                                                <div class="news-content">
                                                    <h4 class="news-title"><a
                                                            href="https://www.breaknlinks.com/hindi/news/1972">अमित शाह
                                                            देर रात एम्स में भर्ती, सांस लेने में तकलीफ</a></h4>
                                                    <ul class="hr-list wide stamp">
                                                        <li>
                                                            <p><i class="fa fa-clock-o"></i>
                                                                Sep 13, 2020 </p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 float-left">
                                            <div class="news-item no-bdr">
                                                <figure class="news-image">
                                                    <a href="https://www.breaknlinks.com/hindi/news/1971"> <img
                                                            src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/army-4-764x430.jpg"
                                                            alt="PLA द्वारा अगवा युवा भारतीय सेना के सुपुर्द किए गए"></a>
                                                </figure>
                                                <div class="news-content">
                                                    <h4 class="news-title"><a
                                                            href="https://www.breaknlinks.com/hindi/news/1971">PLA
                                                            द्वारा अगवा युवा भारतीय सेना के सुपुर्द किए गए</a></h4>
                                                    <ul class="hr-list wide stamp">
                                                        <li>
                                                            <p><i class="fa fa-clock-o"></i>
                                                                Sep 12, 2020 </p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 float-left">
                                            <div class="news-item no-bdr">
                                                <figure class="news-image">
                                                    <a href="https://www.breaknlinks.com/hindi/news/1970"> <img
                                                            src="https://www.breaknlinks.com/hindi/uploads/Indian%20leader/devendra_fadanvis23_5356490_835x547-m.jpg"
                                                            alt="बिहार: भोजपुर में मीडिया से चर्चा कर रहे देवेन्द्र फडणवीस"></a>
                                                </figure>
                                                <div class="news-content">
                                                    <h4 class="news-title"><a
                                                            href="https://www.breaknlinks.com/hindi/news/1970">बिहार:
                                                            भोजपुर में मीडिया से चर्चा कर रहे देवेन्द्र फडणवीस</a></h4>
                                                    <ul class="hr-list wide stamp">
                                                        <li>
                                                            <p><i class="fa fa-clock-o"></i>
                                                                Sep 12, 2020 </p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 float-left">
                                            <div class="news-item no-bdr">
                                                <figure class="news-image">
                                                    <a href="https://www.breaknlinks.com/hindi/news/1967"> <img
                                                            src="https://www.breaknlinks.com/hindi/uploads/World%20top%20leader/Japan%20PM%20shinzo-abe%2011.jpg"
                                                            alt="कैसी होगी शिंजो आबे के बाद जापान की विदेश नीति"></a>
                                                </figure>
                                                <div class="news-content">
                                                    <h4 class="news-title"><a
                                                            href="https://www.breaknlinks.com/hindi/news/1967">कैसी होगी
                                                            शिंजो आबे के बाद जापान की विदेश नीति</a></h4>
                                                    <ul class="hr-list wide stamp">
                                                        <li>
                                                            <p><i class="fa fa-clock-o"></i>
                                                                Sep 12, 2020 </p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 float-left">
                                            <div class="news-item no-bdr">
                                                <figure class="news-image">
                                                    <a href="https://www.breaknlinks.com/hindi/news/1966"> <img
                                                            src="https://www.breaknlinks.com/hindi/uploads/Bollyhood%20Mumbai/kangana-ranaut-decides-work-764x430.jpg"
                                                            alt="कंगना टूटे ऑफिस से ही जारी रखेंगी काम, कारण जानकर हो जाएंगे हैरान"></a>
                                                </figure>
                                                <div class="news-content">
                                                    <h4 class="news-title"><a
                                                            href="https://www.breaknlinks.com/hindi/news/1966">कंगना
                                                            टूटे ऑफिस से ही जारी रखेंगी काम, कारण जानकर हो जाएंगे
                                                            हैरान</a></h4>
                                                    <ul class="hr-list wide stamp">
                                                        <li>
                                                            <p><i class="fa fa-clock-o"></i>
                                                                Sep 12, 2020 </p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 float-left">
                                            <div class="news-item no-bdr">
                                                <figure class="news-image">
                                                    <a href="https://www.breaknlinks.com/hindi/news/1963"> <img
                                                            src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/metrooo.jpg"
                                                            alt="दिल्ली: एयरपोर्ट लाइन पर मेट्रो की सभी सेवाएं बहाल"></a>
                                                </figure>
                                                <div class="news-content">
                                                    <h4 class="news-title"><a
                                                            href="https://www.breaknlinks.com/hindi/news/1963">दिल्ली:
                                                            एयरपोर्ट लाइन पर मेट्रो की सभी सेवाएं बहाल</a></h4>
                                                    <ul class="hr-list wide stamp">
                                                        <li>
                                                            <p><i class="fa fa-clock-o"></i>
                                                                Sep 12, 2020 </p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 float-left">
                                            <div class="news-item no-bdr">
                                                <figure class="news-image">
                                                    <a href="https://www.breaknlinks.com/hindi/news/1962"> <img
                                                            src="https://www.breaknlinks.com/hindi/uploads/Indian%20leader/narendra%20modi.jpg"
                                                            alt="PM मोदी आज सौपेंगे 1.70 लाख लोगों को उनके घर की चाभी"></a>
                                                </figure>
                                                <div class="news-content">
                                                    <h4 class="news-title"><a
                                                            href="https://www.breaknlinks.com/hindi/news/1962">PM मोदी
                                                            आज सौपेंगे 1.70 लाख लोगों को उनके घर की चाभी</a></h4>
                                                    <ul class="hr-list wide stamp">
                                                        <li>
                                                            <p><i class="fa fa-clock-o"></i>
                                                                Sep 12, 2020 </p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!--ended news details section-->

                    <!--right panel section-->
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
                                        <li><i class="fa fa-circle blus"></i> बिएल संवाददाता</li>
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
                                        <li><i class="fa fa-circle blus"></i> बिएल संवाददाता</li>
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
                                        <li><i class="fa fa-circle blus"></i> बिएल संवाददाता</li>
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
                                        <li><i class="fa fa-circle blus"></i> रवीश कुमार</li>
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
                                        <li><i class="fa fa-circle blus"></i> बिएल संवाददाता</li>
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


                        <!--ad banner-->
                        <!--ended ad banner-->

                        <!--tab news-->
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
                                                    href="https://www.breaknlinks.com/hindi/news/1931">क्या कड़े निर्णय
                                                    के चक्कर में देश को गर्त में पहुंचा दिया PM मोदी ने?</a></h5>
                                            <ul class="hr-list wide stamp">
                                                <li><i class="fa fa-circle blus"></i> रवीश कुमार</li>

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
                                                <li><i class="fa fa-circle blus"></i> नवभारत</li>

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
                                                    href="https://www.breaknlinks.com/hindi/news/1923">चीन ने चुमार में
                                                    आज फिर घुसपैठ की कोशिश की, सेना ने मंसूबों को किया नाकाम</a></h5>
                                            <ul class="hr-list wide stamp">
                                                <li><i class="fa fa-circle blus"></i> ABP Live</li>

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
                                                <li><i class="fa fa-circle blus"></i> DW</li>

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
                                                    href="https://www.breaknlinks.com/hindi/news/1915">नरेंद्र मोदी के
                                                    मन की बात को यूट्यूब पर किया जा रहा है 'नापसंद'</a></h5>
                                            <ul class="hr-list wide stamp">
                                                <li><i class="fa fa-circle blus"></i> बीबीसी हिंदी</li>

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
                                                    href="https://www.breaknlinks.com/hindi/news/1910">गणेशोत्सव शुरू
                                                    करने में क्यों हुआ था तिलक का विरोध?</a></h5>
                                            <ul class="hr-list wide stamp">
                                                <li><i class="fa fa-circle blus"></i> हरगोविंद विश्वकर्मा</li>

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
                                                <li><i class="fa fa-circle blus"></i> Live हिन्दुस्तान</li>

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
                                                    href="https://www.breaknlinks.com/hindi/news/1907">घरेलू उड़ानों को
                                                    लेकर सरकार की नई गाइडलाइन के बारे में वह सब कुछ जो आपको जानना
                                                    चाहिए</a></h5>
                                            <ul class="hr-list wide stamp">
                                                <li><i class="fa fa-circle blus"></i> दैनिक भास्कर</li>

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
                                                <li><i class="fa fa-circle blus"></i> ABP Live</li>

                                            </ul>
                                        </div>
                                    </div>


                                    <!--ended repeatbale block-->


                                    <a href="https://www.breaknlinks.com/hindi/category/link-27"
                                       class=" btn btn-viewAll float-right" role="button">सब</a>


                                </div>
                            </div>

                        </div>
                        <!--ended tab news-->

                        <!--ad banner-->
                        <div class="ggl_adBlk _300x600 vr-block ">

                        </div>
                        <!--ended ad banner-->
                    </div>
                    <!--ended right panel section-->
                </section>
                <div class="clearfix"></div>
            </div>
        </section>
    </section>
@endsection
