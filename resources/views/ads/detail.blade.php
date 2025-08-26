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
/* start slider css */

.carousel-indicators img {
            width: 100px;
        
            border-radius: 5px !important;
            display: block;
        }

        .carousel-item img {
            margin-top: 0px;
            border-radius: 0.3rem !important;
        }

        .carousel-indicators button {
            width: max-content !important;
            justify-content: flex-start !;
        }

        .carousel-indicators {
            margin-bottom: -10px;
            position: unset;
            justify-content: flex-start;
            margin-left: -1% !important;
            margin-right: 1% !important;
            overflow-x: scroll;
            white-space: nowrap;
            height: 122px;
        }

        .carousel-control-next,
        .carousel-control-prev {
            border: 0px;
    background: transparent;
    height: 10% !important;
        }
     
        a.knsl-btn,
        .knsl-btn,
        .knsl-btn:focus,
        .button,
        .button:focus,
        input[type="submit"],
        input#submit {
            -webkit-box-shadow: 0 0 0 1px #003c79, 0 2px 48px 0 rgba(0, 0, 0, 0.04) !important;
            box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.2), 0 2px 48px 0 rgba(0, 0, 0, 0.04) !important;
        }

        .share-btn{
            font-size:19px;border-radius:2px; color:blue;
        }

        .share-btn:hover{
           color:goldenrod;
        }

        .notification {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #333;
    color: #fff;
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 14px;
    display: none;
    z-index: 1000;
}

.notification.visible {
    display: block;
    animation: fadeOut 2s ease forwards;
}

@keyframes fadeOut {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}

        .scroll-botton{
            border: 0px;
            background: #fff;
        }

        @media only screen and (max-width: 500px) {

            .carousel-control-next,
            .carousel-control-prev {
                height: 75% !important;
            }
        }

        .indicator-img {
    position: relative;
    /* filter: blur(4px); Default blur */
    opacity: 0.7; /* Slightly faded with overlay */
    transition: filter 0.3s ease-in-out, opacity 0.3s ease-in-out; /* Smooth transition */* Smooth transition */
}

button.active .indicator-img {
    filter: none; /* Remove blur for active thumbnail */
    opacity: 1; /* Fully clear */
}
/*         
        .tumbnailImg{
            width: 100px;
             height: 80px; 
             margin-top: 15px;
             object-fit: cover;
              border: 2px solid white;
               border-radius: 4px;

        } */

        .carousel-control-prev, .carousel-control-next {
            top:9rem;
        }

        /* endsider css */
