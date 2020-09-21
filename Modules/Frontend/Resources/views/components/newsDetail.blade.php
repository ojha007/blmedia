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
                                               class="highlight">
                                                <span class="usr">
                                                    {{ $news->reporter ? $news->reporter->name
                                                     :( $news->guest ? $news->guest->name:'')  }}
                                                    </span>
                                            </a>

                                        </p>
                                        <ul class="post-info-details">
                                            <li>
                                                <p>  {{ Carbon\Carbon::parse($news->publish_date)->format('Y-m-d') }} </p>
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
                                    @foreach($sameCategoryNews as $key=>$news)
                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 float-left">
                                            <div class="news-item no-bdr">
                                                <figure class="news-image">
                                                    <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                                        {{--<img src="{{$news->image}}" alt="{{$news->image}}"
                                                             class="responsive-img" title="">--}}
                                                        <img src="{{asset('frontend/img/orange.jpg')}}" alt="">
                                                    </a>
                                                </figure>
                                                <div class="news-content">
                                                    <h5 class="news-title"><a
                                                                href="{{route($routePrefix.'news.show',$news->slug)}}">
                                                            {{$news->title}}
                                                        </a>
                                                    </h5>
                                                    <ul class="hr-list wide stamp">
                                                        <li>
                                                            <p><i class="fa fa-clock-o"></i>
                                                                {{ Carbon\Carbon::parse($news->publish_date)->format('Y-m-d') }}
                                                            </p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--ended news details section-->
                <!--right panel section-->
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 float-right">
                    <div class="newsBlock type-8 front_body_position_3 ">
                        @if(count($firstPositionNews))
                            <div class="block-header gn-heading">
                                <h2><a href="">
                                        {{$firstPositionNews->first()->categories}}
                                    </a>
                                </h2>
                            </div>
                            <div class="block-body blspecial-body bisheshNew">
                                @foreach($firstPositionNews as $news)
                                    <div class="news-item">
                                        <figure class="news-image">
                                            <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                                {{--<img src="{{$news->image}}" alt="{{$news->image}}"
                                                     class="responsive-img" title="">--}}
                                                <img src="{{asset('frontend/img/orange.jpg')}}" alt=""
                                                     class="responsive-img">
                                            </a>
                                        </figure>
                                        <div class="news-content">
                                            <h5 class="news-title"><a
                                                        href="{{route($routePrefix.'news.show',$news->slug)}}">
                                                    {{$news->title}}
                                                </a></h5>
                                        </div>
                                        <ul class="hr-list wide stamp">
                                            <li><i class="fa fa-circle blus"></i> blmedia</li>
                                        </ul>
                                    </div>
                                @endforeach
                                <a href="{{route($routePrefix.'news-category.show',$firstPositionNews->first()->category_slug)}}"
                                   class=" btn btn-viewAll float-right" role="button">सब</a>
                            </div>
                        @endif
                    </div>
                    <div class="newsBlock type-8 front_body_position_9">
                        @if(count($secondPositionNews))
                            <div class="block-header gn-heading">
                                <h2>
                                    <a href="{{route($routePrefix.'news-category.show',$secondPositionNews->first()->category_slug)}}">
                                        {{$secondPositionNews->first()->categories}}
                                    </a>
                                </h2>
                            </div>
                            <div class="block-body trendingNew">
                                @foreach($secondPositionNews as $key=>$news)
                                    <div class="news-item">
                                        <figure class="news-image">
                                            <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                                {{--<img src="{{$news->image}}" alt="{{$news->image}}"
                                                     class="responsive-img" title="">--}}
                                                <img src="{{asset('frontend/img/orange.jpg')}}" alt="">
                                            </a>
                                        </figure>
                                        <div class="news-content">
                                            <h5 class="news-title"><a
                                                        href="{{route($routePrefix.'news.show',$news->slug)}}">
                                                    {{$news->title}}
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                @endforeach
                                <a href="{{route($routePrefix.'news-category.show',$secondPositionNews->first()->category_slug)}}"
                                   class=" btn btn-viewAll float-right" role="button">सब</a>
                            </div>
                        @endif
                    </div>
                    <div class="newsBlock front_body_position_1 type-1">
                        @if(count($thirdPositionNews))
                            <div class="block-header gn-heading">
                                <h2>
                                    <a href="{{route($routePrefix.'news-category.show',$thirdPositionNews->first()->category_slug)}}">
                                        {{$thirdPositionNews->first()->categories}}
                                    </a>
                                </h2>
                            </div>
                            <div class="block-body">
                                @foreach($thirdPositionNews as $news)
                                    <div class="news-item">
                                        <figure class="news-image">
                                            <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                                {{--                            <img src="{{$news->image}}" alt="{{$news->image}}"--}}
                                                {{--                                 class="responsive-img">--}}
                                                <img src="{{asset('frontend/img/orange.jpg')}}" alt=""
                                                     class="responsive-img" style="height: 5em;">
                                            </a>
                                        </figure>
                                        <div class="news-content new-type-1">
                                            <h5 class="news-title"><a
                                                        href="{{route($routePrefix.'news.show',$news->slug)}}">
                                                    {{$news->title}}
                                                </a></h5>
                                            <ul class="hr-list wide stamp">
                                                <li><i class="fa fa-circle blus"></i> blmedia</li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                                <a href="{{route($routePrefix.'news-category.show',$thirdPositionNews->first()->category_slug)}}"
                                   class=" btn btn-viewAll float-right" role="button">सब</a>
                            </div>
                        @endif
                    </div>
                    <!--ad banner-->
                    <div class="ggl_adBlk _300x600 vr-block "></div>
                    <!--ended ad banner-->
                </div>
                <!--ended right panel section-->
            </section>
            <div class="clearfix"></div>
        </div>
    </section>
@endsection
