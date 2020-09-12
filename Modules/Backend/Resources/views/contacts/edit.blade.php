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
    <div class="row">
        {!! Form::model($contact,['route'=> [$routePrefix.'.'.strtolower($type).'.update',$contact->id],
            'method'=>'POST','class'=>'','file'=>true] ) !!}
        @include($module.'::contacts.partials.form')
        {!! Form::close() !!}

    </div>
@endsection
