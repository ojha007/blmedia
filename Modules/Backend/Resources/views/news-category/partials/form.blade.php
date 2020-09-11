<div class="box no-header" style="border-top: none">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#general" data-toggle="tab" aria-expanded="true">General </a></li>
            <li class=""><a href="#meta" data-toggle="tab" aria-expanded="false">Meta</a></li>

        </ul>
        {!! Form::open(array('route' => $routePrefix.'.news-category.store',
                                        'method'=>'POST','class'=>' tab_form')) !!}
        <div class="tab-content">
            <div class="tab-pane active" id="general">
                <div class="box-body">
                    <div class="form-group col-md-6 {{$errors->has('title')?'has-error':''}}">
                        {{ Form::label('title', 'Category Title:', ['class'=>'control-label required'])}}
                        {!! Form::text('title', null, array('placeholder' => 'Enter Title','class' => 'form-control')) !!}

                    </div>
                    <div class="form-group col-md-6 {{$errors->has('slug')?'has-error':''}}">
                        {{ Form::label('slug', 'Category Slug:', ['class'=>'control-label required'])}}
                        {!! Form::text('slug', null, array('placeholder' => 'Enter Slug','class' => 'form-control')) !!}

                    </div>
                    <div class="form-group col-md-6 {{$errors->has('parent_id')?'has-error':''}}">
                        {{ Form::label('parent_id', 'Parent Category:', ['class'=>'control-label required'])}}
                        {!! Form::select('parent_id',[], null, array('placeholder' => 'Select Parent Category','class' => 'form-control select2')) !!}

                    </div>
                    <div class="form-group col-md-6 {{$errors->has('slug')?'has-error':''}}">
                        {{ Form::label('category_url', 'Category Url:', ['class'=>'control-label required'])}}
                        {!! Form::text('category_url', null, array('placeholder' => 'Enter Url','class' => 'form-control')) !!}

                    </div>
                    <div class="form-group col-md-6 {{$errors->has('category_code')?'has-error':''}}">
                        {{ Form::label('category_code', 'Code:', ['class'=>'control-label required'])}}
                        {!! Form::select('category_code', ['HM'=>'HM','LS'=>'LS','OT'=>'OT'], null, array('placeholder' => 'Select Category Code','class' => 'form-control')) !!}

                    </div>
                    <div class="form-group col-md-6 ">
                        {{ Form::label('in_front', 'Show In Front:', ['class'=>'control-label'])}}
                        {!! Form::hidden('in_front', 0) !!}
                        <input name="in_front" value="1" type="checkbox" data-toggle="toggle" data-on="Yes"
                               data-off="No" checked>
                        &nbsp;
                        {{ Form::label('in_mobile', 'Show In Front:', ['class'=>'control-label'])}}
                        {!! Form::hidden('in_mobile', 0) !!}
                        <input name="in_mobile" value="1" type="checkbox" data-toggle="toggle" data-on="Yes"
                               data-off="No" checked>

                    </div>
                    <div class="form-group col-md-6 {{$errors->has('description') ? 'has-error':''}}">
                        {{ Form::label('description', 'Description:', ['class'=>' control-label '])}}
                        {!! Form::textarea('description', null, array('placeholder' => 'Enter description','class' => 'form-control','rows'=>'3')) !!}

                    </div>
                </div>
            </div>
            <div class="tab-pane " id="meta">
                @include($module.'::meta-info.form')
            </div>
            <div class="box-footer">
                <a href="{{route($routePrefix.'.news-category.index')}}" type="button"
                   class="btn btn-default btn-flat pull-left">
                    <i class="fa fa-arrow-left"></i>
                    Close
                </a>
                <button type="submit" class="btn btn-flat btn-primary pull-right">
                    <i class="fa fa-save"></i>
                    Submit
                </button>
            </div>

        </div>
        {!! Form::close() !!}
    </div>
</div>


