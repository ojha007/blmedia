<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="big_bx">
            @if(count($newsByCategory))
                @include('frontend::components.news.news-image',['news'=>$newsByCategory->first()])
                <div class="ovrLay">
                    <h2 class="news-title">
                        <a
                            href="{{route($routePrefix.'news.show',$newsByCategory->first()->news_slug)}}">
                            {{$newsByCategory->first()->title}}
                        </a>
                    </h2>
                </div>
                <p>
                    {!! $newsByCategory->first()->short_description !!}
                </p>
            @endif
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="row">
            @foreach($newsByCategory->take(4) as $key=>$news)
                @if($key > 0)
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="small_bx">
                            @include('frontend::components.news.news-image',['figureClass'=>''])
                            @include('frontend::components.news.news-content')
                            @include('frontend::components.news.news-author')
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="col col-12">
        @include('frontend::components.buttons.view-all-category-button', ['position' => $newsByCategory])
    </div>
</div>
@include('frontend::components.subChild')
