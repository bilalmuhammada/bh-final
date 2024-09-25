@extends('layout.master')
@section('content')

<style>
    .slick-prev, .slick-next{
        top: 32% !important;

    }
    .slider:before {
        background-color: transparent !important;
    }
    .slick-prev{
        left: 45px;
    }
    .slick-next{
        right: 12px;
    }
.slick-slide img{
    width: 91% !important;
}
</style>
    @php
        $categories = \App\Helpers\RecordHelper::getCategories();
        $catgories_for_search = $categories->random()->take(6)->get();
    @endphp
    <section>
        <!-- <div class="container slider-area"> -->
        <div class="cont-w slider-area desktop-view" style="border:0px solid red;margin-top:-12px;">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('images/slider-images/image2.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:8px;">
                    </div>
                    <div class="carousel-item ">
                        <img src="{{asset('images/slider-images/image1.jpg')}}" alt="Los Angeles" width="100%" height="257" style="height:310px;border-radius:8px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/slider-images/image3.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:8px;">
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('images/slider-images/image4.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:8px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/slider-images/image5.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:8px;">
                    </div>
                    <!--<div class="carousel-item">-->
                    <!--    <img src="{{asset('images/slider-images/image6.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:8px;">-->
                    <!--</div>-->
                    <!--<div class="carousel-item">-->
                    <!--    <img src="{{asset('images/slider-images/image7.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:8px;">-->
                    <!--</div>-->
                    {{-- <div class="carousel-item">
                        <img src="{{asset('images/slider-images/image8.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:8px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/slider-images/image9.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:8px;">
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- searchbar area desktop start -->
    <div class="container mt-100 desktop-view">
        <section class="mt-100 desktop-view">
            <div class="container" >
                <div class="row justify-content-md-center">
                    <div class="col-lg-12 col-xl-10 col-md-12">
                        <div class="col-lg-12 col-md-12" style="border:0px solid red;margin-top:-53px;">
                            <h4 class="slider-heading" style="color: white">
                                <b>The Best Marketplace to Buy & Sell Businesses Worldwide!</b>
                            </h4>
                            <form action="{{ env('BASE_URL') . 'listing/search' }}" method="get"
                                  style="border:0px solid red;">
                                <div class="searchbox-area" style="border:0px solid red;">
                                    <div class="container">
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
                                               class="form-control searbox-input category-search-box"
                                               placeholder="Search In All" aria-label="Search"
                                               aria-describedby="search-addon">
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
        <div class="container">
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
        <div class="container">
            <div class="col-md-12 m-10" style="min-width: 92rem;">
                <h3>
                    <b style="margin-left: -0.7rem;">Popular Categories</b>
                </h3>
                <div class="row" style="margin-left: -28px !important;">
                    @foreach($categories as $category)
                        <div class="col-md-3 cat mb-4">
                            <div class="subcategory-list">
                                <img src="{{ $category->image_url  }}" alt="" width="25"  style="margin-top: -11px;">  <b > {{$category->name}}</b>
                                <br>
                                @foreach($category->sub_categories as $key=>$sub_category)
                                    @if($key >= 4)
                                        <div class="collapse hidden-div">
                                            <a href="{{env('BASE_URL') . 'ads/' . $sub_category->id . '?country=' . request()->country . '&city=' . request()->city.'&currency=' . request()->currency}}">{{$sub_category->name}}</a>
                                            <br>
                                        </div>
                                    @else
                                    <span class="external">
                                        <a href="{{env('BASE_URL') . 'ads/' . $sub_category->id . '?country=' . request()->country . '&city=' . request()->city.'&currency=' . request()->currency}}">{{$sub_category->name}}</a>
                                    </span>
                                        <br>
                                    @endif
                                @endforeach
                                @if (count($category->sub_categories) >= 4)
                                    <a class="text-danger show-more-btn">All in {{$category->name}}</a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-lg-12 col-md-12 mb-30 col-12 " style="margin: 12px 0px 0px -81px;">
                <h3 style="margin-left: 11px;"><b>Popular in Business for Sale</b></h3>
                <div class="row slider" style="    margin-left: -22px;">
                    @php $ads = \App\Helpers\RecordHelper::getAds(); @endphp
    
                    @foreach($ads->where("is_featured", true) as $key=>$featured_ad)
                    <div class="col-lg-2 col-md-3 col-6 m-15" style="width: 184px !important;">
                        <a href="{{ env('BASE_URL') . 'ads/detail/' . $featured_ad->id . '?country=' . request()->country . '&city=' . request()->city}}">
                            <div class="listing">
                                <img src="{{ $featured_ad->main_image_url }}" alt="{{ $featured_ad->name }}" title="{{ $featured_ad->name }}" width="216" height="152">
                                <div class="heart-icon" style="position: absolute; top: 16px; right: 14.7rem;">
                                    <i class="fa fa-heart-o" style="color: #fff !important; font-size: 20px;"></i>
                                </div>
                                <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:8rem; z-index: 2;">
                                    <i class="fa fa-image" style="color:white;"></i><span class="text-white" style="margin-left:9px">1</span>
                                </div>
                                <div class="detail" style="padding-top: 10px;">
                                    <span style="color:#000; display: block; margin-bottom: 10px;">2 Beds . 2 Baths {{$key}}</span>
                                    <span style="color:#999; display: block; margin-bottom: 10px;">Al Quoz 4, Al Quoz</span>
                                    <h5 style="margin-bottom: 10px;font-size: 18px;"><b style="color: red;"> AED 73,988</b></h5>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
    
                <!-- Custom Arrows -->
                {{-- <button type="button" class="slick-prev"><img src="path/to/left-arrow.png" alt="Prev"></button>
                <button type="button" class="slick-next"><img src="path/to/right-arrow.png" alt="Next"></button> --}}
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-lg-12 col-md-12 mb-30 col-12 " style="margin: 12px 0px 0px -81px;">
                <h3 style="margin-left: 11px;"><b>Popular in Share for Sale</b></h3>
                <div class="row slider" style="    margin-left: -22px;">
                    @php $ads = \App\Helpers\RecordHelper::getAds(); @endphp
    
                    @foreach($ads->where("is_featured", true) as $key=>$featured_ad)
                    <div class="col-lg-2 col-md-3 col-6 m-15" style="width: 184px !important;">
                        <a href="{{ env('BASE_URL') . 'ads/detail/' . $featured_ad->id . '?country=' . request()->country . '&city=' . request()->city}}">
                            <div class="listing">
                                <img src="{{ $featured_ad->main_image_url }}" alt="{{ $featured_ad->name }}" title="{{ $featured_ad->name }}" width="216" height="152">
                                <div class="heart-icon" style="position: absolute; top: 16px; right: 14.7rem;">
                                    <i class="fa fa-heart-o" style="color: #fff !important; font-size: 20px;"></i>
                                </div>
                                <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:8rem; z-index: 2;">
                                    <i class="fa fa-image" style="color:white;"></i><span class="text-white" style="margin-left:9px">1</span>
                                </div>
                                <div class="detail" style="padding-top: 10px;">
                                    <span style="color:#000; display: block; margin-bottom: 10px;">2 Beds . 2 Baths {{$key}}</span>
                                    <span style="color:#999; display: block; margin-bottom: 10px;">Al Quoz 4, Al Quoz</span>
                                    <h5 style="margin-bottom: 10px;font-size: 18px;"><b style="color: red;"> AED 73,988</b></h5>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
    
                <!-- Custom Arrows -->
                {{-- <button type="button" class="slick-prev"><img src="path/to/left-arrow.png" alt="Prev"></button>
                <button type="button" class="slick-next"><img src="path/to/right-arrow.png" alt="Next"></button> --}}
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-lg-12 col-md-12 mb-30 col-12 " style="margin: 12px 0px 0px -81px;">
                <h3 style="margin-left: 11px;"><b>Popular in Business ideas</b></h3>
                <div class="row slider" style="    margin-left: -22px;">
                    @php $ads = \App\Helpers\RecordHelper::getAds(); @endphp
    
                    @foreach($ads->where("is_featured", true) as $key=>$featured_ad)
                    <div class="col-lg-2 col-md-3 col-6 m-15" style="width: 184px !important;">
                        <a href="{{ env('BASE_URL') . 'ads/detail/' . $featured_ad->id . '?country=' . request()->country . '&city=' . request()->city}}">
                            <div class="listing">
                                <img src="{{ $featured_ad->main_image_url }}" alt="{{ $featured_ad->name }}" title="{{ $featured_ad->name }}" width="216" height="152">
                                <div class="heart-icon" style="position: absolute; top: 16px; right: 14.7rem;">
                                    <i class="fa fa-heart-o" style="color: #fff !important; font-size: 20px;"></i>
                                </div>
                                <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:8rem; z-index: 2;">
                                    <i class="fa fa-image" style="color:white;"></i><span class="text-white" style="margin-left:9px">1</span>
                                </div>
                                <div class="detail" style="padding-top: 10px;">
                                    <span style="color:#000; display: block; margin-bottom: 10px;">2 Beds . 2 Baths {{$key}}</span>
                                    <span style="color:#999; display: block; margin-bottom: 10px;">Al Quoz 4, Al Quoz</span>
                                    <h5 style="margin-bottom: 10px;font-size: 18px;"><b style="color: red;"> AED 73,988</b></h5>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
    
                <!-- Custom Arrows -->
                {{-- <button type="button" class="slick-prev"><img src="path/to/left-arrow.png" alt="Prev"></button>
                <button type="button" class="slick-next"><img src="path/to/right-arrow.png" alt="Next"></button> --}}
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-lg-12 col-md-12 mb-30 col-12 " style="margin: 12px 0px 0px -81px;">
                <h3 style="margin-left: 11px;"><b>Popular in Investors Required</b></h3>
                <div class="row slider" style="    margin-left: -22px;">
                    @php $ads = \App\Helpers\RecordHelper::getAds(); @endphp
    
                    @foreach($ads->where("is_featured", true) as $key=>$featured_ad)
                    <div class="col-lg-2 col-md-3 col-6 m-15" style="width: 184px !important;">
                        <a href="{{ env('BASE_URL') . 'ads/detail/' . $featured_ad->id . '?country=' . request()->country . '&city=' . request()->city}}">
                            <div class="listing">
                                <img src="{{ $featured_ad->main_image_url }}" alt="{{ $featured_ad->name }}" title="{{ $featured_ad->name }}" width="216" height="152">
                                <div class="heart-icon" style="position: absolute; top: 16px; right: 14.7rem;">
                                    <i class="fa fa-heart-o" style="color: #fff !important; font-size: 20px;"></i>
                                </div>
                                <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:8rem; z-index: 2;">
                                    <i class="fa fa-image" style="color:white;"></i><span class="text-white" style="margin-left:9px">1</span>
                                </div>
                                <div class="detail" style="padding-top: 10px;">
                                    <span style="color:#000; display: block; margin-bottom: 10px;">2 Beds . 2 Baths {{$key}}</span>
                                    <span style="color:#999; display: block; margin-bottom: 10px;">Al Quoz 4, Al Quoz</span>
                                    <h5 style="margin-bottom: 10px;font-size: 18px;"><b style="color: red;"> AED 73,988</b></h5>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
    
                <!-- Custom Arrows -->
                {{-- <button type="button" class="slick-prev"><img src="path/to/left-arrow.png" alt="Prev"></button>
                <button type="button" class="slick-next"><img src="path/to/right-arrow.png" alt="Next"></button> --}}
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-lg-12 col-md-12 mb-30 col-12 " style="margin: 12px 0px 0px -81px;">
                <h3 style="margin-left: 11px;"><b>Popular in Franchise Opportunities</b></h3>
                <div class="row slider" style="    margin-left: -22px;">
                    @php $ads = \App\Helpers\RecordHelper::getAds(); @endphp
    
                    @foreach($ads->where("is_featured", true) as $key=>$featured_ad)
                    <div class="col-lg-2 col-md-3 col-6 m-15" style="width: 184px !important;">
                        <a href="{{ env('BASE_URL') . 'ads/detail/' . $featured_ad->id . '?country=' . request()->country . '&city=' . request()->city}}">
                            <div class="listing">
                                <img src="{{ $featured_ad->main_image_url }}" alt="{{ $featured_ad->name }}" title="{{ $featured_ad->name }}" width="216" height="152">
                                <div class="heart-icon" style="position: absolute; top: 16px; right: 14.7rem;">
                                    <i class="fa fa-heart-o" style="color: #fff !important; font-size: 20px;"></i>
                                </div>
                                <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:8rem; z-index: 2;">
                                    <i class="fa fa-image" style="color:white;"></i><span class="text-white" style="margin-left:9px">1</span>
                                </div>
                                <div class="detail" style="padding-top: 10px;">
                                    <span style="color:#000; display: block; margin-bottom: 10px;">2 Beds . 2 Baths {{$key}}</span>
                                    <span style="color:#999; display: block; margin-bottom: 10px;">Al Quoz 4, Al Quoz</span>
                                    <h5 style="margin-bottom: 10px;font-size: 18px;"><b style="color: red;"> AED 73,988</b></h5>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
    
                <!-- Custom Arrows -->
                {{-- <button type="button" class="slick-prev"><img src="path/to/left-arrow.png" alt="Prev"></button>
                <button type="button" class="slick-next"><img src="path/to/right-arrow.png" alt="Next"></button> --}}
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-lg-12 col-md-12 mb-30 col-12 " style="margin: 12px 0px 0px -81px;">
                <h3 style="margin-left: 11px;"><b>Popular in Machinery & Supplies</b></h3>
                <div class="row slider" style="    margin-left: -22px;">
                    @php $ads = \App\Helpers\RecordHelper::getAds(); @endphp
    
                    @foreach($ads->where("is_featured", true) as $key=>$featured_ad)
                    <div class="col-lg-2 col-md-3 col-6 m-15" style="width: 184px !important;">
                        <a href="{{ env('BASE_URL') . 'ads/detail/' . $featured_ad->id . '?country=' . request()->country . '&city=' . request()->city}}">
                            <div class="listing">
                                <img src="{{ $featured_ad->main_image_url }}" alt="{{ $featured_ad->name }}" title="{{ $featured_ad->name }}" width="216" height="152">
                                <div class="heart-icon" style="position: absolute; top: 16px; right: 14.7rem;">
                                    <i class="fa fa-heart-o" style="color: #fff !important; font-size: 20px;"></i>
                                </div>
                                <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:8rem; z-index: 2;">
                                    <i class="fa fa-image" style="color:white;"></i><span class="text-white" style="margin-left:9px">1</span>
                                </div>
                                <div class="detail" style="padding-top: 10px;">
                                    <span style="color:#000; display: block; margin-bottom: 10px;">2 Beds . 2 Baths {{$key}}</span>
                                    <span style="color:#999; display: block; margin-bottom: 10px;">Al Quoz 4, Al Quoz</span>
                                    <h5 style="margin-bottom: 10px;font-size: 18px;"><b style="color: red;"> AED 73,988</b></h5>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
    
                <!-- Custom Arrows -->
                {{-- <button type="button" class="slick-prev"><img src="path/to/left-arrow.png" alt="Prev"></button>
                <button type="button" class="slick-next"><img src="path/to/right-arrow.png" alt="Next"></button> --}}
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-lg-12 col-md-12 mb-30 col-12 " style="margin: 12px 0px 0px -81px;">
                <h3 style="margin-left: 11px;"><b>Popular in Export & Import</b></h3>
                <div class="row slider" style="    margin-left: -22px;">
                    @php $ads = \App\Helpers\RecordHelper::getAds(); @endphp
    
                    @foreach($ads->where("is_featured", true) as $key=>$featured_ad)
                    <div class="col-lg-2 col-md-3 col-6 m-15" style="width: 184px !important;">
                        <a href="{{ env('BASE_URL') . 'ads/detail/' . $featured_ad->id . '?country=' . request()->country . '&city=' . request()->city}}">
                            <div class="listing">
                                <img src="{{ $featured_ad->main_image_url }}" alt="{{ $featured_ad->name }}" title="{{ $featured_ad->name }}" width="216" height="152">
                                <div class="heart-icon" style="position: absolute; top: 16px; right: 14.7rem;">
                                    <i class="fa fa-heart-o" style="color: #fff !important; font-size: 20px;"></i>
                                </div>
                                <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:8rem; z-index: 2;">
                                    <i class="fa fa-image" style="color:white;"></i><span class="text-white" style="margin-left:9px">1</span>
                                </div>
                                <div class="detail" style="padding-top: 10px;">
                                    <span style="color:#000; display: block; margin-bottom: 10px;">2 Beds . 2 Baths {{$key}}</span>
                                    <span style="color:#999; display: block; margin-bottom: 10px;">Al Quoz 4, Al Quoz</span>
                                    <h5 style="margin-bottom: 10px;font-size: 18px;"><b style="color: red;"> AED 73,988</b></h5>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
    
                <!-- Custom Arrows -->
                {{-- <button type="button" class="slick-prev"><img src="path/to/left-arrow.png" alt="Prev"></button>
                <button type="button" class="slick-next"><img src="path/to/right-arrow.png" alt="Next"></button> --}}
            </div>
        </div>
    </section>
    
    
    
@endsection
@section('page_scripts')
    <script type="text/javascript">
    $(document).ready(function(){
    $('.slider').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev" style="border: none;"><i class="fa fa-chevron-left" aria-hidden="true" style="color: black;"></i></button>',
        nextArrow: '<button type="button" class="slick-next" style="border: none;"><i class="fa fa-chevron-right" aria-hidden="true" style="color: black;"></i></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});


        $(document).on('click', '.category-search', function (e) {
            e.preventDefault();
            var thisElem = $(this);
            var searchBox = $('.category-search-box')

            //Prominenting the clicked category
            $('.category-search').removeClass('searching-cat');
            thisElem.addClass('searching-cat');

            //changing the placeholder of search input
            searchBox.attr('placeholder', "Search In " + thisElem.text());

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


        $(document).on('click', '.show-more-btn', function (e) {
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
    </script>
@endsection
