<div class="newsBlock front_body_position_2 type-2 " id="BL_link ">
    @if(count($secondPositionNews))
        @include('frontend::components.news.category-heading',['allNews'=>$secondPositionNews])
        <div class="block-body">
            @foreach($secondPositionNews as $key=>$news)
                @if($key == 0)
                    <div class="news-item highlight-news">
                        @include('frontend::components.news.news-image')
                        <div class="news-content">
                            @include('frontend::components.news.news-content')
                            @include('frontend::components.news.news-author')
                            <p> {{Str::limit($news->short_description), 10}}</p>
                        </div>
                    </div>
                @else
                    <div class="news-item">
                        @include('frontend::components.news.news-image')
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
    @endif
</div>
