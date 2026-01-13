@extends('layout.master')
@section('content')

<style>
    .slick-prev,
    .slick-next {
        top: 32% !important;

    }

    .external,
    .show-more-btn1 {
        font-size: 13px;

    }

    /* Listing card styles */
    .listing {
        background: #fff;
        border-radius: 0.3rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        width: 110% !important;
        overflow: hidden;
        display: block;
    }

    .listing img {
        width: 100% !important;
        height: 152px !important;
        object-fit: cover;
        border-radius: 0.3rem 0.3rem 0 0;
    }

    .listing-slider .listing {
        background: #fff;
        border-radius: 0.3rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        width: 100% !important;
        overflow: hidden;
    }

    .slick-slide {
        padding: 0px !important;
        margin: 0px 10px;
    }

    .listing-slider .listing img {
        width: 100% !important;
        height: 152px !important;
        object-fit: cover;
        border-radius: 0.3rem 0.3rem 0 0;
    }

    .noAds {

        margin-top: 0.5rem;
    }

    .show-more-btn1 {
        color: goldenrod !important;

    }

    .select2-dropdown {
        border: 1px solid transparent !important;
        background-color: #fff;
        color: #000 !important;
    }

    .show-more-btn1:hover {
        color: blue !important;

    }

    .navbar-light .navbar-nav .show>.nav-link,
    .navbar-light .navbar-nav .active>.nav-link,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .nav-link.active {
        color: blue !important;
    }

    .carousel-item .active {
        border-radius: 50%;
    }

    .listing-slider:before {
        background-color: transparent !important;
    }

    .slick-prev {
        left: 29px;
        opacity: 0.5;
    }

    .slick-next {
        right: 24px;
        opacity: 0.5;
    }

    .slick-slide img {
        width: 100% !important;
    }


    .home-full-width {
        padding-left: 81px !important;
        padding-right: 81px !important;
        width: 100% !important;
    }

    @media (max-width: 768px) {
        .home-full-width {
            padding-left: 15px !important;
            padding-right: 15px !important;
        }
    }
</style>
@php
$categories = \App\Helpers\RecordHelper::getCategories();
$catgories_for_search = $categories->random()->take(6)->get();
@endphp
<section>
    <!-- <div class="container slider-area"> -->
    <div class="container-fluid home-full-width slider-area desktop-view" style="border:0px solid red;margin-top:-12px;">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" style="border-radius:0.3rem;">
                <div class="carousel-item active">
                    <img src="{{asset('images/slider-images/image1.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;">
                </div>
                <div class="carousel-item ">
                    <img src="{{asset('images/slider-images/image2.jpg')}}" alt="Los Angeles" width="100%" height="257" style="height:310px;">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/slider-images/image3.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/slider-images/image4.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/slider-images/image5.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;">
                </div>

            </div>
        </div>
    </div>
