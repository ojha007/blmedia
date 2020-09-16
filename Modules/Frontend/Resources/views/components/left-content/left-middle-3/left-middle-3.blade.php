<div class="newsBlock type-3">
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
                                <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                    <img src="{{$news->image}}" alt="{{$news->image}}"
                                         class="responsive-img" title="">
                                </a>
                            </figure>
                            <div class="news-content">
                                <h5 class="news-title"><a
                                        href="{{route($routePrefix.'news.show',$news->slug)}}">
                                        {{$news->title}}
                                    </a>
                                </h5>
                                <p class="short-news"> {!! $news->sub_title !!}</p>
                            </div>
                        </div>
                    @else
                        <div class="news-item am-news-item">
                            <figure class="news-image">
                                <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                    <img src="{{$news->image}}" alt="{{$news->image}}"
                                         class="responsive-img am-circle-img" title="">
                                </a>
                            </figure>
                            <div class="news-content">
                                <h5 class="news-title"><a
                                        href="{{route($routePrefix.'news.show',$news->slug)}}">
                                        {{$news->title}}
                                    </a>
                                </h5>
                            </div>
                        </div>
                    @endif
                @endforeach
                {{--                <a href="https://www.breaknlinks.com/hindi/category/econimics-5"--}}
                {{--                   class=" btn btn-viewAll float-right" role="button">सब</a>--}}
            </div>
        </div>
    @endif
</div>
