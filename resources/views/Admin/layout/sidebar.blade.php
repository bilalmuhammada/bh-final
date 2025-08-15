<!-- partial:partials/_sidebar -->
<style>
    .sidebar .sidebar-body{
        background-color: #f2e49c !important;
       
    }
    .nav-link{
        color: blue !important;
    }
    .sidebar .sidebar-body .nav .nav-item.active .nav-link{
        background-color: #f2e49c !important;

    }
    .sidebar .sidebar-body .nav .nav-item.active .nav-link span{
        font-weight: 900 !important;

    }
    .sidebar .sidebar-body .nav .nav-item:hover .nav-link {
        background-color: #f2e49c !important;
    }
    .sidebar .sidebar-body .nav .nav-item:hover .nav-link .link-title {
        font-weight: 900 !important;
       
    }
</style>
<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            <img src="{{asset('images/businesshub.png')}}" title="businesshub" alt="businesshub "
            width="150 "/>
            <!-- Influencers<span>Pro</span> -->
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
        
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item @if (isset($menu) && $menu == 'dashboard') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL'). 'admins/dashboard'}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
           
            <li class="nav-item @if (isset($menu) && $menu == 'categories') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') . '/categories'}}" class="nav-link">
                    <i class="link-icon" data-feather="layers"></i>
                    <span class="link-title">Categories</span>
                </a>
            </li>
            @php
            //    dd($menu); 
            @endphp
            <li class="nav-item @if (isset($menu) && $menu == 'users') {{ 'active'}} @endif ">
                <a href="{{ env('BASE_URL') . 'admins/user'}}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Users</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'influencers') {{ 'active'}} @endif ">
                <a href="{{ env('BASE_URL'). 'admins/post'}}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Ads</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'admins') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') . 'admins/admin'}}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Admins</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'vendors/create') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') . 'admins/user/create'}}" class="nav-link">
                    <i class="link-icon" data-feather="plus-circle"></i>
                    <span class="link-title">Add User</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'influencers/create') {{ 'active'}} @endif ">
                <a href="{{ env('BASE_URL') . 'listing/select-category'}}" class="nav-link">
                    <i class="link-icon" data-feather="plus-circle"></i>
                    <span class="link-title">Post Ad</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'admins/create') {{ 'active'}} @endif ">
                <a href="{{ env('BASE_URL') . 'admins/admin/create'}}" class="nav-link">
                    <i class="link-icon" data-feather="plus-circle"></i>
                    <span class="link-title">Add Admin</span>
                </a>
            </li>
           
           
            {{-- <li class="nav-item @if (isset($menu) && $menu == 'influencers/transactions') {{ 'active'}} @endif ">
                <a href="{{ env('BASE_URL') . 'influencers/transactions'}}" class="nav-link">
                    <i class="link-icon" data-feather="arrow-right-circle"></i>
                    <span class="link-title">Influencer Transactions</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'vendors/transactions') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') . 'vendors/transactions'}}" class="nav-link">
                    <i class="link-icon" data-feather="arrow-right-circle"></i>
                    <span class="link-title">Brand Transactions</span>
                </a>
            </li> --}}
            <li class="nav-item @if (isset($menu) && $menu == 'vendors/reviews') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') .  'admins/user/reportUser' }}" class="nav-link">
                    <i class="link-icon" data-feather="activity"></i>
                    <span class="link-title">Blocked Users</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'influencers/reviews') {{ 'active'}} @endif ">
                <a href="{{ env('BASE_URL') . 'admins/post/reportpost'}}" class="nav-link">
                    <i class="link-icon" data-feather="activity"></i>
                    <span class="link-title">Reported Ads</span>
                </a>
            </li>
           
            <!-- <li class="nav-item @if (isset($menu) && $menu == 'faqs') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') . 'faqs'}}" class="nav-link">
                    <i class="link-icon" data-feather="droplet"></i>
                    <span class="link-title">FAQ'S</span>
                </a>
            </li> -->
            {{-- <li class="nav-item @if (isset($menu) && $menu == 'change-password') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') . 'change-password'}}" class="nav-link">
                    <i class="link-icon" data-feather="edit"></i>
                    <span class="link-title">Change Password</span>
                </a>
            </li> --}}
        </ul>
    </div>
</nav>
<!-- partial:partials/_sidebar -->
