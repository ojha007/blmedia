@if(count($allNews))
    <div class="newsBlock type-8 front_body_position_3 ">
        <div class="block-header gn-heading">
            <h2>
                <a href="{{route($routePrefix.'news-category.show',$allNews->first()->category_slug)}}">
                    {{$allNews->first()->categories}}
                </a>
            </h2>
        </div>
        <div class="block-body {{$class ?? ''}}">
            @foreach($allNews as $news)
                <div class="news-item">
                    @include('frontend::components.news.news-image')
                    <div class="news-content">
                        @include('frontend::components.news.news-content')
                        @include('frontend::components.news.news-author')
                    </div>
                </div>
            @endforeach
            @include('frontend::components.buttons.view-all-category-button', ['position' => $allNews])
        </div>
    </div>
@endif