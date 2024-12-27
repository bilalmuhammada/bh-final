<!-- Register Modal -->


<style>
    .select2-container--default .select2-selection--single .select2-selection__rendered{
        text-align: left !important;
        
        background-color: transparent !important;
        /* margin-left: -29px !important; */
    }
    .select2-container--default .select2-selection--single{
        background-color: transparent !important;  
    }
    
    #select2-register_cities-container{
color: #ffffff !important;
    }
    #select2-register_country-container{
color: #ffffff !important;
    }

    #select2-registercities-container
    {
color: #000000 !important;
padding-left: 31px;
    }
    select {
    -webkit-appearance: none; /* Safari and Chrome */
    -moz-appearance: none;    /* Firefox */
    appearance: none;         /* Standard */
    background: none;         /* Remove background */
    background-color: #fff;   /* Optional: set your desired background color */
    padding-right: 10px;      /* Optional: adjust padding */
    border: 1px solid #ccc;   /* Optional: adjust border style */
}
    /* .position-850{
        left: 850px !important;

    } */
    .form-focus .focus-label{
        top: -10px;
        color: white;
    }
    .form-group {
        margin-bottom: 0px;
    }
    .login-user{
        width: 100% !important;
        
    }
    .drppading{
        padding-left:6px !important;
    }
    #register-form .toggle-password {
            position: absolute;
            right: 16px;
            top: 36% !important;
            transform: translateY(-50%);
            cursor: pointer;
        }
      
        select{
            text-transform:none
        }
        #first_name,#last_name, #phone,#Email,#password_confirmation,#password_main{
            padding: 12px 20px 12px 10px;
        }
/*         
        #register-form .select2-container--open{
            left: -22px !important;
        } */

         input::placeholder{
            color: black;
         }
         #colorTowhite:hover{
            color: white !important;
         }
         .form-control:focus{
            border-color: blue !important;
         }
         #form-border:hover{
            border:1px solid blue !important;
         }
         
         
         #register-form #select2-country-container,#register-form #select2-cities-container{
            color: #fff !important;
            /* margin-left: -30px !important; */
        }
</style>


