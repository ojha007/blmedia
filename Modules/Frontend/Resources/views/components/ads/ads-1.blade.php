@isset($ads)
    @if(count($ads)>0)
        @foreach($ads as $ad)
            <div class="cmn-fw">
                <div class="col-sm-12">
                    <div class="hr-c">
                        <a href="{{$ad->url}}" target="_blank">
                            <img src="{{$ad->image}}" alt="{{$ad->title}}"
                                 title="{{$ad->sub_description}}">
                        </a>

                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endisset
