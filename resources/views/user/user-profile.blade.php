@extends('layout.master')
<style>
    select{
        text-transform: none !important;
    }
    input:focus{
        border: 1px solid #1202c9 !important;
    }
    input::placeholder{
        font-size: 10px;
        color: blue !important;
    }
    .lobibox-notify-success{
        width: 150px !important
    }
    .lobibox-notify-error{
        width: 150px !important
    }
    .form-control{
        text-align: center;

    }
    select::-ms-expand {
    display: none; /* Remove the dropdown icon on IE10+ */
}
select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background: none; /* Remove default background */
    background-color: transparent;
    padding-right: 20px; /* Add some padding to keep the layout */
}
    input{
        border: 1px solid #A17A4E !important;
    }
    #ui-datepicker-div{
width: 225px !important;
  }
  .ui-state-default  {
        border: 0px !important;
    background-color: white !important; /* Change this to the desired color */
  }
  .lobibox-notify .lobibox-icon {
    display: none !important;
}
</style>
@section('content')
    <!-- form content start -->
    <div class="cont-w" style="margin-bottom:30px;">
    <div class="col-md-12" style="margin-left:42px;">
        <span style="font-size: 12px ;"><a href="{{ env('BASE_URL') . 'home'}}">Home</a>>Profile</span>

        {{-- <h4><b>My Profile</b></h4> --}}
        <h6 style="font-size:12px;font-weight: bolder;">Welcome, {{ session()->get('user')->name }}!</h6>
        </div>
        <div class="col-md-12 desktop-view">
            <div class="row">
                <div class="col-md-2" style="border: 0px solid red;text-align:center;">
                    <img id="profile-image" class="display-profile-img" src="{{session()->get('user')->image_url}}" alt="img" width="120" height="120" style="border-radius: 5%; border: 0px solid red;">
                    <a href="#" id="change-photo-link" style="display: flex; margin-left: 43px; margin-top: 5px;">Change Photo</a>
                    <input type="file" name="profile_image" id="profile_image" class="form-control-file" accept="image/*" style="border: 1px solid #999; border-radius: 2px; display: none;">
                    <input type="hidden" name="image" class="base64-Image-name">
                </div>
                <div class="col-md-4"  style="margin-left: 42px;margin-top: -32px;">
                    <div class="row">
                        <form class="profile-form" style="font-size:12px;">
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 10px;" ><b> First Name:</b></div>
                                
                                    <div class="col-md-8">
                                    {{-- <p>{{session()->get('user')->name}}</p> --}}
                                         <input type="text" class="form-control" name="name" id="name" value="{{session()->get('user')->name}}" style="border: 1px solid rgb(153, 153, 153);">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 10px;" ><b> Last Name:</b></div>
                                
                                    <div class="col-md-8">
                                    {{-- <p>{{session()->get('user')->name}}</p> --}}
                                         <input type="text" class="form-control" name="name" id="name" value="{{session()->get('user')->name}}" style="border: 1px solid rgb(153, 153, 153);">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 10px;"><b>Gender:</b></div>
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
                                    <div class="col-md-4" style="margin-top: 10px;"><b>Mobile:</b></div>
                                    <div class="col-md-8">
                                        <input name="mobile" id="mobile" type="text" class="form-control" 
                                        {{-- placeholder="Please enter a valid Mobile." --}}
                                         style="border: 1px solid #999;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 10px;"><b>Email:</b></div>
                                    <div class="col-md-8">
                                        <input name="email" id="email" type="text" 
                                        {{-- placeholder="Please provide a valid Email."  --}}
                                         class="form-control" style="border: 1px solid #999;">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4">Nationality:</div>
                                    <div class="col-md-8">
                                       
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 10px;"><b>Date of Birth:</b></div>
                                    <div class="col-md-8">
                                        <input type="text" name="dob" id="datepicker" class="form-control login-user email"
                                        placeholder="" aria-label="Email" aria-describedby="basic-addon1"
                                        onfocus="this.value=''">
                                    </div>
                                </div>
                            </div>
                            @php
                            $countries = \App\Helpers\RecordHelper::getCountries();
                            $cities = \App\Helpers\RecordHelper::getCities(request()->country);
                        @endphp
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 10px;"><b>Location:</b></div>
                                    <div class="col-md-4">
                                        <div class="input-group mb-3" style=" 
                                        border: 1px solid #999">
                                            <select name="country" id="country"
                                                        class="form-control country_dropdown login-user"
                                                        style="width:100%;">
                                                    @if ($cities->count() < 1)
                                                        <option value="" selected>Country</option>
                                                    @endif
                                                    @foreach($countries as $country)
                                                        <option
                                                            {{ $country->id == request()->country ? 'selected' : '' }} 
                                                            value="{{ $country->id }}"
                                                            style="font-size:8px !important;"> {{ $country->nice_name }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                  </div>

                                       <div class="col-md-4">
                                        <div class="input-group mb-3" style="
                                        border: 1px solid #999">
                                            <select name="cities" id="cities"
                                            class="form-control country_dropdown login-user"
                                            style="width:100%;">
                                        @if ($cities->count() < 1)
                                            <option value="" selected>City</option>
                                        @endif
                                        @foreach($cities as $city)
                                            <option
                                                {{ $city->id == request()->city ? 'selected' : '' }}
                                                value="{{ $city->id }}"
                                                style="font-size:8px !important;"> {{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                       </div>
                                    </div>
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
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 10px;"><b>Password:</b></div>
                                    <div class="col-md-8">
                                        <input name="password" id="password" type="password" class="form-control"
                                         {{-- placeholder="8 Characters - 1 Capital, 1 Number, 1 Special" --}}
                                         style="border: 1px solid #999;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 10px;"><b>Confirm Password:</b></div>
                                    <div class="col-md-8">
                                        <input name="password" id="confirmpassword" type="password" class="form-control" placeholder="" style="border: 1px solid #999;">
                                    </div>
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
                                        <b>Subscribe:</b>
                                    </div>

                                    <div class="col-md-12" style="margin-left: 9.5rem;margin-top: -14px;">
                                        <input name="weekly_newsletter" id="weekly_newsletter" type="checkbox">
                                        <span> &nbsp; Weekly New Business Ads.</span>
                                    </div>
                                    <div class="col-md-12" style="margin-left: 9.5rem;">
                                        <input name="offers_and_bargains" id="offers_and_bargains" type="checkbox">
                                        <span> &nbsp; Best Deals from our Advertising Partners.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-12 text-left">
                                        <a class="btn add-list-button update-profile-btn update-profile-submit-btn"
                                                style="padding: 8px;font-size:15px;border-radius:8px;margin-left: 15rem;">Update 
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5" style="box-shadow: #eef0f1 0 0 20px; margin-left: 53px; border: 1px solid #eef0f1;height:130px;padding:10px; ">
                    <div class="row">
                        <div class="col-md-3" style="border: 0px solid red;">
                            <div class="inner-content text-center" style="padding: 10px;">
                                <h6><b>My Ads</b></h6>
                                <h4><b style="color: blue">{{ \App\Helpers\RecordHelper::getAdsByUserId(session()->get('user')->id)->count() }}</b></h4>
                                <p style="font-size: 16px;color: goldenrod;">Live</p>
                            </div>
                        </div>
                        <div class="col-md-3" style="border-left: 2px solid #eee;border-right: 2px solid #eee;">
                            <div class="inner-content text-center" style="padding: 10px;">
                                <h6><b>Notification</b></h6>
                                <h4><b style="color: blue">0</b></h4>
                                <p style="font-size: 16px;color: goldenrod;">New</p>
                            </div>
                        </div>
                        <div class="col-md-3" style="border-right: 2px solid #eee;">
                            <div class="inner-content text-center" style="padding: 10px;">
                                <h6><b>Favorites</b></h6>
                                <h4><b style="color: blue">0</b></h4>
                                <p style="font-size: 16px;color: goldenrod;">Recent</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="inner-content text-center" style="padding: 10px;">
                                <h6><b>Chat</b></h6>
                                <h4><b style="color: blue">0</b></h4>
                                <p style="font-size: 16px;color: goldenrod; ">Unread</p>
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
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
 
$(function() {
    $("#datepicker").datepicker({
        beforeShowDay: function(date) {
            return [true]; // This enables all dates
        },
        showOtherMonths: true, // Show dates of other months
        selectOtherMonths: true // Allow selection of dates from other months
    });
});

document.getElementById('change-photo-link').addEventListener('click', function() {
    document.getElementById('profile_image').click();
});

document.getElementById('profile_image').addEventListener('change', function() {
    var file = this.files[0];
    var reader = new FileReader();

    reader.onload = function(e) {
        var imgElement = document.getElementById('profile-image');
        imgElement.src = e.target.result;
        document.querySelector('.base64-Image-name').value = e.target.result;
    };

    reader.readAsDataURL(file);
});





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
                    showAlert("error", "Error");
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
