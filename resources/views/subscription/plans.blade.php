@extends('layout.master')
<style>
    .package-card {
      border: 1px solid #b9b9b9;
      /* box-shadow: 0px 0px 2px 0px #888; */
      padding: 20px;
      margin-bottom: 15px;
      border-radius: 5px;
    }
    .form-group {
    margin-bottom: 1.5rem !important;
}
    .premium {
      border-color: gold;
    }
    .featured {
      border-color: dodgerblue;
    }
    .order-summary {
      border: 1px solid #b9b9b9;
      /* box-shadow: 0px 0px 2px 0px #888; */
      padding: 25px;
      border-radius: 5px;
    }
    .form-check-input {
      width: 20px;
      height: 25px;
      background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent background */
    }
    .form-check-input:checked {
      background-color: rgba(0, 123, 255, 0.7); /* Semi-transparent background when checked */
    }
    .badge-featured {
      position: absolute;
      top: 20px;
      left: -10px;
      background-color: dodgerblue;
      color: white;
      padding: 10px;
      font-size: 14px;
      font-weight: bold;
      border-radius: 0 5px 5px 0;
    }
        #checkout-live-button:hover {
        background-color: #ff6666; /* Lighter red on hover */
        transform: scale(1.05); /* Slightly larger */
    }
    .form-group {
      display: flex;
      align-items: center;
    }
    #discountCode {
        height: 37px;

      width: calc(100% - 80px); /* Adjust width according to button size */
      margin-right: 10px; /* Space between input and button */
    }
    .apply-btn {
      height: 37px;
      margin-bottom: 0;
    }
    .form-control1{
        display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 12px;
    font-weight: 400;
    line-height: 1.5;
    color: #252525;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    #discountCode::placeholder {
  color: #c0bcbc; /* Change this to the desired color */
  /* font-style: italic; Optional: Add any additional styling */
  opacity: 1; /* Ensure full opacity if needed */
  font-size: 14px; /* Optional: Change the font size */
  /* font-weight: bold; Optional: Change the font weight */
  /* text-transform: uppercase; Optional: Transform text to uppercase */
}
.bold-hr {
      border: none; /* Remove default border */
      height: 1px; /* Set the desired thickness */
      background-color: #b9b9b9; /* Set the desired color */
    }

.section-package{
    margin-left: 43px;
    max-width: 27pc;
}

.apply-btn
{
background-color: #c4bfbf7d;color: white;
border: 1px solid transparent;
padding: 0.375rem 0.75rem; border-radius: 0.25rem;}


  </style>
@section('content')

    <section style="padding-bottom:40px;">
      <div class="logo" style="text-align:center;margin-top: 18px;">
        <img src="{{asset('images/businesshub-slogan.png')}}" alt="" width="250px" alt="logo">
        </div>
        <div class="container mt-3">
          <form action="/session" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type='hidden' name="total" value="5">
            <div class="row" style="margin-left: 8rem !important">
              <div class="col-md-6 package-card" style="max-width: 38pc !important">
                <h5 class="text-center"> <b>Select a package that works for you</b></h5>
                {{-- <div class=""> --}}
                  <hr class="bold-hr">
                  <div class="package-card section-package" style="background-color: #e7f5fb">
                  <h6 class="text-center font-weight-bolder" style="margin-top: 12px;">You're posting in a paid only category</h6>
                  <p class="text-center text-muted" style="font-size: 12px;">This will help you get quality buyers for a small fee</p>
                </div>
                <div class="form-group package-card section-package">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="package" id="standard" value="standard" checked>
                    <span style="margin-left: 13px;font-weight: 900">Standard</span><br>
                    <label class="form-check-label" for="standard" style="margin-left: 13px">
                        Ad will be live for 30 days and refresh 1 time <span style=" font-weight: 900;
                        color: red;
                        margin-left: 1pc;"> $ 2</span>
                      </label>
                    </div>
                  </div>
               
                  <div class="package-card  section-package">
                    <div style=" display: inline-flex
                  
                  "><h5>Featured Ad</h5>  <span class="badge badge-primary" style="margin-left: 13.66rem; padding: 5px;    margin-bottom: 14px;">Featured</span></div>
                    
                    <p  style="font-size: 13px;">Featured Ads will appear above  Standard Ads</p>
                    <div class="form-group package-card ">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="feature" id="feature3" value="3days" style="margin-left: -30px;margin-top: -6px;">
                        <label class="form-check-label font-weight-bolder" for="feature3" >
                          Feature your Ad for 5 days   <span style="margin-left:102px;font-weight: bolder">$ 2</span>
                        </label>
                      
                      </div>
                    </div>
                    <div class="form-group package-card ">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="feature" id="feature3" value="3days" style="margin-left: -30px;margin-top: -6px;">
                          <label class="form-check-label font-weight-bolder" for="feature3" >
                            Feature your Ad for 10 days    <span style="margin-left:102px;font-weight: bolder">$ 2</span>
                          </label>
                        
                        </div>
                      </div>
                      <div class="form-group package-card">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="feature" id="feature3" value="3days" style="margin-left: -30px;margin-top: -6px;">
                          <label class="form-check-label font-weight-bolder" for="feature3" >
                            Feature your Ad for 20 days    <span style="margin-left: 96px;font-weight: bolder">$ 2</span>
                          </label>
                        
                        </div>
                      </div>
                      <div class="form-group package-card">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="feature" id="feature3" value="3days" style="margin-left: -30px;margin-top: -6px;">
                          <label class="form-check-label font-weight-bolder" for="feature3" >
                            Feature your Ad for 30 days    <span style="margin-left: 96px;font-weight: bolder">$ 2</span>
                          </label>
                        
                        </div>
                      </div>
                
                    
                  </div>

      <div style="display: grid">
                <span class="text-center font-weight-bolder">Prices are exclusive of VAT</span>
                 <span class="text-center text-muted " style="margin-top: 8px;font-size: 13px;">Ads Price has been automatically selected <br>based on the posts applied on previous listings generally</span>
        </div>

                {{-- </div> --}}
              </div>
              <div class="col-md-5" style="margin-left:40px">
              
                <div class="order-summary">
                    <h5 class="text-center" style="margin-bottom: -6px;"><b>Order Summary</b></h5>
                    <hr class="bold-hr">
                  <p>Standard Ad  <span style="font-weight: 900;
                    margin-left: 15rem;">$ 2</span></p>
                  <p>Featured Ad for 7 days  <span style="font-weight: 900;
                    margin-left: 10.4rem;">$ 2</span></p>
                  <div class="form-group">
                    <input type="text" class="form-control1 text-muted" placeholder="Referral Code" id="discountCode">
                    <button class="btn1 apply-btn" >Apply</button>
                  </div>
                  <hr>
                  <p>Subtotal: <span style="margin-left: 17rem;font-weight: 900">$ 2</span> </p>
                  <p>VAT 5%: <span style="margin-left: 17.2rem;font-weight: 900"> $ 2</span></p>
                  <hr>
                  <p>Total: <span style="margin-left: 18.7rem;font-weight: 900"> $ 2</span> </p>
                  
                  <input type='hidden' name="productname" value="Bussiness For Sale">
                  <button type="submit"  class="btn  btn-block "  id="checkout-live-button" style="margin-left: 7.4rem;width: 9pc; background-color: #ff3131;color: white;"><b>Pay $ 2.00</b></button>
               
                  {{-- <a href=""> --}}
                      {{-- <button class="btn bt-plan" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> SELECT PLAN</button>
                         
              </a> --}}
               
                </div>
              </div>
            </div>
          </form>
          </div>
       
    </section>

    
@endsection


