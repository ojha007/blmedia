<section class="bg-site-color ">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark " style=" min-height: 60px;">
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="{{asset('/frontend/img/logo.png')}}" height="50" alt="BL Media" loading="lazy"
                     title="BL Media">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route($routePrefix.'preeti-to-unicode')}}">Preeti to Unicode <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route($routePrefix.'unicode-to-preeti')}}"> Unicode to Preeti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route($routePrefix.'roman-to-unicode')}}"> Roman to Unicode</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>
