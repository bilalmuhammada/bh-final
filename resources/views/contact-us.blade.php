@extends('layout.master')

<style>
         .floating:focus {
    border: 1px solid blue !important;
}
.floating {
    border: 1px solid #997045 !important;
}
.contact-us{
    background-color:  #997045 !important;
    color: white;
}
.contact-us:hover{
    background-color:  blue !important;  
    color: white;
}

.form-control {
    font-size: 18px !important;
}
select {
    -webkit-appearance: none; /* For Chrome, Safari, Edge */
    -moz-appearance: none;    /* For Firefox */
    appearance: none;         /* Standard property */
    
    /* Optional: Remove any border and padding */
    border: none;
    background: transparent;
    padding: 10px; /* Adjust the padding as needed */
}
</style>
@section('content')


        <!-----contact form start------>
        <section>
            <div class="container">
                <div class="row justify-content-md-center mb-20px">
                    <div class="col-md-8 col-lg-8 col-xl-8 about-us-text-area" style="margin-top:54px;">
                        <div class="ragisterarea" style="margin-top:-30px;">
                            <div class="login-header text-center">
                                <a href="{{ env('BASE_URL') }}">
                                    <img src="{{asset('images/businesshub-slogan.png')}}" alt="" width="250px" alt="logo">
                                </a>
                                <h3 style="margin-top: 20px;">Contact Us</h3>
                                <p>Share your mind with us!</p>
                            </div>
                            {{-- <form>
                                <div class="row justify-content-md-center">
                                   <div class="col-md-12 col-lg-12 col-xl-12">
                                       
                                    <div class="col-md-9 col-lg-9 col-xl-9">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/name.png')}}" width="33" height="19"/></span>
                                            </div>
                                            <input type="text" class="form-control login-user" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                                        </div>
                                    </div> 
                                    <div class="col-md-9 col-lg-9 col-xl-9">
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/phone.png')}}" width="33" height="21"/></span>
                                            </div>
                                            <input type="text" class="form-control login-user" placeholder="Phone No" aria-label="phone" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="col-md-9 col-lg-9 col-xl-9">
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/envelop.png')}}" width="33" height="19"/></span>
                                            </div>
                                            <input type="text" class="form-control login-user" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-lg-9 col-xl-9">
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/city.png')}}" width="34" height="21"/></span>
                                            </div>
                                            <input type="text" class="form-control login-user" placeholder="City" aria-label="City" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="col-md-9 col-lg-9 col-xl-9">
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/massage.jpg')}}" width="33" height="21"/></span>
                                            </div>
                                            <input type="text" class="form-control login-user" placeholder="Message" aria-label="message" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                             
                                    <div class="col-md-9 col-lg-9 col-xl-9">
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/envelop.png')}}" width="33" height="21"/></span>
                                            </div>
                                            <input type="file" class="form-control login-user" placeholder="Phone No" aria-label="phone" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-lg-9 col-xl-9">
                                    <button type="submit" style="margin-top:0px;" class="btn register-button">Send Message</button>

                                    </div>
                                    </div>
                                </div>

                        </form>   --}}


                        <form action="#" id="contact-us-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating" name="first_name">
                                        <label class="focus-label">First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating" name="last_name">
                                        <label class="focus-label">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <input type="email" class="form-control floating" name="email"  placeholder="Please enter a valid Email.">
                                        <label class="focus-label">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <input type="tel" class="form-control floating" name="mobile" pattern="\+?\d*"  oninput="validateInput(this)"   placeholder="Please enter a valid Mobile."> 
                                        <label class="focus-label">Mobile</label>
                                    </div>
                                </div>
                              
                               
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        {{--    <input type="text" class="form-control floating" name="country">--}}
                                        <select name="country_id" class="form-control floating" id="country_id">
                                            <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                            @foreach(\App\Helpers\RecordHelper::getCountries() as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid Country.
                                        </div>
                                        <label class="focus-label">Country </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus label">
                                        <select name="city_id" class="form-control floating" id="brand_city_id">
                                            {{-- <option value="">Select City</option> --}}
                                            {{-- <option selected hidden disabled value="">&nbsp;&nbsp;</option> --}}

                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid City.
                                        </div>
                                        <label class="focus-label" id="citylable">City </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                      <select name="iam" id="" class="form-control floating"> 
                                                                           
                                        <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                        <option value="brands">Brand</option>
                                        <option value="influncer">Influncer</option>
                                      </select>
                                      <label class="focus-label">I'm a/an  </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <select name="reason" id="" class="form-control floating"> 
                                            {{-- <option  selected value="">Reason</option> --}}
                                            <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                              <option value="collaboration">Collaboration</option>
                                              <option value="suggestion">Suggestion</option>
                                              <option value="complain">Complain</option>
                                              <option value="reportbrand">Report a Brand</option>
                                              <option value="reportinfluncer">Report an Influncer</option>
                                            </select>
                                            <label class="focus-label">Reason </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating" name="subject">
                                        <label class="focus-label">Subject</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <input type="file" class="form-control  floating"  id="attachmentInput" name="attachments">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-focus">
                                        <textarea class="form-control floating" style="height:120px;" name="message"></textarea>
                                        <label class="focus-label">Message</label>
                                    </div>
                                </div>
                                <div class="col-md-2" style="text-align: center;
                                margin-top: 75px; margin-left: 24rem;">
                                    <button class="btn-block btn-lg t-btn contact-us" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="" style="margin-top: -30px;">
            <div class="container-fluid" style="border:0px solid red;background-image:url('images/footer.png');height:180px;width:100%;content:'';  background-repeat: repeat-x;">
                
            </div>
        </section> --}}
        <!-----contact form end------>

@endsection