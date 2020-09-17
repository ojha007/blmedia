@extends($module.'::layouts.master')

@section('header')
    {{$type}}
@stop
@section('subHeader')
    List of  {{$type}}
@stop

@section('breadcrumb')
    {{ Breadcrumbs::render(strtolower($type).'.index',$routePrefix) }}
@stop
@section('content')
    @include('backend::partials.errors')
    <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
                <a class="btn btn-primary pull-right btn-flat"
                   href="{{route($routePrefix.'.'. strtolower($type) .'.create')}}">
                    <i class="fa fa-plus"></i>
                    Add {{$type}}
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
                            <th>Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th class="no-sort">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{$contact->id}}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->image}}</td>
                                <td>{!! spanByStatus($contact->is_active) !!}</td>
                                <td>
                                    <a href="{{route($routePrefix.'.'.strtolower($type).'.edit',$contact->id)}}"
                                       class="btn btn-primary btn-flat">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    {!! Form::open(['method' => 'DELETE', 'route' =>
                                            [$routePrefix.'.'. strtolower($type) .'.destroy',$contact->id],
                                             'onsubmit' => "return confirm('Are you sure you want to delete?')",   'style'=>"display:inline"
                                       ])!!}
                                    <button class="btn btn-danger btn-flat btn-sm" role="button" type="submit">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$contacts->links()}}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
@push('scripts')
@endpush
