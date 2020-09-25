@foreach($fourthPositionNews as $key=>$news)
<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 my-3">
    <div class="card ">
        <a href="{{route($routePrefix.'news.show',$news->news_slug)}}" class="thumbnail">
            <i class="far fa-play-circle fa-3x"></i>
            <img src="{{is_null($news->image) ? asset('frontend/img/logo.png') :  $news->image}}"
                 alt="{{$news->image_alt}}"
                 title="{{$news->image_description}}"
                 class="card-img-top {{$imgClass ?? ''}}">

        </a>
        <div class="card-body">
            <h5 class="card-title m-0 p-0"><a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
            {{\Illuminate\Support\Str::limit($news->title, 70)}}
                </a></h5>
            <p class="card-text">{{$news->image_description}}</p>
            @include('frontend::components.news.news-author')
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated {{$news->publish_date}}</small>
        </div>
    </div>
</div>
    @endforeach
