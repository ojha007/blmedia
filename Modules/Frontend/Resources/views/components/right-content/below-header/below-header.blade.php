@if(count($thirdPositionNews))
    <div class="newsBlock type-8 front_body_position_3">

        <div class="block-header gn-heading">
            <h2><a href="">
                    {{$thirdPositionNews->first()->categories}}
                </a>
            </h2>
        </div>
        <div class="block-body blspecial-body bisheshNew">
            @foreach($thirdPositionNews as $news)
                <div class="news-item">
                    @include('frontend::components.news.news-image')
                    <div class="news-content">
                        @include('frontend::components.news.news-content')
                        @include('frontend::components.news.news-author')
                    </div>
                </div>
            @endforeach
            @include('frontend::components.buttons.view-all-category-button', ['position' => $thirdPositionNews])
        </div>
    </div>
@endif
