<div class="col-md-9">
    <div class="box">
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
            {{Form::text('secondary_title',null,
                        [
                        'class'=>'col-md-6 form-control required valid',
                        'autocomplete'=>'off',
                        'title'=>'Title',
                        'placeholder'=>'Enter Secondary Title',
                        ])}}
        </div>

        <div class="col-md-12 form-group {{$errors->has('sub_title') ?'has-error':''}}">
            {{Form::label('tag_line','Tag Line:')}}
            {{Form::text('tag_line',null,
                        [
                        'class'=>'col-md-6 form-control ',
                        'autocomplete'=>'off',
                        'title'=>'Title',
                        'placeholder'=>'Enter Tag Line',
                        ])}}
        </div>

        <div class="form-group col-md-12">
            <div class="col-md-9" style="padding-left: 0">
                {{Form::label('reporter_id','ByLine:')}}
                {{Form::select('reporter_id',[],null,['class'=>'form-control select2','placeholder'=>'Select By Line'])}}
            </div>
            <div class="col-md-3">
                {{Form::label('is_fixed','Is Fixed :')}}
                <div class="form-control">
                    <label class="radio-inline">
                        <input type="radio" name="is_fixed" value="1">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="is_fixed" value="0" checked="">No
                    </label>

                </div>
            </div>
        </div>

        <div class="form-group col-md-12">
            <div class="col-md-11" style="padding-left: 0">
                {{Form::label('guest_id','Guest By Line:')}}
                {{Form::select('guest_id',[],null,['class'=>'form-control select2','placeholder'=>'Select By Line'])}}
            </div>
            <div class="col-md-1">
                <label></label>
                <a class="btn btn-primary btn-flat text-center align-center"
                   data-target="#add_guest"
                   data-toggle="modal"
                   title="Add New Guest">
                    <i class="fa fa-user-plus"></i>

                </a>
            </div>
        </div>


        <div class="form-group col-md-12">
            <label for="title"> <i class="fa fa-youtube-play"></i> <b>Embed Code Only</b></label>
            {{Form::text('video_url',null,['class'=>'form-control','placeholder'=>'Enter video embed code only '])}}
        </div>
        <div class="form-group col-md-12">
            <label for="date_line"><i class="fa fa-map-marker"></i> Date Line </label>
            {{Form::text('date_line',null,['class'=>'form-control','placeholder'=>'Enter dateline'])}}
        </div>

        <div class="form-group col-md-12">
            <label for="description"> <b>Full description </b></label>
            {{Form::textarea('description')}}
            <textarea rows="5" cols="10" class="form-control" name="content" id="description">
<!--                                --><?php //echo (isset($content['content']) && $content['content'] != "") ? $content['content'] : ""; ?>
                                </textarea>
        </div>


        <div class="box-body">
            <label> External URL </label>
            <input type="text" placeholder="Enter external url if you have only"
                   class="form-control" name="external_url" id="external_url" value=""
                   autocomplete="off">

        </div>


        <div class="form-group box-body" style="display:none;">

            <label for="title"> <b>Show Content Below Flash News</b> </label>
            <div class="form-control">

                <label class="radio-inline">
                    <input type="radio" name="show_content" value="1" checked="">Yes
                </label>
                <label class="radio-inline">
                    <input type="radio" name="show_content" value="0">No
                </label>
            </div>
        </div>


        <div class="form-group box-body" style="display:none;">
            <label for="meta_key">Meta Key</label>
            <input class="form-control" id="meta_key" name="meta_key" type="text" value="">
        </div>

        <div class="form-group box-body" style="display:none;">
            <label for="meta_desc">Meta Description</label>
            <textarea class="form-control" id="meta_desc" rows="5" name="meta_desc"
                      cols="50"></textarea>
        </div>
    </div>
</div>


