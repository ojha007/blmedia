@extends($module.'::layouts.master')
@section('header')
    News Category
@stop
@section('subHeader')
    Create  News category
@stop
@section('breadcrumb')
    {{--    {{ Breadcrumbs::render('news.create',$routePrefix) }}--}}
@stop
@section('content')
    @include('backend::partials.errors')
    @include($module.'::news-category.partials.form')
@endsection