</section>
<!-- searchbar area desktop start -->
<div class="container-fluid home-full-width mt-100 desktop-view">
    <section class="mt-100 desktop-view">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-12 col-xl-10 col-md-12">
                    <div class="col-lg-12 col-md-12" style="border:0px solid red;margin-top:-53px;">
                        <h4 class="slider-heading" style="color: white">
                            <b>The Best Marketplace to Buy & Sell Businesses Worldwide!</b>
                        </h4>
                        <form action="{{ env('BASE_URL') . 'listing/search' }}" method="get"
                            style="border:0px solid red;margin-left: -24px;">
                            <div class="searchbox-area" style="border:0px solid red;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="searches mb-10">
                                            {{-- <a href="javascript:void(0);" class="text-white"><span> &nbsp; &nbsp; &nbsp; </span>Searching In</a> --}}
                                            <a href="javascript:void(0);"
                                                class="searches-cat category-search searching-cat" category-id="">All </a>
                                            @foreach($catgories_for_search as $category)
                                            <a href="javascript:void(0);" class="searches-cat category-search"
                                                category-id="{{ $category->id }}">{{ $category->name }}</a>
                                            @endforeach
                                        </div>
                                        <!-- Business Advisory finish -->
                                    </div>
                                </div>
                                <br>
                                <!-- searchbar start -->
                                <div class="input-group search-box-area search-w" style="border:0px solid red;">
                                    <input name="key_words" type="search"
                                        class="form-control keyword_search searbox-input category-search-box"
                                        placeholder="Search in All" aria-label="Search"
                                        aria-describedby="search-addon">
                                    <ul id="subcategoryDropdown" class="dropdown-menu" style="display: none;">
                                        <!-- Subcategories will be appended here dynamically -->
                                    </ul>
                                    <input name="category_id" type="hidden" class="category-search-category-id">
                                    <input name="country" type="hidden" class="country" value="{{ request()->country }}">
                                    <input name="city" type="hidden" class="city" value="{{ request()->city }}">
                                    <span> &nbsp; &nbsp; &nbsp; &nbsp;</span>
                                    <button type="submit" class="btn searbox-button category-search-btn">
                                        Search
                                    </button>
                                </div>

                                <br>
                                <!-- searchbar finish -->
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- searchbar area desktop finish -->
<!-- searchbar area mobile start -->
<section class="mobile-view">
    <div class="container-fluid home-full-width">
        <div class="row justify-content-md-center">
            <div class="col-lg-10">
                <!-- searchbar start -->
                <div class="searchbox-area-second" style="border: 2px solid #eef0f1;">
                    <div class="input-group search-box-area">
                        <input type="search" class="form-control searbox-input-mobile"
                            placeholder="Business For Sale india" aria-label="Search"
                            aria-describedby="search-addon">
                        <button type="button" class="btn searbox-button-mobile">
                            Search
                        </button>
                    </div>
                </div>
                <!-- searchbar finish -->
            </div>
        </div>
        <div class="row">
            <!-- Categories start -->
            <div class="col-lg-3 p-5px col-6">
                <div class="create-profile-area">
                    <a href="#" class="btn profile-button">All</a>
                </div>
            </div>
            @foreach($catgories_for_search as $category)
            <div class="col-lg-3 p-5px col-6">
                <div class="create-profile-area">
                    <a href="#" class="btn profile-button">{{ $category->name }}</a>
                </div>
            </div>
            @endforeach

            <!-- Categories end -->
        </div>
    </div>
</section>

