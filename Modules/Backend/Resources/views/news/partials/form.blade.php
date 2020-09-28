<div class="col-md-12">
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
                <label class="required" for="title">
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
            <div class="col-md-6 form-group {{$errors->has('slug') ?'has-error':''}}">
                {{Form::label('slug','Enter Slug in English:')}}
                {{Form::text('slug',null,
                            [
                            'class'=>'col-md-6 form-control',
                            'autocomplete'=>'off',
                            'title'=>'slug',
                            'placeholder'=>'Enter Slug in English',
                            ])}}
            </div>
            <div class="form-group col-md-6 {{$errors->has('category_id' ?'has-error':'')}}">
                <label>
                    <b>Categories</b>
                </label>
                {{Form::select('category_id[]',$selectNewsCategories,isset($news) ?
                           $news->categories->pluck('id')->toArray() : null,
                    ['class'=>'form-control select2','multiple'=>'true',
                        'style'=>'width:100%'])}}
            </div>

            <div class="form-group col-md-6 {{$errors->has('reporter_id') ? 'has-error':''}}">
                {{Form::label('reporter_id','ByLine:')}}
                {{Form::select('reporter_id',$selectReporters,null,['class'=>'form-control select2','placeholder'=>'Select By Line'])}}
            </div>

            <div class="form-group col-md-6 {{$errors->has('guest_id') ? 'has-error':''}}">
                <div class="col-md-11" style="padding-left: 0">
                    {{Form::label('guest_id','Guest By Line:')}}
                    {{Form::select('guest_id',$selectGuests,
                    null,['class'=>'form-control select2','placeholder'=>'Select By Line'])}}
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

            <div class="form-group col-md-6 {{$errors->has('publish_date') ? 'has-error':''}}"
                 style="padding-right: 0">
                {{ Form::label('publish_date', 'Publish on:', ['class'=>'control-label required'])}}
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    {!! Form::text('publish_date',  isset($news) ? $news->publish_date : now()->format('Y-m-d'),
                   array('placeholder' => 'Publish on','class' => 'form-control datepicker', 'autocomplete'=>'off')) !!}
                </div>
            </div>

            <div class="col-md-6 form-group {{$errors->has('tags') ?'has-error':''}}">
                <label for="tags">Tags</label>
                <select class="form-control" multiple="multiple" id="tags" name="tags[]">
                    @foreach($allTags as $key=>$tag)
                        <option value="{{$tag}}"
                                @isset($news_tags)
                                @if(in_array($tag,$news_tags))
                                selected
                            @endif
                            @endisset>
                            {{$tag}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-6 {{$errors->has('video_url') ?'has-error':''}}">
                <label for="title"> <i class="fa fa-youtube-play"></i> <b>Embed Code Only</b></label>
                {{Form::text('video_url',null,['class'=>'form-control','placeholder'=>'Enter video embed code only '])}}
            </div>
            <div class="form-group col-md-6 {{$errors->has('date_line') ?'has-error':''}}">
                <label for="date_line"><i class="fa fa-map-marker"></i> Date Line </label>
                {{Form::text('date_line',null,['class'=>'form-control','placeholder'=>'Enter dateline'])}}
            </div>
            <div class="form-group col-md-6 {{$errors->has('external_url'?'has-error':'')}}">
                <label for="external_url"> External URL </label>
                {{Form::text('external_url',null,['class'=>'form-control','placeholder'=>'Enter external link if any','autocomplete'=>'any'])}}
            </div>
            <div class="form-group col-md-12" style="padding-right: 0">
                <label for="fieldID4">Banner Picture</label>
                <div class="input-group">
                   <span class="input-group-btn btn-flat">
                     <a id="banner_image" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                       <i class="fa fa-picture-o"></i> Choose
                     </a>
                   </span>
                    <label for="image_label">
                    </label>
                    {{Form::text('image',null,['id'=>'image_label','class'=>'form-control'])}}
                </div>
                <img id="holder" style="margin-top:15px;height:150px;width: 200px" alt=""
                     src="{{isset($news) ? $news->image : ''}}">
            </div>


            <div class="form-group col-md-12 {{$errors->has('image_caption'?'has-error':'')}}" style="padding-right: 0">
                {{Form::label('image_caption','Image Caption')}}
                {{Form::textarea('image_caption',null,['class'=>'form-control','placeholder'=>'Enter image caption','rows'=>'5'])}}

            </div>
            <div class="form-group col-md-12  {{$errors->has('sub_description') ?'has-error':''}}">
                <label for="sub_description"> <b>Short description </b></label>
                {{Form::textarea('sub_description' ,null,['class'=>'form-control','rows'=>'5','cols'=>'10','placeholder'=>'Enter sub description'])}}

            </div>

            <div class="form-group col-md-12 {{$errors->has('description') ?'has-error':''}}">
                <label for="description"> <b>Full description </b></label>
                {{Form::textarea('description' ,null,['class'=>'form-control','rows'=>'8','cols'=>'10','placeholder'=>'Enter     description'])}}

            </div>


            <div class="form-group col-md-3 {{$errors->has('is_anchor') ?'has-error':''}} align-center">
                @include('backend::partials.toggle-button',['value'=>'is_anchor','checked'=>$news->is_anchor ?? 0])

            </div>

            <div class="form-group col-md-3 {{$errors->has('is_special') ?'has-error':''}} align-center">
                @include('backend::partials.toggle-button',['value'=>'is_special','checked'=> $news->is_special ?? 0])
            </div>
            <div class="form-group col-md-3 {{$errors->has('is_mob_notification') ?'has-error':''}} align-center">
                @include('backend::partials.toggle-button',['value'=>'is_mob_notification','checked'=>$news->is_mob_notification ?? 0] )

            </div>
            <div class="form-group col-md-3 {{$errors->has('publish_status') ? 'has-error':''}}">
                @include('backend::partials.toggle-button',['value'=>'is_active','checked'=>$news->is_active ?? 1])
            </div>
        </div>
        <div class="box-footer">
            <a href="{{route($routePrefix.'news.index')}}" type="button" class="btn pull-left btn-flat btn-default">
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
{{--@include('backend::file-manager.iframe')--}}
@push('scripts')
    <script>
        $("#tags").select2({
            tags: true
        });
    </script>
    <script>
        var routePrefix = '{{$edition}}'
        CKEDITOR.replace('description', {filebrowserImageBrowseUrl: '/' + routePrefix + '/bl-secure/file-manager/ckeditor'});
    </script>

@endpush
