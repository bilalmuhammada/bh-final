<div class="col-md-6 mx-auto" style="margin-top:166px;">
    <div class="input--file">
        <i class="fa fa-camera fa-1x"></i>
        <input type="file" multiple class="form-controlz form-control floating form-control-file images" name="images[]"
            placeholder="Upload Images" accept="image/*" data-max-images="40"
            data-existing-image-count="{{ isset($Listing) ? $Listing->images->count() : 0 }}">
        <div class="invalid-feedback image-error">
            Please upload at least one image.
        </div>
        <span><b>Add Photos</b></span>
    </div>


</div>

<div class="col-md-6 mx-auto" style="margin-top:13px;">
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

<div class="col-md-6 mx-auto" style="margin-top:0px;margin-bottom: 18px;">
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
        var imageInput = document.querySelector('.images');
        if (imageInput) {
            imageInput.addEventListener('change', function () {
                var maxImages = Number(this.dataset.maxImages || 40);
                var existingImages = Number(this.dataset.existingImageCount || 0);
                var selectedImages = this.files.length;

                if (existingImages + selectedImages > maxImages) {
                    var availableImages = Math.max(maxImages - existingImages, 0);
                    var message = 'You can upload up to ' + maxImages + ' images per listing. '
                        + (availableImages ? 'You can add ' + availableImages + ' more.' : 'Remove an existing image before adding another.');

                    var errorMessage = this.parentElement.querySelector('.invalid-feedback.image-error');
                    if (errorMessage) {
                        errorMessage.style.display = 'block';
                        errorMessage.textContent = message;
                    }
                    this.value = '';
                }
            });
        }

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
