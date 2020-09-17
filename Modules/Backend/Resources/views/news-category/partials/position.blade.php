<div class="box-body">
    <div class="form-group col-md-6 {{$errors->has('title')?'has-error':''}}">
        {{ Form::label('front_header_position', 'Front Header Position:', ['class'=>'control-label required'])}}
        {!! Form::number("position[front_header_position]", null, array('placeholder' => 'Front Header Position','class' => 'form-control')) !!}

    </div>
    <div class="form-group col-md-6 {{$errors->has('title')?'has-error':''}}">
        {{ Form::label('front_body_position', 'Front Body Position:', ['class'=>'control-label required'])}}
        {!! Form::number("position[front_body_position]", null, array('placeholder' => 'Front Body Position','class' => 'form-control')) !!}

    </div>
    <div class="form-group col-md-6 {{$errors->has('title')?'has-error':''}}">
        {{ Form::label('detail_header_position', 'Detail Header Position:', ['class'=>'control-label required'])}}
        {!! Form::number("position[detail_header_position]", null, array('placeholder' => 'Detail Header Position','class' => 'form-control')) !!}

    </div>
    <div class="form-group col-md-6 {{$errors->has('title')?'has-error':''}}">
        {{ Form::label('detail_body_position', 'Detail Body Position:', ['class'=>'control-label required'])}}
        {!! Form::number("position[detail_body_position]", null, array('placeholder' => 'Detail Body Position','class' => 'form-control')) !!}

    </div>
</div>
