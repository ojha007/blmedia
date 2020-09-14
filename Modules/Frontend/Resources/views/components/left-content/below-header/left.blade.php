<div class="newsBlock type-1">
    <div class="block-header gn-heading">
        <h2>
            <a href="{{route($routePrefix.'news-category.show',$firstPositionNews->first()->category_slug)}}">
                {{$firstPositionNews->first()->categories}}
            </a>
        </h2>
    </div>
    <div class="block-body">
        @foreach($firstPositionNews as $news)
            <div class="news-item">
                <figure class="news-image">
                    <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                        <img src="{{$news->image}}" alt="{{$news->image}}"
                             class="responsive-img">
                    </a>
                </figure>
                <div class="news-content new-type-1">
                    <h5 class="news-title"><a
                            href="{{route($routePrefix.'news.show',$news->slug)}}">
                            {{$news->title}}
                        </a></h5>
                    <ul class="hr-list wide stamp">
                        <li><i class="fa fa-circle blus"></i>{{$news->reporter_name}}</li>
                    </ul>
                </div>
            </div>
        @endforeach
        <a href="https://www.breaknlinks.com/hindi/category/link-27"
           class=" btn btn-viewAll float-right" role="button">सब</a>


    </div>
</div>
