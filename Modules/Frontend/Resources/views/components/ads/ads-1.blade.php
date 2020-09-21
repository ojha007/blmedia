@isset($ads)
    @if(count($ads)>0)
        @foreach($ads as $ad)
            <div class="cmn-fw">
                <div class="col-sm-12">
                    <div class="hr-c">
                        <img src="" alt="{{$ad->title}}" title="{{$ad->sub_description}}">
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endisset
