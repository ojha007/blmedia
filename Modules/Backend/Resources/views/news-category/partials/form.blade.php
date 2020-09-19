<div class="box no-header" style="border-top: none">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#general" data-toggle="tab" aria-expanded="true">General </a></li>
            <li class=""><a href="#position" data-toggle="tab" aria-expanded="true">Position</a></li>
            <li class=""><a href="#meta" data-toggle="tab" aria-expanded="false">Meta</a></li>

        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="general">
                <div class="box-body">
                    <div class="form-group col-md-6 {{$errors->has('title')?'has-error':''}}">
                        {{ Form::label('name', 'Category Name:', ['class'=>'control-label required'])}}
                        {!! Form::text('name', null, array('placeholder' => 'Enter Category Name','class' => 'form-control')) !!}

                    </div>
                    <div class="form-group col-md-6 {{$errors->has('slug')?'has-error':''}}">
                        {{ Form::label('slug', 'Category Slug:', ['class'=>'control-label required'])}}
                        {!! Form::text('slug', null, array('placeholder' => 'Enter Slug','class' => 'form-control')) !!}

                    </div>
                    <div class="form-group col-md-6 {{$errors->has('parent_id')?'has-error':''}}">
                        {{ Form::label('parent_id', 'Parent Category:', ['class'=>'control-label required'])}}
                        {!! Form::select('parent_id',$selectParentCategories,
                                null, array('placeholder' => 'Select Parent Category','class' => 'form-control select2')) !!}

                    </div>
                    <div class="form-group col-md-12">
                        {!! Form::hidden('in_mobile', 0) !!}
                        <label for="in_mobile">
                            <input type="checkbox" checked data-toggle="toggle" value="1" name="in_mobile">
                            Show In Mobile:
                        </label>
                    </div>
                    {{--                    <div class="form-group col-md-6 {{$errors->has('category_code')?'has-error':''}}">--}}
                    {{--                        {{ Form::label('category_code', 'Code:', ['class'=>'control-label required'])}}--}}
                    {{--                        {!! Form::select('category_code', $selectCategoriesCodes, null,--}}
                    {{--                    array('placeholder' => 'Select Category Code','class' => 'form-control')) !!}--}}

                    {{--                    </div>--}}
                    <div class="form-group col-md-12 {{$errors->has('description') ? 'has-error':''}}">
                        {{ Form::label('description', 'Description:', ['class'=>' control-label '])}}
                        {!! Form::textarea('description', null, array('placeholder' => 'Enter description','class' => 'form-control','rows'=>'3')) !!}

                    </div>

                </div>

            </div>
            <div class="tab-pane" id="position">
                @include($module.'::news-category.partials.position')
            </div>
            <div class="tab-pane " id="meta">
                @include($module.'::meta-info.form',['meta'=>$category->metaTags])
            </div>
            <div class="box-footer">
                <a href="{{route($routePrefix.'category.index')}}" type="button"
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

    </div>
</div>


