@extends('listing-layout.master')
<style>
    .form-focus {
     height: 58px;
     position: relative;
 }
 .floating:focus{
        border: 1px solid blue !important;
    box-shadow: 0 0 0 .2rem rgb(255 255 255 / 25%) !important; 
    }
 
 .form-focus .focus-label {
     font-size: 14px;
     font-weight: 400;
     pointer-events: none;
     border-color: #0071DC;
     position: absolute;
     -webkit-transform: translate3d(0, 22px, 0) scale(1);
     -ms-transform: translate3d(0, 22px, 0) scale(1);
     -o-transform: translate3d(0, 22px, 0) scale(1);
     transform: translate3d(0, 22px, 0) scale(1);
     transform-origin: left top;
     transition: 240ms;
     left: 12px;
     top: -3px;
     z-index: 1;
     color: #000;
     margin-bottom: 0;
 }
 
 .form-focus.focused .focus-label {
     opacity: 1;
     top: -18px;
     font-size: 12px;
     z-index: 1;
 }
 
 .form-focus .form-control:focus~.focus-label,
 .form-focus .form-control:-webkit-autofill~.focus-label {
     opacity: 1;
     font-weight: 400;
     top: -18px;
     font-size: 12px;
     z-index: 1;
 }
 
 .form-focus .form-control {
     height: 51px;
     padding: 21px 12px 6px;
     border: 1px solid #2d11e7;
     /* box-shadow: 1px 1px 1px 1px #eee; */
 }
 
 .form-focus .form-control::-webkit-input-placeholder {
     color: transparent;
     transition: 240ms;
 }
 
 .form-focus .form-control:focus::-webkit-input-placeholder {
     transition: none;
 }
 
 .form-focus.focused .form-control::-webkit-input-placeholder {
     color: #8d13ff;
 }
 
 .form-focus.select-focus .focus-label {
     opacity: 1;
     font-weight: 300;
     top: -20px;
     font-size: 12px;
     z-index: 1;
 }
 
 .form-focus .select2-container .select2-selection--single {
     border: 1px solid #e3e3e3;
     height: 50px;
 }
 
 .form-focus .select2-container--default .select2-selection--single .select2-selection__arrow {
     height: 48px;
     right: 7px;
 }
 
 .form-focus .select2-container--default .select2-selection--single .select2-selection__arrow b {
     border-color: #ccc transparent transparent;
     border-style: solid;
     border-width: 6px 6px 0;
     height: 0;
     left: 50%;
     margin-left: -10px;
     margin-top: -2px;
     position: absolute;
     top: 50%;
     width: 0;
 }
 
 .form-focus .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
     border-color: transparent transparent #ccc;
     border-width: 0 6px 6px;
 }
 
 .form-focus .select2-container .select2-selection--single .select2-selection__rendered {
     padding-right: 30px;
     padding-left: 12px;
     padding-top: 10px;
 }
 
 .form-focus .select2-container--default .select2-selection--single .select2-selection__rendered {
     color: #676767;
     font-size: 14px;
     font-weight: normal;
     line-height: 38px;
 }
 
 .form-focus .select2-container--default .select2-results__option--highlighted[aria-selected] {
     background-color: #fc6075;
 }
 
 .packages {
     margin: 20px 10px 60px 10px;
 }
 
 .packages .main-heading {
     padding: 20px;
 }
 
 .packages .main-heading .ul {
     /* padding: 10px; */
     margin: 0px auto;
 }
 
 .packages:hover {
     background-color: #0504aa;
     color: white;
     /* transform: scale(1.1); */
 }
 .btn-show{
  
 

    text-align: center !important;
   
    padding: 1pc 3pc 1pc 3pc !important;
    
    color: white !important;
    font-size: 14px !important;
    border-radius: 11px !important;
 }
 
 
 </style>
