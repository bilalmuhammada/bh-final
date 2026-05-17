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
    .upgradebtn:hover, .editbtn:hover {
        background-color: blue !important;
        color: white !important;
        border-color: blue !important;
    }
    .tab-content > .tab-pane {
        display: none !important;
    }
    .tab-content > .tab-pane.active {
        display: block !important;
    }
    .nav-link {
        display: block;
        padding: 0.3rem 1rem 0rem 0rem !important;
    }
    .nav-tabs .nav-link.active {
        background-color: transparent !important;
  
    }

</style>
@section('content')
<div class="container" style="max-width: 1200px !important; margin: 0 auto; padding: 0px 15px; margin-bottom: 100px;">
    <div>
        <h5 style="font-weight: bold;">My Ads</h5>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" style="font-size:12px; width: 100%; border-bottom: 1px solid #eee;">
            {{-- <li class="nav-item">
                <a class="nav-link navColor active" data-toggle="tab" href="#all_ads">All Ads - {{ $my_ads->count() }}</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link navColor active" id="live-tab" data-toggle="tab" data-bs-toggle="tab" href="#live" data-bs-target="#live" role="tab" aria-controls="live" aria-selected="true">Live -
                    {{ $activeListing->total() }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navColor" id="draft-tab" data-toggle="tab" data-bs-toggle="tab" href="#draft" data-bs-target="#draft" role="tab" aria-controls="draft" aria-selected="false">Drafts -
                    {{ $draftListing->total() }}</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link navColor" id="payment-pending-tab" data-toggle="tab" data-bs-toggle="tab" href="#payment_pending" data-bs-target="#payment_pending" role="tab" aria-controls="payment_pending" aria-selected="false">Payment Pending - 
                    {{ $payment_pendingListing->total() }}</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link navColor" id="under-review-tab" data-toggle="tab" data-bs-toggle="tab" href="#under_review" data-bs-target="#under_review" role="tab" aria-controls="under_review" aria-selected="false">Under Review
                    - {{ $pendingListing->total() }} </a>
            </li>
            <li class="nav-item">
                <a class="nav-link navColor" id="rejected-tab" data-toggle="tab" data-bs-toggle="tab" href="#rejected" data-bs-target="#rejected" role="tab" aria-controls="rejected" aria-selected="false">Rejected
                     - {{ $rejectedListing->total() }} </a>
            </li>
            <li class="nav-item">
                <a class="nav-link navColor" id="expired-tab" data-toggle="tab" data-bs-toggle="tab" href="#expired" data-bs-target="#expired" role="tab" aria-controls="expired" aria-selected="false">Expired
                     - {{ $expiredListing->total() }} </a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content" id="myAdsTabContent">
            {{-- live --}}
            <div id="live" class="tab-pane active" role="tabpanel" aria-labelledby="live-tab">
                
            @if ($activeListing->total() > 0)
                <!------------------single row----------->
                <div class="row align-items-center">
                    <div class="col-auto" style="width: 40px;">
                        <input type="checkbox" id="selectAllLive" class="select-all-checkbox">
                    </div>
                    <div class="col-md-7">
                        <label class="checkbox-label mb-0" for="selectAllLive">All</label>
                    </div>
                    <div class="col-auto" style="margin-top: 6px;">
                        <button class="btn deletebtn py-1" style="color:red;" type="button">
                            Delete
                        </button>
                    </div>
                </div>
                    @foreach($activeListing as $my_ad)
                    <form class="place-ad-form border-bottom" enctype="multipart/form-data">
                        <div class="row align-items-center">
                            <div class="col-auto" style="width: 40px;">
                                <input type="checkbox" class="row-checkbox" value="{{ $my_ad->id }}">
                            </div>
                            <div class="col-auto pr-0">
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}">
                                    <div class="ad-show" style="padding:5px; border-radius:4px; background: #f9f9f9;">
                                        <img src="{{ $my_ad->main_image_url }}" alt="img" height="100" width="120" style="border-radius: 5px; object-fit: cover;">
                                    </div>
                                </a>
                            </div>
                            <div class="col pl-4">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge badge-success">Live</span>
                                    <span class="badge badge-primary ml-1">Featured</span>
                                </div>
                                <div class=" text-truncate">
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
                            <div class="col-auto text-right align-self-end pb-1">
                                <div class="d-flex align-items-center gap-3">
                                    <span class="text-bold mr-1" style="font-weight: 700; color: goldenrod;">👁️ 1,224</span>
                                    <div class="btn-group">
                                        <button class="btn upgradebtn p-1" type="button" style="border: 1px solid #32d951; color: #32d951; font-size: 11px; min-width: 50px;">Upgrade</button>
                                        <button class="btn editbtn p-1 ml-2" type="button" style="border: 1px solid #0088eb; color: #0088eb; font-size: 11px; min-width: 50px;">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    @endforeach
                    <div class="d-flex justify-content-center paginationLink mt-4 mb-5">
                        {{ $activeListing->links('pagination::bootstrap-4') }}
                    </div>
                      
                       
                @else
               
                @endif
            </div>
  {{-- endlive --}}
{{-- draft --}}
            <div id="draft" class="tab-pane" role="tabpanel">
                @if ($draftListing->total() > 0)
                    <!------------------single row----------->
                <div class="row align-items-center">
                    <div class="col-auto" style="width: 40px;">
                        <input type="checkbox" id="selectAll" class="select-draft-checkbox">
                    </div>
                    <div class="col-md-7">
                        <label class="checkbox-label mb-0" for="selectAll">All</label>
                    </div>
                    <div class="col-auto" style="margin-top: 6px;">
                        <button class="btn deletebtn py-1" style="color:red;" type="button">
                            Delete
                        </button>
                    </div>
                </div>
                        @foreach($draftListing as $my_ad)
                        <form class="place-ad-form border-bottom" enctype="multipart/form-data">
                            <div class="row align-items-center">
                                <div class="col-auto" style="width: 40px;">
                                    <input type="checkbox" class="row-checkbox" value="{{ $my_ad->id }}">
                                </div>
                                <div class="col-auto pr-0">
                                    <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}">
                                        <div class="ad-show" style="padding:5px; border-radius:0px; background: #f9f9f9;">
                                            <img src="{{ $my_ad->main_image_url }}" alt="img" height="100" width="120" style="border-radius: 5px; object-fit: cover;">
                                        </div>
                                    </a>
                                </div>
                                <div class="col pl-4">
                                   <div class=" text-truncate">
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
                                <div class="col-auto text-right align-self-end pb-1">
                                    <div class="btn-group">
                                        <button class="btn editbtn p-1 ml-2" type="button" style="border: 1px solid #0088eb; color: #0088eb; font-size: 11px; min-width: 50px;">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endforeach

                    <div class="d-flex justify-content-center paginationLink mt-4 mb-5">
                        {{ $draftListing->links('pagination::bootstrap-4') }}
                    </div>
                @else
                   
                @endif
            </div>
            {{-- enddraft --}}
{{-- payment_pending --}}
            {{-- <div id="payment_pending" class="tab-pane" role="tabpanel">
                @if ($payment_pendingListing->total() > 0)
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
                    @foreach($payment_pendingListing as $my_ad)
                    <form class="place-ad-form border-bottom pb-3 mb-3" enctype="multipart/form-data">
                        <div class="row align-items-center">
                            <div class="col-auto" style="width: 40px;">
                                <input type="checkbox" class="row-checkbox" value="{{ $my_ad->id }}">
                            </div>
                            <div class="col-auto pr-0">
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}">
                                    <div class="ad-show" style="padding:5px; border-radius:4px; background: #f9f9f9;">
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
                            <div class="col-auto text-right align-self-end pb-1">
                                <div class="btn-group">
                                    <button class="btn upgradebtn p-1" type="button" style="border: 1px solid #32d951; color: #32d951; font-size: 11px; min-width: 50px;">Complete</button>
                                    <button class="btn editbtn p-1 ml-2" type="button" style="border: 1px solid #0088eb; color: #0088eb; font-size: 11px; min-width: 50px;">Edit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @endforeach
                    <div class="d-flex justify-content-center paginationLink mt-4 mb-5">
                        {{ $payment_pendingListing->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                      
                       
                @else
               
                
                @endif
                <!----single row ended------>
            </div> --}}
            {{-- endpayment_pending --}}
            {{-- under_review --}}
            <div id="under_review" class="tab-pane" role="tabpanel">
            @if ($pendingListing->total() > 0)
                <!------------------single row----------->
                <div class="row align-items-center">
                    <div class="col-auto" style="width: 40px;">
                        <input type="checkbox" id="selectunder_review" class="select-under_review-checkbox">
                    </div>
                    <div class="col-md-7">
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
                                    <div class="ad-show" style="padding:5px; border-radius:4px; background: #f9f9f9;">
                                        <img src="{{ $my_ad->main_image_url }}" alt="img" height="100" width="120" style="border-radius: 5px; object-fit: cover;">
                                    </div>
                                </a>
                            </div>
                            <div class="col pl-2">
                                <span class="badge" style="color: white; background-color: #F5BD02">Under Review</span>
                                <div class="text-truncate">
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
                            <div class="col-auto text-right align-self-end pb-1">
                                {{-- No actions for Under Review --}}
                            </div>
                        </div>
                    </form>
                    @endforeach
                    <div class="d-flex justify-content-center paginationLink mt-4 mb-5">
                        {{ $pendingListing->links('pagination::bootstrap-4') }}
                    </div>
                @else
               
                @endif
            </div>
            {{-- endunder_review --}}
             {{-- rejected --}}
            <div id="rejected" class="tab-pane" role="tabpanel">
            @if ($rejectedListing->total() > 0)
                <!------------------single row----------->
                <div class="row align-items-center">
                    <div class="col-auto" style="width: 40px;">
                        <input type="checkbox" id="selectrejected" class="select-rejected-checkbox">
                    </div>
                    <div class="col-md-7">
                        <label class="checkbox-label mb-0" for="selectrejected">All</label>
                    </div>
                    <div class="col-auto" style="margin-top: 6px;">
                        <button class="btn deletebtn py-1" style="color:red;" type="button">
                            Delete
                        </button>
                    </div>
                </div>
                    @foreach($rejectedListing as $my_ad)
                    <form class="place-ad-form border-bottom" enctype="multipart/form-data">
                        <div class="row align-items-center">
                            <div class="col-auto" style="width: 40px;">
                                <input type="checkbox" class="row-checkbox" value="{{ $my_ad->id }}">
                            </div>
                            <div class="col-auto pr-0">
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}">
                                    <div class="ad-show" style="padding:5px; border-radius:4px; background: #f9f9f9;">
                                        <img src="{{ $my_ad->main_image_url }}" alt="img" height="100" width="120" style="border-radius: 5px; object-fit: cover;">
                                    </div>
                                </a>
                            </div>
                            <div class="col pl-4">
                                <span class="badge" style="background-color: #ff3131; color: white;">Rejected</span>
                                <div class="text-truncate">
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
                            <div class="col-auto text-right align-self-end pb-1">
                                <div class="btn-group">
                                    <button class="btn upgradebtn p-1" type="button" style="border: 1px solid #32d951; color: #32d951; font-size: 11px; min-width: 50px;">Repost</button>
                                    <button class="btn editbtn p-1 ml-2" type="button" style="border: 1px solid #0088eb; color: #0088eb; font-size: 11px; min-width: 50px;">Edit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @endforeach
                    <div class="d-flex justify-content-center paginationLink mt-4 mb-5">
                        {{ $rejectedListing->links('pagination::bootstrap-4') }}
                    </div>
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
            <div id="expired" class="tab-pane" role="tabpanel">
            @if ($expiredListing->total() > 0)
                <!------------------single row----------->
                <div class="row align-items-center">
                    <div class="col-auto" style="width: 40px;">
                        <input type="checkbox" id="selectexpired" class="select-expired-checkbox">
                    </div>
                    <div class="col-md-7">
                        <label class="checkbox-label mb-0" for="selectexpired">All</label>
                    </div>
                    <div class="col-auto">
                        <button class="btn deletebtn py-1" style="color:red;" type="button">
                            Delete
                        </button>
                    </div>
                </div>
                    @foreach($expiredListing as $my_ad)
                    <form class="place-ad-form border-bottom " enctype="multipart/form-data">
                        <div class="row align-items-center">
                            <div class="col-auto" style="width: 40px;">
                                <input type="checkbox" class="row-checkbox" value="{{ $my_ad->id }}">
                            </div>
                            <div class="col-auto pr-0">
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}">
                                    <div class="ad-show" style="padding:5px; border-radius:4px; background: #f9f9f9;">
                                        <img src="{{ $my_ad->main_image_url }}" alt="img" height="100" width="120" style="border-radius: 5px; object-fit: cover;">
                                    </div>
                                </a>
                            </div>
                            <div class="col pl-4">
                                <span class="badge" style="background-color: #ff3131; color: white;">Expired</span>
                                <div class="text-truncate">
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
                            <div class="col-auto text-right align-self-end pb-1">
                                <div class="btn-group">
                                    <button class="btn upgradebtn p-1" type="button" style="border: 1px solid #32d951; color: #32d951; font-size: 11px; min-width: 50px;">Repost</button>
                                    <button class="btn editbtn p-1 ml-2" type="button" style="border: 1px solid #0088eb; color: #0088eb; font-size: 11px; min-width: 50px;">Edit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @endforeach
                    <div class="d-flex justify-content-center paginationLink mt-4 mb-5">
                        {{ $expiredListing->links('pagination::bootstrap-4') }}
                    </div>
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
</div>

@endsection

@section('page_scripts')
<script>
$(document).ready(function() {
    // Force tab switching behavior to resolve Bootstrap version conflicts
    $('[data-bs-toggle="tab"], [data-toggle="tab"]').on('click', function(e) {
        e.preventDefault();
        var targetSelector = $(this).attr('data-bs-target') || $(this).attr('href');
        
        // Remove active class from all other tabs and panes
        $('.nav-link').removeClass('active');
        $('.tab-pane').removeClass('active');
        
        // Add active class to current tab and targeted pane
        $(this).addClass('active');
        $(targetSelector).addClass('active');
    });

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