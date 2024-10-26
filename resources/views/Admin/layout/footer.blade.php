<!-- partial:partials/_footer.html -->
<footer class="footer" style="border:0px solid red;    margin-top: 24px;">
    <div class="container mb-30">
        <div class="col-lg-12 col-md-12 col-12 m-10" style="border:0px solid red;">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <h3>
                        Find amazing deals on the go.<br/>
                        <div style="color:#0000FF;"><b>Download the app now!</b></div>
                    </h3>
                </div>
                <div class="col-lg-2 col-md-6 col-6" style="padding-left: 54px;">
                    <img src="{{ asset('images/iphone.png')}}" alt=" " height="80px" width="140px">
                </div>
                <div class="col-lg-2 col-md-6 col-6" style="padding-left: 26px;">
                    <img src="{{ asset('images/google-play-store.png')}}" alt=" " height="45px">
                </div>
                <div class="col-lg-2 col-md-6 col-6" style="padding-left: 44px;">
                    <img src="{{ asset('images/apple-store.png')}}" alt=" " height="45px">
                </div>
                <div class="col-lg-2 col-md-6 col-6" style="padding-left: 62px;">
                    <img src="{{ asset('images/huawei-app-gallery.svg')}}" alt=" " height="45px">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top aos" style="border:0px solid red;">
        <div class="container" style="border:0px solid red;margin-top:-25px;">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="footer-widget footer-menu">
                    <!-- <div class="footer-bottom-logo">
                        <a href="{{ env('BASE_URL') }}" class="menu-logo">
                        <img src="assets/img/logo/Influencers Pro-01-01.png" class="img-fluid" alt="Logo">
                        </a>
                        </div> -->
                        <h2 class="footer-title">Pages</h2>
                        <ul>
                            <li>
                                <a href="{{env('BASE_URL') . 'about-us?country=' . request()->country . '&city=' . request()->city }}" class="changeColor"> <i class="fas fa-angle-right me-1"></i>About Us</a>
                            </li>
                        
                            <li><a href="{{ env('BASE_URL') }}/contact-us"><i class="fas fa-angle-right me-1"></i>Contact
                                    Us</a></li>
                        
                        <!-- <li><a href="{{ env('BASE_URL') }}subscriptions"><i class="fas fa-angle-right me-1"></i>Subscription</a>
                            </li> -->
                            <li><a href="{{ env('BASE_URL') }}/termcondition"
                                {{-- data-bs-toggle="modal" data-bs-target="#termsModal" --}}
                                ><i
                                       class="fas fa-angle-right me-1"></i>Terms & Conditions</a>
                           </li>
                           <li><a href="{{ env('BASE_URL') }}/privacy-policy"
                                {{-- data-bs-toggle="modal" data-bs-target="#privacyModal" --}}
                                ><i
                                       class="fas fa-angle-right me-1"></i>Privacy Policy</a>
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
                            <li><a href="#" class="icon" target="_blank">
                              
                                <img src="{{ asset('images/socialicon/insta.png')}}" alt="" width="30" height="30"></a></li>
                            <li><a href="#" class="icon" target="_blank">
                                
                                <img src="{{ asset('images/socialicon/twitter.png')}}" alt="" width="30"
                                height="30"></a></li>
                            <li><a href="#" class="icon" target="_blank"><img src="{{ asset('images/socialicon/fb.png')}}" alt="" width="30" height="30"></a></li>
                            {{-- <li><a href="#" class="icon" target="_blank"><img
                                        src="{{ asset('assets/img/social-icon/youtube.png') }}" alt="youtube"
                                        width="30"
                                        height="30"></a></li> --}}
                        </ul>
                    </div>
                </div>
            <!-- <div class="col-xl-3 col-md-6">
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Our Location</h2>
                        <iframe width="250"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30767360.116125572!2d60.93867314919207!3d19.721934610035287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2s!4v1685620432319!5m2!1sen!2s"
                                 style="filter: invert(90%) grayscale(1);border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <br>
                        <span>We accepted : </span>
                        <img src="{{ asset('assets/img/card.png') }}" alt="cards" width="200" height="55">
                        <div class="social-icon d-flex"> -->
                <!-- <span>Follow us on :</span>
                <ul>
                <li><a href="#" class="icon" target="_blank"><i class="fab fa-facebook-f"></i> </a></li>
                <li><a href="#" class="icon" target="_blank"><i class="fab fa-instagram"></i> </a></li>
                <li><a href="#" class="icon" target="_blank"><i class="fab fa-twitter"></i> </a></li>
                </ul> -->
                <!-- </div>
            </div>
        </div> -->
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
                                <img src="{{asset('images/businesshub.png')}}" title="businesshub" alt="businesshub "
                             width="185 "/>
                            </a>
                        </div>
                        <div class="copyright-text bilal-footer">
                            <p style="color:#00498e;text-align:center;">© BusinessHub.com 2024, All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 right-text">
                        <!-- <ul class="nav footer-bottom-nav">
                        <li><a href="#">Chat</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Reviews</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of use</a></li>
                        </ul> -->
                    <!-- <div class="footer-bottom-logo">
                            <a href="{{ env('BASE_URL') }}" class="menu-logo">
                                <img src="{{ asset('assets/img/logo/Influencers Pro-01-01.png') }}" class="img-fluid"
                                     alt="Logo">
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>

</footer>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<!-- partial -->
