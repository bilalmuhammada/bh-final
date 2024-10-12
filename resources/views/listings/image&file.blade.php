<div class="col-md-6 mx-auto" style="margin-top:166px;">
    <div class="input--file">
        <i class="fa fa-camera fa-1x"></i>
        <input type="file" multiple class="form-controlz form-control-file images" name="images[]"
               placeholder="Upload Images" accept="image/*">
        <div class="invalid-feedback image-error">
            Please upload at least one image.
        </div>
        <span><b>Add Photos</b></span>
    </div>
</div>
<div class="col-md-4 mx-auto" style="margin-top:30px; margin-left: 24pc !important; max-width: 53% !important;">

    <div id="image-display-div" style="display: flex; flex-wrap: wrap;"></div>
</div>

<div class="col-md-6 mx-auto" style="margin-top: 20px;">
    <div class="input--file">
        <i class="fa fa-camera fa-1x"></i>
        <input type="file" multiple class="form-controlz form-control-file documents"  id="fileInput" name="documents[]"
               placeholder="Upload Documents" accept=".pdf,.doc" >
        <div class="invalid-feedback image-error" id="fileError">
            Invalid
        </div>
        <span><b>Add File</b></span>
    </div>


    <div class="form-group" id="filehide">
        <label style="text-align: center; margin-left: 13rem;font-size: 17px;">Do you want to show or hide your Files?</label>
        <div class="btn-group btn-group-toggle" data-toggle="buttons" style="display: ruby-text">
            <label class="btn active  btn-show" style="margin-left:17rem !important;background-color: #dadadb">
                <input type="radio" name="options" id="showPhone" autocomplete="off" checked style="margin-left: 6pc"> Show File
            </label>
            <label class="btn btn-show"  style="margin-right: 2rem !important; float: right;background-color: #525252">
                <input type="radio" name="options" id="hidePhone" autocomplete="off" > Hide File
            </label>
        </div>
    </div>
</div>



<div class="col-md-4 mx-auto" style="margin-left: 24rem !important;max-width: 53% !important;">
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

