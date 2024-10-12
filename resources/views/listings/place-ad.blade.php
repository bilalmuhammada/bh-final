@extends('listing-layout.master')
@section('content')
    <style type="text/css">
        .input--file {
            cursor: pointer;
            position: relative;
            border: 1px solid #ced4da;
            padding: 10px;
            border-radius: 3px;
            text-align: center;
            content: "Add Pictures";
        }

        .input--file input[type="file"] {
            cursor: pointer;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }

        .img-thumbnail{
            padding: 0px !important;
            background-color: transparent !important;
            border: 0px solid transparent !important;

        }
      
        .map {
            height: 10rem;
    width: 33rem;
    margin-left: 8rem;
    margin-top: 10px;
        }

        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Adjust this value to control the spacing between images */
        }

        .image-container {
            position: relative;
            flex: 0 0 200px; /* Set a fixed width for consistent image size */
            height: 200px; /* Set a fixed height for consistent image size */
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-image {
            width: 80%;
            height: 80%;
            object-fit: contain; /* Display the full image without cropping */
        }

        .remove-img {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: rgba(255, 255, 255, 0.8); /* Adjust opacity here */
            border-radius: 50%;
            padding: 4px;
            cursor: pointer;
            color: #e74c3c;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-size: 18px;
        }

        .remove-img:hover {
            color: blue !important;
        }
     
    </style>
    <div class="col-md-4 mx-auto">
        <h3 class="mx-auto text-center">You’re almost there!</h3>
        <p class="mx-auto text-center">Include as much details and pictures as possible, and set the right price!</p>
        <p>
            <span class="text-muted">{{ $listing->category_name }}</span> ><span
                class="text-muted">{{ $listing->subcategory_name }}</span>
        </p>
    </div>
    <form class="place-ad-form" enctype="multipart/form-data">
        <input name="listing_id" type="hidden" value="{{$listing->id}}">
        <input type='hidden' class='form-controlz latitude' id='latitude' name='latitude' placeholder='Enter Latitude'>
        <input type='hidden' class='form-controlz longitude' id='longitude' name='longitude'
               placeholder='Enter Longitude'>
        <div class="col-md-4 mx-auto" style="margin-top: 20px;">
            <input type="text" class="form-controlz" name="title" value="{{ $listing->title }}" placeholder="Title"
                   style="padding:22px;" required>
            <div class="invalid-feedback">
                Please provide a title.
            </div>
        </div>
        <div class="col-md-4 mx-auto" style="margin-top: 20px;">
            <input type="tel" class="form-controlz" name="phone" placeholder="Mobile" style="padding:22px;"
                   pattern="[0-9]{10}" title="Please enter a valid 10-digit Mobile" required>
            <div class="invalid-feedback">
                Please provide a valid 10-digit Mobile number.
            </div>
        </div>
        <div class="col-md-4 mx-auto" style="margin-top: 20px;">
            <input type="text" class="form-controlz" name="price" placeholder="Price" style="padding:22px;" required>
            <div class="invalid-feedback">
                Please provide a valid price.
            </div>
        </div>
        <div class="col-md-4 mx-auto" style="margin-top: 20px;">
            <textarea name="description" class="form-controlz" placeholder="Describe your item" style="height: 200px;"
                      required></textarea>
            <div class="invalid-feedback">
                Please provide a description.
            </div>
        </div>
        <div class="col-md-4 mx-auto" style="margin-top: 20px;">
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
        <div class="col-md-4 mx-auto" style="margin-top: 20px;">
            <select class="form-control country" name="country" placeholder="Select Country" required>
                <option selected disabled>Country</option>
                @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->nice_name }}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                Please select a country.
            </div>
        </div>
        <div class="col-md-4 mx-auto" style="margin-top: 20px;">
            <select class="form-control city" name="city" placeholder="City" required>
                <option selected disabled>Select a country to see relevent cities</option>
            </select>
            <div class="invalid-feedback">
                Please select a city.
            </div>
        </div>
        <div class="col-md-4 mx-auto" style="margin-top: 20px;">
            <input type="text" class="form-control location_name" name="location_name" placeholder="Location Type"
                   style="padding:22px;" required>
            <div class="invalid-feedback">
                Please provide a location.
            </div>
        </div>
        <div class="col-md-4 mx-auto" style="margin-top: 20px;">
            <div class="map" id="map"></div>
        </div>
        <div class="col-md-6 mx-auto text-center btn-nexts" style="margin-top: 20px;">
        <a class="btn place-ad-form-submit">Next</a>
        </div>
    </form>

