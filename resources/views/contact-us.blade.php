@extends('layout.master')

<style>
         .floating:focus {
    border: 1px solid blue !important;
}
.floating {
    border: 1px solid #997045 !important;
}
select {
    word-wrap: normal;
    text-transform:initial !important;
}
.form-focus.focused .focus-label {
    top: -14px !important;
}
.form-focus .form-padding {
    padding: 21px 10px 6px !important;
}

form{
    width: auto !important;
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
    width: -webkit-fill-available !important;
    font-size: 16px !important;
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
                                        <input type="text" class="form-control form-padding floating" name="first_name">
                                        <label class="focus-label">First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control form-padding floating" name="last_name">
                                        <label class="focus-label">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <input type="email" class="form-control form-padding floating" name="email"  placeholder="Please enter a valid Email.">
                                        <label class="focus-label">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <input type="tel" class="form-control form-padding floating" name="mobile" pattern="\+?\d*"  oninput="validatePhoneNumber(this)"   placeholder="Please enter a valid Mobile."> 
                                        <label class="focus-label">Mobile</label>
                                    </div>
                                </div>
                              
                               
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        {{--    <input type="text" class="form-control floating" name="country">--}}
                                        <select name="country_id" class="form-control form-padding floating" id="country_id">
                                            <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                            @foreach(\App\Helpers\RecordHelper::getCountriesRegistration() as $country)
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
                                        <select name="city_id" class="form-control form-padding floating" id="brand_city_id">
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
                                      <select name="iam" id="" class="form-control form-padding floating"> 
                                        <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                        @foreach(\App\Helpers\RecordHelper::getCategories() as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                      </select>
                                      <label class="focus-label">Category  </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <select name="reason" id="" class="form-control form-padding floating"> 
                                            {{-- <option  selected value="">Reason</option> --}}
                                            <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                              <option value="1">Advertising</option>
                                              <option value="2">Account Related</option>
                                              <option value="3">Ad Related</option>
                                              <option value="4">Payment Related</option>
                                              <option value="5">Collaboration</option>

                                              <option value="6">Complain</option>
                                              <option value="7">Suggestion</option>
                                              <option value="9">Report User</option>
                                              <option value="0">Other</option>
                                            </select>
                                            <label class="focus-label">Reason </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control form-padding floating" name="subject">
                                        <label class="focus-label">Subject</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <input type="file" class=" form-control floating" multiple  id="attachmentInput" name="attachments[]">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-focus">
                                        <textarea class="form-control  form-padding floating" style="height:180px;" name="message"></textarea>
                                        <label class="focus-label">Message</label>
                                    </div>
                                </div>
                                <div class="col-md-2" style="text-align: center;
                                margin-top: 8rem; margin-left: 22rem;">
                                    <button class="btn-block btn-lg t-btn contact-us" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
    <script>
        function validatePhoneNumber(input) {
    // Remove any non-digit characters
    input.value = input.value.replace(/\D/g, '');
    
    // Check if the input length is exactly 10 digits
    if (input.value.length !== 10) {
        input.setCustomValidity('Please enter a valid 10-digit number');
    } else {
        input.setCustomValidity('');
    }

}
        </script>   
@endsection

