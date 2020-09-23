<div class="newsBlock front_body_position_6 type-5">
    @if(count($sixthPositionNews))
        @include('frontend::components.news.category-heading',['allNews'=>$sixthPositionNews])
        <div class="block-body">
            <div class="row d-block">
                @foreach($sixthPositionNews as $key=>$news)
                    @if($key == 0)
                        <div class="news-item highlight-news">
                            @include('frontend::components.news.news-image')
{{--                            <figure class="news-image">--}}
{{--                                <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">--}}
{{--                                    --}}{{-- <img src="{{$news->image}}" alt="{{$news->image}}"--}}
{{--                                          class="responsive-img" title="">--}}
{{--                                    <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img">--}}
{{--                                </a>--}}

{{--                            </figure>--}}
                            <div class="news-content" style="height: auto;">
                                <h5 class="news-title-am"><a
                                        href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                        {{$news->title}}
                                    </a></h5>
                                 @include('frontend::components.news.news-author')
                                <p class="short-news">
                                    {!! $news->short_description !!}
                                </p>
                            </div>
                        </div>
                    @elseif($key <=3)
                        <div class="news-item">
                            <figure class="news-image">
                                <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                    {{--<img src="{{$news->image}}" alt="{{$news->image}}"
                                         class="responsive-img amresize" title="">--}}
                                    <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img">
                                </a>
                            </figure>
                            <div class="news-content">
                                <h5 class="news-title-am"><a
                                        href="{{route($routePrefix.'news.show',$news->news_slug)}}">
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
                                    <a href="{{route($routePrefix.'news.show',$news->news_slug)}}" class="text-dark">
                                        {{$news->title}}
                                    </a>
                                </h4>
                            </li>
                        </ul>
                    @endif
                @endforeach
            </div>
            @include('frontend::components.buttons.view-all-category-button', ['position' => $sixthPositionNews])
        </div>
    @endif
</div>

