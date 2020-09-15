<div class="newsBlock type-8">
    @if(count($seventhPositionNews))
        <div class="block-header gn-heading">
            <h2>
                <a href="{{route($routePrefix.'news-category.show',$seventhPositionNews->first()->category_slug)}}">
                    {{$seventhPositionNews->first()->categories}}
                </a>
            </h2>
        </div>
        <div class="block-body bicharNew">
            @foreach($seventhPositionNews as $news)
                <div class="news-item">
                    <figure class="news-image">
                        <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                            <img src="{{$news->image}}" alt="{{$news->image}}"
                                 class="responsive-img am-circle-img" title="">
                        </a>
                    </figure>
                    <div class="news-content">
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

            @endforeach
            {{--            <a href="https://www.breaknlinks.com/hindi/category/opinion-32"--}}
            {{--               class=" btn btn-viewAll float-right" role="button">सब</a>--}}
        </div>
    @endif
</div>
