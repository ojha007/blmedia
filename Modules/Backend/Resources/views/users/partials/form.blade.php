<div class="col-md-12">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">
                <strong>
                    User
                </strong>
            </h3>
        </div>
        <div class="box-body">
            <div class="col-md-9">
                <div class="form-group {{$errors->has('full_name') ?'has-error' :''}}">
                    {{ Form::label('full_name', 'Full Name:', ['class'=>'col-sm-2 control-label required'])}}
                    <div class="col-sm-10">
                        {!! Form::text('full_name', null, array('placeholder' => 'Enter Full Name','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group {{$errors->has('user_name') ?'has-error' :''}}">
                    {{ Form::label('user_name', 'User Name:', ['class'=>'col-sm-2 control-label required'])}}
                    <div class="col-sm-10">
                        {!! Form::text('user_name', null, array('placeholder' => 'Enter User Name','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group {{$errors->has('email') ?'has-error' :''}}">
                    {{ Form::label('email', 'Email Address:', ['class'=>'col-sm-2 control-label required'])}}
                    <div class="col-sm-10">
                        {!! Form::email('email', null, array('placeholder' => 'Enter Email Address','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group {{$errors->has('role_id') ?'has-error' :''}}">
                    {{ Form::label('role', 'Role:', ['class'=>'col-sm-2 control-label required'])}}
                    <div class="col-sm-10">
                        {!! Form::select('role', $roles, null ,
                        array('placeholder' => 'Select Role','class' => 'form-control select2','style'=>'width:100%;')) !!}
                    </div>
                </div>
                <div class="form-group {{$errors->has('status') ?'has-error' :''}}">
                    {{ Form::label('status', 'Status:', ['class'=>'col-sm-2 control-label'])}}
                    <div class="col-sm-10">
                        {!! Form::hidden('status', 0) !!}
                        <input name="status" value="1" type="checkbox" data-toggle="toggle" data-on="Active"
                               data-off="Inactive">
                    </div>
                </div>

            </div>
        </div>
        <div class="box-footer">
            <a href="{{route($routePrefix.'users.index')}}" type="button" class="btn btn-flat pull-left btn-default">
                <i class="fa fa-arrow-left">
                </i>
                Close
            </a>
            <button type="submit" class="btn btn-flat btn-primary pull-right">
                <i class="fa fa-save">
                </i>
                Submit
            </button>
        </div>
    </div>
</div>
