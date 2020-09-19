@extends($module.'::layouts.master')
@section('header')
    News
@stop
@section('subHeader')
    List of News
@stop
@section('breadcrumb')
    {{ Breadcrumbs::render('news.index',$routePrefix) }}
@stop
@section('content')
    @include('backend::partials.errors')
    <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
                <a class="btn btn-primary pull-right btn-flat"
                   href="{{route($routePrefix.'category.create')}}">
                    <i class="fa fa-plus"></i>
                    Add News Category
                </a>
            </div>
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="dataTable" class="table table-bordered table-condensed tree-table">
                        <thead>
                        <tr>
                            <th>Category</th>
                            <th>status</th>
                            <th class="no-sort">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($padding = 0)
                        @foreach($categories as $category)
                            @include('backend::news-category.partials.tr-element',['category'=>$category,'padding'=>$padding])
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
