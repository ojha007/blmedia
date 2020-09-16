<div class="box-body">
    <div class="form-group col-md-6 {{$errors->has('title')?'has-error':''}}">
        {{ Form::label('name', 'Front Navbar Position:', ['class'=>'control-label required'])}}
        {!! Form::number('name', null, array('placeholder' => 'Enter Category Name','class' => 'form-control')) !!}

    </div>
    <div class="form-group col-md-6 {{$errors->has('title')?'has-error':''}}">
        {{ Form::label('name', 'Front Body Position:', ['class'=>'control-label required'])}}
        {!! Form::number('name', null, array('placeholder' => 'Enter Category Name','class' => 'form-control')) !!}

    </div>
    <div class="form-group col-md-6 {{$errors->has('title')?'has-error':''}}">
        {{ Form::label('name', 'Detail Navbar Position :', ['class'=>'control-label required'])}}
        {!! Form::text('name', null, array('placeholder' => 'Enter Category Name','class' => 'form-control')) !!}

    </div>
    <div class="form-group col-md-6 {{$errors->has('title')?'has-error':''}}">
        {{ Form::label('name', 'Category Name:', ['class'=>'control-label required'])}}
        {!! Form::text('name', null, array('placeholder' => 'Enter Category Name','class' => 'form-control')) !!}

    </div>
</div>
