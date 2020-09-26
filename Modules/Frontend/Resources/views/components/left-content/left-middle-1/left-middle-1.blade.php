@if(count($fourthPositionNews))

    <div class="section-row pt-0">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
            <div class="row">
                <div class="col-md-12">
                    @include('frontend::components.news.category-heading',['allNews'=>$fourthPositionNews])
                </div>

                @if($fourthPositionNews->first()->is_video)
                    @include('frontend::components.videos.card2')
                @else


                @endif
                <div class="col-md-12">
                    @include('frontend::components.buttons.view-all-category-button', ['position' => $fourthPositionNews])
                </div>
            </div>
        </div>
    </div>

@endif

