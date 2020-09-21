<div class="newsBlock front_body_position_1 type-1" >
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
                    <figure class="news-image">
                        <a href="{{route($routePrefix.'news.show',$news->slug)}}">
{{--                            <img src="{{$news->image}}" alt="{{$news->image}}"--}}
{{--                                 class="responsive-img">--}}
                            <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img" style="height: 5em;">
                        </a>
                    </figure>
                    <div class="news-content new-type-1">
                        <h5 class="news-title"><a
                                href="{{route($routePrefix.'news.show',$news->slug)}}">
                                {{$news->title}}
                            </a></h5>
                        <ul class="hr-list wide stamp">
                            <li><i class="fa fa-circle blus"></i> blmedia</li>
                        </ul>
                    </div>
                </div>
            @endforeach
                @include('frontend::components.buttons.view-all-category-button', ['position' => $firstPositionNews])
        </div>
    @endif
</div>
