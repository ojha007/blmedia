@extends($module.'::layouts.master')
@section('header')
    News
@stop
@section('subHeader')
    Create  News
@stop
@section('breadcrumb')
    {{--        {{ Breadcrumbs::render('news.create',$routePrefix) }}--}}
@stop
@section('content')
    @include('backend::partials.errors')
    {!! Form::model([$news,'route'=>$routePrefix.'.news.store','method'=>'POST','class'=>'form-horizontal','file'=>true] ) !!}
     @include($module.'::news.partials.form')
    {!! Form::close() !!}
@endsection
