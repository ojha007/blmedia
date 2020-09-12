<div class="col-md-9">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">
                <strong>
                    Create News
                </strong>
            </h3>

        </div>
        <div class="box-body">
            <div class="form-group col-md-12 {{$errors->has('title') ?'has-error':''}}">
                <label class="required" for="title" style='margin-top:20px;'>
                    <i class="fa fa-tex"></i>
                    Title
                </label>
                {{Form::text('title',null,
                    [
                    'class'=>'col-md-6 form-control required valid',
                    'autocomplete'=>'off',
                    'title'=>'Title',
                    'placeholder'=>'Enter News Title',
                    "style"=>"height:65px;font-size:25px"

                    ])}}
            </div>
            <div class="col-md-12 form-group {{$errors->has('sub_title') ?'has-error':''}}">
                {{Form::label('sub_title','Sub Title:')}}
                {{Form::text('sub_title',null,
                            [
                            'class'=>'col-md-6 form-control',
                            'autocomplete'=>'off',
                            'title'=>'Title',
                            'placeholder'=>'Enter Secondary Title',
                            ])}}
            </div>

            <div class="form-group col-md-12 {{$errors->has('category_id' ?'has-error':'')}}">
                <label>
                    <b>Categories</b>
                </label>
                {{Form::select('category_id[]',[],null,
                    ['class'=>'select2 form-control','data-placeholder'=>'Select Category','style'=>'width:100%'])}}
            </div>

            <div class="col-md-12 form-group {{$errors->has('tag_line') ?'has-error':''}}">
                {{Form::label('tag_line','Tag Line:')}}
                {{Form::text('tag_line',null,
                            [
                            'class'=>'col-md-6 form-control ',
                            'autocomplete'=>'off',
                            'title'=>'Title',
                            'placeholder'=>'Enter Tag Line',
                            ])}}
            </div>

            <div class="form-group col-md-12 {{$errors->has('reporter_id') ? 'has-error':''}}">
                <div class="col-md-9" style="padding-left: 0">
                    {{Form::label('reporter_id','ByLine:')}}
                    {{Form::select('reporter_id',[],null,['class'=>'form-control select2','placeholder'=>'Select By Line'])}}
                </div>
                <div class="col-md-3">
                    {{Form::label('is_fixed','Is Fixed :')}}
                    <div class="form-control">
                        <label>
                            <input type="radio" name="is_fixed" value="1">
                            Yes
                        </label>
                        <label>
                            <input type="radio" name="is_fixed" value="0" checked="">
                            No
                        </label>

                    </div>
                </div>
            </div>

            <div class="form-group col-md-12 {{$errors->has('guest_id') ? 'has-error':''}}">
                <div class="col-md-11" style="padding-left: 0">
                    {{Form::label('guest_id','Guest By Line:')}}
                    {{Form::select('guest_id',[],null,['class'=>'form-control select2','placeholder'=>'Select By Line'])}}
                </div>
                <div class="col-md-1">
                    <label></label>
                    <a class="btn btn-primary btn-flat text-center bootstrap-modal-form-open align-center"
                       data-target="#add_guest"
                       data-toggle="modal"
                       title="Add New Guest">
                        <i class="fa fa-user-plus"></i>

                    </a>
                </div>
            </div>


            <div class="form-group col-md-12 {{$errors->has('video_url') ?'has-error':''}}">
                <label for="title"> <i class="fa fa-youtube-play"></i> <b>Embed Code Only</b></label>
                {{Form::text('video_url',null,['class'=>'form-control','placeholder'=>'Enter video embed code only '])}}
            </div>
            <div class="form-group col-md-12 {{$errors->has('date_line') ?'has-error':''}}">
                <label for="date_line"><i class="fa fa-map-marker"></i> Date Line </label>
                {{Form::text('date_line',null,['class'=>'form-control','placeholder'=>'Enter dateline'])}}
            </div>

            <div class="form-group col-md-12 {{$errors->has('description') ?'has-error':''}}">
                <label for="description"> <b>Full description </b></label>
                {{Form::textarea('description' ,null,['class'=>'form-control','rows'=>'5','cols'=>'10'])}}

            </div>
            <div class="form-group col-md-12  {{$errors->has('sub_description') ?'has-error':''}}">
                <label for="sub_description"> <b>Short description </b></label>
                {{Form::textarea('sub_description' ,null,['class'=>'form-control','rows'=>'5','cols'=>'10','placeholder'=>'Enter sub description'])}}

            </div>

        </div>
        <div class="box-footer">
            <a href="{{route($routePrefix.'.news.index')}}" type="button" class="btn btn-flat btn-default">
                <i class="fa fa-arrow-left">
                </i>
                Close
            </a>
        </div>

    </div>
</div>


