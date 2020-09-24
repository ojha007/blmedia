<div class="newsBlock type-6 position-12 front_body_position_12" >
    @if(count($twelvePositionNews))
        <div class="block-header gn-heading">
            <h2>
                <a href="{{route($routePrefix.'news-category.show',$twelvePositionNews->first()->category_slug)}}">
                    {{$twelvePositionNews->first()->categories}}
                </a>
            </h2>
        </div>
        <div class="block-body">
            <div class="row">
                @foreach($twelvePositionNews as $key=>$news)
                    @if($key ==0 )
                        <div class="col eq-highlight">
                            <div class="news-item">
                                <figure >
                                    <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                        <img src="{{is_null($news->image) ? asset('frontend/img/logo.png') :  $news->image}}"
                                             alt="{{$news->image_alt}}"
                                             title="{{$news->image_description}}"
                                             class="responsive-img {{$imgClass ?? ''}}">

                                    </a>
                                </figure>
                                <div class="news-content">
                                    <h5 class="news-title new-title-type001"><a
                                            href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                            {{$news->title}}
                                        </a>
                                    </h5>
                                    <p class="short-news"> {!! $news->short_description !!}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="col eq-listing">
                    <div class="row">
                        @foreach($twelvePositionNews as $key=>$news)
                            @if($key >0)
                                <div class="news-item">
                                    @include('frontend::components.news.news-image')
                                    <div class="news-content">
                                        <h5 class="news-title">
                                            <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                                {{$news->title}}
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
            @include('frontend::components.buttons.view-all-category-button', ['position' => $twelvePositionNews])
            @endif
        </div>
</div>
