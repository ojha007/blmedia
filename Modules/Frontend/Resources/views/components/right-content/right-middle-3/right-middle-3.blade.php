<div class="newsBlock type-8">
    @if(count($ninthPositionNews))
        <div class="block-header gn-heading">
            <h2>
                <a href="{{route($routePrefix.'news-category.show',$ninthPositionNews->first()->category_slug)}}">
                    {{$ninthPositionNews->first()->categories}}
                </a>
            </h2>
        </div>

        <div class="block-body trendingNew">
            @foreach($ninthPositionNews as $key=>$news)
                @if($key == 0)
                    <div class="news-item highlight-news">
                        <div class="ggl_adBlk _300x600 vr-block ">
                            <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                <img src="{{$news->image}}" alt="{{$news->image}}"
                                     class="responsive-img" title="">
                            </a>
                            <div class="news-content-am">
                                <h5 class="news-title-am"><a
                                        href="{{route($routePrefix.'news.show',$news->slug)}}">
                                        {{$news->title}}
                                    </a>
                                </h5>
                                <ul class="hr-list wide stamp">
                                    <li><i class="fa fa-circle blus"></i>{{$news->reporter_name}}</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="news-item">
                        <figure class="news-image">
                            <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                <img src="{{$news->image}}" alt="{{$news->image}}"
                                     class="responsive-img" title="">
                            </a>
                        </figure>
                        <div class="news-content">
                            <h5 class="news-title-am"><a
                                    href="{{route($routePrefix.'news.show',$news->slug)}}">
                                    {{$news->title}}
                                </a>
                            </h5>
                        </div>

                    </div>
                @endif

            @endforeach

        </div>
    @endif
</div>
