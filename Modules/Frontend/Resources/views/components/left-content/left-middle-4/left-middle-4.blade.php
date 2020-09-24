<div class="newsBlock type-3 position-10 front_body_position_10">
    @if(count($tenthPositionNews))
        @include('frontend::components.news.category-heading',['allNews'=>$tenthPositionNews])
        <div class="block-body">
            <div class="row d-block">
                @foreach($tenthPositionNews as $key=>$news)
                    @if($key == 0)
                        <div class="news-item highlight-news am-kala position-10-highlight">
                            @include('frontend::components.news.news-image')
                            <div class="news-content">
                                @include('frontend::components.news.news-content')
                                <p class="short-news">{!! $news->short_description !!}</p>
                            </div>
                        </div>
                    @else
                        <div class="news-item am-kala-item p-10-item">
                            @include('frontend::components.news.news-image')
                            <div class="news-content">
                                @include('frontend::components.news.news-content')
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            @include('frontend::components.buttons.view-all-category-button', ['position' => $tenthPositionNews])
        </div>
    @endif
</div>
