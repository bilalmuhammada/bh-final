@extends('listing-layout.master')
@section('content')
    <div class="col-md-6 mx-auto">
        <h3 class="mx-auto text-center">You’re almost there!</h3>
        <p class="mx-auto">Include as much details and pictures as possible, and set the right price!</p>
        <p>
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
            <input type="text" class="form-control" name="title" value="{{ $listing->title }}" placeholder="Title"
                   style="padding:22px;" required>
            <div class="invalid-feedback">
                Please provide a title.
            </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
        <div class="row">
        <div class="col-md-6">
            <input type="tel" class="form-control" name="phone" placeholder="Phone" style="padding:22px;"
                   pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number" required>
            <div class="invalid-feedback">
                Please provide a valid 10-digit phone number.
            </div>
        </div>
        <div class="col-md-6">
            <input type="number" class="form-control" name="investment_amount" placeholder="Investment Amount" style="padding:22px;" required>
            <div class="invalid-feedback">
                Please provide a valid price.
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-6 mx-auto" style="margin-top: 20px;">
        <div class="row">
        <div class="col-md-6">
        <select class="form-control" name="estimated_sales_in_numbers" required>
                <option selected disabled>Estimated Sales in Numbers</option>
                    <option value="10,000-20,000">10,000-20,000</option>
                    <option value="20,000-30,000">20,000-30,000</option>
                    <option value="30,000-40,000">30,000-40,000</option>
            </select>
        </div>
        <div class="col-md-6">
        <select class="form-control" name="estimated_sales_in_letters" required>
                    <option selected disabled>Estimated Sales in Letters</option>
                    <option value="Daily">Daily</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Yearly">Yearly</option>
            </select>
        </div>
        </div>
    </div>
    <div class="col-md-6 mx-auto" style="margin-top: 20px;">
          <select class="form-control" name="trade_licence_type" required>
                <option selected disabled>Trade Licence Type</option>
                    <option value="Mainland">Mainland</option>
                    <option value="Freezone">Freezone</option>
                    <option value="Offshore">Offshore</option>
                    <option value="E-Commerce">E-Commerce</option>
                    <option value="Private">Private</option>
                    <option value="NA">NA</option>
            </select>
        </div>
    <div class="col-md-6 mx-auto" style="margin-top: 20px;">
        <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control" name="business_ype" placeholder="Business Type" style="padding:22px;"
                    title="" required>
            <div class="invalid-feedback">
                Please provide a valid Business Type.
            </div>
        </div>
        <div class="col-md-6">

            <select class="form-control" name="open_for_partnership"  required>
                <option selected disabled>Open for Partnership</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
            </select>
        </div>
        </div>
    </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <textarea name="products_and_services_offered" class="form-control" maxlength="100" placeholder="Products & Services Offered" style="height: 80px;"
                      required></textarea>
            <div class="invalid-feedback">
                Please provide a Products & Services Offered.
            </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <textarea name="description" class="form-control" placeholder="Description" style="height: 200px;"
                      required></textarea>
            <div class="invalid-feedback">
                Please provide a description.
            </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="input--file">
                <i class="fa fa-camera fa-1x"></i>
                <input type="file" multiple class="form-control form-control-file images" name="images[]"
                       placeholder="Upload Images">
                <div class="invalid-feedback image-error">
                    Please upload at least one image.
                </div>
                <span><b>Add Pictures</b></span>
            </div>
        </div>
        <div class="col-md-4 mx-auto" style="margin-top: 20px;">
            <div id="image-display-div" class="row"></div>
        </div>
        <div class="col-md-6 mx-auto">
            <div class="row">
        <div class="col-md-6">
            <select class="form-control country" name="country" required>
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
            <select class="form-control city" name="city" required>
                <option selected disabled>Select cities</option>
            </select>
            <div class="invalid-feedback">
                Please select a city.
            </div>
        </div>
        </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <input type="text" class="form-control location_name" name="location_name" placeholder="Location Type"
                   style="padding:22px;" required>
            <div class="invalid-feedback">
                Please provide a location.
            </div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <div class="map" id="map"></div>
        </div>
        <div class="col-md-6 mx-auto" style="margin-top: 20px;">
            <a class="btn form-control place-ad-form-submit" style="background: #0000FF;color:#fff;">Next</a>
        </div>
    </form>

@endsection
@section('page_scripts')
    <script type="text/javascript"> map_key = "{{env('GOOGLE_MAP_KEY')}}"; </script>
    <script type="text/javascript" src="{{ asset('js/listings_form.js') }}"></script>
@endsection
