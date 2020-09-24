<div class="newsBlock front_body_position_1 type-1">
    @if(count($firstPositionNews))
        <div class="block-header gn-heading">
            <h2>
                <a href="{{route($routePrefix.'news-category.show',$firstPositionNews->first()->category_slug)}}">
                    {{$firstPositionNews->first()->categories}}
                </a>
            </h2>
        </div>
        <div class="block-body">
            @foreach($firstPositionNews as $news)
                <div class="news-item">
                    @include('frontend::components.news.news-image')
                    <div class="news-content new-type-1">
                        <h5 class="news-title"><a
                                href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                {{$news->title}}
                            </a></h5>
                        <ul class="hr-list wide stamp">
                            <li>
                                <a href="{{route($routePrefix.'news.by.author',[$news->author_type,$news->author_slug])}}">
                                    <i class="fa fa-user"></i>
                                    {{$news->author_name}}

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
            @include('frontend::components.buttons.view-all-category-button', ['position' => $firstPositionNews])
        </div>
    @endif
</div>