<!-- searchbar mobile finish  -->
<!-- Categories area start -->
<section class="list">
    <div class="container-fluid home-full-width">
        <div class="row">
            <div class="col-md-12">
            <h6 style="margin-top: 20px;">
                <b style="margin-left: 0rem;">Popular Categories</b>
            </h6>
            <div class="row" style="margin-bottom: -10px;">
                @foreach($categories as $category)
                <div class="col-md-3 cat mb-4">
                    <div class="subcategory-list">
                        <img src="{{ $category->image_url  }}" alt="" width="25" style="margin-top: -11px;"> <b style="font-size: 14px;"> {{$category->name}}</b>
                        <br>
                        @foreach($category->sub_categories as $key=>$sub_category)
                        @if($key >= 5)
                        <div class="collapse hidden-div">
                            <a href="{{env('BASE_URL') . 'ads/' . $sub_category->id . '?country=' . request()->country . '&city=' . request()->city.'&currency=' . session('app_currency', 'default_currency')}}">{{$sub_category->name}}</a>
                            <br>
                        </div>
                        @else
                        <span class="external">
                            <a href="{{env('BASE_URL') . 'ads/' . $sub_category->id . '?country=' . request()->country . '&city=' . request()->city.'&currency=' . session('app_currency', 'default_currency')}}">{{$sub_category->name}}</a>
                        </span>
                        <br>
                        @endif
                        @endforeach
                        @if (count($category->sub_categories) >= 4)
                        <a href="{{env('BASE_URL') . 'ads/?country=' . request()->country . '&city=' . request()->city.'&currency=' . session('app_currency', 'default_currency')}}" class="show-more-btn1">All in {{$category->name}}</a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="business-sale">

    @php $ads = \App\Helpers\RecordHelper::getAds();


    @endphp





    <div class="container-fluid home-full-width">
        <div class="row" style="margin-left:2px;">
            <div class="col-lg-12 col-md-12 col-12 p-0">
            <h6 style="margin-bottom:0px;"><b>Popular in Businesses for Sale</b></h6>
            @if($ads->where("category_id", 1)->count()>0)
            @php $validListingsCount = 0; @endphp
            <div class="row">


                @foreach($ads->where("category_id", 1) as $key=>$featured_ad)
                @php
                $business_for_sale_details= DB::table('business_for_sale_details')->where('listing_id', $featured_ad->id)->first();
                @endphp
                @if(!$business_for_sale_details) @continue @endif
                @php $validListingsCount++; @endphp
                <div class="col-lg-2 col-md-3 col-6">
                    <a href="{{ env('BASE_URL') . 'ads/detail/' . $featured_ad->id . '?country=' . request()->country . '&city=' . request()->city. '&currency=' . session('app_currency', 'default_currency')}}">
                        <div class="listing p-1">
                            <img src="{{ $featured_ad->main_image_url }}" alt="{{ $featured_ad->name }}" title="{{ $featured_ad->name }}" width="216" height="152">
                            <div class="heart-icon" style="position: absolute; top: 16px; right: 0.4rem;">
                                <i class="fa fa-heart-o" style="color: #fff !important; font-size: 20px;"></i>
                            </div>
                            <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:8rem; z-index: 2;">
                                <i class="fa fa-image" style="color:white;"></i><span class="text-white" style="margin-left:9px">1</span>
                            </div>
                            <div class="detail" style="padding: 12px;">
                                <span style="color:#000; display: block; margin-bottom: 2px;">{!!$business_for_sale_details->title !!} {{$key}}</span>
                                <span style="color:#999; display: block; margin-bottom: 5px;">{!!$business_for_sale_details->location_name !!}</span>
                                <h5 style="margin-bottom: -9px;font-size: 14px;"><b style="color: red;"> {{session('app_currency', 'default_currency')}} {!!$business_for_sale_details->price !!}</b></h5>
                            </div>

                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            @if($validListingsCount == 0)
            <div class="noAds">
                <h6>No Ads</h6>
            </div>
            @endif
            @else
            <div class="noAds">

                <h6>No Ads </h6>
            </div>
            @endif
            <!-- Custom Arrows -->
            {{-- <button type="button" class="slick-prev"><img src="path/to/left-arrow.png" alt="Prev"></button>
                <button type="button" class="slick-next"><img src="path/to/right-arrow.png" alt="Next"></button> --}}
            </div>
        </div>
    </div>
</section>
<section class="business-rent">
    @php $ads = \App\Helpers\RecordHelper::getAds(); @endphp


    <div class="container-fluid home-full-width">
        <div class="row" style="margin-left:2px;">
            <div class="col-lg-12 col-md-12   col-12 p-0">
            <h6 style="margin-bottom:0px;"><b>Popular in Businesses for Rent</b></h6>
            @if($ads->where("category_id", 7)->count()>0)
            @php $validListingsCount = 0; @endphp
            <div class="row">

                @foreach($ads->where("category_id", 7) as $key=>$featured_ad)
                @php
                $business_rents= DB::table('business_rents')->where('listing_id', $featured_ad->id)->first();
                @endphp
                @if(!$business_rents) @continue @endif
                @php $validListingsCount++; @endphp
                <div class="col-lg-2 col-md-3 col-6">
                    <a href="{{ env('BASE_URL') . 'ads/detail/' . $featured_ad->id . '?country=' . request()->country . '&city=' . request()->city. '&currency=' . session('app_currency', 'default_currency')}}">
                        <div class="listing p-1">
                            <img src="{{ $featured_ad->main_image_url }}" alt="{{ $featured_ad->name }}" title="{{ $featured_ad->name }}" width="216" height="152">
                            <div class="heart-icon" style="position: absolute; top: 16px; right: 0.4rem;">
                                <i class="fa fa-heart-o" style="color: #fff !important; font-size: 20px;"></i>
                            </div>
                            <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:8rem; z-index: 2;">
                                <i class="fa fa-image" style="color:white;"></i><span class="text-white" style="margin-left:9px">1</span>
                            </div>
                            <div class="detail" style="padding: 12px;">
                                <span style="color:#000; display: block; margin-bottom: 2px;">{!!$business_rents->title !!}{{$key}}</span>
                                <span style="color:#999; display: block; margin-bottom: 5px;">{!!$business_rents->location_name !!}</span>
                                <h5 style="margin-bottom: -9px;font-size: 14px;"><b style="color: red;"> {{session('app_currency', 'default_currency')}} {!!$business_rents->price !!}</b></h5>
                            </div>

                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            @if($validListingsCount == 0)
            <div class="noAds">
                <h6>No Ads</h6>
            </div>
            @endif
            @else
            <div class="noAds">

                <h6>No Ads </h6>
            </div>
            @endif

            </div>
        </div>
    </div>

