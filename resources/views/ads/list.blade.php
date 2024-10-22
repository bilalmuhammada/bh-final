@extends('layout.master')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@section('content')
    <style>


select{
    text-transform: none !important;
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
            width: 117% !important;
            /* font-weight: 600; */

            font-size: 13px;

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
            
    border-radius: 10px;
    margin-left: -24px;
    border: 1px solid rgb(194, 196, 199);
    display: flex !important;
    width: 75rem !important;
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
    margin-right: 18pc !important;
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
                        <img src="{{asset('images/slider-images/image2.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:10px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/slider-images/image1.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:10px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/slider-images/image2.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:10px;">
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('images/slider-images/image3.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:10px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/slider-images/image4.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:10px;">
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
            {{-- <div class="col-lg-12 col-xl-12 col-12 col-md-12"> --}}
                <form class="form" >
    <div class="row" style="display: flex; flex-wrap: nowrap;">
        <div class="col-md-4 border-color" style="border-right:2px solid #eee;" id="cityArea">
            <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
               aria-controls="multiCollapseExample1" style="color:#000;">
                <div class="col-md-12" style="text-align: center;"><span style="font-size: 14px;"><b>City</b></span></div>
                <div class="col-md-12" style="margin-top: 12px;" ><span style="font-size: 13px;color:#000;margin-left: 12px;">{{ $selected_city_name }}</span></div>
            </a>
        </div>


        <div class="col-md-7 border-color" style="border-right: 2px solid #eee; text-align: center;">
            <label for="keyword" class="form-label" style="font-weight: bold;margin-left: 13px;">Keyword</label>
            <div class="input-group">
                <input type="text" class="form-control filter1" id="keyword" style="margin-top: -10px; font-size: 16px;" placeholder="Search anything in {{ $category_name->name }}">
                <span style="margin-top: -3px;font-weight: bolder; color: goldenrod;" id="searchIcon">
                    <i class="fa fa-search"></i> <!-- Bootstrap Icons -->
                </span>
            </div>
        </div>
    

        {{-- <div class="col-md-3" style="border-right:2px solid #eee;" id="catArea">
            <a data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false"
               aria-controls="multiCollapseExample2" style="color:#000;">
                <div class="col-md-12"><span style="font-size: 14px;"><b>Category</b></span></div>
                <div class="col-md-12"><input class="category-input"
                                              value="{{ $subcategory_name }}" type="text" readonly
                                              style="font-size: 11px;color:#000;border:0px; margin-top: 6px;"
                                              placeholder="Select Category"></div>
            </a>
        </div> --}}

       

        <div class="col-md-6 border-color" style="border-right: 2px solid #eee; text-align: center;">
            <label for="neighborhood" class="form-label" style="font-weight: bold;margin-left: 11px;">Neighborhood</label>
            <div class="input-group">
                <input type="text" class="form-control filter1" style="margin-top: -10px; font-size: 16px;" id="neighborhood" placeholder="Enter location">
                <span class="" id="locationIcon">
                    <i class="fa fa-map-marker" style="margin-top: -5px; color:red;"></i> <!-- Bootstrap Icons location marker -->
                </span>
            </div>
        </div>

        

        <div class="col-md-4 border-color" style="border-right:2px solid #eee;" id="priceArea1">
            <a data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false"
               aria-controls="multiCollapseExample4" style="color:#000;">
                <div class="col-md-12" style="text-align: center;"><span style="font-size: 14px;"><b>Price</b></span></div>
             
                {{-- <div class="col-md-12"><span style="font-size: 11px;color:#000;">{{ $from || $to ? $from . '-' . $to : 'Select'}}</span></div> --}}
            </a>
            {{-- <div class="col-md-12" style="display: flex;"> --}}
                <span style="display: flex;">
                <input type="text" class="form-control filter1" style="border-right: 2px solid #eee;padding: 0px !important; font-size: 13px;" name="min_price" id="min_price" oninput="validatePhoneNumber(this)" placeholder="Min" min="0">
                {{-- <div style="border-left: 1px solid #ccc; height: 100%; margin: 0 10px;"></div> --}}
    
                <input type="text" class="form-control max_price" style="padding: 0px 0px 0px 15px !important; font-size: 13px; " name="max_price" id="max_price" oninput="validatePhoneNumber(this)" placeholder="Max" min="0">
            </span>
                {{-- </div> --}}
        </div>

        <div class="col-md-3 border-color" id="filtersAreaw1">
            <div class="col-md-12" style="text-align: end;">
                <span style="font-size: 14px;"><b>Sort</b></span>
            </div>
            <select class="form-select form-control "  id="sortDropdown" onchange="window.location.href=this.value" >
                <option class="option" value="?sort=newest" {{ request()->sort == 'newest' ? 'selected' : '' }}>Post: New to Old</option>
                <option class="option" value="?sort=oldest" {{ request()->sort == 'oldest' ? 'selected' : '' }}>Post: Old to New</option>
                <option class="option" value="?sort=price_high" {{ request()->sort == 'price_high' ? 'selected' : '' }}>Price: High to Low</option>
                <option  class="option" value="?sort=price_low" {{ request()->sort == 'price_low' ? 'selected' : '' }}>Price: Low to High</option>
                <option  class="option" value="?sort=nearest" {{ request()->sort == 'nearest' ? 'selected' : '' }}>Nearest First</option>
            </select>
        </div>
    </div>
    <button class="btn"  style="white-space: nowrap;margin-left:43.6rem;  color: red; border: 1px solid goldenrod ;border-radius: 5px;" type="button"  aria-expanded="false">
        Search
    </button>
   
</form>

            {{-- </div> --}}
            <!----------->
            <div class="row">
                <div class="col">
                    <div class="collapse multi-collapse multiCollapse" id="multiCollapseExample1"
                         style="box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px;width:240px;position:absolute;z-index:999;background-color: white;width:100%;">
                        <!-- <div class="card card-body"> -->
                        <div style="max-height: 170px !important;  overflow-y: scroll;">
                            <p city-id="" class="city-list filter-options-list">All</p>
                            @foreach($cities_for_filter as $city)
                                <p city-id="{{ $city->id }}" class="city-list filter-options-list">
                                    {{ $city->name }}
                                </p>
                            @endforeach
                        </div>
                       
                    </div>
                </div>

                <div class="col">
                    <div class="collapse multi-collapse multiCollapse" id="multiCollapseExample2"
                         style="box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px;position:absolute;z-index:1;background-color: white;width:100%;">
                        <div style="max-height: 170px !important;  overflow-y: scroll;">
                            @foreach($subcategories_for_filter as $subcategory)
                                <p subcategory-id="{{ $subcategory->id }}" class="subcategory-list filter-options-list">
                                    {{ $subcategory->name }}
                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="collapse multi-collapse multiCollapse" id="multiCollapseExample4"
                         style="box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px;position:absolute;z-index:1;background-color: white;width:100%;">
                        <div style="padding: 10px;">
                            <div class="col-md-12 mx-auto">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <label for="" style="font-size: 13px;">Min</label><br/>
                                        <input type="number" placeholder="0" value="{{ $from }}" id="from"
                                               style="width: 140px;border:1px solid #eee;padding:25px !important;"
                                               class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" style="font-size: 13px;">Max</label><br/>
                                        <input type="number" placeholder="Any" value="{{ $to }}" id="to"
                                               style="width: 140px;border:1px solid #eee;padding:25px !important;"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!----buttons----->
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-5 mx-auto" style="margin-top: 20px;margin-bottom:20px;">
                                        <a class="btn form-control cancel-btn"
                                           style="border:1px solid #0000FF;color:#0000FF;font-size:13px;">Cancel</a>
                                    </div>
                                    <div class="col-md-7 mx-auto" style="margin-top: 20px;margin-bottom:20px;">
                                        <a class="btn form-control apply-price-filter-btn"
                                           style="background: #0000FF;color:#fff;font-size:13px;">Apply </a>
                                    </div>
                                </div>
                            </div>
                            <!----buttons----->
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="collapse multi-collapse multiCollapse" id="multiCollapseExample5"
                         style="box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px;position:absolute;z-index:1;background-color: white;width:100%;">
                        <div style="padding: 10px;max-height: 220px !important;  overflow-y: scroll;">

                            <div class="col-md-12 mx-auto" style="margin-top: 10px;">
                                <h6 style="font-weight: bold;">Keyword</h6>
                                <input type="text" class="form-control keyword-input" value="{{ $keyword }}"
                                       placeholder=" Enter Keywords"
                                       style="padding: 15px;border:1px solid #eee;border-radius:3px;">
                            </div>
                            <hr>
                            <!----buttons----->
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-5 mx-auto" style="margin-top: 20px;margin-bottom:20px;">
                                        <a class="btn form-control cancel-btn"
                                           style="border:1px solid #0000FF;color:#0000FF;font-size:11px;">Cancel</a>
                                    </div>
                                    <div class="col-md-7 mx-auto" style="margin-top: 20px;margin-bottom:20px;">
                                        <a class="btn form-control apply-keyword-filter-btn"
                                           style="background: #0000FF;color:#fff;font-size:11px;">Apply </a>
                                    </div>
                                </div>
                            </div>
                          
                            <!----buttons----->
                        </div>
                    </div>
                </div>
                

            </div>
            <!----------->
        </div>
    </section>
    <!---new filter ennded----->
    <section>
        <div class="container">
            <div class="col-lg-12 col-md-12 col-12" style="margin-left: 4rem;">
                <div class="row" style="margin-left: -137px;">
                    <div class="col-lg-8 col-md-8" style="display: flex;">
                        <h5 style="white-space: nowrap;"><b> {{ $subcategory_name }} <span class="text-muted">   - {{ $ads->count() }} Ads</span></b>
                        </h5>
                       
                    
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <button class="btn"  style="border: 1px solid goldenrod ;float: right; white-space: nowrap; height: 36px; border-radius: 5px; color: red;" type="button"  aria-expanded="false">
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
                            <div class="col-lg-4 col-md-4 col-12" style="margin-top:-5px;">
                                <div style="position:absolute;border:0px solid red;width:100%;">
                                    <div class="row">
                                        <!-- Sharing and Favourite buttons -->
                                        <div style="margin-top: 12px; margin-left: 232px;  z-index: 2;">
                                            <span>
                                                <a><i class="fa favourite-btn {{ $ad->is_favourite ? 'fa-heart' : 'fa-heart-o' }}" is-favourite="{{ $ad->is_favourite ? '1' : '0' }}" ad-id="{{ $ad->id }}" style="font-size: 25px;margin-right: 7px; margin-left: 2px; color: white;"></i></a>
                                                {{-- <a><i class="fa fa-share share-btn" ad-id="{{ $ad->id }}" title="Copy Ad link" style="font-size: 25px; margin-right: 41px;color:white;"></i></a>   --}}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:150px; z-index: 2;">
                                        <i class="fa fa-image" style="color:white;"></i><span class="text-white" style="margin-left:9px">1</span>
                                    </div>
                                </div>
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $ad->id }}">
                                    <div class="swiper-container" style="height:180px;width:16pc;">
                                        <div class="swiper-wrapper">
                                            <!-- Static image for now -->
                                            <div class="swiper-slide" style="background-image:url({{ $ad->main_image_url }});"></div>
                                        </div>
                                        <!-- Add Pagination if needed -->
                                        <div class="swiper-pagination"></div>
                                        <!-- Add Navigation buttons if needed -->
                                        <div class="swiper-button-next"></div>
                                        {{-- <div class="swiper-button-prev"></div> --}}
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <div class="row" style="margin-top: -10px;">
                                    <div class="col-lg-7 col-md-7 col-7" style="margin-left: -118px">
                                        <h5 style="font-size: 22px;font-weight:700;margin: 0px;">{{ $ad->title ?? 'Heading N/A' }}</h5>
                                        <p style="font-size: 13px;margin-bottom: 6px;">{{ $ad->category_name }} <span style="font-size: 16px;">&#9679;</span> {{ $ad->subcategory_name }}</p>
                                        <h3 style="font-weight: bold;font-size:20px;">AED {{ \App\Helpers\SiteHelper::priceFormatter($ad->price, request()->currency) }}</h3>
                                    
                                        <p style="margin-top:4.7rem;font-size: 16px;"><i class="fa fa-map-marker" style="color: red;font-size:21px;"></i> {{ $ad->location_name }} <span style="font-size: 16px;">&#9679;</span> <span  style="margin-top: 12px;font-size: 16px;">24 May 2024</span></p>
                                        
                                        <!-- Buttons for Call and Chat -->
                                       
                                    </div>
                                    
                                    <div class="col-lg-2 col-md-2 mb-30 col-3">
                                       
                                        
                                        <button class="btn btn-primary" style="font-size:11px;color:white; font-weight:bold;">Featured</button>
                                    </div>
                                </div>
                            </div>
                            <!-----content----->
                            <hr style="width: 69%;margin-top:0px;margin-left: 12px;background:#eee;">
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

    </script>
@endsection
<!-- multiCollapseExample1 -->
