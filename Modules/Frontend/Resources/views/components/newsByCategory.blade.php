@extends('frontend::layouts.master')
@section('content')
    @include('frontend::components.breadcrumb')
    <section class="body-section">
        <section class="page-body">
            <div class="container-fluid">
                <section class="cmn-section">
                    <div class="col-sm-12 col-md-8 col-lg-9 col-xl-9 float-left">
                        @include('frontend::components.news.category-heading',['allNews'=>$newsByCategory])
                        @if(count($childCategoriesNews))
                            @include('frontend::components.withChildCategory')
                        @else
                            @include('frontend::components.no-childCategory')
                        @endif
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
            </div>
        </section>
    </section>
@endsection
