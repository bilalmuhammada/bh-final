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
 
 select {
  -webkit-appearance: none;  /* for Chrome */
  -moz-appearance: none;     /* for Firefox */
  appearance: none;
  background: transparent;   /* optional: makes background transparent */
  border: 1px solid #ccc;    /* adjust as needed */
  padding: 5px;
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
 
  /* padding: 1pc 3pc 1pc 3pc !important; */
  
  color: white !important;
  font-size: 14px !important;
  border-radius: 5px !important;
}
 
 
 </style>
@section('content')
    <div class="col-md-6 mx-auto">
         <h5 class="mx-auto text-center" style="margin-bottom: 0px;">You are almost there!</h5>
        <p class="mx-auto text-center" style="font-size: 14px;margin-bottom:4px;">Provide as much Details & Pictures as possible and set right Price!</p>
        <p style="margin-bottom: -15px; font-size:14px; color:blue;">
            <span  style="color:blue;">{{ $listing->category_name }}</span> > <span
                 style="color:blue;">{{ $listing->subcategory_name }}</span>
        </p>
    </div>
    <form class="place-ad-form" enctype="multipart/form-data">
        <input name="listing_id" type="hidden" value="{{$listing->id}}">
        <input type='hidden' class='form-control latitude' id='latitude' name='latitude' placeholder='Enter Latitude'>
        <input type='hidden' class='form-control longitude' id='longitude' name='longitude'
               placeholder='Enter Longitude'>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">


            <div class="form-group form-focus">
            <input type="text" class="form-control floating" name="title" value="{{ $listing->title }}" placeholder="Title"
                    required>

                   
                   <label class="focus-label">Title</label>
                </div>
            <div class="invalid-feedback">
                Please provide a title.
            </div>
        </div>
        <div class="col-md-6 mx-auto" >
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-focus">
                    <input type="number" class="form-control floating" name="price"  placeholder=""   
                           required>
                             
                   <label class="focus-label">Price</label>
                </div>
                    <div class="invalid-feedback">
                        Please provide a valid price.
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-focus">
                    <input type="number" class="form-control floating" name="manufactured_year"  placeholder="Manufactured Year"    required>
                    <label class="focus-label">Manufactured Year</label>
                </div>
                    <div class="invalid-feedback">
                        Please provide a valid Manufactured Year.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mx-auto" >
            <div class="row">
                <div class="col-md-6">
                    <select class="form-controlz" name="condition" required>
                        <option selected disabled>Condition</option>
                        <option value="Perfect inside and out">Perfect inside and out</option>
                        <option value="Almost no noticeable problems or flaws">Almost no noticeable problems or flaws</option>
                        <option value="A bit of wear and tear, but in good working condition">A bit of wear and tear, but in good working condition</option>
                        <option value="Normal wear and tear for the age of the item, a few problems here and there">Normal wear and tear for the age of the item, a few problems here and there</option>
                        <option value="Above average wear and tear. The item may need a bit of repair to work properly">Above average wear and tear. The item may need a bit of repair to work properly</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-controlz" name="usage" required>
                        <option selected disabled>Usage</option>
                        <option value="Still in Original packing">Still in Original packing</option>
                        <option value="Out of original packaging, but only used once">Out of original packaging, but only used once</option>
                        <option value="Used only a few times">Used only a few times</option>
                        <option value="Used an average amount, as frequently as would be expected">Used an average amount, as frequently as would be expected</option>
                        <option value="Used an above average amount since purchased">Used an above average amount since purchased</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-focus">
                <input type="number" class="form-control floating" name="stock_level"  placeholder="Stock Level"   
                           required>
                           <label class="focus-label">Stock Level</label>
                        </div>
                    <div class="invalid-feedback">
                        Please provide a valid stock level.
                    </div>
                   {{-- <select class="form-controlz" name="stock_level" required>
                        {{-- <option selected disabled>Stock Level</option> --}}
                        {{-- <option selected disabled>MAke Swwwwelf Type Bar</option>
                        <option value="1000">1000</option>
                        <option value="2000">2000</option>
                        <option value="3000">3000</option>
                        <option value="4000">4000</option>
                        <option value="5000">5000</option>
                    </select>  --}} 
                </div>
                <div class="col-md-6">
                    <select class="form-controlz" name="stock_unit" required>
                        <option selected disabled>Stock Unit</option>
                        <option value="pcs">Pcs</option>
                        <option value="kg">Kg</option>
                        <option value="ton">Tons</option>
                        <option value="ltr">Ltr</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6 mx-auto">
            <div class="row">
                <div class="col-md-6">
                    <select class="form-controlz" name="source" required>
                        <option selected disabled>Source</option>
                        <option value="Manufacturer">Manufacturer</option>
                        <option value="Distributor">Distributor</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-controlz" name="trade" required>
                        <option selected disabled>Trade</option>
                        <option value="Worlwide">Worlwide</option>
                        <option value="Inside Country">Inside Country</option>
                        <option value="Within Region">Within Region</option>
                    </select>
                </div>
            </div>
        </div>
           <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="form-group form-focus">
           <input type="number" class="form-control floating" name="phone" placeholder=""   
             title="" required>
                    
                           <label class="focus-label">Mobile</label>
                        </div>
                           <div class="invalid-feedback">
                        Please provide a valid 10-digit Mobile number.
                    </div>
        </div>
        <div class="col-md-6 mx-auto">
            <div class="form-group form-focus">
            <textarea name="description" class="form-control floating" placeholder="" style="height: 200px;"
                      required></textarea>
                      
                      <label class="focus-label">Description</label>
                    </div>
            <div class="invalid-feedback">
                Please provide a description.
            </div>
        </div>

        @include('listings.image&file');
   
        <div class="col-md-6 mx-auto">
            <div class="row">
                <div class="col-md-6">
                    <select class="form-controlz country" name="country" placeholder="Select Country" required>
                        <option disabled selected>Country</option>
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
                        <option selected disabled>City</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a city.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="form-group form-focus">
            <input type="text" class="form-control floating location_name" name="location_name" placeholder="Location Type"
                      required>
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
        <a class="btn place-ad-form-submit">Post</a>
        </div>
    </form>

@endsection
@section('page_scripts')
    <script type="text/javascript"> map_key = "{{env('GOOGLE_MAP_KEY')}}"; </script>
    <script type="text/javascript" src="{{ asset('js/listings_form.js') }}"></script>

    <script>
  function validatePhoneNumber(input) {
    // Remove any non-digit characters
    input.value = input.value.replace(/\D/g, '');
    
    // Check if the input length is exactly 10 digits
    if (input.value.length !== 10) {
        input.setCustomValidity('Please enter a valid 10-digit number');
    } else {
        input.setCustomValidity('');
    }
  }

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
                        showAlert("success", "Your Ad is Live!");
                        // setTimeout(function () {
                        //     window.location.assign(`${base_url}listing/plane-ad/${response.listing_id}`);
                        // }, 600);

                    } else {
                        // showAlert("error", response.message);
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
