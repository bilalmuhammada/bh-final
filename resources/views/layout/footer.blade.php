
@php
    $countries = \App\Helpers\RecordHelper::getCountries();
@endphp

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
    animation: shake 1.5s linear infinite;
   }

   @keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
    100% { transform: translateX(0); }
  }
</style>
<footer>
{{--<div class="marquee" style="background-color: #0000FF;color: white;padding-top: 10px;margin-bottom: 10px;height: 25px;">
        <marquee behavior="" direction=""><h5><b><i><span>BusinessHub</span> </i> </b></h5></marquee>
    </div>--}}
    <div class="container mb-30" style="margin-top:15px;">
        <div class="col-lg-12 col-md-12 col-12 m-10">
            <div class="row" style="margin-right: -8.9rem;">
                <div class="col-lg-4 col-md-6 col-12">
                    <h6>
                        Find amazing Businesses on the go.<br/>
                        <div style="color:#0000FF;margin-top: 6px;"><b>Download our App Now!</b></div>
                    </h6>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <img src="{{ asset('images/iphone.png')}}" alt=" " height="80px" width="140px">
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <img src="{{ asset('images/google-play-store.png')}}" alt=" " height="45px">
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <img src="{{ asset('images/apple-store.png')}}" alt=" " height="45px">
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <img src="{{ asset('images/huawei-app-gallery.svg')}}" alt=" " height="45px">
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="col-lg-12 col-md-12 col-12 m-10">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-12 ">
                    <h5 style="font-size:15px;font-weight: bold;">Company</h5>
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
                {{-- <div class="col-lg-4 col-md-12 col-12 desktop-view" style="border:0px solid red;"> --}}
                {{-- <h2 style="text-align:center;">Countries</h2>
                    <div class="row" style="margin-top:-10px;">
                    <div class="col-lg-6 col-md-6 col-12" style="border:0px solid red;">
                    <ul style="width:100%;text-align:justify;margin-left:50px;">
                        @foreach($countries->take(10) as $country)
                            <li>
                                <a href="{{ env('BASE_URL') . 'home?country=' . $country->id }}">{{ $country->nice_name }}</a>
                            </li>
                        @endforeach

                    </ul>
                    </div>  --}}
                    {{-- <div class="col-lg-6 col-md-6 col-12" style="border:0px solid red;">
                    <!-- <h2>{{ $countries->firstWhere('id', request()->country ?? 99)->nice_name }}</h2> -->
                    <ul style="width:100%;text-align:justify;margin-left:50px;">
                        @foreach($countries->skip(10)->take(12) as $country)
                            <li class="mx-auto">
                                <a href="{{ env('BASE_URL') . 'home?country=' . $country->id }}">{{ $country->nice_name }}</a>
                            </li>
                        @endforeach

                    </ul>
                    </div>  --}}
                    {{-- </div>
                   
                </div> --}}
                {{-- <div class="col-lg-2 col-md-6 col-12 mobile-view">
                    <h2>Countries</h2>
                    <ul>
                        @foreach($countries->take(8) as $country)
                            <li>
                                <a href="{{ env('BASE_URL') . 'home?country=' . $country->id }}">{{ $country->nice_name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div> --}}
                {{-- <div class="col-lg-2 col-md-6 col-12 mobile-view">
                    <!-- <h2>Countries</h2> -->
                    
                    <ul>
                        @foreach($countries->skip(8)->take(9) as $country)

                            <li>
                                <a href="{{ env('BASE_URL') . 'home?country=' . $country->id }}">{{ $country->nice_name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div> --}}
                <div class="col-lg-3 col-md-8 col-12 desktop-view">
                    <h5 style="text-align:center;border:0px solid red;font-size:15px; font-weight: bold;">Socials</h5>
                    <ul style="text-align:center;border:0px solid red;">
                        <li style="margin-bottom: 5px;">
                            <a href="# " target="_blank ">
                                <img src="{{ asset('images/socialicon/insta.png')}}" class="shaking" alt="" width="25" height="25">
                            </a>
                        </li>
                        <li style="margin-bottom: 5px;">
                            <a href="# " target="_blank ">
                                <img src="{{ asset('images/socialicon/twitter.png')}}"  class="shaking" alt="" width="25"
                                     height="25">
                            </a>
                        </li>
                        
                        <li style="margin-bottom: 5px;">
                            <a href="# " target="_blank ">
                                <img src="{{ asset('images/socialicon/fb.png')}}" class="shaking" alt="" width="25" height="25">
                            </a>
                        </li>
                        {{-- <li style="margin-bottom:5px;">
                            <a href="# " target="_blank ">
                                <img src="{{ asset('images/socialicon/youtube.png')}}" alt="" width="30" height="30">
                            </a>
                        </li> --}}
                    </ul>
                </div>
                <div class="col-lg-3 col-md-8 col-12 mobile-view">
                    <h5 style="font-size:15px;">Socials</h5>
                    <ul>
                        <li>
                            <a href="# " target="_blank ">
                                <img src="{{ asset('images/facebook-svgrepo-com.svg')}}" alt="" width="25" height="25">
                            </a>
                        </li>
                        <li>
                            <a href="# " target="_blank ">
                                <img src="{{ asset('images/twitter-color-svgrepo-com.svg')}}" alt="" width="25"
                                     height="25">
                            </a>
                        </li>
                        <a href="# " target="_blank ">
                            <img src="{{ asset('images/instagram-1-svgrepo-com.svg')}}" alt="" width="25" height="25">
                        </a>
                       
                    </ul>
                </div>
               
            </div>
        </div>
    </div>
   
    <!-- footer copyright area start -->
    <div class="container" style="margin-top: 2rem;">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                <div class="logo text-center">
                    <a href="{{env('BASE_URL')}}">
                        <img src="{{asset('images/businesshub.png')}}" title="businesshub" alt="businesshub "
                             width="150 "/>
                    </a>
                </div>
            </div>
        </div>
        <!-- footer copyright area start -->
        <div class="row copyright ">
            <div class="col-lg-12 ">
                <p style="color:#00498e;text-align:center;font-size:12px; margin-top: -10px;">© BusinessHub.com 2024, All Rights Reserved.</p>
            </div>
        </div>
        <!-- footer copyright area finish -->
    </div>
    <!-- footer copyright area finish -->
    </div>
</footer>
