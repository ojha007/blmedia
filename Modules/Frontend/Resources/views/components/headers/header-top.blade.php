<section class="header-top">
    <div class="container-fluid">
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 float-left scroll-news">
            <div class="scroll-header">
                <h4>और संस्करण</h4>
            </div>
            <div class="scroll-news-content">
                <div class="tickercontainer">
                    <div class="mask">
                        <ul id="scrollNewsList" class="newsTickerLisst newsticker"
                            style="width: 3454px; left: -2434.21px;">
                            @foreach(config('editions') as $key=>$edition)
                                <li><a href="{{route($edition)}}" class="am-bl-topscroll active"
                                       target="_blank">{{ucwords($key)}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 float-right">
            <ul class="nav nav-pills">

                <li class="nav-item">
                    <form class="form-inline base-form"
                          action="https://www.breaknlinks.com/hindi/search/execute_search" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="search" name="newsSearch" class="form-control" placeholder="Search..."
                                       required="">

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
        <div class="clearfix"></div>
    </div>
</section>
