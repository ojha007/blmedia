<div class="newsBlock type-3 front_body_position_8" >
    @if(count($eighthPositionNews))
        <div class="block-header gn-heading">
            <h2>
                <a href="{{route($routePrefix.'news-category.show',$eighthPositionNews->first()->category_slug)}}">
                    {{$eighthPositionNews->first()->categories}}
                </a>
            </h2>
        </div>
        <div class="block-body">
            <div class="row d-block">
                @foreach($eighthPositionNews as $key=>$news)
                    @if($key == 0)
                        <div class="news-item highlight-news news-am-hl">
                            <figure class="news-image">
                                <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                    {{--<img src="{{$news->image}}" alt="{{$news->image}}"
                                         class="responsive-img" title="">--}}
                                    <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img" >
                                </a>
                            </figure>
                            <div class="news-content">
                                <h5 class="news-title"><a
                                        href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                        {{$news->title}}
                                    </a>
                                </h5>
                                <p class="short-news"> {!! $news->short_description !!}</p>
                            </div>
                        </div>
                    @else
                        <div class="news-item am-news-item">
                            <figure class="news-image">
                                <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                    {{--<img src="{{$news->image}}" alt="{{$news->image}}"
                                         class="responsive-img am-circle-img" title="">--}}
                                    <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img" >
                                </a>
                            </figure>
                            <div class="news-content">
                                <h5 class="news-title"><a
                                        href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                        {{\Str::limit($news->title, 69)}}
                                    </a>
                                </h5>
                            </div>
                        </div>
                    @endif
                @endforeach
                    @include('frontend::components.buttons.view-all-category-button', ['position' => $eighthPositionNews])
            </div>
        </div>
    @endif
</div>
