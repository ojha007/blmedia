<div class="newsBlock type-8 front_body_position_7" >
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
                        <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                           {{-- <img src="{{$news->image}}" alt="{{$news->image}}"
                                 class="responsive-img am-circle-img" title="">--}}
                            <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img" >
                        </a>
                    </figure>
                    <div class="news-content">
                        <h5 class="news-title-am"><a
                                href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                {{$news->title}}
                            </a>
                        </h5>
                        <ul class="hr-list wide stamp">
                            <li><i class="fa fa-circle blus"></i> blmedia</li>

                        </ul>
                    </div>

                </div>
            @endforeach
                @include('frontend::components.buttons.view-all-category-button', ['position' => $seventhPositionNews])
        </div>
    @endif
</div>
