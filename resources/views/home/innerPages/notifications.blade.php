@extends('layout.master')
@section('content')
    @php
        $categories = \App\Helpers\RecordHelper::getCategories();
        $catgories_for_search = $categories->random()->take(5)->get();
    @endphp
      <style>
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
            top: 40px; /* Adjust distance from the icon */
            left: 10px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 0.3rem;
            width: 150px;
            display: none; /* Initially hidden */
            z-index: 1000;
        }
        .fa-ellipsis-h{
            color:blue;
        }
         .fa-ellipsis-h:hover{
            color:goldenrod;
        }

        /* Dropdown items */
        .dropdown-menu-custom a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
        }

        .dropdown-menu-custom a:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
@php
 if (session()->has('user')) {
        $notifications = \App\Helpers\RecordHelper::getNotifications();
        $my_searches = \App\Helpers\RecordHelper::getSearches()->take(2);
        $favourite_ads = \App\Helpers\RecordHelper::getFavouriteAds()->take(3);
        // dd( $favourite_ads);
        $chats = \App\Helpers\RecordHelper::getUnreadMessages();
        $my_ads_for_topbar = \App\Helpers\RecordHelper::getAdsByUserId(session()->get('user')->id)->take(2);
    }
@endphp
<div class="container mt-4">

   <h4 style="font-weight:bold;margin-left:-9px;">Notification</h4>
    @foreach($notifications as $notification)
    <div class="notification-item" style="position: relative; padding:0px 10px 0px 10px;">
    <div class="row" style="border-bottom:1px solid #eee">
        <!-- Image Section -->
        <div class="col-md-1">
            <div style="width:80px; height:75px; margin-top:6px; border-radius:10%; overflow: hidden;margin-left: -15px;">
                <img style="width: 100%; height: 100%; object-fit: cover;" src="https://www.ivertech.com/Articles/Images/KoalaBear200x200.jpg" />
            </div>
        </div>

        <!-- Text Section -->
        <div class="col-md-7" style="white-space: nowrap; margin-left: -14px;">
            <span style="font-weight: bold;">{{$notification->title}}</span>
            <br>
            <span>{{$notification->message}}</span>
            <br>
            <p style="padding: 0px; margin: 0px;">
    {{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}
</p>
        </div>

        <!-- Dropdown Section -->
        <div class="col-md-1" style="margin-left:17rem;">
            <div class="dropdown-toggle-custom" style="cursor: pointer;margin-left: 7rem;" onclick="toggleDropdown(this)">
                <i class="fa fa-ellipsis-h" ></i>
            </div>

            <!-- Custom dropdown menu -->
            <div class="dropdown-menu-custom" style="position: absolute; background-color: white; border: 1px solid #ccc; border-radius: 5px; width: 170px; top: 35px; left: -50px; display: none;">
                <a href="#" onclick="markAsRead(this)" style="display: block; padding: 10px; text-decoration: none; color: #333;">Mark as Read</a>
               <!--   // <a href="#" onclick="removeNotification(this)" style="display: block; padding: 10px; text-decoration: none; color: #333;">Remove Notification</a>-->
            </div>
        </div>
    </div>
</div>
    @endforeach
</div>
<script>
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
        if (!event.target.matches('.dropdown-toggle-custom, .dropdown-toggle-custom *')) {
            const dropdowns = document.getElementsByClassName("dropdown-menu-custom");
            for (let i = 0; i < dropdowns.length; i++) {
                dropdowns[i].style.display = 'none';
            }
        }
    }
</script>
@endsection

