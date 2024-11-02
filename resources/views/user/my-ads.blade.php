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
       
        margin-left: 12px;"
    }
    .deletebtn{
        border: 1px solid red !important ; 
        white-space: nowrap;
        height: 26px;
        font-size: 13px !important;
        padding: 2px 5px 5px 5px !important;
        border-radius: 5px; 
        margin-left: 12px;"
    }

</style>
@section('content')
    <div class="cont-w">
        <h5 style="font-weight: bold;">My Ads</h5>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" style="font-size:12px;width: 65.5%;">
            {{-- <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#all_ads">All Ads - {{ $my_ads->count() }}</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#live">Live -
                    {{ $activeListing->total() }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#draft">Drafts -
                    {{ $draftListing->total() }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#payment_pending">Payment Pending - 
                    {{ $payment_pendingtListing->total() }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#under_review">Under Review
                    - {{ $pendingListing->total() }} </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#rejected">Rejected
                     - {{ $rejectedListing->total() }} </a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#expired">Expired
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
            <div id="live" class="cont-w tab-pane active "><br>
                
            @if ($activeListing->total() > 0)
                <!------------------single row----------->
                <div class="col-md-12" style="border-radius:6px;margin-top:-2rem;">
                    <label style="display: inline-block; color: red;white-space: nowrap; margin-left: -13px; margin-top: 16px; height: 36px;">
                        <input type="checkbox" id="selectAll" style=" border-radius: 5px;"> &nbsp;&nbsp;All
                      </label>
                      <button class="btn deletebtn" style="color: red; display:block;  margin: -38px 0px -38px 49.2rem;padding-top:0;" type="button" aria-expanded="false">
                        Delete
                    </button>
                      
                        {{-- <input type="checkbox" style="color: red white-space: nowrap;margin-left: -16px;margin-top: 12px; height: 36px; border-radius: 5px;"/>All --}}
                   
                    @foreach($activeListing as $my_ad)
                    <form class="place-ad-form" enctype="multipart/form-data">
                        <div class="row" style="margin-top: -3rem;" >
                           
                            <div class="col-md-1 d-flex justify-content-center align-items-center" style="max-width: 0pc;margin-left: 18px;margin-left: 19px;">
                                
                               
                                <input type="checkbox" class="row-checkbox" id="row-checkbox">
                            </div>
                            <div class="col-md-4" style="max-width: 11pc;margin-left: -15px;">
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}" >
                                    <div >
                                        <div class="ad-show" style="padding:10px;border-radius:5px;margin-left: 11px;margin-top: 20px;">
                                            {{-- <div class="img"> --}}
                                                <img src="{{ $my_ad->main_image_url  }}" alt="img" height="100" width="120" style="border-radius: 5px;">
                                            {{-- </div> --}}
                                        </div>
                                        {{-- <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:6.5rem; z-index: 2;color: white;">
                                            <i class="fa fa-image" style="color:white;margin-left: 5px;"></i><span class="text-black" style="margin-left:9px">{{ $my_ad->images->count() }}</span>
                                        </div> --}}
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <span class="badge badge-success" style="margin-top: 32px;">Live</span>

                                <span class="badge badge-primary" style="margin-left: 7px;">Featured</span>
                               
                               <div style="display: grid;">
                            
                                    <a href="" style="font-size: 18px;font-weight:bold;color:#000;">
                                        {{ $my_ad->title ?? 'TITLE N/A' }}
                                    </a>
                            
                                <a href="" class="text-muted" style="font-size: 11px;">
                                    {{ $my_ad->category_name . " / " . $my_ad->subcategory_name }}
                                </a>
                                </div> 
                                
                                   
                                    <h4 class="pricetext">
                                        {{ \App\Helpers\SiteHelper::priceFormatter($my_ad->price) }}
                                        {{-- <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i class="fa fa-trash delete-ad-btn" ad-id="{{ $my_ad->id }}"></i></span> --}}
                                    </h4>
                                    
                              
                               
                               <span style="font-size: 12px;"> Last Updated: 15 May</span> <span style="margin-left:33px ;font-size: 12px;"> Expires: in 9 days</span> 
                            </div>
                            <div class="col-md-4 d-flex flex-column justify-content-end" style="margin-bottom: 13px;">
                                <div style="margin-left: 4.8rem;">
                                    {{-- <i class="fa fa-exclamation-circle text-warning"></i>  --}}
                                    <span class="text-bold "  style="font-weight: 700; color: goldenrod;"> 👁️ 1,224 </span> 
                                    <!-- Button with calendar icon -->
                                    <button class="btn upgradebtn"  type="button" aria-expanded="false">
                                        <a href="" style="color: #32d951">Upgrade</a>
                                    </button>
                                    
                                    <button class="btn editbtn" style="color: #0088eb;" type="button" aria-expanded="false">
                                        Edit
                                    </button>
                                    
                                    <button class="btn deletebtn" style="color: red;" type="button" aria-expanded="false">
                                        Delete
                                    </button>
                                    
                                    
                                 
                            
                                    
                                </div>
                                <!-- This column is intentionally left empty -->
                            </div>
                        </div>
                    </form>
                        <!-- Add margin bottom -->
                        <div class="mb-3"></div>
                        <hr style="margin-top: -1rem; width: 64%;margin-left: 24px;margin-bottom: 1.6rem;">
                    @endforeach
                    <div class="d-flex justify-content-center paginationLink" style="margin: 29px 27rem 0px 0px">
                        {{ $activeListing->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                      
                       
                @else
               
                @endif
            </div>
  {{-- endlive --}}
{{-- draft --}}
            <div id="draft" class="cont-w tab-pane "><br>
                
                @if ($draftListing->total() > 0)
                    <!------------------single row----------->
                    <div class="col-md-12" style="border-radius:6px;margin-top:-2rem;">
                        <label style="display: inline-block; color: red;white-space: nowrap; margin-left: -13px; margin-top: 16px; height: 36px;">
                            <input type="checkbox" id="selectAll" style=" border-radius: 5px;"> &nbsp;&nbsp;All
                          </label>
                          <button class="btn deletebtn" style="color: red;display:block;  margin: -38px 0px -38px 49.2rem;padding-top:0;" type="button" aria-expanded="false">
                            Delete
                        </button>
                        @foreach($draftListing as $my_ad)
                        <form class="place-ad-form" enctype="multipart/form-data">
                            <div class="row"  >
                                <div class="col-md-1 d-flex justify-content-center align-items-center" style="max-width: 0pc;margin-left: 18px;">
                                    <input type="checkbox"  class="row-checkbox">
                                </div>
                                <div class="col-md-4" style="max-width: 11pc">
                                    <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}" >
                                        <div >
                                            <div class="ad-show" style="padding:10px;border-radius:5px;margin-top: 0px;">
                                                {{-- <div class="img"> --}}
                                                    <img src="{{ $my_ad->main_image_url  }}" alt="img" height="100" width="120" style="border-radius: 5px;">
                                                {{-- </div> --}}
                                            </div>
                                            {{-- <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:6.5rem; z-index: 2;color: white;">
                                                <i class="fa fa-image" style="color:white;margin-left: 5px;"></i><span class="text-black" style="margin-left:9px">{{ $my_ad->images->count() }}</span>
                                            </div> --}}
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    {{-- <span class="badge badge-success" style="margin-top: 15px;">Live</span>
    
                                    <span class="badge badge-primary" style="margin-left: 7px;">Featured</span> --}}
                                   
                                   <div style="margin-top: 13px;display: grid;">
                                
                                        <a href="" style="font-size: 18px;font-weight:bold;color:#000;">
                                            {{ $my_ad->title ?? 'TITLE N/A' }}
                                        </a>
                                
                                    <a href="" class="text-muted" style="font-size: 11px;">
                                        {{ $my_ad->category_name . " / " . $my_ad->subcategory_name }}
                                    </a>
                                    </div> 
                                    
                                       
                                        <h4 class="pricetext">
                                            {{ \App\Helpers\SiteHelper::priceFormatter($my_ad->price) }}
                                            {{-- <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i class="fa fa-trash delete-ad-btn" ad-id="{{ $my_ad->id }}"></i></span> --}}
                                        </h4>
                                        
                                  
                                   
                                   {{-- <span style="font-size: 12px;"> Last Updated: 15 May</span> <span style="margin-left:33px ;font-size: 12px;"> Expires: in 9 days</span>  --}}
                                </div>
                                <div class="col-md-4 d-flex flex-column justify-content-end" style="margin-bottom: 13px;">
                                    <div style="margin-left:13.6rem;" >
                                        {{-- <i class="fa fa-exclamation-circle text-warning"></i>  --}}
                                        {{-- <span class="text-bold "  style="font-weight: 700; color: goldenrod;"> 👁️ 1,224 </span>  --}}
                                        <!-- Button with calendar icon -->
                                        {{-- <button class="btn" style="border: 1px solid #32d951 ; white-space: nowrap; height: 36px; border-radius: 5px; margin-left: 12px;" type="button" aria-expanded="false">
                                            <a href="" style="color: #32d951">Upgrade</a>
                                        </button> --}}
                                        
                                        <button class="btn editbtn" style="color: #0088eb" type="button" aria-expanded="false">
                                            Edit
                                        </button>
                                        
                                        <button class="btn deletebtn" style="color: red;" type="button" aria-expanded="false">
                                            Delete
                                        </button>
                                        
                                        
                                     
                                
                                        
                                    </div>
                                    <!-- This column is intentionally left empty -->
                                </div>
                            </div>
                        </form>
                       
                            <!-- Add margin bottom -->
                            <div class="mb-3"></div>
                            <hr style="margin-top: -1rem; width: 64%;margin-left: 24px;margin-bottom: -1.3rem;">
                        @endforeach

                        <div class="d-flex justify-content-center paginationLink" style="margin: 29px 27rem 0px 0px">
                            {{ $draftListing->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                          
                           
                    @else
                   
                    @endif
                </div>
                {{-- enddraft --}}
{{-- payment_pending --}}
            <div id="payment_pending" class="cont-w tab-pane fade"><br>
                @if ($payment_pendingtListing->total() > 0)
                <!------------------single row----------->
                <div class="col-md-12" style="border-radius:6px;margin-top:-2rem;">
                    <label style="display: inline-block; color: red;white-space: nowrap; margin-left: -13px; margin-top: 16px; height: 36px;">
                        <input type="checkbox" style=" border-radius: 5px;"> &nbsp;&nbsp;All
                      </label>
                      <button class="btn deletebtn" style="color:red; display:block;  margin: -38px 0px -38px 49.2rem;padding-top:0;" type="button" aria-expanded="false">
                        Delete
                    </button>
                    @foreach($payment_pendingtListing as $my_ad)
                    <form class="place-ad-form" enctype="multipart/form-data">
                        <div class="row"  style="margin-top: -3rem;">
                            <div class="col-md-1 d-flex justify-content-center align-items-center" style="max-width: 0pc;margin-left: 18px;">
                                <input type="checkbox">
                            </div>
                            <div class="col-md-4" style="max-width: 11pc">
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}" >
                                    <div >
                                        <div class="ad-show" style="padding:10px;border-radius:5px;margin-top: 16px;">
                                            {{-- <div class="img"> --}}
                                                <img src="{{ $my_ad->main_image_url  }}" alt="img" height="100" width="120" style="border-radius: 5px;">
                                            {{-- </div> --}}
                                        </div>
                                        {{-- <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:6.5rem; z-index: 2;color: white;">
                                            <i class="fa fa-image" style="color:white;margin-left: 5px;"></i><span class="text-black" style="margin-left:9px">{{ $my_ad->images->count() }}</span>
                                        </div> --}}
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                {{-- <span class="badge badge-success" style="margin-top: 15px;">Live</span>

                                <span class="badge badge-primary" style="margin-left: 7px;">Featured</span> --}}
                               
                               <div style="margin-top: 21px;display: grid;">
                            
                                    <a href="" style="font-size: 18px;font-weight:bold;color:#000;">
                                        {{ $my_ad->title ?? 'TITLE N/A' }}
                                    </a>
                            
                                <a href="" class="text-muted" style="font-size: 11px;">
                                    {{ $my_ad->category_name . " / " . $my_ad->subcategory_name }}
                                </a>
                                </div> 
                                
                                   
                                    <h4 class="pricetext">
                                        {{ \App\Helpers\SiteHelper::priceFormatter($my_ad->price) }}
                                        {{-- <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i class="fa fa-trash delete-ad-btn" ad-id="{{ $my_ad->id }}"></i></span> --}}
                                    </h4>
                                    
                              
                               
                               {{-- <span style="font-size: 12px;"> Last Updated: 15 May</span> <span style="margin-left:33px ;font-size: 12px;"> Expires: in 9 days</span>  --}}
                            </div>
                            <div class="col-md-4 d-flex flex-column justify-content-end" style="margin-bottom: 13px;">
                                <div style="margin-left:8rem;" >
                                    {{-- <i class="fa fa-exclamation-circle text-warning"></i>  --}}
                                    {{-- <span class="text-bold "  style="font-weight: 700; color: goldenrod;"> 👁️ 1,224 </span>  --}}
                                    <!-- Button with calendar icon -->
                                    <button class="btn upgradebtn"  type="button" aria-expanded="false">
                                        <a href="" style="color: #32d951">Complete</a>
                                    </button>
                                    
                                    <button class="btn editbtn" style="color: #0088eb;" type="button" aria-expanded="false">
                                        Edit
                                    </button>
                                    
                                    <button class="btn deletebtn" style=" color: red;" type="button" aria-expanded="false">
                                        Delete
                                    </button>
                                    
                                    
                                 
                            
                                    
                                </div>
                                <!-- This column is intentionally left empty -->
                            </div>
                        </div>
                    </form>
                        <!-- Add margin bottom -->
                        <div class="mb-3"></div>
                        <hr style="margin-top: -1rem; width: 64%;margin-left: 24px;margin-bottom: -1.2rem;">
                    @endforeach
                    <div class="d-flex justify-content-center paginationLink" style="margin: 29px 27rem 0px 0px">
                        {{ $payment_pendingtListing->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                      
                       
                @else
               
                
                @endif
                <!----single row ended------>
            </div>
            {{-- endpayment_pending --}}
            {{-- under_review --}}
            <div id="under_review" class="cont-w tab-pane fade"><br>
            @if ($pendingListing->total() > 0)
                <!------------------single row----------->
                <div class="col-md-12" style="border-radius:6px;margin-top:-2rem;">
                    <label style="display: inline-block; color: red;white-space: nowrap; margin-left: -13px; margin-top: 16px; height: 36px;">
                        <input type="checkbox" style=" border-radius: 5px;"> &nbsp;&nbsp;All
                      </label>
                      <button class="btn deletebtn" style="color:red;display:block;  margin: -38px 0px -38px 49.2rem;padding-top:0;" type="button" aria-expanded="false">
                        Delete
                    </button>
                    @foreach($pendingListing as $my_ad)
                    <form class="place-ad-form" enctype="multipart/form-data">
                        <div class="row" style="margin-top: -3rem;">
                            <div class="col-md-1 d-flex justify-content-center align-items-center" style="max-width: 0pc;margin-left: 18px;">
                                <input type="checkbox">
                            </div>
                            <div class="col-md-4" style="max-width: 11pc">
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}" >
                                    <div >
                                        <div class="ad-show" style="padding:10px;border-radius:5px;margin-top: 16px;">
                                            {{-- <div class="img"> --}}
                                                <img src="{{ $my_ad->main_image_url  }}" alt="img" height="100" width="120" style="border-radius: 5px;">
                                            {{-- </div> --}}
                                        </div>
                                        {{-- <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:6.5rem; z-index: 2;color: white;">
                                            <i class="fa fa-image" style="color:white;margin-left: 5px;"></i><span class="text-black" style="margin-left:9px">{{ $my_ad->images->count() }}</span>
                                        </div> --}}
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                {{-- {{-- <span class="badge badge-success" style="margin-top: 15px;">Live</span> --}}

                                <span class="badge " style="margin-left: 1px;margin-top: 26px; color: white;background-color: #F5BD02">Under Review</span> 
                               
                               <div style="margin-top:7px;display: grid;">
                            
                                    <a href="" style="font-size: 18px;font-weight:bold;color:#000;">
                                        {{ $my_ad->title ?? 'TITLE N/A' }}
                                    </a>
                            
                                <a href="" class="text-muted" style="font-size: 11px;">
                                    {{ $my_ad->category_name . " / " . $my_ad->subcategory_name }}
                                </a>
                                </div> 
                                
                                   
                                    <h4 class="pricetext">
                                        {{ \App\Helpers\SiteHelper::priceFormatter($my_ad->price) }}
                                        {{-- <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i class="fa fa-trash delete-ad-btn" ad-id="{{ $my_ad->id }}"></i></span> --}}
                                    </h4>
                                    
                              
                               
                               {{-- <span style="font-size: 12px;"> Last Updated: 15 May</span> <span style="margin-left:33px ;font-size: 12px;"> Expires: in 9 days</span>  --}}
                            </div>
                            <div class="col-md-4 d-flex flex-column justify-content-end" style="margin-bottom: 13px;">
                                <div style="margin-left:5rem;" >
                                    {{-- <i class="fa fa-exclamation-circle text-warning"></i>  --}}
                                    {{-- <span class="text-bold "  style="font-weight: 700; color: goldenrod;"> 👁️ 1,224 </span>  --}}
                                    <!-- Button with calendar icon -->
                                    {{-- <button class="btn" style="border: 1px solid #32d951 ; white-space: nowrap; height: 36px; border-radius: 5px; margin-left: 12px;" type="button" aria-expanded="false">
                                        <a href="" style="color: #32d951">Repost</a>
                                    </button>
                                    
                                    <button class="btn" style="border: 1px solid #0088eb ; white-space: nowrap; height: 36px; border-radius: 5px; color: #0088eb;margin-left: 12px;" type="button" aria-expanded="false">
                                        Edit
                                    </button>
                                    
                                    <button class="btn" style="border: 1px solid red ; white-space: nowrap; height: 36px; border-radius: 5px; color: red;margin-left: 12px;" type="button" aria-expanded="false">
                                        Delete
                                    </button> --}}
                                    
                                    
                                 
                            
                                    
                                </div>
                                <!-- This column is intentionally left empty -->
                            </div>
                        </div>
                    </form>
                        <!-- Add margin bottom -->
                        <div class="mb-3"></div>
                        <hr style="margin-top: -1rem; width: 64%;margin-left: 24px;margin-bottom: 2rem;">
                    @endforeach
                    <div class="d-flex justify-content-center paginationLink" style="margin: 29px 27rem 0px 0px">
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
            <div id="rejected" class="cont-w tab-pane fade"><br>
            @if ($rejectedListing->total() > 0)
                <!------------------single row----------->
                <div class="col-md-12" style="border-radius:6px;margin-top:-2rem;">
                    <label style="display: inline-block; color: red;white-space: nowrap; margin-left: -13px; margin-top: 16px; height: 36px;">
                        <input type="checkbox" style=" border-radius: 5px;"> &nbsp;&nbsp;All
                      </label>
                      <button class="btn deletebtn" style="color: red; display:block;  margin: -38px 0px -38px 49.2rem;padding-top:0;" type="button" aria-expanded="false">
                        Delete
                    </button>
                    @foreach($rejectedListing as $my_ad)
                    <form class="place-ad-form" enctype="multipart/form-data">
                        <div class="row" style="margin-top: -3rem;">
                            <div class="col-md-1 d-flex justify-content-center align-items-center" style="max-width: 0pc;margin-left: 18px;">
                                <input type="checkbox">
                            </div>
                            <div class="col-md-4" style="max-width: 11pc">
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}" >
                                    <div >
                                        <div class="ad-show" style="padding:10px;border-radius:5px;margin-top: 17px;">
                                            {{-- <div class="img"> --}}
                                                <img src="{{ $my_ad->main_image_url  }}" alt="img" height="100" width="120" style="border-radius: 5px;">
                                            {{-- </div> --}}
                                        </div>
                                        {{-- <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:6.5rem; z-index: 2;color: white;">
                                            <i class="fa fa-image" style="color:white;margin-left: 5px;"></i><span class="text-black" style="margin-left:9px">{{ $my_ad->images->count() }}</span>
                                        </div> --}}
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <span class="badge" style="margin-top: 27px; background-color: #ff3131;color: white;">Rejected</span>

                                {{-- <span class="badge badge-primary" style="margin-left: 7px;">Featured</span> --}}
                               
                               <div style="margin-top: 6px;display: grid;margin-bottom: 9px;">
                            
                                    <a href="" style="font-size: 18px;font-weight:bold;color:#000;">
                                        {{ $my_ad->title ?? 'TITLE N/A' }}
                                    </a>
                            
                                <a href="" class="text-muted" style="font-size: 11px;">
                                    {{ $my_ad->category_name . " / " . $my_ad->subcategory_name }}
                                </a>
                                </div> 
                                
                                   
                                    <h4 class="pricetext">
                                        {{ \App\Helpers\SiteHelper::priceFormatter($my_ad->price) }}
                                        {{-- <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i class="fa fa-trash delete-ad-btn" ad-id="{{ $my_ad->id }}"></i></span> --}}
                                    </h4>
                                    
                              
                               
                               {{-- <span style="font-size: 12px;"> Last Updated: 15 May</span> <span style="margin-left:33px ;font-size: 12px;"> Expires: in 9 days</span>  --}}
                            </div>
                            <div class="col-md-4 d-flex flex-column justify-content-end" style="margin-bottom: 13px;">
                                <div style="margin-left: 8.9rem;">
                                    {{-- <i class="fa fa-exclamation-circle text-warning"></i>  --}}
                                    {{-- <span class="text-bold "  style="font-weight: 700; color: goldenrod;"> 👁️ 1,224 </span>  --}}
                                    <!-- Button with calendar icon -->
                                    <button class="btn upgradebtn"  type="button" aria-expanded="false">
                                        <a href="" style="color: #32d951">Repost</a>
                                    </button>
                                    
                                    <button class="btn editbtn" style="color: #0088eb;" type="button" aria-expanded="false">
                                        Edit
                                    </button>
                                    
                                    <button class="btn deletebtn" style=" color: red;" type="button" aria-expanded="false">
                                        Delete
                                    </button>
                                    
                                    
                                 
                            
                                    
                                </div>
                                <!-- This column is intentionally left empty -->
                            </div>
                        </div>
                    </form>
                        <!-- Add margin bottom -->
                        <div class="mb-3"></div>
                        <hr style="margin-top: -1.3rem; width: 64%;margin-left: 24px;margin-bottom: 1.6rem;">
                    @endforeach
                    <div class="d-flex justify-content-center paginationLink" style="margin: 29px 27rem 0px 0px">
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
            <div id="expired" class="cont-w tab-pane fade"><br>
            @if ($expiredListing->total() > 0)
                <!------------------single row----------->
                <div class="col-md-12" style="border-radius:6px;margin-top:-2rem;">
                    <label style="display: inline-block; color: red;white-space: nowrap; margin-left: -13px; margin-top: 16px; height: 36px;">
                        <input type="checkbox" style=" border-radius: 5px;"> &nbsp;&nbsp;All
                      </label>
                      <button class="btn deletebtn" style="color: red; display:block;  margin: -38px 0px -38px 49.2rem;padding-top:0;" type="button" aria-expanded="false">
                        Delete
                    </button>
                    @foreach($expiredListing as $my_ad)
                    <form class="place-ad-form" enctype="multipart/form-data">
                        <div class="row" style="margin-top: -3rem;">
                            <div class="col-md-1 d-flex justify-content-center align-items-center" style="max-width: 0pc;margin-left: 18px;">
                                <input type="checkbox">
                            </div>
                            <div class="col-md-4" style="max-width: 11pc">
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}" >
                                    <div >
                                        <div class="ad-show" style="padding:10px;border-radius:5px;margin-top: 19px;">
                                            {{-- <div class="img"> --}}
                                                <img src="{{ $my_ad->main_image_url  }}" alt="img" height="100" width="120" style="border-radius: 5px;">
                                            {{-- </div> --}}
                                        </div>
                                        {{-- <div class="col-md-7 col-6" style="margin:0px;position:absolute;top:6.5rem; z-index: 2;color: white;">
                                            <i class="fa fa-image" style="color:white;margin-left: 5px;"></i><span class="text-black" style="margin-left:9px">{{ $my_ad->images->count() }}</span>
                                        </div> --}}
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <span class="badge" style="margin-top: 28px; background-color: #ff3131;color: white; ">Expired</span>

                                {{-- <span class="badge badge-primary" style="margin-left: 7px;">Featured</span> --}}
                               
                               <div style="margin-top: 6px;display: grid;">
                            
                                    <a href="" style="font-size: 18px;font-weight:bold;color:#000; margin-bottom: 9px;">
                                        {{ $my_ad->title ?? 'TITLE N/A' }}
                                    </a>
                            
                                <a href="" class="text-muted" style="font-size: 11px;">
                                    {{ $my_ad->category_name . " / " . $my_ad->subcategory_name }}
                                </a>
                                </div> 
                                
                                   
                                    <h4 class="pricetext">
                                        {{ \App\Helpers\SiteHelper::priceFormatter($my_ad->price) }}
                                        {{-- <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i class="fa fa-trash delete-ad-btn" ad-id="{{ $my_ad->id }}"></i></span> --}}
                                    </h4>
                                    
                              
                               
                               {{-- <span style="font-size: 12px;"> Last Updated: 15 May</span> <span style="margin-left:33px ;font-size: 12px;"> Expires: in 9 days</span>  --}}
                            </div>
                            <div class="col-md-4 d-flex flex-column justify-content-end" style="margin-bottom: 13px;">
                                <div style="margin-left: 8.9rem;">
                                    {{-- <i class="fa fa-exclamation-circle text-warning"></i>  --}}
                                    {{-- <span class="text-bold "  style="font-weight: 700; color: goldenrod;"> 👁️ 1,224 </span>  --}}
                                    <!-- Button with calendar icon -->
                                    <button class="btn upgradebtn "  type="button" aria-expanded="false">
                                        <a href="" style="color: #32d951">Repost</a>
                                    </button>
                                    
                                    <button class="btn editbtn" style="color:#0088eb" type="button" aria-expanded="false">
                                        Edit
                                    </button>
                                    
                                    <button class="btn deletebtn" style="color:red;" type="button" aria-expanded="false">
                                        Delete
                                    </button>
                                    
                                    
                                 
                            
                                    
                                </div>
                                <!-- This column is intentionally left empty -->
                            </div>
                        </div>
                    </form>
                        <!-- Add margin bottom -->
                        <div class="mb-3"></div>
                        <hr style="margin-top: -1rem; width: 64%;margin-left: 24px;margin-bottom: 1.6rem;">
                    @endforeach
                    <div class="d-flex justify-content-center paginationLink" style="margin: 29px 27rem 0px 0px">
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
$(document).ready(function() {
    // When the "Select All" checkbox is changed
    $('#selectAll').change(function() {
        // Set all row checkboxes to the same state as the "Select All" checkbox
        $('.row-checkbox').prop('checked', this.checked);
    });

    // Optional: When any row checkbox is changed
    $('.row-checkbox').change(function() {
        // If not all checkboxes are checked, uncheck "Select All"
        // Otherwise, check "Select All"
        $('#selectAll').prop('checked', $('.row-checkbox:checked').length === $('.row-checkbox').length);
    });
});

</script>
@endsection