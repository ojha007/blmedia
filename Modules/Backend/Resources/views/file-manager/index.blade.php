@extends($module.'::layouts.master')
@section('header')
    BL File Manager
@stop
@section('subHeader')
    File manger
@stop
@section('breadcrumb')
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header">

                </div>
                <div class="box-body">
                    <iframe src="{{ url('/bl-secure/file-manager/fm-button') }}"
                            style="width: 100%; height: 700px; overflow: hidden; border: none;"></iframe>

                </div>
                <div class="box-footer">
                    <a href="{{route($routePrefix.'file-manager.index')}}" type="button"
                       class="btn pull-left btn-flat btn-default">
                        <i class="fa fa-arrow-left">
                        </i>
                        Close
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection

