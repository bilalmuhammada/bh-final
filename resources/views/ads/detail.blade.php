@extends('layout.master')


@section('content')
<style>
/* Center and style the popup container */
.popup-container {
    position: fixed;
    z-index: 1000;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 400px; /* Adjust the width as needed */
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}
.lobibox-notify-success{
        width: 80px !important
    }
    .lobibox-notify-error{
        width: 80px !important
    }
/* Ensure spacing between radio buttons and labels */
.popup-container label {
    display: block;
    margin-bottom: 10px;
}

/* Style the input box (description field) */
.popup-container textarea {
    width: 100%;
    height: 80px;
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

/* Align the Close and Report buttons */
.popup-container .button-group {
    text-align: right;
}

.popup-container .button-group button {
    padding: 10px 20px;
    margin-left: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.popup-container .button-group .close-btn {
    background-color: #e74c3c;
    color: white;
}

.popup-container .button-group .report-btn {
    background-color: #3498db;
    color: white;
}



    .slick-slide{
        width: 285px !important;
        margin: 0px -30px !important;
    }
    .slick-slide img {
    width: 100% !important;
}
.slick-prev, .slick-next {
    top: 17% !important
}
.cSlider__item {
        width: 6rem !important;

    }
    .listing {
        padding: 7px 7px 7px 7px !important;
        /* margin-left: -63px; */
        width: 200px !important
    }
    
    #slider{
        margin: 0px 0px !important;

    }
    
    #slider_main{
width: 60rem !important;
    }
