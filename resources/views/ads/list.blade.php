@extends('layout.master')
@section('content')
    <style>
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

        .btnx:hover {
            background-color: rgb(0, 0, 255, .3);
        }

        .filter-options-list {
            color: black;
            border-bottom: 1px solid #eee;
            padding: 10px 12px;
            margin-bottom: 0px !important;
        }

        .filter-options-list:hover {
            color: black;
            background-color: #e6e6e6;
            cursor: pointer;
        }

        .multi-collapse {
            min-width: 340px;
            margin-top: 10px;
        }

        .active {
            background-color: rgb(0, 0, 255, .3);
            color: white;
        }


    </style>
    <!--------ad area --------->
    <section>
        <!-- <div class="container slider-area"> -->
        <div class="cont-w slider-area desktop-view">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('images/hero_image_7.jpeg')}}" alt="Los Angeles" width="100%" height="257">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/hero_image_7.jpeg')}}" alt="Chicago" width="100%" height="257">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----new filter----------->
    @php
        $subcategories_for_filter = \App\Helpers\RecordHelper::getSubCategories($category_id);
        $cities_for_filter = \App\Helpers\RecordHelper::getCities(request()->country);
        $selected_city_name = $cities_for_filter->count() > 0 && !empty(request()->city) ? $cities_for_filter->where('id', request()->city)->first()->name : 'All';
    @endphp
    <section class="desktop-view">
        <div class="container">
            <div class="col-lg-12 col-xl-12 col-12 col-md-12">
                <form class="form"
                      style=" box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px;border-radius: 10px;border: 1px solid rgb(194, 196, 199);padding:3px;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col" style="border-right:2px solid #eee;" id="cityArea">
                                <a data-toggle="collapse" href="#multiCollapseExample1"
                                   role="button" aria-expanded="false"
                                   aria-controls="multiCollapseExample1"
                                   style="color:#000;">
                                    <div class="col-md-12"><span style="font-size: 14px;"><b>City</b></span></div>
                                    <div class="col-md-12"><span
                                            style="font-size: 11px;color:#000;">{{ $selected_city_name }}</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col" style="border-right:2px solid #eee;" id="catArea">
                                <a data-toggle="collapse" href="#multiCollapseExample2"
                                   role="button" aria-expanded="false"
                                   aria-controls="multiCollapseExample2"
                                   style="color:#000;">
                                    <div class="col-md-12"><span style="font-size: 14px;"><b>Category</b></span></div>
                                    <div class="col-md-12"><input class="category-input"
                                                                  value="{{ $subcategory_name }}" type="text" readonly
                                                                  style="font-size: 11px;color:#000;border:0px;"
                                                                  placeholder="Select Category"></div>
                                </a>
                            </div>
                            <div class="col" style="border-right:2px solid #eee;" id="priceArea">
                                <a data-toggle="collapse" href="#multiCollapseExample4"
                                   role="button" aria-expanded="false"
                                   aria-controls="multiCollapseExample4"
                                   style="color:#000;">
                                    <div class="col-md-12"><span style="font-size: 14px;"><b>Price (AED)</b></span>
                                    </div>
                                    <div class="col-md-12"><span
                                            style="font-size: 11px;color:#000;">{{ $from || $to ? $from . '-' . $to : 'Select'}}</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col" id="filtersArea">
                                <a data-toggle="collapse" href="#multiCollapseExample5"
                                   role="button" aria-expanded="false"
                                   aria-controls="multiCollapseExample5"
                                   style="color:#000;">
                                    <div class="col-md-12"><span style="font-size: 14px;"><b>Filters</b></span></div>
                                    <div class="col-md-12"><span
                                            style="font-size: 11px;color:#000;">{{ $keyword ? $keyword : 'Keywords'}}</span>
                                    </div>
                                </a>
                            </div>
                            <!-- <div class="col-md-2">
                            1
                            </div> -->
                        </div>
                </form>
            </div>
            <!----------->
            <div class="row">
                <div class="col">
                    <div class="collapse multi-collapse multiCollapse" id="multiCollapseExample1"
                         style="box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px;width:240px;position:absolute;z-index:1;background-color: white;width:100%;">
                        <!-- <div class="card card-body"> -->
                        <div style="max-height: 170px !important;  overflow-y: scroll;">
                            <p city-id="" class="city-list filter-options-list">All</p>
                            @foreach($cities_for_filter as $city)
                                <p city-id="{{ $city->id }}" class="city-list filter-options-list">
                                    {{ $city->name }}
                                </p>
                            @endforeach
                        </div>
                        {{--                        <hr>--}}
                        {{--                        <div class="col-md-12 mx-auto" style="margin-top: 20px;margin-bottom:20px;">--}}
                        {{--                            <a class="btn form-control " style="background: #0000FF;color:#fff;font-size:13px;">Apply--}}
                        {{--                                Filters</a>--}}
                        {{--                        </div>--}}
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
                                        <label for="" style="font-size: 13px;">From</label><br/>
                                        <input type="number" placeholder="0" value="{{ $from }}" id="from"
                                               style="width: 140px;border:1px solid #eee;padding:25px !important;"
                                               class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" style="font-size: 13px;">Upto</label><br/>
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
                                           style="background: #0000FF;color:#fff;font-size:13px;">Apply Filters</a>
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
                                           style="background: #0000FF;color:#fff;font-size:11px;">Apply Filters</a>
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
            <div class="col-lg-12 col-md-12 mb-30 col-12 m-10">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <h3><b> {{ $subcategory_name }} <span class="text-muted">•{{ $ads->count() }} Ads</span></b>
                        </h3>
                    </div>
                    {{--                    <div class="col-lg-3 col-md-3" style="border:0px solid red;">--}}
                    {{--                        <div class="row">--}}
                    {{--                            <div class="cat_btn"--}}
                    {{--                                 style="margin:7px 7px;border:0px solid red;position:relative;left:165px;">--}}
                    {{--                                <div>--}}
                    {{--                                    <div class="row" style="border: 1px solid #E0E1E3;border-radius:6px;font-size:13px;text-align:center;width:120px;">--}}
                    {{--                                        <div style="margin-left: 10px;">--}}
                    {{--                                            <i class="fa fa-chevron-up" style="position:relative;top:5px;"></i>--}}
                    {{--                                            <br/>--}}
                    {{--                                            <i class="fa fa-chevron-down" style="position:relative;bottom:5px;"></i>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div style="margin-top: 10px;margin-left:10px;">--}}
                    {{--                                            <span>Sort: <b>Default</b></span></div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
        </div>
    </section>
    <section>
        <div class="container">
            {{--            <div class="col-lg-12 col-md-12 mb-30 col-12 m-10">--}}
            {{--                <div class="row">--}}
            {{--                    <div class="cat_btn" style="margin:7px 5px;">--}}
            {{--                        <button class="btn" style="border: 2px solid #eee;border-radius:50px;font-size:12px;"><a href=""--}}
            {{--                                                                                                                 style="color:#0000FF;">Business--}}
            {{--                                for sale <span style="color:#000;"><b>(122)</b></span> </a></button>--}}
            {{--                    </div>--}}
            {{--                    <div class="cat_btn" style="margin:7px 5px;">--}}
            {{--                        <button class="btn" style="border: 2px solid #eee;border-radius:50px;font-size:12px;"><a href=""--}}
            {{--                                                                                                                 style="color:#0000FF;">Business--}}
            {{--                                Services <span style="color:#000;"><b>(122)</b></span> </a></button>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-12">
                        @foreach($ads as $ad)
                            <div class="row">
                                <!-----content----->

                                <div class="col-lg-4 col-md-4 col-12" style="margin-bottom:10px;">
                                    <div style="position:absolute;border:0px solid red;width:100%;">
                                        <div class="row">
                                            <div>
                                                <button
                                                    style="font-size: 11px;background-color:#eee;color:#0000FF;font-weight:bold;padding:5px;border:0px;border-radius:5px;margin:5px 0px 0px 17px;">
                                                    <i class="fa fa-check-circle"></i> Verified User
                                                </button>
                                            </div>
                                            <div style="margin-left:100px;">
                                    <span>
                                    <a> <i class="fa fa-copy share-btn" ad-id="{{ $ad->id }}" title="Copy Ad link"
                                           style="color:white;"></i></a>
                                    <a> <i class="fa favourite-btn {{ $ad->is_favourite ? 'fa-heart' : 'fa-heart-o' }}"
                                           is-favourite="{{ $ad->is_favourite ? '1' : '0' }}" ad-id="{{ $ad->id }}"
                                           style="color: white;"></i></a>
                                    </span>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:150px;">
                                            <i class="fa fa-envelope" style="color:white;"></i><span class="text-white">1</span>
                                        </div>
                                    </div>
                                    <a href="{{env('BASE_URL') . 'ads/detail/' . $ad->id}}">
                                        <div class="img"
                                             style="background-image:url({{ $ad->main_image_url }});height:180px;width:100%;border-radius:10px;">
                                            <div class="row" style="display:none;">
                                                <div class="col-md-12" style="display:none;">
                                                    <div class="row">
                                                        <div class="col-md-7 col-6" style="margin:5px;">
                                                            <button
                                                                style="font-size: 11px;background-color:#eee;color:#0000FF;font-weight:bold;padding:5px;border:0px;border-radius:5px;;">
                                                                <i class="fa fa-check-circle"></i> Verified User
                                                            </button>
                                                        </div>
                                                        <div class="col-md-4 col-4" style="margin:5px;">
                                                            <span>
                                                                <i class="fa fa-share" style="color:white;"></i>
                                                                <i class="fa fa-heart-o" style="color: white;"></i>
                                                           </span>
                                                        </div>
                                                        <div class="col-md-7 col-6"
                                                             style="margin:5px;position:absolute;top:150px;">
                                                            <i class="fa fa-envelope" style="color:white;"></i><span
                                                                class="text-white">1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12">
                                    <div class="row">
                                        <div class="col-lg-10 col-md-10  col-9">
                                            <h5 style="font-size: 15px;font-weight:bold;">{{ $ad->title ?? 'Heading N/A' }}</h5>
                                            <p style="font-size: 13px;">{{ $ad->category_name . '-' . $ad->subcategory_name }}</p>
                                            <h3 style="font-weight: bold;font-size:14;">{{ \App\Helpers\SiteHelper::priceFormatter($ad->price) }}</h3>
                                            <div class="row">
                                                <div>
                                                    <button class="btn"
                                                            style="font-size:11px;font-weight:bold;background:#eee;margin:2px;">
                                                        <span>AGE</span><br/>Brand
                                                        New
                                                    </button> &nbsp;
                                                </div>
                                                <div>
                                                    <button class="btn"
                                                            style="font-size:11px;font-weight:bold;background:#eee;margin:2px;">
                                                        <span>USAGE</span><br/>Never
                                                        Used
                                                    </button> &nbsp;
                                                </div>
                                                <div>
                                                    <button class="btn"
                                                            style="font-size:11px;font-weight:bold;background:#eee;margin:2px;">
                                                        <span>CONDITION</span><br/>Flawless
                                                    </button> &nbsp;
                                                </div>
                                            </div>
                                            <div>&nbsp;</div>
                                            <p style="font-size:11;"><i
                                                    class="fa fa-map-marker"></i> {{ $ad->location_name }}</p>
                                        </div>
                                        <div class="col-lg-2 col-md-2 mb-30 col-3">
                                            <button class="btn btn-warning"
                                                    style="font-size:11px;color:white;font-weight:bold;">PREMIUM
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-----content----->
                                <hr style="width: 100%; height:3px; color:#eee;background:#eee;">
                            </div>
                        @endforeach
                    </div>
                    <!--  add area -->
                    <div class="col-lg-4 col-md-8 mb-30 col-12">
                        <img src="{{asset('images/hero_image_7.jpeg')}}" alt="Los Angeles" width="100%" height="200"
                             style="margin-bottom: 10px;">
                    </div>
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
