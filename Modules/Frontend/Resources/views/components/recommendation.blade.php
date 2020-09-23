@isset($ads_above_recommendation_news)
    @include('frontend::components.ads.ads-1',['ads'=>$ads_above_recommendation_news])
@endisset
<div class="section-row">
    <div class="newsBlock type-4 recommendation">
        <div class="block-header gn-heading">
            <h2><a href="#">{{trans('messages.other_news')}}</a></h2>
        </div>
        <div class="block-body">
            <div class="row">
                @foreach($sameCategoryNews as $key=>$news)
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 float-left">
                        <div class="news-item no-bdr">
                            <figure class="news-image">
                                <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                    {{--<img src="{{$news->image}}" alt="{{$news->image}}"
                                         class="responsive-img" title="">--}}
                                    <img src="{{asset('frontend/img/orange.jpg')}}" alt=""
                                         class="responsive-img">
                                </a>
                            </figure>
                            <div class="news-content">
                                <h5 class="news-title"><a
                                        href="{{route($routePrefix.'news.show',$news->news_slug)}}">
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
@isset($ads_below_recommendation_news)
    @include('frontend::components.ads.ads-1',['ads'=>$ads_below_recommendation_news])
@endisset
