@extends('layout.master')
@section('content')

@php
    $cities = \App\Helpers\RecordHelper::getCities(request()->country);
    $countries = \App\Helpers\RecordHelper::getCountries();
@endphp
    <!-- form content start -->
    <div class="cont-w" style="margin-bottom:30px;">
    <div class="col-md-12" style="margin-left:42px;">
        <span style="font-size: 12px ;"><a href="{{ env('BASE_URL') . 'home'}}">Home</a>>Profile</span>

        <h4><b>My Profile</b></h4>
        <p style="font-size:13px;">Welcome, {{ session()->get('user')->name }}!</p>
        </div>
        <div class="col-md-12 desktop-view">
            <div class="row">
                <div class="col-md-2" style="border: 0px solid red;text-align:right;">
                    <img class="display-profile-img"  src="{{session()->get('user')->image_url}}" alt="img" width="120" height="120"
                         style="border-radius: 5%;border:0px solid red;"  >
                </div>
                <div class="col-md-5" style="padding:0px 40px;">
                    <div class="row">


                        <div class="col-md-12" style="margin-top: 10px;">

                        <div class="country" style="border:0px solid red;position:relative;left:-50px;">
                            <select class="form-control city_dropdown" name="city_dropdown" id=""
                                    style="width:120px;border:0px solid red !imporatnt;text-align:center;background-color:transparent !important;">
                                    <option value=""> &nbsp; All Cities</option>
                                @foreach($cities as $city)
                                    <option data-city-id="{{ $city->id }}"
                                            {{ $city->id == request()->city ? 'selected' : '' }} value="{{ $city->id }}"
                                            style="font-size:8px !important;"> &nbsp; {{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                            <!----langs--->
                        <div class="country" style="border:0px solid green;position:relative;left:-90px;">
                        <div class="mobile-country desktop-menu-right">
                        <select class="form-control country_dropdown" name="country_dropdown" id=""
                                style="width:120px;">
                        @foreach($countries as $country)
                                <option
                                    {{ $country->id == request()->country ? 'selected' : '' }} data-flag-url="{{ $country->image_url }}"
                                    data-country-id="{{ $country->id }}"
                                    value="{{ $country->id }}">&nbsp;{{ $country->name }}</option>
                            @endforeach
                        </select>
                        </div>
                        </span>
            </div>
        </div>


                        <form class="profile-form" style="font-size:12px;">
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4" style="margin-bottom:-9px;"><b>Name:</b></div>
                                    <div class="col-md-8" style="margin-bottom:-9px;">
                                    <p>{{session()->get('user')->name}}</p>
                                        <!-- <input type="text" class="form-control" name="name" id="name" value="{{session()->get('user')->name}}" style="border: 0px solid rgb(153, 153, 153);"> -->
                                    </div>
                                    <!-- <div class="col-md-4"><b></b></div>
                                    <div class="col-md-8">
                                        <div class="btnz" style="text-align: center;">
                                            @if (session()->get('user')->verified_at != null)
                                                <a class="form-control btn btn-lg verify-account-btn"
                                                   style="font-weight:bold;font-size:11px;border: 1px solid #999;background-color:inherit;color:#000;padding:6px 0px;">
                                                   Account Verified
                                                </a>
                                            @else
                                            <a href="{{ env('BASE_URL') . 'verify-email' }}" target="_blank" class="form-control btn btn-lg verify-account-btn"
                                                   style="font-weight:bold;font-size:11px;border: 1px solid #999;background-color:inherit;color:#000;padding:6px 0px;">
                                                    Verify Your Account
                                                </a>
                                            @endif
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                       
                          
        


                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4">Gender:</div>
                                    <div class="col-md-8">
                                        <select name="gender" id="gender" type="text" class="form-control"
                                                style="border:1px solid #999;">
                                            <option value="">-----</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4">Nationality:</div>
                                    <div class="col-md-8">
                                        <input name="nationality" id="nationality" type="text" class="form-control" style="border: 1px solid #999;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4">Date of Birth:</div>
                                    <div class="col-md-8">
                                        <input name="dob" id="dob" type="text" class="form-control" style="border: 1px solid #999;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    {{-- <div class="col-md-12">
                                        <h4><b>Addresses</b></h4>
                                        <p>Manage your save addresses</p>
                                        <span href="#" class="add-address">
                                        <button style="padding:5px 50px;border:none;border:1px solid #A17A4E; border-radius:4px;background:inherit;">+  &nbsp; &nbsp; New Location</button>
                                        </span>
                                    </div> --}}
                                    <!-- <div class="col-md-8">
                                        <input name="dob" id="dob" type="text" class="form-control" style="border: 1px solid #999;">
                                    </div> -->
                                </div>
                            </div>
                            {{-- <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 style="font-size:14px;"><b>Change Profile Image:</b></h4>
                                        <input type="file" name="profile_image" id="profile_image" class="form-control-file" style="border:1px solid #999;border-radius:2px;">
                                        <input type="hidden" name="image" class="base64-Image-name">
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- <h4 style="font-size:14px;"><b>Please send me:</b></h4> --}}
                                        <h4 style="font-size:14px;"><b>Subscribe:</b></h4>
                                    </div>

                                    <div class="col-md-12">
                                        <input name="weekly_newsletter" id="weekly_newsletter" type="checkbox">
                                        <span> &nbsp; The weekly businesshub newsletter of the most popular steals across &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; the businesshub site.</span>
                                    </div>
                                    <div class="col-md-12">
                                        <input name="offers_and_bargains" id="offers_and_bargains" type="checkbox">
                                        <span> &nbsp; Amazing offers and bargains from our advertising partners.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    {{-- <div class="col-md-12 text-left">
                                        <a class="btn add-list-button update-profile-btn update-profile-submit-btn"
                                                style="padding: 8px;font-size:15px;border-radius:8px;">Update Profile
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5"
                     style="box-shadow: #eef0f1 0 0 20px;border: 1px solid #eef0f1;height:150px;padding:10px;">
                    <div class="row">
                        <div class="col-md-4" style="border: 0px solid red;">
                            <div class="inner-content text-center" style="padding: 10px;">
                                <h6><b>My Ads</b></h6>
                                <h4><b>{{ \App\Helpers\RecordHelper::getAdsByUserId(session()->get('user')->id)->count() }}</b></h4>
                                <p style="font-size: 12px;">Ads Viewed 0 times</p>
                            </div>
                        </div>
                        <div class="col-md-4" style="border-left: 2px solid #eee;border-right: 2px solid #eee;">
                            <div class="inner-content text-center" style="padding: 10px;">
                                <h6><b>My Searches</b></h6>
                                <h4><b>0</b></h4>
                                <p style="font-size: 12px;">Saved Searches</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="inner-content text-center" style="padding: 10px;">
                                <h6><b>My Favorites</b></h6>
                                <h4><b>0</b></h4>
                                <p style="font-size: 12px;">Ads Saved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        






{{--        <div class="col-sm-12 mobile-view" style="margin-left: 20px;">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-2" style="border: 0px solid red;text-align:right;">--}}
{{--                    <img class="display-profile-img" src="{{session()->get('user')->image_url}}" alt="img" width="120" height="100"--}}
{{--                         style="border-radius: 5%;border:0px solid red;">--}}
{{--                </div>--}}
{{--                <div class="col-sm-5" style="margin-left: 20px;">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-6 "><b>Name:</b></div>--}}
{{--                                <div class="col-sm-6">--}}
{{--                                    <span>{{session()->get('user')->name}}</span>--}}
{{--                                </div>--}}
{{--                                <br/>--}}
{{--                                <div class="col-xs-12">--}}
{{--                                    <div class="btnz" style="text-align: center;">--}}
{{--                                        <button class="btn btn-lg text-white"--}}
{{--                                                style="font-weight:bold;font-size:16px;box-shadow: #eef0f1 0 0 20px;border: 1px solid #eef0f1;padding:5px 14px;background-color:#0000FF;">--}}
{{--                                            Verify Your Account--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <form class="profile-form" style="margin-left: 20px;">--}}
{{--                            <div class="col-xs-12" style="margin-top: 10px;">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xs-2">&nbsp;&nbsp; Gender:</div>--}}
{{--                                    <div class="col-xs-10">--}}
{{--                                        <select name="gender" id="gender" type="text" class="form-control"--}}
{{--                                                style="border:1px solid #999;">--}}
{{--                                            <option value="">-----</option>--}}
{{--                                            <option value="male">Habibi(M)</option>--}}
{{--                                            <option value="female">Habibti(F)</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12" style="margin-top: 10px;">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xs-4">&nbsp;&nbsp; Date of Birth:</div>--}}
{{--                                    <div class="col-xs-8">--}}
{{--                                        <input name="dob" id="dob" type="text" class="form-control" style="border: 1px solid #999;">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12" style="margin-top: 10px;">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xs-12">--}}
{{--                                        <h5><b>&nbsp;&nbsp; Change Profile Image:</b></h5>--}}
{{--                                        <input type="file" name="profile_image" id="profile_image" class="form-control-file" style="border:1px solid #999;">--}}
{{--                                        <input type="hidden" name="image" class="base64-Image-name">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12" style="margin-top: 10px;">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-12">--}}
{{--                                        <h5><b>&nbsp;&nbsp; Please send me:</b></h5>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-12">--}}
{{--                                        <input name="weekly_newsletter" id="weekly_newsletter" type="checkbox">--}}
{{--                                        <span> The weekly businesshub newsletter of the most <br/>popular steals across the businesshub site.</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-12">--}}
{{--                                        <input name="offers_and_bargains" id="offers_and_bargains" type="checkbox">--}}
{{--                                        <span> &nbsp; Amazing offers and bargains from our advertising partners.</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xs-12" style="margin-top: 10px;">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xs-12 text-center">--}}
{{--                                        <a class="btn add-list-button update-profile-btn update-profile-submit-btn"--}}
{{--                                                style="padding: 8px;font-size:15px;border-radius:38px;">Update Profile--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-5"--}}
{{--                     style="box-shadow: #eef0f1 0 0 20px;border: 1px solid #eef0f1;height:150px;padding:10px;">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xs-4" style="border: 0px solid red;">--}}
{{--                            <div class="inner-content text-center" style="padding: 10px;">--}}
{{--                                <h6><b>My Ads</b></h6>--}}
{{--                                <h4><b>0</b></h4>--}}
{{--                                <p style="font-size: 12px;">Ads Viewed 0 times</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-4" style="border-left: 2px solid #eee;border-right: 2px solid #eee;">--}}
{{--                            <div class="inner-content text-center" style="padding: 10px;">--}}
{{--                                <h6><b>My Searches</b></h6>--}}
{{--                                <h4><b>0</b></h4>--}}
{{--                                <p style="font-size: 12px;">Saved Searches</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-4">--}}
{{--                            <div class="inner-content text-center" style="padding: 10px;">--}}
{{--                                <h6><b>My Favorites</b></h6>--}}
{{--                                <h4><b>0</b></h4>--}}
{{--                                <p style="font-size: 12px;">Ads Saved</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>
@endsection
@section('page_scripts')
    <script type="text/javascript">
        var base65Image = '';
        // fetching user data
        $(document).ready(function () {
            $.ajax({
                url: api_url + 'user-data',
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        $('#gender').val(response.user.gender);
                        $('#dob').val(response.user.dob);
                        if (response.user.weekly_newsletter === 1) {
                            $('#weekly_newsletter').prop('checked', true);
                        }
                        if (response.user.offers_and_bargains === 1) {
                            $('#offers_and_bargains').prop('checked', true);
                        }
                    } else {
                        showAlert("error", response.message);
                    }
                },
                error: function (response) {
                    showAlert("error", "Server Error");
                }
            });
        });

        // $(document).on('click', '.verify-account-btn', function () {
        //     $.ajax({
        //         url: api_url + 'verify-email',
        //         type: 'post',
        //         dataType: "JSON",
        //         success: function (response) {
        //             if (response.status) {
        //                 $('.verify-account-btn').text('Account Verified')
        //             } else {
        //                 showAlert("error", response.message);
        //             }
        //         },
        //         error: function (response) {
        //             showAlert("error", "Server Error");
        //         }
        //     });
        // });

        //submitting user profile image
        $(document).on('click', '.add-address', function (e) {
            e.preventDefault();
            $(this).html(`<input name="address" id="address" type="text" class="form-control" style="border: 1px solid #999;">`);
            $(this).removeClass('add-address');
        });

        $(document).on('click', '.update-profile-submit-btn', function () {
            $.ajax({
                url: api_url + 'update-profile',
                data: $('.profile-form').serialize(),
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        showAlert("success", response.message);
                        setTimeout(function () {
                            window.location.assign(window.location.href);
                        }, 600);
                    } else {
                        showAlert("error", response.message);
                    }
                },
                error: function (response) {
                    showAlert("error", "Server Error");
                }
            });
        });

        function readFile() {

            if (!this.files || !this.files[0]) {
                return;
            }

            const FR = new FileReader();

            FR.addEventListener("load", function(evt) {
                document.querySelector(".display-profile-img").src = evt.target.result;
                document.querySelector(".base64-Image-name").value = evt.target.result;
                base65Image = evt.target.result;
            });

            FR.readAsDataURL(this.files[0]);
        }

        document.querySelector("#profile_image").addEventListener("change", readFile);
    </script>
@endsection