.approval-status{
    font-size: 16px;
    color: blue;
    margin-top:-17px;
    margin-left: 25px;

}
.download-document{
    font-size: 16px;
    color: #fab005;
    margin-left: 21px;
}
.lobibox-notify-success{
        width: 100px !important
    }
    .lobibox-notify-error{
        width: 100px !important
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
    top: 36% !important
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
    right: 12px !important;
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
.ad-report-btn{
    color: blue !important;

}
.report-ad-btn:hover{
    color: blue !important;

}
.document-download-request{
    padding: 0rem 0.75rem !important;
    font-size: 13px;

}


</style>

    <section>
     
        <div class="cont-w slider-area desktop-view" style="margin-top: -8px;">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner"  style="border-radius:0.3rem;">
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
 

    <section>
        <div class="cont-w desktop-view" style="border-bottom:2px solid #eee;">
            <div class="col-lg-12 col-md-12 col-12" style="">
                <div class="row" style="margin-top: 8px;">
                    <div class="cat_btn" >
                        <a href="{{ env('BASE_URL') . 'home?country=' . request()->country . '&city=' . request()->city }}"
                           style="color:#0000FF;font-size:12px;">{{$ad->category_name }}</a>
                        <i class="fa fa-chevron-right" style="font-size:8px;color:#0000FF;"></i>
                    </div>
                    <div class="cat_btn" style="margin:0px 3px;">
                        <a href="{{ env('BASE_URL') . 'ads/' . $ad->subcategory_id . '?country=' . request()->country . '&city=' . request()->city }}"
                           style="color:#0000FF;font-size:12px;">{{ $ad->subcategory_name }}</a>
                        {{-- <i class="fa fa-chevron-right" style="font-size:8px;color:#0000FF;"></i> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="cont-w desktop-view">
            <div class="col-md-12" style="border:0px solid red;">
                <div class="row">
                    <div class="col" style="border:0px solid red;">
                        <div class="row" style="margin-top: 12px;">
                            <h6 style="margin-bottom:0px;"><b>{{ $ad->title ?? 'Title N?A' }}</b></h6>
                        </div>
                        <div class="row">
                            <span class="text-muted"
                                  style="font-size: 12px;">Posted {{ $ad->created_at_time_diff }}</span>
                        </div>
                    </div>
                    <div class="col" style="text-align:right;">
                        <div class="row text-right" style="margin-top:12px;">
                           
                            <div

                                style="font-weight:bold;font-size:18px;text-align:right;border:0px solid red;width:100%;">
                                <a href=""
                                   style="color: red;font-weight:bold;">{{session('app_currency', 'default_currency')}}  {{ \App\Helpers\SiteHelper::priceFormatter($ad->price) }}
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mobile-view">
            <div class="col-md-12" >
                <div class="row" >
                    <div class="col" style="border:0px solid red;">
                        <div class="row">
                            <h6 style="border:0px solid red;"><b>{{ $ad->title ?? 'Title N?A' }}</b></h6>
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
        <div class="container" style="margin-left: 18.6rem;">
            <div class="col-lg-12 col-md-12 col-12" style="border:0px solid red;">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-12" style="border:0px solid red;">
                        <div class="row">
                            <!-----content----->
                            <div class="col-lg-12 col-md-12 col-12"
                                 style="margin-bottom:-19px;width:800px;position:relative;top:16px;z-index:600;">
                                <span style="font-size: 13px;float:right;position:relative;right:30px;cursor:pointer;">
                                    <i class="fa favourite-btn {{ $ad->is_favourite ? 'fa-heart' : 'fa-heart-o' }}"
                                       is-favourite="{{ $ad->is_favourite ? '1' : '0' }}" ad-id="{{ $ad->id }}"
                                       style="padding:6px 6px;font-size:19px; color: white; border-radius:2px;"> </i>&nbsp;
                                   
                                    <i class="fa fa-share share-btn" ad-id="{{ $ad->id }}" title="Copy Ad link"
                                       ></i>
                                       <div id="notification" class="notification hidden">Ad link copied to clipboard!</div>

                                </span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                               

                                <div class="carousel slide" id="carouselDemo" data-bs-wrap="true" data-bs-ride="carousel">

                                    <!-- Carousel Inner -->
                                    <div class="carousel-inner">
                                        @foreach($ad->attachments as $index => $image)
                                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                <img src="{{ $image->listing_image_url }}" alt="Listing Image" class="w-100" style="height: 300px; object-fit: cover;">
                                                {{-- <div class="carousel-caption">
                                                    <h5>Caption {{ $index + 1 }}</h5>
                                                    <p>Optional description for slide {{ $index + 1 }}.</p>
                                                </div> --}}
                                            </div>
                                        @endforeach
                                    </div>

                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselDemo" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                            
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselDemo" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                
                                    <!-- Carousel Indicators -->
                                    <div class="carousel-indicators">
                                        @foreach($ad->attachments as $index => $image)
                                            <button 
                                                type="button"  style="border: 0px;background: #fff; margin-top: 16px;height: 80px;"
                                                data-bs-target="#carouselDemo" 
                                                data-bs-slide-to="{{ $index }}" 
                                                class="{{ $loop->first ? 'active' : '' }}">
                                                <img src="{{ $image->listing_image_url }}" alt="Thumbnail {{ $index + 1 }}"   class="indicator-img"  style="width: 100px; height: 80px; object-fit: cover; border-radius: 4px;">
                                            </button>
                                        @endforeach
                                    </div>
                                   
                                </div>
                                
                            


                                <div id="slide-counter" 
                                class="col-md-7 col-6" 
                                style="
                                   position: absolute; 
                                   color: white; 
                                   
                                   width: 90px; 
                                   border-radius: 9px; 
                                   margin-left: 10px; 
                                   top: 17rem; 
                                   z-index: 2; 
                                   display: flex; 
                                   align-items: center;">
                               {{-- <i class="fa fa-image" style="font-size: 16px;"></i> --}}
                               <span style="color: white;">
                                   1 / {{ $ad->attachments->count() }}
                               </span>
                           </div>
                       
              
                            </div>

                         
                        
                         
                        @if($ad->category_name==="Businesses for Sale")
                           
                        @include('ads.description_detail.business_for_sale')
                         
                        @elseif($ad->category_name==="Businesses for Rent")
                         
                        @include('ads.description_detail.business_for_rent')
                         

                        @elseif($ad->category_name==="Shares for Sale")
                         
                        @include('ads.description_detail.share_for_sale')

                        @elseif($ad->category_name==="Business Ideas")
                         
                        @include('ads.description_detail.business_idea')

                        
                        @elseif($ad->category_name==="Investors")
                         
                        @include('ads.description_detail.investor')

                        @elseif($ad->category_name==="Investors Required")
                         
                        @include('ads.description_detail.investor_required')
                        @elseif($ad->category_name==="Franchise Opportunities")
                         
                        @include('ads.description_detail.franchise_opp')
                        @elseif($ad->category_name==="Machinery & Supplies")
                         
                        @include('ads.description_detail.machinarySupplies')

                    
                        @endif


                        <hr style="border-color: #eee; width: 97%; margin:-9px 0px 0px 12px;">
                        <!---------->
                        <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
                            <h6><b>Products & Services Offered</b></h6>
                            <p style="font-size: 14px; margin-bottom: 7px;">{{ $ad->details->products_and_services_offered ?? '....' }} this is one line</p>
                        </div>
                        <hr style="border-color: #eee; width: 97%; margin:-9px 0px 0px 12px;">
                        <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
                            <h6><b>Description</b></h6>
                            <p style="font-size: 14px;margin-bottom: 7px;">{{ $ad->description }} this is description</p>
                        
                        </div>
                        <hr style="border-color: #eee; width: 97%; margin:-9px 0px 0px 12px;">
                        <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
                
                                <h6><b>Files</b></h6>
                                <p style="font-size: 14px;">
                                    <embed class="@if(empty($ad->document_listing_approval_status) || $ad->document_listing_approval_status == 'rejected') blur-image @endif" src="https://www.buds.com.ua/images/Lorem_ipsum.pdf"
                                           type="application/pdf" width="180px" height="228px"/>
                                    <br/>
                                    <div class="btn-next">
                                        @if(empty($ad->document_listing_approval_status) || $ad->document_listing_approval_status == 'rejected')
                                            <a href="" class="btn document-download-request">Request Access</a>
                            @elseif($ad->document_listing_approval_status == 'approved')
                                            <a href="#" class="btn download-document">Approved</a>
                                @else
                                    <p class="approval-status"> Request Sent </p>
                                @endif

                                <p class="approval-status" style="display: none">Request Sent </p>
                            </div>
                            </p>
                        </div>
                      
                        <hr style="border-color: #eee; width: 97%; margin:-9px 0px 0px 12px;">
                        <div class="col-lg-12 col-md-12 col-12" >
                            <h6><b>Location</b></h5>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6">
                                    {{-- <div style="border-radius:5px;"> --}}
                                        <h6 style="text-align: left;font-size:13px;font-weight:bold;">
                                          <i class="fa fa-map-marker text-danger"></i>   <span style="margin-left: 9px;">{{ $ad->location_name }} </span>
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
                        <div style="font-weight: bold;font-size:15px;margin-top: 6px;margin-left: 12px;">
                            Is there an issue?

                            @php $report_text = "Report this Ad"; $report_class = "report-ad-btn"; @endphp
                            @if ($ad->is_reported_by_this_user)
                                @php $report_text = "Ad Reported"; $report_class = "ad-report-btn"; @endphp
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
                    <div class="row" style="margin-top: 11px;">
                        
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="inner" style="border: 1px solid #eee; border-radius: 5px; padding: 15px;width: 24.4rem;">
                                <p class="text-muted" style="font-size: 13px;margin-left: 14px;">Posted by: <b style="color:#000" >{{ ($ad->posted_by == 1) ? "Agent" : "User"  }}</b></p>
 
                                <div class="profile-image-container" style=" align-items: center; margin-left:9rem;margin-top: -11px; font-size: 17px;">
                                      
                                    <b>{{ $ad->created_by_user->name }}</b>
                                    {{-- <img src="{{ $ad->created_by_user->image_url }}" alt="img" width="40" height="40" style="border-radius: 50%; margin-right: 10px;"> --}}
                                </div>
                                <div class="row" style="padding-bottom: 10px; align-items: center;">
                                   
                                    <div class="col-6">
                                    @if (session()->has('user'))
                                    <div class="profile-image-container" style="display: flex; align-items: center;margin-left:7.2rem;margin-top:10px;">
                                                  
                                        {{-- <b>{{ $ad->created_by_user->name }}</b> --}}
                                        <img src="{{ $ad->created_by_user->image_url }}" alt="img" width="150" height="135" style="border-radius:0.3rem;">
                                    </div>
                                
                                 @else
                                        
                                       
                                            <div class="profile-image-container" style="display: flex; align-items: center;margin-left:7.2rem;margin-top:10px;">
                                              
                                                {{-- <b>{{ $ad->created_by_user->name }}</b> --}}
                                                <img src="{{ $ad->created_by_user->image_url }}" alt="img" width="150" height="135" style="border-radius: 0.3rem;">
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
                                    <button class="btn callbutton"  onclick="showPopup()" style="border: 1px solid red; margin-right: 9px; white-space: nowrap; height: 36px; border-radius: 0.3rem; color: red;" type="button" aria-expanded="false">
                                        <img src="{{ asset('images/socialicon/call.svg') }}" alt="Call Icon" style="height: 23px;margin-top: -6px; margin-right: 4px;">

                                    </button>
                                    <div id="callPopup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 15px; border-radius: 0.3rem; z-index: 1000;">
                                        <p style="margin: 0; font-size: 18px; color: red;"> <img src="{{ asset('images/socialicon/call.svg') }}" alt="Call Icon" style="height: 23px;margin-top: -6px; margin-right: 4px;"> {!!$ad->phone !!}</p>
                                        {{-- <button onclick="hidePopup()" style="margin-top: 10px; padding: 5px 10px; border: none; background: red; color: white; border-radius: 3px; cursor: pointer;">Close</button> --}}
                                    </div>
                                    
                                    <!-- Overlay -->
                                    <div id="popupOverlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 999; " onclick="hidePopup()"></div>
                                    
                                    <button  class="btn start-chat" user-id="{{ $ad->created_by_user->id }}"   user-ad="{{ $ad->id}}" style="border: 1px solid #0088eb; margin-right: 9px; white-space: nowrap; height: 36px; border-radius: 0.3rem; color: red;"
                                        type="button" 
                                        aria-expanded="false">
                                        <img src="{{ asset('images/socialicon/chat.png') }}" alt="Chat Icon" style="height: 30px; margin-top: -4px; margin-right: 1px;">
                                    </button>

                                    <button class="btn" onclick="redirectToWhatsApp()" style="border: 1px solid #32d951; margin-right: 9px; white-space: nowrap; height: 36px;width: 60px; border-radius: 0.3rem; color: red;" type="button" aria-expanded="false">
                                        <img src="{{ asset('images/socialicon/whatsapp.png')}}" alt="WhatsApp Icon" style="height: 45px; margin-top: -12px; margin-left: -5px;">
                                    </button>

                                   
                                   
                                    <button class="btn" onclick="redirectToEmail()" style="border: 1px solid #fab005; margin-right: 9px; white-space: nowrap; height: 36px; border-radius: 0.3rem; color: red;" type="button" aria-expanded="false">
                                        <img src="{{ asset('images/socialicon/email.png')}}" title="Email" alt="WhatsApp Icon" style="height: 25px; margin-right: 2px;margin-top: -4px;">
                                    </button>
                                    
                               
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
                    <h6 style="margin-top: 9px;margin-left: 15px;margin-bottom: 0px;"><b>Similar Ads</b></h6>
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
                                                    <i class="fa fa-heart-o" style="color: #fff !important; font-size: 18px;"></i>
                                                </div>
                                                <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:8rem; z-index: 2;">
                                                    {{-- <i class="fa fa-image" style="color:white;font-size: 12px;"></i> --}}
                                                    <span class="text-white" style=" font-size: 13px;">1 / {{$similar_ads->count()}}</span>
                                                </div>
                                                <div class="detail"  style="margin-bottom:8px;margin-left: -3px;">
                                                    <span style="color:#000; display: block;">{{ $similar_ad->title ?? 'Title N/A' }}</span>
                                                    <span style="color:#999; display: block; font-size:10px; " >{{ $similar_ad->category_name}} > {{$similar_ad->subcategory_name }}</span>
                                                    <h5 style="font-size: 14px;margin-bottom: -10px;"><b style="color: red;"> {{session('app_currency', 'default_currency')}} {{ \App\Helpers\SiteHelper::priceFormatter($similar_ad->price) }}</b></h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
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
  $(document).ready(function(){
    $('.slider').slick({
        // infinite: true,
            infinite: true,
        slidesToShow: 3,
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


function showPopup() {
    if (!checkIfUserLoggedIn()) {

$('#loginModal').modal('show');
return ;
}
        document.getElementById('callPopup').style.display = 'block';
        document.getElementById('popupOverlay').style.display = 'block';
    }

    function hidePopup() {
        document.getElementById('callPopup').style.display = 'none';
        document.getElementById('popupOverlay').style.display = 'none';
    }

 

    const phoneNumber = {!! json_encode($ad->phone) !!}; // Ensure this is safely rendered from the server



    function redirectToEmail() {
        if (!checkIfUserLoggedIn()) {

$('#loginModal').modal('show');
return ;
}
        const emailAddress = {!! json_encode($ad->created_by_user->email) !!}; // Replace with your dynamic email variable if applicable
        const subject = "Subject here"; // Customize or make dynamic
        const body = "Body content here"; // Customize or make dynamic

        const mailtoLink = `mailto:${emailAddress}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
        window.location.href = mailtoLink;
    }
function redirectToWhatsApp() {

    if (!checkIfUserLoggedIn()) {

$('#loginModal').modal('show');
return ;
}
    const whatsappLink = `https://wa.me/${phoneNumber}`;
    window.open(whatsappLink, '_blank');
}
$(document).ready(function () {
 
    $('.share-btn').on('click', function () {
            // Get the ad ID
            const adId = $(this).attr('ad-id');

            // Construct the ad link (replace with your actual link logic)
            const adLink = `${window.location.origin}/ad/${adId}`;

            // Copy the ad link to the clipboard
            navigator.clipboard.writeText(adLink).then(() => {
                // alert('Ad link copied to clipboard: ' + adLink);

                const notification = $('#notification');
        notification.text('Ad link copied to clipboard!');
        notification.addClass('visible');

        setTimeout(() => {
            notification.removeClass('visible');
        }, 2000);
            }).catch(err => {
                console.error('Failed to copy text: ', err);
                alert('Failed to copy the ad link. Please try again.');
            });
        });


    const $carousel = $('#carouselDemo');
    const $counter = $('#slide-counter span');
    const totalSlides = {{ $ad->attachments->count() }};

    $carousel.on('slid.bs.carousel', function (e) {
        const currentSlide = $(e.relatedTarget).index() + 1; // Get current slide index (1-based)
        $counter.text(`${currentSlide} / ${totalSlides}`);
    });
});

        $(document).ready(function () {
            var adId = "{{ $ad->id }}";
          
            $('.ad-id').val(adId);
                
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

            if (!checkIfUserLoggedIn()) {

$('#loginModal').modal('show');
return ;
}
            var user_id = $(this).attr('user-id');
            var user_ad = $(this).attr('user-ad');
            
            $.ajax({
                url: api_url + 'chats/initiate',
                method: 'POST',
                data: {
                    user_id: user_id,
                    user_ad: user_ad,
                },
                success: function (response) {
                    if (response.status) {
                        window.location.href = base_url + 'chats?user_id=' + user_id + '&user_ad=' + user_ad;
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
