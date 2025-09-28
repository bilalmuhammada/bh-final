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
     top: -6px;
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
 
 /* select {
  -webkit-appearance: none;  
  -moz-appearance: none;    
  appearance: none;
  background: transparent;   
  border: 1px solid #ccc;    
  padding: 5px;
} */

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
.menucolor{
    color:goldenrod;
 }
 .menucolor:hover{
    color:#000fff;
 }


 </style>
@section('content')
    <div class="col-md-6 mx-auto">
         <h5 class="mx-auto text-center" style="margin-bottom: 0px;">You are almost there!</h5>
        <p class="mx-auto text-center" style="font-size: 14px;margin-bottom:4px;">Provide as much Details & Pictures as possible and set right Price!</p>
        <p style="margin-bottom: 3px; font-size:14px; color:blue;">
            <span class="menucolor"> <a href="javascript:history.back()"  style="color: inherit; text-decoration: none;">
            {{ $Categories->name }}
        </a> </span> > <span
            style="color:blue;">{{ $subcategories->name }}</span>
        </p>
    </div>
    <form class="place-ad-form" enctype="multipart/form-data">
        {{-- <input name="listing_id" type="hidden" value="{{$listing->id}}"> --}}
        <input name="category_id" type="hidden" value="{{ $Categories->id }}">
        <input name="category_name" type="hidden" value="{{ $Categories->name }}">
        <input name="subcategory_name" type="hidden" value="{{ $subcategories->name }}">
        <input type='hidden' class='form-control latitude' id='latitude' name='latitude' placeholder='Enter Latitude'>
        <input type='hidden' class='form-control longitude' id='longitude' name='longitude'
               placeholder='Enter Longitude'>
              
        <div class="col-md-6 mx-auto" >
            <div class="form-group form-focus">
                <input type="text" class="form-control floating"  name="title" value="" placeholder=""
                  required>
                   <label class="focus-label">Title</label>
                </div>

            {{-- <div class="invalid-feedback">
                Please provide a title.
            </div> --}}
        </div>
        <div class="col-md-6 mx-auto">
        <div class="row">

        <div class="col-md-6">
            <div class="form-group form-focus">
                <input type="number" class="form-control floating " onwheel="this.blur()"   name="share_price"  placeholder=""
                    title="" required>
                    <label class="focus-label">Share Price - USD</label>
                </div>
            {{-- <div class="invalid-feedback">
                Please provide a valid Business Type.
            </div> --}}
        </div>
        <div class="col-md-6">
            <div class="form-group form-focus">
                <input type="number" class="form-control floating" onwheel="this.blur()"    name="share_amount" placeholder=""  required>
                <label class="focus-label">Share Percentage %</label>
            </div>
            {{-- <div class="invalid-feedback">
                Please provide a valid Share Amount.
            </div> --}}
        </div>
        </div>
    </div>
    <div class="col-md-6 mx-auto" >
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating"   name="business_modal" placeholder=""  required>
                    <label class="focus-label">Business Model</label>
                </div>
                {{-- <div class="invalid-feedback">
                    Please provide a valid Share Amount.
                </div> --}}
            </div>
        
        <div class="col-md-6">
            <div class="form-group form-focus">
                <input type="number" class="form-control floating" onwheel="this.blur()"   name="sale_revenue"  placeholder="" 
                    title="" required>
                    <label class="focus-label">Sale Revenue - USD</label>
                </div>
            {{-- <div class="invalid-feedback">
                Please provide a valid Share Percentage .
            </div> --}}
        </div>
        </div>
    </div>
    <div class="col-md-6 mx-auto" >
        <div class="row">
        <div class="col-md-6">
            <div class="form-group form-focus">
        <select class="form-controlz form-control floating" name="trade_licence" required>
            <option selected disabled hidden></option>
            <option value="e-commerce">E-Commerce</option>
            <option value="freezone">Freezone</option>
            <option value="freelance">Freelance</option>
            <option value="mainland">Mainland</option>
            <option value="offshore">Offshore</option>
            <option value="online">Online</option>
            <option value="private">Private</option>
                    
            </select>
            <label class="focus-label">Trade Licence</label>
        </div>
    </div>
        <div class="col-md-6">
            <div class="form-group form-focus">
                <input type="number" class="form-control floating" onwheel="this.blur()"   name="established_year" placeholder=""  required>
                <label class="focus-label">Established Year</label>
            </div>
            {{-- <div class="invalid-feedback">
                Please provide a valid Established Year.
            </div> --}}
        </div>
        <div class="col-md-6">
            <div class="form-group form-focus">
               <input type="number" class="form-control floating" onwheel="this.blur()"   name="branches"  placeholder="" 
                   title="" required>
                   <label class="focus-label">Branches </label>
               </div>
           {{-- <div class="invalid-feedback">
               Please provide a valid Premise Size SqM.
           </div> --}}
       </div>
        <div class="col-md-6">
            <div class="form-group form-focus">
                   <input type="number" class="form-control floating" onwheel="this.blur()"  name="no_of_employees"  placeholder="" 
                       title="" required>
                       <label class="focus-label">Employees </label>
                   </div>
               {{-- <div class="invalid-feedback">
                   Please provide a valid No of Employees.
               </div> --}}
        </div>
        <div class="col-md-6">
            <div class="form-group form-focus">
            <select class="form-controlz form-control floating" name="premise_status" required>
                        <option disabled selected hidden> </option>
                        <option value="own">Owned</option>
                        <option value="rent">Rented</option>
                        <option value="not_reg">Not Registered</option>
                </select>
                <label class="focus-label">Premise Status</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group form-focus">
                <input type="number" class="form-control floating" onwheel="this.blur()"     name="size_sqm" placeholder="" 
                    title="" required>
                    <label class="focus-label">Premise Size Sq.Ft</label>
                </div>
            
        </div>
        </div>
    </div>

