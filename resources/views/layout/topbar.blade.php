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

$chats = \App\Helpers\RecordHelper::getLatestChats();
// dd($chats );
$my_ads_for_topbar = \App\Helpers\RecordHelper::getAdsByUserId(session()->get('user')->id)->take(2);
}
$countries = \App\Helpers\RecordHelper::getCountries();
$language = \App\Helpers\RecordHelper::getlanguge();

@endphp
<style>
    /* Premium Topbar Styling */
    .topbar-wrapper {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 8px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0px 15px;
        background: #fff;
    }
    .topbar-main-bg {
        background: #fff;
        border-bottom: 1px solid #f0f0f0;
        width: 100%;
        height: 37px;
    }
    .colorchange:hover {
        color: blue !important;
    }

    .topbar-items-group {
        display: flex;
        align-items: center;
        gap: 15px; /* Reduced from 11px */
        flex: 1; /* Allow group to fill remaining space */
    }
    .list-group-item{
        padding: 0.25rem 0.5rem;
    }

    .topbar-dropdown-trigger {
        font-family: 'Inter', sans-serif;
        font-size: 13px; /* Reduced from 14px */
        font-weight: 500;
        color: #1a1a1a;
        cursor: pointer;
        display: flex;
        align-items: center;
        padding: 0px 0;
        transition: all 0.2s ease;
        text-decoration: none !important;
    }

    .topbar-dropdown-trigger:hover {
        color: goldenrod !important;
    }

    /* Badge positioning */
    .trigger-with-badge {
        position: relative;
    }

    .badge-premium-green {
        position: absolute;
        top: -4px;
        right: -10px;
        background-color: #dcfce7 !important;
        color: #166534 !important;
        font-size: 8px !important;
        width: 12px !important;
        height: 12px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-weight: 700 !important;
        border-radius: 50% !important;
        box-shadow: 0 1px 3px rgba(22, 101, 52, 0.1);
        padding: 0 !important;
    }
    .badge-new-green {
        background-color: #dcfce7 !important;
        color: #166534 !important;
        font-size: 8px !important;
        white-space: nowrap !important;
        padding: 2px 8px !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-weight: 700 !important;
        border-radius: 20px !important;
        box-shadow: 0 1px 3px rgba(22, 101, 52, 0.1);
    }

    /* Dropdown Menus */
    .dropdown-menu {
        border: none !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
        border-radius: 4px !important;
        margin-top: 2px !important;
        padding:  0 !important;
    }

    .color-logo{
        color: red !important;
    }

    .color-logo:hover{
        color: blue !important;
    }
    /* Selection items (Select2-like styling for custom selects) */
    .custom-select-trigger {
        border: 1px solid #eee;
        border-radius: 6px;
        padding: 5px 12px;
        height: 34px;
        background: #fdfdfd;
        color: #333;
        font-size: 13px;
    }

    .custom-select-trigger:focus {
        border-color: #0088eb;
        box-shadow: 0 0 0 3px rgba(0, 136, 235, 0.1);
        outline: none;
    }
    

    /* Select2 Results Padding */
    .select2-results__option {
        padding: 4px 10px !important;
        font-size: 13px !important;
    }
    .select2-results__options {
        overflow-x: hidden !important;
    }


  .ad-place-btn{
    padding: 3px 8px; 
    border-radius: 4px; 
    font-weight: 600; 
    font-size: 12px; 
    color: #fff !important; 
    background-color: #A17A4E !important; 
    white-space: nowrap;
    margin-top: -3px;
    display: inline-flex;
    align-items: center;
    }
    .ad-place-btn:hover {
        color: white !important;
        background-color: blue !important;
    }
    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: #fff !important;
        color: blue !important;
        font-weight: 600 !important;
    }

    .ad-item-title {
        color: #000 !important;
        transition: color 0.2s ease;
    }
    .list-group-item-action:hover .ad-item-title {
        color: #A17A4E !important;
    }
    .price-text {
        color: #FF0000 !important;
    }
    .view-all-link:hover {
        color: #0088eb !important;
        text-decoration: none;
    }

    /* Select2 Search Field Styles */
    .select2-search--dropdown .select2-search__field {
        padding: 5px !important;
        font-weight: normal !important;
        border: 1px solid #A17A4E !important;
        border-radius: 4px !important;
        outline: none !important;
    }

    .select2-search--dropdown .select2-search__field:hover {
        border-color: blue !important;
    }

    /* Subcategory Dropdown */
    #subcategorydropdown {
        border-radius: 4px !important;
        max-height: 18rem !important;
        overflow-y: auto !important;
        border: none !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
    }

    /* Select2 Arrow and Selection Refinements - Moved to custom.css */

    /* Enable hover open for dropdowns */
    .dropdown.hover-delay > .dropdown-menu {
        display: block !important;
    }
    .nav-item.dropdown.hover-delay > .dropdown-menu {
        display: block !important;
    }
    .nav-item.dropdown:hover > .nav-link {
        color: blue !important;
    }

    /* Custom Dropdown for Three Dots */
    .dropdown-menu-custom {
        display: none;
        position: absolute;
        right: 0;
        top: 20px;
        background: #fff;
        border: 1px solid #eee;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        z-index: 1000;
        min-width: 100px;
        border-radius: 6px;
       
    }

    .dropdown-menu-custom a {
        display: block;
        padding: 3px 7px;
        font-size: 12px;
        color: #333;
        text-decoration: none;
        font-weight: 500;
        transition: background 0.2s;
    }

    .dropdown-menu-custom a:hover {
        background: #f8f9fa;
        color: #0088eb;
    }
    .fa-ellipsis-h {
        color: blue;
    }
    .fa-ellipsis-h:hover {
        color: goldenrod;
    }
    .btn:focus, .btn.focus {
        box-shadow: none !important;
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

    <div class="topbar-main-bg desktop-view">
    <div class="topbar-wrapper">
        <div class="topbar-logo">
            <a href="{{env('BASE_URL') . 'home'}}">
                <img src="{{asset('images/businesshub.png')}}" alt="logo" width="120px" class="shaking">
            </a>
        </div>

        <div class="topbar-items-group">
            <!-- Country Dropdown -->
            <div class="selection-item">
                <select class="form-control country_dropdown1 country_dropdown" name="country_dropdown" style="width:160px;" id="country_dropdown">
                    <option value="">All Countries</option>
                    @foreach($countries as $country)
                        <option {{ $country->id == request()->country ? 'selected' : '' }} data-flag-url="{{ $country->image_url }}" value="{{ $country->id }}">
                            {{ $country->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- City Dropdown -->
            <div class="selection-item">
                <select class="form-control city_dropdown" name="city_dropdown" style="width:120px;">
                    <option value="">All Cities</option>
                    @foreach($cities as $city)
                        <option data-city-id="{{ $city->id }}" {{ $city->id == request()->city ? 'selected' : '' }} value="{{ $city->id }}">
                            {{ $city->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Language Dropdown -->
            <div class="selection-item">
                <select class="form-control language_dropdown" name="language_dropdown" style="width:100px;" onchange="translateLanguage()">
                    @foreach($language as $language1)
                        <option {{ $language1->id == request()->language ? 'selected' : '' }} data-flag-url="{{ $language1->flag_image_url }}" value="{{ $language1->prefix }}" {{ $language1->prefix == 'en' ? 'selected' : '' }}>
                            {{ $language1->name }}
                        </option>
                    @endforeach
                </select>
                <div id="google_translate_element" style="display: none;"></div>
            </div>

            <!-- Currency Dropdown -->
            <div class="selection-item">
                <select class="form-control currency_dropdown" name="currency_dropdown" style="width:100px;">
                    <option value="">Currency</option>
                    @foreach($currency as $currencyn)
                        <option data-currency-id="{{ $currencyn->currency }}" {{ $currencyn->currency_short_name == session('app_currency', 'USD') ? 'selected' : '' }} data-flag-url="{{ $currencyn->image_url }}" value="{{ $currencyn->currency_short_name }}">
                            {{ $currencyn->currency_short_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            @if (session()->has('user'))
                <!-- Notifications -->
                <div class="dropdown" style="margin-left: auto;">
                    <a class="topbar-dropdown-trigger trigger-with-badge" id="notificationsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Notifications
                        @if(count($notifications) > 0)
                            <span class="badge-premium-green">{{ count($notifications) }}</span>
                        @endif
                    </a>
                    <div class="dropdown-menu" style="width:420px;">
                        @if (count($notifications) > 0)
                            <div class="px-2 py-1 border-bottom d-flex justify-content-between align-items-center">
                                <h6 class="mb-0 fw-bold" style="font-size: 14px;">Notifications</h6>
                                <span class="badge-new-green">{{ count($notifications) }} New</span>
                            </div>
                            <div class="list-group list-group-flush">
                                @foreach($notifications as $notification)
                                    <div class=" list-group-item-action border-bottom pl-2 pr-2" style="background-color: aliceblue;">
                                        <div class="d-flex align-items-center position-relative">
                                            <div style="flex-shrink: 0; width: 50px; height: 46px; border-radius: 4px; overflow: hidden; background: #fff;">
                                                <img style="width: 100%; height: 100%; object-fit: cover;" src="https://www.ivertech.com/Articles/Images/KoalaBear200x200.jpg" />
                                            </div>
                                            <div class="ms-3 flex-grow-1 px-2">
                                                <h6 class="mb-0  fw-bold ad-item-title" style="font-size: 13px;">{{$notification->title}}</h6>
                                                <p class="mb-0 text-muted small text-truncate" style="max-width: 180px;">{{$notification->message}}</p>
                                                <small class="text-muted" style="font-size: 10px;">{{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</small>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-link p-0 text-muted" type="button" onclick="toggleDropdown(this, event)">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-menu-custom">
                                                    <a href="#" onclick="markAsRead(this)">Mark as Read</a>
                                                    <a href="#" style="color: red !important;" onclick="removeNotification(this)">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="text-center pt-1 pb-1 border-top">
                                <a href="{{ env('BASE_URL').'notifications'}}" class="fw-bold color-logo" style="font-size: 14px;">View all Notifications</a>
                            </div>
                        @else
                            <div class="p-4 text-center text-muted small">Nothing to show</div>
                        @endif
                    </div>
                </div>

                <!-- Favorites -->
                <div class="dropdown">
                    <a class="topbar-dropdown-trigger trigger-with-badge" id="favoritesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Favorites
                        @if($favourite_ads_count > 0)
                            <span class="badge-premium-green">{{ $favourite_ads_count }}</span>
                        @endif
                    </a>
                    <div class="dropdown-menu" style="width:380px;">
                        @if (count($favourite_ads) > 0)
                            <div class="px-2 py-1 border-bottom d-flex justify-content-between align-items-center">
                                <h6 class="mb-0 fw-bold" style="font-size: 14px;">Favorites</h6>
                                <span class="badge-new-green">{{ $favourite_ads_count }} New</span>
                            </div>
                            <div class="list-group list-group-flush">
                                @foreach($favourite_ads as $favourite_ad)
                                    <a href="{{ env('BASE_URL') . 'ads/detail/' . $favourite_ad->id . '?country=' . request()->country . '&city=' . request()->city }}" class=" list-group-item-action border-bottom d-flex align-items-center pl-2 pr-2" style="background-color: aliceblue;">
                                        <div style="flex-shrink: 0; width: 45px; height: 38px; border-radius: 4px; overflow: hidden; background: #fff;">
                                            <img src="{{ $favourite_ad->main_image_url ?? 'https://via.placeholder.com/80x80?text=Ad' }}" style="width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                        <div class="ms-3 flex-grow-1 px-2">
                                            <h6 class="mb-2 text-truncate fw-bold ad-item-title" style="font-size: 14px;">{{ $favourite_ad->title }}</h6>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <small class="text-muted">{{ $favourite_ad->category->name ?? 'General' }}</small>
                                                <h6 class="mb-0 fw-bold price-text" style="font-size: 12px;">{{ \App\Helpers\SiteHelper::priceFormatter($favourite_ad->price,session('app_currency', 'USD')) }}</h6>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            <div class="text-center pt-1 pb-1 border-top">
                                <a href="{{ env('BASE_URL') . 'ads?type=favourite' }}" class="fw-bold  color-logo" style="font-size: 14px;">View all Favorites</a>
                            </div>
                        @else
                            <div class="p-4 text-center text-muted small">No favorites yet</div>
                        @endif
                    </div>
                </div>

                <!-- Chats -->
                <div class="dropdown">
                    <a href="{{ count($chats) > 0 ? '#' : route('chats') . '?country=' . request()->country . '&city=' . request()->city }}" class="topbar-dropdown-trigger trigger-with-badge" id="chatsDropdown" @if(count($chats) > 0) data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @endif>
                        Chats
                        @if(count($chats) > 0)
                            <span class="badge-premium-green">{{ count($chats) }}</span>
                        @endif
                    </a>
                    @if(count($chats) > 0)
                    <div class="dropdown-menu shadow-lg" style="width:420px;">
                        <div class="pl-2 pr-2 pb-2 pt-2 border-bottom d-flex justify-content-between align-items-center">
                            <h6 class="mb-0 fw-bold" style="font-size: 14px;">Chats</h6>
                            <span class="badge badge-new-green">{{ count($chats) }} New</span>
                        </div>
                        <div class="list-group list-group-flush">
                            @foreach($chats->take(3) as $message)
                                <a href="{{ route('chats') . '/detail/' . $message->id . '?country=' . request()->country . '&city=' . request()->city }}" class=" list-group-item-action d-flex align-items-center pl-2 pr-2 " style="background-color: aliceblue; margin-bottom: .15rem; margin-top: .15rem;">
                                    <img src="{{ $message->chat->other_user->image_url ?? 'https://i.pinimg.com/originals/fe/d9/97/fed9971d943669c993db0be515a18a61.jpg' }}" class="rounded-circle" width="60" height="60" style="object-fit: cover;">
                                    <div class="ms-3 flex-grow-1 px-2 overflow-hidden">
                                        <h6 class="mb-1 fw-bold text-truncate ad-item-title" style="font-size: 14px;">{{ Str::limit($message->chat->ad->title ?? 'Untitled Ad', 30) }}</h6>
                                        <p class="mb-1 text-muted small text-truncate" style="color: #666;">{{ Str::limit($message->message ?? 'Click to view', 40) }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-primary fw-bold" style="font-size: 12px;font-weight: 600;">{{ $message->chat->other_user->first_name ?? 'User' }}</small>
                                            <small class="text-muted" style="font-size: 11px;">{{ $message->message_recieved_time_diff }}</small>
                                        </div>
                                    </div>
                                    <img src="{{ $message->chat->ad->main_image_url ?? 'https://via.placeholder.com/45' }}" class="rounded" width="60" height="60" style="object-fit: cover; border: 1px solid #eee;">
                                </a>
                            @endforeach
                        </div>
                        <div class="pt-1 pb-1 text-center border-top">
                            <a href="{{ route('chats') . '?country=' . request()->country . '&city=' . request()->city }}" class="fw-bold color-logo" style="font-size: 14px;">View all Chats</a>
                        </div>
                    </div>
                    @endif
                </div>

                <!-- My Ads Link -->
                <a href="{{ env('BASE_URL') . 'user/ads?country=' . request()->get('country') . '&city=' . request()->get('city') }}" class="topbar-dropdown-trigger white-space-nowrap" style="white-space: nowrap;">
                    My Ads
                </a>

                <!-- Profile -->
                <div class="dropdown" style="margin-bottom: 4px;">
                    <a class="topbar-dropdown-trigger" id="profileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: flex; align-items: center;">
                        <span style="white-space: nowrap; padding: 0px 14px;">{{session()->get('user')->first_name}} {{session()->get('user')->last_name}}</span>
                        <img src="{{session()->get('user')->image_url}}" class="topbar-profile-img">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right p-0" style="min-width:70px; border: 1px solid #eee !important; margin-top: 2px !important;">
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action colorchange" style=" font-size: 13px; padding:0px 4px 0px 4px; color: black; border: none; display: flex; align-items: center;" href="{{ env('BASE_URL') . 'user/profile?country=' . request()->country . '&city=' . request()->city}}">
                            
                                <span>My Profile</span>
                            </a>
                            
                            <a class="list-group-item list-group-item-action colorchange logout-btn" style=" font-size: 13px; padding:0px 4px 0px 4px; color: black; border: none; display: flex; align-items: center;">
                                
                                <span>Sign Out</span>
                            </a>
                        </div>
                    </div>
                </div>
            @else
               
                <div class="auth-buttons d-flex" style="gap: 12px; margin-left: auto; margin-bottom: 6px;">
                    <a class="topbar-dropdown-trigger login-btn fw-bold">Login</a>
                    <a class="topbar-dropdown-trigger register-btn fw-bold">Register</a>
                </div>
            @endif

            <a class="add-listing-btn btn ad-place-btn shaking" >+ Place Your Ad</a>
        </div>
    </div>
    </div>

                            <style>
                                .hover-scale:hover {
                                    transform: scale(1.02);
                                }

                                .transition-all {
                                    transition: all 0.2s ease-in-out;
                                }

                                .primary-soft-bg {
                                    background-color: #e7f1ff;
                                }
                            </style>



    <!-- topbar finish -->
    <!-- navigation start -->
    
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

    <!-- navigation finish -->
    <div class="desktop-view" style="max-width: 1200px !important; margin: 0 auto !important; border-top: 1px solid #f0f0f0; padding: 10px 13px; margin-bottom: 0px !important; padding-bottom: 0px !important;">
        <nav class="navbar navbar-expand-lg navbar-light p-0" style="min-height: auto !important; margin-bottom: 10px !important;">
            <div class="collapse navbar-collapse" id="navbarSupportedContentx">
                <ul class="navbar-nav" style="font-size: 13px; display: flex; flex-wrap: nowrap; gap: 39px; font-weight: 600; white-space: nowrap; margin-bottom: 0px !important;">
                    @php $categories = \App\Helpers\RecordHelper::getCategories(); @endphp
                    @foreach($categories as $category)
                    <li class="nav-item dropdown">
                        <a class="nav-link p-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            {{$category->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="subcategorydropdown" style="margin-left: -9px !important;">
                            @foreach($category->sub_categories as $sub_category)
                            <a class="dropdown-item link"
                                href="{{env('BASE_URL') . 'ads/' . $sub_category->id . '?country=' . request()->country . '&city=' . request()->city }}">{{$sub_category->name}}</a>
                            @endforeach
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>
        </nav>
    </div>

</header>
@php
    // Removed duplicate jQuery include to prevent conflict with version in header.blade.php
@endphp


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



    // Dropdown delay logic
    $(document).ready(function() {
        var dropdownTimer;
        
        $('.nav-item.dropdown').on('mouseenter', function() {
            var $this = $(this);
            clearTimeout(dropdownTimer);
            $('.nav-item.dropdown').removeClass('hover-delay');
            $this.addClass('hover-delay');
        }).on('mouseleave', function() {
            var $this = $(this);
            dropdownTimer = setTimeout(function() {
                $this.removeClass('hover-delay');
            }, 500); // 2 seconds delay
        });

        $('.dropdown-menu').on('mouseenter', function() {
            clearTimeout(dropdownTimer);
        }).on('mouseleave', function() {
            var $dropdown = $(this).closest('.dropdown');
            dropdownTimer = setTimeout(function() {
                $dropdown.removeClass('hover-delay');
            }, 500); // 2 seconds delay
        });
    });

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