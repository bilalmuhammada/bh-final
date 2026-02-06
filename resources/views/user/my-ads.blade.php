@extends('layout.master')
<style>
        .custom-icon {
        font-size: 24px !important; /* Adjust the size as needed */
    }
    .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus
    {  border-color: transparent !important;

    }
    .btn:focus, .btn.focus{
        box-shadow: transparent !important;
    }
    .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
        border-color: transparent !important;
        color: goldenrod !important;
    }
    .nav-link:hover{
        color: goldenrod !important;
    }
    .pricetext{
        font-size: 14px;
        font-weight:bold;
        margin-bottom: -4px;
        margin-top: 4px;
    }
    .upgradebtn:hover, .editbtn:hover, .deletebtn:hover{
        border: 1px solid blue !important;
    }
    .upgradebtn{
    border: 1px solid #32d951 !important;
    white-space: nowrap;
    height: 26px;
    font-size: 13px !important;
    padding: 2px 5px 5px 5px !important;
    border-radius: 5px !important;
    margin-left: 17px;
    }
    .editbtn{
        border: 1px solid #0088eb !important ; 
        white-space: nowrap;
        height: 26px;
        font-size: 13px !important;
        padding: 2px 5px 5px 5px !important;
        border-radius: 5px; 
       
        margin-left: 12px;
    }
    .deletebtn{
        border: 1px solid red !important ; 
        white-space: nowrap;
        height: 26px;
        font-size: 13px !important;
        padding: 2px 5px 5px 5px !important;
        border-radius: 5px; 
        margin-left: 12px;
    }

    .checkbox-label{
        display: inline-block; 
        color: #ff3131;
        white-space: nowrap;
        margin-left: 0;
        margin-top: 5px; 
    }
    .navColor{
        color: blue;
    }

