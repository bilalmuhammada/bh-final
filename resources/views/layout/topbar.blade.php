@php
$notifications = [];
$my_searches = [];
$favourite_ads = [];
$favourite_ads_count = 0;
$chats = [];
$my_ads_for_topbar = [];
$cities = \App\Helpers\RecordHelper::getCities(request()->country);
$currency = \App\Helpers\RecordHelper::getCurrency();
if (session()->has('user')) {
$notifications = \App\Helpers\RecordHelper::getNotifications();
$my_searches = \App\Helpers\RecordHelper::getSearches()->take(2);
$all_favourites = \App\Helpers\RecordHelper::getFavouriteAds();
$favourite_ads_count = $all_favourites->count();
$favourite_ads = $all_favourites->take(3);

$chats = \App\Helpers\RecordHelper::getUnreadMessages();
// dd($chats );
$my_ads_for_topbar = \App\Helpers\RecordHelper::getAdsByUserId(session()->get('user')->id)->take(2);
}
$countries = \App\Helpers\RecordHelper::getCountries();
$language = \App\Helpers\RecordHelper::getlanguge();

@endphp
<style>
    .dropdown-menu {
        /* width: 14pc !important; */
        max-height: 14.2rem !important;

        overflow-x: hidden;
    }

    #dropdownProfile {
        padding: 0px !important;
        min-width: 4rem !important;
    }

    .colorChange_top:hover {
        color: blue !important;

    }


    .dropdown-menu.show {

        min-width: 0rem !important;
        top: 12px !important;
        left: -12px !important;
    }


    .img-flag {
        margin-right: 3px !important;

    }

    .select2-dropdown,
    .select2-dropdown--below {
        width: 145px;
        border-radius: 0.3rem;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        border-color: #000fff transparent transparent transparent !important;

    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b:hover {
        border-color: goldenrod transparent transparent transparent !important;

    }

    /* start */
    .select2-search__field {
        border-radius: 0.3rem;
        border-color: #997045 !important;
    }

    .select2-search__field:hover {
        border-color: blue !important;
    }

    .select2-results__option {
        margin-right: 0px !important;
        /* padding: 4px !important; */
        font-size: 13px;
        font-weight: bold;

    }

    .select2-container--default .select2-results>.select2-results__options {
        max-height: 171px !important;
    }

    #subcategorydropdown {
        border-radius: 0.3rem !important;
        max-height: 20rem !important;

    }

    .dropdown-menu {
        max-height: 20rem;
        /* Adjust as needed */
        overflow-y: auto;
        /* Enable vertical scrolling */
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

    .select2-results__options {
        padding: 7px !important;
    }

    .select2-search__field {
        padding-left: 8px !important;
    }

    .select2-dropdown {
        border-radius: 0.3rem;
        border: 1px solid transparent !important;
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
        top: 2px;
        /* Adjust distance from the icon */
        left: 16rem;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 5px;
        /* width: 150px; */
        display: none;
        /* Initially hidden */
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
        font-size: 14px !important;
    }


    .auth {
        color: blue;

    }

    .auth:hover {
        color: goldenrod !important;

    }

    /* Favorite ads styling */
    .favorite-item {
        background-color: #ffffff;
        transition: all 0.3s ease;
        font-family: 'Inter', 'Poppins', sans-serif;
    }

    .favorite-item:hover {
        background-color: #f8f9fa;
        transform: translateY(-2px);
    }

    /* Image */
    .fav-img-wrapper {
        width: 70px;
        height: 70px;
        margin-top: 8px;
        border-radius: 8px;
        overflow: hidden;
        display: inline-block;
        background: #f1f1f1;
    }

    .fav-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .favorite-item:hover .fav-img {
        transform: scale(1.05);
    }

    /* Title */
    .fav-title {
        font-weight: 600;
        font-size: 12px;
        line-height: 1.3;
        color: #212529;
    }

    /* Meta info */
    .fav-meta {
        color: #000;
        font-size: 11px;
    }

    /* Card hover effect */
    .hover-card {
        border: 1px solid #e9ecef;
    }

    .hover-card:hover {
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    /* Chat Dropdown Base */


    /* Chat Text */

    /* Chat Dropdown Toggle */
    .chat-toggle {
        cursor: pointer;
        font-family: 'Inter', sans-serif;
        transition: color 0.3s ease;
    }

    .chat-toggle:hover {
        color: #0d6efd;
        /* Primary blue */
    }

    /* Dropdown Menu */
    .chat-menu {
        min-width: 320px;
        max-width: 380px;
        border-radius: 10px;
        background-color: #fff;
        border: 1px solid #e9ecef;
    }

    /* Chat Item */
    .chat-item {
        background-color: #f8f9fa;
        transition: background 0.3s, transform 0.3s;
    }

    .chat-item:hover {
        background-color: #e9ecef;
        transform: translateY(-1px);
    }

    /* Avatar */
    .chat-avatar-wrapper {
        width: 60px;
        height: 60px;
        border-radius: 8px;
        overflow: hidden;
    }

    .chat-avatar {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Chat Text */
    .chat-title {
        font-size: 13px;
    }

    .chat-message {
        font-size: 12px;
    }

    .chat-time {
        font-size: 11px;
    }

    /* Hover card effect */
    .hover-card {
        border-radius: 8px;
    }

    /* View all link */
    .view-all-link:hover {
        text-decoration: underline;
    }



    /* end */
</style>
<header>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                <div class="col" style="margin-top: 3px;margin-left:0px;">
                    {{-- <div class="col-lg-1 col-xl-1 col-md-1"> --}}
                    <!-- social icon desktop start -->
                    <a class="" href="{{env('BASE_URL') . 'home'}}">
                        <img src="{{asset('images/businesshub.png')}}" alt="" width="120px" class="shaking" alt="logo">
                    </a>
                </div>
                @php
                $url = request()->path();
                $parts = explode('/', $url);
                $first = $parts[0] ?? null;
                $second = $parts[1] ?? null;
                // dd( $second, $first );
                @endphp

                {{-- </div> --}}
                @if($second!=="profile")
                <div class="col-lg-4 col-xl-5 col-md-8" style="border:0px solid red;margin-right:-1.4rem;">
                    <!-- <div class="col-md-4"> -->
                    <span style="position:relative;top:12px;border:0px solid red;background-color:inherit !important;">
                        <!-- country bar mobile start -->
                        <div class="mobile-country desktop-menu-right">
                            <div class="row">

                                <!----langs--->
                                {{-- <div class="country" style="border:0px solid green;position:relative;left:-111px;"> --}}
                                <div class="mobile-country desktop-menu-right">

                                    <select class="form-control country_dropdown1 country_dropdown  " name="country_dropdown" style="width:165px;" id="country_dropdown">

                                        <option value="">All Countries</option>
                                        @foreach($countries as $country)

                                        <option
                                            {{ $country->id == request()->country ? 'selected' : '' }} data-flag-url="{{ $country->image_url }}"
                                            value="{{ $country->id }}"
                                            style="font-size:8px !important;">
                                            {{ $country->name }}

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

                                    <select class="form-control language_dropdown " name="language_dropdown" style="width:130px;" id="language_dropdown" onchange="translateLanguage()">>


                                        @foreach($language as $language1)

                                        <option
                                            {{ $language1->id == request()->language ? 'selected' : '' }} data-flag-url="{{ $language1->flag_image_url }}"
                                            value="{{ $language1->prefix }}" {{ $language1->id == 131 ? 'selected' : '' }}
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
                                        {{ $currencyn->currency_short_name ==  session('app_currency', 'default_currency') ? 'selected' : '' }} data-flag-url="{{ $currencyn->image_url }}" value="{{ $currencyn->currency_short_name }}"
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
                <div class="col-md-7 col-xl-6 col-md-9" style="border:0px solid red;">
                    <div class="social-icon float-right text-dark" style="margin-top: 7px;">
                        <div class="row align-middle" style="font-size: 11px;color:black;margin-right: 1.5rem;border:0px solid red;">
                            @if (session()->has('user'))
                            <span style="padding:8px 15px 0px 15px;text-align:center;">
                                <a type="button" id="notifications"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">

                                    <div>
                                        <span class="colorChange_top" style="color: #000;font-size:14px;">Notifications</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu" id="notifications" aria-labelledby="notifications"
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




                                        <div class="content" href="#">
                                            <div class="notification-item">
                                                <div class="row" style="background: aliceblue; position: relative;">
                                                    <!-- Three dots icon with dropdown -->


                                                    <div class="col-md-3">
                                                        <div style="width:80px; height:80px; border-radius:10%; overflow: hidden; margin-left: 2px;">
                                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="https://www.ivertech.com/Articles/Images/KoalaBear200x200.jpg" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6" style="width: 300px; white-space: normal;">
                                                        <span style="font-weight: bold;">{{$notification->title}}</span><br>
                                                        <span>{{$notification->message}}</span><br>
                                                        <p style="margin: 9px 0 0 0;">
                                                            {{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}
                                                        </p>
                                                    </div>
                                                    <div class="col-md-1" style="position: absolute; top: 10px; left: -8px;">
                                                        <div class="dropdown">
                                                            <!-- Button -->
                                                            <button class="btn btn-link" type="button"
                                                                onclick="toggleDropdown(this, event)"
                                                                style="margin-left: 23rem; margin-top: -14px;">
                                                                <i class="fa fa-ellipsis-h"></i>
                                                            </button>

                                                            <!-- Custom dropdown menu -->
                                                            <div class="dropdown-menu-custom" style="display: none; position: absolute; top: 100%; right: 0; background: white; border: 1px solid #ccc; border-radius: 6px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); min-width: 140px; z-index: 1000;">
                                                                <a href="#" style="font-size: 12px;" onclick="markAsRead(this)">Mark as Read</a>
                                                                <a href="#" style="font-size: 12px;" onclick="removeNotification(this)">Remove Notification</a>
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

                                    <hr>
                                    <div class="notification-footer" style="text-align: center;">
                                        <h4 class="menu-title" style="color: red;font-size: 1rem !important;
                                               "> <a class="content" href="{{ env('BASE_URL').'notifications'}}"
                                                {{-- data-bs-toggle="modal" data-bs-target="#phoneRequestModal"  --}}
                                                style="color: red;">View all Notifications </a></h4>
                                    </div>
                                    <!---------inner area---->
                                    @else



                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                            <span>Nothing to show</span>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="notification-footer" style="text-align: center;">
                                        <h4 class="menu-title"> <a class="content" href="#" data-bs-toggle="modal" style="font-size: 15px; color: red;font-weight: 600;" data-bs-target="#phoneRequestModal">View all Notifications </a></h4>
                                    </div>
                                    </ul>
                                    @endif
                                </div>
                            </span>









                            <span style="padding:8px 15px 0px 15px; text-align:center;">
                                <a type="button" id="favorite" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div>
                                        <span class="colorChange_top" style="color:#000; font-size:14px;">Favorites</span>
                                    </div>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="favorite" style="padding:0; width:350px; border-radius:12px; max-height: none; overflow: visible; background-color: #fff; box-shadow: 0 4px 20px rgba(0,0,0,0.15); border:none;">
                                    @if (session()->has('user') && count($favourite_ads) > 0)
                                    <!-- Header -->
                                    <div class="px-3 py-2 border-bottom">
                                        <span class="fw-bold text-dark" style="font-size: 14px;">Favorites</span>
                                        <span class="badge bg-primary text-white rounded-pill ms-2" style="font-size: 11px;">{{ $favourite_ads_count }}</span>
                                    </div>

                                    <!-- Items -->
                                    <div class="list-group list-group-flush">
                                        @foreach($favourite_ads as $favourite_ad)
                                        <a href="{{ env('BASE_URL') . 'ads/detail/' . $favourite_ad->id . '?country=' . request()->country . '&city=' . request()->city }}"
                                            class="list-group-item list-group-item-action  border-bottom d-flex align-items-center" style="background-color: aliceblue; padding: 0.15rem 0.75rem 0.15rem 0.75rem !important;">

                                            <!-- Image -->
                                            <div style="flex-shrink: 0; width: 50px; height: 50px; border-radius: 8px; overflow: hidden; background: #fff;">
                                                <img src="{{ $favourite_ad->main_image_url ?? 'https://via.placeholder.com/80x80?text=Ad' }}"
                                                    alt="{{ $favourite_ad->title }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>

                                            <!-- Content -->
                                            <div class="ms-4 flex-grow-1 ml-3" style="line-height: 1.3;">
                                                <h6 class="mb-3 text-dark text-truncate" style="font-size: 15px; font-weight: 600; max-width: 220px;">
                                                    {{ $favourite_ad->title }}
                                                </h6>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-muted text-truncate" style="font-size: 13px; max-width: 140px;">
                                                        {{ $favourite_ad->category->name ?? 'General' }}
                                                    </span>
                                                    <span class="font-weight-bold" style="font-size: 13px; color: red;">
                                                        {{ \App\Helpers\SiteHelper::priceFormatter($favourite_ad->price,session('app_currency', 'default_currency')) }}
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                        @endforeach
                                    </div>

                                    <!-- Footer -->
                                    <div class="text-center p-2 bg-light" style="border-bottom-left-radius: 12px; border-bottom-right-radius: 12px;">
                                        <a href="{{ env('BASE_URL') . 'ads?type=favourite' }}" class="text-decoration-none fw-bold" style="font-size: 13px; color: red;">
                                            View all Favorites
                                        </a>
                                    </div>
                                    @else
                                    <div class="text-center py-4">
                                        <span class="text-muted small">No favorites yet</span>
                                    </div>
                                    @endif
                                </div>
                            </span>



                            <span style="padding:8px 15px 0px 15px; text-align:center;">
                                <!-- Toggle -->
                                <a class="chat-toggle d-inline-block" id="chatDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="colorChange_top" style="color:#000; font-size:14px; font-weight:500;">Chats</span>
                                </a>

                                <!-- Dropdown Menu -->
                                <div class="dropdown-menu chat-menu " aria-labelledby="chatDropdown" style="min-width: 300px;padding: 10px; ">
                                    @if(session()->has('user'))
                                    <!-- Header -->
                                    <div class="mb-2">
                                        <span class="fw-bold">Chats </span>
                                        <span style="color:#000fff;">{{ count($chats) }}</span>
                                    </div>

                                    <!-- Chat List -->
                                    @forelse($chats as $message)
                                    <a href="{{ env('BASE_URL') . 'chats/detail/' . $message->id . '?country=' . request()->country . '&city=' . request()->city }}"
                                        class="d-flex align-items-center text-decoration-none text-dark ">

                                        <!-- Avatar -->
                                        <div class="me-2" style="margin-right: 12px;">
                                            <img src="{{ $message->user->image_url ?? 'https://i.pinimg.com/originals/fe/d9/97/fed9971d943669c993db0be515a18a61.jpg' }}"
                                                alt="User Avatar"
                                                class="rounded-circle"
                                                width="45" height="45">
                                        </div>

                                        <!-- Chat Info -->
                                        <div class="flex-grow-1" style="line-height:normal;">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="fw-bold small chat-title" style="font-weight: 600; font-size: 13px;">


                                                    {{ Str::limit($message->chat->ad->title, 50) }}

                                                </span>

                                            </div>

                                            <div class="small text-muted">

                                                <span class="chat-time mb-0">
                                                    {{ $message->message ?? 'Unknown' }}
                                                </span>
                                            </div>
                                            <div class="small text-muted">

                                                <p class=" text-success small mb-0" style="font-size: 8px;">
                                                    {{ $message->message_recieved_time_diff }}
                                                </p>
                                            </div>
                                        </div>


                                        <div class="me-2" style="margin-left: 50px;">
                                            <img src="{{ $message->chat->ad->main_image_url ?? 'https://i.pinimg.com/originals/fe/d9/97/fed9971d943669c993db0be515a18a61.jpg' }}"
                                                alt="User Avatar"

                                                width="65" height="65" style="border-radius: 15px;">
                                        </div>
                                    </a>
                                    @empty
                                    <span class="text-center d-block py-2 text-muted">No chats available</span>
                                    @endforelse

                                    <!-- Footer -->
                                    <div class="text-center mt-2">
                                        <a href="{{ env('BASE_URL') . 'chats?country=' . request()->country . '&city=' . request()->city }}"
                                            class="fw-bold text-danger text-decoration-none">
                                            View all Chats
                                        </a>
                                    </div>
                                    @else
                                    <span class="text-center d-block py-3 text-muted">Nothing to show</span>
                                    @endif
                                </div>
                            </span>



                            <span style="padding:8px 15px 0px 15px;text-align:center;">

                                <a href="{{ env('BASE_URL') . 'user/ads?country=' . request()->get('country') . '&city=' . request()->get('city') }}"
                                    type="button"
                                    id="ads"
                                    class="colorChange_top"
                                    style="color: #000; font-size: 14px;"
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
                <span style="padding:1px 15px;text-align:center;font-size:14px !important;">
                    <a class="link"
                        href="{{ env('BASE_URL') . 'user/profile?country=' . request()->country . '&city=' . request()->city}}">
                        <img src="{{session()->get('user')->image_url}}" alt="img" width="30" height="30"
                            style="border-radius: 50%;border:0px solid red; margin-right: 6px; margin-bottom:6px;">
                    </a>
                    <span class="dropdown" style="margin-top: 6px;">
                        <span class="colorChange_top" style="width:;display:inline;border:0px solid red;" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            {{session()->get('user')->first_name}} {{session()->get('user')->last_name}}
                        </span>
                        <div class="dropdown-menu" id="dropdownProfile" aria-labelledby="dropdownMenuButton" style="max-width: 106px ;    position: absolute;top: 75% !important;">
                            <a class="dropdown-item link" style="font-weight: bolder;padding:0px; margin-top:7px;  max-height: 4.2rem !important;"
                                href="{{ env('BASE_URL') . 'user/profile?country=' . request()->country . '&city=' . request()->city}}">My Profile</a>
                            {{-- <a class="dropdown-item link"
                                               href="{{ env('BASE_URL') . 'user/ads?country=' . request()->country . '&city=' . request()->city}}">My Ads</a> --}}

                            <a class="dropdown-item logout-btn" style="font-weight: bolder;padding:0px; margin-top:5px">Sign Out</a>
                        </div>
                    </span>
                    @endif
                    @if (!session()->has('user'))
                    <span class="auth" style="padding:6px 15px;text-align:center;font-size:14px !important;font-weight: bold;">
                        <a class="login-btn">Login</a>
                    </span>
                    <span class="auth" style="padding:6px 15px;text-align:center;font-size:14px !important;    font-weight: bold;">
                        <a class="register-btn">Register</a>
                    </span>
                    @endif
                    <span style="padding:4px 15px;text-align:center;font-size:14px !important;">
                        <a class="add-list-button add-listing-btn"
                            style="padding: 7px 8px;border-radius: 0.3rem;color: #fff !important;">+ Place Your Ad</a>
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
                        {{-- <a class="dropdown-item" href="{{ env('BASE_URL') . 'user/searches'}}">My Searches</a>--}}
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
                        style="padding: 11px 8px;border-radius: 0.3rem;color: #fff !important;">+ Place Your Ad</a>
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
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="subcategorydropdown" style="margin-left: 6px !important;">
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



    function toggleDropdown(element, event) {
        // Stop click from bubbling to parent notification dropdown
        event.stopPropagation();

        const dropdownMenu = element.nextElementSibling;

        // Close other three-dots menus
        document.querySelectorAll('.dropdown-menu-custom').forEach(menu => {
            if (menu !== dropdownMenu) menu.style.display = 'none';
        });

        // Toggle this menu
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    }

    // Example actions
    function markAsRead(el) {
        el.closest('.notification-item').style.background = '#fff';
    }

    function removeNotification(el) {
        el.closest('.notification-item').remove();
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