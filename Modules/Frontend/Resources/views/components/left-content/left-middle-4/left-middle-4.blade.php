<div class="newsBlock type-3 position-10 front_body_position_10" >
    @if(count($tenthPositionNews))
        <div class="block-header gn-heading">
            <h2>
                <a href="{{route($routePrefix.'news-category.show',$tenthPositionNews->first()->category_slug)}}">
                    {{$tenthPositionNews->first()->categories}}
                </a>
            </h2>
        </div>
        <div class="block-body">
            <div class="row d-block">
                @foreach($tenthPositionNews as $key=>$news)
                    @if($key == 0)
                        <div class="news-item highlight-news am-kala position-10-highlight">
                            @include('frontend::components.news.news-image')
                            <div class="news-content">
                                <h5 class="news-title-am"><a
                                        href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                        {{$news->title}}
                                    </a>
                                </h5>
                                <p class="short-news">{!! $news->short_description !!}</p>
                            </div>
                        </div>
                    @else
                        <div class="news-item am-kala-item p-10-item">
                            @include('frontend::components.news.news-image')
                            <div class="news-content">
                                <h5 class="news-title-am"><a
                                        href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                        {{$news->title}}
                                    </a>
                                </h5>

                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            @include('frontend::components.buttons.view-all-category-button', ['position' => $tenthPositionNews])
        </div>
    @endif
</div>
