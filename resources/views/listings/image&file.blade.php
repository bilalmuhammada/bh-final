
<style>
    .btn.focus, .btn:focus{
        box-shadow: 0 0 0 0rem rgba(0, 123, 255, .25) !important;
    }
     
</style>
<div class="col-md-6 mx-auto" style="margin-top:166px;">
    <div class="input--file">
        <i class="fa fa-camera fa-1x"></i>
        <input type="file" multiple class="form-controlz form-control floating form-control-file images" name="images[]"
               placeholder="Upload Images" accept="image/*">
        <div class="invalid-feedback image-error">
            Please upload at least one image.
        </div>
        <span><b>Add Photos</b></span>
    </div>
   
</div>
<div class="col-md-4" style="margin-top:30px; margin-left: 29rem !important; max-width: 53% !important;">

    <div id="image-display-div" style="display: flex; flex-wrap: wrap;"></div>
</div>

<div class="col-md-6 mx-auto" style="margin-top:-7px;margin-bottom: 14px;">
    <div class="input--file">
        <i class="fa fa-camera fa-1x"></i>
        <input type="file" multiple class="form-controlz form-control-file  documents"  id="fileInput" name="documents[]"
               placeholder="Upload Documents"    accept=".pdf, .doc, .docx, .xls, .xlsx">
        <div class="invalid-feedback image-error" id="fileError">
            Invalid
        </div>
        <span><b>Add Files</b></span>
    </div>


    <div class="form-group" id="filehide" style="margin-bottom: -21px !important;">
        <label style="text-align: center; margin-left: 17.2rem;font-size: 13px;padding: 7px;">Do you want to Show or Hide your Files?</label>
        <div class="btn-group btn-group-toggle" data-toggle="buttons" style="display: ruby-text">
            <label class="btn active  btn-show btn-darker" style="margin-left:19.8rem !important;background-color: #dadadb">
                <input type="radio" name="options" id="showPhone" autocomplete="off" checked style="margin-left: 6pc"> Show
            </label>
            {{-- 525252 --}}
            <label class="btn btn-show btn-darker-hide"  style="margin-left: 26px !important; float: right;background-color: #dadadb">
                <input type="radio" name="options" id="hidePhone" autocomplete="off" > Hide
            </label>
        </div>
    </div>
</div>



<div class="col-md-4 mx-auto" style="margin-bottom: 11px; margin-left: 29rem !important;max-width: 53% !important;">
    <div id="document-display-div" style="display: flex; flex-wrap: wrap"></div>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastedjs/dist/toasted.min.css">
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/toastedjs/dist/toasted.min.js"></script>
<script>
$(document).ready(function() {
    $('#fileInput').on('change', function() {
        var files = $(this)[0].files;
     
        var fileError = $('#fileError');

        if (files.length > 4) {
                Toasted.show('You can only upload a maximum of 24 files.', {
                    type: 'error',
                    duration: 5000,
                    position: 'top-right'
                });
                $(this).val('');  // Clear the input
            }
      
    });
});
</script>

