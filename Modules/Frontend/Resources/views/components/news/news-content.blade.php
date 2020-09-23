<h5 class="news-title {{$class ?? ''}}">
    <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
        {{$news->title}}
    </a>
</h5>

