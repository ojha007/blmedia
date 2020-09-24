<figure class="news-image">

    <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
        <img src="{{is_null($news->image) ? asset('frontend/img/logo.png') :  $news->image}}"
             alt="{{$news->image_alt}}"
             title="{{$news->image_description}}"
             class="responsive-img {{$imgClass ?? ''}}">

    </a>
</figure>
