<div class="col-md-12">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">
                <strong>
                    Create Team
                </strong>
            </h3>

        </div>
        <div class="box-body">
            <div class="form-group {{$errors->has('title') ?'has-error':''}}">
                <label class="required" for="title">
                    Title
                </label>
                {{Form::text('title',null,
                    [
                    'class'=>'col-md-6 form-control required valid',
                    'placeholder'=>'Enter News Title',
                    "style"=>"height:40px;font-size:15px"

                    ])}}
            </div>
            <div class=" form-group {{$errors->has('designation') ?'has-error':''}}">
                {{Form::label('designation','Designation:')}}
                {{Form::text('designation',null,
                            [
                            'class'=>' form-control',
                            'placeholder'=>'Enter Designation',
                            ])}}
            </div>
            <div class=" form-group {{$errors->has('email') ?'has-error':''}}">
                {{Form::label('email','Email:')}}
                {{Form::email('email',null,
                            [
                            'class'=>' form-control',
                            'placeholder'=>'Enter Email',
                            ])}}
            </div>

            <div class=" form-group {{$errors->has('detail') ?'has-error':''}}">
                {{Form::label('detail','Detail:')}}
                {{Form::textarea('detail',null,
                            [
                            'class'=>'col-md-6 form-control ',
                            'placeholder'=>'Enter Details',
                            ])}}
            </div>

            <div class=" form-group {{$errors->has('image') ?'has-error':''}}">
                {{Form::label('image','Image:')}}
                {{Form::file('image',null, ['class'=>'form-control ',])}}
            </div>

            <div class="col-md-12 form-group">
                {{ Form::label('is_active', 'Is Active:')}}
                {!! Form::hidden('is_active', 0) !!}
                <div class="row">
                    <input name="is_active" value="1" type="checkbox" class="form-control" data-toggle="toggle"
                           data-on="Active"
                           data-off="Inactive">
                </div>
            </div>
        </div>
        <div class="box-footer">
            <a href="{{route($routePrefix.'.team.index')}}" type="button" class="btn pull-left btn-flat btn-default">
                <i class="fa fa-arrow-left">
                </i>
                Close
            </a>
            <button type="submit" class="btn btn-primary  pull-right btn-flat">
                <i class="fa fa-save"></i> Submit
            </button>
        </div>

    </div>
</div>


@push('scripts')
    <script>
        CKEDITOR.replace('description');
    </script>


@endpush
