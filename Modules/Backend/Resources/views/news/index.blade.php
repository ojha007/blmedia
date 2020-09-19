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
                   href="{{route($routePrefix.'news.create')}}">
                    <i class="fa fa-plus"></i>
                    Add News
                </a>
            </div>
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="" class="table table-bordered table-condensed">
                        <thead>
                        <tr>
                            <th>S.No</th>
                            <th>News</th>
                            <th>Categories</th>
                            <th>Publish Date</th>
                            <th>Status</th>
                            <th class="no-sort">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allNews as $news)
                            <tr>
                                <td>
                                    {{$news->id}}
                                </td>
                                <td>

                                    <a href="{{route($routePrefix.'news.show',[$news->id])}}">
                                        {{$news->title}}
                                    </a>
                                    <ul>
                                        @isset($news->guest)
                                            <li>
                                                Guest :
                                                <span class="label label-info">
                                              {{$news->guest->name}}
                                         </span>
                                            </li>
                                        @endisset
                                        @isset($news->reporter)
                                            <li>
                                                Reporter :
                                                <span class="label label-info">
                                              {{$news->reporter->name}}
                                         </span>
                                            </li>
                                        @endisset
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        @foreach($news->categories as $category)
                                            <li>
                                                {{$category->name}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    {{$news->publish_date}}
                                </td>
                                <td>
                                    {!! spanByStatus($news->publish_status,'') !!}
                                </td>
                                <td>
                                    <a href="{{route($routePrefix.'news.edit',$news->id)}}"
                                       class="btn btn-primary btn-sm btn-flat">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    {!! Form::open(['method' => 'DELETE', 'route' => [$routePrefix.'news.destroy', $news->id],
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
                    {{$allNews->links()}}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
@push('scripts')
@endpush
