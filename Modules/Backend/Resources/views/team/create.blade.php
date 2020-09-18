@extends($module.'::layouts.master')
@section('header')
    Teams
@stop
@section('subHeader')
    Create  Teams
@stop
@section('breadcrumb')
    {{ Breadcrumbs::render('team.create',$routePrefix) }}
@stop
@section('content')
    @include('backend::partials.errors')
    <div class="row">
        {!! Form::open(['route'=> $routePrefix.'.team.store','method'=>'POST','class'=>'','file'=>true] ) !!}
        @include($module.'::team.partials.form')
        {!! Form::close() !!}

    </div>
@endsection