</section>
<section class="share-sale">

    @php $ads = \App\Helpers\RecordHelper::getAds(); @endphp


    <div class="container-fluid home-full-width">
        <div class="row" style="margin-left:2px;">
            <div class="col-lg-12 col-md-12 col-12 p-0">
            <h6 style="margin-bottom:0px;"><b>Popular in Shares for Sale</b></h6>
                @if($ads->where("category_id", 2)->count()>0)
                @php $validListingsCount = 0; @endphp
                <div class="row">


                    @foreach($ads->where("category_id", 2) as $key=>$featured_ad)
                    @php
                    $shares_for_sale_details= DB::table('shares_for_sale_details')->where('listing_id', $featured_ad->id)->first();
                    @endphp
                    @if(!$shares_for_sale_details) @continue @endif
                    @php $validListingsCount++; @endphp
                    <div class="col-lg-2 col-md-3 col-6">
                        <a href="{{ env('BASE_URL') . 'ads/detail/' . $featured_ad->id . '?country=' . request()->country . '&city=' . request()->city. '&currency=' . session('app_currency', 'default_currency')}}">
                            <div class="listing p-1">
                                <img src="{{ $featured_ad->main_image_url }}" alt="{{ $featured_ad->name }}" title="{{ $featured_ad->name }}" width="216" height="152">
                                <div class="heart-icon" style="position: absolute; top: 16px; right: 0.4rem;">
                                    <i class="fa fa-heart-o" style="color: #fff !important; font-size: 20px;"></i>
                                </div>
                                <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:8rem; z-index: 2;">
                                    <i class="fa fa-image" style="color:white;"></i><span class="text-white" style="margin-left:9px">1</span>
                                </div>
                                <div class="detail" style="padding: 12px;">
                                    <span style="color:#000; display: block; margin-bottom: 2px;">{!!$shares_for_sale_details->title !!}{{$key}}</span>
                                    <span style="color:#999; display: block; margin-bottom: 5px;">{!!$shares_for_sale_details->location_name !!}</span>
                                    <h5 style="margin-bottom: -9px;font-size: 14px;"><b style="color: red;"> {{session('app_currency', 'default_currency')}} {!!$shares_for_sale_details->price !!}</b></h5>
                                </div>

                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @if($validListingsCount == 0)
                <div class="noAds">
                    <h6>No Ads</h6>
                </div>
                @endif
                @else
                <div class="noAds">

                    <h6>No Ads </h6>
                </div>
                @endif

                <!-- Custom Arrows -->
                {{-- <button type="button" class="slick-prev"><img src="path/to/left-arrow.png" alt="Prev"></button>
                <button type="button" class="slick-next"><img src="path/to/right-arrow.png" alt="Next"></button> --}}
            </div>
        </div>
    </div>

