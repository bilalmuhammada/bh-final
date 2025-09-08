@extends('layout.master')
<style>
    select{
        text-transform: none !important;
    }
    .countryfield:hover{
        border: 1px solid #1202c9;
    }
    .countryfield{
        border-radius: 0.3rem;
        border: 1px solid #A17A4E;
    }
    /* input:hover{
        border: 1px solid #1202c9 !important;
    } */
    #select2-country_id-container{
  font-size: 11px !important;
    }
    #profile-form .toggle-password {
            position: absolute;
            right: 30px;
            top: 36% !important;
            transform: translateY(-50%);
            cursor: pointer;
        }
     
    .select2-dropdown{
margin-left: -7px;
    }
    .ui-datepicker select.ui-datepicker-month, .ui-datepicker select.ui-datepicker-year{
        border: transparent;
    }

    .ui-datepicker select.ui-datepicker-month,
        .ui-datepicker select.ui-datepicker-year {
            height: 35px !important;
            font-size: 16px;
            overflow-y: auto !important; /* Adds vertical scroll */
        }
        .select2-container--default .select2-results__options {
    max-height: 10px;  /* Set the max height for the dropdown */
    overflow-y: auto;   /* Add vertical scrollbar */
}
        /* Apply overflow to the entire datepicker if needed */
        .ui-datepicker {
            max-height: 300px !important; /* Example: limit height */
            overflow-y: auto !important;  /* Enable vertical scrolling */
        }
       
        #profile-form #select2-country-container,#profile-form #select2-cities-container{
        
    color: black !important;
    font-weight: inherit;
    text-align: center !important;
}

           
    input::placeholder{
        font-size: 10px;
        color: blue !important;
    }
    .lobibox-notify-success{
        width: 180px !important
    }
    .lobibox-notify-error{
        width: 180px !important
    }
    .form-control{
        /* width:100%; */
        text-align: center;

    }
    .form-control1{
        width:100% !important;
        

    }
  
    .position-550 {
        left:600px !important ;
    }
  
    select::-ms-expand {
    /* display: none; Remove the dropdown icon on IE10+ */
}
select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background: none; /* Remove default background */
    background-color: transparent;
    padding-right: 20px; /* Add some padding to keep the layout */
}
#change-photo-link:hover{
    color:goldenrod !important;
}

    input{
        border: 1px solid #A17A4E !important;
    }
    #ui-datepicker-div{
width: 225px !important;
  }
  #select2-register_cities-container{
    color: black !important;
  }
  .ui-state-default  {
        border: 0px !important;
    background-color: white !important; /* Change this to the desired color */
  }
  .lobibox-notify .lobibox-icon {
    display: none !important;
}

#select2-profile_cities-container{
    font-size:11px !important;

}
.changecolor {
    font-size: 12px;
    color: #0000ff;
}

.changecolor a {
    color: inherit;
    text-decoration: none;
}

.changecolor a:hover {
    color: goldenrod !important;
}


</style>
@section('content')
    <!-- form content start -->


    <div class="cont-w" style="margin-bottom:30px;">
    <div class="col-md-12" style="margin-left:42px;">
    <span class="changecolor" >
  <a href="{{ url('home') . '?country=' . request()->country }}" >Home</a> > Profile
