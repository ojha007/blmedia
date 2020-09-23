<div class="newsBlock type-8 front_body_position_5" id="bl-break-section-01 ">
    @if(count($allNews))
        <div class="block-header gn-heading ">
            <h2>
                <a href="{{route($routePrefix.'news-category.show',$allNews->first()->category_slug)}}">
                    {{$allNews->first()->categories}}
                </a></h2>
        </div>
        <div class="block-body">
            @foreach($allNews as $key=>$news)
                @if($key==0)
                    <div class="news-item highlight-news">
                        <div class="ggl_adBlk _300x600 vr-block ">
                            <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                {{--<img src="{{$news->image}}" alt="{{$news->image}}"
                                     class="responsive-img">--}}
                                <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img">
                            </a>
                            <div class="news-content-am">
                                <h5 class="news-title-am"><a
                                        href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                        {{$news->title}}
                                    </a></h5>
                                {{--                                <ul class="hr-list wide stamp">--}}
                                {{--                                    <li>--}}
                                {{--                                        <i class="fa fa-circle blus"></i>--}}
                                {{--                                        blmedia--}}
                                {{--                                    </li>--}}

                                {{--                                </ul>--}}
                                @include('frontend::components.news.news-author')
                            </div>
                        </div>

                    </div>
                @else
                    <div class="news-item breakNew">
                        @include('frontend::components.news.news-image')
                        <div class="news-content">
                            @include('frontend::components.news.news-content')
                            @include('frontend::components.news.news-author')

                        </div>
                    </div>
                @endif

            @endforeach
            @include('frontend::components.buttons.view-all-category-button', ['position' => $allNews])
        </div>
    @endif

</div>
