@if(count($thirdPositionNews))
    <div class="newsBlock type-8 front_body_position_3">
        <div class="container-fluid text-center">
            @include('frontend::components.ads.ads-2',[
                                'ads'=>$allAds,'placement'=>'above',
                                'sub_for'=>$thirdPositionNews->first()->category_slug
                                    ])
        </div>
        @include('frontend::components.news.category-heading',['allNews'=>$thirdPositionNews])
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
        <div class="container-fluid text-center">
            @include('frontend::components.ads.ads-2',[
                                'ads'=>$allAds,'placement'=>'below',
                                'sub_for'=>$thirdPositionNews->first()->category_slug
                                    ])
        </div>
    </div>
@endif
