@extends('Admin.layout.master')
<style>
       .form-control{
    border-color: #997045 !important;
    /* text-align: center; */
}
.form-control:hover{
    border-color: blue;
    
}
span.ui-selectmenu-button.ui-button {
  width: 55%;
}
.ui-datepicker .ui-datepicker-title {
    display: flex;
}
ul.ui-menu {
  max-height: 160px;
}
.toggle-password {
            position: absolute;
            right: 23px;
            top: 43%;
            transform: translateY(-50%);
            cursor: pointer;
        }
.form-control:focus{
    border-color: blue !important;
    
}
.form-control::placeholder{
    
    color: blue !important;
    font-size: 12px !important;
}

.form-control::placeholder {
            color: transparent;
        }

        /* When the input is focused, display the placeholder */
        .form-control:focus::placeholder {
            color: #999;
        }

        /* Style the label */
        .focus-label {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        /* When the input is focused, move the label up */
        .form-control:focus + .focus-label {
            top: -10px;
            font-size: 12px;
            /* color: #007bff; */
        }
        .fa-eye-slash {
    position: absolute !important;
    top: 28% !important;
    right: 4% !important;
    cursor: pointer !important;
    /* color: lightgray !important; */
    }
</style>
@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <h3 class="card-title text-muted text-center" style="color: blue !important;">Add Admin</h3>
            <ol class="breadcrumb">
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-5 grid-margin stretch-card" style="margin:-32px auto;">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" id="form_date">
                            <input type="hidden" name="role" value="admin">
                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="First Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Last Name">
                            </div> --}}

                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating name" name="first_name">
                                {{-- <div class="invalid-feedback">
                                    Please provide a valid First Name.
                                </div> --}}
                                <label class="focus-label">First Name </label>
                            </div>
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" name="last_name">
                                {{-- <div class="invalid-feedback">
                                    Please provide a valid Last Name.
                                </div> --}}
                                <label class="focus-label">Last Name </label>
                            </div>




                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Mobile</label>
                                <input type="text" class="form-control" name="phone" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Mobile">
                            </div> --}}
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating phone " name="phone"  pattern="\+?\d*"  oninput="validateInput(this)"  
                            
                                {{-- placeholder="Please enter a valid Mobile" --}}
                                 >
                                {{-- <div class="invalid-feedback">
                                    {{-- Please provide a valid Mobile. --}}
                                {{-- </div> --}} 
                                <label class="inner_label focus-label">Mobile</label>
                            </div>

                            <div class="form-group form-focus">
                                                
                                <input type="email" class="form-control floating inputbg email" name="email"
                                       {{-- placeholder="Please provide a valid Email." --}}
                                        >
                                {{-- <label class="inner_label focus-label">Email33 </label> --}}
                                <label for="username" class="inner_label focus-label" style="margin-left: 0px;">Email</label>

                            </div>
                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Email">
                            </div> --}}
                            <div class="form-group form-focus">
                                                
                                <select name="gender" class="form-control floating gender" id="gender">
                                    {{-- <option selected value=" "> select Gender</option> --}}
                                    <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                {{-- <div class="invalid-feedback">
                                    Please provide a valid Gender.
                                </div> --}}
                                <label class="focus-label">Gender</label>
                            </div>
                            <div class="form-group form-focus">
                                <input type="text" class="form-control datepicker1 floating dob" name="dob"   pattern="\+?\d*" oninput="validateInput(this)">
                                {{-- <div class="invalid-feedback">
                                    {{-- Please provide a valid Age. --}}
                                {{-- </div>  --}}
                                <label class="focus-label">Date of Birth</label>
                            </div>
                            <div class="form-group form-focus">
                                <select name="natinality" class="form-control floating natinality" id="natinality">
                                    <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                    @foreach(\App\Helpers\RecordHelper::getnationalities() as $getnationalities)
                                        <option value="{{ $getnationalities->id }}">{{ $getnationalities->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Country.
                                </div>
                                <label class="focus-label">Nationality </label>
                            </div>
                          
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating position"   oninput="validateInputText(this)"
                                       name="position">
                                {{-- <div class="invalid-feedback">
                                    Please provide a valid Position.
                                </div> --}}
                                <label class="focus-label">Position </label>
                            </div>
                            <div class="form-group form-focus">
                                <input type="text" class="form-control  floating addedby" name="addedby"   oninput="validateInputText(this)"  >
                                {{-- <div class="invalid-feedback">
                                    {{-- Please provide a valid Age. --}}
                                {{-- </div>  --}}
                                <label class="focus-label">Added By</label>
                            </div>
                            <div class="form-group form-focus">
                                <select name="country_id" class="form-control floating country_id" id="country_id">
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
                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Country</label>
                                <select class="js-example-basic-single form-select country_id" id="country_id" data-width="100%"
                                        name="country_id">
                                    <option value="">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <!-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Influencer State</label>
                                <select class="js-example-basic-single form-select state_id" data-width="100%"
                                        name="state_id">
                                    <option value="" disabled>Select State</option>

                                </select>
                            </div> -->
                            {{-- <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">City</label>
                                <select class="js-example-basic-single form-select city_id" data-width="100%" id="city_id"
                                        name="city_id">
                                    <option value="" disabled>Select City</option>

                                </select>
                            </div> --}}
                            <div class="form-group form-focus">
                                <select name="city_id" class="form-control floating city_id" id="city_id">
                                    <option selected hidden disabled value="">&nbsp;&nbsp;</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid City.
                                </div>
                                <label class="focus-label">City </label>
                            </div>
                            
                            <div class="form-group form-focus">
                                <input type="password" name="password" id="password" class="form-control login-user floating"
                                       placeholder="" aria-label="Password" aria-describedby="basic-addon1">
                                <!-- placeholder="8 Characters - 1 Capital, 1 Number, 1 Special" -->
                                
                                <div class="input-group-append">
                                    <span class="toggle-password" onclick="togglePassword('password')" style="cursor: pointer;">👁️</span>
                                </div>
                            
                                <label class="focus-label">Password</label>
                            </div>
                            <div class="form-group form-focus mb-0">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                       class="form-control login-user floating" placeholder="" aria-label="Cpassword"
                                       aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <span class="toggle-password" onclick="togglePassword('password_confirmation')" style="cursor: pointer;">👁️</span>
                                </div>
                                <div class="invalid-feedback">
                                    Please provide a valid Confirm Password.
                                </div>
                                <label class="focus-label">Confirm Password</label>
                            </div>
                            

                           
                            <div class="text-center font-bold" style="margin-top: 14px;">
                                <button type="submit" class="btn btn-primary me-2">Register</button>
                            </div>
                            
                            {{-- <button class="btn btn-danger">Cancel</button> --}}
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_scripts')
    <script type="text/javascript">
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

    function validateInputText(input) {
    // Remove any character that is not a letter (A-Z, a-z) or space
       input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
}
        function validateInput(input) {
            
    // Allow only digits and the '+' sign, and ensure '+' is only at the beginning
    input.value = input.value.replace(/[^\d+]/g, '').replace(/(?!^)\+/g, '');
}
$(document).ready(function() {

    $(".datepicker1").datepicker({
    dateFormat: "dd-M-yy",
    changeMonth:true,
    changeYear:true,
    yearRange: "1950:+0",
   
});
$(".datepicker1").change(function() {
    var input = $(this); // Store reference to `this`
    setTimeout(function() {
        input.parents('.form-focus').toggleClass('focused', input.val().length > 0);
    }, 10);
});



        if ($('.floating').length > 0) {
            // alert($('.floating').length);
            $('.floating').on('focus blur', function(e) {
                $(this).parents('.form-focus').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
            }).trigger('blur');
        }else{
            
        }

        // Toggle Password Visibility
        $('#togglePassword').on('click', function() {
            let input = $(this).siblings('input');
            let type = input.attr('type') === 'password' ? 'text' : 'password';
            input.attr('type', type);
            $(this).toggleClass('fa-eye fa-eye-slash');
        });
});
    

        

        $(document).on('change', '#country_id', function () {
            getCitiesByCountry($(this).val());
        });
       

        // function togglePassword(inputId, iconId) {
        //     var passwordInput = document.getElementById(inputId);
        //     // var toggleIcon = document.getElementById(iconId);

        //     if (passwordInput.type === 'password') {
        //         passwordInput.type = 'text';
        //         // toggleIcon.src = 'https://img.icons8.com/material-outlined/24/000000/invisible.png';
        //     } else {
        //         passwordInput.type = 'password';
        //         // toggleIcon.src = 'https://img.icons8.com/material-outlined/24/000000/visible.png';
        //     }
        // }

        $(document).on('submit', '#form_date', function (e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: api_url + 'users/store',
                type: 'post',
                dataType: "JSON",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.status == true) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                        })
                    } else {
                        Swal.fire({
                            title: 'Problem!',
                            text: response.message,
                            icon: 'warning',
                        })
                    }
                },
                error: function (response) {
                    Swal.fire({
                        title: 'Problem!',
                        text: 'Unexpected error',
                        icon: 'warning',
                    })
                }
            });
        });

        $(document).on('change', '#country_id', function () {
            var nationality_id = $(this).val();
            if (nationality_id) {
                $.ajax({
                    url: api_url + 'get-cities-by-country',
                    type: "POST",
                    dataType: "json",
                    data: {
                        "nationality_id": nationality_id
                    },
                    success: function (response) {
                        if (response.data.length > 0) {
                            var states = response.data;
                            $("#city_id").empty();
                            $("#brand_city_id").empty();

                            if (states) {
                                $.each(states, function (index, value) {
                                    $("#city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                    $("#brand_city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                });
                            }
                        } else {
                            $("#city_id").empty();
                            $("#brand_city_id").empty();
                        }
                    }
                });
            }
        });
    </script>
@endsection
