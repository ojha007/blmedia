@isset($ads)
    @if(count($ads)>0)
        @foreach($ads as $ad)
            <div class="cmn-fw">
                <div class="col-sm-12">
                    <div class="hr-c">
                        <img src="{{asset('ads1.jpg')}}" alt="{{$ad->title}}" title="{{$ad->sub_description}}">
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endisset
<div class="col-12 _1230*100">
    <img src="{{asset('frontend/img/1230_100.gif')}}" alt="" class="responsive-img w-100">
</div>