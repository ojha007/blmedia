<div class="newsBlock type-8 front_body_position_5" id="bl-break-section-01 " >
    @if(count($fifthPositionNews))
        <div class="block-header gn-heading ">
            <h2>
                <a href="{{route($routePrefix.'news-category.show',$fifthPositionNews->first()->category_slug)}}">
                    {{$fifthPositionNews->first()->categories}}
                </a></h2>
        </div>
        <div class="block-body">
            @foreach($fifthPositionNews as $key=>$news)
                @if($key==0)
                    <div class="news-item highlight-news">
                        <div class="ggl_adBlk _300x600 vr-block ">
                            <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                {{--<img src="{{$news->image}}" alt="{{$news->image}}"
                                     class="responsive-img">--}}
                                <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img" >
                            </a>
                            <div class="news-content-am">
                                <h5 class="news-title-am"><a
                                        href="{{route($routePrefix.'news.show',$news->slug)}}">
                                        {{$news->title}}
                                    </a></h5>
                                <ul class="hr-list wide stamp">
                                    <li><i class="fa fa-circle blus"></i>
                                        blmedia
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                @else

                    <div class="news-item breakNew">
                        <figure class="news-image">
                            <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                               {{-- <img src="{{$news->image}}" alt="{{$news->image}}"
                                     class="responsive-img">--}}
                                <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img" >
                            </a>
                        </figure>


                        <div class="news-content">
                            <h4 class="news-title"><a
                                    href="{{route($routePrefix.'news.show',$news->slug)}}">
                                    {{$news->title}}
                                </a></h4>
                            <ul class="hr-list wide stamp">
                                <li><i class="fa fa-circle blus"></i>
                                    blmedia
                                </li>

                            </ul>

                        </div>
                    </div>
                @endif

            @endforeach
                <a href="{{route($routePrefix.'news-category.show',$secondPositionNews->first()->category_slug)}}"
                   class=" btn btn-viewAll float-right" role="button">सब</a>
        </div>
    @endif

</div>
