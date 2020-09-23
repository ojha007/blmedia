<figure class="news-image">
    <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
        {{--<img src="{{$news->image}}" alt="{{$news->image}}"
             class="responsive-img" title="">--}}
        <img src="{{asset('frontend/img/orange.jpg')}}" alt=""
             class="responsive-img {{$imgClass ?? ''}}">
    </a>
</figure>
