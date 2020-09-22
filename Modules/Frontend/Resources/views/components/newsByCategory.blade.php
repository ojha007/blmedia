@extends('frontend::layouts.master')
@section('content')
    @if(count($breadcrumbs))
        <section class="breadcrumb-section">
            <div class="breadcrumb-wrapper">
                <div class="container-fluid">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="https://www.breaknlinks.com/hindi/">
                                        गृहपृष्ठ
                                    </a>
                                </li>

                                @foreach($breadcrumbs as $breadcrumb)
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <a href="{{route($routePrefix.'news-category.show',$breadcrumb->slug)}}"
                                           itemprop="item">
                                            {{$breadcrumb->name}}
                                        </a>
                                    </li>
                                @endforeach
                            </ol>
                        </nav>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
    @endisset
    <section class="body-section">
        <section class="page-body">
            <div class="container-fluid">
                <section class="cmn-section">
                    <!--news listing section-->
                    <div class="col-sm-12 col-md-8 col-lg-9 col-xl-9 float-left">
                        <div class="gn-heading">
                            <h2>{{$newsByCategory->first()->category ?? ''}}</h2>
                        </div>
                        <div class="news-list-view">
                            <!--repeatable block-->
                            {{--                            @dd($newsByCategory)--}}
                            @foreach($newsByCategory as $news)
                                <div class="news-item">
                                    <div class="news-image">
                                        <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                            <img src="{{asset('frontend/img/orange.jpg')}}" alt="" class="responsive-img arch-img" >
                                        </a>
                                    </div>
                                    <div class="news-content">
                                        <h4 class="news-title">
                                            <a href="{{route($routePrefix.'news.show',$news->news_slug)}}">
                                                {{$news->title}}
                                            </a></h4>

                                        <ul class="hr-list wide stamp">
                                            <li>
                                                <i class="fa fa-clock-o"></i>
                                                {{\Carbon\Carbon::parse($news->publish_date)->format('Y-mm-d')}}
                                            </li>
                                            <li>
                                                <i class="fa fa-clock-o"></i>
                                                {{$news->author}}
                                            </li>

                                        </ul>
                                        <p>{!! $news->short_description !!}</p>
                                        <p>
                                            @include('frontend::components.buttons.read-more-button', ['news' => $news])
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination-wrapper">
                            {{ $newsByCategory->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 float-right">
                        <div class="newsBlock type-8 front_body_position_3 ">
                            @if(count($firstPositionNews))
                                <div class="block-header gn-heading">
                                    <h2><a href="">
                                            {{$firstPositionNews->first()->categories}}
                                        </a>
                                    </h2>
                                </div>
                                <div class="block-body blspecial-body bisheshNew">
                                    @foreach($firstPositionNews as $news)
                                        <div class="news-item">
                                            <figure class="news-image">
                                                <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                                    {{--<img src="{{$news->image}}" alt="{{$news->image}}"
                                                         class="responsive-img" title="">--}}
                                                    <img src="{{asset('frontend/img/orange.jpg')}}" alt=""
                                                         class="responsive-img">
                                                </a>
                                            </figure>
                                            <div class="news-content">
                                                <h5 class="news-title"><a
                                                            href="{{route($routePrefix.'news.show',$news->slug)}}">
                                                        {{$news->title}}
                                                    </a></h5>
                                            </div>
                                            <ul class="hr-list wide stamp">
                                                <li><i class="fa fa-circle blus"></i> blmedia</li>
                                            </ul>
                                        </div>
                                    @endforeach
                                        @include('frontend::components.buttons.view-all-category-button', ['position' => $firstPositionNews])
                                </div>
                            @endif
                        </div>
                        <div class="newsBlock type-8 front_body_position_9">
                            @if(count($secondPositionNews))
                                <div class="block-header gn-heading">
                                    <h2>
                                        <a href="{{route($routePrefix.'news-category.show',$secondPositionNews->first()->category_slug)}}">
                                            {{$secondPositionNews->first()->categories}}
                                        </a>
                                    </h2>
                                </div>
                                <div class="block-body trendingNew">
                                    @foreach($secondPositionNews as $key=>$news)
                                        <div class="news-item">
                                            <figure class="news-image">
                                                <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                                    {{--<img src="{{$news->image}}" alt="{{$news->image}}"
                                                         class="responsive-img" title="">--}}
                                                    <img src="{{asset('frontend/img/orange.jpg')}}" alt="">
                                                </a>
                                            </figure>
                                            <div class="news-content">
                                                <h5 class="news-title"><a
                                                            href="{{route($routePrefix.'news.show',$news->slug)}}">
                                                        {{$news->title}}
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>
                                    @endforeach
                                        @include('frontend::components.buttons.view-all-category-button', ['position' => $secondPositionNews])
                                </div>
                            @endif
                        </div>
                        <div class="newsBlock front_body_position_1 type-1">
                            @if(count($thirdPositionNews))
                                <div class="block-header gn-heading">
                                    <h2>
                                        <a href="{{route($routePrefix.'news-category.show',$thirdPositionNews->first()->category_slug)}}">
                                            {{$thirdPositionNews->first()->categories}}
                                        </a>
                                    </h2>
                                </div>
                                <div class="block-body">
                                    @foreach($thirdPositionNews as $news)
                                        <div class="news-item">
                                            <figure class="news-image">
                                                <a href="{{route($routePrefix.'news.show',$news->slug)}}">
                                                    {{--                            <img src="{{$news->image}}" alt="{{$news->image}}"--}}
                                                    {{--                                 class="responsive-img">--}}
                                                    <img src="{{asset('frontend/img/orange.jpg')}}" alt=""
                                                         class="responsive-img" style="height: 5em;">
                                                </a>
                                            </figure>
                                            <div class="news-content new-type-1">
                                                <h5 class="news-title"><a
                                                            href="{{route($routePrefix.'news.show',$news->slug)}}">
                                                        {{$news->title}}
                                                    </a></h5>
                                                <ul class="hr-list wide stamp">
                                                    <li><i class="fa fa-circle blus"></i> blmedia</li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                        @include('frontend::components.buttons.view-all-category-button', ['position' => $thirdPositionNews])
                                </div>
                            @endif
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection
