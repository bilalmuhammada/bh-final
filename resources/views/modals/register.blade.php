<!-- Register Modal -->


<style>
    .select2-container--default .select2-selection--single .select2-selection__rendered{
        text-align: left !important;
        /* margin-left: -29px !important; */
    }
    .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        /* .select2-container--default .select2-selection--single .select2-selection__rendered{
            color: blue !important;
        } */
         input::placeholder{
            color: black;
         }
        #select2-country-container, #select2-cities-container{
            color: #fff !important;
            margin-left: -30px !important;
        }
</style>
<div class="modal" id="registerModal" style="border:0px solid red;margin-top:-60px;">
    <div class="modal-dialog" style="border:0px solid red; width:500px;">
        <div class="modal-content" style="background-color: rgba(33, 34, 35, .90) !important;border-radius:10px;">
        
            <!-- Modal body -->
            <div class="modal-body">
                <div class="ragisterarea">
                <a class="close close-signup-btn">&times;</a>
                    <!-- register form title start -->
                    <div class="sigh-in">
                        <h3 style="font-weight: bold;line-height: 20px;color: #A17A4E;text-align:center;"
                            class="register-heading">
                            Register
                        </h3>
                        <!-- <h1><span>Sign In</span> <span>Post your ad</span></h1> -->
                    </div>
                    <!-- register form title finish -->
                    <form class="register-form" style="width:100%;margin-left: -4px;" autocomplete="off">
                        <div class="row">
                            <div class="col">
                                <div class="alert-div" style="display: none">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <div class="alert-text"></div>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row justify-content-md-center">
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="first_name" id="first_name"
                                               class="form-control login-user"
                                               placeholder="First Name" aria-label="First Name"
                                               aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="last_name" id="last_name"
                                               class="form-control login-user"
                                               placeholder="Last Name" aria-label="Last Name"
                                               aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="phone" id="phone" class="form-control login-user"
                                               placeholder="Mobile" aria-label="Mobile" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="email" class="form-control login-user email"
                                               placeholder="Email" aria-label="Email" aria-describedby="basic-addon1"
                                               onfocus="this.value=''">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="phone" id="phone" class="form-control login-user"
                                               placeholder="Gender" aria-label="Mobile" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="email" class="form-control login-user email"
                                               placeholder="Date of Birth" aria-label="Email" aria-describedby="basic-addon1"
                                               onfocus="this.value=''">
                                    </div>
                                </div>
                                
                               

                                @php
                                $countries = \App\Helpers\RecordHelper::getCountries();
                                $cities = \App\Helpers\RecordHelper::getCities(request()->country);
                            @endphp

                                <div class="col-md-6">
                                    <div class="input-group mb-3" style="  border-radius: 5px;  padding: 5px 20px;
                                    border: 1px solid #A17A4E">
                                        <select name="country" id="country"
                                                    class="form-control country_dropdown login-user"
                                                    style="width:100%;color:#fff !important;">
                                                @if ($cities->count() < 1)
                                                    <option value="" selected>Country</option>
                                                @endif
                                                @foreach($countries as $country)
                                               
                                                    <option
                                                        {{ $country->id == request()->country ? 'selected' : '' }} data1-flag-url1="{{ $country->image_url }}"
                                                        value="{{ $country->id }}"
                                                        style="font-size:8px !important;"> {{ $country->nice_name }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="input-group mb-3" style="   border-radius: 5px;   padding: 5px 20px;
                                    border: 1px solid #A17A4E">
                                        <select name="cities" id="cities"
                                        class="form-control country_dropdown login-user"
                                        style="width:100%;color:#fff !important;">
                                    @if ($cities->count() < 1)
                                        <option value="" selected>City</option>
                                    @endif
                                    @foreach($cities as $city)
                                        <option
                                            {{ $city->id == request()->city ? 'selected' : '' }} data-flag-url="{{ $city->image_url }}"
                                            value="{{ $city->id }}"
                                            style="font-size:8px !important;"> {{ $city->name }}</option>
                                    @endforeach
                                </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="password" name="password" id="password" class="form-control login-user"
                                               placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                        <div class="input-group-append">
                                            <span class="toggle-password" onclick="togglePassword()" style="cursor: pointer;">👁️</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="password_confirmation" id="password_confirmation"
                                               class="form-control login-user"
                                               placeholder="Confirm Password" aria-label="Cpassword"
                                               aria-describedby="basic-addon1">
                                               <div class="input-group-append">
                                                <span class="toggle-password" onclick="togglePassword()" style="cursor: pointer;">👁️</span>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- </div> -->

                        <!-- clicking start -->
                        <p class="by" >
                            By registering, I agree to the BusinessHub
                            <a href="{{ env('BASE_URL').'terms-of-use'}}" style="color:#0070cc;">Terms & Condition</a>
                            and
                            <a href="{{ env('BASE_URL').'privacy-policy'}}" id="myModal" style="color:#0070cc;">Privacy
                                Policy</a>.
                        </p>
                        <!-- clicking finish -->
                        <!-- Enter Captcha start -->
                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                        <!-- Enter Captcha finish -->
                        <!-- Register button start -->
                        <div class="register-button-area"
                             style="border:0px solid red;text-align:center;margin-top: -15px;margin-bottom: 26px;">
                            <a class="btn register-button" style="color: #FFFF;margin-top: 13px;">Register </a>
                        </div>
                        <div class="Forgot" style="font-size: 12px;text-align: left; margin-top: 12px;">
                            <a href="{{ env('BASE_URL') . 'forgot-password'}}" class="show-forgot-btn"  style="margin-left: 13px;color:#0070cc;" > Forgot Password? </a>
                           <span style="float: right;margin-right: 13px;">New to BusinessHub?  <a href="{{ env('BASE_URL') . 'forgot-password'}}" class="show-forgot-btn" style="color:#0070cc;" >&nbsp; Click Here </a></span>
                               
                           </div>
                        <!-- Register button finish -->
                        <div style="text-align:center;">
                            {{--  <button type="button" class="btn btn-danger" data-dismiss="modal">
                                  Close
                              </button> --}}
                        </div>
                    </form>
                </div>
            </div>
            <!-- Modal footer -->
        </div>
    </div>
</div>

<script>
    function togglePassword() {

        const passwordField = document.getElementById("password");
        
        const icon = document.querySelector(".toggle-password");
       
        if (passwordField.type === "password") {
            passwordField.type = "text";
            icon.textContent = "🙈"; // Change the icon
        } else {
            passwordField.type = "password";
            icon.textContent = "👁️"; // Change the icon back
        }
    }
</script>
<!-- Register Modal -->