</span>

        {{-- <h4><b>My Profile</b></h4> --}}
        <h6 style="font-size:12px;font-weight: bolder; "> Hey, {{ session()->get('user')->first_name }}</h6>
        </div>
        <div class="col-md-12 desktop-view">
            <div class="row">
                <div class="col-md-2" style="border: 0px solid red;text-align:center;">
                    <img id="profile-image" class="display-profile-img" src="{{session()->get('user')->image_url}}" alt="img" width="120" height="120" style="border-radius: 0.3rem; border: 0px solid red;">
                    <a href="#" id="change-photo-link"  style="display: flex; margin-left: 51px; margin-top: 5px;font-size:14px; color: #0000ff;">Change Photo</a>
                    <input type="file" name="profile_image" id="profile_image" class="form-control-file" accept="image/*" style="border: 1px solid #999; border-radius: 0.3rem; display: none;">
                    <input type="hidden" name="image" class="base64-Image-name">
                </div>
                <div class="col-md-4"  style="margin-left: 42px;margin-top: -32px;">
                    <div class="row">
                        <form class="profile-form" id="profile-form" style="font-size:12px;">
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 10px;" ><b> First Name:</b></div>
                                    <div class="col-md-8">
                                         <input type="text" class="form-control form-control1" name="first_name" id="name" value="{{session()->get('user')->first_name}}" style="border: 1px solid rgb(153, 153, 153);">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 10px;" ><b> Last Name:</b></div>
                                    <div class="col-md-8">
                                    {{-- <p>{{session()->get('user')->name}}</p> --}}
                                         <input type="text" class="form-control form-control1" name="last_name" id="name" value="{{session()->get('user')->last_name}}" style="border: 1px solid rgb(153, 153, 153);">
                                    </div>
                                    
                                </div>
                            </div>

                     
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 10px;"><b>Gender:</b></div>
                                    <div class="col-md-8">
                                        <select name="gender" id="gender" type="text" class="form-control form-control1"
                                                style="border:1px solid #A17A4E;">
                                            <option value="" selected hidden disabled></option>
                                            <option value="male" @if(session()->get('user')->gender=='male') selected @endif>Male</option>
                                            <option value="female" @if(session()->get('user')->gender=='female') selected @endif>Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 10px;"><b>Mobile:</b></div>
                                    <div class="col-md-8">
                                        <input name="mobile" id="mobile" type="text"  value="{{ session()->get('user')->phone}}"  class="form-control form-control1" 
                                        {{-- placeholder="Please enter a valid Mobile." --}}
                                         style="border: 1px solid #999;" oninput="validateInputText(this)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 10px;"><b>Email:</b></div>
                                    <div class="col-md-8">
                                        <input name="email" id="email" type="text"  value="{{session()->get('user')->email}}"
                                        {{-- placeholder="Please provide a valid Email."  --}}
                                         class="form-control form-control1" style="border: 1px solid #999;">
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
                                        <input type="text" name="dob" id="datepicker1" value="{{ \Carbon\Carbon::parse(session()->get('user')->dob)->format('d.m.Y') }}" class="form-control datepicker1 form-control1 login-user email"
                                       
                                
                                        onfocus="this.value=''">
                                    </div>
                                </div>
                            </div>
                            @php
                            $countries = \App\Helpers\RecordHelper::getCountriesRegistration();
                            $cities = \App\Helpers\RecordHelper::getCities(request()->country ?? 1);
                        @endphp
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 10px;"><b>Location:</b></div>
                                    <div class="col-md-4">
                                        <div class="input-group mb-3 countryfield" >
                                            <select name="country" id="country_id"
                                                        class="form-control form-control1 country_id country_dropdown_user login-user"
                                                        style="width:100%;">
                                                    {{-- @if ($cities->count() < 1)
                                                        <option value="" selected>Country</option>
                                                    @endif --}}
                                                    @foreach($countries as $country)
                                                        <option
                                                            {{ $country->id == request()->country ? 'selected' : '' }} 
                                                            value="{{ $country->id }}"
                                                            style="font-size:8px !important;"> {{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                  </div>

                                       <div class="col-md-4">
                                        <div class="input-group mb-3 countryfield" 
                                        >
                                            <select name="cities" id="profile_cities"
                                            class="form-control form-control1 country_dropdown_user login-user"
                                            style="width:100%;">
                                       
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
                                    <div class="col-md-4" style="margin-top: 10px;"><b>Change Password:</b></div>
                                    <div class="col-md-8">
                                        <input name="password" id="password" type="password" class="form-control form-control1"
                                         {{-- placeholder="8 Characters - 1 Capital, 1 Number, 1 Special" --}}
                                         style="border: 1px solid #999;">
                                         <div class="input-group-append">
                                            <span class="toggle-password"  onclick="togglePassword('password')" style="cursor: pointer;top: 60% !important;">👁️</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">
                                <div class="row">
                                    <div class="col-md-4" style="margin-top: 10px;"><b>Confirm Password:</b></div>
                                    <div class="col-md-8">
                                        <input name="password" id="confirmpassword" type="password" class="form-control form-control1" placeholder="" style="border: 1px solid #999;">
                                        <div class="input-group-append">
                                            <span class="toggle-password" onclick="togglePassword('confirmpassword')" style="cursor: pointer;top: 60% !important;">👁️</span>
                                        </div>
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
                                                style="padding: 8px;font-size:15px;border-radius:0.3rem;margin-left: 15rem;">Update 
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5" style="box-shadow: #eef0f1 0 0 20px; margin-left: 53px; border: 1px solid #eef0f1;height:130px;padding:10px;  border-radius:0.3rem;">
                    <div class="row">
                        <div class="col-md-3" style="border: 0px solid red;">
                            <div class="inner-content text-center" style="padding: 10px;">
                                <h6><b>Ads</b></h6>
                                <h6><b style="color: blue">{{ \App\Helpers\RecordHelper::getAdsByUserId(session()->get('user')->id)->count() }}</b></h6>
                                <p style="font-size: 16px;color: goldenrod;">Live</p>
                            </div>
                        </div>
                        <div class="col-md-3" style="border-left: 2px solid #eee;border-right: 2px solid #eee;">
                            <div class="inner-content text-center" style="padding: 10px;">
                                <h6><b>Notifications</b></h6>
                                <h6><b style="color: blue">0</b></h6>
                                <p style="font-size: 16px;color: goldenrod;">New</p>
                            </div>
                        </div>
                        <div class="col-md-3" style="border-right: 2px solid #eee;">
                            <div class="inner-content text-center" style="padding: 10px;">
                                <h6><b>Favorites</b></h6>
                                <h6><b style="color: blue">0</b></h6>
                                <p style="font-size: 16px;color: goldenrod;">Recent</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="inner-content text-center" style="padding: 10px;">
                                <h6><b>Chats</b></h6>
                                <h6><b style="color: blue">0</b></h6>
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
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/js/select2.min.js"></script>
  {{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
    <script >
 
 function validateInputText(input) {
    // Remove any character that is not a letter (A-Z, a-z) or space
    input.value = input.value.replace(/[^0-9@#$%&_\+]/g, '');
}

function togglePassword(fileID) {

const passwordField = document.getElementById(fileID);

const icon = passwordField.nextElementSibling.querySelector(".toggle-password");

if (passwordField.type === "password") {
    passwordField.type = "text";
    icon.textContent = "🙈"; // Change the icon
} else {
    passwordField.type = "password";
    icon.textContent = "👁️"; // Change the icon back
}
}
$(document).ready(function(){
   
 
    $(".country_dropdown_user").select2({
            // templateSelection: formatCountry,
            // templateResult: formatCountry,
            // minimumResultsForSearch: -1
        });

        $(".country_dropdown_user").on("select2:open", function () {
    $(".select2-results__option").css("font-size", "11px"); // Dropdown options
    $(".select2-container--default .select2-selection--single").css("font-size", "11px !important"); // Selected option
});
$(".country_dropdown_user").on("select2:select", function (e) {
    $(".select2-selection--single").css("font-size", "11px"); // Selected option display
});
});



document.getElementById('change-photo-link').addEventListener('click', function() {
    document.getElementById('profile_image').click();
});

document.getElementById('profile_image').addEventListener('change', function() {
    var file = this.files[0];
    if (!file) return;

    var reader = new FileReader();
   
    reader.onload = function(e) {
        // Preview the image
        var imgElement = document.getElementById('profile-image');
        imgElement.src = e.target.result;

        // Optional: store base64 in hidden input
        document.querySelector('.base64-Image-name').value = e.target.result;

        // Prepare FormData for AJAX
        var formData = new FormData();
        formData.append('_token', '{{ csrf_token() }}'); // Laravel CSRF
        formData.append('profile_image', file); // the actual file

        // Optionally, send other profile fields too
        formData.append('first_name', $('#name').val());
        formData.append('email', $('#email').val());

        // AJAX request to update profile
        $.ajax({
            url: api_url + 'update-image', // your profile update route
            type: 'POST',
            data: formData,
            dataType: 'JSON',
            processData: false, // required for FormData
            contentType: false, // required for FormData
            success: function(response) {
                if (response.status) {
                    showAlert("success", response.message);
                    if (response.image_url) {
                        $('#profile-image').attr('src', response.image_url);
                    }
                } else {
                    console.log("Validation errors:", response.errors);
                }
            },
            error: function(xhr) {
                showAlert("error", "Error updating profile image");
            }
        });
    };

    reader.readAsDataURL(file);
});





        var base65Image = '';
        // fetching user data
        $(document).ready(function () {
          //  $.ajax({
            //    url: api_url + 'user-data',
               //   type: 'post',
               //   dataType: "JSON",
                //  success: function (response) {
                //      if (response.status) {
                 //         $('#gender').val(response.user.gender);
                  //        $('#dob').val(response.user.dob);
                  //        if (response.user.weekly_newsletter === 1) {
                  //            $('#weekly_newsletter').prop('checked', true);
                  //        }
                   //       if (response.user.offers_and_bargains === 1) {
                    //          $('#offers_and_bargains').prop('checked', true);
                  //        }
                   //   } else {
                    //      showAlert("error", response.message);
                 //     }
               //   },
               //   error: function (response) {
                    // showAlert("error", "Server Error");
                //  }
            //  });
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
          

          var form = $('#profile-form')[0]; // get form DOM element
    var formData = new FormData(form); 
    

            $.ajax({
                url: api_url + 'update-profile',
                data: $('.profile-form').serialize(),
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        showAlert("success", response.message);
                        // setTimeout(function () {
                        //     window.location.assign(window.location.href);
                        // }, 600);
                    } else {
                        var errors = response.errors;
                        console.log(errors);
                        for (var fieldName in errors) {

                              


                           

var errorElement = $(form).find('[name="' + fieldName + '"]');

errorElement.addClass('was-validated')
errorElement.addClass('is-invalid')
errorElement.siblings('.invalid-feedback').html(errors[fieldName]);
}
                        // showAlert("error", response.message);
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