.slick-prev {
    opacity: 0.5;
    left: 25px !important
}
.slick-next {
    opacity: 0.5;
    right: 6px !important;
}
.slider:before {
    background-color: #fff !important;
}
.btn:hover{
    border: 1px solid blue !important;
}
.report-ad-btn{
    color: #ff3131 !important;

}
.report-ad-btn:hover{
    color: blue !important;

}
</style>
{{--        @dd($ad->toArray())--}}
    <!--------ad area --------->
    <section>
        <!-- <div class="container slider-area"> -->
        {{-- <div class="cont-w slider-area desktop-view">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ $ad->main_image_url }}" alt="Los Angeles5555" width="100%" height="270px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/hero_image_7.jpeg')}}" alt="Chicago" width="100%" height="270px">
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="cont-w slider-area desktop-view">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('images/slider-images/image2.jpg')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:10px;">
                    </div>
                    <div class="carousel-item ">
                        <img src="{{asset('images/slider-images/image1.JPG')}}" alt="Los Angelesyyyyyy" width="100%" height="257" style="height:310px;border-radius:10px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/slider-images/image2.JPG')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:10px;">
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('images/slider-images/image3.JPG')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:10px;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/slider-images/image4.JPG')}}" alt="Chicago" width="100%" height="257" style="height:310px;border-radius:10px;">
                    </div>
                </div>
            </div>
        </div>
       

    </section>
 

    <section>
        <div class="cont-w desktop-view" style="border-bottom:2px solid #eee;">
            <div class="col-lg-12 col-md-12 col-12" style="">
                <div class="row" style="margin-top: 7px;">
                    <div class="cat_btn" >
                        <a href="{{ env('BASE_URL') . 'home?country=' . request()->country . '&city=' . request()->city }}"
                           style="color:#0000FF;font-size:12px;">Home</a>
                        <i class="fa fa-chevron-right" style="font-size:11px;"></i>
                    </div>
                    <div class="cat_btn" style="margin:0px 5px;">
                        <a href="{{ env('BASE_URL') . 'ads/' . $ad->subcategory_id . '?country=' . request()->country . '&city=' . request()->city }}"
                           style="color:#0000FF;font-size:12px;">{{ $ad->subcategory_name }}</a>
                        <i class="fa fa-chevron-right" style="font-size:11px;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="cont-w desktop-view">
            <div class="col-md-12" style="border:0px solid red;">
                <div class="row">
                    <div class="col" style="border:0px solid red;">
                        <div class="row" style="margin-top: 12px;">
                            <h3 style="border:0px solid red;"><b>{{ $ad->title ?? 'Title N?A' }}</b></h3>
                        </div>
                        <div class="row">
                            <span class="text-muted"
                                  style="font-size: 12px;">Posted {{ $ad->created_at_time_diff }}</span>
                        </div>
                    </div>
                    <div class="col" style="text-align:right;">
                        <div class="row text-right" style="border:0px solid red;">
                            <div
                                style="font-weight:bold;font-size:25px;text-align:right;border:0px solid red;width:100%;">
                                <a href=""
                                   style="color: red;font-weight:bold;">{{ \App\Helpers\SiteHelper::priceFormatter($ad->price) }}
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mobile-view">
            <div class="col-md-12" style="border:0px solid red;">
                <div class="row">
                    <div class="col" style="border:0px solid red;">
                        <div class="row">
                            <h4 style="border:0px solid red;"><b>{{ $ad->title ?? 'Title N?A' }}</b></h4>
                        </div>
                        <div class="row">
                            <span class="text-muted"
                                  style="font-size: 12px; margin-left: 7px;">Posted {{ $ad->created_at_time_diff }}</span>
                        </div>
                    </div>
                    <div class="col" style="text-align:right;">
                        <div class="row text-right" style="border:0px solid red;">
                            <div
                                style="font-weight:bold;font-size:25px;text-align:right;border:0px solid red;width:100%;">
                                <a href=""
                                   style="color: red;font-weight:bold;">{{ \App\Helpers\SiteHelper::priceFormatter($ad->price) }}
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <section>

        <div class="container mobile-view">
            <div class="col-lg-12 col-md-12 mb-30 col-12 mt-10" style="border:0px solid red;">
                <div class="row">
                    <div class="cat_btn">
                        <a href="{{ env('BASE_URL') . 'home' }}" style="color:#0000FF;font-size:12px;">Home</a>
                        <i class="fa fa-chevron-right" style="font-size:11px;"></i>
                    </div>
                    {{--                    <div class="cat_btn" style="margin:7px 5px;">--}}
                    {{--                        <a href="{{ env('BASE_URL') . 'ads/category/' . $ad->category_id}}" style="color:#0000FF;font-size:12px;">{{ $ad->category_name }}</a>--}}
                    {{--                        <i class="fa fa-chevron-right" style="font-size:11px;"></i>--}}
                    {{--                    </div>--}}
                    <div class="cat_btn" style="margin:0px 5px;">
                        <a href="{{ env('BASE_URL') . 'ads/' . $ad->subcategory_id}}"
                           style="color:#0000FF;font-size:12px;">{{ $ad->subcategory_name }}</a>
                        <i class="fa fa-chevron-right" style="font-size:11px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" style="border:0px solid red;margin-left: 9.2rem;">
            <div class="col-lg-12 col-md-12 col-12" style="border:0px solid red;">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-12" style="border:0px solid red;">
                        <div class="row">
                            <!-----content----->
                            <div class="col-lg-12 col-md-12 col-12"
                                 style="margin-bottom:-30px;width:800px;border:0px solid green;position:relative;top:11px;z-index:1000;">
                                <span style="font-size: 13px;float:right;position:relative;right:30px;cursor:pointer;">
                                    <i class="fa favourite-btn {{ $ad->is_favourite ? 'fa-heart' : 'fa-heart-o' }}"
                                       is-favourite="{{ $ad->is_favourite ? '1' : '0' }}" ad-id="{{ $ad->id }}"
                                       style="padding:10px 13px;font-size:19px; border-radius:2px;"> </i>&nbsp;
                                    <i class="fa fa-share share-btn" ad-id="{{ $ad->id }}" title="Copy Ad link"
                                       style="font-size:19px;border-radius:2px;"></i>
                                </span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="column small-11 small-centered">
                                    <div class="cSlider cSlider--single" style="background-color:#eee; margin: 0px 0px !important;">
                                        @foreach($ad->attachments as $image)
                                            <div class="cSlider__item" id="slider_main">
                                                <!-- <h2> -->
                                                <img src="{{ $image->listing_image_url }}" alt="Listing Image"
                                                     width="100%" height="250"
                                                     style="height:320px;">
                                                <!-- </h2> -->
                                            </div>
                                           
                                        @endforeach
                                        <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:18rem; z-index: 2;">
                                            <i class="fa fa-image" style="color:black;"></i><span class="text-black" style="margin-left:9px">{{ $ad->images->count() }}</span>
                                        </div>
                                    </div>
                                    <div class="cSlider cSlider--nav">
                                        @foreach($ad->attachments as $image)
                                            <div class="cSlider__item" id="slider" style="margin-top:28px !important;">
                                                <img src="{{ $image->listing_image_url }}" alt="Listing Image11"
                                                     width="100%" height="300"
                                                     style="height:60px;border-radius:6px;">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        
                         
                        @if($ad->category_name==="Businesses for Sale")
                           
                        @include('ads.description_detail.business_for_sale');
                         
                        @elseif($ad->category_name==="Businesses for Rent")
                         
                        @include('ads.description_detail.business_for_rent');
                         

                        @elseif($ad->category_name==="Shares for Sale")
                         
                        @include('ads.description_detail.share_for_sale');

                        @elseif($ad->category_name==="Business Ideas")
                         
                        @include('ads.description_detail.business_idea');

                        
                        @elseif($ad->category_name==="Investors")
                         
                        @include('ads.description_detail.investor');

                        @elseif($ad->category_name==="Investors Required")
                         
                        @include('ads.description_detail.investor_required');
                        @elseif($ad->category_name==="Franchise Opportunities")
                         
                        @include('ads.description_detail.franchise_opp');
                        @elseif($ad->category_name==="Machinery & Supplies")
                         
                        @include('ads.description_detail.machinarySupplies');
                    
                        @endif


                        <hr style="border-color: #eee; width: 95%; margin:-9px 0px 0px 12px;">
                        <!---------->
                        <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
                            <h4><b>Products & Services Offered</b></h4>
                            <p style="font-size: 14px; margin-bottom: 7px;">{{ $ad->details->products_and_services_offered ?? '....' }} this is one line</p>
                        </div>
                        <hr style="border-color: #eee; width: 95%; margin:-9px 0px 0px 12px;">
                        <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
                            <h4><b>Description</b></h4>
                            <p style="font-size: 14px;margin-bottom: 7px;">{{ $ad->description }} this is description</p>
                        
                        </div>
                        <hr style="border-color: #eee; width: 95%; margin:-9px 0px 0px 12px;">
                        <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
                
                                <h4><b>Files</b></h4>
                                <p style="font-size: 14px;">
                                    <embed class="@if(empty($ad->document_listing_approval_status) || $ad->document_listing_approval_status == 'rejected') blur-image @endif" src="https://www.buds.com.ua/images/Lorem_ipsum.pdf"
                                           type="application/pdf" width="200px" height="200px"/>
                                    <br/>
                                    <div class="btn-next">
                                        @if(empty($ad->document_listing_approval_status) || $ad->document_listing_approval_status == 'rejected')
                                            <a href="" class="btn document-download-request">Send Request</a>
                            @elseif($ad->document_listing_approval_status == 'approved')
                                            <a href="#" class="btn download-document">Download</a>
                                @else
                                    <p class="approval-status">Waiting for approval</p>
                                @endif

                                <p class="approval-status" style="display: none">Waiting for approval</p>
                            </div>
                            </p>
                        </div>
                      
                        <hr style="border-color: #eee; width: 95%; margin:-9px 0px 0px 12px;">
                        <div class="col-lg-12 col-md-12 col-12" >
                            <h4><b>Location</b></h4>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6">
                                    {{-- <div style="border-radius:5px;"> --}}
                                        <h6 style="text-align: left;font-size:13px;font-weight:bold;">
                                          <i class="fa fa-map-marker text-danger"></i>   <span style="margin-left: 9px;">{{ $ad->location_name }} This is location</span>
                                        </h6>
                                    {{-- </div> --}}
                                </div>
                                <div class="col-lg-6 col-md-6 col-6">
                                    {{-- <div style="border-radius:5px;"> --}}
                                        <div style="width:370px; height:66px; border:0;bottom: 1.8rem;left: 2.2rem;" id="map"></div>
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <hr style="width: 100%; height:3px; color:#eee;background:#eee;"> --}}
                        <hr style="border-color: #eee; width: 95%; margin:-9px 0px 0px 12px;">
                        <div style="font-weight: bold;font-size:20px;margin-top: 6px;margin-left: 12px;">
                            Is there an issue?

                            @php $report_text = "Report this Ad"; $report_class = "report-ad-btn"; @endphp
                            @if ($ad->is_reported_by_this_user)
                                @php $report_text = "Ad Reported"; $report_class = "report-ad-btn"; @endphp
                            @endif
                            <a class="{{ $report_class }}" ad-id="{{ $ad->id }}"
                               title="{{ $report_text }}"
                               style="margin-left: 12px;">
                                {{ $report_text }}
                            </a>
                        </div>
                       
                        
                        <hr style="border-color: #eee; width: 95%; margin:9px 0px 0px 12px;">

                        {{-- <hr style="width: 100%; height:3px; color:#eee;background:#eee;"> --}}
                        <!---------------------->
                    </div>
                </div>
                <!--  desktop view -->
                <div class="col-lg-3 col-md-3 col-12 desktop-view">
                    <div class="row" style="margin-top: -14px;">
                        <div>&nbsp;&nbsp;&nbsp;&nbsp;</div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="inner" style="border: 1px solid #eee; border-radius: 5px; padding: 15px;width: 24rem;">
                                <p class="text-muted" style="font-size: 13px;margin-left: 14px;">Posted by:</p>
                                <div class="profile-image-container" style="display: flex; align-items: center; margin-left:8.3rem;margin-top: -11px; font-size: 26px;">
                                          
                                    <b>{{ $ad->created_by_user->name }}</b>
                                    {{-- <img src="{{ $ad->created_by_user->image_url }}" alt="img" width="40" height="40" style="border-radius: 50%; margin-right: 10px;"> --}}
                                </div>
                                <div class="row" style="padding-bottom: 10px; align-items: center;">
                                   
                                    <div class="col-6">
                                    @if (session()->has('user'))
                                    <div class="profile-image-container" style="display: flex; align-items: center;margin-left:7.2rem;margin-top:10px;">
                                                  
                                        {{-- <b>{{ $ad->created_by_user->name }}</b> --}}
                                        <img src="{{ $ad->created_by_user->image_url }}" alt="img" width="150" height="135" style="border-radius: 5%;">
                                    </div>
                                
                                 @else
                                        
                                       
                                            <div class="profile-image-container" style="display: flex; align-items: center;margin-left:7.2rem;margin-top:10px;">
                                              
                                                {{-- <b>{{ $ad->created_by_user->name }}</b> --}}
                                                <img src="{{ $ad->created_by_user->image_url }}" alt="img" width="150" height="135" style="border-radius: 5%;">
                                            </div>
                                            @endif 
                                    </div>
                                    
                                </div>
                                
                
                               
                
                                <div class="action-buttons" style="text-align: center;margin-top: 13px;margin-left:23px;margin-bottom: 15px;">
                                    {{-- @if(empty($ad->phone_listing_approval_status) || $ad->phone_listing_approval_status == 'rejected') --}}
                                    {{-- <a href="#" class="btn btn-sm phone-show-request">Show Phone Number</a> --}}
                                    {{-- @elseif($ad->phone_listing_approval_status == 'approved')
                                    <b>{{ $ad->created_by_user->phone }}</b>
                                    @else
                                    <p class="phone-approval-status">Waiting for phone no approval</p>
                                    @endif --}}
                
                                    <p class="phone-approval-status" style="display: none">Waiting for phone no approval</p>
                                    <button class="btn" style="border: 1px solid red; margin-right: 9px; white-space: nowrap; height: 36px; border-radius: 5px; color: red;" type="button" aria-expanded="false">
                                        <img src="{{ asset('images/socialicon/call.svg') }}" alt="Call Icon" style="height: 23px;margin-top: -6px; margin-right: 4px;">

                                    </button>
                                    <button class="btn" style="border: 1px solid #0088eb; margin-right: 9px; white-space: nowrap; height: 36px; border-radius: 5px; color: red;" type="button" aria-expanded="false">
                                        <img src="{{ asset('images/socialicon/chat.png')}}" alt="Chat Icon" style="height: 30px; margin-top: -4px; margin-right: 1px;">
                                    </button>
         
                                    <button class="btn" style="border: 1px solid #32d951; margin-right: 9px; white-space: nowrap; height: 36px;width: 60px; border-radius: 5px; color: red;" type="button" aria-expanded="false">
                                        <img src="{{ asset('images/socialicon/whatsapp.png')}}" alt="WhatsApp Icon" style="height: 45px; margin-top: -12px; margin-left: -5px;">
                                    </button>
                                    <button class="btn" style="border: 1px solid #fab005; margin-right: 9px; white-space: nowrap; height: 36px; border-radius: 5px; color: red;" type="button" aria-expanded="false">
                                        <img src="{{ asset('images/socialicon/email.png')}}" title="Email" alt="WhatsApp Icon" style="height: 25px; margin-right: 2px;margin-top: -4px;">
                                    </button>
                                    
                                    {{-- <a href="#" class="btn btn-sm start-chat" user-id="{{ $ad->created_by_user->id }}">Chatww</a> --}}
                                    {{-- <a href="#" class="btn btn-sm start-call" user-id="{{ $ad->created_by_user->id }}">Call</a> --}}
                                </div>
                            </div>
                        </div>
                
                        <!-- ad area -->
                        {{-- @foreach($ad->images as $image)
                        <div class="col-lg-12 col-md-12 col-12">
                            <img src="{{ $image->listing_image_url }}" alt="Listing Image" width="100%" height="150" style="margin-bottom: 10px;">
                        </div>
                        @endforeach --}}
                    </div>
                </div>
                
                <!--  mobile view -->
                <div class="col-12 mobile-view" style="border:0px solid red;">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12" style="border:0px solid red;margin-right:-30px;">
                            <div class="inner"
                                 style="border: 1px solid #eee;border-radius:5px;margin:0px 0px 10px 0px;padding:15px;">
                                <p class="text-muted" style="font-size: 13px;padding-left:12px;">Posted by</p>
                                <p class="text-muted" style="font-size: 15px;padding-left:12px;">
                                    <b>{{ $ad->created_by_user->name; }}</b></p>
                                <span
                                    style="font-size: 11px;padding:5px;border-radius:7px;color:white;margin-left:12px;"
                                    class="bg-success"><i class="fa fa-check-circle"></i> VERIFIED USER</span>
                                <p class="text-muted" style="font-size: 15px;padding-left:12px;"><b>Joined
                                        on {{ $ad->created_by_user->created_at_formatted }}</b></p>
                                <p class="text-muted" style="font-size: 15px;padding-left:12px;">
                                    <b>{{ $ad->created_by_user->active_ads_count }} items live</b>
                                </p>
                                <p class="text-muted btn-next" style="font-size: 15px;padding-left:12px;">
                                    @if ($ad->hide_phone)
                                        <a href="#" class="btn" style="font-size: 13px;">Show Phone Number</a>
                                    @else
                                        <b>{{ $ad->created_by_user->phone }}</b>
                                    @endif
                                </p>
                                <div style="text-align: center;">
                                    <a href="" class="btn btn-lg"
                                       style="background-color: #0000FF;color:white;font-size:15px;padding:7px 10px;">
                                        <b><i class="fa fa-comment" style="color:white;"></i> Chat with Seller</b>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <!-- ad area -->
                        @foreach($ad->images as $image)
                            <div class="col-lg-12 col-md-12 col-12">
                                <img src="{{ $image->listing_image_url }}" alt="Listing Image" width="100%"
                                     height="150" style="margin-bottom: 10px;">
                            </div>
                        @endforeach
                    </div>
                </div>
                <!---------------------->
                {{-- <hr style="border-color: #eee; width: 95%; margin:0px 0px 0px 12px;"> --}}
                <div class="col-lg-12 col-md-12 col-12 similar_ad" style="margin-top: 7px;margin-left: -18px;">
                    <h4 style="margin-top: 9px;margin-left: 15px;"><b>Similar Ads</b></h4>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="slider" style="width: auto;"> <!-- Adjust the width here -->
                                @php
                                    $similar_ads = \App\Helpers\RecordHelper::getAdsBySubcategory($ad->subcategory_id)->take(5);
                                @endphp
                                @foreach($similar_ads as $similar_ad)
                                    <div class="col-lg-2 col-md-3 col-6" style="width: 13rem !important;"> <!-- Adjust column width if needed -->
                                        <a href="{{env('BASE_URL') . 'ads/detail/' . $similar_ad->id . '?country=' . request()->country . '&city=' . request()->city}}">
                                            <div class="listing" style="margin-bottom: 12px;">
                                                <img src="{{ $similar_ad->main_image_url }}" alt="{{ $similar_ad->name }}" title="{{ $similar_ad->name }}" width="170" height="152">
                                                <div class="heart-icon" style="position: absolute; top: 16px; right: 5.5rem;">
                                                    <i class="fa fa-heart-o" style="color: #fff !important; font-size: 20px;"></i>
                                                </div>
                                                <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:8rem; z-index: 2;">
                                                    <i class="fa fa-image" style="color:white;"></i><span class="text-white" style="margin-left:9px">1</span>
                                                </div>
                                                <div class="detail"  style="margin-bottom:8px;margin-left: -3px;">
                                                    <span style="color:#000; display: block;">{{ $similar_ad->title ?? 'Title N/A' }}</span>
                                                    <span style="color:#999; display: block;">{{ $similar_ad->subcategory_name }}</span>
                                                    <h5 style="font-size: 14px;margin-bottom: -10px;"><b style="color: red;">{{ \App\Helpers\SiteHelper::priceFormatter($similar_ad->price) }}</b></h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- <hr style="border-color: #eee; width: 95%; margin:12px 0px 0px 12px;"> --}}
            </div>
        </div>
        </div>
    </section>
    <!--------ad show------------->


