<div class="newsBlock front_body_position_6 type-5">
    @if(count($sixthPositionNews))
        @include('frontend::components.news.category-heading',['allNews'=>$sixthPositionNews])
        <div class="block-body">
            <div class="row d-block">
                @foreach($sixthPositionNews as $key=>$news)
                    @if($key == 0)
                        <div class="news-item highlight-news">
                            @include('frontend::components.news.news-image')
                            <div class="news-content" style="height: auto;">
                                <h5 class="news-title-am">
                                    <a
                                        href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                        {{$news->title}}
                                    </a></h5>
                                @include('frontend::components.news.news-author')
                                <p class="short-news">
                                    {!! $news->short_description !!}
                                </p>
                            </div>
                        </div>
                    @elseif($key <=3)
                        <div class="news-item">
                            @include('frontend::components.news.news-image')
                            <div class="news-content">
                                @include('frontend::components.news.news-content')
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            {{--            <div class="row d-block">--}}
            {{--                <div class="news-items">--}}
            {{--                    @foreach($sixthPositionNews as $key=>$news)--}}
            {{--                        @if($key >3)--}}
            {{--                            <div class="news-contents amdot">--}}
            {{--                                <div class="col-md-3 pull-left">--}}
            {{--                                    <a href="{{route($routePrefix.'news.show',$news->news_slug)}}"--}}
            {{--                                       class="text-dark">--}}
            {{--                                        {{$news->title}}--}}
            {{--                                    </a>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

            {{--                            <h4 class="news-title blamtitle">--}}
            {{--                                <i class="fa fa-info-circle text-dark" aria-hidden="true"></i>&nbsp;--}}

            {{--                            </h4>--}}
            {{--                </div>--}}

            {{--                @endif--}}
            {{--                @endforeach--}}
            {{--            </div>--}}
        </div>

        @include('frontend::components.buttons.view-all-category-button', ['position' => $sixthPositionNews])
    @endif
</div>


