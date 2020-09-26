@if(count($childCategoriesNews))
    <div class="row">
        @foreach($childCategoriesNews as $childNews)
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contentH">
                    @include('frontend::components.news.category-heading',['allNews'=>$newsByCategory])
                    @foreach($childNews->take(5) as $key=>$news)
                        @if($key== 0)
                            <div class="bigOverLay">
                                {{--                                <figure class="news-image">--}}
                                {{--                                    <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">--}}
                                {{--                                        <img src="{{asset('frontend/img/orange.jpg')}}" alt=""--}}
                                {{--                                             class="responsive-img">--}}
                                {{--                                    </a>--}}
                                {{--                                </figure>--}}
                                @include('frontend::components.news.news-image',['figureClass'=>''])
                                <div class="ovLay">
                                    @include('frontend::components.news.news-content')
                                    @include('frontend::components.news.news-author')
                                    {{--                                    <h2 class="news-title">--}}
                                    {{--                                        <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">--}}
                                    {{--                                            {!! $news->title !!}--}}
                                    {{--                                        </a>--}}
                                    {{--                                    </h2>--}}
                                </div>
                            </div>
                        @else
                            <div class="smallHorizBx">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        @include('frontend::components.news.news-image',['figureClass'=>''])
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        @include('frontend::components.news.news-content')
                                        @include('frontend::components.news.news-author')
                                    </div>
                                </div>
                            </div>
                        @endif

                    @endforeach
                    <div class="" style="margin-bottom: 20px;">
                        @include('frontend::components.buttons.view-all-category-button', ['position' => $childNews])
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endif
