<div class="box box-default">
    {!! Form::open(array('route' => $routePrefix.'.news-category.store',
                             'method'=>'POST','class'=>'form-horizontal bootstrap-modal-form')) !!}
    <div class="box-header with-border">
        <h3 class="box-title">
            <strong>
                Create News Category
            </strong>
        </h3>
    </div>
    <div class="box-body">
        <h4>Category Details</h4>
        <br>
        <div class="form-group col-md-6 {{$errors->has('name')?'has-error':''}}">
            {{ Form::label('name', 'Category Name:', ['class'=>'col-sm-4 control-label required'])}}
            <div class="col-sm-8">
                {!! Form::text('name', null, array('placeholder' => 'Enter Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="form-group col-md-6 {{$errors->has('parent_id')?'has-error':''}}">
            {{ Form::label('parent_id', 'Parent Category:', ['class'=>'col-sm-4 control-label required'])}}
            <div class="col-sm-8">
                {!! Form::select('parent_id',[], null, array('placeholder' => 'Select Parent Category','class' => 'form-control select2')) !!}
            </div>
        </div>
        <div class="form-group col-md-6 {{$errors->has('slug')?'has-error':''}}">
            {{ Form::label('slug', 'Category Url:', ['class'=>'col-sm-4 control-label required'])}}
            <div class="col-sm-8">
                {!! Form::text('slug', null, array('placeholder' => 'Enter Slug','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="form-group col-md-6 {{$errors->has('code')?'has-error':''}}">
            {{ Form::label('code', 'Code:', ['class'=>'col-sm-4 control-label required'])}}
            <div class="col-sm-8">
                {!! Form::text('code', null, array('placeholder' => 'Enter Code','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="form-group col-md-6 {{$errors->has('code')?'has-error':''}}">
            {{ Form::label('code', 'Code:', ['class'=>'col-sm-4 control-label required'])}}
            <div class="col-sm-8">
                {!! Form::text('code', null, array('placeholder' => 'Enter Code','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="form-group col-md-6 {{$errors->has('description') ? 'has-error':''}}">
            {{ Form::label('description', 'Description:', ['class'=>'col-sm-4 control-label '])}}
            <div class="col-sm-8">
                {!! Form::textarea('description', null, array('placeholder' => 'Enter description','class' => 'form-control','rows'=>'3')) !!}
            </div>
        </div>
        <br>
        <h4>Category Meta Info</h4>
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
    {!! Form::close() !!}
</div>

