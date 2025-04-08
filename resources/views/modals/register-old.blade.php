<!-- Register Modal -->
<div class="modal" id="registerModal" style="border:0px solid red;margin-top:-60px;height:760px;">
    <div class="modal-dialog" style="border:0px solid red; width:700px;">
        <div class="modal-content" style="background-color: rgba(33, 34, 35, .90) !important;border-radius:0.3rem;">
            <!-- Modal body -->
            <div class="modal-body">
                <div class="ragisterarea">
                    <!-- register form title start -->
                    <div class="sigh-in">
                        <h3 style="font-weight: bold;line-height: 20px;color: #0000FF;margin-left:25px;padding:15px;"
                            class="register-heading">
                            <span style="border-right: 4px solid #ffc000;">Sign up&nbsp;</span><span>&nbsp;Register on BusinessHub</span>
                        </h3>
                        <!-- <h1><span>Sign In</span> <span>Post your ad</span></h1> -->
                    </div>
                    <!-- register form title finish -->
                    <form class="register-form" autocomplete="off">
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
                        <div class="row justify-content-md-center">
                            <div class="col-md-6 col-lg-6 col-xl-5">
                                <!-- Name start -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <img src="{{asset('images/name.png')}}" width="33"
                                                                     height="19"/>
                                                            </span>
                                    </div>
                                    <input type="text" name="name" id="name" class="form-control login-user"
                                           placeholder="First Name" aria-label="Name" aria-describedby="basic-addon1">
                                </div>
                                <!-- Name finish -->

                                <!-- Name start -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <img src="{{asset('images/name.png')}}" width="33"
                                                 height="19"/>
                                        </span>
                                    </div>
                                    <input type="text" name="phone" id="phone" class="form-control login-user"
                                           placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1">
                                </div>
                                <!-- Name finish -->

                                <!-- Password start -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <img src="{{asset('images/lock.png')}}" width="33"
                                                                     height="20"/>
                                                            </span>
                                    </div>
                                    <input type="password" name="password" id="password" class="form-control login-user"
                                           placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                </div>
                                <!-- Password finish -->
                                <!-- Register finish -->
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-5 offset-lg-0 offset-md-0 offset-xl-1">
                                <!-- Email Address start -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <img src="{{asset('images/envelop.png')}}" width="33"
                                                                     height="19"/>
                                                            </span>
                                    </div>
                                    <input type="text" name="email" id="email" class="form-control login-user"
                                           placeholder="Email Address" aria-label="Username"
                                           aria-describedby="basic-addon1" onfocus="this.value=''"
                                           style="color:#fff !important;">
                                </div>
                                <!-- Email Address finish -->
                                <!-- role start -->

                                <div class="input-group mb-3">
                                    @php
                                        $countries = \App\Helpers\RecordHelper::getCountries();
                                        $cities = \App\Helpers\RecordHelper::getCities(request()->country);
                                    @endphp

                                    <div class="col" style="border:0px solid red;">
                                        <div class="row" style="border:0px solid red;">
                                            <!-------country dropdown----->
                                            <div class="col">
                                                <div class="row">
                                                    <div
                                                        style="border:1px solid #A17A4E;padding:6px 12px;width:100%;border-radius:20px;">
                                                        <select name="country" id="country"
                                                                class="form-control country_dropdown login-user"
                                                                style="width:100%;color:#fff !important;">
                                                            @if ($cities->count() < 1)
                                                                <option value="" selected>Select</option>
                                                            @endif
                                                            @foreach($countries as $country)
                                                                <option
                                                                    {{ $country->id == request()->country ? 'selected' : '' }} data-flag-url="{{ $country->image_url }}"
                                                                    value="{{ $country->id }}"
                                                                    style="font-size:8px !important;"> {{ $country->nice_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-------country dropdown ended---->
                                            <!-------city dropdown ---->
                                            &nbsp;
                                            <div class="col">
                                                <div class="row">
                                                    <div
                                                        style="border:1px solid #A17A4E;padding:6px 12px;width:100%;border-radius:20px;">
                                                        <select name="city" id="city"
                                                                class="form-control login-user city_dropdown_register_form"
                                                                style="width:100%;color:#fff !important;">
                                                            @foreach($cities as $city)
                                                                <option
                                                                    {{ $city->id == request()->city ? 'selected' : '' }} value="{{ $city->id }}">{{ $city->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-------city dropdown ended---->
                                        </div>
                                    </div>
                                </div>
                                <!--  finish -->
                                <!-------confirm password-->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <img src="{{asset('images/co-password.png')}}"
                                                                     width="33" height="22"/>
                                                            </span>
                                    </div>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                           class="form-control login-user" placeholder="Confirm Password"
                                           aria-label="copassword" aria-describedby="basic-addon1">
                                </div>
                                <!--  start -->
                                <!-- confirm password finish -->
                            </div>
                        </div>
                        <!-- clicking start -->
                        <p class="by">
                            By clicking on register, you agree to our
                            <a href="{{ env('BASE_URL').'terms-of-use'}}" style="color:#0070cc;">Terms of Service</a>
                            and
                            <a href="{{ env('BASE_URL').'privacy-policy'}}" id="myModal" style="color:#0070cc;">Privacy
                                Policy</a>.
                        </p>
                        <!-- clicking finish -->
                        <!-- Enter Captcha start -->
                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                        <!-- Enter Captcha finish -->
                        <!-- Register button start -->
                        <div class="register-button-area">
                            <a class="btn register-button" style="color: #FFFF;">Register </a>
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
<!-- Register Modal -->
