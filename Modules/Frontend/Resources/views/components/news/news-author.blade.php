@isset($news)
    @if($news->author_type && $news->author_slug)
        <ul class="hr-list wide stamp">
            <li>
                <a href="{{route($routePrefix.'news.by.author',[$news->author_type,$news->author_slug])}}">
                    <i class="fa fa-user blus"></i>
                    {{$news->author_name}} {{--{{$news->dateline ? ','.$news->dateline : ''}}--}}
                </a>
            </li>
        </ul>
    @endif
@endisset
