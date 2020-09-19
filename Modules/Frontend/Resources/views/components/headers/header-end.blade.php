<section class="amnavnd header-end">
    <div class="container-fluid">
        <div class="row" style="border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;">
            <div class="col-md-2 col-lg-2 hiderfixed_navbar12">
                <a class="navbar-brand  hiderfixed_navbar-brand" href="https://www.breaknlinks.com/hindi/">
                </a>
            </div>
            <div class="col-md-4 col-lg-0 col-xl-4 nav-pills-float">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <form class="form-inline base-form">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="search" name="newsSearch" class="form-control"
                                           placeholder="Search...">

                                    <div class="input-group-append">
                                        <button type="submit" name="search" class="btn btn-trans"><i
                                                class="fa fa-search"></i></button>
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
                                <a class="nav-link navbar-brand-img-logo" href="#">
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

                <ul class="follow-social-media">
                    <li>
                        <button type="button" class="btn btn-link">फलाे करें</button>
                    </li>
                    <li>
                        <a href="{{setting('facebook_url')}}" target="_blank"><i
                                class="fab fa-facebook-square">

                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="{{setting('twitter_url')}}" target="_blank"><i
                                class="fab fa-twitter-square"></i></a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>