</style>
@section('content')
<div class="container" style="max-width: 1200px !important; margin: 0 auto; padding: 0px 15px;">
    <div>
        <h5 style="font-weight: bold;">My Ads</h5>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" style="font-size:12px; width: 100%; border-bottom: 1px solid #eee;">
            {{-- <li class="nav-item">
                <a class="nav-link navColor active" data-toggle="tab" href="#all_ads">All Ads - {{ $my_ads->count() }}</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link navColor active" style="padding-left: 0;" data-toggle="tab" href="#live">Live -
                    {{ $activeListing->total() }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navColor" data-toggle="tab" href="#draft">Drafts -
                    {{ $draftListing->total() }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navColor" data-toggle="tab" href="#payment_pending">Payment Pending - 
                    {{ $payment_pendingtListing->total() }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navColor" data-toggle="tab" href="#under_review">Under Review
                    - {{ $pendingListing->total() }} </a>
            </li>
            <li class="nav-item">
                <a class="nav-link navColor" data-toggle="tab" href="#rejected">Rejected
                     - {{ $rejectedListing->total() }} </a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link navColor" data-toggle="tab" href="#expired">Expired
                     - {{ $expiredListing->total() }} </a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div id="all_ads" class="cont-w tab-pane fade"><br>
               
            @if ($payment_pendingtListing->total() > 0)
                <!------------------single row----------->
                <div class="col-md-12" style="border-radius:6px;margin-top:-2.5rem;">
                    @foreach($payment_pendingtListing as $my_ad)
                    <form class="place-ad-form" enctype="multipart/form-data">
                        <div class="row" >
                            <div class="col-md-1 d-flex justify-content-center align-items-center" style="max-width: 0pc;margin-left: 18px;">
                                <input type="checkbox" >
                            </div>
                            <div class="col-md-4" style="max-width:11rem;">
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}" >
                                    <div>
                                        <div class="ad-show" style="padding:10px;border-radius:5px;">
                                            
                                         <img src="{{ $my_ad->main_image_url  }}" alt="img" height="120" width="120" style="border-radius: 5px;">
                                        
                                        </div>
                                        
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <span class="badge badge-success" style="margin-top: 15px;">Live</span>

                                <span class="badge badge-primary" style="margin-left: 7px;">Featured</span>
                               
                               <div style="margin-top: 6px;display: grid;">
                            
                                    <a href="" style="font-size: 18px;font-weight:bold;color:#000;">
                                        {{ $my_ad->title ?? 'TITLE N/A' }}
                                    </a>
                            
                                <a href="" class="text-muted" style="font-size: 11px;">
                                    {{ $my_ad->category_name . " / " . $my_ad->subcategory_name }}
                                </a>
                                </div> 
                                
                                   
                                    <h4 style="font-size: 14px;font-weight:bold;">
                                        {{ \App\Helpers\SiteHelper::priceFormatter($my_ad->price) }}
                                        {{-- <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i class="fa fa-trash delete-ad-btn" ad-id="{{ $my_ad->id }}"></i></span> --}}
                                    </h4>
                                    
                              
                               
                               <span style="font-size: 12px;"> Last Updated: 15 May</span> <span style="margin-left:33px ;font-size: 12px;"> Expires: in 9 days</span> 
                            </div>
                            <div class="col-md-4 d-flex flex-column justify-content-end" style="margin-bottom: 13px;">
                                <div >
                                    {{-- <i class="fa fa-exclamation-circle text-warning"></i>  --}}
                                    <span class="text-bold "  style="font-weight: 700; color: goldenrod;"> 👁️ 1,224 </span> 
                                    <!-- Button with calendar icon -->
                                    <button class="btn" style="border: 1px solid #32d951 ; white-space: nowrap; height: 36px; border-radius: 5px; margin-left: 12px;" type="button" aria-expanded="false">
                                        <a href="" style="color:#32d951">Upgrade</a>
                                    </button>
                                    
                                    <button class="btn" style="border: 1px solid #0088eb ; white-space: nowrap; height: 36px; border-radius: 5px; color: #0088eb;margin-left: 12px;" type="button" aria-expanded="false">
                                        Edit
                                    </button>
                                    
                                    <button class="btn" style="border: 1px solid red ; white-space: nowrap; height: 36px; border-radius: 5px; color: red;margin-left: 12px;" type="button" aria-expanded="false">
                                        Delete
                                    </button>
                                    
                                    
                                 
                            
                                    
                                </div>
                                <!-- This column is intentionally left empty -->
                            </div>
                        </div>
                    </form>
                        <!-- Add margin bottom -->
                        <div class="mb-3"></div>
                        <hr style="margin-top: -1.3rem; width: 64%;margin-left: 24px;margin-bottom: -1.4rem;">
                    @endforeach
                </div>
                
                    <!----single row ended------>
            @else
                <!------------------single row----------->
                    {{-- <div class="col-md-12 mx-auto"
                         style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                        <div class="row mx-auto">
                            <div class="mx-auto">
                                <img src="{{ asset('images/no-ads-placeholder.svg')}}" height="120">
                            </div>
                        </div>
                        <div style="text-align: center;font-weight:bold;">
                            <h4>
                                <b>You don't have any ads </b>
                            </h4>
                        </div>
                        <div style="text-align: center;font-size:12px;" class="text-muted">
                            <a href="{{env('BASE_URL') . 'listing/' . 'select-category'}}">
                                <button class="btn"
                                        style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">
                                    Post ad now
                                </button>
                            </a>
                        </div>
                    </div> --}}
                    <!----single row ended------>
                @endif
            </div>
            {{-- live --}}
            <div id="live" class="cont-w tab-pane active ">
                
            @if ($activeListing->total() > 0)
                <!------------------single row----------->
                <div class="row align-items-center">
                    <div class="col-auto" style="width: 40px;">
                        <input type="checkbox" id="selectAllLive" class="select-all-checkbox">
                    </div>
                    <div class="col">
                        <label class="checkbox-label mb-0" for="selectAllLive">All</label>
                    </div>
                    <div class="col-auto" style="margin-top: 6px;">
                        <button class="btn deletebtn py-1" style="color:red;" type="button">
                            Delete
                        </button>
                    </div>
                </div>
                    @foreach($activeListing as $my_ad)
                    <form class="place-ad-form border-bottom pb-3 mb-3" enctype="multipart/form-data">
                        <div class="row align-items-center">
                            <div class="col-auto" style="width: 40px;">
                                <input type="checkbox" class="row-checkbox" value="{{ $my_ad->id }}">
                            </div>
                            <div class="col-auto pr-0">
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}">
                                    <div class="ad-show" style="padding:5px; border-radius:5px; background: #f9f9f9;">
                                        <img src="{{ $my_ad->main_image_url }}" alt="img" height="100" width="120" style="border-radius: 5px; object-fit: cover;">
                                    </div>
                                </a>
                            </div>
                            <div class="col pl-4">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge badge-success">Live</span>
                                    <span class="badge badge-primary ml-1">Featured</span>
                                </div>
                                <div class="mt-2 text-truncate">
                                    <a href="" style="font-size: 16px; font-weight:bold; color:#000;">
                                        {{ $my_ad->title ?? 'TITLE N/A' }}
                                    </a>
                                </div>
                                <div class="text-muted small">
                                    {{ $my_ad->category_name . " / " . $my_ad->subcategory_name }}
                                </div>
                                <h4 class="pricetext mt-1">
                                    {{ \App\Helpers\SiteHelper::priceFormatter($my_ad->price) }}
                                </h4>
                                <div class="small text-muted mt-1">
                                    Last Updated: 15 May · Expires: in 9 days
                                </div>
                            </div>
                            <div class="col-auto text-right">
                                <div class="d-flex align-items-center gap-3">
                                    <span class="text-bold mr-3" style="font-weight: 700; color: goldenrod;">👁️ 1,224</span>
                                    <div class="btn-group">
                                        <button class="btn upgradebtn p-1" type="button" style="border: 1px solid #32d951; color: #32d951; font-size: 12px; min-width: 60px;">Upgrade</button>
                                        <button class="btn editbtn p-1 ml-2" type="button" style="border: 1px solid #0088eb; color: #0088eb; font-size: 12px; min-width: 60px;">Edit</button>
                                        <button class="btn deletebtn p-1 ml-2" type="button" style="border: 1px solid red; color: red; font-size: 12px; min-width: 60px;">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    @endforeach
                    <div class="d-flex justify-content-center paginationLink mt-4 mb-5">
                        {{ $activeListing->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                      
                       
                @else
               
                @endif
            </div>
  {{-- endlive --}}
{{-- draft --}}
            <div id="draft" class="cont-w tab-pane ">
                @if ($draftListing->total() > 0)
                    <!------------------single row----------->
                <div class="row align-items-center mb-4">
                    <div class="col-auto" style="width: 40px;">
                        <input type="checkbox" id="selectAll" class="select-draft-checkbox">
                    </div>
                    <div class="col">
                        <label class="checkbox-label mb-0" for="selectAll">All</label>
                    </div>
                    <div class="col-auto" style="margin-top: 6px;">
                        <button class="btn deletebtn py-1" style="color:red;" type="button">
                            Delete
                        </button>
                    </div>
                </div>
                        @foreach($draftListing as $my_ad)
                        <form class="place-ad-form border-bottom pb-3 mb-3" enctype="multipart/form-data">
                            <div class="row align-items-center">
                                <div class="col-auto" style="width: 40px;">
                                    <input type="checkbox" class="row-checkbox" value="{{ $my_ad->id }}">
                                </div>
                                <div class="col-auto pr-0">
                                    <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}">
                                        <div class="ad-show" style="padding:5px; border-radius:5px; background: #f9f9f9;">
                                            <img src="{{ $my_ad->main_image_url }}" alt="img" height="100" width="120" style="border-radius: 5px; object-fit: cover;">
                                        </div>
                                    </a>
                                </div>
                                <div class="col pl-4">
                                   <div class="mt-2 text-truncate">
                                        <a href="" style="font-size: 16px; font-weight:bold; color:#000;">
                                            {{ $my_ad->title ?? 'TITLE N/A' }}
                                        </a>
                                    </div>
                                    <div class="text-muted small">
                                        {{ $my_ad->category_name . " / " . $my_ad->subcategory_name }}
                                    </div>
                                    <h4 class="pricetext mt-2">
                                        {{ \App\Helpers\SiteHelper::priceFormatter($my_ad->price) }}
                                    </h4>
                                </div>
                                <div class="col-auto text-right">
                                    <div class="btn-group">
                                        <button class="btn editbtn p-1 ml-2" type="button" style="border: 1px solid #0088eb; color: #0088eb; font-size: 12px; min-width: 60px;">Edit</button>
                                        <button class="btn deletebtn p-1 ml-2" type="button" style="border: 1px solid red; color: red; font-size: 12px; min-width: 60px;">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endforeach

                        <div class="d-flex justify-content-center paginationLink mt-4 mb-5">
                            {{ $draftListing->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                          
                           
                    @else
                   
                    @endif
                </div>
                {{-- enddraft --}}
{{-- payment_pending --}}
            <div id="payment_pending" class="cont-w tab-pane fade">
                @if ($payment_pendingtListing->total() > 0)
                <!------------------single row----------->
                <div class="row align-items-center mb-4">
                    <div class="col-auto" style="width: 40px;">
                        <input type="checkbox" id="selectpayment_pending" class="select-payment_pending-checkbox">
                    </div>
                    <div class="col">
                        <label class="checkbox-label mb-0" for="selectpayment_pending">All</label>
                    </div>
                    <div class="col-auto" style="margin-top: 6px;">
                        <button class="btn deletebtn py-1" style="color:red;" type="button">
                            Delete
                        </button>
                    </div>
                </div>
                    @foreach($payment_pendingtListing as $my_ad)
                    <form class="place-ad-form border-bottom pb-3 mb-3" enctype="multipart/form-data">
                        <div class="row align-items-center">
                            <div class="col-auto" style="width: 40px;">
                                <input type="checkbox" class="row-checkbox" value="{{ $my_ad->id }}">
                            </div>
                            <div class="col-auto pr-0">
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}">
                                    <div class="ad-show" style="padding:5px; border-radius:5px; background: #f9f9f9;">
                                        <img src="{{ $my_ad->main_image_url }}" alt="img" height="100" width="120" style="border-radius: 5px; object-fit: cover;">
                                    </div>
                                </a>
                            </div>
                            <div class="col pl-4">
                                <div class="mt-1 text-truncate">
                                    <a href="" style="font-size: 16px; font-weight:bold; color:#000;">
                                        {{ $my_ad->title ?? 'TITLE N/A' }}
                                    </a>
                                </div>
                                <div class="text-muted small">
                                    {{ $my_ad->category_name . " / " . $my_ad->subcategory_name }}
                                </div>
                                <h4 class="pricetext mt-2">
                                    {{ \App\Helpers\SiteHelper::priceFormatter($my_ad->price) }}
                                </h4>
                            </div>
                            <div class="col-auto text-right">
                                <div class="btn-group">
                                    <button class="btn upgradebtn p-1" type="button" style="border: 1px solid #32d951; color: #32d951; font-size: 12px; min-width: 60px;">Complete</button>
                                    <button class="btn editbtn p-1 ml-2" type="button" style="border: 1px solid #0088eb; color: #0088eb; font-size: 12px; min-width: 60px;">Edit</button>
                                    <button class="btn deletebtn p-1 ml-2" type="button" style="border: 1px solid red; color: red; font-size: 12px; min-width: 60px;">Delete</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @endforeach
                    <div class="d-flex justify-content-center paginationLink mt-4 mb-5">
                        {{ $payment_pendingtListing->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                      
                       
                @else
               
                
                @endif
                <!----single row ended------>
            </div>
            {{-- endpayment_pending --}}
            {{-- under_review --}}
            <div id="under_review" class="cont-w tab-pane fade">
            @if ($pendingListing->total() > 0)
                <!------------------single row----------->
                <div class="row align-items-center">
                    <div class="col-auto" style="width: 40px;">
                        <input type="checkbox" id="selectunder_review" class="select-under_review-checkbox">
                    </div>
                    <div class="col-md-8">
                        <label class="checkbox-label mb-0" for="selectunder_review">All</label>
                    </div>
                    <div class="col-auto" style="margin-top: 6px;">
                        <button class="btn deletebtn py-1" style="color:red;" type="button">
                            Delete
                        </button>
                    </div>
                </div>
                    @foreach($pendingListing as $my_ad)
                    <form class="place-ad-form border-bottom " style="margin-left: 0px; margin-top: 0px; margin-bottom: 0px; width: 56.5rem;" enctype="multipart/form-data">
                        <div class="row align-items-center">
                            <div class="col-auto" style="width: 40px;">
                                <input type="checkbox" class="row-checkbox" value="{{ $my_ad->id }}">
                            </div>
                            <div class="col-auto pl-0">
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}">
                                    <div class="ad-show" style="padding:5px; border-radius:5px; background: #f9f9f9;">
                                        <img src="{{ $my_ad->main_image_url }}" alt="img" height="100" width="120" style="border-radius: 5px; object-fit: cover;">
                                    </div>
                                </a>
                            </div>
                            <div class="col pl-2">
                                <span class="badge" style="color: white; background-color: #F5BD02">Under Review</span>
                                <div class="mt-2 text-truncate">
                                    <a href="" style="font-size: 16px; font-weight:bold; color:#000;">
                                        {{ $my_ad->title ?? 'TITLE N/A' }}
                                    </a>
                                </div>
                                <div class="text-muted small">
                                    {{ $my_ad->category_name . " / " . $my_ad->subcategory_name }}
                                </div>
                                <h4 class="pricetext mt-2">
                                    {{ \App\Helpers\SiteHelper::priceFormatter($my_ad->price) }}
                                </h4>
                            </div>
                            <div class="col-auto text-right">
                                {{-- No actions for Under Review --}}
                            </div>
                        </div>
                    </form>
                    @endforeach
                    <div class="d-flex justify-content-center paginationLink mt-4 mb-5">
                        {{ $pendingListing->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                    <!----single row ended------>
            @else
                <!------------------single row----------->
                    {{-- <div class="col-md-12 mx-auto"
                         style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                        <div class="row mx-auto">
                            <div class="mx-auto">
                                <img src="{{ asset('images/no-ads-placeholder.svg')}}" height="120">
                            </div>
                        </div>
                        <div style="text-align: center;font-weight:bold;">
                            <h4>
                                <b>You don't have any ads </b>
                            </h4>
                        </div>
                        <div style="text-align: center;font-size:12px;" class="text-muted">
                            <a href="{{env('BASE_URL') . 'listing/' . 'select-category'}}">
                                <button class="btn"
                                        style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">
                                    Post ad now
                                </button>
                            </a>
                        </div>
                    </div> --}}
                    <!----single row ended------>
                @endif
            </div>
            {{-- endunder_review --}}
             {{-- rejected --}}
            <div id="rejected" class="cont-w tab-pane fade">
            @if ($rejectedListing->total() > 0)
                <!------------------single row----------->
                <div class="row align-items-center">
                    <div class="col-auto" style="width: 40px;">
                        <input type="checkbox" id="selectrejected" class="select-rejected-checkbox">
                    </div>
                    <div class="col">
                        <label class="checkbox-label mb-0" for="selectrejected">All</label>
                    </div>
                    <div class="col-auto" style="margin-top: 6px;">
                        <button class="btn deletebtn py-1" style="color:red;" type="button">
                            Delete
                        </button>
                    </div>
                </div>
                    @foreach($rejectedListing as $my_ad)
                    <form class="place-ad-form border-bottom pb-3 mb-3" enctype="multipart/form-data">
                        <div class="row align-items-center">
                            <div class="col-auto" style="width: 40px;">
                                <input type="checkbox" class="row-checkbox" value="{{ $my_ad->id }}">
                            </div>
                            <div class="col-auto pr-0">
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}">
                                    <div class="ad-show" style="padding:5px; border-radius:5px; background: #f9f9f9;">
                                        <img src="{{ $my_ad->main_image_url }}" alt="img" height="100" width="120" style="border-radius: 5px; object-fit: cover;">
                                    </div>
                                </a>
                            </div>
                            <div class="col pl-4">
                                <span class="badge" style="background-color: #ff3131; color: white;">Rejected</span>
                                <div class="mt-2 text-truncate">
                                    <a href="" style="font-size: 16px; font-weight:bold; color:#000;">
                                        {{ $my_ad->title ?? 'TITLE N/A' }}
                                    </a>
                                </div>
                                <div class="text-muted small">
                                    {{ $my_ad->category_name . " / " . $my_ad->subcategory_name }}
                                </div>
                                <h4 class="pricetext mt-2">
                                    {{ \App\Helpers\SiteHelper::priceFormatter($my_ad->price) }}
                                </h4>
                            </div>
                            <div class="col-auto text-right">
                                <div class="btn-group">
                                    <button class="btn upgradebtn p-1" type="button" style="border: 1px solid #32d951; color: #32d951; font-size: 12px; min-width: 60px;">Repost</button>
                                    <button class="btn editbtn p-1 ml-2" type="button" style="border: 1px solid #0088eb; color: #0088eb; font-size: 12px; min-width: 60px;">Edit</button>
                                    <button class="btn deletebtn p-1 ml-2" type="button" style="border: 1px solid red; color: red; font-size: 12px; min-width: 60px;">Delete</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @endforeach
                    <div class="d-flex justify-content-center paginationLink mt-4 mb-5">
                        {{ $rejectedListing->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                    <!----single row ended------>
            @else
                <!------------------single row----------->
                    {{-- <div class="col-md-12 mx-auto"
                         style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                        <div class="row mx-auto">
                            <div class="mx-auto">
                                <img src="{{ asset('images/no-ads-placeholder.svg')}}" height="120">
                            </div>
                        </div>
                        <div style="text-align: center;font-weight:bold;">
                            <h4>
                                <b>You don't have any ads </b>
                            </h4>
                        </div>
                        <div style="text-align: center;font-size:12px;" class="text-muted">
                            <a href="{{env('BASE_URL') . 'listing/' . 'select-category'}}">
                                <button class="btn"
                                        style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">
                                    Post ad now
                                </button>
                            </a>
                        </div>
                    </div> --}}
                    <!----single row ended------>
                @endif
            </div>
            {{-- endrejected --}}
             {{-- expired --}}
            <div id="expired" class="cont-w tab-pane fade">
            @if ($expiredListing->total() > 0)
                <!------------------single row----------->
                <div class="row align-items-center">
                    <div class="col-auto" style="width: 40px;">
                        <input type="checkbox" id="selectexpired" class="select-expired-checkbox">
                    </div>
                    <div class="col">
                        <label class="checkbox-label mb-0" for="selectexpired">All</label>
                    </div>
                    <div class="col-auto">
                        <button class="btn deletebtn py-1" style="color:red;" type="button">
                            Delete
                        </button>
                    </div>
                </div>
                    @foreach($expiredListing as $my_ad)
                    <form class="place-ad-form border-bottom pb-3 mb-3" enctype="multipart/form-data">
                        <div class="row align-items-center">
                            <div class="col-auto" style="width: 40px;">
                                <input type="checkbox" class="row-checkbox" value="{{ $my_ad->id }}">
                            </div>
                            <div class="col-auto pr-0">
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}">
                                    <div class="ad-show" style="padding:5px; border-radius:5px; background: #f9f9f9;">
                                        <img src="{{ $my_ad->main_image_url }}" alt="img" height="100" width="120" style="border-radius: 5px; object-fit: cover;">
                                    </div>
                                </a>
                            </div>
                            <div class="col pl-4">
                                <span class="badge" style="background-color: #ff3131; color: white;">Expired</span>
                                <div class="mt-2 text-truncate">
                                    <a href="" style="font-size: 16px; font-weight:bold; color:#000;">
                                        {{ $my_ad->title ?? 'TITLE N/A' }}
                                    </a>
                                </div>
                                <div class="text-muted small">
                                    {{ $my_ad->category_name . " / " . $my_ad->subcategory_name }}
                                </div>
                                <h4 class="pricetext mt-2">
                                    {{ \App\Helpers\SiteHelper::priceFormatter($my_ad->price) }}
                                </h4>
                            </div>
                            <div class="col-auto text-right">
                                <div class="btn-group">
                                    <button class="btn upgradebtn p-1" type="button" style="border: 1px solid #32d951; color: #32d951; font-size: 12px; min-width: 60px;">Repost</button>
                                    <button class="btn editbtn p-1 ml-2" type="button" style="border: 1px solid #0088eb; color: #0088eb; font-size: 12px; min-width: 60px;">Edit</button>
                                    <button class="btn deletebtn p-1 ml-2" type="button" style="border: 1px solid red; color: red; font-size: 12px; min-width: 60px;">Delete</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @endforeach
                    <div class="d-flex justify-content-center paginationLink mt-4 mb-5">
                        {{ $expiredListing->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                    <!----single row ended------>
            @else
                <!------------------single row----------->
                    {{-- <div class="col-md-12 mx-auto"
                         style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                        <div class="row mx-auto">
                            <div class="mx-auto">
                                <img src="{{ asset('images/no-ads-placeholder.svg')}}" height="120">
                            </div>
                        </div>
                        <div style="text-align: center;font-weight:bold;">
                            <h4>
                                <b>You don't have any ads </b>
                            </h4>
                        </div>
                        <div style="text-align: center;font-size:12px;" class="text-muted">
                            <a href="{{env('BASE_URL') . 'listing/' . 'select-category'}}">
                                <button class="btn"
                                        style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">
                                    Post ad now
                                </button>
                            </a>
                        </div>
                    </div> --}}
                    <!----single row ended------>
                @endif
            </div>
            {{-- end expired --}}
        </div>
    </div>

@endsection

@section('page_scripts')
<script>
$(document).ready(function() {
    // When the "Select All" checkbox is changed
    $(document).on('change', '#selectAll', function() {
        // console.log("Select All checkbox changed");
            $('#draft .row-checkbox').prop('checked', $(this).is(':checked'));
        });
        $(document).on('change', '#selectAllLive', function() {
        // console.log("Select All checkbox changed");
            $('#live .row-checkbox').prop('checked', $(this).is(':checked'));
        });
        $(document).on('change', '#selectpayment_pending', function() {
        // console.log("Select All checkbox changed");
            $('#payment_pending .row-checkbox').prop('checked', $(this).is(':checked'));
        });

        $(document).on('change', '#selectunder_review', function() {
        // console.log("Select All checkbox changed");
            $('#under_review .row-checkbox').prop('checked', $(this).is(':checked'));
        });
        $(document).on('change', '#selectrejected', function() {
        // console.log("Select All checkbox changed");
            $('#rejected .row-checkbox').prop('checked', $(this).is(':checked'));
        });
        
        $(document).on('change', '#selectexpired', function() {
        // console.log("Select All checkbox changed");
            $('#expired .row-checkbox').prop('checked', $(this).is(':checked'));
        });
     

        
        
    // jQuery for deleting selected ads
    $(document).on('click', '#deletedbtn', function() {
        let selectedIds = $('.row-checkbox:checked').map(function() {
            return this.value;
        }).get();

        if (selectedIds.length > 0) {
            // Confirmation dialog
            if (confirm('Are you sure you want to delete the selected ads?')) {
                // Example: AJAX call to delete selected ads on the server
                console.log("Selected IDs to delete:", selectedIds);
                // $.post('/delete-ads', { ids: selectedIds })
                //    .done(function(response) {
                //        // handle success
                //    })
                //    .fail(function(error) {
                //        // handle error
                //    });
            }
        } else {
            alert('No ads selected for deletion.');
        }
    });
});


$(document).on('click', '.place-ad-form-submit', function (e) {
    e.preventDefault();
     var formData = new FormData($('.place-ad-form')[0]);
// console.log(formData);
    $.ajax({
        url: api_url + 'listing/nextsubmit',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        dataType: "JSON",
        success: function (response) {
        console.log(response);
            if (response.status) {

                setTimeout(function () {
                    window.location.assign(`${base_url}listing/plane-ad/${response.listing_id}`);
                }, 600);

            } else {
                alert(response.message);
            }
        },
        error: function (response) {
            showAlert("error", "Server Error");
        }
    });
});


</script>
@endsection