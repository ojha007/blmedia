<div class="newsBlock type-2 " id="BL_link">

    <div class="block-header gn-heading">

        <h2>
            @if(count($secondPositionNews))
                <a href="{{route($routePrefix.'news-category.show',$secondPositionNews->first()->category_slug)}}">
                    {{$secondPositionNews->first()->categories}}
                </a>
            @endif
        </h2>

        @if(count($secondPositionNews))

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
                            {{--                        </a>--}}
                        </figure>


                    <div class="news-content">
                        <h4 class="news-title"><a
                                    href="{{route($routePrefix.'news.show',$news->slug)}}">
                                {{$news->title}}
                            </a></h4>
                        <ul class="hr-list wide stamp">
                            <li><i class="fa fa-circle blus"></i>{{$news->guest_name}}</li>
                        </ul>
                        <p> {{$news->sub_title}}</p>
                    </div>
                </div>
            @else
                <div class="news-item">
                    <figure class="news-image">
                        <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                            <img src="{{$news->image}}" alt="{{$news->image_description}}"
                                 title="{{$news->image_title}}">
                        </a>
                        <ul class="hr-list wide stamp">
                            <li><i class="fa fa-circle blus"></i>{{$news->guest_name}}</li>
                        </ul>
                    </figure>
                    <div class="news-content">
                        <h4 class="news-title"><a
                                    href="{{route($routePrefix.'news.show',$news->slug)}}">
                                {{$news->title}}
                            </a></h4>

                        <div class="news-content">
                            <h4 class="news-title"><a
                                    href="{{route($routePrefix.'news.show',$news->slug)}}">
                                    {{$news->title}}
                                </a></h4>
                            <ul class="hr-list wide stamp">
                                <li><i class="fa fa-circle blus"></i>{{$news->guest_name}}</li>
                            </ul>
                            <p> {{$news->sub_title}}</p>
                        </div>
                    </div>
                @else
                    <div class="news-item">
                        <figure class="news-image">
                            <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                {{--                            <img src="{{$news->image}}" alt="{{$news->image_description}}"--}}
                                {{--                                 title="{{$news->image_title}}">--}}
                            </a>
                            <ul class="hr-list wide stamp">
                                <li><i class="fa fa-circle blus"></i>{{$news->guest_name}}</li>
                            </ul>
                        </figure>
                        <div class="news-content">
                            <h4 class="news-title"><a
                                    href="{{route($routePrefix.'news.show',$news->slug)}}">
                                    {{$news->title}}
                                </a></h4>


                            <p>{{$news->sub_title}}</p>

                        </div>
                    </div>

                </div>
            @endif
        @endforeach
        @if(count($secondPositionNews))
            <a href="{{route($routePrefix.'news-category.show',$secondPositionNews->first()->category_slug)}}"
               class=" btn btn-viewAll float-right" role="button">सब</a>
        @endif
    </div>
                @endif
            @endforeach
            <a href="{{route($routePrefix.'news-category.show',$secondPositionNews->first()->category_slug)}}"
               class=" btn btn-viewAll float-right" role="button">सब</a>
        </div>
    @endif

</div>