<div class="col-md-3">
    <!-- general form elements -->
    <div class="box box-default">
        <div class="box-body">
            <div class="form-group col-md-12 {{$errors->has('publish_time') ? 'has-error':''}}"
                 style="padding-right: 0">
                <label for="publish_time"> <i class="fa fa-calendar"></i>
                    <b> Publish on</b>
                </label>
                <input type="datetime-local" placeholder="Date" class="form-control" name="publish_time"
                       id="publish_time" value="{{now()->format('Y-m-d H:i:s')}}">
            </div>

            <div class="form-group col-md-12" style="padding-right: 0">
                <label for="fieldID4">Banner Picture</label>
                <div class="input-append text-center">
                    {{Form::text('image',null,['class'=>'form-control','style'=>'margin-bottom:5px'])}}
                    <a data-toggle="modal" href="javascript:void (0);"
                       data-target="#myModal"
                       class="btn btn-primary text-center  btn-flat pt-3" type="button">
                        <i class="fa fa-cloud-upload"> Select</i>
                    </a>
                </div>

                <div id="myModal" class="modal fade bs-example-modal-xl" role="dialog">
                    <div class="modal-dialog modal-xl">


                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;
                                </button>
                                <h4 class="modal-title">BL MEDIA GALLERY</h4>
                            </div>
                            <div class="modal-body">
                                <iframe width="100%" height="400"
                                        style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="form-group col-md-12 {{$errors->has('image_caption'?'has-error':'')}}" style="padding-right: 0">
                {{Form::label('image_caption','Image Caption')}}
                {{Form::textarea('image_caption',null,['class'=>'form-control','placeholder'=>'Enter image caption','rows'=>'5'])}}

            </div>

            <div class="form-group col-md-12 {{$errors->has('external_url'?'has-error':'')}}">
                <label for="external_url"> External URL </label>
                {{Form::text('external_url',null,['class'=>'form-control','placeholder'=>'Enter external link if any','autocomplete'=>'any'])}}
            </div>
            <div class="form-group col-md-12 {{$errors->has('is_anchor' ?'has-error':'')}} align-center">
                {!! Form::label('anchor_news','Anchor News') !!}
                <div class="form-control">
                    <label>
                        <input id="is_flash" name="is_flash" type="radio" value="1">
                        Yes
                    </label>
                    <label>
                        <input checked="checked" id="is_flash" name="is_flash" type="radio" value="0">
                        No
                    </label>
                    <span class="field-validation-valid help-block" data-valmsg-for="PhoneNumber"
                          data-valmsg-replace="true"></span>
                </div>
            </div>
            <div class="form-group col-md-12 {{$errors->has('is_anchor' ?'has-error':'')}} align-center">
                {!! Form::label('bl_Special','BL Special') !!}
                <div class="form-control">
                    <label>
                        <input id="is_special" name="is_special" type="radio" value="1">
                        Yes
                    </label>
                    <label>
                        <input checked="checked" id="is_special" name="is_special" type="radio" value="0">
                        No
                    </label>
                    <span class="field-validation-valid help-block" data-valmsg-for="is_special"
                          data-valmsg-replace="true"></span>
                </div>
            </div>
            <div class="form-group col-md-12 {{$errors->has('is_anchor' ?'has-error':'')}} align-center">
                {!! Form::label('is_mob_notification','Mobile Notification') !!}
                <div class="form-control">
                    <label>
                        <input id="is_mob_notification" name="is_mob_notification" type="radio" value="1">
                        Yes
                    </label>
                    <label>
                        <input checked="checked" id="is_mob_notification" name="is_mob_notification" type="radio"
                               value="0">
                        No
                    </label>

                </div>
            </div>
            <div class="form-group col-md-12 {{$errors->has('publish_status') ? 'has-error':''}}">
                {!! Form::label('publish_status','Publish Status') !!}
                {!! Form::select('publish_status',$selectPublishStatuses,null,['class'=>'form-control select2','placeholder'=>'Select Publish ']) !!}
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary btn-flat">
                <i class="fa fa-save"></i> Submit
            </button>
        </div>
    </div>

</div>




@push('scripts')
    <script>

        CKEDITOR.replace('description');
    </script>
    {{--    <script type="text/javascript" language="javascript">--}}
    {{--        $(document).on('ready', function () {--}}
    {{--            $(document).on('click', '#guest_submit_btn', function (event) {--}}
    {{--                var guest_title = $('#guest_title').val();--}}
    {{--                var slug = $('#slug').val();--}}
    {{--                var extension = $('#guest_image').val().split('.').pop().toLowerCase();--}}
    {{--                if (extension != '') {--}}
    {{--                    if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {--}}
    {{--                        alert("Invalid Image File");--}}
    {{--                        $('#guest_image').val('');--}}
    {{--                        return false;--}}
    {{--                    }--}}
    {{--                }--}}
    {{--                if (guest_title != '' && slug != '') {--}}
    {{--                    $.ajax({--}}
    {{--                        url: "<?php echo site_url('news/ajax_guest'); ?>",--}}
    {{--                        method: 'POST',--}}
    {{--                            data: new FormData($('#user_form')[0]),--}}
    {{--                        contentType: false,--}}
    {{--                        processData: false,--}}
    {{--                        success: function (data) {--}}
    {{--                            $('#guest_select').append(--}}
    {{--                                data.appendGuest--}}
    {{--                            );--}}
    {{--                            $('#user_form')[0].reset();--}}
    {{--                            $('#myModal_form').modal('hide');--}}

    {{--                            dataTable.ajax.reload();--}}
    {{--                        }--}}
    {{--                    });--}}
    {{--                } else {--}}
    {{--                    alert("Include Both Guest Name And Slug");--}}
    {{--                }--}}
    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}

@endpush
