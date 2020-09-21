<div class="newsBlock type-8 front_body_position_9" >
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
                    <div class="news-item">
                        <figure class="news-image">
                            <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                {{--<img src="{{$news->image}}" alt="{{$news->image}}"
                                     class="responsive-img" title="">--}}
                                <img src="{{asset('frontend/img/orange.jpg')}}" alt=""  >
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
            @endforeach
                @include('frontend::components.buttons.view-all-category-button', ['position' => $ninthPositionNews])
        </div>
    @endif
</div>

