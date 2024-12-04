<header>
    <style>
        .topbar{
            border-bottom: 0px solid !important;
        }
        .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
        background-color: #fff !important;
        color: blue !important;
        font-size: 14px;
        font-weight: bold;
    }





    <s>
    .dropdown-menu{
        /* width: 14pc !important; */
        max-height: 21rem !important;
        overflow-x: hidden;
    }
   
    
    .dropdown-menu.show {
        min-width: 0rem !important;}
    
    .img-flag{
        margin-right: 3px !important;

    }
    .select2-dropdown,.select2-dropdown--below{
        width: 130px !important;
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
            font-size: 14px;
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
 left: 7px !important;
}
    .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
        background-color: #fff !important;
        color: blue !important;
        font-size: 14px;
        font-weight: bold;
    }
    .select2-container--default .select2-results__option--selected {
        background-color: #fff !important;
    }
    .select2-results__options{
        padding: 7px !important;
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
            font-size: 14px !important;}


        .auth{
            color: blue;

        }
        .auth:hover{
            color: goldenrod !important;

        }

        
        .login-btn:hover {
            color: goldenrod !important ;
        
        }
        .login-btn {
            color: blue !important;
           padding: 10px !important;
            font-weight: 700 !important;
            cursor: pointer;
        }


        .dashboard-btn:hover {
            color: goldenrod !important ;
        
        }
        .dashboard-btn {
            color: blue !important;
           padding: 10px !important;
            font-weight:bold !important;
            cursor: pointer;
        }

        .register-btn:hover {
            color: goldenrod !important ;
        
        }
        .register-btn {
            color: blue !important;
           padding: 10px !important;
            font-weight:bold !important;
            cursor: pointer;
        }
    /* end */
    </style>
    @php
$url = request()->path();
$parts = explode('/', $url);
$first = $parts[0] ?? null;  
$second = $parts[1] ?? null;
    @endphp
    <div class="container">
        <!-- topbar start -->
        @if(request()->path()!=="contact-us" && request()->path()!=="about-us" &&  $second !=="plane-ad")
        <div class="topbar desktop-view">
            <div class="cont-w">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-md-6">
                        <!-- social icon desktop start -->
                        <a class="" href="{{env('BASE_URL') . 'home'}}" style="margin-left: -4px;">
                            <img src="{{asset('images/businesshub.png')}}" alt="" width="150px" alt="logo">
                        </a>
                    </div>
                    
                    
               
                    <div class="col-lg-6 col-xl-6 col-md-6" style="margin-top: 17px;">
                        <div style="float:right;margin-right: -45px;">
                            @if (!session()->has('user'))
                                <a class="login-btn" >Login</a>
                                <a class="register-btn">Register</a>
                                <a class="add-list-button add-listing-btn"
                                style="padding: 11px 20px;border-radius: 6px;">+ Place Your Ad</a>
                                @else
                                <a class="dashboard-btn"  href="{{env('BASE_URL') . 'home'}}" >Dashboard</a>
                                <a class="add-list-button add-listing-btn"
                                   style="padding: 11px 20px;border-radius: 6px;">+ Place Your Ad</a>
                            @endif
                        
                        {{-- </div> --}}
            </div>
            
                </div>   
                </div>
            </div>

            @endif
        </div>
      
     
     
   
</header>
