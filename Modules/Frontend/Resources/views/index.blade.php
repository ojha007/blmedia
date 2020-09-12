@extends('frontend::layouts.master')
@section('content')
    <section class="page-body page-body-homepage" style="overflow-x: hidden;">
        <div class="container-fluid">
            <!--top section news-->
            <section class="cmn-section">
                @include('frontend::components.left-content.left-content')
                @include('frontend::components.right-content.right-content')
            </section>
            <!--ended top section news-->
            <div class="clearfix"></div>
        </div>
    </section>
@endsection
