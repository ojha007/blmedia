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
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route'=> $routePrefix.'.news.store','method'=>'POST','class'=>'form-horizontal','file'=>true] ) !!}
            @include($module.'::news.partials.form')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
