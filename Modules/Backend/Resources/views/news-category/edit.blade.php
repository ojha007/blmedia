@extends($module.'::layouts.master')
@section('header')
    News
@stop
@section('subHeader')
    Edit  News
@stop
@section('breadcrumb')
    {{--    {{ Breadcrumbs::render('news.create',$routePrefix) }}--}}
@stop
@section('content')
    @include('backend::partials.errors')
@endsection
