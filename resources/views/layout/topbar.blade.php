@php
    $notifications = [];
    $my_searches = [];
    $favourite_ads = [];
    $chats = [];
    $my_ads_for_topbar = [];
    $cities = \App\Helpers\RecordHelper::getCities(request()->country);
    $currency = \App\Helpers\RecordHelper::getCurrency();
    if (session()->has('user')) {
        $notifications = \App\Helpers\RecordHelper::getNotifications();
        $my_searches = \App\Helpers\RecordHelper::getSearches()->take(2);
        $favourite_ads = \App\Helpers\RecordHelper::getFavouriteAds()->take(4);
        $chats = \App\Helpers\RecordHelper::getUnreadMessages();
        //  dd($chats );
        $my_ads_for_topbar = \App\Helpers\RecordHelper::getAdsByUserId(session()->get('user')->id)->take(2);
    }
    $countries = \App\Helpers\RecordHelper::getCountries();
    $language = \App\Helpers\RecordHelper::getlanguge();
   
@endphp
<style>
    .dropdown-menu{
        /* width: 14pc !important; */
        max-height: 21rem !important;
        overflow-x: hidden;
    }
    #dropdownProfile{
  min-width: 6rem !important;
    }
    .colorChange:hover{
        color: blue !important;

    }
   
    
    .dropdown-menu.show {
        display: none !important;
        min-width: 0rem !important;}
    
    .img-flag{
        margin-right: 3px !important;

    }
   .select2-dropdown,.select2-dropdown--below{
        width: 145px;
    }

    /* start */
.select2-search__field{
    border-color: #997045 !important;
        }
        .select2-search__field:hover{
    border-color: blue !important;
        }
        .select2-results__option {
            margin-right: 0px !important;
            /* padding: 4px !important; */
            font-size: 13px;
            font-weight: bold;

        }
        .select2-container--default .select2-results>.select2-results__options{
            max-height: 171px !important;
        }
        #subcategorydropdown{
            max-height: 20rem !important;

        }
        .dropdown-menu {
    max-height: 20rem; /* Adjust as needed */
    overflow-y: auto; /* Enable vertical scrolling */
 border: 0px solid rgba(0, 0, 0, 0.15) !important;
 /* left: 7px !important; */
}
    .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
        background-color: #fff !important;
        color: blue !important;
        font-size: 13px;
        font-weight: bold;
    }
    .select2-container--default .select2-results__option--selected {
        background-color: #fff !important;
    }
    .select2-results__options{
        padding: 7px !important;
    }
    .select2-search__field{
        padding-left: 8px !important;
    }
    .select2-dropdown{
        background-color: #fff;
        color: #000 !important;
    }


    /* .notification-item {
            position: relative;
            background: aliceblue;
            padding: 20px;
            margin-bottom: 10px;
        } */

        /* Dropdown Icon styling (absolute top-left corner) */
        .dropdown-toggle-custom {
            position: absolute;
            top: 10px;
            left: 10px;
            cursor: pointer;
            font-size: 20px;
        }

        /* Custom dropdown menu */
        .dropdown-menu-custom {
            position: absolute;
            top: 2px; /* Adjust distance from the icon */
            left: 16rem;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            /* width: 150px; */
            display: none; /* Initially hidden */
            z-index: 1000;
        }

        /* Dropdown items */
        .dropdown-menu-custom a {
            display: block;
            padding: 3px;
            color: #333;
            text-decoration: none;
        }

        .dropdown-menu-custom a:hover {
            background-color: #f0f0f0;
        }
        .select2-selection__rendered {
            /* padding-left: 16px !important; */
            font-size: 14px !important;}


        .auth{
            color: blue;

        }
        .auth:hover{
            color: goldenrod !important;

        }
    /* end */
