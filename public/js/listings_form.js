
function block_page(selector = '.container-fluid') {
    $(selector).waitMe({
        effect: 'bounce',
        text: 'Processing',
        bg: 'rgba(255,255,255,0.7)',
        color: '#000',
        maxSize: '',
        waitTime: -1,
        textPos: 'vertical',
        fontSize: '',
        source: '',
    });
}

function unblock_page(selector = '.container-fluid') {
    $(selector).waitMe('hide');
}

function getCitiesByCountry(country_id) {

    
    $.ajax({
        url: api_url + 'get-cities',
        type: 'POST',
        data: {
            country: country_id
        },
        dataType: "JSON",
        success: function (response) {
            if (response.status) {
                var options = '';
                options += `<option hidden disable selected></option>`;
                $.each(response.data, function (key, city) {
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
}

function loadMap() {

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

    $('input[name="latitude"]').val(latitude);
    $('input[name="longitude"]').val(longitude);
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
}

function submitListingForm(form) {
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
                            $('.images').siblings('.invalid-feedback.image-error').show().html(errors[fieldName][0]);
                        } else {
                            var errorElement = $(form).find('[name="' + fieldName + '"]');
                            errorElement.val('');
                            errorElement.siblings('.invalid-feedback').html(errors[fieldName]);
                        }
                    }
                }
            },
            error: function (response) {
                showAlert("error", "Server Error");
            }
        });
    }

    unblock_page();
}



    loadMap();

//starting code to mange images

$(document).on('change', '.images', function (e) {

    // hiding image error div manually
    $('.images').siblings('.invalid-feedback.image-error').hide();

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

        // uploadImage(file);
    }
});


function uploadImage(file) {
    const formData = new FormData();
    formData.append('image', file);

    $.ajax({
        url: '/upload-image', // Your backend route
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            console.log(response);
            alert(`Image "${file.name}" uploaded successfully!`);
        },
        error: function (xhr) {
            console.error(xhr.responseText);
            alert(`Failed to upload image "${file.name}".`);
        },
    });
}

function displayImages(base64Image, file_name) {
    const imageDisplay = document.getElementById('image-display-div');

// alert(imageDisplay);
    const imgHtml = `
                        <div class="col-md-3" >
                            <div class="image-gallery" style="margin-bottom:-13px;">
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
    const imageCol = $(this).parents('.col-md-3');

    // Remove the corresponding file from the input field's files array
    const imagesInput = $('.images');
    const updatedFiles = Array.from(imagesInput[0].files).filter(file => file.name !== fileName);
    const dataTransfer = new DataTransfer();
    updatedFiles.forEach(file => dataTransfer.items.add(file));
    imagesInput[0].files = dataTransfer.files;

    // Remove the image container
    imageCol.remove();
});

//starting code to mange docs

$(document).on('change', '.documents', function (e) {

    // hiding image error div manually
    $('.documents').siblings('.invalid-feedback.image-error').hide();

    const files = e.target.files;

    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const reader = new FileReader();

        reader.readAsDataURL(file);

        reader.onload = function () {
            const base64Image = reader.result;
            const file_name = file.name;
            displayDocs(base64Image, file_name);
        };
    }
});

function displayDocs(base64Image, file_name) {
    const imageDisplay = document.getElementById('document-display-div');

    const imgHtml = `
                        <div class="col-md-3" >
                            <div class="image-gallery" style="margin-bottom:-13px;">
                              <div class="image-container">
                                <img class="form-image img-thumbnail" src="${base64Image}" />
                                <i class="fa fa-close remove-document" file-name="${file_name}"></i>
                              </div>
                            </div>
                        </div>`;

    // Append the image element to the display div
    imageDisplay.innerHTML += imgHtml;
}

$(document).on('click', '.remove-document', function (e) {
    const fileName = $(this).attr("file-name");
    const imageCol = $(this).parents('.col-md-3');

    // Remove the corresponding file from the input field's files array
    const imagesInput = $('.documents');
    const updatedFiles = Array.from(imagesInput[0].files).filter(file => file.name !== fileName);
    const dataTransfer = new DataTransfer();
    updatedFiles.forEach(file => dataTransfer.items.add(file));
    imagesInput[0].files = dataTransfer.files;

    // Remove the image container
    imageCol.remove();
});

//starting form js

$(document).on('change', '.country', function () {
    block_page();

    alert($(this).val());
    getCitiesByCountry($(this).val());
    unblock_page();
});


$(document).on('click', '.place-ad-form-submit', function (e) {
    e.preventDefault();
    block_page();

    // hiding image error div manually
    $('.images').siblings('.invalid-feedback.image-error').hide();

    submitListingForm($('.place-ad-form')[0]);
});
