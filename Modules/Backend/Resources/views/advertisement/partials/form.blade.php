<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">
            Create Advertisement
        </h3>
    </div>
    <div class="box-body">
        <div class="form-group col-md-6 {{$errors->has('title')?'has-error':''}}">
            {{ Form::label('title', 'Ads Title:', ['class'=>'control-label required'])}}
            {!! Form::text('title', null, array('placeholder' => 'Enter Title','class' => 'form-control')) !!}

        </div>
        <div class="form-group col-md-6 {{$errors->has('slug')?'has-error':''}}">
            {{ Form::label('url', 'Ads Url:', ['class'=>'control-label required'])}}
            {!! Form::text('url', null, array('placeholder' => 'Enter Ads Url','class' => 'form-control')) !!}

        </div>
        <div class="form-group col-md-6 {{$errors->has('for')?'has-error':''}}">
            {{ Form::label('for', 'Ads For:', ['class'=>'control-label required'])}}
            {!! Form::select('for',$selectAdsFor, null, array('placeholder' => 'Select ads for','class' => 'form-control select2')) !!}

        </div>
        <div class="form-group col-md-6 {{$errors->has('for')?'has-error':''}}">
            {{ Form::label('sub_for', 'Ads Sub For:', ['class'=>'control-label required'])}}
            {!! Form::select('sub_for',$selectAdsSubFor, null, array('placeholder' => 'Select sub for ','class' => 'form-control select2')) !!}

        </div>
        <div class="form-group col-md-6 {{$errors->has('placement')?'has-error':''}}">
            {{ Form::label('placement', 'Placement:', ['class'=>'control-label required'])}}
            {!! Form::select('placement', $placement,null, array('placeholder' => 'Select Placement','class' => 'form-control select2')) !!}

        </div>
        <div class="form-group col-md-6 {{$errors->has('sub_placement')?'has-error':''}}">
            {{ Form::label('sub_placement', 'Ads Sub Placement:', ['class'=>'control-label required'])}}
            {!! Form::select('sub_placement', [], null, array('placeholder' => 'Select Sub Placement Code','class' => 'form-control select2')) !!}

        </div>
        <div class="form-group col-md-6 ">
            {{ Form::label('image', 'Image:', ['class'=>'control-label'])}}
            {!! Form::file('image', null,['class'=>'form-control']) !!}
            {{--            <input name="is_active" value="1" type="checkbox" data-toggle="toggle" data-on="Yes"--}}
            {{--                   data-off="No" checked>--}}
        </div>
        <div class="form-group col-md-6 ">
            {{ Form::label('is_active', 'Ads Status:', ['class'=>'control-label'])}}
            {!! Form::hidden('is_active', 0) !!}
            <input name="is_active" value="1" type="checkbox" data-toggle="toggle" data-on="Yes"
                   data-off="No" checked>
        </div>
        <div class="form-group col-md-6 {{$errors->has('description') ? 'has-error':''}}">
            {{ Form::label('description', 'Ads Description:', ['class'=>' control-label '])}}
            {!! Form::textarea('description', null, array('placeholder' => 'Enter description',
            'class' => 'form-control','rows'=>'5')) !!}
        </div>
{{--        <div class="form-group col-md-6 {{$errors->has('sub_description') ? 'has-error':''}}">--}}
{{--            {{ Form::label('sub_description', 'Ads Description:', ['class'=>' control-label '])}}--}}
{{--            {!! Form::textarea('sub_description', null, array('placeholder' => 'Enter sub description',--}}
{{--                    'class' => 'form-control','rows'=>'3')) !!}--}}

{{--        </div>--}}
    </div>
    <div class="box-footer">
        <a href="{{route($routePrefix.'.advertisements.index')}}" type="button"
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