<div class="col-md-6 mx-auto" >
        <div class="row">
       
        <div class="col-md-6">
        <div class="form-group form-focus">
        <select class="form-controlz form-control floating" name="lease_term" required>
                    <option selected disabled hidden></option>
                    <option value="Annual">Annual</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Yearly">Yearly</option>
            </select>
            <label class="focus-label">Lease Term</label>
        </div>
    </div>
        <div class="col-md-6">
            <div class="form-group form-focus">
                <input type="number" class="form-control floating" onwheel="this.blur()"    name="lease_amount" placeholder="" 
                    title="" required>
                    <label class="focus-label">Lease Amount - USD</label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 mx-auto" >
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating"  name="selling_fin" placeholder="" 
                    {{-- pattern="\d{10}"  --}}
                    title=""   required>
                   <label class="focus-label">Share Financing
                </label>
                </div>
                  
        </div>
      
        <div class="col-md-6">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating"  name="reason_sale" placeholder="" 
                {{-- pattern="\d{10}"  --}}
                title=""   required>
               <label class="focus-label">Reason for Sale</label>
            </div>
           </div>  
        
        <div class="col-md-6">
            <div class="form-group form-focus">
            <select class="form-controlz form-control floating" name="posted_by"  required>
                <option disabled selected></option>
                    <option value="1">Agent</option>
                    <option value="0">Broker</option>
                    <option value="2">Owner</option>
                    <option value="3">Staff</option>
            </select>
            <label class="focus-label">Posted By</label>
        </div>
        </div>

      
        <div class="col-md-6">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating"  name="website" placeholder="URL" 
                {{-- pattern="\d{10}"  --}}
                title=""   required>
               <label class="focus-label">Website</label>
            </div>
               
        </div>
        <div class="col-md-6">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating"  name="reason_sale" placeholder="URL" 
                {{-- pattern="\d{10}"  --}}
                title=""   required>
               <label class="focus-label">Instagram</label>
            </div>
               
        </div>
        
        <div class="col-md-6">
                    <div class="form-group form-focus">
                        <input type="number" class="form-control floating" onwheel="this.blur()"   name="phone" placeholder="" 
                   title="Please enter a valid 10-digit Mobile number" required>
                   <label class="focus-label">Mobile</label>
                </div>
            {{-- <div class="invalid-feedback">
                Please provide a valid 10-digit Mobile number.
            </div> --}}
        </div>
        <div class="col-md-6">
            <div class="form-group form-focus">
                <input type="number" class="form-control floating"  onwheel="this.blur()"   name="whatsapp" placeholder="" 
  title="Please enter a valid 10-digit Mobile number" required>
           <label class="focus-label">WhatsApp</label>
        </div>
    {{-- <div class="invalid-feedback">
        Please provide a valid 10-digit Mobile number.
    </div> --}}
</div>
        </div>
    </div>

        <div class="col-md-6 mx-auto" >
            <div class="form-group form-focus">
            <textarea name="products_and_services_offered" class="form-control floating" style="height: 150px;"
                      required></textarea>
                      <label class="focus-label">Products & Services Offered</label>
                    </div>
            <div class="invalid-feedback">
                Please provide a Products & Services Offered.
            </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 120px;">
            <div class="form-group form-focus">
            <textarea name="description" class="form-control floating" placeholder="" style="height: 200px;"
                      required></textarea>
                      <label class="focus-label">Description</label>
                    </div>
            <div class="invalid-feedback">
                Please provide a description.
            </div>
        </div>

        


        @include('listings.image&file')
  
        <div class="col-md-6 mx-auto">
            <div class="row">
        <div class="col-md-6">
            <select class="form-controlz form-control country" name="country" style=" font-size: 0.9rem;color:#000;"  placeholder="Country" required>
            <Option selected>Country</Option>
                @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
            
        </div>
        <div class="col-md-6">
            <select class="form-controlz city form-control floating" name="city"  style=" font-size: 0.9rem;color:#000;"  required>
          
                
                <option  selected >City</option>
           
            </select>
            
        </div>
        </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating location_name" name="location_name" placeholder=""
                   required>
                   <label class="focus-label">Location</label>
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


$(document).on('click', '.place-ad-form-submit', function (e) {
            e.preventDefault();
             var formData = new FormData($('.place-ad-form')[0]);

             const currency = "{{ request()->currency }}";
 console.log(currency);
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
                        setTimeout(function () {
                            window.location.assign(base_url + "ads");
                            // window.location.assign(`${base_url}listing/plane-ad/${response.listing_id}`);
                        }, 600);
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