@isset($ads)
    @if(count($ads)>0)
        @foreach($ads as $ad)
            <div class="cmn-fw">
                <div class="col-sm-12">
                    <div class="hr-c">
                        <div class="ggl_adBlk _930x180">
                            @include('frontend::components.ads.ads-image')
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endisset
{{--<div class="col-12_1230X100">--}}
{{--    <img src="{{asset('frontend/img/1230_100.gif')}}" alt="" class="responsive-img w-100">--}}
{{--</div>--}}
