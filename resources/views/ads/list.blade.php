@extends('layout.master')
{{-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> --}}
@section('content')
    <style>


select{
    text-transform: none !important;
}
#clearButton {
    padding: 0 10px;
    font-size: 16px;
    color: red;
    cursor: pointer;
}
select>option:hover{
    color: blue;
    background-color: transparent !important;
    /* text-transform: none !important; */
}

#sortDropdown option {
    background: none;
    border: none;
}
    /* Apply minimal padding to the dropdown options */
 .pagination {
        margin-top: 40px;
    }
    .pagination .page-link {
        color: #007bff; /* Change the color of the page link */
    }
    .pagination .page-link:hover {
        color: #0056b3; /* Hover color */
    }
    .pagination .page-item.active .page-link {
        background-color: #007bff; /* Active page background */
        border-color: #007bff;
    }
    .paginationLink{
        margin-left: 17rem;
    }


        .btnx {
            /*background: rgb(0, 0, 255, .3);*/
            font-size: 13px;
            border-radius: 30px;
            color: #000;
            font-weight: normal;
            margin: 10px !important;
            padding: 10px 16px;
            border: 1px solid rgb(224, 225, 227);
        }
        .filter1::placeholder{

            font-size: 13px;
            color: #000;
            /* margin-top: 4px; */
        }

        .carousel-item{
            border-radius:20px; 
        }
        .dropdown-toggle::after{
            display: none;
        }
        .btnx:hover {
            background-color: rgb(0, 0, 255, .3);
        }
        .swiper-slide{
            border-radius: 10px;
        }

        .filter-options-list {
            color: black;
            /* border-bottom: 1px solid #eee; */
            padding: 2px 12px;
            margin-bottom: 0px !important;
        }

        .max_price::placeholder{
            color: #000 !important
        }
        #sortDropdown{
            width: 97% !important;
            /* font-weight: 600; */

            font-size: 15px;

        }
        .filter-options-list:hover {
            color: blue;
            background-color: transparent;
            cursor: pointer;
        }
        .btn:hover{
            border: 1px solid blue !important; 
        }

        .multi-collapse {
            font-size: 14px;
            min-width: 6px !important;
width: 44% !important;
            margin-top: 0px;
        }
        .form-control {
            margin-left: 4px;
            width: 49.5% !important;

        }
        .form{
            
    border-radius: 0.3rem;
    margin-left: -24px;
    border: 1px solid rgb(194, 196, 199);
    display: flex !important;
    width: 74rem !important;
        }
        .form:hover{
            border: 1px solid blue !important;
            border-right: 1px solid blue !important;
        }

        /* .border-color:hover{
            border-right: 1px solid blue !important;
        } */
        .active {
            background-color: rgb(0, 0, 255, .3);
            color: white;
        }

        .btn1:hover{
    border-color: blue !important;
        }
        .swiper-button-next:after, .swiper-button-prev:after{
            color: white !important;
    font-size: 23px !important;
    margin-left:7px !important;
        }
        .swiper-button-next{
left: 15rem;
        }
        select::-ms-expand {
    display: none; /* Remove the dropdown icon on IE10+ */
}
select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background: none; /* Remove default background */
    background-color: transparent;
    padding-right: 20px; /* Add some padding to keep the layout */
}


    </style>
    <!--------ad area --------->
    <section>
       
        <!-- <div class="container slider-area"> -->
        <div class="cont-w slider-area desktop-view">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('images/slider-images/image2.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:0.3rem;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/slider-images/image1.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:0.3rem;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/slider-images/image2.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:0.3rem;">
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('images/slider-images/image3.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:0.3rem;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/slider-images/image4.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:0.3rem;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----new filter----------->
    @php

$category_name=  DB::table('categories')->where('id',$category_id)->first();
        $subcategories_for_filter = \App\Helpers\RecordHelper::getSubCategories($category_id);
        $cities_for_filter = \App\Helpers\RecordHelper::getCities(request()->country);
        $selected_city_name = $cities_for_filter->count() > 0 && !empty(request()->city) ? $cities_for_filter->where('id', request()->city)->first()->name : 'All';
    @endphp
    <section class="desktop-view">
        <div class="container" style=" max-width: 80rem;">
            
                <form class="form" >
    <div class="row" style="display: flex; flex-wrap: nowrap;">
        <div class="col-md-4 border-color" style="border-right:2px solid #eee;" id="cityArea">
            <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
               aria-controls="multiCollapseExample1" style="color:#000;">
                <div class="col-md-12" style="text-align: center;margin-top: 3px;"><span style="font-size: 14px;"><b>City</b></span></div>
                <div class="col-md-12" style="margin-top: 8px;" > <select class="form-control city_dropdown_list1" name="city_dropdown" id="" 
                    style="text-align:center;background-color:transparent !important; font-size:13px; width: 109% !important;">
                    <option value="">All </option>
                @foreach($cities_for_filter as $city)
                    <option data-city-id="{{ $city->id }}"
                            {{ $city->id == request()->city ? 'selected' : '' }} value="{{ $city->id }}"
                            style="font-size:8px !important;">{{ $city->name }}</option>
                @endforeach
            </select></div>
            </a>
        </div>


        <div class="col-md-7 border-color" style="border-right: 2px solid #eee; text-align: center;">
            <label for="keyword" class="form-label" style="font-weight: bold;margin-left: 13px;font-size: 14px; margin-top: 2px;">Keyword</label>
            <div class="input-group">
                <input type="text" class="form-control filter1 keyword_search" id="keyword" style="margin-top: -2px; font-size: 14px;" placeholder="Search anything in {{ $category_name->name }}">
                <span style="margin-top:8px;font-weight: bolder; color: goldenrod;" id="searchIcon">
                    <i class="fa fa-search"></i> <!-- Bootstrap Icons -->
                </span>
                

                <ul id="subcategoryDropdown" class="dropdown-menu" style="display: none;max-height: 11.2rem !important; position: absolute; z-index: 1000; width: 100%;">
                   
                </ul>
            </div>
        </div>
    

        

       

        <div class="col-md-7 border-color" style="border-right: 2px solid #eee; text-align: center;">
            <label for="neighborhood" class="form-label" style="font-weight: bold;margin-left: 11px; font-size: 14px; margin-top: 2px;">Neighborhood</label>
            <div class="input-group">
                <input type="text" 
                       class="form-control filter1 location_name" 
                       name="location_name" 
                       style="margin-top: -2px; font-size: 14px;" 
                       id="location_name" 
                       placeholder="Enter Location">
                <span class="" id="locationIcon">
                    <i class="fa fa-map-marker" style="margin-top:8px; color:red;"></i>
                </span>
                
            </div>
            
            <div class="col-md-6 mx-auto" style="display: none">
                <div class="map" id="map"></div>
            </div>
        </div>

        

        <div class="col-md-5 border-color" style="border-right:2px solid #eee;" id="priceArea1">
            <a data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false"
               aria-controls="multiCollapseExample4" style="color:#000;">
                <div class="col-md-12" style="text-align: center;margin-top:2px;"><span style="font-size: 14px;"><b>Price</b></span></div>
             
                
            </a>
            
                <span style="display: flex;">
                <input type="text" class="form-control filter1" style="border-right: 2px solid #eee;padding: 1px !important; font-size: 14px;" name="min_price" id="min_price" oninput="validatePhoneNumber(this)" placeholder="Min" min="0">
                
    
                <input type="text" class="form-control max_price" style="padding: 0px 0px 0px 5px !important; font-size: 14px;width: 49.5% !important; " name="max_price" id="max_price" oninput="validatePhoneNumber(this)" placeholder="Max" min="0">
            </span>
                
        </div>

        <div class="col-md-5 border-color" id="filtersAreaw1">
            <div class="col-md-12" style="text-align: center; margin-top: 2px;">
                <span style="font-size: 15px;"><b>Sort</b></span>
            </div>
            <select class="form-select form-control "style="font-size: 13px;"  id="sortDropdown" onchange="window.location.href=this.value" >
                
                {{-- <option class="option"  selected value=""></option> --}}
               
                <option class="option" selected value="?sort=newest" {{ request()->sort == 'newest' ? 'selected' : '' }}>Date: New - Old</option>
                <option class="option" value="?sort=oldest" {{ request()->sort == 'oldest' ? 'selected' : '' }}>Date: Old - New</option>
                <option class="option" value="?sort=price_high" {{ request()->sort == 'price_high' ? 'selected' : '' }}>Price: Low - High</option>
                <option  class="option" value="?sort=price_low" {{ request()->sort == 'price_low' ? 'selected' : '' }}> Price: High - Low </option>
                <option  class="option" value="?sort=nearest" {{ request()->sort == 'nearest' ? 'selected' : '' }}>Location: Near - Far</option>
            </select>
        </div>
    </div>
    <button class="btn"  style="white-space: nowrap;margin-left:46.2rem;  color: blue; border: 1px solid goldenrod ;border-radius: 5px;" type="button"  aria-expanded="false">
        Search
    </button>
   
</form>

          
        </div>
    </section>
    <!---new filter ennded----->

    
    <section>
        <div class="container">
            <div class="col-lg-12 col-md-12 col-12" style="margin-left: 4rem;">
                <div class="row" style="margin-left: -137px;">
                    <div class="col-lg-8 col-md-8" style="display: flex;">
                        <h6 style="white-space: nowrap;font-size: 14px;"><b> {!! $category_name->name !!} </b> > <b> {{ $subcategory_name }} </b><span style="color: blue;font-size:14px;">   - {{ $ads->count() }} Ads</span>
                        </h6>
                       
                    
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <button class="btn"  style="border: 1px solid goldenrod ;float: right; white-space: nowrap; height: 36px; border-radius: 0.3rem; color: red;" type="button"  aria-expanded="false">
                            Clear Search
                        </button>
                    </div>
                  
            </div>
        </div>
        </div>
    </section>
   
    <section>
        <div class="container">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="row" style="margin-left: -71px;">
                    <div class="col-lg-12 col-md-12 col-12">
                        @foreach($ads as $ad)
                        <div class="row">
                            <!-----content----->
                            <div class="col-lg-4 col-md-4 col-12" style="margin-top:-11px;">
                                <div style="position:absolute;border:0px solid red;width:100%;">
                                    <div class="row">
                                        <!-- Sharing and Favourite buttons -->
                                        <div style="margin-top: 12px; margin-left: 232px;  z-index: 2;">
                                            <span>
                                                <a><i class="fa favourite-btn {{ $ad->is_favourite ? 'fa-heart' : 'fa-heart-o' }}" is-favourite="{{ $ad->is_favourite ? '1' : '0' }}" ad-id="{{ $ad->id }}" style="font-size: 20px;margin-right: 7px; margin-left: 6px; color: white;"></i></a>
                                                
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:155px; z-index: 2;">
                                        {{-- <i class="fa fa-image" style="color:white;font-size: 13px;"></i> --}}
                                        <span class="text-white" style="font-size: 13px;"> 1 / 40</span>
                                    </div>
                                </div>
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $ad->id }}">
                                    <div class="swiper-container" style="height:180px;width:16pc;">
                                        <div class="swiper-wrapper">
                                            <!-- Static image for now -->
                                            <div class="swiper-slide" style="background-image:url({{ $ad->main_image_url }});height: 100%;width: 100%;"></div>
                                        </div>
                                        <!-- Add Pagination if needed -->
                                        <div class="swiper-pagination"></div>
                                        <!-- Add Navigation buttons if needed -->
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <div class="row" style="margin-top: -12px;">
                                    <div class="col-lg-7 col-md-7 col-7" style="margin-left: -118px">
                                    <h5 style="font-size: 18px;font-weight:700;margin: 0px 0px 5px 0px;">{{ $ad->title ?? 'Heading N/A' }}</h5>
                                    <p style="font-size: 13px;margin-bottom: 6px;">{{ $ad->category_name }} <span style="font-size: 14px;"> > </span> {{ $ad->subcategory_name }}</p>
                                    <h3 style="font-weight: bold;font-size:18px;">{{ \App\Helpers\SiteHelper::priceFormatter($ad->price, session('app_currency', 'default_currency')) }}</h3>
                                    
                                        <p style="margin-top:5.5rem;font-size: 13px; white-space: nowrap;"><i class="fa fa-map-marker" style="color: red;"></i> {{ $ad->location_name }} <span style="font-size: 16px;">&#9679;</span> <span  style="margin-top: 12px;">24 May 2024</span></p>
                                    
                                    </div>
                                    
                                    <div class="col-lg-2 col-md-2 mb-30 col-3">
                                       
                                        
                                        <button class="btn btn-primary" style="font-size:11px;color:white; font-weight:bold;padding: 2px 6px 1px 6px !important; margin-left:2px;">Featured</button>
                                    </div>
                                </div>
                            </div>
                            <!-----content----->
                            <hr style="width: 68%;margin-top:-14px;margin-left: 12px;background:#eee;">
                        </div>
                    @endforeach
                    {{-- <div class="pagination mt-4">
                        {{ $ads->links() }}
                    </div> --}}
                    </div>
                    <div class="d-flex justify-content-center paginationLink" >
                        {{ $ads->links('pagination::bootstrap-4') }}
                    </div>
                    <!-- Pagination links -->
{{-- <div class="pagination">
    {{ $ads->links() }}
</div> --}}
                    <!--  add area -->
                    {{-- <div class="col-lg-4 col-md-8 mb-30 col-12">
                        <img src="{{asset('images/hero_image_7.jpeg')}}" alt="Los Angeles" width="100%" height="200"
                             style="margin-bottom: 10px;">
                    </div> --}}
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
<!-- jQuery first -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<!-- then Popper.js -->
{{-- <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places"></script> --}}
<script type="text/javascript"> map_key = "{{env('GOOGLE_MAP_KEY')}}"; </script>

@section('page_scripts')
    <script type="text/javascript">
 


        var city = $('.city-list').attr('city-id');
        var subcategory = $('.subcategory-list').attr('subcategory-id');
        var from_price = $('#from').val();
        var to_price = $('#to').val();
        var keyword = $('.keyword-input').val();

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
loadMap();

        $(document).ready(function () {
            $("#cityArea a").click(function () {
                $("#multiCollapseExample1").toggle();
                $("#multiCollapseExample2").hide();
                $("#multiCollapseExample4").hide();
                $("#multiCollapseExample5").hide();
            });


            $("#catArea a").click(function () {
                $("#multiCollapseExample1").hide();
                $("#multiCollapseExample2").toggle();
                $("#multiCollapseExample4").hide();
                $("#multiCollapseExample5").hide();
            });


            $("#priceArea a").click(function () {
                $("#multiCollapseExample1").hide();
                $("#multiCollapseExample2").hide();
                $("#multiCollapseExample4").toggle();
                $("#multiCollapseExample5").hide();
            });


            $("#filtersArea a").click(function () {
                $("#multiCollapseExample1").hide();
                $("#multiCollapseExample2").hide();
                $("#multiCollapseExample4").hide();
                $("#multiCollapseExample5").toggle();
            });
        });

        $(document).on('click', '.cancel-btn', function () {
            $(this).parents('.multiCollapse').hide();
        });

        $(document).on('click', '.apply-price-filter-btn', function () {
            var parent = $(this).parents('.multiCollapse');
            from_price = parent.find('#from').val();
            to_price = parent.find('#to').val();
            window.location.assign(base_url + "ads/" + {{$subcategory_id}} +"?country=" + {{ request()->country }} + "&from=" + from_price + "&to=" + to_price + "&keyword=" + keyword + "&city=" + city);
        });

        $(document).on('click', '.apply-keyword-filter-btn', function () {
            var parent = $(this).parents('.multiCollapse');
            keyword = parent.find('.keyword-input').val();
            window.location.assign(base_url + "ads/" + {{$subcategory_id}} +"?country=" + {{ request()->country }} + "&from=" + from_price + "&to=" + to_price + "&keyword=" + keyword + "&city=" + city);
        });

        $(document).on('click', '.city-list', function () {
            city = $(this).attr('city-id');
            window.location.assign(base_url + "ads/" + {{$subcategory_id}} +"?country=" + {{ request()->country }} + "&from=" + from_price + "&to=" + to_price + "&keyword=" + keyword + "&city=" + city);
        });

        $(document).on('click', '.subcategory-list', function () {
            subcategory = $(this).attr('subcategory-id');
            window.location.assign(base_url + "ads/" + subcategory +"?country=" + {{ request()->country }} + "&from=" + from_price + "&to=" + to_price + "&keyword=" + keyword + "&city=" + city);
        });




$(document).ready(function () {
    const dropdown = $('#subcategoryDropdown');
    const keywordInput = $('.keyword_search');

    // Show dropdown when input gains focus or starts typing
    keywordInput.on('focus input', function () {
        const keyword = $(this).val();

        
        const category_id = '{{ $category_id }}';

    
        if (keyword.length > 0) {
            $.ajax({
                url: 'lisiting_get_subcategories',
                type: 'GET',
                data: { category_id: category_id, keyword: keyword },
                success: function (data) {
                    dropdown.empty(); // Clear existing items
                    if (data.length > 0) {
                        data.forEach(function (subcategory) {
                            const item = $('<li>')
                                .addClass('dropdown-item')
                                .text(subcategory.name)
                                .on('click', function () {
                                    keywordInput.val(subcategory.name);
                                    dropdown.hide();
                                });
                            dropdown.append(item);
                        });
                        dropdown.show();
                    } else {
                        dropdown.hide();
                    }
                },
            });
        } else {
            dropdown.hide();
        }
    });

    // Hide the dropdown when clicking outside of it
    $(document).on('click', function (e) {
        if (!$(e.target).closest('#keyword, #subcategoryDropdown').length) {
            dropdown.hide();
        }
    });
});


    </script>
@endsection
<!-- multiCollapseExample1 -->
