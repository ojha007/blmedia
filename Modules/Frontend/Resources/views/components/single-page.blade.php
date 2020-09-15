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
                            <h2>बिएल स्पेशल </h2>
                        </div>
                        <div class="news-list-view">
                            <!--repeatable block-->

                            <div class="news-item">
                                <div class="news-image">
                                    <a href="https://www.breaknlinks.com/hindi/news/1939">
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Mumbai%20Local%20Photo/unnamed.png"
                                             title="खाली पेट चबाएं तुलसी और पुदीना !" class="arch-img responsive-img">


                                    </a>
                                </div>
                                <div class="news-content">
                                    <h4 class="news-title"><a href="{{route($routePrefix.'detailPage')}}">खाली
                                            पेट चबाएं तुलसी और पुदीना !</a></h4>

                                    <ul class="hr-list wide stamp">
                                        <li><i class="fa fa-clock-o"></i> Sep 05, 2020</li>

                                    </ul>
                                    <p> तुलसी और पुदीना पारंपरिक भारतीय चिकित्सा प्रणाली का एक अभिन्न अंग रहा है। तुलसी
                                        के पत्तों में विटामिन ए, विटामिन डी, आयरन और फाइबर होते हैं, जो आपकी प्रतिरक्षा
                                        को बढ़ाने में मदद करते हैं और संक्रमण को कम करते हैं। वहीं आयुर्वेद के अनुसार,
                                        पुदीना कफ और वात दोष को कम करता है और भूख बढ़ाता है। ऐसे में जब आप इन दो</p>
                                    <p><a href="https://www.breaknlinks.com/hindi/news/1939" class=" btn btn-viewAll"
                                          role="button">पूरी पढ़ें</a></p>
                                </div>
                            </div>


                            <div class="news-item">
                                <div class="news-image">
                                    <a href="https://www.breaknlinks.com/hindi/news/1911">
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/sumant_1.jpg"
                                             title="वैश्विक सांस्कृतिक साम्राज्य के आगे दम तोड़ती पत्र-पत्रिकाएं।"
                                             class="arch-img responsive-img">


                                    </a>
                                </div>
                                <div class="news-content">
                                    <h4 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1911">वैश्विक
                                            सांस्कृतिक साम्राज्य के आगे दम तोड़ती पत्र-पत्रिकाएं।</a></h4>

                                    <ul class="hr-list wide stamp">
                                        <li><i class="fa fa-clock-o"></i> Aug 30, 2020</li>

                                    </ul>
                                    <p> सुमन्त

                                        बच्चों की एक बड़ी पुरानी और लोकप्रिय पत्रिका नंदन तथा बड़ों की कादंबनी बंद हो
                                        गयीं। इसके बहुत पहले इनसे भी अधिक लोकप्रिय और अत्यधिक बिक्री वाली हिंदी की ढेरों
                                        पत्र-पत्रिकाएं बंद हुई हैं।

                                        मुझे नहीं लगता कि हिंदी की जिन लोकप्रिय पत्रिकाओं को बंद किया गया है, वे न बिकने
                                        या आर्थ</p>
                                    <p><a href="https://www.breaknlinks.com/hindi/news/1911" class=" btn btn-viewAll"
                                          role="button">पूरी पढ़ें</a></p>
                                </div>
                            </div>


                            <div class="news-item">
                                <div class="news-image">
                                    <a href="https://www.breaknlinks.com/hindi/news/1863">
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/yoga%20-%20exercise.jpg"
                                             title="ब्रीदिंग एक्सरसाइज इंफेक्शन से लड़ने के लिए आपके फेफड़ों को बनाएगा मजबूत"
                                             class="arch-img responsive-img">


                                    </a>
                                </div>
                                <div class="news-content">
                                    <h4 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1863">ब्रीदिंग
                                            एक्सरसाइज इंफेक्शन से लड़ने के लिए आपके फेफड़ों को बनाएगा मजबूत</a></h4>

                                    <ul class="hr-list wide stamp">
                                        <li><i class="fa fa-clock-o"></i> Aug 17, 2020</li>

                                    </ul>
                                    <p> &nbsp;1. रिब स्ट्रेचिंग&nbsp;

                                        रिब स्ट्रेचिंग फेफड़ों की कार्यशैली को बेहतर बनाने के लिए बहुत महत्वपूर्ण है। इस
                                        अभ्यास के लिए, आपको सीधे खड़े होंना है और तब तक सांस छोड़ना है जब तक कि आपके फेफड़े
                                        खाली न हों। आप फिर धीरे-धीरे सांस लेंगे, जितना संभव हो सके अपने फेफड़ों को भरें।
                                        20 सेकंड के लिए, या ज</p>
                                    <p><a href="https://www.breaknlinks.com/hindi/news/1863" class=" btn btn-viewAll"
                                          role="button">पूरी पढ़ें</a></p>
                                </div>
                            </div>


                            <div class="news-item">
                                <div class="news-image">
                                    <a href="https://www.breaknlinks.com/hindi/news/1852">
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Indian%20Public%20Person/ravish-kumar-1028.jpg"
                                             title="मीडिया के समाप्त कर दिए जाने के बाद उसी से उम्मीद के पत्र"
                                             class="arch-img responsive-img">


                                    </a>
                                </div>
                                <div class="news-content">
                                    <h4 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1852">मीडिया
                                            के समाप्त कर दिए जाने के बाद उसी से उम्मीद के पत्र</a></h4>

                                    <ul class="hr-list wide stamp">
                                        <li><i class="fa fa-clock-o"></i> Aug 16, 2020</li>

                                    </ul>
                                    <p> ये पत्र ऐतिहासिक दस्तावेज़ हैं। बेशक फ़ेसबुक की संपत्ति हो जाएँगे क्योंकि ये
                                        किसी और जगह संकलित नहीं है। ये पत्र सूखे पत्रों की तरह इस इनबॉक्स से उस इनबॉक्स
                                        तक उड़ रहे हैं। हवा पत्तों को इस किनारे लगा देती है तो उस किनारे। इन नौजवानों को
                                        समझना होगा कि उनके भीतर आर्थिक मुद्दों की चेतना समाप्त कर दी गई है। तभी तो वे
                                        न</p>
                                    <p><a href="https://www.breaknlinks.com/hindi/news/1852" class=" btn btn-viewAll"
                                          role="button">पूरी पढ़ें</a></p>
                                </div>
                            </div>


                            <div class="news-item">
                                <div class="news-image">
                                    <a href="https://www.breaknlinks.com/hindi/news/1820">
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/mouthwash.jpg"
                                             title="माउथवॉश घर पर करें तैयार !" class="arch-img responsive-img">


                                    </a>
                                </div>
                                <div class="news-content">
                                    <h4 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1820">माउथवॉश
                                            घर पर करें तैयार !</a></h4>

                                    <ul class="hr-list wide stamp">
                                        <li><i class="fa fa-clock-o"></i> Aug 12, 2020</li>

                                    </ul>
                                    <p> मुंह की सफाई का ध्यान रखना बेहद जरुरी है। मुंह की प्रॉपर सफाई करने से हम कई सारी
                                        बीमारयिों से बच सकते हैं। मुंह की सफाई के लएि सिर्फ ब्रश करना ही काफी नहीं होता
                                        है। ब्रश से आपके दांतों की सतह पर जमे चिपचिपे पदार्थ की सफाई कुछ हद तक ही हो
                                        पाती है। मुंह की सफाई के लएि आप घर पर भी माउथवॉश तैयार कर सकते हैं। सही तरीके
                                        स</p>
                                    <p><a href="https://www.breaknlinks.com/hindi/news/1820" class=" btn btn-viewAll"
                                          role="button">पूरी पढ़ें</a></p>
                                </div>
                            </div>


                            <div class="news-item">
                                <div class="news-image">
                                    <a href="https://www.breaknlinks.com/hindi/news/1788">
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/Masks-photo.jpg"
                                             title="मास्क पहनने वाले स्वच्छता के प्रति भी सतर्क"
                                             class="arch-img responsive-img">


                                    </a>
                                </div>
                                <div class="news-content">
                                    <h4 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1788">मास्क
                                            पहनने वाले स्वच्छता के प्रति भी सतर्क</a></h4>

                                    <ul class="hr-list wide stamp">
                                        <li><i class="fa fa-clock-o"></i> Aug 09, 2020</li>

                                    </ul>
                                    <p> फेस मास्क लगाने से न सिर्फ वायरस से सुरक्षा मिलती है बल्कि मास्क लगाने वाले अपने
                                        हाथ साफ करना नहीं भूलते। ब्रिटिश वैज्ञानिकों ने अपने अध्ययन में इस बात का पता
                                        लगाया है। यह शोध बीएमजे जर्नल में प्रकाशित हुआ। इस वक्त दुनिया के 160 देशों में
                                        मास्क लगाना अनिवार्य है पर अमेरिका और यूरोप के देशों में अब भी मास्क लगाने
                                        को </p>
                                    <p><a href="https://www.breaknlinks.com/hindi/news/1788" class=" btn btn-viewAll"
                                          role="button">पूरी पढ़ें</a></p>
                                </div>
                            </div>


                            <div class="news-item">
                                <div class="news-image">
                                    <a href="https://www.breaknlinks.com/hindi/news/1729">
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Indian%20leader/narendra%20modi.jpg"
                                             title="नई शिक्षा नीति का लक्ष्य शिक्षा व्यवस्था शिक्षा के प्रयोजन, विषय-वस्तु में परिवर्तन करना है : मोदी"
                                             class="arch-img responsive-img">


                                    </a>
                                </div>
                                <div class="news-content">
                                    <h4 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1729">नई
                                            शिक्षा नीति का लक्ष्य शिक्षा व्यवस्था शिक्षा के प्रयोजन, विषय-वस्तु में
                                            परिवर्तन करना है : मोदी</a></h4>

                                    <ul class="hr-list wide stamp">
                                        <li><i class="fa fa-clock-o"></i> Aug 02, 2020</li>

                                    </ul>
                                    <p> प्रधानमंत्री नरेंद्र मोदी ने शनिवार को कहा कि नई शिक्षा नीति 2020 का लक्ष्य
                                        रोजगार मांगने वालों की जगह रोजगार देने वालों को तैयार करना और देश की शिक्षा
                                        प्रणाली के प्रयोजन तथा विषय-वस्तु में परिवर्तन का प्रयास करना है। चौथे ‘स्मार्ट
                                        इंडिया हैकाथन’ के फिनाले को संबोधित कर रहे मोदी ने कहा कि इस सप्ताह के शु</p>
                                    <p><a href="https://www.breaknlinks.com/hindi/news/1729" class=" btn btn-viewAll"
                                          role="button">पूरी पढ़ें</a></p>
                                </div>
                            </div>


                            <div class="news-item">
                                <div class="news-image">
                                    <a href="https://www.breaknlinks.com/hindi/news/1723">
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Animals%20%26%20Birds/tiger.jpg"
                                             title="अंतरराष्ट्रीय बाघ दिवस 2020: बाघ के लिए कहीं अधिक खूंखार है आदमी"
                                             class="arch-img responsive-img">


                                    </a>
                                </div>
                                <div class="news-content">
                                    <h4 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1723">अंतरराष्ट्रीय
                                            बाघ दिवस 2020: बाघ के लिए कहीं अधिक खूंखार है आदमी</a></h4>

                                    <ul class="hr-list wide stamp">
                                        <li><i class="fa fa-clock-o"></i> Jul 31, 2020</li>

                                    </ul>
                                    <p> बाघ या बड़ी बिल्ली परिवार का कोई भी सदस्य भरे-पूरे वन्यजीव संसार का संकेतक या
                                        मापक और स्वस्थ-संतुलित पर्यावरण का प्रतीक होता है,&nbsp;इसलिए इस अति महत्वपूर्ण
                                        जीव के विलुप्ति के कगार तक पहुंच जाने से चिंतित बाघों की मौजूदगी वाले 13 देशों
                                        ने सेंट पीटर्सबर्ग में 2010 में 2022 तक बाघों की संख्या दोगुनी कर 6 हजार तक
                                        पहुंच</p>
                                    <p><a href="https://www.breaknlinks.com/hindi/news/1723" class=" btn btn-viewAll"
                                          role="button">पूरी पढ़ें</a></p>
                                </div>
                            </div>


                            <div class="news-item">
                                <div class="news-image">
                                    <a href="https://www.breaknlinks.com/hindi/news/1721">
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Indian%20Public%20Person/ravish-kumar-1028.jpg"
                                             title="एक लाख पैकेट प्रसाद बंटेगा, शिलान्यास का एक अहम दस्तावेज़"
                                             class="arch-img responsive-img">


                                    </a>
                                </div>
                                <div class="news-content">
                                    <h4 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1721">एक लाख
                                            पैकेट प्रसाद बंटेगा, शिलान्यास का एक अहम दस्तावेज़</a></h4>

                                    <ul class="hr-list wide stamp">
                                        <li><i class="fa fa-clock-o"></i> Jul 31, 2020</li>

                                    </ul>
                                    <p> सरकारी प्रबंधन एक जटिल काम है। इस काम को आम जनता समग्रता में नहीं देख पाती।
                                        प्रशासनिक निर्देश की अलग अलग ख़बरों से पता नहीं चलता कि किस तरह से तैयारी की जा
                                        रही है। स्थानीय अख़बारों में तो काफ़ी कुछ छपता है मगर फिर भी इन्हें समग्रता से
                                        नहीं देखा जाता है। इनका रिसर्च भी नहीं होता है और निर्देश के बाद हर काम कैसे
                                        किया </p>
                                    <p><a href="https://www.breaknlinks.com/hindi/news/1721" class=" btn btn-viewAll"
                                          role="button">पूरी पढ़ें</a></p>
                                </div>
                            </div>


                            <!--ended repeatable block-->


                        </div>

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
                    <!--ended news listing section-->
                    <!--right pannel section-->
                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 float-right">
                        <div class="newsBlock type-1">
                            <div class="block-header gn-heading nh">
                                <h2><a>बिएल विशेष</a></h2>
                            </div>
                            <div class="block-body blspecial-body">
                                <!--repeatable news item block-->
                                <div class="news-item">
                                    <figure class="news-image">
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Mumbai%20Local%20Photo/unnamed.png"
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
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/sumant_1.jpg"
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
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/yoga%20-%20exercise.jpg"
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
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Indian%20Public%20Person/ravish-kumar-1028.jpg"
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
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/mouthwash.jpg"
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
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Mumbai%20Local%20Photo/dojar.jpg"
                                             alt="मुंबई आ रही कंगना, JCB से तोडा जा रहा उनका ऑफिस">


                                    </figure>
                                    <div class="news-content">
                                        <h4 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1956">मुंबई
                                                आ रही कंगना, JCB से तोडा जा रहा उनका ऑफिस</a></h4>

                                    </div>

                                </div>

                                <div class="news-item">
                                    <figure class="news-image">
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Bollyhood%20Mumbai/Riya%20chakrawati.jpg"
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
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/dojar.jpg"
                                             alt="बॉम्बे हाईकोर्ट ने कंगना रनौत के दफ्तर में तोड़फोड़ पर लगाई रोक">


                                    </figure>
                                    <div class="news-content">
                                        <h4 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1959">बॉम्बे
                                                हाईकोर्ट ने कंगना रनौत के दफ्तर में तोड़फोड़ पर लगाई रोक</a></h4>

                                    </div>

                                </div>

                                <div class="news-item">
                                    <figure class="news-image">
                                        <img src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/corona-in-maharashtra-800x445.jpg"
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

                                                <img src="https://www.breaknlinks.com/hindi/uploads/reporter/0d1fef8a48c96d4c4b8a51e392059de7ndtv.jpg"
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

                                                <img src="https://www.breaknlinks.com/hindi/uploads/reporter/f32f236e5ecd7098f92bb591463965ccNavabharat.jpg"
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

                                                <img src="https://www.breaknlinks.com/hindi/uploads/reporter/8b76ca4198e7ff1d460754313905143dabplive.jpg"
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

                                                <img src="https://www.breaknlinks.com/hindi/uploads/reporter/5abef3854ec92abd6b1f37072b45db33dw.jpg"
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

                                                <img src="https://www.breaknlinks.com/hindi/uploads/reporter/6f3ca753f732573014cd2833cf8fe8f1bbc.jpg"
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

                                                <img src="https://www.breaknlinks.com/hindi/uploads/reporter/732d5c0a1c96d7f2b1a6cb6bde6d281camar.jpg"
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

                                                <img src="https://www.breaknlinks.com/hindi/uploads/reporter/bbb5a377caa8fabf86ca2c810df41376livehindustan.jpg"
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

                                                <img src="https://www.breaknlinks.com/hindi/uploads/reporter/d656db842338d75ddb40cf87902f559dbhaskar.jpg"
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

                                                <img src="https://www.breaknlinks.com/hindi/uploads/reporter/8b76ca4198e7ff1d460754313905143dabplive.jpg"
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
                    <!--ended right pannel section-->
                </section>

            </div>
        </section>
    </section>
@endsection