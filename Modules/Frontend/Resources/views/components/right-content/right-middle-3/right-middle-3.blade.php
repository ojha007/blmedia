<div class="newsBlock type-8" id="front_body_position_9">
    @if(count($ninthPositionNews))
        <div class="block-header gn-heading">
            <h2>
                <a href="{{route($routePrefix.'news-category.show',$ninthPositionNews->first()->category_slug)}}">
                    {{$ninthPositionNews->first()->categories}}
                </a>
            </h2>
        </div>
        <div class="block-body trendingNew">
            @foreach($ninthPositionNews as $key=>$news)
{{--                @if($key == 0)--}}
                    {{--<div class="news-item highlight-news">
                        <div class="ggl_adBlk _300x600 vr-block ">
                            <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                               --}}{{-- <img src="{{$news->image}}" alt="{{$news->image}}"
                                     class="responsive-img" title="">--}}{{--
                                <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img" >
                            </a>
                            <div class="news-content-am">
                                <h5 class="news-title-am"><a
                                        href="{{route($routePrefix.'news.show',$news->slug)}}">
                                        {{$news->title}}
                                    </a>
                                </h5>
                                <ul class="hr-list wide stamp">
                                    <li><i class="fa fa-circle blus"></i> blmedia</li>

                                </ul>
                            </div>
                        </div>
                    </div>--}}
{{--                @else--}}
                    <div class="news-item">
                        <figure class="news-image">
                            <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                {{--<img src="{{$news->image}}" alt="{{$news->image}}"
                                     class="responsive-img" title="">--}}
                                <img src="{{asset('frontend/img/orange.jpg')}}" alt=""  >
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
{{--                @endif--}}

            @endforeach

        </div>
    @endif
</div>
{{--
<div class="newsBlock type-8">
    <div class="block-header gn-heading">
        <h2><a href="#">ट्रेडिंग</a> </h2>
    </div>
    <div class="block-body trendingNew">
        <div class="news-item">
            <figure class="news-image">
                <img src="https://www.breaknlinks.com/hindi/uploads/Hindi%20bL%20Delhi%20Photo/kangna-and-uddhav-thackeray-764x430.jpg" alt="विवादों में फंस क्या परेशान हैं कंगना? कहा- उलझती जा रही हूं">
            </figure>
            <div class="news-content">
                <h4 class="news-title"><a href="https://www.breaknlinks.com/hindi/news/1973">विवादों में फंस क्या परेशान हैं कंगना? कहा- उलझती जा रही हूं</a></h4>
            </div>
        </div>
    </div>
</div>--}}