</style>
<header>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script type="text/javascript">
        function translateLanguage() {
            var dropdown = document.getElementById("language_dropdown");
            var selectedLanguage = dropdown.options[dropdown.selectedIndex].value;

            if (selectedLanguage) {
                var googleTranslateCombo = document.querySelector('.goog-te-combo');
                if (googleTranslateCombo) {
                    googleTranslateCombo.value = selectedLanguage;
                    googleTranslateCombo.dispatchEvent(new Event('change'));
                }
            }

        }
    </script>  
    <!-- topbar start -->
  
    <div class="topbar desktop-view">
        <div class="container-fluid" style="padding:0px 25px; margin-bottom: -3px;">
            <div class="row">
                <div class="col" style="margin-top: 12px;margin-left:0px;">
                    {{-- <div class="col-lg-1 col-xl-1 col-md-1"> --}}
                        <!-- social icon desktop start -->
                        <a class="" href="{{env('BASE_URL') . 'home'}}" >
                            <img src="{{asset('images/businesshub.png')}}" alt="" width="120px" alt="logo">
                        </a>
                    </div>
                    @php
                    $url = request()->path();
                    $parts = explode('/', $url);
                    $first = $parts[0] ?? null;  
                    $second = $parts[1] ?? null;
                    // dd(    $second, $first );
                        @endphp
                    
                {{-- </div> --}}
                @if($second!=="profile")
                <div class="col-lg-4 col-xl-4 col-md-4" style="border:0px solid red;margin-right:-1.4rem;">
                    <!-- <div class="col-md-4"> -->
                    <span style="position:relative;top:20px;border:0px solid red;background-color:inherit !important;">
                    <!-- country bar mobile start -->
                        <div class="mobile-country desktop-menu-right">
                            <div class="row">
                           
                                <!----langs--->
                            {{-- <div class="country" style="border:0px solid green;position:relative;left:-111px;"> --}}
                            <div class="mobile-country desktop-menu-right">
                               
                                    <select class="form-control country_dropdown1 " name="country_dropdown"   style="width:150px;" id="country_dropdown" >
                                        @foreach($countries as $country)
                                       
                                            <option
                                            {{ $country->id == request()->country ? 'selected' : '' }} data-flag-url="{{ $country->image_url }}"
                                            value="{{ $country->id }}"
                                            style="font-size:8px !important;">
                                            {{ explode(' ', $country->name)[0] }}
                                               
                                            </option>
                                        @endforeach
                                    </select>
                                   
                            </div>
                    



                {{-- </div> --}}


                {{-- <div class="country" style="border:0px solid red;position:relative;left:-50px;"> --}}
                    <select class="form-control city_dropdown" name="city_dropdown" id="" 
                            style="width:131px;border:0px solid red !imporatnt;text-align:center;background-color:transparent !important;">
                            <option value="">All Cities</option>
                        @foreach($cities as $city)
                            <option data-city-id="{{ $city->id }}"
                                    {{ $city->id == request()->city ? 'selected' : '' }} value="{{ $city->id }}"
                                    style="font-size:8px !important;">{{ $city->name }}</option>
                        @endforeach
                    </select>
                {{-- </div> --}}

                {{-- <div id="google_translate_button" style="margin-top: -7%;
                margin-left: 38%;"></div> --}}
              
                <!----langs end---->

                <div class="mobile-country desktop-menu-right">
                               
                    <select class="form-control language_dropdown " name="language_dropdown"  style="width:130px;" id="language_dropdown" onchange="translateLanguage()">>
                        <option selected value="">Language</option>
                        
                        @foreach($language as $language1)
                       
                            <option
                            {{ $language1->id == request()->language ? 'selected' : '' }}  data-flag-url="{{ $language1->flag_image_url }}"
                            value="{{ $language1->prefix }}"
                            style="font-size:8px !important;">
                            {{ $language1->name }}
                               
                            </option>
                        @endforeach
                    </select>
                   
            </div>
                <div id="google_translate_element" style="display: none;"></div>



                
                    {{-- <div class="country" style="border:0px solid red;position:relative;left:-184px;"> --}}
                        <select class="form-control currency_dropdown" name="currency_dropdown" id="" 
                                style="width:100px;border:0px solid red !imporatnt;text-align:center;background-color:transparent !important;">
                                <option value="">Currency</option>
                                @foreach($currency as $currencyn)
                                <option data-currency-id="{{ $currencyn->currency }}"
                                        {{$currencyn->id == request()->country ? 'selected' : '' }} data-flag-url="{{ $currencyn->image_url }}" value="{{ $currencyn->currency_short_name }}"
                                        style="font-size:8px !important;">{{ $currencyn->currency_short_name }}</option>
                            @endforeach
                        </select>
             
            </div>


        </div>
        <!-- country bar mobile finish -->
        </span>
        <!-- </div> -->
    </div>
    @endif
    <!-----icons---bar---->
    <div class="col-md-7 col-xl-7 col-md-9" style="border:0px solid red;">
        <div class="social-icon float-right text-dark">
            <div class="row align-middle" style="font-size: 11px;color:black;margin-right: 1.5rem;border:0px solid red;">
                @if (session()->has('user'))  <span style="padding:13px 15px 0px 15px;text-align:center;"> 
                                <a type="button" id="notifications"
                                   data-toggle="dropdown"
                                   aria-haspopup="true"
                                   aria-expanded="false">
                                    {{-- <img src="{{ asset('images/my-notifications.svg')}}" width="17" height="17"> --}}
                                    <div>
                                        <span class="colorChange" style="color: #000;font-size:16px;">Notification</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu"  id="notifications" aria-labelledby="notifications"
                                     style="padding: 10px;width:auto; border-radius: 12px;">
                                    @if (session()->has('user') && count($notifications) > 0)
                                        <!---------inner area----->
                                            <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12">
                                               <span style="font-weight: bold;margin-left: 11px;">Notifications </span>
                                               <span style="float: right;margin-right: 12px;">Mark all as Read </span>
                                            </div>
                                        </div>
                                            <hr>
                                            @foreach($notifications as $notification)
                                               
                                            
                                            <div class="notifications-wrapper">
                                                
                                            
                                                
                                               
                                                <div class="content" href="#" >
                                                    <div class="notification-item">
                                                        <div class="row" style="background: aliceblue; position: relative;">
                                                            <!-- Three dots icon with dropdown -->
                                                            
                                                    
                                                            <div class="col-md-2">
                                                                <div style="width:80px; height:80px; border-radius:10%; overflow: hidden; margin-left: 2px;">
                                                                    <img style="width: 100%; height: 100%; object-fit: cover;" src="https://www.ivertech.com/Articles/Images/KoalaBear200x200.jpg" />
                                                                </div>
                                                            </div>
                                                    
                                                            <div class="col-md-7" style="white-space: nowrap; margin-left: 15px;">
                                                                <span style="font-weight: bold;">Congrats, your ads is live!</span>
                                                                <br>
                                                                <span>Your ad placed in 46 is now live call..</span>
                                                                <br>
                                                                <p style="margin: 9px 0px 0px 0px;">10 min ago</p>
                                                               
                                                            </div>
                                                            <div class="col-md-1" style="position: absolute; top: 10px; left: -8px;">
                                                                <div class="dropdown">
                                                                    <button class="btn btn-link" type="button" onclick="toggleDropdown(this)" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 25rem;margin-top: -14px;">
                                                                        <i class="fa fa-ellipsis-h"></i> <!-- Font Awesome three dots icon -->
                                                                    </button>
                                                                    <div class="dropdown-menu-custom">
                                                                        <a href="#" onclick="markAsRead(this)">Mark as Read</a>
                                                                        <a href="#" onclick="removeNotification(this)">Remove Notification</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- Add necessary JS -->
                                                   
                                                    
                                                    <!-- Add Bootstrap and Font Awesome if not already included -->
                                                
                                              
                                               
                                            </div>
                                            
                                            </div>
                                            
                                            @endforeach
                                            <li class="divider"></li>
                                            <div class="notification-footer" style="text-align: center;"><h4 class="menu-title" style="color: red;font-size: 1rem !important;
                                                margin: 0px;">   <a class="content" href="{{ env('BASE_URL').'notifications'}}" 
                                            {{-- data-bs-toggle="modal" data-bs-target="#phoneRequestModal"  --}}
                                            style="color: red;"
                                            >View all Notifications </a></h4></div>
                                        <!---------inner area---->
                                        @else
                                          
                                        <div style="      margin-top: 15px;   font-weight: 700;   min-width: 500px;" class="notification-heading"><h4 class="menu-title">Notification </h4><h6 style="font-size: 16px; margin-right: 66px" class="menu-title pull-right">Mark All as read</h6>
                                        </div>
                                        <hr style="    width: 80%;">
                                        <li class="divider"></li>
                                       <div class="notifications-wrapper">
                                         <a class="content" href="#" data-bs-toggle="modal" data-bs-target="#phoneRequestModal">
                                            <div class="dropdown" style="float:right;">
                                                <i style="color: black;" class="fa fa-ellipsis-h" data-toggle="dropdown"></i>
                                                <div class="dropdown-menu" style="   left: -140px;;
                                                ">
                                                  <a class="dropdown-item" href="#">Mark as Read</a>
                                                  <a class="dropdown-item" href="#">Remove Notifications</a>
                                                </div>
                                              </div>
                                           {{-- <div class="notification-item">
                                            <div class="row">
                                              
                                                <div class="col-md-9" style="white-space: nowrap;display: ruby;">
                                                    <h1 class="item-title" style="margin-bottom: 10px;">Mobile Request</h1>
                                                    <p style="margin-top: 5px;margin-left:143px ;margin-bottom: unset; color: black; font-size: 0.9em;">7 days ago </p>
                                                </div>

                                               
                                            </div> --}}
                                            {{-- <div class="row">
                                              
                                            <div class="col-md-12" style="padding: unset;display: contents;">
                                                <div style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; margin-left: 30px;">
                                                    <img style="width: 100%; height: 100%; object-fit: cover;" src="https://www.ivertech.com/Articles/Images/KoalaBear200x200.jpg" />
                                                </div>
                                                <p style="margin: 11px; font-weight: bold;">Khan</p>
                                                <br>
                                                
                                            </div>
                                            <div style=" color: white;
                                                  margin-top: 10px;
                                                  margin-left: 160px;">
                                                <a class="btn btn-success btn-sm badge bg-success">Approve </a>
                                                <a class="btn btn-danger btn-sm badge bg-danger" style="margin-left: 5px;">Reject </a>
                                            </div>
                                        </div> --}}
                                           

                                          </div>
                                          <hr>
                                           
                                        </a>
                                       
                                        <a class="content" href="#" data-bs-toggle="modal" data-bs-target="#phoneRequestModal">
                                            <div class="dropdown" style="float:right;">
                                                <i style="color: black;" class="fa fa-ellipsis-h" data-toggle="dropdown"></i>
                                                <div class="dropdown-menu" style="   left: -140px;;
                                                ">
                                                  <a class="dropdown-item" href="#">Mark as Read</a>
                                                  <a class="dropdown-item" href="#">Remove Notifications</a>
                                                </div>
                                              </div>
                                           <div class="notification-item">
                                            <div class="row">
                                              
                                                <div class="col-md-9" style="white-space: nowrap;display: ruby;">
                                                    <h1 class="item-title" style="margin-bottom: 10px;">File Request</h1>
                                                    <p style="margin-top: 5px;margin-left:170px ;margin-bottom: unset; color: black; font-size: 0.9em;">7 days ago </p>
                                                </div>

                                               
                                            </div>
                                            <div class="row">
                                              
                                            <div class="col-md-12" style="padding: unset;display: contents;">
                                                <div style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; margin-left: 30px;">
                                                    <img style="width: 100%; height: 100%; object-fit: cover;" src="https://www.ivertech.com/Articles/Images/KoalaBear200x200.jpg" />
                                                </div>
                                                <p style="margin: 11px; font-weight: bold;">Rustum</p>
                                                <br>
                                                
                                            </div>
                                            <div style=" color: white;
                                            margin-top: 10px;
                                            margin-left: 145px;">
                                                <a class="btn btn-success btn-sm badge bg-success">Approve </a>
                                                <a class="btn btn-danger btn-sm badge bg-danger" style="margin-left: 5px;">Reject </a>
                                            </div>
                                        </div>
                                           </div>
                                           
                                        </a>
                                       </div>
                                       <hr>
                                        <li class="divider"></li>
                                        <div class="notification-footer" style="text-align: center;"><h4 class="menu-title" style="color: red;
                                            margin: 12px;">   <a class="content" href="#" data-bs-toggle="modal" data-bs-target="#phoneRequestModal">View all Notifications </a></h4></div>
                                      </ul>
                                        @endif
                                </div>
                            </span>
                            

                            {{-- <span style="padding:13px 15px 0px 15px;text-align:center;">
                                <a type="button" id="searches" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    {{-- <img src="{{ asset('images/my-searches-selected.svg')}}" width="17" height="17"> --}}
                                    {{-- <div> --}}
                                        {{-- <span style="color: #000;font-size: 16px; ">My Searches</span> --}}
                                    {{-- </div> --}}
                                {{-- </a> --}} 
                                {{-- <div class="dropdown-menu" aria-labelledby="searches"
                                     style="padding: 10px;width:auto;">
                                    @if (session()->has('user') && count($my_searches) > 0)
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12">
                                                </i> <span>My Searches</span>
                                            </div>
                                        </div>
                                        @foreach($my_searches as $search)
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-8 col-sm-7 col-7">
                                                    <p style="font-size: 13px;">{{ $search->key_words }} <br/>
                                                    <span style="font-size: 11px;"
                                                          class="text-success">Saved On: {{ \Carbon\Carbon::parse($search->created_at)->format('M d') }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <span>Nothing to show</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </span> --}}
                        
                              <span style="padding:13px 15px 0px 15px;text-align:center;">
                                <a type="button" id="favorite" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    {{-- <img src="{{ asset('images/my-favorites.svg')}}" width="17" height="17"> --}}
                                    <div><span class="colorChange" style="color: #000; font-size: 16px; ">Favorites</span></div>
                                </a>
                                {{-- <div class="dropdown-menu" aria-labelledby="favorite"
                                     style="padding: 10px;width:250px;">
                                    @if (session()->has('user') && count($favourite_ads) > 0)
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12">
                                                </i> <span>Favorites</span>
                                            </div>
                                        </div> --}}
                                        {{-- @foreach($favourite_ads as $favourite_ads) --}}
                                            {{-- <hr>
                                            <div class="row">
                                                <div class="col-lg-2 col-sm-4 col-4"> --}}
                                                    {{-- <img width="100" height="100"
                                                         src="https://i.pinimg.com/originals/fe/d9/97/fed9971d943669c993db0be515a18a61.jpg"
                                                         alt="img" style="width:40px;height:40px;border-radius:50px;"/> --}}
                                                {{-- </div>
                                                <div class="col-lg-8 col-sm-7 col-7">
                                                    <a class="link"
                                                       href="{{ env('BASE_URL') . 'ads/detail/' . $favourite_ad->id . '?country=' . request()->country . '&city=' . request()->city}}">
                                                        <p style="font-size: 13px;">{{ $favourite_ad->name }} <br/><span
                                                                style="font-size: 11px;">{{ \App\Helpers\SiteHelper::priceFormatter($favourite_ad->price) }}</span></p>
                                                    </a>
                                                </div>
                                            </div> --}}
                                        {{-- @endforeach --}}
                                     <div class="dropdown-menu"  id="notifications" aria-labelledby="notifications"
                                     style="padding: 10px;width:auto; border-radius: 12px;top: 61px !important; border: 1px solid rgb(146 146 146) !important; top: 30px;">
                                    @if (session()->has('user') && count($favourite_ads) > 0)
                                        <!---------inner area----->
                                            <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12">
                                               <span style="font-weight: bold;margin-left: 11px;">Favorites {{count($favourite_ads)}} </span>
                                               {{-- <span style="float: right;margin-right: 12px;">Mark all as Read </span> --}}
                                            </div>
                                        </div>
                                            <hr>
                                            @foreach($favourite_ads as $favourite_ads)
                                               
                                            
                                            <div class="notifications-wrapper">
                                                
                                            
                                                
                                               
                                                <div class="content" href="#" >
                                                    <div class="notification-item">
                                                        <div class="row" style="background: aliceblue; position: relative;">
                                                            <!-- Three dots icon with dropdown -->
                                                            
                                                    
                                                            <div class="col-md-2">
                                                                <div style="width:80px; height:80px; border-radius:10%; overflow: hidden; margin-left: 2px;">
                                                                    <img style="width: 100%; height: 100%; object-fit: cover;" src="https://www.ivertech.com/Articles/Images/KoalaBear200x200.jpg" />
                                                                </div>
                                                            </div>
                                                    
                                                            <div class="col-md-7" style="white-space: nowrap; margin-left: 15px;">
                                                                <span style="font-weight: bold;">Car Chip Tuning Garage for Sale</span>
                                                                <br>
                                                                <span>AED 649,990 | in Dubai</span>
                                                                <br>
                                                                <p style="margin: 9px 0px 0px 0px;">10 min ago</p>
                                                               
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                    
                                
                                                
                                              
                                               
                                            </div>
                                            
                                            </div>
                                            
                                            @endforeach
                                            <li class="divider"></li>
                                            <div class="notification-footer" style="text-align: center;"><h4 class="menu-title" style="color: red;font-size: 1rem !important;
                                            margin: 0px;">   <a class="content" href="{{ env('BASE_URL').'ads'}}"
                                            {{-- data-bs-toggle="modal" data-bs-target="#phoneRequestModal"  --}}
                                            style="color: red;">View all Favourites </a></h4></div>
                                    @else
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <span>Nothing to show</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </span>
                           <span style="padding:13px 15px 0px 15px;text-align:center;">
                                <a type="button" id="chat"
                                   data-toggle="dropdown"
                                   aria-haspopup="true"
                                   aria-expanded="false">
                                    {{-- <img src="{{ asset('images/my-chats.svg')}}" width="17" height="17"> --}}
                                    <div><span  class="colorChange" style="color: #000;font-size: 16px;">Chat</span></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="chat" style="padding: 10px;width:auto;">
                                    @if (session()->has('user') && count($chats) > 0)
                                        <!---------inner area------------>
                                            <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12">
                                                </i> <span style="color: #000;margin-left: 3px;">Chats</span>
                                            </div>
                                        </div>
                                            <hr style="width: 25.9rem;margin: 4px;">
                                            @foreach ($chats as $message)


                                            <div class="row" style="padding:11px 0px 0px 12px;">
                                                    <div class="col-lg-2 col-sm-4 col-4">
                                                        <img width="100" height="100"
                                                             src="{{ $message->user->image_url ?? "https://i.pinimg.com/originals/fe/d9/97/fed9971d943669c993db0be515a18a61.jpg"}}"
                                                             alt="img" style="width:80px;height:80px;border-radius:50px;margin-top:-3px;"/>
                                                    </div>
                                                    <div class="col-lg-7 col-sm-6 col-6" style="margin-left: 12px;">
                                                        <span style="font-weight: bold;">This is Title of Selling </span><br/>
                                                    @php
                                                    // dd($message->user);
                                                    @endphp
                                                        <p style="margin-top: 7px;margin-bottom: 8px;">{{ $message->receiver->name }} : <span >{{ $message->message }} </span></p> 
                                                            <p style="font-size: 11px;margin-top:3px; margin-bottom:2px; bold; color: green;" >{{ $message->message_recieved_time_diff }}</p>
                                                       
                                                    </div>
                                                    <div class="col-lg-3 col-sm-2 col-2" style="margin-left: -28px;margin-top: -3px;">
                                                        <img width="100" height="100"
                                                             src="{{ $message->user->image_url ?? "https://i.pinimg.com/originals/fe/d9/97/fed9971d943669c993db0be515a18a61.jpg"}}"
                                                             alt="img" style="width:80px;height:80px;border-radius:10%;"/>
                                                    </div>
                                            </div>
                                            <hr style="width: 25.9rem;margin: 6px">
                                            @endforeach
                                            
                                            <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                {{-- <a href="{{ env('BASE_URL') . 'chats?country=' . request()->country . '&city=' . request()->city}}"
                                                   class="btn btn-primary btn-block link"
                                                   style="font-size: 13px;">View all Chats</a> --}}

                                                   {{-- <li class="divider"></li> --}}
                                                   <div class="notification-footer">
                                                    <h4 class="menu-title" style="color: red;font-size: 1rem !important;
                                                   margin:0px;">   <a class="content" href="{{ env('BASE_URL') . 'chats?country=' . request()->country . '&city=' . request()->city}}"  style="color: red;">View all Chats </a></h4></div>
                                            </div>
                                        </div>
                                            <!---------inner area------------>
                                        @else
                                            <hr>
                                            <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <span>Nothing to show</span>
                                            </div>
                                        </div>
                                        @endif
                                </div>
                            </span>
                            
                <span style="padding:13px 15px 0px 15px;text-align:center;">

                    <a href="{{ env('BASE_URL') . 'user/ads?country=' . request()->get('country') . '&city=' . request()->get('city') }}" 
                        type="button" 
                        id="ads"
                        class="colorChange" 
                        style="color: #000; font-size: 16px;"
                        aria-haspopup="true"
                        aria-expanded="false">
                         My Ads
                     </a>
                     
                                {{-- <div class="dropdown-menu" aria-labelledby="ads" style="padding: 10px;width:auto;">
                                    @if (session()->has('user') && count($my_ads_for_topbar) > 0)
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12">
                                                </i> <span>My Ads</span>
                                            </div>
                                        </div>
                                        <hr>
                                        @foreach($my_ads_for_topbar as $my_ad)
                                            <div class="row">
                                                <div class="col-lg-2 col-sm-4 col-4">
                                                    <img width="100" height="100"
                                                         src="{{ $my_ad->main_image_url  }}"
                                                         alt="img" style="width:40px;height:40px;border-radius:50px;"/>
                                                </div>
                                                <div class="col-lg-8 col-sm-7 col-7">
                                                    <a class="link"
                                                       href="{{ env('BASE_URL') . 'ads/detail/' . $my_ad->id . '?country=' . request()->country . '&city=' . request()->city}}">
                                                        <p style="font-size: 13px;padding:15px 15px;">{{ $my_ad->title ?? "Title N/A"}}</p>
                                                    </a>
                                                </div>
                                                <div class="col-lg-2 col-sm-1 col-1">
                                                </div>
                                            </div>
                                            <hr>
                                        @endforeach
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <a href="{{ env('BASE_URL') . 'user/ads?country=' . request()->country . '&city=' . request()->city}}"
                                                   class="btn btn-primary btn-block link"
                                                   style="font-size: 13px;">View all Ads</a>
                                            </div>
                                        </div>
                                    @else
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <span>Nothing to show</span>
                                            </div>
                                        </div>
                                    @endif
                                </div> --}}
                            </span>
                            @endif
                @if (session()->has('user'))
                    <span style="padding:10px 15px;text-align:center;font-size:16px !important;">
                                <a class="link"
                                   href="{{ env('BASE_URL') . 'user/profile?country=' . request()->country . '&city=' . request()->city}}">
                                    <img src="{{session()->get('user')->image_url}}" alt="img" width="30" height="30"
                                         style="border-radius: 50%;border:0px solid red;">
                                </a>
                                <span class="dropdown">
                                        <span class="colorChange" style="width:;display:inline;border:0px solid red;" type="button"
                                              id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                              aria-expanded="false">
                                            {{session()->get('user')->name}}
                                        </span>
                                        <div class="dropdown-menu" id="dropdownProfile" aria-labelledby="dropdownMenuButton" style="max-width: 106px ;    position: absolute;top: 80% !important;">
                                            <a class="dropdown-item link" style="font-weight: bolder;padding:6px;"
                                               href="{{ env('BASE_URL') . 'user/profile?country=' . request()->country . '&city=' . request()->city}}">My Profile</a>
                                            {{-- <a class="dropdown-item link"
                                               href="{{ env('BASE_URL') . 'user/ads?country=' . request()->country . '&city=' . request()->city}}">My Ads</a> --}}

                                            <a class="dropdown-item logout-btn"  style="font-weight: bolder;padding:6px;">Sign out</a>
                                        </div>
                                    </span>
                            @endif
                        @if (!session()->has('user'))
                            <span class="auth" style="padding:6px 15px;text-align:center;font-size:14px !important;font-weight: bold;">
                            <a class="login-btn">Login</a>
                           </span>
                            <span class="auth"  style="padding:6px 15px;text-align:center;font-size:14px !important;    font-weight: bold;">
                                    <a class="register-btn">Register</a>
                           </span>
                        @endif
                        <span style="padding:3px 15px;text-align:center;font-size:14px !important;">
                            <a class="add-list-button add-listing-btn"
                               style="padding: 9px 20px;border-radius: 6px;">+ Place Your Ad</a>
                        </span>     
            </div>

           
        </div>
    </div>
    <!-----icons---bar---->
    <div class="col-lg-3 col-xl-3 col-md-4" style="border:2px solid red;display:none;">
        <div class="row pt-4" style="border: 0px solid red;color:#000;">
            <div class="col-md-12">
                @if (session()->has('user'))
                    <a class="link"
                       href="{{ env('BASE_URL') . 'user/profile?country=' . request()->country . '&city=' . request()->city}}">
                        <img src="{{session()->get('user')->image_url}}" alt="img" width="30" height="30"
                             style="border-radius: 50%;border:0px solid red;">
                    </a>
                    <span class="dropdown">
                                        <span style="width:;display:inline;border:0px solid red;" type="button"
                                              id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                              aria-expanded="false">
                                            {{session()->get('user')->name}}
                                        </span>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item link"
                                               href="{{ env('BASE_URL') . 'user/profile?country=' . request()->country . '&city=' . request()->city}}">My Profile</a>
                                            <a class="dropdown-item link"
                                               href="{{ env('BASE_URL') . 'user/ads?country=' . request()->country . '&city=' . request()->city}}">My Ads</a>
{{--                                            <a class="dropdown-item" href="{{ env('BASE_URL') . 'user/searches'}}">My Searches</a>--}}
                                            <a class="dropdown-item link"
                                               href="{{ env('BASE_URL') . 'user/change-password?country=' . request()->country . '&city=' . request()->city}}">Change Password</a>
                                            <a class="dropdown-item logout-btn">Sign out</a>
                                        </div>
                                    </span>
                @endif
                <div style="float:right;">
                    @if (!session()->has('user'))
                        <a class="login-btn" style="display: ;padding: 10px;">Login</a>
                        <a class="register-btn" style="padding: 10px;">Register</a>
                    @endif
                    <a class="add-list-button add-listing-btn"
                       style="padding: 11px 20px;border-radius: 6px;">+ Place Your Ad</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- topbar finish -->
    <!-- navigation start -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- navigation toggle start -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- navigation toggle start -->
            <a class="navbar-brand mobile-view link"
               href="{{ env('BASE_URL') . 'home?country=' . request()->country . '&city=' . request()->city}}">
                <img src="{{asset('images/businesshub.png')}}" alt="businesshub" title="businesshub" id="mobile-logo">
            </a>
            <div class="mobile-menu-right">
                <!-- languages bar mobile start -->
                <span>
                         <!-- country bar mobile start -->
                <div class="mobile-country desktop-menu-right">
                                <span class="country">
                            <div class="mobile-country desktop-menu-right">
                            <select class="form-control city_dropdown" name="city_dropdown" id=""
                                    style="width:80px;">
                                    @foreach($cities as $city)
                                    <option {{ $city->id == request()->city ? 'selected' : '' }} value="{{ $city->id }}"
                                            style="font-size:8px !important;"> &nbsp; {{ $city->name }}</option>
                                @endforeach
                                </select>
                            <select class="form-control country_dropdown" name="country_dropdown" id=""
                                    style="width:80px;">
                            @foreach($countries as $country)
                                    <option data-flag-url="{{ $country->image_url }}"
                                            data-country-id="{{ $country->id }}"
                                            value="{{ $country->id }}"> {{ $country->nice_name }}</option>
                                @endforeach
                            </select>
                            </div>
                            </span>
                            </div>
                    <!----langs end---->
            </div>
            <!-- country bar mobile finish -->
            </span>
          
            <!-- languages bar mobile finish -->
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <!-- mobile menu close button start -->
            <li class="d-inline d-lg-none">
                <button data-toggle="collapse" data-target="#navbarSupportedContent" class="close float-right">
                    <img src="{{asset('images/close.png')}}">
                </button>
            </li>
            <!-- mobile menu close button finish -->
            <!-- login and register area mobile start -->
            <li class="login-area d-lg-none">
                <img src="{{asset('images/moble-menu-login.png')}}" style="margin-right:10px;">
                <a class="login-btn" style="padding: 10px;">Login</a>
                <a class="register-btn" style="padding: 10px;">Register</a>
                <a class="login-btn" style="padding: 10px;">Place Your Ad</a>
                <!-- login and register area mobile finish -->
            </li>
        </ul>
    </div>
    </nav>
    </div>
    <!-- navigation finish -->
    <nav class="navbar navbar-expand-lg navbar-light"
         style="border:0px solid green;padding:0px !important;height:20px;">

        <div class="collapse navbar-collapse" id="navbarSupportedContentx" style="margin-left: 4.3rem;border:0px solid green;">
            <div class="container" style="margin:0px auto;border:0px solid green;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <ul class="navbar-nav"
                    style="margin:0px 0px 22px 5px !important;border:0px solid red;font-size: 14px;line-height: 1.43;font-weight: 600;">
                    <div class="row">
                        @php $categories = \App\Helpers\RecordHelper::getCategories(); @endphp
                        @foreach($categories as $category)
                            <li class="nav-item dropdown" onchange="">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    {{$category->name}}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="subcategorydropdown">
                                    @foreach($category->sub_categories as $sub_category)
                                        <a class="dropdown-item link"
                                           href="{{env('BASE_URL') . 'ads/' . $sub_category->id . '?country=' . request()->country . '&city=' . request()->city }}">{{$sub_category->name}}</a>
                                    @endforeach
                                </div>
                            </li>
                    @endforeach
                    <!---------->
                    </div>
                </ul>

            </div>
            <hr>
        </div>
        <!-- </li> -->
    </nav>
    </div>
    <hr>
</header>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).on('click', '.nav-item.dropdown', function() {
    // alert('Dropdown clicked!');
    e.preventDefault(); // Prevent default behavior if the element is a link

// Remove 'show' class from the clicked `.nav-item.dropdown` and its associated `.dropdown-menu`
$(this).removeClass('show');
$(this).children('.dropdown-menu').removeClass('show');

    // Add custom behavior here
});

    // Function to toggle the dropdown visibility
    function toggleDropdown(element) {
        const dropdownMenu = element.nextElementSibling;
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    }

    // Function to mark the notification as read
    function markAsRead(element) {
        alert('Marked as read!');
        const dropdownMenu = element.parentElement;
        dropdownMenu.style.display = 'none'; // Close the dropdown
    }

    // Function to remove the notification
    function removeNotification(element) {
        const notificationItem = element.closest('.notification-item');
        notificationItem.remove(); // Remove the entire notification
    }

    // Close dropdown if clicked outside
    window.onclick = function(event) {
        if (!event.target.matches('.dropdown-toggle-custom')) {
            const dropdowns = document.getElementsByClassName("dropdown-menu-custom");
            for (let i = 0; i < dropdowns.length; i++) {
                dropdowns[i].style.display = 'none';
            }
        }
    }
</script>
