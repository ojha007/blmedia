@extends($module.'::layouts.master')
@section('header')
    BL File Manager
@stop
@section('subHeader')
    File manger
@stop
@section('breadcrumb')
    {{--    {{ Breadcrumbs::render('news.index',$routePrefix) }}--}}
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header">

                </div>
                <div class="box-body">
                    {{--                    <nav class="navbar navbar-default">--}}
                    {{--                        <div class="container-fluid">--}}

                    {{--                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
                    {{--                                <ul class="nav navbar-nav">--}}

                    {{--                                </ul>--}}
                    {{--                                <ul class="nav navbar-nav navbar-right">--}}
                    {{--                                    <li class="nav-item">--}}
                    {{--                                        <a class="nav-link" data-display="grid">--}}
                    {{--                                            <i class="fa fa-th-large fa-fw"></i>--}}
                    {{--                                            <span>{{ trans('laravel-filemanager::lfm.nav-thumbnails') }}</span>--}}
                    {{--                                        </a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li class="nav-item">--}}
                    {{--                                        <a class="nav-link" data-display="list">--}}
                    {{--                                            <i class="fa fa-list-ul fa-fw"></i>--}}
                    {{--                                            <span>{{ trans('laravel-filemanager::lfm.nav-list') }}</span>--}}
                    {{--                                        </a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li class="nav-item dropdown">--}}
                    {{--                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"--}}
                    {{--                                           aria-haspopup="true"--}}
                    {{--                                           aria-expanded="false">--}}
                    {{--                                            <i class="fa fa-sort fa-fw"></i>{{ trans('laravel-filemanager::lfm.nav-sort') }}--}}
                    {{--                                        </a>--}}
                    {{--                                        <div class="dropdown-menu dropdown-menu-right border-0"></div>--}}
                    {{--                                    </li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div><!-- /.navbar-collapse -->--}}
                    {{--                        </div><!-- /.container-fluid -->--}}
                    {{--                    </nav>--}}
                    {{--                    <nav class="navbar sticky-top navbar-expand-lg navbar-dark" id="nav">--}}
                    {{--                        <a class="navbar-brand " id="show_tree">--}}
                    {{--                            <i class="fa fa-bars fa-fw"></i>--}}
                    {{--                        </a>--}}
                    {{--                        <a class="navbar-brand d-block d-lg-none" id="current_folder"></a>--}}
                    {{--                        --}}{{--                        <a id="loading" class="navbar-brand"><i class="fa fa-spinner fa-spin"></i></a>--}}
                    {{--                        <div class="ml-auto px-2">--}}
                    {{--                            <a class="navbar-link d-none" id="multi_selection_toggle">--}}
                    {{--                                <i class="fa fa-check-double fa-fw"></i>--}}
                    {{--                                <span--}}
                    {{--                                    class="d-none d-lg-inline">{{ trans('laravel-filemanager::lfm.menu-multiple') }}</span>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                        <a class="navbar-toggler collapsed border-0 px-1 py-2 m-0" data-toggle="collapse"--}}
                    {{--                           data-target="#nav-buttons">--}}
                    {{--                            <i class="fa fa-cog fa-fw"></i>--}}
                    {{--                        </a>--}}
                    {{--                        <div class="collapse navbar-collapse flex-grow-0" id="nav-buttons">--}}
                    {{--                            <ul class="navbar-nav">--}}
                    {{--                                <li class="nav-item">--}}
                    {{--                                    <a class="nav-link" data-display="grid">--}}
                    {{--                                        <i class="fa fa-th-large fa-fw"></i>--}}
                    {{--                                        <span>{{ trans('laravel-filemanager::lfm.nav-thumbnails') }}</span>--}}
                    {{--                                    </a>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="nav-item">--}}
                    {{--                                    <a class="nav-link" data-display="list">--}}
                    {{--                                        <i class="fa fa-list-ul fa-fw"></i>--}}
                    {{--                                        <span>{{ trans('laravel-filemanager::lfm.nav-list') }}</span>--}}
                    {{--                                    </a>--}}
                    {{--                                </li>--}}
                    {{--                                <li class="nav-item dropdown">--}}
                    {{--                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"--}}
                    {{--                                       aria-haspopup="true"--}}
                    {{--                                       aria-expanded="false">--}}
                    {{--                                        <i class="fa fa-sort fa-fw"></i>{{ trans('laravel-filemanager::lfm.nav-sort') }}--}}
                    {{--                                    </a>--}}
                    {{--                                    <div class="dropdown-menu dropdown-menu-right border-0"></div>--}}
                    {{--                                </li>--}}
                    {{--                            </ul>--}}
                    {{--                        </div>--}}
                    {{--                    </nav>--}}

                    {{--                    <nav class="navbar navbar-default" id="actions">--}}
                    {{--                        <div class="container-fluid">--}}
                    {{--                            <a data-action="open"  class="nav-item nav-link active" data-multiple="false"><i--}}
                    {{--                                    class="fa fa-folder-open"></i>{{ trans('laravel-filemanager::lfm.btn-open') }}</a>--}}
                    {{--                            <a data-action="preview"  class="nav-item nav-link " data-multiple="true"><i--}}
                    {{--                                    class="fa fa-images"></i>{{ trans('laravel-filemanager::lfm.menu-view') }}</a>--}}
                    {{--                            <a data-action="use" data-multiple="true"><i--}}
                    {{--                                    class="fa fa-check"></i>{{ trans('laravel-filemanager::lfm.btn-confirm') }}</a>--}}
                    {{--                        </div>--}}
                    {{--                    </nav>--}}

                    {{--                    <div class="d-flex flex-row">--}}
                    {{--                        <div id="tree"></div>--}}

                    {{--                        <div id="main">--}}
                    {{--                            <div id="alerts"></div>--}}

                    {{--                            <nav aria-label="breadcrumb" class="d-none d-lg-block" id="breadcrumbs">--}}
                    {{--                                <ol class="breadcrumb">--}}
                    {{--                                    <li class="breadcrumb-item invisible">Home</li>--}}
                    {{--                                </ol>--}}
                    {{--                            </nav>--}}

                    {{--                            <div id="empty" class="d-none">--}}
                    {{--                                <i class="far fa-folder-open"></i>--}}
                    {{--                                {{ trans('laravel-filemanager::lfm.message-empty') }}--}}
                    {{--                            </div>--}}

                    {{--                            <div id="content"></div>--}}
                    {{--                            <div id="pagination"></div>--}}

                    {{--                            <a id="item-template" class="d-none">--}}
                    {{--                                <div class="square"></div>--}}

                    {{--                                <div class="info">--}}
                    {{--                                    <div class="item_name text-truncate"></div>--}}
                    {{--                                    <time class="text-muted font-weight-light text-truncate"></time>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}

                    {{--                        <div id="fab"></div>--}}
                    {{--                    </div>--}}

                    {{--                    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"--}}
                    {{--                         aria-hidden="true">--}}
                    {{--                        <div class="modal-dialog">--}}
                    {{--                            <div class="modal-content">--}}
                    {{--                                <div class="modal-header">--}}
                    {{--                                    <h4 class="modal-title"--}}
                    {{--                                        id="myModalLabel">{{ trans('laravel-filemanager::lfm.title-upload') }}</h4>--}}
                    {{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span--}}
                    {{--                                            aia-hidden="true">&times;</span>--}}
                    {{--                                    </button>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="modal-body">--}}
                    {{--                                    <form action="{{ route('unisharp.lfm.upload') }}" role='form' id='uploadForm'--}}
                    {{--                                          name='uploadForm'--}}
                    {{--                                          method='post' enctype='multipart/form-data' class="dropzone">--}}
                    {{--                                        <div class="form-group" id="attachment">--}}
                    {{--                                            <div class="controls text-center">--}}
                    {{--                                                <div class="input-group w-100">--}}
                    {{--                                                    <a class="btn btn-primary w-100 text-white"--}}
                    {{--                                                       id="upload-button">{{ trans('laravel-filemanager::lfm.message-choose') }}</a>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <input type='hidden' name='working_dir' id='working_dir'>--}}
                    {{--                                        <input type='hidden' name='type' id='type' value='{{ request("type") }}'>--}}
                    {{--                                        <input type='hidden' name='_token' value='{{csrf_token()}}'>--}}
                    {{--                                    </form>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="modal-footer">--}}
                    {{--                                    <button type="button" class="btn btn-secondary btn-flat"--}}
                    {{--                                            data-dismiss="modal">{{ trans('laravel-filemanager::lfm.btn-close') }}</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                    <div class="modal fade" id="notify" tabindex="-1" role="dialog" aria-hidden="true">--}}
                    {{--                        <div class="modal-dialog modal-lg">--}}
                    {{--                            <div class="modal-content">--}}
                    {{--                                <div class="modal-body"></div>--}}
                    {{--                                <div class="modal-footer">--}}
                    {{--                                    <button type="button" class="btn btn-secondary w-100"--}}
                    {{--                                            data-dismiss="modal">{{ trans('laravel-filemanager::lfm.btn-close') }}</button>--}}
                    {{--                                    <button type="button" class="btn btn-primary w-100"--}}
                    {{--                                            data-dismiss="modal">{{ trans('laravel-filemanager::lfm.btn-confirm') }}</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                    <div class="modal fade" id="dialog" tabindex="-1" role="dialog" aria-hidden="true">--}}
                    {{--                        <div class="modal-dialog modal-lg">--}}
                    {{--                            <div class="modal-content">--}}
                    {{--                                <div class="modal-header">--}}
                    {{--                                    <h4 class="modal-title"></h4>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="modal-body">--}}
                    {{--                                    <input type="text" class="form-control">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="modal-footer">--}}
                    {{--                                    <button type="button" class="btn btn-secondary w-100"--}}
                    {{--                                            data-dismiss="modal">{{ trans('laravel-filemanager::lfm.btn-close') }}</button>--}}
                    {{--                                    <button type="button" class="btn btn-primary w-100"--}}
                    {{--                                            data-dismiss="modal">{{ trans('laravel-filemanager::lfm.btn-confirm') }}</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                    <div id="carouselTemplate" class="d-none carousel slide bg-light" data-ride="carousel">--}}
                    {{--                        <ol class="carousel-indicators">--}}
                    {{--                            <li data-target="#previewCarousel" data-slide-to="0" class="active"></li>--}}
                    {{--                        </ol>--}}
                    {{--                        <div class="carousel-inner">--}}
                    {{--                            <div class="carousel-item active">--}}
                    {{--                                <a class="carousel-label"></a>--}}
                    {{--                                <div class="carousel-image"></div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <a class="carousel-control-prev" href="#previewCarousel" role="button" data-slide="prev">--}}
                    {{--                            <div class="carousel-control-background" aria-hidden="true">--}}
                    {{--                                <i class="fa fa-chevron-left"></i>--}}
                    {{--                            </div>--}}
                    {{--                            <span class="sr-only">Previous</span>--}}
                    {{--                        </a>--}}
                    {{--                        <a class="carousel-control-next" href="#previewCarousel" role="button" data-slide="next">--}}
                    {{--                            <div class="carousel-control-background" aria-hidden="true">--}}
                    {{--                                <i class="fa fa-chevron-right"></i>--}}
                    {{--                            </div>--}}
                    {{--                            <span class="sr-only">Next</span>--}}
                    {{--                        </a>--}}
                    {{--                    </div>--}}
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
{{--@push('scripts')--}}
{{--    <script>--}}
{{--        var lang = {!! json_encode(trans('laravel-filemanager::lfm')) !!};--}}
{{--        var actions = [--}}
{{--            // {--}}
{{--            //   name: 'use',--}}
{{--            //   icon: 'check',--}}
{{--            //   label: 'Confirm',--}}
{{--            //   multiple: true--}}
{{--            // },--}}
{{--            {--}}
{{--                name: 'rename',--}}
{{--                icon: 'edit',--}}
{{--                label: lang['menu-rename'],--}}
{{--                multiple: false--}}
{{--            },--}}
{{--            {--}}
{{--                name: 'download',--}}
{{--                icon: 'download',--}}
{{--                label: lang['menu-download'],--}}
{{--                multiple: true--}}
{{--            },--}}
{{--            // {--}}
{{--            //   name: 'preview',--}}
{{--            //   icon: 'image',--}}
{{--            //   label: lang['menu-view'],--}}
{{--            //   multiple: true--}}
{{--            // },--}}
{{--            {--}}
{{--                name: 'move',--}}
{{--                icon: 'paste',--}}
{{--                label: lang['menu-move'],--}}
{{--                multiple: true--}}
{{--            },--}}
{{--            {--}}
{{--                name: 'resize',--}}
{{--                icon: 'arrows-alt',--}}
{{--                label: lang['menu-resize'],--}}
{{--                multiple: false--}}
{{--            },--}}
{{--            {--}}
{{--                name: 'crop',--}}
{{--                icon: 'crop',--}}
{{--                label: lang['menu-crop'],--}}
{{--                multiple: false--}}
{{--            },--}}
{{--            {--}}
{{--                name: 'trash',--}}
{{--                icon: 'trash',--}}
{{--                label: lang['menu-delete'],--}}
{{--                multiple: true--}}
{{--            },--}}
{{--        ];--}}

{{--        var sortings = [--}}
{{--            {--}}
{{--                by: 'alphabetic',--}}
{{--                icon: 'sort-alpha-down',--}}
{{--                label: lang['nav-sort-alphabetic']--}}
{{--            },--}}
{{--            {--}}
{{--                by: 'time',--}}
{{--                icon: 'sort-numeric-down',--}}
{{--                label: lang['nav-sort-time']--}}
{{--            }--}}
{{--        ];--}}
{{--    </script>--}}
{{--    <script src="{{ asset('/backend/js/file-manager-script.js') }}"></script>--}}
{{--    <script src="{{ asset('vendor/laravel-filemanager/js/cropper.min.js') }}"></script>--}}
{{--    <script src="{{ asset('vendor/laravel-filemanager/js/dropzone.min.js') }}"></script>--}}
{{--@endpush--}}