// const { size } = require("lodash");

function configMap(lat, lng, map, location_name = 'lo') {
    var marker = new google.maps.Marker({
        label: {
            text: location_name,
            color: 'black',
            fontWeight: 'bolder',
            fontSize: '12px',
             labelOrigin: new google.maps.Point(0, 100)
        },
        icon: {
            url: "https://www.google.com/imgres?imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fa%2Faa%2FGoogle_Maps_icon_%25282020%2529.svg&tbnid=FNWvGE5ZWv-uaM&vet=12ahUKEwimtLzwzriAAxXrmicCHTtgCR0QMygOegUIARCDAg..i&imgrefurl=https%3A%2F%2Fcommons.wikimedia.org%2Fwiki%2FFile%3AGoogle_Maps_icon_(2020).svg&docid=kjsQ_6FbPdcfSM&w=558&h=800&q=svg%20image%20of%20maps&ved=2ahUKEwimtLzwzriAAxXrmicCHTtgCR0QMygOegUIARCDAg",
            scaledSize: new google.maps.Size(25, 25) // Adjust the size as needed
        
        },
        map: map,

        // draggable: true, // Set this to true if you want to allow dragging the marker
    });
    marker.setPosition({lat: Number(lat), lng: Number(lng)});
}

function initMap(mapElement, searchInput, get_lat = 31.411930, get_lng = 73.108050) {
    const map = new google.maps.Map(mapElement, {
        center: {lat: Number(get_lat), lng: Number(get_lng)},
        zoom: 11,
    });
    const searchBox = new google.maps.places.SearchBox(searchInput);
    map.addListener('bounds_changed', () => {
        searchBox.setBounds(map.getBounds());
        // console.log(map.getBounds());
    });
    // marker to get position
    var marker = new google.maps.Marker({
        map: map,
        draggable: true, // Set this to true if you want to allow dragging the marker
    });
    // set lag long value
    marker.setPosition({lat: Number(get_lat), lng: Number(get_lng)});
    configMap(Number(get_lat), Number(get_lng), map);

    google.maps.event.addListener(marker, 'dragend', function (event) {
        var lat = event.latLng.lat();
        var lng = event.latLng.lng();
        configMap(lat, lng, map);
        $('input[name="latitude"]').val(lat);
        $('input[name="longitude"]').val(lng);
        console.log("Latitude: " + lat + ", Longitude: " + lng);
    });

    google.maps.event.addListener(map, 'click', function (event) {
        var lat = event.latLng.lat();
        var lng = event.latLng.lng();
        marker.setPosition(event.latLng);

        $('input[name="latitude"]').val(lat);
        $('input[name="longitude"]').val(lng);

        console.log("Latitude: " + lat + ", Longitude: " + lng);
    });

    // console.log(searchBox);
    const markers = [];
    searchBox.addListener('places_changed', () => {
        const places = searchBox.getPlaces();
        if (places.length == 0) {
            return;
        }

        var place_id = places[0].place_id;

        logPlaceDetails(place_id, map, searchInput)

        markers.forEach((marker) => {
            marker.setMap(null);
        });
        markers.length = 0;

        const bounds = new google.maps.LatLngBounds();
        places.forEach((place) => {
            if (!place.geometry || !place.geometry.location) {
                console.log('Returned place contains no geometry');
                return;
            }

            const marker = new google.maps.Marker({
                map,
                title: place.name,
                position: place.geometry.location,
            });
            markers.push(marker);

            if (place.geometry.viewport) {
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });

        map.fitBounds(bounds);
    });
}

function logPlaceDetails(place_id, mapElement, searchInput) {
    var service = new google.maps.places.PlacesService(mapElement);

    service.getDetails({
        placeId: place_id
    }, function (place, status) {
        if (status !== google.maps.places.PlacesServiceStatus.OK) {
            console.error("Failed to retrieve place details:", status);
            return;
        }

        const lat = place.geometry.location.lat();
        const lng = place.geometry.location.lng();
        const location = new google.maps.LatLng(lat, lng);

        // Create or reuse the marker
        var marker = new google.maps.Marker({
            position: location,
            map: mapElement,
            draggable: true,
            title: "Drag me!", // Tooltip
            icon: {
                url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png", // Custom icon
                scaledSize: new google.maps.Size(32, 32),
            },
        });

        // Center the map and zoom in on the marker
        marker.setPosition(location);
        mapElement.setCenter(location);
        mapElement.setZoom(14);

        // Update input fields
        $('input[name="latitude"]').val(lat);
        $('input[name="longitude"]').val(lng);
        $(searchInput).parents('tr').find('.location_detail').val(place.formatted_address);

        // Extract and update postal code
        $(place.address_components).each(function (i, p) {
            if (p.types.includes('postal_code')) {
                $(searchInput).parents('tr').find('.postcode').val(p.long_name);
            }
        });

        // Log position to console
        console.log("Latitude:", lat);
        console.log("Longitude:", lng);
    });
}



function initMapUsingLatLong(get_lat, get_lng, mapElement1) {

    const myLatlng = {lat: Number(get_lat), lng: Number(get_lng)};
    const map = new google.maps.Map(mapElement1, {
        zoom: 15,
        center: myLatlng,
    });


    new google.maps.Marker({
        position: myLatlng,
        map,
        title: "Hello World!",
    });


    //Create the initial InfoWindow.
    //   let infoWindow = new google.maps.InfoWindow({
    //     content: "Click the map to get Lat/Lng!",
    //     position: myLatlng,
    //   });

    //   infoWindow.open(map);
    //   // Configure the click listener.
    //   map.addListener("click", (mapsMouseEvent) => {
    //     // Close the current InfoWindow.
    //     infoWindow.close();
    //     // Create a new InfoWindow.
    //     infoWindow = new google.maps.InfoWindow({
    //       position: mapsMouseEvent.latLng,
    //     });
    //     infoWindow.setContent(
    //       JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
    //     );
    //     infoWindow.open(map);
    //   });
}


// function initMapGetPlace(place_id) {
//     console.log(place_id)
//     $.ajax({
//         url: `https://maps.googleapis.com/maps/api/place/details/json?placeid=${place_id}&key=${google_map_key}`,
//         type: "GET",
//         success: function (data) {
//             if (data.status == 'OK') {
//                 var result = data.result;
//                 console.log("Place Name: " + result['name']);
//                 console.log("Address: " + result['formatted_address']);
//                 console.log("Phone Number: " + result['formatted_phone_number']);
//                 console.log("Website: " + result['website']);
//                 // add more details as per your requirements
//             } else {
//                 console.log("Place not found");
//             }
//         }
//     });
// }
