<div class="newsBlock type-8 front_body_position_7" >
    @if(count($fourteenPositionNews))
        <div class="block-header gn-heading">
            <h2>
                <a href="{{route($routePrefix.'news-category.show',$fourteenPositionNews->first()->category_slug)}}">
                    {{$fourteenPositionNews->first()->categories}}
                </a>
            </h2>
        </div>
        <div class="block-body bicharNew">
            @foreach($fourteenPositionNews as $news)
                <div class="news-item">
                    <figure class="news-image">
                        <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                            {{-- <img src="{{$news->image}}" alt="{{$news->image}}"
                                  class="responsive-img am-circle-img" title="">--}}
                            <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img" >
                        </a>
                    </figure>
                    <div class="news-content">
                        <h5 class="news-title-am"><a
                                    href="{{route($routePrefix.'news.show',$news->slug)}}">
                                {{$news->title}}
                            </a>
                        </h5>
                        <ul class="hr-list wide stamp">
                            <li><i class="fa fa-circle blus"></i> blmedia</li>
                        </ul>
                    </div>
                </div>
            @endforeach
            @include('frontend::components.buttons.view-all-category-button', ['position' => $fourteenPositionNews])
        </div>
    @endif
</div>
