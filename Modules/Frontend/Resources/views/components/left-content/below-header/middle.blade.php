<div class="newsBlock front_body_position_2 type-2 " id="BL_link ">
    @if(count($secondPositionNews))
        <div class="block-header gn-heading">

            <h2>
                <a href="{{route($routePrefix.'news-category.show',$secondPositionNews->first()->category_slug)}}">
                    {{$secondPositionNews->first()->categories}}
                </a>
            </h2>

        </div>
        <div class="block-body">
            @foreach($secondPositionNews as $key=>$news)
                @if($key == 0)
                    <div class="news-item highlight-news">
                        <figure class="news-image">

                            {{--                        <a href="{{route($routePrefix.'news.show',$news->slug)}}">--}}
                            {{--                            <img src="{{$news->image}}" alt="{{$news->image_description}}"--}}
                            {{--                                 title="{{$news->image_title}}" class="img responsive-img">--}}
{{--                </a>--}}
                            <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img">
                        </figure>

                        <div class="news-content">
                            <h4 class="news-title"><a
                                    href="{{route($routePrefix.'news.show',$news->slug)}}">
                                    {{$news->title}}
                                </a></h4>
                            <ul class="hr-list wide stamp">
                                <li><i class="fa fa-circle blus"></i> blmedia</li>
                            </ul>
                            <p> {{Str::limit($news->short_description), 10}}</p>
                        </div>
                    </div>
                @else
                    <div class="news-item">
                        <figure class="news-image">
                            <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                {{--                            <img src="{{$news->image}}" alt="{{$news->image_description}}"--}}
                                {{--                                 title="{{$news->image_title}}">--}}
                                <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img" >
                            </a>
                            <ul class="hr-list wide stamp">
                                <li><i class="fa fa-circle blus"></i> blmedia</li>
                            </ul>
                        </figure>
                        <div class="news-content">
                            <h4 class="news-title"><a
                                    href="{{route($routePrefix.'news.show',$news->slug)}}">
                                    {{$news->title}}
                                </a></h4>

                            <p>{{\Str::limit($news->short_description), 300}}</p>

                        </div>
                    </div>
                @endif
            @endforeach

                @include('frontend::components.buttons.view-all-category-button', ['position' => $secondPositionNews])
        </div>
    @endif
</div>