</section>
<section class="business-idea">
    @php $ads = \App\Helpers\RecordHelper::getAds(); @endphp

    {{-- @if($ads->count()>0) --}}
    <div class="container-fluid home-full-width">
        <div class="row" style="margin-left:2px;">
            <div class="col-lg-12 col-md-12 col-12 p-0">
            <h6 style="margin-bottom:0px;"><b>Popular in Business Ideas</b></h6>
                @if($ads->where("category_id", 3)->count()>0)
                @php $validListingsCount = 0; @endphp
                <div class="row">

                    @foreach($ads->where("category_id", 3) as $key=>$featured_ad)
                    @php
                    $business_idea_details= DB::table('business_idea_details')->where('listing_id', $featured_ad->id)->first();
                    @endphp
                    @if(!$business_idea_details) @continue @endif
                    @php $validListingsCount++; @endphp
                    <div class="col-lg-2 col-md-3 col-6">
                        <a href="{{ env('BASE_URL') . 'ads/detail/' . $featured_ad->id . '?country=' . request()->country . '&city=' . request()->city. '&currency=' . session('app_currency', 'default_currency')}}">
                            <div class="listing p-1">
                                <img src="{{ $featured_ad->main_image_url }}" alt="{{ $featured_ad->name }}" title="{{ $featured_ad->name }}" width="216" height="152">
                                <div class="heart-icon" style="position: absolute; top: 16px; right: 0.4rem;">
                                    <i class="fa fa-heart-o" style="color: #fff !important; font-size: 20px;"></i>
                                </div>
                                <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:8rem; z-index: 2;">
                                    <i class="fa fa-image" style="color:white;"></i><span class="text-white" style="margin-left:9px">1</span>
                                </div>
                                <div class="detail" style="padding: 12px;">
                                    <span style="color:#000; display: block; margin-bottom: 2px;">{!!$business_idea_details->title !!} {{$key}}</span>
                                    <span style="color:#999; display: block; margin-bottom: 5px;">{!!$business_idea_details->location_name !!}</span>
                                    <h5 style="margin-bottom:-9px;font-size: 14px;"><b style="color: red;"> {{session('app_currency', 'default_currency')}} {!!$business_idea_details->price !!}</b></h5>
                                </div>

                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @if($validListingsCount == 0)
                <div class="noAds">
                    <h6>No Ads</h6>
                </div>
                @endif
                @else
                <div class="noAds">

                    <h6>No Ads</h6>
                </div>
                @endif
                <!-- Custom Arrows -->
                {{-- <button type="button" class="slick-prev"><img src="path/to/left-arrow.png" alt="Prev"></button>
                <button type="button" class="slick-next"><img src="path/to/right-arrow.png" alt="Next"></button> --}}
            </div>
        </div>
    </div>

</section>
<section class="investor">
    @php $ads = \App\Helpers\RecordHelper::getAds(); @endphp


    <div class="container-fluid home-full-width">
        <div class="row" style="margin-left:2px;">
            <div class="col-lg-12 col-md-12  col-12 p-0">
            <h6 style="margin-bottom:0px;"><b>Popular in Investors</b></h6>
            @if($ads->where("category_id", 4)->count()>0)
                @php $validListingsCount = 0; @endphp
                <div class="row">

                @foreach($ads->where("category_id", 4) as $key=>$featured_ad)

                @php
                $investors_details= DB::table('investors_details')->where('listing_id', $featured_ad->id)->first();
                @endphp
                @if(!$investors_details) @continue @endif
                @php $validListingsCount++; @endphp
                <div class="col-lg-2 col-md-3 col-6">
                    <a href="{{ env('BASE_URL') . 'ads/detail/' . $featured_ad->id . '?country=' . request()->country . '&city=' . request()->city. '&currency=' . session('app_currency', 'default_currency')}}">
                        <div class="listing p-1">
                            <img src="{{ $featured_ad->main_image_url }}" alt="{{ $featured_ad->name }}" title="{{ $featured_ad->name }}" width="216" height="152">
                            <div class="heart-icon" style="position: absolute; top: 16px; right: 0.4rem;">
                                <i class="fa fa-heart-o" style="color: #fff !important; font-size: 20px;"></i>
                            </div>
                            <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:8rem; z-index: 2;">
                                <i class="fa fa-image" style="color:white;"></i><span class="text-white" style="margin-left:9px">1</span>
                            </div>
                            <div class="detail" style="padding: 12px;">
                                <span style="color:#000; display: block; margin-bottom: 2px;">{!!$investors_details->title !!} {{$key}}</span>
                                <span style="color:#999; display: block; margin-bottom: 5px;">{!!$investors_details->location_name !!}</span>
                                <h5 style="margin-bottom:-9px;font-size: 14px;"><b style="color: red;"> {{session('app_currency', 'default_currency')}} {!!$investors_details->price !!}</b></h5>
                            </div>

                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            @if($validListingsCount == 0)
            <div class="noAds">
                <h6>No Ads</h6>
            </div>
            @endif
            @else
            <div class="noAds">

                <h6>No Ads</h6>
            </div>
            @endif


            <!-- Custom Arrows -->
            {{-- <button type="button" class="slick-prev"><img src="path/to/left-arrow.png" alt="Prev"></button>
                <button type="button" class="slick-next"><img src="path/to/right-arrow.png" alt="Next"></button> --}}
            </div>
        </div>
    </div>