@endsection
@section('page_scripts')
    <script type="text/javascript">
  $(document).ready(function(){
    $('.slider').slick({
        // infinite: true,
            infinite: true,
        slidesToShow: 4,
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
                    breakpoint: 768, // At 768px, show 2 slides
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480, // At 480px, show 1 slide
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
});
        $(document).ready(function () {
            var latitude = "{{ $ad->latitude ?? 30.777855 }}";
            var longitude = "{{ $ad->longitude ?? 31.7989566 }}";

            var myLatlng = new google.maps.LatLng(30.777855, 31.777855);
            var myOptions = {
                zoom: 13,
                center: myLatlng
            }

            var map = new google.maps.Map(document.getElementById("map"), myOptions);

            // Create a marker and set its position
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Marker Title' // You can set a title for your marker
            });
        });

        $(document).on('click', '.start-chat', function (e) {
            e.preventDefault();

            var user_id = $(this).attr('user-id');
            $.ajax({
                url: api_url + 'chats/initiate',
                method: 'POST',
                data: {
                    user_id: user_id,
                },
                success: function (response) {
                    if (response.status) {
                        window.location.href = base_url + 'chats?u=' + user_id;
                    } else {
                        showAlert('error', 'Try again');
                    }
                },
                error: function (response) {
                    console.log('error');
                }
            });
        });

        $(document).on('click', '.document-download-request', function (e) {
            e.preventDefault();
            if (!checkIfUserLoggedIn()) {

$('#loginModal').modal('show');
return ;
}
            ajaxCall('ads/download-document-request', 'document');
        });

        $(document).on('click', '.phone-show-request', function (e) {
            e.preventDefault();

            ajaxCall('ads/download-document-request', 'phone');
        });

        function ajaxCall(end_point, type) {
            $.ajax({
                url: api_url + end_point,
                method: 'POST',
                data: {
                    'listing_id': "{{ request()->ad_id }}",
                    'type': type
                },
                success: function (response) {
                    if (response.status) {

                        if (type == 'document') {
                            $('.document-download-request').hide();
                            $('.approval-status').show();
                        }else{
                            $('.phone-show-request').hide();
                            $('.phone-approval-status').show();
                        }

                        // window.location.href = base_url + 'chats?u=' + user_id;
                        showAlert('success', response.message);
                    } else {
                        showAlert('error', response.message);
                    }
                },
                error: function (response) {
                    console.log('error');
                }
            });
        }

        $(document).on('click', '.download-document', function (e) {
            e.preventDefault();
            downloadAll();
        });

        function downloadAll() {
                @php
                    $docs_arr = [];
                    foreach ($ad->documents as $doc) {
                        $docs_arr[] = $doc->name;
                    }
                @endphp

            var files = @json($docs_arr);

            console.log(files);

            // Loop through the files and create a link for each
            for (var i = 0; i < files.length; i++) {
                var downloadLink = $('<a>', {
                    href: "{{ asset('uploads/listings/documents/') }}/" + files[i], // Adjust the download route
                    download: files[i],
                    style: 'display:none;'
                });

                // Append the link to the body and trigger the download
                $('body').append(downloadLink);
                downloadLink[0].click();
                downloadLink.remove();
            }
        }

        $(document).on('click', '.report-ad-btn', function() {
    $('.popup-container').fadeIn(); // Show the popup
});

$(document).on('click', '.close-btn', function() {
    $('.popup-container').fadeOut(); // Hide the popup
});


    </script>



@endsection
