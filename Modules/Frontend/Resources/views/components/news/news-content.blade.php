@isset($news)
    <h5 class="news-title {{$class ?? ''}}">
        <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
            @isset($limit)
                {{\Illuminate\Support\Str::limit($news->title, $limit)}}
            @else
                {!! $news->title !!}
            @endisset
        </a>
    </h5>
@endisset

