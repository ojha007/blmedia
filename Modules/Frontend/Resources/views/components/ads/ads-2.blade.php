@isset($ads)
    @if(count($ads)>0)
        @php
            $ads = $ads->where('placement',$placement);
                    if(is_array($sub_for)){
                          $ads->whereIn('sub_for',$sub_for);
                    }else{
                        $ads->where('sub_for',$sub_for);
                    }
                   $ads= $ads->take(2);


        @endphp
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

