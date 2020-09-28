{{--@if(count($thirdPositionNews))
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
<<<<<<<<< Temporary merge branch 1
                    @include('frontend::components.news.news-image')
=========
                    <figure class="news-image">
                        <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                            <img src="{{$news->image}}" alt="{{$news->image}}"
                                 class="responsive-img" title="">
                        </a>
                    </figure>
>>>>>>>>> Temporary merge branch 2
                    <div class="news-content">
                        @include('frontend::components.news.news-content')
                        @include('frontend::components.news.news-author')
                    </div>
                </div>
            @endforeach
            @include('frontend::components.buttons.view-all-category-button', ['position' => $thirdPositionNews])
        </div>
<<<<<<<<< Temporary merge branch 1
    </div>
@endif
=========
</div>
@endif--}}

@include('frontend::components.news.news-template',
                                 [
                                     'allNews'=>$thirdPositionNews,
                                     'class'=>' blspecial-body bisheshNew'

                                     ])
