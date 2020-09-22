@if(count($thirteenPositionNews))
    <div class="newsBlock front_body_position_13 above-footer type-5 position-13" style="padding: 0 15px;" >
        <div class="block-header gn-heading">
            <h2>
                <a href="{{route($routePrefix.'news-category.show',$thirteenPositionNews->first()->category_slug)}}">
                    {{$thirteenPositionNews->first()->categories}}
                </a>
            </h2>
        </div>
        <div class="block-body">
            <div class="row d-block">
                @foreach($thirteenPositionNews as $key=>$news)
                    @if($key == 0)
                        <div class="news-item highlight-news">
                            <figure class="news-image  ghumphir-am-bl">
                                <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                    {{--<img src="{{$news->image}}" alt="{{$news->image}}"
                                         class="responsive-img" title="">--}}
                                    <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img" >
                                </a>
                            </figure>
                            <div class="news-content-overlay">
                                <div class="news-content am-content-blam">
                                    <h5 class="news-title"><a
                                            href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                            {{$news->title}}
                                        </a>
                                    </h5>
                                </div>
                            </div>

                        </div>
                    @else
                        <div class="news-item">
                            <figure class="news-image">
                                <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                    {{--<img src="{{$news->image}}" alt="{{$news->image}}"
                                         class="responsive-img" title="">--}}
                                    <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img" >
                                </a>
                            </figure>
                            <div class="news-content">
                                <h5 class="news-title"><a
                                        href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                        {{$news->title}}
                                    </a>
                                </h5>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            @include('frontend::components.buttons.view-all-category-button', ['position' => $thirteenPositionNews])
        </div>
    </div>
@endif
