@if(count($fourthPositionNews))
    <div class="section-row pt-0">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
            <div class="BL-videogallery front_body_position_4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block-header gn-heading">
                            <h2>
                                <a href="{{route($routePrefix.'news-category.show',$fourthPositionNews->first()->category_slug)}}">
                                    {{$fourthPositionNews->first()->categories}}
                                </a>
                            </h2>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="videogallery-carousel owl-carousel owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(-1227px, 0px, 0px); transition: all 0.25s ease 0s; width: 3192px;">
                                    @foreach($fourthPositionNews as $news)
                                        <div class="owl-item cloned"
                                             style="width: 235.498px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="video-gallery">
                                                    <div class="image-gallery">
                                                        <a href="https://www.breaknlinks.com/hindi/news/1840">
                                                            <img src="{{asset('frontend/img/orange.jpg')}}" alt=""
                                                                 class="responsive-img">

                                                            {{--                                                            <img--}}
                                                            {{--                                                                src="https://www.breaknlinks.com/hindi/uploads/Indian%20leader/modi%20pm.jpg"--}}
                                                            {{--                                                                title="PM मोदी ने स्वतंत्रता दिवस पर देशवासियों को दीं शुभकामनाएं">--}}
                                                        </a>
                                                        <div class="overlay">
                                                            <a href="">
                                                                <div class="overlay-image">
                                                                    <img
                                                                        src="https://www.breaknlinks.com/hindi/themes/images/play-icon.png"
                                                                        alt="">
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <ul class="hr-list wide stamp">
                                                            <li>
                                                                <i class="fa fa-circle blus">

                                                                </i>
                                                                बिएल
                                                                संवाददाता
                                                            </li>
                                                        </ul>
                                                        <h5>
                                                            <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                                                {{$news->title}}
                                                            </a></h5>
                                                    </div>

                                                </div>


                                            </div>


                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev"><span
                                        aria-label="Previous">‹</span></button>
                                <button type="button" role="presentation" class="owl-next"><span
                                        aria-label="Next">›</span></button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend::components.buttons.view-all-category-button', ['position' => $fourthPositionNews])
@endif
