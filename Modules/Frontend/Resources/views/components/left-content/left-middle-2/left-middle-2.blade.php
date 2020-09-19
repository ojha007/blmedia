<div class="newsBlock front_body_position_6 type-5" >
    @if(count($sixthPositionNews))
        <div class="block-header gn-heading">
            <h2>
                <a href="{{route($routePrefix.'news-category.show',$sixthPositionNews->first()->category_slug)}}">
                    {{$sixthPositionNews->first()->categories}}
                </a>
            </h2>
        </div>
        <div class="block-body">
            <div class="row d-block">
                @foreach($sixthPositionNews as $key=>$news)
                    @if($key == 0)
                        <div class="news-item highlight-news">
                            <figure class="news-image">
                                <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                   {{-- <img src="{{$news->image}}" alt="{{$news->image}}"
                                         class="responsive-img" title="">--}}
                                    <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img" >
                                </a>

                            </figure>
                            <div class="news-content" style="height: auto;">
                                <h5 class="news-title-am"><a
                                        href="{{route($routePrefix.'news.show',$news->slug)}}">
                                        {{$news->title}}
                                    </a></h5>
                                <ul class="hr-list wide stamp">
                                    <li><i class="fa fa-circle blus"></i> blmedia</li>

                                </ul>
                                <p class="short-news">
                                    {!! $news->short_description !!}
                                </p>
                            </div>
                        </div>
                    @elseif($key <=3)
                        <div class="news-item">
                            <figure class="news-image">
                                <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                    {{--<img src="{{$news->image}}" alt="{{$news->image}}"
                                         class="responsive-img amresize" title="">--}}
                                    <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img" >
                                </a>
                            </figure>
                            <div class="news-content">
                                <h5 class="news-title-am"><a
                                        href="{{route($routePrefix.'news.show',$news->slug)}}">
                                        {{$news->title}}
                                    </a>
                                </h5>
                            </div>
                        </div>
                    @else
                        <ul class="news-items ">
                            <li class="news-contents amdot">
                                <h4 class="news-title blamtitle">
                                    <i class="fa fa-info-circle text-dark" aria-hidden="true"></i>&nbsp;
                                    <a href="{{route($routePrefix.'news.show',$news->slug)}}" class="text-dark" >
                                        {{$news->title}}
                                    </a>
                                </h4>
                            </li>
                        </ul>
                    @endif
                @endforeach
            </div>
        </div>
    @endif
</div>

