<header>
    <style>
        .topbar{
            border-bottom: 0px solid !important;
        }
    </style>
    <div class="container">
        <!-- topbar start -->
        <div class="topbar desktop-view">
            <div class="cont-w">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-md-6">
                        <!-- social icon desktop start -->
                        <a class="" href="{{env('BASE_URL') . 'home'}}" style="margin-left: -30px;">
                            <img src="{{asset('images/businesshub-slogan.png')}}" alt="" width="250px" alt="logo">
                        </a>
                    </div>
                    
                    <div class="col-lg-6 col-xl-6 col-md-6" style="margin-top: 17px;">
                        <div style="float:right;margin-right: -45px;">
                            {{-- @if (!session()->has('user')) --}}
                                <a class="login-btn" style="color:black ;padding: 10px;">Login</a>
                                <a class="register-btn" style="color:black ;padding: 10px;">Register</a>
                            {{-- @endif --}}
                            <a class="add-list-button add-listing-btn"
                               style="padding: 11px 20px;border-radius: 6px;">+ Place Your Ad</a>
                        {{-- </div> --}}
            </div>
                </div>   
                </div>
            </div>
        </div>
      
     
     
   
</header>
