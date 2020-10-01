<form name="Form1">
    <div class="uk-grid uk-grid-small">
        <div class="uk-width-1-2@m">
            <textarea name="asciiArchive" class="uk-textarea uk-width-1-1" onclick="javascript:asciiArchiveClick();"
                      onkeyup="javascript:editArchive();" placeholder="Type Roman Here..." rows="12"> </textarea>
            <textarea name="ascii" onblur="javascript:asciiBlur();" onclick="javascript:asciiClick();"
                      onkeyup="javascript:beginConvert(event);" rows="1"
                      style="display:none;">यहाँ टाईप गर्नुहोस् ।</textarea></div>
        <div class="uk-width-1-2@m">
            <textarea class="uk-textarea uk-width-1-1" name="unicodeArchive" readonly="" rows="12"></textarea>
            <textarea id="unicode" name="unicode" readonly="" rows="1" size="70" style="display:none;"></textarea>
        </div>
    </div>

    <input checked="checked" name="smartConverter_"
           onclick="javascript:smartConverter(Form1.smartConverter_.checked);convert();" style="display:none;"
           type="checkbox">


    <div class="uk-margin-top">
        <div class="uk-grid uk-grid-small" uk-grid="">
            <div class="uk-first-column">
                <input class="uk-button uk-button-secondary uk-width-1-1" name="clear"
                       onclick="javascript:clearInput();" type="button" value="Clear">
            </div>

            <div>
                <input class="uk-button uk-button-primary uk-width-1-1" disabled="disabled" name="convertNow"
                       onclick="javascript:convertArchive();"
                       title="If the text is too large, press this button to convert." type="button"
                       value="Convert Now">
            </div>
            <div>
                <input class="uk-button uk-button-primary uk-width-1-1" name="sAll"
                       onclick="javascript:selectAll(Form1.unicodeArchive);" style="margin-left: 5px;"
                       title="On Internet Explorer, it will perform the 'Copy' command, too.
                       But not so on other browsers due to their limitations. For those, after selected, right click and select 'Copy' "
                       type="button" value="Select All">
            </div>
            <div>
                <select class="uk-select uk-width-1-1" name="htmlEncode" onchange="javascript:toggleHTML();">
                    <option selected="selected" value="false">Readable Unicode</option>
                    <option value="true">HTML Encoded Unicode</option>
                </select>
            </div>
        </div>
    </div>

</form>
@push('scripts')
    <script src="{{asset('/frontend/unicode/js/d.js')}}"></script>
    <script src="{{asset('/frontend/unicode/js/k.js')}}"></script>
    <script src="{{asset('/frontend/unicode/js/j.js')}}"></script>
@endpush
