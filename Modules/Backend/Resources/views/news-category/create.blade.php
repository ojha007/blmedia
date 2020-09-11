@extends($module.'::layouts.master')
@section('header')
    News
@stop
@section('subHeader')
    Create  News
@stop
@section('breadcrumb')
    {{--    {{ Breadcrumbs::render('news.create',$routePrefix) }}--}}
@stop
@section('content')
    @include('backend::partials.errors')
    {!! Form::model(
                    [
                    'route'=>$routePrefix.'.news.store',
                    'method'=>'POST',
                    'class'=>'form-horizontal',
                    'enctype'=>'multipart/form-data'
                    ]
                    )
                 !!}

    @include($module.'::news.partials.form')
    {!! Form::close() !!}
@endsection
