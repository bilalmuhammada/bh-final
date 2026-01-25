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
        }

        .carousel-indicators {
            margin-bottom: -30px;
            position: unset;
            justify-content: center;
            margin-left: -5px !important;
            margin-right: 0px !important;
            overflow-x: auto;
            white-space: nowrap;
            height: 122px;
            padding-left: 0;
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

        .share-btn,
        .favourite-btn {
            font-size: 19px;
            border-radius: 2px;
            color: #fff !important;
            padding: 6px 6px;
            text-shadow: 0 0 3px rgba(0,0,0,0.5);
            transition: color 0.3s ease;
        }

        .share-btn:hover,
        .favourite-btn:hover {
            color: goldenrod !important;
        }
        
        .share-btn:hover {
            border-color: goldenrod;
        }

        .favourite-btn.fa-heart {
            color: red !important;
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
        /* width: 285px !important; */
        margin: 0px 5px;
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
        width: 100% !important
    }
    
    #slider{
        margin: 0px 0px !important;

    }
    
    #slider_main{
        width: 100% !important;
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

.colbtn a:hover{
    color: goldenrod !important;

}



    .similar_ad {
        margin-left: -2px;
        background: transparent;
        padding-bottom: 30px;
        border-radius: 12px;
    }

    .similar_ad h6 {
        font-family: 'Outfit', sans-serif;
        font-size: 20px;
        color: #1a1a1a;
    }

    .similar-listing-card {
        background: #fff;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        margin: 1px 0px;
        border: 1px solid #f0f0f0;
        position: relative;
        width: 190px; /* Added as requested */
    }

    .similar-listing-card:hover {
         transform: translateY(-5px); 
        box-shadow: 0 10px 25px transparent; 
        border-color: transparent; 
    }

    .similar-listing-card:hover .similar-listing-title,
    .similar-listing-card:hover .similar-listing-category,
    .similar-listing-card:hover .similar-listing-price {
        color: goldenrod !important;
    }

    .similar-listing-image {
        position: relative;
        height: 160px;
        overflow: hidden;
    }

    .similar-listing-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    /* .similar-listing-card:hover .similar-listing-image img {
        transform: scale(1.05);
    } */

    .similar-listing-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(0,0,0,0) 60%, rgba(0,0,0,0.6) 100%);
    }

    .similar-listing-heart {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 3;
    }

    .similar-listing-heart i {
        color: #fff;
        font-size: 16px;
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .similar-listing-heart i:hover {
        color: goldenrod;
    }

    .similar-listing-count {
        position: absolute;
        bottom: 8px;
        left: 10px;
        color: #fff;
        font-size: 11px;
        font-weight: 500;
        padding: 2px 8px;
        border-radius: 10px;
        backdrop-filter: blur(4px);
    }

    .similar-listing-details {
        padding: 12px;
    }

    .similar-listing-title {
        font-size: 14px;
        font-weight: 600;
        color: #333;
        display: block;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-bottom: 4px;
        text-decoration: none !important;
    }

    .similar-listing-category {
        font-size: 11px;
        color: #888;
        display: block;
        margin-bottom: 8px;
    }

    .similar-listing-price {
        font-size: 16px;
        font-weight: 700;
        color: #ff3131;
        margin: 0;
    }

    .slick-prev, .slick-next {
        width: 45px !important;
        height: 45px !important;
        background: transparent !important;
        border-radius: 50% !important;
        box-shadow: none !important;
        z-index: 10 !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
        border: none !important;
    }

    .slick-prev:before, .slick-next:before {
        display: none !important;
    }

    .slick-prev:hover, .slick-next:hover {
       
        transform: scale(1.1);
       
        border-color: #0088eb !important;
    }

    .slick-prev i, .slick-next i {
        color: goldenrod !important; /* Logo-Gold */
        font-size: 32px !important;
        transition: all 0.3s ease !important;
    }

    .slick-prev:hover i, .slick-next:hover i {
        color: #0088eb !important; 
        transform: scale(1.1);
    }

    .slick-prev {
        left: -20px !important;
    }

    .slick-next {
        right: -20px !important;
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
                    <div class="cat_btn  colbtn" >
                        <a href="{{ env('BASE_URL') . 'home?country=' . request()->country . '&city=' . request()->city }}"
                           style="color:#0000FF;font-size:12px;"  >{{$ad->category_name }}</a>
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
                                   style="color: red;font-weight:bold;">{{session('app_currency', 'USD')}}  {{ \App\Helpers\SiteHelper::priceFormatter($ad->price) }}
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
        <div class="cont-w desktop-view">
            <div class="col-lg-12 col-md-12 col-12" style="margin-top: 12px; padding: 0px;">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-12" >
                        <div class="row">
                            <!-----content----->
                            <div class="col-lg-12 col-md-12 col-12">
                               

                                <div class="carousel slide" id="carouselDemo" data-bs-wrap="true" data-bs-ride="carousel" style="position: relative;">
                                    <div style="position: absolute; top: 10px; right: 10px; z-index: 10;">
                                        <span style="font-size: 13px; cursor:pointer;">
                                            <i class="fa favourite-btn {{ $ad->is_favourite ? 'fa-heart' : 'fa-heart-o' }} shaking"
                                               is-favourite="{{ $ad->is_favourite ? '1' : '0' }}" ad-id="{{ $ad->id }}"
                                               style="padding:6px 6px;font-size:19px; text-shadow: 0 0 3px rgba(0,0,0,0.5);"> </i>&nbsp;
                        
                        
                                            <i class="fa fa-share-alt share-btn shaking" ad-id="{{ $ad->id }}" title="Copy Ad link"></i>
                                               <div id="notification" class="notification hidden">Ad link copied to clipboard!</div>
        
                                        </span>
                                    </div>

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
                                                type="button"  style="border: 0px;background: #fff; margin-top: 6px;height: 80px;"
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
                                style="display: none !important;">
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


                        <hr style="border-color: #eee; width: 100%; margin: 5px 13px 0;">
                        <!---------->
                        <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:0px; margin-top: 4px;">
                            <h6 style="margin-bottom: 2px;"><b>Products & Services Offered</b></h6>
                            <p style="font-size: 14px; margin-bottom: 2px;">{{ $ad->details->products_and_services_offered ?? '....' }} this is one line</p>
                        </div>
                        <hr style="border-color: #eee; width: 100%; margin: 5px 13px 0;">
                        <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:0px; margin-top: 4px;">
                            <h6 style="margin-bottom: 2px;"><b>Description</b></h6>
                            <p style="font-size: 14px;margin-bottom: 2px;">{{ $ad->description }} this is description</p>
                        
                        </div>
                        <hr style="border-color: #eee; width: 100%; margin: 5px 13px 0;">
                        <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:0px; margin-top: 4px;">
                
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
                                    <p style="margin-bottom:0px;" class="approval-status-request"> Request Sent </p>
                                @endif

                                <p class="approval-status-request" style="display: none;margin-bottom:0px;">Request Sent </p>
                            </div>

                        </div>
                      
                        <hr style="border-color: #eee; width: 100%; margin: 5px 13px 0;">
                        <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:0px; margin-top: 4px;">
                            
                            <div class="row">
                                
                                <div class="col-lg-6 col-md-6 col-12">
                                    {{-- <div style="border-radius:5px;"> --}}
                                    <h6 style="margin-bottom: 0px;"><b>Location</b></h5>
                                        <h6 style="text-align: left;font-size:13px;font-weight:bold; margin-top: 5px;">
                                          <i class="fa fa-map-marker text-danger shaking"></i>   <span style="margin-left: 9px;">{{ $ad->location_name }} </span>
                                        </h6>
                                    {{-- </div> --}}
                                </div>
                                <div class="col-lg-6 col-md-6 col-12" >
                                    {{-- <div style="border-radius:5px;"> --}}
                                        <div style="width:100%; height:70px; border-radius:6px;" id="map"></div>
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <hr style="width: 100%; height:3px; color:#eee;background:#eee;"> --}}
                        <hr style="border-color: #eee; width: 100%; margin: 5px 13px 0;">
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
                       
                        
                        <hr style="border-color: #eee; width: 100%; margin: 5px 13px 0;">

                        {{-- <hr style="width: 100%; height:3px; color:#eee;background:#eee;"> --}}
                        <!---------------------->
                    </div>
                </div>
                <!--  desktop view -->
                <div class="col-lg-3 col-md-3 col-12 desktop-view">
                    <div class="row">
                        
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="inner d-flex flex-column align-items-center text-center p-3" style="border: 1px solid #eee; border-radius: 5px; width: 100%;">
                                <!-- User Info -->
                                <div class="mb-4">
                                    <p class="text-muted mb-1" style="font-size: 13px;">Posted by:</p>
                                    <h6 class="mb-2"><b>{{ $ad->created_by_user->name }}</b></h6>
                                    
                                    <div class="profile-image-container d-flex justify-content-center mb-2">
                                        <img src="{{ $ad->created_by_user->image_url }}" alt="img" width="150" height="135" style="border-radius:0.3rem; object-fit: cover;">
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="action-buttons d-flex justify-content-center w-100 mb-3 flex-wrap">
                                    <p class="phone-approval-status" style="display: none">Waiting for phone no approval</p>
                                    
                                    <button class="btn  callbutton action-btn-shake p-0 d-flex align-items-center justify-content-center" onclick="showPopup()" style="border: 1px solid red; width: 45px; height: 36px; border-radius: 0.3rem; margin: 0 6px;" type="button">
                                        <img src="{{ asset('images/socialicon/call.svg') }}" alt="Call" style="height: 20px;">
                                    </button>
                                     <div id="callPopup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 15px; border-radius: 0.3rem; z-index: 1000;">
                                        <p style="margin: 0; font-size: 18px; color: red;"> <img src="{{ asset('images/socialicon/call.svg') }}" alt="Call Icon" style="height: 23px;margin-top: -6px; margin-right: 4px;"> {!!$ad->phone !!}</p>
                                    </div>
                                    <div id="popupOverlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 999; " onclick="hidePopup()"></div>

                                    <button class="btn start-chat action-btn-shake p-0 d-flex align-items-center justify-content-center" user-id="{{ $ad->created_by_user->id }}" user-ad="{{ $ad->id}}" style="border: 1px solid #0088eb; width: 45px; height: 36px; border-radius: 0.3rem; margin: 0 6px;" type="button">
                                        <img src="{{ asset('images/socialicon/chat.png') }}" alt="Chat" style="height: 26px;">
                                    </button>

                                    <button class="btn action-btn-shake p-0 d-flex align-items-center justify-content-center" onclick="redirectToWhatsApp()" style="border: 1px solid #32d951; width: 45px; height: 36px; border-radius: 0.3rem; margin: 0 6px;" type="button">
                                        <img src="{{ asset('images/socialicon/whatsapp.png')}}" alt="WhatsApp" style="height: 38px;">
                                    </button>

                                    <button class="btn action-btn-shake p-0 d-flex align-items-center justify-content-center" onclick="redirectToEmail()" style="border: 1px solid #fab005; width: 45px; height: 36px; border-radius: 0.3rem; margin: 0 6px;" type="button">
                                        <img src="{{ asset('images/socialicon/email.png')}}" title="Email" alt="Email" style="height: 20px;">
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
                <div class="col-lg-12 col-md-12 col-12 similar_ad">
                    <h6 style="margin-bottom: 0px;"><b>Similar Ads</b></h6>
                    <div class="row" >
                        <div class="col-md-9" style="margin-left: 14px;padding:0px;">
                            <div class="slider">
                                @php
                                    $similar_ads = \App\Helpers\RecordHelper::getAdsBySubcategory($ad->subcategory_id)->where('id', '!=', $ad->id)->take(12);
                                
                                    @endphp
                                @foreach($similar_ads as $similar_ad)
                                    <div>
                                        <a href="{{env('BASE_URL') . 'ads/detail/' . $similar_ad->id . '?country=' . request()->country . '&city=' . request()->city}}" style="text-decoration: none;">
                                            <div class="similar-listing-card">
                                                <div class="similar-listing-image">
                                                    <img src="{{ $similar_ad->main_image_url }}" class="shaking" alt="{{ $similar_ad->name }}">
                                                    <div class="similar-listing-overlay"></div>
                                                    <div class="similar-listing-heart">
                                                        <i class="fa fa-heart-o shaking"></i>
                                                    </div>
                                                    <div class="similar-listing-count">
                                                        1 / {{ count($similar_ad->attachments) > 0 ? count($similar_ad->attachments) : 1 }}
                                                    </div>
                                                </div>
                                                <div class="similar-listing-details">
                                                    <span class="similar-listing-title" title="{{ $similar_ad->title }}">{{ $similar_ad->title ?? 'Title N/A' }}</span>
                                                    <span class="similar-listing-category">{{ $similar_ad->category_name}} > {{$similar_ad->subcategory_name }}</span>
                                                    <h5 class="similar-listing-price">
                                                        {{session('app_currency', 'USD')}} {{ \App\Helpers\SiteHelper::priceFormatter($similar_ad->price) }}
                                                    </h5>
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
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places"></script>
    <script type="text/javascript">
  $(document).ready(function(){
    // Wait for images to loaZd or a short delay
   $('.slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 3000, // 3 seconds
        arrows: true,
        dots: false,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    variableWidth: false,
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
                url: base_url + 'chats/initiate',
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
