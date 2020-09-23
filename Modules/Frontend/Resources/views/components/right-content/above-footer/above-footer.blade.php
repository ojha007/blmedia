@include('frontend::components.news.news-template2',['allNews'=>$eleventhPositionNews])
@if(count($ads_above_footer))
    @include('frontend::components.ads.ads-1',['ads'=>$ads_above_footer])
@endif
