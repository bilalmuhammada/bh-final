<!-- partial:partials/_footer.html -->


<style>
     .changeColor:hover{
     color: blue !important;
    }
    .m-10{
        margin: 30px 0px 0px -60px !important;
    }
    .shaking {
    display: inline-block;
    transition: transform 0.2s ease-in-out;
   }
 
   .shaking:hover {
    animation: shakeIcon 2s linear infinite;
   }

   @keyframes shakeIcon {
    0% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
    100% { transform: translateX(0); }
  }
</style>
<footer class="footer" style="margin-top: 24px;">
    <div class="container mb-30">
        <div class="col-lg-12 col-md-12 col-12 " style="margin-top: 43px; ">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <h6>
                        Find amazing Businesses on the go.<br/>
                        <div style="color:#0000FF;margin-top: 6px;"><b>Download our App Now!</b></div>
                    </h6>
                </div>
                <div class="col-lg-2 col-md-6 col-6" style="padding-left: 54px; margin-top: -33px;">
                    <img src="{{ asset('images/iphone.png')}}" alt=" " height="80px" width="120px">
                </div>
                <div class="col-lg-2 col-md-6 col-6" style="padding-left: 26px;">
                    <img src="{{ asset('images/google-play-store.png')}}" alt=" " height="45px">
                </div>
                <div class="col-lg-2 col-md-6 col-6" style="padding-left: 44px;">
                    <img src="{{ asset('images/apple-store.png')}}" alt=" " height="45px">
                </div>
                <div class="col-lg-2 col-md-6 col-6" style="padding-left: 62px;">
                    <img src="{{ asset('images/huawei-app-gallery.png')}}" alt=" " height="45px">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top aos" style="border:0px solid red;">
        <div class="container" style="border:0px solid red;margin-top:-25px;">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="footer-widget footer-menu">
                    
                        <h2 class="footer-title">Company</h2>
                        <ul>
                            <li>
                                <a href="{{env('BASE_URL') . 'about-us?country=' . request()->country . '&city=' . request()->city }}" class="changeColor">About Us</a>
                            </li>
                          
                            <li>
                                <a href="{{env('BASE_URL') . 'contact-us'}}" class="changeColor">Contact Us</a>
                            </li>
                            <li>
                                <a href="{{env('BASE_URL') . 'terms-of-use?country=' . request()->country . '&city=' . request()->city }}" class="changeColor">Terms of Use</a>
                            </li>
                            <li>
                                <a href="{{env('BASE_URL') . 'privacy-policy?country=' . request()->country . '&city=' . request()->city }}" class="changeColor">Privacy Policy</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- <div class="col-xl-2 col-md-6">
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Help & Support</h2>
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-right me-1"></i>FAQ</a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#termsModal"><i
                                        class="fas fa-angle-right me-1"></i>Terms & Conditions</a>
                            </li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal"><i
                                        class="fas fa-angle-right me-1"></i>Privacy Policy</a>
                            </li>
                            <li><a href="javascript:;"><i class="fas fa-angle-right me-1"></i>Change Location</a></li>
                        </ul>
                    </div>
                </div> -->
                <!-- <div class="col-xl-2 col-md-6">
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Other Links</h2>
                        <ul> -->
                <!-- <li><a href="#"><i class="fas fa-angle-right me-1"></i>Browse Influencers</a></li> -->
                <!-- <li><a href="#"><i class="fas fa-angle-right me-1"></i>Influencers Detail</a></li> -->
                <!-- <li><a href="#"><i class="fas fa-angle-right me-1"></i>Browse Brands</a></li> -->
                <!-- <li><a href="#"><i class="fas fa-angle-right me-1"></i>Brand Details</a></li> -->
                <!-- </ul>
            </div>
        </div> -->
                <div class="col-xl-2 col-md-6">
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Socials</h2>
                        <ul style="margin-left: 14px;">
                            <li style=" margin-bottom: 5px;" ><a href="#" class="icon" target="_blank">
                              
                                <img src="{{ asset('images/socialicon/insta.png')}}" alt="" class="shaking"width="25" height="25"></a></li>
                            <li style=" margin-bottom: 5px;"><a href="#" class="icon" target="_blank">
                                
                                <img src="{{ asset('images/socialicon/twitter.png')}}" alt="" class="shaking" width="25"
                                height="25"></a></li>
                            <li style=" margin-bottom: 5px;"><a href="#" class="icon" target="_blank"><img src="{{ asset('images/socialicon/fb.png')}}" alt="" class="shaking" width="25" height="25"></a></li>
                            {{-- <li><a href="#" class="icon" target="_blank"><img
                                        src="{{ asset('assets/img/social-icon/youtube.png') }}" alt="youtube"
                                        width="30"
                                        height="30"></a></li> --}}
                        </ul>
                    </div>
                </div>
           
            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="container">

            <div class="copyright">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 col-lg-4 text-center">
                        <div class="footer-bottom-logo">
                            <a href="{{ env('BASE_URL') }}" class="menu-logo">
                                {{-- <img src="{{asset('assets/images/logo/Influencers Pro-01-01.png')}}" alt="logo"> --}}
                                <img src="{{asset('images/businesshub.png')}}" title="businesshub"  class="shaking" alt="businesshub "
                             width="150 "/>
                            </a>
                        </div>
                        <div class="copyright-text bilal-footer" style="margin-top: -12px;">
                            <p style="color:#00498e;text-align:center;">© BusinessHub.com 2024, All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 right-text">
                       
                    </div>
                </div>
            </div>

        </div>
    </div>

</footer>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<!-- partial -->
