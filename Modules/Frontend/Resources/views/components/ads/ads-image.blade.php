<a href="{{$ad->url}}" target="_blank">
    <img
        {{--        src="{{asset('frontend/img/1230_100.gif')}}"--}}
        src="{{$ad->image}}"
        alt="{{$ad->title}}"
        title="{{$ad->sub_description}}"
       height="100px"
    >
</a>

{{--<img src="{{asset('frontend/img/1230_100.gif')}}" alt="" class="responsive-img w-100">--}}