</section>
<section class="investor-required">
    @php $ads = \App\Helpers\RecordHelper::getAds(); @endphp


    <div class="container-fluid home-full-width">
        <div class="row" style="margin-left:2px;">
            <div class="col-lg-12 col-md-12  col-12 p-0">
            <h6 style="margin-bottom:0px;"><b>Popular in Investors Required</b></h6>
            @if($ads->where("category_id", 5)->count()>0)
            @php $validListingsCount = 0; @endphp
            <div class="row">

                @foreach($ads->where("category_id", 5) as $key=>$featured_ad)
                @php
                $investors_required_details= DB::table('investors_required_details')->where('listing_id', $featured_ad->id)->first();
                @endphp
                @if(!$investors_required_details) @continue @endif
                @php $validListingsCount++; @endphp
                <div class="col-lg-2 col-md-3 col-6">
                    <a href="{{ env('BASE_URL') . 'ads/detail/' . $featured_ad->id . '?country=' . request()->country . '&city=' . request()->city. '&currency=' . session('app_currency', 'default_currency')}}">
                        <div class="listing p-1">
                            <img src="{{ $featured_ad->main_image_url }}" alt="{{ $featured_ad->name }}" title="{{ $featured_ad->name }}" width="216" height="152">
                            <div class="heart-icon" style="position: absolute; top: 16px; right: 0.4rem;">
                                <i class="fa fa-heart-o" style="color: #fff !important; font-size: 20px;"></i>
                            </div>
                            <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:8rem; z-index: 2;">
                                <i class="fa fa-image" style="color:white;"></i><span class="text-white" style="margin-left:9px">1</span>
                            </div>
                            <div class="detail" style="padding: 12px;">
                                <span style="color:#000; display: block; margin-bottom: 2px;">{!!$investors_required_details->title !!} {{$key}}</span>
                                <span style="color:#999; display: block; margin-bottom: 5px;">{!!$investors_required_details->location_name !!}</span>
                                <h5 style="margin-bottom:-9px;font-size: 14px;"><b style="color: red;"> {{session('app_currency', 'default_currency')}} {!!$investors_required_details->price !!}</b></h5>
                            </div>

                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            @if($validListingsCount == 0)
            <div class="noAds">
                <h6>No Ads</h6>
            </div>
            @endif
            @else
            <div class="noAds">

                <h6>No Ads</h6>
            </div>
            @endif


            <!-- Custom Arrows -->
            {{-- <button type="button" class="slick-prev"><img src="path/to/left-arrow.png" alt="Prev"></button>
                <button type="button" class="slick-next"><img src="path/to/right-arrow.png" alt="Next"></button> --}}
            </div>
        </div>
    </div>

