@extends('layout.master')
@section('content')
    <!--------ad area --------->
    <section>
        <!-- <div class="container slider-area"> -->
        <div class="cont-w slider-area desktop-view">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ $ad->main_image_url }}" alt="Los Angeles" width="100%" height="257">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/hero_image_7.jpeg')}}" alt="Chicago" width="100%" height="257">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section>
        <div class="cont-w" style="margin-bottom: 7px;">
            {{--ad area --}}
        <img src="{{ $ad->main_image_url }}" alt="Los Angeles" width="100%" height="257">
        </div>
    </section> -->

    <section>
        <div class="cont-w">
            <div class="col" style="border:0px solid red;">
                <div class="row">
                    <div class="col" style="border:0px solid red;">
                        <div class="row">
                            <h3 style="border:0px solid red;"><b>{{ $ad->title ?? 'Title N?A' }}</b></h3>
                        </div>
                        <div class="row">
                            <span class="text-muted"
                                  style="font-size: 12px;">• Posted {{ $ad->created_at_time_diff }}</span>
                        </div>
                    </div>
                    <div class="col" style="text-align:right;">
                        <div class="row text-right" style="border:0px solid red;">
                            <div
                                style="font-weight:bold;font-size:25px;text-align:right;border:0px solid red;width:100%;">
                                <a href=""
                                   style="color: #0000FF;font-weight:bold;">{{ \App\Helpers\SiteHelper::priceFormatter($ad->price) }}
                                    8798987</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- <section>
        <div class="cont-w">
            <div class="col-lg-12 col-md-12 col-12" style="border:0px solid red;">
                <div class="row">
                    <div class="col-lg-10 col-md-10" style="border:0px solid red;">
                    <div class="row">
                        <h3 style="border:0px solid red;"><b>{{ $ad->title ?? 'Title N?A' }}dd</b></h3>
                        </div>
                        <div class="row">
                        <span class="text-muted" style="font-size: 12px;">• Posted {{ $ad->created_at_time_diff }}</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2">
                    <div class="row text-center" style="border:0px solid red;">
                        <h4 style="font-weight:bold;font-size:25px;text-align:right;"><a href="" style="color: #0000FF;font-weight:bold;">{{ \App\Helpers\SiteHelper::priceFormatter($ad->price) }}8798987</a></h4>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section> -->

    <section>
        <div class="cont-w">
            <div class="col-lg-12 col-md-12 mb-30 col-12 mt-10" style="border:0px solid red;">
                <div class="row">
                    <div class="cat_btn" style="margin:7px 5px;">
                        <a href="{{ env('BASE_URL') . 'home' }}" style="color:#0000FF;font-size:12px;">Home</a>
                        <i class="fa fa-chevron-right" style="font-size:11px;"></i>
                    </div>
                    {{--                    <div class="cat_btn" style="margin:7px 5px;">--}}
                    {{--                        <a href="{{ env('BASE_URL') . 'ads/category/' . $ad->category_id}}" style="color:#0000FF;font-size:12px;">{{ $ad->category_name }}</a>--}}
                    {{--                        <i class="fa fa-chevron-right" style="font-size:11px;"></i>--}}
                    {{--                    </div>--}}
                    <div class="cat_btn" style="margin:7px 5px;">
                        <a href="{{ env('BASE_URL') . 'ads/' . $ad->subcategory_id}}"
                           style="color:#0000FF;font-size:12px;">{{ $ad->subcategory_name }}</a>
                        <i class="fa fa-chevron-right" style="font-size:11px;"></i>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="cont-w" style="border:0px solid red;">
            <div class="col-lg-12 col-md-12 col-12" style="border:0px solid red;">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-12" style="border:0px solid red;">
                        <div class="row">
                            <!-----content----->
                            <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;width:800px;">
                                <span style="font-size: 13px;float:right;position:relative;right:70px;">
                                    <i class="fa favourite-btn {{ $ad->is_favourite ? 'fa-heart' : 'fa-heart-o' }}"
                                       ad-id="{{ $ad->id }}"></i> Favourite
                                    <i class="fa fa-share share-btn" ad-id="{{ $ad->id }}" title="Copy Ad link"></i> Share
                                </span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
                                <div class="column small-11 small-centered">
                                    <div class="cSlider cSlider--single">
                                        @foreach($ad->attachments as $attachment)
                                            <div class="cSlider__item">
                                                <h2>
                                                    <img src="{{ $attachment->listing_image_url }}" alt="Listing Image"
                                                         width="100%" height="250"
                                                         style="margin-bottom: 10px;height:180px;">
                                                </h2>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="cSlider cSlider--nav">
                                        @foreach($ad->attachments as $attachment)
                                            <div class="cSlider__item">
                                                <img src="{{ $attachment->listing_image_url }}" alt="Listing Image"
                                                     width="100%" height="300" style="height:60px;">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;width:800px;">
                                <span style="font-size: 13px;float:right;position:relative;right:70px;">( {{ $ad->attachments->count() }} Photos )</span>
                            </div>
                            <!-----content----->
                            <hr style="width: 100%; height:3px; color:#eee;background:#eee;">
                            <!---------->
                            <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
                                <h4><b>Description</b></h4>
                                <p style="font-size: 14px;">{{ $ad->description }}</p>

                            </div>
                            <!-----add----->
                            <hr style="width: 100%; height:3px; color:#eee;background:#eee;">
                            <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
                                <h4><b>Location</b></h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 co-12">
                                        <div style="border-radius:5px;">
                                            <h6 style="text-align: left;font-size:13px;font-weight:bold;">
                                                <span><i class="fa fa-map-marker"></i> {{ $ad->location_name }}</span>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 co-12" style="padding:10px;">
                                        <div style="border-radius:5px;">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14693.345969238148!2d72.60770128225292!3d22.974650667313718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8f5590ffcd7d%3A0x4b0554bef6153a98!2sGhodasar%2C%20Ahmedabad%2C%20Gujarat%2C%20India!5e0!3m2!1sen!2s!4v1691040806730!5m2!1sen!2s"
                                                width="370" height="150" style="border:0;" allowfullscreen=""
                                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="width: 100%; height:3px; color:#eee;background:#eee;">
                            <div style="font-weight: bold;font-size:16px;">
                                Is there an issue?
                                @php $report_text = "Report this ad"; $report_class = "report-ad-btn"; @endphp
                                @if ($ad->is_reported_by_this_user)
                                    @php $report_text = "Ad Reported"; $report_class = ""; @endphp
                                @endif
                                <a class="{{ $report_class }}" ad-id="{{ $ad->id }}"
                                   title="{{ $report_text }}"
                                   style="color: #0000FF;">
                                    {{ $report_text }}
                                </a>
                            </div>
                            <hr style="width: 100%; height:3px; color:#eee;background:#eee;">
                            <!---------------------->
                        </div>
                    </div>
                    <!--  desktop view -->
                    <div class="col-lg-4 col-md-4 col-12 desktop-view" style="border:0px solid red;">
                        <div class="row">
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;</div>
                            <div class="col-lg-12 col-md-12 col-12" style="border:0px solid red;margin-right:-30px;">
                                <div class="inner"
                                     style="border: 2px solid #eee;border-radius:5px;margin:0px 0px 10px 0px;padding:15px;">
                                    <p class="text-muted" style="font-size: 13px;">Posted by</p>
                                    <p class="text-muted" style="font-size: 15px;">
                                        <b>{{ $ad->created_by_user->name; }}</b></p>
                                    <span style="font-size: 11px;padding:5px;border-radius:7px;color:white;"
                                          class="bg-success"><i class="fa fa-check-circle"></i> VERIFIED USER</span>
                                    <p class="text-muted" style="font-size: 15px;"><b>Joined
                                            on {{ $ad->created_by_user->created_at_formatted }}</b></p>
                                    <p class="text-muted" style="font-size: 15px;">
                                        <b>{{ $ad->created_by_user->active_ads_count }} items live</b></p>
                                    <div style="text-align: center;">
                                        <a href="" class="btn btn-lg"
                                           style="background-color: #0000FF;color:white;font-size:15px;padding:7px 90px;">
                                            <b><i class="fa fa-comment" style="color:white;"></i> Chat with Seller</b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- ad area -->
                            @foreach($ad->attachments as $attachment)
                                <div class="col-lg-12 col-md-12 col-12">
                                    <img src="{{ $attachment->listing_image_url }}" alt="Listing Image" width="100%"
                                         height="150" style="margin-bottom: 10px;">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!--  mobile view -->
                    <div class="col-12 mobile-view" style="border:0px solid red;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12" style="border:0px solid red;margin-right:-30px;">
                                <div class="inner"
                                     style="border: 2px solid #eee;border-radius:5px;margin:0px 0px 10px 0px;padding:15px;">
                                    <p class="text-muted" style="font-size: 13px;">Posted by</p>
                                    <p class="text-muted" style="font-size: 15px;">
                                        <b>{{ $ad->created_by_user->name; }}</b></p>
                                    <span style="font-size: 11px;padding:5px;border-radius:7px;color:white;"
                                          class="bg-success"><i class="fa fa-check-circle"></i> VERIFIED USER</span>
                                    <p class="text-muted" style="font-size: 15px;"><b>Joined
                                            on {{ $ad->created_by_user->created_at_formatted }}</b></p>
                                    <p class="text-muted" style="font-size: 15px;">
                                        <b>{{ $ad->created_by_user->active_ads_count }} items live</b></p>
                                    <div style="text-align: center;">
                                        <a href="" class="btn btn-lg"
                                           style="background-color: #0000FF;color:white;font-size:15px;padding:10px 300px:">
                                            <b><i class="fa fa-comment" style="color:white;"></i> Chat with Seller</b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- ad area -->
                            @foreach($ad->attachments as $attachment)
                                <div class="col-lg-12 col-md-12 col-12">
                                    <img src="{{ $attachment->listing_image_url }}" alt="Listing Image" width="100%"
                                         height="150" style="margin-bottom: 10px;">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!---------------------->
                    <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
                        <h3><b>Similar Ads</b></h3>
                        <!------ad----->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                @php
                                    $similar_ads = \App\Helpers\RecordHelper::getAdsBySubcategory($ad->subcategory_id)->take(5);
                                @endphp
                                @foreach($similar_ads as $similar_ad)
                                    <!----------->
                                        <div class="col-lg-2 col-md-2 col-6">
                                            <div class="inner">
                                                <a href="{{env('BASE_URL') . 'ads/detail/' . $similar_ad->id}}">
                                                    <div class="img"
                                                         style="background-image:url({{ $similar_ad->main_image_url }});height:180px;width:100%;border-radius:10px;">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-4 col-4"
                                                                         style="margin:5px;text-align:right;">
                                                                    <span
                                                                        style="float: right;position:relative;left:120px;">
                                                                     <i class="fa fa-heart-o" style="color: white;"></i>
                                                                   </span>
                                                                    </div>
                                                                    <div class="col-md-12 col-6"
                                                                         style="margin:5px;position:absolute;top:150px;">
                                                                        <i class="fa fa-envelope"
                                                                           style="color:white;"></i>
                                                                        <span class="text-white">1</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div
                                                    style="font-size: 14px;font-weight:bold;">{{ $similar_ad->title ?? 'Title N/A' }}</div>
                                                <div style="font-size: 11px;">{{ $similar_ad->subcategory_name }}</div>
                                                <div
                                                    style="font-size: 14px;font-weight:bold;">{{ \App\Helpers\SiteHelper::priceFormatter($similar_ad->price) }}</div>
                                            </div>
                                        </div>
                                        <!----------->
                                    @endforeach
                                </div>
                            </div>
                            <!-------->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------ad show------------->


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

        //report ad
        $(document).on('click', '.report-ad-btn', function () {
            var thisElem = $(this);

            $.ajax({
                url: api_url + 'listing/report-ad/' + thisElem.attr('ad-id'),
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        thisElem.removeAttr('ad-id');
                        thisElem.removeClass('report-ad-btn');
                        thisElem.text('Ad Reported');
                        thisElem.attr('title', 'Ad Reported');

                        showAlert('success', "Ad Reported Successfully!");

                    } else {
                        showAlert('error', "Ad could not be reported");
                    }
                },
                error: function (response) {
                    showAlert("error", "Request failed! Try login");
                }
            });

        });

    </script>


@endsection
