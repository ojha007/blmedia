@php
    $errors_config = [
           'success'=>'green',
           'failed'=>'danger',
           'error'=>'danger',
           'warning'=>'warning'
        ]
@endphp
@if ($message = session()->has($errors_config))
    <div class="box-body" style="padding-left: 0; padding-right: 0;">
        <div class="alert alert-{{$errors_config['success']}} alert-dismissible no-margin">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>{{ucwords($errors_config[0])}}!</h4>
            {!! $message !!}
        </div>
    </div>
@endif
@if ($errors->any())
    <div class="box-body"style="padding-left: 0; padding-right: 0;">
        <div class="alert alert-danger alert-dismissible no-margin">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Error!</h4>
            @foreach (array_unique($errors->all()) as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    </div>
@endif