<div class="col-md-3">
    <!-- general form elements -->
    <div class="box box-primary">


        <div class="box-body">
            <label> <i class="fa fa-calendar"></i> <b> Publish on</b></label>
            <!--                                    --><?php
            //                                    $now = new DateTime();
            //                                    $now->setTimezone(new DateTimezone('Asia/kathmandu'));
            //                                    ?>

            {{--                                    <input type="datetime-local" placeholder="Date" class="form-control" name="publish_time"--}}
            {{--                                           id="publish_time" value="<?php echo $now->format('Y-m-d H:i:s'); ?>">--}}

        </div>


        <div class="box-body">
            <label><b>Categories</b></label>

            <select class="form-control select2" multiple="multiple" data-placeholder="Select category"
                    name="category_id[]"
                    style="width: 100%;">
                <!--                                            --><?php //foreach ($get_active_category as $cat) { ?>
            {{--                                            <option--}}
            {{--                                                value="<?php echo $cat['category_id']; ?>"><?php echo $cat['category_name'] ?></option>--}}
            <!--                                            --><?php //} ?>

            </select>
        </div>


        <div class="box-body">
            <div class="form-group">
                <label>Banner Picture</label>


                <div class="input-append">
                    <input id="fieldID4" type="text" name="server_image" class="form-control" value="">
                    <a data-toggle="modal" href="javascript:;" data-target="#myModal"
                       class="btn btn-default" type="button">Select</a>
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
                                        {{--                                                                                    src="<?php echo base_url(); ?>../filemanager/dialog.php?type=2&field_id=fieldID4'&fldr="--}}
                                        frameborder="0"
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


        </div>


        <div class="box-body form-group">
            <label for="title"> <b>Image Caption</b></label>
            <textarea class="form-control" name="image_caption" rows="3" placeholder="Enter ..."
                      autocomplete="off"></textarea>
        </div>


        <div class="box-body">
            <label> <b>Anchor News</b></label>
            <div class="form-control">

                <div class="col-md-10">
                    <label class="radio-inline">
                        <input id="is_flash" name="is_flash" type="radio" value="1">
                        Yes
                    </label>
                    <label class="radio-inline">
                        <input checked="checked" id="is_flash" name="is_flash" type="radio" value="0">
                        No
                    </label>
                    <span class="field-validation-valid help-block" data-valmsg-for="PhoneNumber"
                          data-valmsg-replace="true"></span>
                </div>
            </div>
        </div>
        <div class="box-body">
            <label for="title"> <b>Short description</b></label>
            <textarea placeholder="Short content" class="form-control" name="short_content"
                      id="short_content" rows="5" value=""></textarea>
        </div>
        <div class="box-body">
            <label> <b>BL Special</b></label>
            <div class="form-control">

                <div class="col-md-10">
                    <label class="radio-inline">
                        <input id="is_special" name="is_special" type="radio" value="1">
                        Yes
                    </label>
                    <label class="radio-inline">
                        <input checked="checked" id="is_special" name="is_special" type="radio"
                               value="0">
                        No
                    </label>
                    <span class="field-validation-valid help-block" data-valmsg-for="PhoneNumber"
                          data-valmsg-replace="true"></span>
                </div>
            </div>
        </div>

        <div class="box-body">
            <label> <b>Mobile Notification</b></label>
            <div class="form-control">

                <div class="col-md-10">
                    <label class="radio-inline">
                        <input id="is_mob_notifiaction" name="is_mob_notifiaction" type="radio"
                               value="1">
                        Yes
                    </label>
                    <label class="radio-inline">
                        <input checked="checked" id="is_mob_notifiaction" name="is_mob_notifiaction"
                               type="radio" value="0">
                        No
                    </label>
                </div>
            </div>
        </div>


        <div class="box-body">
            <label> <b>Published </b></label>
            <select class="form-control" name="publish_status">
                <option value="1">Yes</option>
                <option value="0">No</option>
                <option value="2">Draft</option>

            </select>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary btn-flat">Submit</button>
        </div>
    </div>

</div>


<div id="add_guest" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <form method="post" id="user_form" enctype="multipart/form-data">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Form Adding New Guest</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label>Name<span class="asterisk">*</span></label>
                            <input type="text" id="guest_title" class="form-control" name="guest_title"
                                   data-validation-allowing="float" size="50" data-validation="required"
                                   {{--                                   value="<?php echo (isset($detail['guest_title']) && $detail['guest_title'] != "") ? $detail['guest_title'] : ""; ?>"--}}
                                   autocomplete="off" class="regular-text required valid"
                                   kl_virtual_keyboard_secure_input="on">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label>Organization<span class="asterisk">*</span></label>
                            <input type="text" id="organization" class="form-control" name="organization"
                                   data-validation-allowing="float" size="50" data-validation="required"
                                   {{--                                   value="<?php echo (isset($detail['organization']) && $detail['organization'] != "") ? $detail['organization'] : ""; ?>"--}}
                                   autocomplete="off" class="regular-text required valid"
                                   kl_virtual_keyboard_secure_input="on">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <label>Profile Picture<span class="asterisk">*</span></label>
                            <input type="file" class="form-control" name="guest_image" id="guest_image">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="guest_submit_btn" name="action"
                            class="btn btn-success btn-flat"
                            value="Add">Add
                    </button>
                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')

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
    {{--                        data: new FormData($('#user_form')[0]),--}}
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