@endsection
@section('page_scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            map_key = "{{env('GOOGLE_MAP_KEY')}}";
            // MAP START HERE
            // initMap($('.map')[0], $('.location_name')[0]);

            // $('.country').select2();
        });

        $(document).on('change', '.country', function () {
            $.ajax({
                url: api_url + 'get-cities',
                type: 'POST',
                data: {
                    country: $(this).val()
                },
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        var options = '';

                        $.each(response.data , function (key, city) {
                            options += `<option value="${city.id}">${city.name}</option>`;
                        });

                        $('.city').html(options);
                    } else {
                        console.log('error');
                    }
                },
                error: function (response) {
                    showAlert("error", "Server Error");
                }
            });
        });

        var latitude = 25.197525;
        var longitude = 55.274288;
        var searchInput = $('.location_name')[0];

        var myLatlng = new google.maps.LatLng(latitude, longitude);
        var myOptions = {
            zoom: 10,
            center: myLatlng
        }

        var map = new google.maps.Map(document.getElementById("map"), myOptions);
        var geocoder = new google.maps.Geocoder();
        const searchBox = new google.maps.places.SearchBox(searchInput);

        map.addListener('bounds_changed', () => {
            searchBox.setBounds(map.getBounds());
            // console.log(map.getBounds());
        });

        searchBox.addListener('places_changed', () => {
            const places = searchBox.getPlaces();
            if (places.length == 0) {
                return;
            }

            var place_id = places[0].place_id;

            logPlaceDetails(place_id, map, searchInput)

            const bounds = new google.maps.LatLngBounds();
            places.forEach((place) => {
                if (!place.geometry || !place.geometry.location) {
                    console.log('Returned place contains no geometry');
                    return;
                }


                if (place.geometry.viewport) {
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });

            map.fitBounds(bounds);
        });

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            draggable: true,
            title: "Drag me!"
        });

        marker.addListener('dragend', function (event) {
            $('input[name="latitude"]').val(event.latLng.lat());
            $('input[name="longitude"]').val(event.latLng.lng());
            console.log(event.latLng.lat() + ' ' + event.latLng.lng());
            geocoder.geocode({
                'latLng': event.latLng
            }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        $('.location_name').val(results[0].formatted_address);
                        console.log(results[0].formatted_address);
                    }
                }
            });
        });


        // Inside the event listener for map click
        google.maps.event.addListener(map, 'click', function (event) {
            geocoder.geocode({
                'location': event.latLng
            }, function (results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        const locationName = results[0].formatted_address;
                        const latitude = event.latLng.lat();
                        const longitude = event.latLng.lng();

                        // Update the marker position
                        marker.setPosition(event.latLng);

                        // Update the input fields
                        $('input[name="latitude"]').val(latitude);
                        $('input[name="longitude"]').val(longitude);

                        // Update the location name input
                        $('.location_name').val(locationName);

                        // Log the information
                        console.log(locationName);
                        console.log(latitude + ' ' + longitude);
                    }
                } else {
                    console.error('Geocode was not successful for the following reason: ' + status);
                }
            });
        });


        $(document).on('click', '.place-ad-form-submit', function (e) {
            e.preventDefault();

            var form = $('.place-ad-form')[0];
            if (form.checkValidity() === false) {
                // If the form is invalid, add the 'was-validated' class to show the validation messages
                form.classList.add('was-validated');
            } else {
                // If the form is valid, remove the 'was-validated' class and proceed with form submission
                form.classList.remove('was-validated');

                var formData = new FormData(form);
                $.ajax({
                    url: api_url + 'listing/save-ad',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "JSON",
                    success: function (response) {
                        if (response.status) {

                            // Handle successful submission here
                            setTimeout(function () {
                                window.location.assign(base_url + "listing/terms-and-conditions/" + response.listing_id);
                            }, 600);
                        } else {
                            // Handle validation errors
                            var errors = response.errors;
                            var form = $('.place-ad-form')[0];

                            // Clear previous validation messages
                            $(form).find('.invalid-feedback').html('');

                            // Add the 'was-validated' class to show validation messages
                            form.classList.add('was-validated');

                            // Display validation messages for each field
                            for (var fieldName in errors) {
                                if (fieldName == 'images') {
                                    $('.image-error').html(errors[fieldName]);
                                }
                                var errorElement = $(form).find('[name="' + fieldName + '"]');
                                errorElement.siblings('.invalid-feedback').html(errors[fieldName]);
                            }
                        }
                    },
                    error: function (response) {
                        showAlert("error", "Server Error");
                    }
                });
            }
        });

        $(document).on('change', '.images', function (e) {
            const files = e.target.files;

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();

                reader.readAsDataURL(file);

                reader.onload = function () {
                    const base64Image = reader.result;
                    const file_name = file.name;
                    displayImages(base64Image, file_name);
                };
            }
        });

        function displayImages(base64Image, file_name) {
            const imageDisplay = document.getElementById('image-display-div');

            const imgHtml = `
                        <div class="col-md-6">
                            <div class="image-gallery">
                              <div class="image-container">
                                <img class="form-image img-thumbnail" src="${base64Image}" />
                                <i class="fa fa-close remove-img" file-name="${file_name}"></i>
                              </div>
                            </div>
                        </div>`;

            // Append the image element to the display div
            imageDisplay.innerHTML += imgHtml;
        }

        $(document).on('click', '.remove-img', function (e) {
            const fileName = $(this).attr("file-name");
            const imageCol = $(this).parents('.col-md-6');

            // Remove the corresponding file from the input field's files array
            const imagesInput = $('.images');
            const updatedFiles = Array.from(imagesInput[0].files).filter(file => file.name !== fileName);
            const dataTransfer = new DataTransfer();
            updatedFiles.forEach(file => dataTransfer.items.add(file));
            imagesInput[0].files = dataTransfer.files;

            // Remove the image container
            imageCol.remove();
        });

    </script>
@endsection
