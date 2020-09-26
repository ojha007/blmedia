@extends('frontend::layouts.master')
@section('content')
    <section class="body-section">
        <section class="page-body">
            <div class="container-fluid">
                @include('frontend::components.ads.ads-2',[
                                    'ads'=>$allAds,'placement'=>'above',
                                    'sub_for'=>$newsByAuthor->first()->category_slug
                                        ])
                <section class="cmn-section">
                    <div class="col-sm-12 col-md-8 col-lg-9 col-xl-9 float-left">
                        <div class="gn-heading">
                            <h2>{{$newsByAuthor->first()->author_name ?? ''}}</h2>
                        </div>
                        @include('frontend::components.no-childCategory',['newsByCategory'=>$newsByAuthor])
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 float-right">
                        @include('frontend::components.news.news-template',
                                  [
                                      'allNews'=>$firstPositionNews,
                                      'class'=>' blspecial-body bisheshNew'

                                      ])
                        @include('frontend::components.news.news-template',['allNews'=>$secondPositionNews])
                        @include('frontend::components.news.news-template',['allNews'=>$thirdPositionNews])
                    </div>
                </section>
                @include('frontend::components.ads.ads-2',[
                                    'ads'=>$allAds,'placement'=>'below',
                                    'sub_for'=>$newsByAuthor->first()->category_slug
                                        ])
            </div>
        </section>
    </section>
@endsection
