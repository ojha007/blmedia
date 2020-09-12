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
                            <th>Title</th>
                            <th>For</th>
                            <th>Placement</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th class="no-sort">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($advertisements as $ads)
                            <tr>
                                <td>{{$ads->id}}</td>
                                <td>{{$ads->title}}</td>
                                <td>{{$ads->for}}</td>
                                <td>{{$ads->placement}}</td>
                                <td>{!! $ads->description !!}</td>
                                <td>{!! spanByStatus($ads->is_active) !!}</td>
                                <td>
                                    <a href="{{route($routePrefix.'.advertisements.edit',$ads->id)}}"
                                       class="btn btn-primary btn-flat">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button class="btn btn-danger btn-flat">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$advertisements->links()}}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
@push('scripts')
@endpush
