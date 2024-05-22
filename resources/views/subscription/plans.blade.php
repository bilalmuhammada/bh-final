@extends('layout.master')
<style>
    .package-card {
      border: 1px solid #ddd;
      box-shadow: 0px 0px 4px 0px #888;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
    }
    .premium {
      border-color: gold;
    }
    .featured {
      border-color: dodgerblue;
    }
    .order-summary {
      border: 1px solid #ddd;
      box-shadow: 0px 0px 4px 0px #888;
      padding: 20px;
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
  color: #ddd; /* Change this to the desired color */
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
    margin-left: 27px;
    max-width: 27pc;
}
  </style>
@section('content')

    <section style="padding-bottom:40px;">
        <div class="container mt-5">
            <div class="row" style="margin-left: 12pc !important">
              <div class="col-md-6 package-card" style="max-width: 38pc !important">
                <h4 class="text-center">Select a package that works for you</h4>
                {{-- <div class=""> --}}
                    <hr class="bold-hr">
                    <div class="package-card section-package" style="background-color: #c4bfbf33">
                  <h5 class="text-center font-weight-bolder">You're posting in a paid only category</h5>
                  <p class="text-center text-muted">This will help you get quality buyers for a small fee</p>
                </div>
                <div class="form-group package-card section-package">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="package" id="standard" value="standard" checked>
                      <span style="margin-left: 13px;font-weight: 900">Standard</span><br>
                      <label class="form-check-label" for="standard" style="margin-left: 13px">
                        Ad will be live for 30 days <span style=" font-weight: 900;
                        color: red;
                        margin-left: 8pc;"> AED 179</span>
                      </label>
                    </div>
                  </div>
               
                  <div class="package-card  section-package">
                    <div style=" display: inline-flex
                  
                  "><h5>Featured Ad</h5>  <span class="badge badge-primary" style="margin-left: 13pc;    margin-bottom: 10px;">Featured</span></div>
                    
                    <p class="text-muted">Featured ads appear above the standard ads</p>
                    <div class="form-group package-card ">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="feature" id="feature3" value="3days" style="margin-left: -24px;margin-top: -6px;">
                        <label class="form-check-label font-weight-bolder" for="feature3" >
                          Feature your ad for 3 days   <span style="margin-left:54px;font-weight: bolder">+AED 179</span>
                        </label>
                      
                      </div>
                    </div>
                    <div class="form-group package-card ">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="feature" id="feature3" value="3days" style="margin-left: -24px;margin-top: -6px;">
                          <label class="form-check-label font-weight-bolder" for="feature3" >
                            Feature your ad for 7 days    <span style="margin-left: 52px;font-weight: bolder">+AED 264</span>
                          </label>
                        
                        </div>
                      </div>
                      <div class="form-group package-card">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="feature" id="feature3" value="3days" style="margin-left: -24px;margin-top: -6px;">
                          <label class="form-check-label font-weight-bolder" for="feature3" >
                            Feature your ad for 15 days    <span style="margin-left: 41px;font-weight: bolder">+AED 444</span>
                          </label>
                        
                        </div>
                      </div>
                      <div class="form-group package-card">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="feature" id="feature3" value="3days" style="margin-left: -24px;margin-top: -6px;">
                          <label class="form-check-label font-weight-bolder" for="feature3" >
                            Feature your ad for 30 days    <span style="margin-left: 41px;font-weight: bolder">+AED 719</span>
                          </label>
                        
                        </div>
                      </div>
                
                    
                  </div>

      <div style="display: grid">
                <span class="text-center font-weight-bolder">Price are exclusive of VAT</span>
                 <span class="text-center text-muted " style="margin-top: 21px;">The application Products have been automatically selected <br> based on the products applied on the previous listing</span>
        </div>

                {{-- </div> --}}
              </div>
              <div class="col-md-5">
              
                <div class="order-summary">
                    <h4 class="text-center">Order Summary</h4>
                    <hr class="bold-hr">
                  <p>Basic Ad  <span style="font-weight: 700;
                    margin-left: 13pc;">AED 179</span></p>
                  <p>Premium Ad for 7 days  <span style="font-weight: 700;
                    margin-left: 108px;">AED 599</span></p>
                  <div class="form-group">
                    <input type="text" class="form-control1 text-muted" placeholder="Discount code" id="discountCode">
                    <button class="btn apply-btn" style="    background-color: #e9e9e9;color: white">Apply</button>
                  </div>
                  <hr>
                  <p>Subtotal: <span style="margin-left: 12pc;font-weight: bolder">AED 778.00</span> </p>
                  <p>VAT 5%: <span style="margin-left: 194px;font-weight: bolder"> AED 38.90</span></p>
                  <hr>
                  <p>Total: <span style="margin-left: 215px;font-weight: bolder"> AED 816.90</span> </p>
                  
                  <button class="btn btn-danger btn-block" style="margin-left: 88px;width: 11pc;">Pay AED 816.90</button>
                </div>
              </div>
            </div>
          </div>
    </section>


@endsection
