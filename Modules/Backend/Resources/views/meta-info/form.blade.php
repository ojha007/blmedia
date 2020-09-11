<div class="box-body">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('meta_title','Meta Title') !!}
            {{Form::text('meta_title',null,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {!! Form::label('meta_keywords','Meta Keywords') !!}
            {{Form::text('meta_keywords',null,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {!! Form::label('meta_description','Meta Description') !!}
            {{Form::textarea('meta_description',null,['class'=>'form-control'])}}
        </div>
    </div>
</div>


