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

<div class="col-md-6 mx-auto" style="margin-top:20px;">
    <div id="image-display-div" class="row"></div>
</div>

<div class="col-md-6 mx-auto" style="margin-top:-7px;margin-bottom: 7px;">
    <div class="input--file">
        <i class="fa fa-camera fa-1x"></i>
        <input type="file" multiple class="form-controlz form-control-file  documents"  id="fileInput" name="documents[]"
               placeholder="Upload Documents"    accept=".pdf, .doc, .docx, .xls, .xlsx">
        <div class="invalid-feedback image-error" id="fileError">
            Invalid
        </div>
        <span><b>Add Files</b></span>
    </div>
</div>

<!-- Middle Separate Section for Toggle -->
<div class="col-md-6 mx-auto">
    <div class="premium-toggle-container" id="filehide" >
        <label class="premium-toggle-label">Do you want to Show or Hide your Files?</label>
        <div class="toggle-wrapper">
            <input type="radio" name="options" id="option-show" value="show" checked>
            <input type="radio" name="options" id="option-hide" value="hide">
            
            <label for="option-show" class="toggle-item">Show</label>
            <label for="option-hide" class="toggle-item">Hide</label>
            
            <div class="slider"></div>
        </div>
    </div>
</div>



<div class="col-md-6 mx-auto" style="margin-bottom: 11px;">
    <div id="document-display-div" class="row"></div>
</div>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastedjs/dist/toasted.min.css">
 <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
 <script src="https://cdn.jsdelivr.net/npm/toastedjs/dist/toasted.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var fileInput = document.getElementById('fileInput');
    if (fileInput) {
        fileInput.addEventListener('change', function() {
            var files = this.files;
            if (files.length > 24) {
                if (typeof Toasted !== 'undefined') {
                    Toasted.show('You can only upload a maximum of 24 files.', {
                        type: 'error',
                        duration: 5000,
                        position: 'top-right'
                    });
                } else {
                    alert('You can only upload a maximum of 24 files.');
                }
                this.value = '';  // Clear the input
            }
        });
    }
});
</script>

