@extends($module.'::layouts.master')
@section('header')
    News
@stop
@section('subHeader')
    List of News
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
                   href="{{route($routePrefix.'.category.create')}}">
                    <i class="fa fa-plus"></i>
                    Add News Category
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
                            <th>Category</th>
                            <th>Position</th>
                            <th>status</th>
                            <th class="no-sort">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->position}}</td>
                                <td>{!! spanByStatus($category->is_active) !!}</td>
                                <td>
                                    <a href="{{route($routePrefix.'.category.edit',$category->id)}}"
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
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
@push('scripts')
@endpush