</section>
<section class="franchise-opp">
    @php $ads = \App\Helpers\RecordHelper::getAds(); @endphp

    <div class="container-fluid home-full-width">
        <div class="row" style="margin-left:2px;">
            <div class="col-lg-12 col-md-12  col-12 p-0">
            <h6 style="margin-bottom:0px;"><b>Popular in Franchise Opportunities</b></h6>
            @if($ads->where("category_id", 6)->count()>0)
            @php $validListingsCount = 0; @endphp
            <div class="row">

                @foreach($ads->where("category_id", 6) as $key=>$featured_ad)
                @php
                $franchise_opportunities_details= DB::table('franchise_opportunities_details')->where('listing_id', $featured_ad->id)->first();
                @endphp
                @if(!$franchise_opportunities_details) @continue @endif
                @php $validListingsCount++; @endphp
                <div class="col-lg-2 col-md-3 col-6">
                    <a href="{{ env('BASE_URL') . 'ads/detail/' . $featured_ad->id . '?country=' . request()->country . '&city=' . request()->city}}">
                        <div class="listing p-1">
                            <img src="{{ $featured_ad->main_image_url }}" alt="{{ $featured_ad->name }}" title="{{ $featured_ad->name }}" width="216" height="152">
                            <div class="heart-icon" style="position: absolute; top: 16px; right:0.4rem;">
                                <i class="fa fa-heart-o" style="color: #fff !important; font-size: 20px;"></i>
                            </div>
                            <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:8rem; z-index: 2;">
                                <i class="fa fa-image" style="color:white;"></i><span class="text-white" style="margin-left:9px">1</span>
                            </div>
                            <div class="detail" style="padding: 12px;">
                                <span style="color:#000; display: block; margin-bottom: 2px;">{!!$franchise_opportunities_details->title !!} {{$key}}</span>
                                <span style="color:#999; display: block; margin-bottom: 5px;">{!!$franchise_opportunities_details->location_name !!}</span>
                                <h5 style="margin-bottom:-9px;font-size: 14px;"><b style="color: red;"> {{session('app_currency', 'default_currency')}} {!!$franchise_opportunities_details->price !!}</b></h5>
                            </div>

                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            @if($validListingsCount == 0)
            <div class="noAds">
                <h6>No Ads</h6>
            </div>
            @endif
            @else
            <div class="noAds">

                <h6>No Ads</h6>
            </div>
            @endif

            <!-- Custom Arrows -->
            {{-- <button type="button" class="slick-prev"><img src="path/to/left-arrow.png" alt="Prev"></button>
                <button type="button" class="slick-next"><img src="path/to/right-arrow.png" alt="Next"></button> --}}
            </div>
        </div>
    </div>