@section('content')
    <div class="col-md-6 mx-auto">
         <h3 class="mx-auto text-center">You are almost there!</h3>
        <p class="mx-auto text-center">Provide as much Details & Pictures as possible and set right Price!</p>
        <p>
            <span class="text-muted">{{ $listing->category_name }}</span> ><span
                class="text-muted">{{ $listing->subcategory_name }}</span>
        </p>
    </div>
    <form class="place-ad-form" enctype="multipart/form-data" >
        <input name="listing_id" type="hidden" value="{{$listing->id}}">
        <input type='hidden' class='form-controlz latitude' id='latitude' name='latitude' placeholder='Enter Latitude'>
        <input type='hidden' class='form-controlz longitude' id='longitude' name='longitude'
               placeholder='Enter Longitude'>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating"  name="title" value="{{ $listing->title }}" placeholder="Title"
                   style="padding:22px;" required>
                   <label class="focus-label">title</label>
                </div>
            <div class="invalid-feedback">
                Please provide a title.
            </div>
        </div>

        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
        <div class="row">
        <div class="col-md-6">
             <div class="form-group form-focus">
                <input type="text" class="form-control floating" name="business_type" placeholder="" style="padding:22px;"
                    title="" required>
                    <label class="focus-label">Business Type</label>
                </div>
            <div class="invalid-feedback">
                Please provide a valid Business Type.
            </div>
        </div>
        <div class="col-md-6">
             <div class="form-group form-focus">
                <input type="text" class="form-control floating" name="price" placeholder="" style="padding:22px;" required>
                <label class="focus-label">Price</label>
            </div>
            <div class="invalid-feedback">
                Please provide a valid price.
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-6 mx-auto" style="margin-top: 20px;">
        <div class="row">
        <div class="col-md-6">
        <select class="form-controlz" name="trade_licence_type" required>
                <option disabled selected>Trade Licence</option>
                    <option value="Mainland">Mainland</option>
                    <option value="Freezone">Freezone</option>
                    <option value="Offshore">Offshore</option>
                    <option value="E-Commerce">E-Commerce</option>
                    <option value="Private">Private</option>
            </select>
        </div>
        <div class="col-md-6">
         <div class="form-group form-focus">
                <input type="text" class="form-control floating" name="established_year" placeholder="" style="padding:22px;" required>
                <label class="focus-label">Established Year</label>
            </div>
            <div class="invalid-feedback">
                Please provide a valid Established Year.
            </div>
        </div>
        </div>
    </div>
<div class="col-md-6 mx-auto" style="margin-top: 20px;">
        <div class="row">
        <div class="col-md-6">
             <div class="form-group form-focus">
                <input type="text" class="form-control floating" name="size_sqm" placeholder="" style="padding:22px;"
                    title="" required>
                    <label class="focus-label">Premise Size SqM</label>
                </div>
            <div class="invalid-feedback">
                Please provide a valid Premise Size SqM.
            </div>
        </div>
        <div class="col-md-6">
        <select class="form-controlz" name="lease_term" required>
                    <option disabled selected>Lease Term</option>
                    <option value="Annual">Annual</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Yearly">Yearly</option>
            </select>
        </div>
        </div>
    </div>
    <div class="col-md-6 mx-auto" style="margin-top: 20px;">
        <div class="row">
        <div class="col-md-6">
         <div class="form-group form-focus">
                <input type="text" class="form-control floating" name="no_of_employees" placeholder="" style="padding:22px;"
                    title="" required>
                    <label class="focus-label">No of Employees</label>
                </div>
            <div class="invalid-feedback">
                Please provide a valid No of Employees.
            </div>
        </div>
        <div class="col-md-6">
             <div class="form-group form-focus">
                <input type="text" class="form-control floating" name="reason_for_sale" placeholder="" style="padding:22px;"
                    title="" required>
                    <label class="focus-label">Reason for Sale</label>
                </div>
            <div class="invalid-feedback">
                Please provide a valid Reason for Sale.
            </div>
        </div>
