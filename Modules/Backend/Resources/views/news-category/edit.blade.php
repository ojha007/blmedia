@extends($module.'::layouts.master')
@section('header')
    News Category
@stop
@section('subHeader')
    Edit  News Category
@stop
@section('breadcrumb')
    {{--    {{ Breadcrumbs::render('news.create',$routePrefix) }}--}}
@stop
@section('content')
    @include('backend::partials.errors')
    <div class="row">
        <div class="col-md-12">
            {!! Form::model($category,array('route' => $routePrefix.'.news-category.store',
                                       'method'=>'POST','class'=>' tab_form')) !!}
            @include($module.'::news-category.partials.form')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
