@if(count($secondPositionNews))
    <div class="newsBlock front_body_position_2 type-2 " id="BL_link ">
        @include('frontend::components.news.category-heading',['allNews'=>$secondPositionNews])
        <div class="block-body">
            @foreach($secondPositionNews as $key=>$news)
                @if($key == 0)
                    <div class="news-item highlight-news">
                        <div class="featured-img-fixed-height">
                            @include('frontend::components.news.news-image')
                        </div>
                        <div class="news-content">
                            @include('frontend::components.news.news-content')
                            @include('frontend::components.news.news-author')
                            <p> {{Str::limit($news->short_description), 10}}</p>
                        </div>
                    </div>
                @else
                    <div class="news-item">
                        <div class="fixed-height-img-2">
                            @include('frontend::components.news.news-image')
                        </div>
                        <div class="news-content">
                            @include('frontend::components.news.news-content')
                            @include('frontend::components.news.news-author')
                            <p>{{\Str::limit($news->short_description), 300}}</p>
                        </div>
                    </div>
                @endif
            @endforeach
            @include('frontend::components.buttons.view-all-category-button', ['position' => $secondPositionNews])
        </div>
</div>
@endif
