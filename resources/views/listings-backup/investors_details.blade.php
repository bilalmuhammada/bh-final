@extends('listing-layout.master')
@section('content')
    <div class="col-md-6 mx-auto">
        <h3 class="mx-auto text-center">You are almost there!</h3>
        <p class="mx-auto text-center">Provide as much Details & Photos as possible and set right Price!</p>
        <p style="margin-bottom: 0px;">
            <span class="text-muted">{{ $listing->category_name }}</span> ><span
                class="text-muted">{{ $listing->subcategory_name }}</span>
        </p>
    </div>
    <form class="place-ad-form" enctype="multipart/form-data">
        <input name="listing_id" type="hidden" value="{{$listing->id}}">
        <input type='hidden' class='form-control latitude' id='latitude' name='latitude' placeholder='Enter Latitude'>
        <input type='hidden' class='form-control longitude' id='longitude' name='longitude'
               placeholder='Enter Longitude'>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <input type="text" class="form-controlz" name="title" value="{{ $listing->title }}" placeholder="Title"
                   style="padding:22px;" required>
            <div class="invalid-feedback">
                Please provide a title.
            </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="row">

                {{-- <div class="col-md-6">
                    <input type="text" class="form-controlz" name="investment_amount" placeholder="Investment Amount"
                           style="padding:22px;" required>
                    <div class="invalid-feedback">
                        Please provide a valid Investment Amount.
                    </div>
                </div> --}}
                <div class="col-md-12">
                    <select class="form-controlz" name="open_to_invest" required>
                        <option selected disabled>Open to Invest</option>
                        <option value="Inside Country">Inside Country</option>
                        <option value="Within Region">Within Region</option>
                        <option value="Worldwide">Worldwide</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="row">

                <div class="col-md-12">
                    <select class="form-controlz" name="open_for_partnership" required>
                        <option selected disabled>Open for partnership</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                {{-- <div class="col-md-6">
                    <input type="tel" class="form-controlz" name="phone" placeholder="Mobile" style="padding:22px;"
                           pattern="[0-9]{10}" title="Please enter a valid 10-digit Mobile number" required>
                    <div class="invalid-feedback">
                        Mobile number will show only request only !
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <textarea name="interested_business_types" class="form-controlz" maxlength="1000"
                      placeholder="Interested Business Types" style="height: 120px;"
                      required></textarea>
            <div class="invalid-feedback">
                Please provide a Interested Business Types.
            </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <textarea name="description" class="form-controlz" placeholder="Description" style="height: 200px;"
                      required></textarea>
            <div class="invalid-feedback">
                Please provide a description.
            </div>
        </div>

        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="input--file">
                <i class="fa fa-camera fa-1x"></i>
                <input type="file" multiple class="form-controlz form-control-file images" name="images[]"
                       placeholder="Upload Images">
                <div class="invalid-feedback image-error">
                    Please upload at least one image.
                </div>
                <span><b>Add Photos</b></span>
            </div>
        </div>
        <div class="col-md-4 mx-auto" style="margin-top: 20px;">
            <div id="image-display-div" class="row "></div>
        </div>

        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="input--file">
                <i class="fa fa-camera fa-1x"></i>
                <input type="file" multiple class="form-controlz form-control-file documents" name="documents[]"
                       placeholder="Upload Documents">
                <div class="invalid-feedback image-error">
                    Invalid
                </div>
                <span><b>Add File</b></span>
            </div>
        </div>
        <div class="col-md-4 mx-auto" style="margin-top: 20px;margin-bottom: 10px;">
            <div id="document-display-div" class="row "></div>
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
                        <option selected disabled>Select city</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a city.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <input type="text" class="form-controlz location_name" name="location_name" placeholder="Location Type"
                   style="padding:22px;" required>
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
@endsection
