<div class="newsBlock type-8 " id="bl-break-section-01 front_body_position_11">
    @if(count($eleventhPositionNews))
        <div class="block-header gn-heading">
            <h2>
                <a href="{{route($routePrefix.'news-category.show',$eleventhPositionNews->first()->category_slug)}}">
                    {{$eleventhPositionNews->first()->categories}}
                </a>
            </h2>
        </div>
        <div class="block-body">
            @foreach($eleventhPositionNews as  $key=>$news)
                @if($key == 0)
                    <div class="news-item highlight-news">
                        <div class="ggl_adBlk _300x600 vr-block ">
                            <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                {{-- <img src="{{$news->image}}" alt="{{$news->image}}"
                                      class="responsive-img" title="">--}}
                                <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img">
                            </a>
                            <div class="news-content-am">
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
                    </div>
                @else
                    <div class="news-item ">
                        <figure class="news-image">
                            <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                {{--<img src="{{$news->image}}" alt="{{$news->image}}"
                                     class="responsive-img am-circle-img" title="">--}}
                                <img src="{{asset('frontend/img/orange.jpg')}}" alt=""
                                     class="responsive-img am-circle-img">
                            </a>
                        </figure>
                        <div class="news-content">
                            <h5 class="news-title-am"><a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                    {{$news->title}}
                                </a>
                            </h5>
                            <ul class="hr-list wide stamp">
                                <li><i class="fa fa-circle blus"></i> blmedia</li>
                            </ul>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @endif
</div>
