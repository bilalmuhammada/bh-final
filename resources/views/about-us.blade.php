@extends('layout.master')
@section('content')
<style>
    .joinnow{
        color: blue;


    }
    .joinnow:hover{
        color: #F5BD02;
        cursor: pointer;
        

    }
</style>

     <!-- about us area start -->
     <section class="">
            <div class="container">
                <div class="row ">
                   
                    
                    <div class="col-md-8 col-lg-8 col-xl-8" style="margin-bottom: 1rem;margin-left: 11rem;margin-top: 2rem;">
                        <div class="logo" style="text-align:center;">
                            <a class="" href="{{env('BASE_URL') . 'home'}}" style="margin-left: -4px;">
                               
                         
                    <img src="{{asset('images/businesshub-slogan.png')}}" alt="" width="250px" class="shaking" alt="logo">
                </a>
                </div>
                      
                        <p style="text-align:justify; margin-top: 38px;">
                            BusinessHub is the world’s first & premier marketplace exclusively focused on Businesses-Only! 
Either, you are looking to Buy, Sell or Rent Businesses, Company Shares, Innovative Business Ideas, Franchise Opportunities, Machinery or Supplies, BusinessHub is your best go-to platform.
</p>


                       
                   
                        <ul style="text-align:justify; list-style-type: disc; padding-left: 15px; margin-top: 20px;">
                            <li style=""><strong>Buy & Sell Businesses:</strong> Access a wide range of listings, from startups to established companies looking for a new owner in various business industries.</li>
                            <li style=""><strong>Rent Businesses:</strong> Discover potential rental opportunities that allow you to manage a business without full ownership commitments, to avoid country legality time-consuming process.</li>
                            <li style=""><strong>Company Shares:</strong> Invest in or Sell Company Shares to expand your Business Portfolio or Generate additional capital worldwide.</li>
                            <li style=""><strong>Business Ideas:</strong> Explore innovative business ideas to Invest or find a Potential Investor that align with your passion and expertise.</li>
                            <li style=""><strong>Investor Connections:</strong> We bridge the gap between Business Idea Owners and Investors, facilitating partnerships that drive growth and maximize high ROIs.</li>
                            <li style=""><strong>Franchise Opportunities:</strong> Discover franchising as a viable option to expand your Business or invest in an Established Brand with a Proven Track Record.</li>
                            <li style=""><strong>Machinery & Supplies:</strong> Find the necessary equipment and supplies to start or grow your business efficiently.</li>
                        </ul>
                    <b class="joinnow">  <a class="register-btn" style="margin-left: 9px;">Join BusinessHub Now! </a></b>
                </div>
                <!-- about us text finish -->
            </div>
            
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