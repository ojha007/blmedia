<div class="news-list-view">
    @foreach($newsByCategory as $news)
        <div class="news-item">
            @include('frontend::components.news.news-image')
            <div class="news-content">
                @include('frontend::components.news.news-content')
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
