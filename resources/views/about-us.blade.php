@extends('layout.master')
@section('content')

     <!-- about us area start -->
     <section class="">
            <div class="container">
                <div class="row mb-20px mx-auto">
                    <!-- <div class="col-md-12 col-lg-6 col-xl-6">
                        <img
                            src="{{ asset('images/about-us.jpg')}}"
                            title="About BusinessHub Platform"
                            width="100%" height="420"
                            alt="About BusinessHub Platform"
                        >
                       <div class="experiance">
                            <div class="experiance-area">
                                <span class="title">30+</span>
                                <br>
                                <span class="small-ex">Years of market Experience</span>
                            </div>
                        </div>
                    </div> -->
                    <!-- about us text start -->
                    
                    <div class="col-md-8 col-lg-8 col-xl-8  mx-auto">
                        <div class="logo" style="text-align:center;">
                    <img src="{{asset('images/businesshub-slogan.png')}}" alt="" width="250px" alt="logo">
                    </div>
                        {{-- <h4 style="text-align:center;"> --}}
                            {{-- <b>About Platform</b> --}}
                            {{-- <Br/> --}}
                            <!-- <span>For Business Brokers and Business Deals</span> -->
                        {{-- </h4> --}}
                        <p style="text-align:justify; margin-top: 38px;">
                        BusinessHub is the number 1 worldwide only businesses focused online marketplace to Buy & Sell Businesses and Company Shares, Connect with Investors & Business Idea Owners, Discover Franchisee Opportunities & Franchise your Business Brand, Trade in Export & Import Business, Find Machinery & Supplies for your Business Growth and more…
                    </p>
                    <p style="text-align:justify;">
                    BusinessHub connects large network of Business Executives all over the World & continues to expand beyond Global Scale!
                    </p>
                </div>
                <!-- about us text finish -->
            </div>
            {{--<h4 class="terms-h text-center pb-3">MANAGED BUSINESS SOLUTIONS</h4>--}}
            {{-- <div class="row mx-auto">
                <!-- what is businesshub? area start -->
                <div class="col-sm-10 mx-auto">
                    <div class="row"  style="border:0px solid red;">
                    <div class="col-sm-3">
                    <div style="background:rgb(241, 227, 164, .7);border-radius:5px;padding:40px;">
                        <h2 class="text-center" style="color:#0000FF;font-size:60px !important;"><b><span class="countup">30</span>k</b></h2>
                        <h5 class="text-center" style="font-family:bold;">Business Posts</h5>
                    </div>
                    </div>
                        <div class="col-sm-3">
                        <div style="background:rgb(241, 227, 164, .7);border-radius:5px;padding:40px;">
                        <h2 class="text-center" style="color:#0000FF;font-size:60px !important;"><b><span class="countup">15</span>K</b></h2>
                        <h5 class="text-center" style="font-family:bold;">Business Posts</h5>
                    </div>
                    </div>
                        <div class="col-sm-3"  style="border:0px solid red;">
                        <div style="background:rgb(241, 227, 164, .7);border-radius:5px;padding:40px;">
                        <h2 class="text-center" style="color:#0000FF;font-size:60px !important;"><b><span class="countup">50</span>K</b></h2>
                        <h5 class="text-center" style="font-family:bold;">Worldwide Users</h5>
                    </div>
                    </div>
                        <div class="col-sm-3"  style="border:0px solid red;">
                        <div style="background:rgb(241, 227, 164, .7);border-radius:5px;padding:40px;">
                        <h2 class="text-center" style="color:#0000FF;font-size:60px !important;"><b><span class="countup">20</span>K</b></h2>
                        <h5 class="text-center" style="font-family:bold;">Countries </h5>
                    </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6" style="display:none;">
                    <div class="what-area">
                        <img src="images/businesshub.png" title="what is BusinessHub?" alt="what is BusinessHub?">
                    </div>
                    <div class="what-text-area">
                        BusinessHub is a virtual commercial online platform that brings Buyers, Sellers, Franchisers, Business and Commercial Property brokers together, thereby transforming and simplifying the way Businesses and Commercial Properties
                            are bought, sold and leased.
                    </div>
                </div>
                <!-- what is businesshub? area finish -->
                <!-- reach area start -->
                <div class="col-sm-6" style="display:none;">
                    <div class="what-area">
                        <img src="images/reach.png" title="Reach" alt="Reach">
                    </div>
                    <div class="what-text-area">Apart from being a worldwide online portal, we are currently focusing exclusively on emerging markets like Asia - Pacific, Middle East, ANZ Markets, Singapore.</div>
                </div>
                <!-- reach area finish -->
            </div> --}}
            <div class="row">
                <!-- reach area start -->
                <div class="col-sm-12" style="display:none;">
                    <div class="what-area">
                        <img src="images/vission.png" title="vision" alt="vision">
                    </div>
                    <div class="what-vission-area">
                        <div class="vission-area">BusinessHub’s vision is to innovate the best platform for trading businesses and commercial properties online. We are proud of our commitment to providing maximum customer satisfaction through our extensively skilled team.</div>
                    </div>
                </div>
                <!-- reach area finish -->
            </div>
        </div>
    </section>
    <!-- about us area finish -->

@endsection