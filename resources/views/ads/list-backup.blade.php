@extends('layout.master')
@section('content')
    <style>
        .btnx {
            background: rgb(0, 0, 255, .3);
            font-size: 13px;
            padding: 5px;
            border-radius: 30px;
            color: #000;
            font-weight: bold;
            margin: 10px !important;
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
    <section class="desktop-view">
        <div class="container">
            <div class="row">
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
                                        <div class="col-md-12"><span style="font-size: 11px;color:#000;">UAE</span></div>
                                    </a>
                                </div>
                                <div class="col" style="border-right:2px solid #eee;" id="catArea">
                                    <a data-toggle="collapse" href="#multiCollapseExample2"
                                       role="button" aria-expanded="false"
                                       aria-controls="multiCollapseExample2"
                                       style="color:#000;">
                                        <div class="col-md-12"><span style="font-size: 14px;"><b>Category</b></span></div>
                                        <div class="col-md-12"><input type="text"
                                                                      style="font-size: 11px;color:#000;border:0px;"
                                                                      placeholder="Search"></div>
                                    </a>
                                </div>
                                <div class="col" style="border-right:2px solid #eee;" id="neighborhoodArea">
                                    <a data-toggle="collapse" href="#multiCollapseExample3"
                                       role="button" aria-expanded="false"
                                       aria-controls="multiCollapseExample3"
                                       style="color:#000;">
                                        <div class="col-md-12"><span style="font-size: 14px;"><b>Neighborhood</b></span>
                                        </div>
                                        <div class="col-md-12"><input type="text"
                                                                      style="font-size: 11px;color:#000;border:0px;"
                                                                      placeholder="Search"></div>
                                    </a>
                                </div>
                                <div class="col" style="border-right:2px solid #eee;" id="priceArea">
                                    <a data-toggle="collapse" href="#multiCollapseExample4"
                                       role="button" aria-expanded="false"
                                       aria-controls="multiCollapseExample4"
                                       style="color:#000;">
                                        <div class="col-md-12"><span style="font-size: 14px;"><b>Price (AED)</b></span>
                                        </div>
                                        <div class="col-md-12"><span style="font-size: 11px;color:#000;">Select</span></div>
                                    </a>
                                </div>
                                <div class="col" id="filtersArea">
                                    <a data-toggle="collapse" href="#multiCollapseExample5"
                                       role="button" aria-expanded="false"
                                       aria-controls="multiCollapseExample5"
                                       style="color:#000;">
                                        <div class="col-md-12"><span style="font-size: 14px;"><b>Filters</b></span></div>
                                        <div class="col-md-12"><span style="font-size: 11px;color:#000;">Keyword, Condition etc</span>
                                        </div>
                                    </a>
                                </div>
                                <!-- <div class="col-md-2">
                                1
                                </div> -->
                            </div>
                    </form>
                </div>
            </div>
            <!----------->
            <div class="row">
                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample1"
                         style="box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px;width:240px;position:absolute;z-index:1;background-color: white;width:100%;">
                        <!-- <div class="card card-body"> -->
                        <div class="col-md-12 mx-auto">
                            <div class="row">
                                <div style="margin-top: 10px;"><a href="" class="btnx">Dubai</a></div>
                                <div style="margin-top: 10px;"><a href="" class="btnx">All Cities</a></div>
                                <div style="margin-top: 10px;"><a href="" class="btnx">Abu Dhabi</a></div>
                                <div style="margin-top: 10px;"><a href="" class="btnx">Ras Al Khaiman</a></div>
                                <div style="margin-top: 10px;"><a href="" class="btnx">Sharjah</a></div>
                                <div style="margin-top: 10px;"><a href="" class="btnx">Fujairah</a></div>
                                <div style="margin-top: 10px;"><a href="" class="btnx">Ajman</a></div>
                                <div style="margin-top: 10px;"><a href="" class="btnx">Umm Al Quwain</a></div>
                                <div style="margin-top: 10px;"><a href="" class="btnx">Al Ain</a></div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12 mx-auto" style="margin-top: 20px;margin-bottom:20px;">
                            <a class="btn form-control " style="background: #0000FF;color:#fff;font-size:13px;">Apply
                                Filters</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample2"
                         style="box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px;position:absolute;z-index:1;background-color: white;width:100%;">
                        <div style="max-height: 170px !important;  overflow-y: scroll;">
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample3"
                         style="box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px;position:absolute;z-index:1;background-color: white;width:100%;">
                        <div style="max-height: 170px !important;  overflow-y: scroll;">
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                            <p style="border-bottom: 1px solid #eee;padding:5px;">1</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample4"
                         style="box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px;position:absolute;z-index:1;background-color: white;width:100%;">
                        <div style="padding: 10px;">
                            <div class="col-md-12 mx-auto">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <label for="" style="font-size: 13px;">From</label><br/>
                                        <input type="text" placeholder="0" name=""
                                               style="width: 100px;border:1px solid #eee;padding:25px !important;"
                                               class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" style="font-size: 13px;">Upto</label><br/>
                                        <input type="text" placeholder="Any" name=""
                                               style="width: 100px;border:1px solid #eee;padding:25px !important;"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!----buttons----->
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-5 mx-auto" style="margin-top: 20px;margin-bottom:20px;">
                                        <a class="btn form-control "
                                           style="border:1px solid #0000FF;color:#0000FF;font-size:13px;">Cancel</a>
                                    </div>
                                    <div class="col-md-7 mx-auto" style="margin-top: 20px;margin-bottom:20px;">
                                        <a class="btn form-control "
                                           style="background: #0000FF;color:#fff;font-size:13px;">Apply Filters</a>
                                    </div>
                                </div>
                            </div>
                            <!----buttons----->
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample5"
                         style="box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 4px;position:absolute;z-index:1;background-color: white;width:100%;">
                        <div style="padding: 10px;max-height: 220px !important;  overflow-y: scroll;">

                            <div class="col-md-12 mx-auto" style="margin-top: 10px;">
                                <h6 style="font-weight: bold;">Keyword</h6>
                                <input type="text" class="form-control" name="" placeholder=" Enter Keywords"
                                       style="padding: 15px;border:1px solid #eee;border-radius:3px;">
                            </div>
                            <div class="col-md-12 mx-auto" style="margin-top: 10px;">
                                <h6 style="font-weight: bold;">Condition</h6>
                                <div class="row">
                                    <div style="margin-top: 10px;"><a href="" class="btnx">New</a></div>
                                    <div style="margin-top: 10px;"><a href="" class="btnx">Pre Owned</a></div>
                                    <div style="margin-top: 10px;"><a href="" class="btnx">Scrap</a></div>
                                    <div style="margin-top: 10px;"><a href="" class="btnx">Ras Al Khaiman</a></div>
                                    <div style="margin-top: 10px;"><a href="" class="btnx">Refurbished</a></div>
                                </div>
                            </div>

                            <div class="col-md-12 mx-auto" style="margin-top: 10px;">
                                <h6 style="font-weight: bold;">Warranty</h6>
                                <div class="row">
                                    <div style="margin-top: 10px;"><a href="" class="btnx"> Yes </a></div>
                                    <div style="margin-top: 10px;"><a href="" class="btnx"> No </a></div>
                                    <div style="margin-top: 10px;"><a href="" class="btnx">Does not apply</a></div>
                                </div>
                            </div>

                            <div class="col-md-12 mx-auto" style="margin-top: 10px;">
                                <h6 style="font-weight: bold;">Ads Posted</h6>
                                <div class="row">
                                    <div style="margin-top: 10px;"><a href="" class="btnx">Any time</a></div>
                                    <div style="margin-top: 10px;"><a href="" class="btnx">Today</a></div>
                                    <div style="margin-top: 10px;"><a href="" class="btnx">Withen 3 days</a></div>
                                    <div style="margin-top: 10px;"><a href="" class="btnx">Withen 1 week</a></div>
                                    <div style="margin-top: 10px;"><a href="" class="btnx">Withen 2 weeks</a></div>
                                </div>
                            </div>

                            <div class="col-md-12 mx-auto" style="margin-top: 10px;">
                                <h6 style="font-weight: bold;">Ads Posted</h6>
                                <div style="margin-top: 10px;font-size:13px;"><input type="checkbox" name=""
                                                                                     style="padding: 10px;"> <span> Other Filters</span>
                                </div>
                                <div style="margin-top: 5px;font-size:13px;"><input type="checkbox" name=""
                                                                                    style="padding: 10px;"> <span> Show ads in English only</span>
                                </div>
                                <div style="margin-top: 5px;font-size:13px;"><input type="checkbox" name=""
                                                                                    style="padding: 10px;"> <span> Show ads with photos only</span>
                                </div>
                                <div style="margin-top: 5px;font-size:13px;"><input type="checkbox" name=""
                                                                                    style="padding: 10px;"> <span> Show ads by verified users</span>
                                </div>
                            </div>
                            <hr>
                            <!----buttons----->
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-5 mx-auto" style="margin-top: 20px;margin-bottom:20px;">
                                        <a class="btn form-control "
                                           style="border:1px solid #0000FF;color:#0000FF;font-size:11px;">Cancel</a>
                                    </div>
                                    <div class="col-md-7 mx-auto" style="margin-top: 20px;margin-bottom:20px;">
                                        <a class="btn form-control "
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
                        <h3><b> {{ $subcategory_name }} <span class="text-muted">•{{ $ads->count() }} Ads</span></b></h3>
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
                                <div  style="position:absolute;border:0px solid red;width:100%;">
                                <div class="row">
                                    <div>
                                             <button style="font-size: 11px;background-color:#eee;color:#0000FF;font-weight:bold;padding:5px;border:0px;border-radius:5px;margin:5px 0px 0px 17px;">
                                            <i class="fa fa-check-circle"></i> Verified User
                                            </button>
                                    </div>
                                    <div style="margin-left:100px;">
                                    <span>
                                    <a href="#"> <i class="fa fa-share" style="color:white;"></i></a>
                                    <a href="#"> <i class="fa fa-heart-o" style="color: white;"></i></a>
                                    </span>
                                </div>
                                </div>
                                <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:150px;">
                                    <i class="fa fa-envelope" style="color:white;"></i><span class="text-white">1</span>
                                </div>
                                </div>
                                    <a href="{{env('BASE_URL') . 'ads/detail/' . $ad->id}}">
                                        <div class="img" style="background-image:url({{ $ad->main_image_url }});height:180px;width:100%;border-radius:10px;">
                                            <div class="row" style="display:none;">
                                                <div class="col-md-12" style="display:none;">
                                                    <div class="row">
                                                        <div class="col-md-7 col-6" style="margin:5px;">
                                                            <button style="font-size: 11px;background-color:#eee;color:#0000FF;font-weight:bold;padding:5px;border:0px;border-radius:5px;;">
                                                                <i class="fa fa-check-circle"></i> Verified User
                                                            </button>
                                                        </div>
                                                        <div class="col-md-4 col-4" style="margin:5px;">
                                                            <span>
                                                                <i class="fa fa-share" style="color:white;"></i>
                                                                <i class="fa fa-heart-o" style="color: white;"></i>
                                                           </span>
                                                        </div>
                                                        <div class="col-md-7 col-6" style="margin:5px;position:absolute;top:150px;">
                                                            <i class="fa fa-envelope" style="color:white;"></i><span class="text-white">1</span>
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
                                                            style="font-size:11px;font-weight:bold;background:#eee;"><span>AGE</span><br/>Brand
                                                        New
                                                    </button> &nbsp;
                                                </div>
                                                <div>
                                                    <button class="btn"
                                                            style="font-size:11px;font-weight:bold;background:#eee;"><span>USAGE</span><br/>Never
                                                        Used
                                                    </button> &nbsp;
                                                </div>
                                                <div>
                                                    <button class="btn"
                                                            style="font-size:11px;font-weight:bold;background:#eee;"><span>CONDITION</span><br/>Flawless
                                                    </button> &nbsp;
                                                </div>
                                            </div>
                                            <div>&nbsp;</div>
                                            <p style="font-size:11;"><i class="fa fa-map-marker"></i> {{ $ad->location_name }}</p>
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


        $(document).ready(function () {
            $("#cityArea a").click(function () {
                $("#multiCollapseExample1").show();
            });


            $("#catArea a").click(function () {
                $("#multiCollapseExample2").toggle();
            });


            $("#neighborhoodArea a").click(function () {
                $("#multiCollapseExample3").toggle();
            });


            $("#priceArea a").click(function () {
                $("#multiCollapseExample4").toggle();
            });


            $("#filtersArea a").click(function () {
                $("#multiCollapseExample5").toggle();
            });
        });

        $(document).mouseup(function (e) {
            $('#multiCollapseExample1').hide();
            $('#multiCollapseExample2').hide();
            $('#multiCollapseExample3').hide();
            $('#multiCollapseExample4').hide();
            $('#multiCollapseExample5').hide();
            // var container = $("#multiCollapseExamplex1");
            // if(!container.is(e.target) &&
            // container.has(e.target).length === 0) {
            //     container.hide();
            // }
        });
    </script>
@endsection
<!-- multiCollapseExample1 -->
