<div class="newsBlock type-8 front_body_position_5" id="bl-break-section-01 ">
    @if(count($allNews))
        @include('frontend::components.news.category-heading')
        <div class="block-body">
            @foreach($allNews as $key=>$news)
                @if($key==0)
                    <div class="news-item highlight-news">
                        <div class="ggl_adBlk _300x600 vr-block ">
                            @include('frontend::components.news.news-image',['figureClass'=>''])
                            <div class="news-content-am">
                                @include('frontend::components.news.news-content',['class'=>'news-title-am'])
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