</div>
</div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
        <div class="row">
        <div class="col-md-6">
            <select class="form-controlz" name="open_for_partnership"  required>
                <option disabled selected>Open for Partnership</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
            </select>
        </div>
            <div class="col-md-6">
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating"  name="phone" placeholder="" style="padding:22px;"
                   pattern="[0-9]{10}" title="Please enter a valid 10-digit  number" required>
                   <label class="focus-label">Mobile</label>
                </div>
                   <div class="invalid-feedback">
                Please provide a valid 10-digit Mobile number.
            </div>
        </div>
        </div>
    </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="form-group form-focus">
            <textarea name="products_and_services_offered" class="form-controlz" maxlength="100" placeholder="" style="height: 120px;"
                      required></textarea>
                      <label class="focus-label">Products & Services Offered</label>
                    </div>
            <div class="invalid-feedback">
                Please provide a Products & Services Offered.
            </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 80px;">
            <div class="form-group form-focus">
            <textarea name="description" class="form-controlz" placeholder="" style="height: 200px;"
                      required></textarea>
                      <label class="focus-label">Description</label>
                    </div>
            <div class="invalid-feedback">
                Please provide a description.
            </div>
        </div>

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
        <div class="col-md-4 mx-auto" style="margin-top: 10px;margin-bottom: 10px; margin-left: 18pc !important;">
            <div id="image-display-div" style="display: flex"></div>
        </div>

        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="input--file">
                <i class="fa fa-camera fa-1x"></i>
                <input type="file" multiple class="form-controlz form-control-file documents" name="documents[]"
                       placeholder="Upload Documents" accept=".pdf,.doc" >
                <div class="invalid-feedback image-error">
                    Invalid
                </div>
                <span><b>Add File</b></span>
            </div>


            <div class="form-group" id="filehide">
                <label style="    padding: 25px;
                text-align: center;
                font-size: 25px;">Do you want to show or hide your Files?</label>
                <div class="btn-group btn-group-toggle" data-toggle="buttons" style="display: ruby-text">
                    <label class="btn active  btn-show" style="margin-left: 6pc !important;background-color: #dadadb">
                        <input type="radio" name="options" id="showPhone" autocomplete="off" checked style="margin-left: 6pc"> Show File
                    </label>
                    <label class="btn btn-show"  style="margin-right: 9pc !important; float: right;background-color: #525252">
                        <input type="radio" name="options" id="hidePhone" autocomplete="off" > Hide File
                    </label>
                </div>
            </div>
        </div>
    


        <div class="col-md-4 mx-auto" style="margin-top: 20px;padding-bottom: 10px;margin-left: 18pc !important;">
            <div id="document-display-div" style="display: flex"></div>
        </div>

    
        <div class="col-md-6 mx-auto">
            <div class="row">
        <div class="col-md-6">
            <select class="form-controlz country" name="country" placeholder="Select Country" required>
                <option disabled selected>Select Country</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->nice_name }}</option>
                    @endforeach
            </select>
            <div class="invalid-feedback">
                Please select a country.
            </div>
        </div>
        <div class="col-md-6">
            <select class="form-controlz city" name="city" placeholder="Select City" required>
                <option disabled selected>Select city</option>
            </select>
            <div class="invalid-feedback">
                Please select a city.
            </div>
        </div>
        </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating location_name" name="location_name" placeholder=""
                   style="padding:22px;" required>
                   <label class="focus-label">Location Type</label>
                </div>
            <div class="invalid-feedback">
                Please provide a location.
            </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="map" id="map"></div>
        </div>
        <div class="col-md-6 mx-auto text-center btn-nexts" style="margin-top: 20px;">
        <a class="btn place-ad-form-submit">Next</a>
        </div>
    </form>

@endsection
@section('page_scripts')
    <script type="text/javascript"> map_key = "{{env('GOOGLE_MAP_KEY')}}"; </script>
    <script type="text/javascript" src="{{ asset('js/listings_form.js') }}"></script>

    <script>




$(document).on('click', '.place-ad-form-submit', function (e) {
            e.preventDefault();
             var formData = new FormData($('.place-ad-form')[0]);
// console.log(formData);
            $.ajax({
                url: api_url + 'listing/nextsubmit',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                success: function (response) {
                console.log(response);
                    if (response.status) {

                        setTimeout(function () {
                            window.location.assign(`${base_url}listing/plane-ad/${response.listing_id}`);
                        }, 600);

                    } else {
                        alert(response.message);
                    }
                },
                error: function (response) {
                    showAlert("error", "Server Error");
                }
            });
        });

        $(document).ready(function () {





$('#filehide').hide();

$(document).on('click', '.documents', function (e) {
    $('#filehide').show();
});


       if ($('.floating').length > 0) {
           $('.floating').on('focus blur', function (e) {
               $(this).parents('.form-focus').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
           }).trigger('blur');
       }
   });
   </script>
@endsection
