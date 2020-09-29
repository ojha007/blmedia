<div class="newsBlock type-3 front_body_position_8" style="padding: 0 15px;">
    @if(count($eighthPositionNews))
        @include('frontend::components.news.category-heading',['allNews'=>$eighthPositionNews])
        <div class="block-body">
            <div class="row d-block">
                @foreach($eighthPositionNews as $key=>$news)
                    @if($key == 0)
                        <div class="news-item highlight-news news-am-hl">
                            <div class="featured-img-fixed-height">
                                @include('frontend::components.news.news-image')
                            </div>
                            <div class="news-content">
                                @include('frontend::components.news.news-content')
                                @include('frontend::components.news.news-author')
                                <p class="short-news"> {!! $news->short_description !!}</p>
                            </div>
                        </div>
                    @else
                        <div class="news-item am-news-item">
                            <div class="fixed-height-img-2">
                                @include('frontend::components.news.news-image')
                            </div>
                            <div class="news-content">
                                @include('frontend::components.news.news-content',['limit'=>40])
                                @include('frontend::components.news.news-author')
                            </div>
                        </div>
                    @endif
                @endforeach
                @include('frontend::components.buttons.view-all-category-button', ['position' => $eighthPositionNews])
            </div>
        </div>
    @endif
</div>
