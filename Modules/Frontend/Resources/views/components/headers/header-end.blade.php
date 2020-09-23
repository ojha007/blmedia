<section class="select-language-section bg-site-color" style="display: none;">
    <select class="form-control form-control-sm bg-transparent border-0 text-white "  onchange="location = this.value;" style=" transition: max-height 1s;">
        @foreach(config('editions') as $k=> $e)
                @if(in_array(request()->segment(1), config('editions')))
                    @if(request()->segment(1) != $e)
                    <option class="bg-site-color border-0"  value="{{route($e)}}">
                        {{ucwords($k)}}
                    </option>
                    @endif
                @else
                <option class="bg-site-color border-0"  value="{{route($e)}}">
                    {{ucwords($k)}}
                </option>
                @endif
        @endforeach
    </select>
</section>
<section class="amnavnd header-end ">
    <div class="container-fluid">
        <div class="row" style="border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;">
            <div class="col-md-2 col-lg-2 hiderfixed_navbar12">
                <a class="navbar-brand  hiderfixed_navbar-brand" href="{{route($routePrefix.'index')}}">
                    <img class="responsive-img" id="logo_image_nav" src="{{asset('frontend/img/logo.png')}}"
                         alt="BL Media">
                </a>
            </div>
            <div class="col-md-4 col-lg-0 col-xl-4 nav-pills-float">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <form class="form-inline base-form">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="search" name="newsSearch" class="form-control px-0"
                                           placeholder="Search...">
                                    <div class="input-group-append">
                                        <button type="submit" name="search" class="btn btn-trans"><i
                                                class="fa fa-search"
                                                style="font-size: 10px; margin-top: 13px; padding-left: 20px;"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-lg-10 p-0">
                <nav class="navbar navbar-expand-lg navbar-light primary-nav navbar_fixed" id="stickyAM">

                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#primaryNav"
                            aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="primaryNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active home-site-logo-home">
                                <a href="{{route($routePrefix.'index')}}" class="nav-link"><i
                                        class="fa fa-home"></i> <span class="sr-only">Home</span>
                                </a>
                            </li>
                            <li class="nav-item  home-site-logo">
                                <a class="nav-link navbar-brand-img-logo  " href="{{route($routePrefix.'index')}}">
                                    <img class="responsive-img" id="logo_image_nav"
                                         src="{{asset('frontend/img/logo.png')}}" alt="BL Media">
                                </a>
                            </li>
                            @foreach($headerCategories as $category)
                                <li class="nav-item {{request()->is($urlPrefix.'category/*') ? 'active':''}}">
                                    <a href="{{route($routePrefix.'news-category.show',$category->slug)}}"
                                       class="nav-link">
                                        {{$category->name}}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </nav>

            </div>

            <div class="col-md-12 col-lg-2 pl-0">
                <div class="addthis_inline_follow_toolbox"></div>
            </div>
        </div>
    </div>
</section>
<section class="ads-section pt-3">
    <div class="container-fluid text-center">
        @include('frontend::components.ads.ads-2',['ads'=>$ads_above_top_menu])
    </div>
</section>


