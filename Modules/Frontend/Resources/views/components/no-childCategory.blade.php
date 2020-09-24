<div class="news-list-view">
    @foreach($newsByCategory as $news)
        <div class="news-item">
{{--            <div class="news-image">--}}
{{--                <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">--}}
{{--                    <img src="{{asset('frontend/img/orange.jpg')}}" alt=""--}}
{{--                         class="responsive-img arch-img">--}}
{{--                </a>--}}
{{--            </div>--}}
            @include('frontend::components.news.news-image')
            <div class="news-content">
                <h4 class="news-title">
                    <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                        {{$news->title}}
                    </a></h4>

                <ul class="hr-list wide stamp">
                    <li>
                        <i class="fa fa-clock-o"></i>
                        {{\Carbon\Carbon::parse($news->publish_date)->format('Y-mm-d')}}
                    </li>
                    <li>
                        <a href="{{route($routePrefix.'news.by.author',[$news->author_type,$news->author_slug])}}">
                            <i class="fa fa-user"></i>
                            {{$news->author_name}}
                        </a>
                    </li>

                </ul>
                <p>{!! $news->short_description !!}</p>
                <p>
                    @include('frontend::components.buttons.read-more-button', ['news' => $news])
                </p>
            </div>
        </div>
    @endforeach
</div>
<div class="pagination-wrapper">
    {{ $newsByCategory->links('vendor.pagination.custom') }}
</div>
