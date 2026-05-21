<div class="col-md-6 mx-auto listing-upload-field listing-upload-field-after-textarea">
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

<div class="col-md-6 mx-auto listing-upload-preview">
    <div id="image-display-div" style="margin-bottom: 11px;" class="row">
        @if(isset($Listing))
            @foreach($Listing->images as $image)
                <div class="col-3 mb-3" >
                    <div class="image-gallery">
                      <div class="image-container">
                        <img class="form-image img-thumbnail" src="{{ asset('uploads/listings/' . $image->name) }}" />
                        <i class="fa fa-close remove-existing-img" attachment-id="{{ $image->id }}"></i>
                      </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>

<div class="col-md-6 mx-auto listing-upload-field">
    <div class="input--file">
        <i class="fa fa-camera fa-1x"></i>
        <input type="file" multiple class="form-controlz form-control-file  documents" id="fileInput" name="documents[]"
            placeholder="Upload Documents" accept=".pdf, .doc, .docx, .xls, .xlsx">
        <div class="invalid-feedback image-error" id="fileError">
            Invalid
        </div>
        <span><b>Add Files</b></span>
    </div>
</div>

<!-- Middle Separate Section for Toggle -->
<div class="col-md-6 mx-auto listing-upload-toggle">
    <div class="premium-toggle-container" id="filehide">
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
    <div id="document-display-div" class="row">
        @if(isset($Listing))
            @foreach($Listing->documents as $doc)
                <div class="col-3 mb-3" >
                    <div class="image-gallery">
                      <div class="image-container">
                        <img class="form-image img-thumbnail" src="{{ asset('uploads/listings/documents/' . $doc->name) }}" />
                        <i class="fa fa-close remove-existing-doc" attachment-id="{{ $doc->id }}"></i>
                      </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastedjs/dist/toasted.min.css">
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/toastedjs/dist/toasted.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var fileInput = document.getElementById('fileInput');
        if (fileInput) {
            fileInput.addEventListener('change', function () {
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