<div class="modal" id="registerModal" style="border:0px solid red;margin-top:-60px;">
    <div class="modal-dialog" style="border:0px solid red; width:500px;">
        <div class="modal-content" style="background-color: rgba(33, 34, 35, .90) !important;border-radius:10px;">
        

            <!-- Modal body -->
            <div class="modal-body">
                <div class="ragisterarea">
                <a class="close close-signup-btn" style="color: white;">&times;</a>
                    <!-- register form title start -->
                    <div class="sigh-in">
                        <h3 style="font-weight: bold;line-height: 20px;color: #A17A4E;text-align:center;"
                            class="register-heading">
                            Register
                        </h3>
                        <!-- <h1><span>Sign In</span> <span>Post your ad</span></h1> -->
                    </div>
                    <!-- register form title finish -->
                    <form class="register-form" id="register-form" style="width:100%;margin-left: -4px;" autocomplete="off">
                        <div class="alert-div" style="display: none;margin-left: 17px; width: 93%;">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <div class="alert-text-register" style="font-size: 14px;"></div>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row justify-content-md-center">
                                <div class="col-md-6">
                                    <div class="form-group form-focus">

                                        <input type="text" name="first_name" id="first_name"
                                               class="form-control floating login-user"
                                               placeholder="First Name" aria-label="First Name"
                                               aria-describedby="basic-addon1">
                                               {{-- <label class="focus-label">First Name</label> --}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <input type="text" name="last_name" id="last_name"
                                               class="form-control floating login-user"
                                               placeholder="Last Name" aria-label=""
                                               aria-describedby="basic-addon1">
                                               {{-- <label class="focus-label">Last Name</label> --}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <input type="text" name="phone" id="phone" class="form-control floating login-user"
                                               placeholder="Mobile" aria-label="Mobile" aria-describedby="basic-addon1" oninput="validateInput(this)"  >
                                               {{-- <label class="focus-label">Mobile</label> --}}
                                            </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <input type="text" name="email" id="Email" class="form-control floating login-user email"
                                               placeholder="Email" aria-label="Email" aria-describedby="basic-addon1"
                                               onfocus="this.value=''">
                                               {{-- <label class="focus-label"></label> --}}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    {{-- <div class="form-group form-focus"> --}}
                                        <select type="text" name="gender" id="phone" class="form-control    login-user"
                                               placeholder="Gender" aria-label="Mobile" aria-describedby="basic-addon1">
                                               <option value=""  selected>Gender</option>
                                               <option value="male" style="color:#000;">Male</option>
                                               <option value="female" style="color:#000;">Female</option>
</select>

                                               {{-- <label class="focus-label">Gender</label> --}}
                                            {{-- </div> --}}
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">

                                        <input type="text" name="dob" id="datepicker_register" style="padding: 12px 20px 12px 10px !important;" class="form-control  datepicker_register  login-user email"
                                               placeholder="Date of Birth" aria-label="Email" aria-describedby="basic-addon1"
                                               onfocus="this.value=''">

                                               {{-- <label class="focus-label">Date of Birth</label> --}}
                                    </div>
                                </div>
                                
                               @php
                                $cities = \App\Helpers\RecordHelper::getCities(request()->country);
   
                                $countries = \App\Helpers\RecordHelper::getCountries();
                               @endphp

                                <div class="col-md-6">
                                    <div class=" " id="form-border" style="  border-radius: 5px;  padding: 5px 20px;
                                    border: 1px solid #A17A4E">
                                        <select name="country" id="register_country"
                                                    class="form-control  country_id   login-user"
                                                    style="width:100%;">
                                             
                                                @foreach($countries as $country)
                                               
                                                    <option
                                                        {{-- {{ $country->id == request()->country ? 'selected' : '' }} --}}
                                                         {{-- data1-flag-url1="{{ $country->image_url }}" --}}
                                                        value="{{ $country->id }}"
                                                        style="font-size:8px !important;"> {{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <label class="focus-label">Country</label> --}}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="input-group mb-3 "  id="form-border"  style="border-radius: 5px;   padding: 5px 20px;
                                    border: 1px solid #A17A4E">
                                        <select name="cities" id="register_cities"
                                        class="form-control   login-user"
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
                                {{-- <label class="focus-label">City</label> --}}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <input type="password" name="password" id="password_main" class="form-control login-user floating"
                                               placeholder="" aria-label="Password" aria-describedby="basic-addon1">
                                        <div class="input-group-append">
                                            <span class="toggle-password" onclick="togglePassword('password_main')" style="cursor: pointer;">👁️</span>
                                        </div>

                                        {{-- <label class="focus-label">Password</label> --}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-focus">
                                        <input type="password" name="password_confirmation" id="password_confirmation"
 class="form-control login-user floating"
                                               placeholder="" aria-label="Cpassword"
                                               aria-describedby="basic-addon1">
                                               {{-- <label class="focus-label">Confirm Password</label> --}}
                                               <div class="input-group-append">
                                                <span class="toggle-password" onclick="togglePassword('password_confirmation')" style="cursor: pointer;">👁️</span>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- </div> -->

                        <!-- clicking start -->
                        <p class="by" >
                            By registering, I agree to the BusinessHub
                            <a href="{{ env('BASE_URL').'terms-of-use'}}" id="colorTowhite" style="color:#0070cc;">Terms & Condition</a>
                            and
                            <a href="{{ env('BASE_URL').'privacy-policy'}}" id="colorTowhite" style="color:#0070cc;">Privacy
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
                        <div class="Forgot" style="font-size: 12px;text-align: left; margin-top: -10px;">
                            <a  class="show-forgot-btn" id="colorTowhite" style="margin-left: 13px;color:#0070cc;" > Forgot Password? </a>
                           <span style="float: right;margin-right: 13px;">Already on BusinessHub? <a  class="login-btn" style="color:#0070cc;" id="colorTowhite" >&nbsp; Click Here </a></span>
                               
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
function validateInput(input) {
            
            // Allow only digits and the '+' sign, and ensure '+' is only at the beginning
            input.value = input.value.replace(/[^\d+]/g, '').replace(/(?!^)\+/g, '');
}
      
function togglePassword(fieldId) {
    const passwordField = document.getElementById(fieldId);
    const icon = passwordField.nextElementSibling.querySelector(".toggle-password");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        icon.textContent = "🙈"; // Change the icon to "hide"
    } else {
        passwordField.type = "password";
        icon.textContent = "👁️"; // Change the icon to "show"
    }
}

</script>
<!-- Register Modal -->