</section>
<section class="machinery">
    @php $ads = \App\Helpers\RecordHelper::getAds(); @endphp


    <div class="container-fluid home-full-width">
        <div class="row" style="margin-left:2px;">
            <div class="col-lg-12 col-md-12 col-12 p-0">
            <h6 style="margin-bottom:0px;"><b>Popular in Machinery & Supplies</b></h6>
            @if($ads->where("category_id", 8)->count()>0 )
            @php $validListingsCount = 0; @endphp
            <div class="row">



                @foreach($ads->where("category_id", 8) as $key=>$featured_ad)
                @php
                $machine_supplies_details= DB::table('machine_supplies_details')->where('listing_id', $featured_ad->id)->first();
                @endphp
                @if(!$machine_supplies_details) @continue @endif
                @php $validListingsCount++; @endphp
                <div class="col-lg-2 col-md-3 col-6">
                    <a href="{{ env('BASE_URL') . 'ads/detail/' . $featured_ad->id . '?country=' . request()->country . '&city=' . request()->city}}">
                        <div class="listing p-1">
                            <img src="{{ $featured_ad->main_image_url }}" alt="{{ $featured_ad->name }}" title="{{ $featured_ad->name }}" width="216" height="152">
                            <div class="heart-icon" style="position: absolute; top: 16px; right: 0.4rem;">
                                <i class="fa fa-heart-o" style="color: #fff !important; font-size: 20px;"></i>
                            </div>
                            <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:8rem; z-index: 2;">
                                <i class="fa fa-image" style="color:white;"></i><span class="text-white" style="margin-left:9px">1</span>
                            </div>
                            <div class="detail" style="padding: 12px;">
                                <span style="color:#000; display: block; margin-bottom: 2px;">{!!$machine_supplies_details->title !!}{{$key}}</span>
                                <span style="color:#999; display: block; margin-bottom: 5px;">{!!$machine_supplies_details->location_name !!}</span>
                                <h5 style="margin-bottom:-9px;font-size: 14px;"><b style="color: red;"> {{session('app_currency', 'default_currency')}} {!!$machine_supplies_details->price !!}</b></h5>
                            </div>

                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            @if($validListingsCount == 0)
            <div class="noAds">
                <h6>No Ads</h6>
            </div>
            @endif
            @else
            <div class="noAds">

                <h6>No Ads</h6>
            </div>
            @endif

            <!-- Custom Arrows -->
            {{-- <button type="button" class="slick-prev"><img src="path/to/left-arrow.png" alt="Prev"></button>
                <button type="button" class="slick-next"><img src="path/to/right-arrow.png" alt="Next"></button> --}}
            </div>
        </div>
    </div>

</section>




@endsection
@section('page_scripts')
<script type="text/javascript">


    $(document).on('click', '.category-search', function(e) {
        e.preventDefault();
        var thisElem = $(this);
        var searchBox = $('.category-search-box')

        //Prominenting the clicked category
        $('.category-search').removeClass('searching-cat');
        thisElem.addClass('searching-cat');

        //changing the placeholder of search input
        searchBox.attr('placeholder', "Search in " + thisElem.text());

        //setting attribute to search in relevent category
        $('.category-search-category-id').val(thisElem.attr('category-id'))



    });

    // $(document).on('click', '.category-search-btn', function (e) {
    //     e.preventDefault();
    //
    //     var data = {
    //         'key_words': $('.category-search-box').val(),
    //         'category_id': $('.category-search-box').attr('category-id')
    //     };
    //
    //     $.ajax({
    //         url: api_url + 'listing/search',
    //         type: 'POST',
    //         data: data,
    //         dataType: "JSON",
    //         success: function (response) {
    //             if (response.status) {
    //                 console.log(response.data);
    //
    //
    //             } else {
    //                 alert(response.message);
    //             }
    //         },
    //         error: function (response) {
    //             showAlert("error", "Server Error");
    //         }
    //     });
    // });


    $(document).on('click', '.show-more-btn', function(e) {
        e.preventDefault();
        var thisElemParent = $(this).parent(".subcategory-list");
        var a = $(thisElemParent).find(".hidden-div");
        if (a.hasClass('show')) {
            a.collapse('hide');
        } else {
            a.collapse('show');
        }
        a.collapse('show');
        // hidden-div
    });


    $(document).ready(function() {
        const dropdown = $('#subcategoryDropdown');
        const keywordInput = $('.keyword_search');
        const categoryId = $('.category-search')

        // Show dropdown when input gains focus or starts typing
        keywordInput.on('input', function() {
            const keyword = $(this).val();


            const category_id = $('.category-search-category-id').val();


            if (keyword.length > 0) {
                $.ajax({
                    url: '/ads/lisiting_get_subcategories',
                    type: 'GET',
                    data: {
                        category_id: category_id,
                        keyword: keyword
                    },
                    success: function(data) {
                        dropdown.empty(); // Clear existing items
                        if (data.length > 0) {
                            data.forEach(function(subcategory) {
                                const item = $('<li>')
                                    .addClass('dropdown-item')
                                    .text(subcategory.name)
                                    .on('click', function() {
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
        $(document).on('click', function(e) {
            if (!$(e.target).closest('#keyword, #subcategoryDropdown').length) {
                dropdown.hide();
            }
        });
    });
</script>
@endsection