@extends('layout.master')
<style>
        .custom-icon {
        font-size: 24px !important; /* Adjust the size as needed */
    }

</style>
@section('content')
    <div class="cont-w">
        <h3 style="font-weight: bold;">My Ads</h3>
        <br>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" style="font-size:12px;">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#all_ads">All Ads - {{ $my_ads->count() }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#live">Live -
                    {{ $my_ads->where('status', 'active')->count() }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#draft">Drafts -
                    {{ $my_ads->where('status', 'draft')->count() }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#payment_pending">Payment Pending - 0</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#under_review">Under Review
                    - {{ $my_ads->where('status', 'pending')->count() }} </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#rejected">Rejected
                     - {{ $my_ads->where('status', 'rejected')->count() }} </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#expired">Expired
                - {{ $my_ads->where('status', 'expired')->count() }}</a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div id="all_ads" class="cont-w tab-pane active"><br>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-xs-6 col-6">
                            <span style="font-size: 12px;">
                                <img src="{{ asset('images/info-grey.svg')}}" alt="imge" width="13" height="13"> Please note, expired and deleted listings will automatically be removed from your favorites.
                            </span>
                        </div>
                    </div>
                </div>
            @if ($my_ads->count() > 0)
                <!------------------single row----------->
                <div class="col-md-12" style="    border-radius:6px;padding:;margin-top:10px;">
                    @foreach($my_ads as $my_ad)
                        <div class="row" style=" ">
                            <div class="col-md-1 d-flex justify-content-center align-items-center" style="max-width: 0pc;">
                                <input type="checkbox">
                            </div>
                            <div class="col-md-4" style="max-width: 11pc">
                                <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}" >
                                    <div style="padding:5px;">
                                        <div class="ad-show" style="padding:10px;border-radius:5px;">
                                            {{-- <div class="img"> --}}
                                                <img src="{{ $my_ad->main_image_url  }}" alt="img" height="120" width="120" style="border-radius: 5px;">
                                            {{-- </div> --}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <span class="badge badge-success" style="margin-top: 12px">Live</span>

                                <span class="badge badge-primary">Feature</span>
                               
                               <div style="margin-top: 9px;">
                                <a href="" class="text-muted" style="font-size: 11px;">
                                    {{ $my_ad->category_name . " / " . $my_ad->subcategory_name }}
                                </a>
                                </div> 
                                <h3 style="margin-top:3px">
                                    <a href="" style="font-size: 22px;font-weight:bold;color:#000;">
                                        {{ $my_ad->title ?? 'TITLE N/A' }}
                                    </a>
                                    <br/>
                                    <h4 style="font-size: 14px;font-weight:bold;">
                                        {{ \App\Helpers\SiteHelper::priceFormatter($my_ad->price) }}
                                        {{-- <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i class="fa fa-trash delete-ad-btn" ad-id="{{ $my_ad->id }}"></i></span> --}}
                                    </h4>
                                    
                                </h3>
                               
                               <span> Last Update: 15 May</span> <span style="margin-left:57px"> Expired: in 9 days</span> 
                            </div>
                            <div class="col-md-3 d-flex flex-column justify-content-end">
                                <div >
                                    <i class="fa fa-exclamation-circle text-warning"></i> 1224 views
                                    <!-- Button with calendar icon -->
                                    <a class="btn"><i class="fa fa-calendar custom-icon"></i> </a>
                                    
                                    <!-- Button with edit icon -->
                                    <a class="btn " style="padding: 0px"><i class="fa fa-edit custom-icon"></i> </a>
                                    
                                    <!-- Button with trash icon for delete -->
                                    <a class="btn" style="padding: 0px"><i class="fa fa-trash custom-icon"></i> </a>
                            
                                    
                                </div>
                                <!-- This column is intentionally left empty -->
                            </div>
                        </div>
                        <!-- Add margin bottom -->
                        <div class="mb-3"></div>
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
            <div id="live" class="container tab-pane fade"><br>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-xs-6 col-6">
                            <span style="font-size: 12px;">
                                <img src="{{ asset('images/info-grey.svg')}}" alt="imge" width="13" height="13"> Please note, expired and deleted listings will automatically be removed from your favorites.
                            </span>
                        </div>
                    </div>
                </div>
            @if ($my_ads->where('status', 'active')->count() > 0)
                <!------------------single row----------->
                <div class="col-md-12" style="    border-radius:6px;padding:;margin-top:10px;">
                        @foreach($my_ads->where('status', 'active') as $active_ad)
                            <!-------->
                            <div class="row" style=" ">
                                <div class="col-md-1 d-flex justify-content-center align-items-center" style="max-width: 0pc;">
                                    <input type="checkbox">
                                </div>
                                <div class="col-md-4" style="max-width: 11pc">
                                    <a href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id }}" >
                                        <div style="padding:5px;">
                                            <div class="ad-show" style="padding:10px;border-radius:5px;">
                                                {{-- <div class="img"> --}}
                                                    <img src="{{ $my_ad->main_image_url  }}" alt="img" height="120" width="120" style="border-radius: 5px;">
                                                {{-- </div> --}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <span class="badge badge-success" style="margin-top: 12px">Live</span>
    
                                    <span class="badge badge-primary">Feature</span>
                                   
                                   <div style="margin-top: 9px;">
                                    <a href="" class="text-muted" style="font-size: 11px;">
                                        {{ $my_ad->category_name . " / " . $my_ad->subcategory_name }}
                                    </a>
                                    </div> 
                                    <h3 style="margin-top:3px">
                                        <a href="" style="font-size: 22px;font-weight:bold;color:#000;">
                                            {{ $my_ad->title ?? 'TITLE N/A' }}
                                        </a>
                                        <br/>
                                        <h4 style="font-size: 14px;font-weight:bold;">
                                            {{ \App\Helpers\SiteHelper::priceFormatter($my_ad->price) }}
                                            {{-- <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i class="fa fa-trash delete-ad-btn" ad-id="{{ $my_ad->id }}"></i></span> --}}
                                        </h4>
                                        
                                    </h3>
                                   
                                   <span> Last Update: 15 May</span> <span style="margin-left:57px"> Expired: in 9 days</span> 
                                </div>
                                <div class="col-md-3 d-flex flex-column justify-content-end">
                                    <div >
                                        <i class="fa fa-exclamation-circle text-warning"></i> 1224 views
                                        <!-- Button with calendar icon -->
                                        <a class="btn"><i class="fa fa-calendar custom-icon"></i> </a>
                                        
                                        <!-- Button with edit icon -->
                                        <a class="btn " style="padding: 0px"><i class="fa fa-edit custom-icon"></i> </a>
                                        
                                        <!-- Button with trash icon for delete -->
                                        <a class="btn" style="padding: 0px"><i class="fa fa-trash custom-icon"></i> </a>
                                
                                        
                                    </div>
                                    <!-- This column is intentionally left empty -->
                                </div>
                            </div>
                            <!-- Add margin bottom -->
                            <div class="mb-3"></div>
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
            <div id="payment_pending" class="container tab-pane fade"><br>
                <!------------------single row----------->
                <div class="col-md-12 mx-auto"
                     style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                    <div class="row mx-auto">
                        <div class="mx-auto"><img src="{{ asset('images/no-ads-placeholder.svg')}}" height="120"></div>
                    </div>
                    <div style="text-align: center;font-weight:bold;">
                        <h4>
                            <b>You don't have any ads</b>
                        </h4>
                    </div>
                    <div style="text-align: center;font-size:12px;" class="text-muted">
                        <a href="{{env('BASE_URL') . 'listing/' . 'select-category'}}">
                            <button class="btn"
                                    style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">Post ad
                                now
                            </button>
                        </a>
                    </div>
                </div>
                <!----single row ended------>
            </div>
            <div id="under_review" class="container tab-pane fade"><br>
            @if ($my_ads->where('status', 'pending')->count() > 0)
                <!------------------single row----------->
                    <div class="col-md-12"
                         style="border: 1px solid #E0E1E3;border-radius:6px;padding:;margin-top:10px;">
                        <div class="row">
                        @foreach($my_ads->where('status', 'pending') as $pending_ad)
                            <!-------->
                                <div class="col-md-3" style="">
                                    <div class="row">
                                        <a href="{{ env('BASE_URL') . 'ads/detail/' . $pending_ad->id }}">
                                            <div style="padding:5px;">
                                                <div class="ad-show"
                                                     style="border: 1px solid #E0E1E3;padding:10px;border-radius:5px;">
                                                    <div class="img">
                                                        <img src="{{ $pending_ad->main_image_url  }}" alt="img" height="150"
                                                             width="220" style="border-radius: 5px;">
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <a href="" style="font-size: 11px;font-weight:bold;color:#000;">
                                                                {{ $pending_ad->title ?? 'TITLE N/A' }}
                                                            </a>
                                                            <br/>
                                                            <a href="" class="text-muted" style="font-size: 11px;">
                                                                {{ $pending_ad->category_name . " / " . $pending_ad->subcategory_name }}
                                                            </a>
                                                        </h5>
                                                        <h4 style="font-size: 14px;font-weight:bold;">
                                                            {{ \App\Helpers\SiteHelper::priceFormatter($pending_ad->price) }}
                                                            <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i
                                                                    class="fa fa-trash delete-ad-btn" ad-id="{{ $pending_ad->id }}"></i></span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-------->
                            @endforeach
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
            <div id="rejected" class="container tab-pane fade"><br>
            @if ($my_ads->where('status', 'rejected')->count() > 0)
                <!------------------single row----------->
                    <div class="col-md-12"
                         style="border: 1px solid #E0E1E3;border-radius:6px;padding:;margin-top:10px;">
                        <div class="row">
                        @foreach($my_ads->where('status', 'rejected') as $rejected_ad)
                            <!-------->
                                <div class="col-md-3" style="">
                                    <div class="row">
                                        <a href="{{ env('BASE_URL') . 'ads/detail/' . $rejected_ad->id }}">
                                            <div style="padding:5px;">
                                                <div class="ad-show"
                                                     style="border: 1px solid #E0E1E3;padding:10px;border-radius:5px;">
                                                    <div class="img">
                                                        <img src="{{ $rejected_ad->main_image_url  }}" alt="img" height="150"
                                                             width="220" style="border-radius: 5px;">
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <a href="" style="font-size: 11px;font-weight:bold;color:#000;">
                                                                {{ $rejected_ad->title ?? 'TITLE N/A' }}
                                                            </a>
                                                            <br/>
                                                            <a href="" class="text-muted" style="font-size: 11px;">
                                                                {{ $rejected_ad->category_name . " / " . $rejected_ad->subcategory_name }}
                                                            </a>
                                                        </h5>
                                                        <h4 style="font-size: 14px;font-weight:bold;">
                                                            {{ \App\Helpers\SiteHelper::priceFormatter($rejected_ad->price) }}
                                                            <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i
                                                                    class="fa fa-trash delete-ad-btn" ad-id="{{ $rejected_ad->id }}"></i></span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-------->
                            @endforeach
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
            <div id="expired" class="container tab-pane fade"><br>
            @if ($my_ads->where('status', 'expired')->count() > 0)
                <!------------------single row----------->
                    <div class="col-md-12"
                         style="border: 1px solid #E0E1E3;border-radius:6px;padding:;margin-top:10px;">
                        <div class="row">
                        @foreach($my_ads->where('status', 'expired') as $expired_ad)
                            <!-------->
                                <div class="col-md-3" style="">
                                    <div class="row">
                                        <a href="{{ env('BASE_URL') . 'ads/detail/' . $expired_ad->id }}">
                                            <div style="padding:5px;">
                                                <div class="ad-show"
                                                     style="border: 1px solid #E0E1E3;padding:10px;border-radius:5px;">
                                                    <div class="img">
                                                        <img src="{{ $expired_ad->main_image_url  }}" alt="img" height="150"
                                                             width="220" style="border-radius: 5px;">
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <a href="" style="font-size: 11px;font-weight:bold;color:#000;">
                                                                {{ $expired_ad->title ?? 'TITLE N/A' }}
                                                            </a>
                                                            <br/>
                                                            <a href="" class="text-muted" style="font-size: 11px;">
                                                                {{ $expired_ad->category_name . " / " . $expired_ad->subcategory_name }}
                                                            </a>
                                                        </h5>
                                                        <h4 style="font-size: 14px;font-weight:bold;">
                                                            {{ \App\Helpers\SiteHelper::priceFormatter($expired_ad->price) }}
                                                            <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i
                                                                    class="fa fa-trash delete-ad-btn" ad-id="{{ $expired_ad->id }}"></i></span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-------->
                            @endforeach
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
        </div>
    </div>

@endsection
