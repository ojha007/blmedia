@extends($module.'::layouts.master')
@section('header')
    News
@stop
@section('subHeader')
    Edit  News
@stop
@section('breadcrumb')
    {{ Breadcrumbs::render('advertisements.edit',$advertisement,$routePrefix) }}
@stop
@section('content')
    @include('backend::partials.errors')
    <div class="row">
        {!! Form::model($advertisement,['route'=> [$routePrefix.'.advertisements.update',$advertisement->id],
            'method'=>'PATCH','class'=>'form-horizontal','file'=>true] ) !!}
        @include($module.'::advertisement.partials.form')
        {!! Form::close() !!}

    </div>
@endsection
