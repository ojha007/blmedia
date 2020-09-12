@extends($module.'::layouts.master')
@section('header')
    Advertisements
@stop
@section('subHeader')
    List of Advertisements
@stop
@section('breadcrumb')
    {{--    {{ Breadcrumbs::render('news.index',$routePrefix) }}--}}
@stop
@section('content')
    @include('backend::partials.errors')
    <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
                <a class="btn btn-primary pull-right btn-flat"
                   href="{{route($routePrefix.'.advertisements.create')}}">
                    <i class="fa fa-plus"></i>
                    Add Advertisements
                </a>
            </div>
            <div class="box">
                {{--                @include('common::backend.components.dataTableFilter.FilterByStatus',[--}}
                {{--                  'selectFiscalYears'=>$selectFiscalYears,--}}
                {{--                  'fiscal_year_id'=>$fiscal_year_id,--}}
                {{--                   'status'=>$billStatus--}}
                {{--                       ])--}}
                <div class="box-body table-responsive">
                    <table id="dataTable" class="table table-bordered table-condensed">
                        <thead>
                        <tr>
                            <th>S.No</th>
                            <th>News</th>
                            <th>Publish Date</th>
                            <th class="no-sort">Action</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
@push('scripts')
@endpush
