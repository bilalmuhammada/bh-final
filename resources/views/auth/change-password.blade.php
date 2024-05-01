@extends('layout.master')
@section('content')
    <section class="padtb50">
            <div class="container">
                <div class="row justify-content-md-center mb-20px">

                    <!-- login area start -->
                    <div class="col-md-6 col-lg-5 col-xl-4 about-us-text-area">
                        <div class="row">
                            <div class="col">
                                <div class="alert-div" style="display: none">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <div class="alert-text">here</div>
                                        {{--                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                                        {{--                                        <span aria-hidden="true">&times;</span>--}}
                                        {{--                                    </button>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="password-alert" style="display: none">Your Password has been changed Successfully</div>
                        <div class="loginarea">
                            <!-- login title start -->
                            <div class="changepassword">
                                <h1>Change Password</h1>
                            </div>
                            <!-- login title finish -->
                            <form class="reset-password-form">
                                <!-- password area start -->
                                @if (empty($password_reset_code))
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><img src="{{asset('images/lock.png')}}" width="33" height="20"/></span>
                                        </div>
                                        <input type="password" name="old_password" class="form-control login-user" placeholder="Old Password" aria-label="oldPassword" aria-describedby="basic-addon1">
                                    </div>
                                @else
                                    <input type="hidden" name="password_reset_code" class="password_reset_code" value="{{$password_reset_code}}">
                                @endif
                                <!-- password area finish -->
                                <!-- password area start -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><img src="{{asset('images/lock-1.png')}}" width="33" height="24"/></span>
                                    </div>
                                    <input type="password" name="password" class="form-control login-user" placeholder="New Password" aria-label="newPassword" aria-describedby="basic-addon1">
                                </div>
                                <!-- password area finish -->
                                <!-- password area start -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><img src="{{asset('images/lock-2.png')}}" width="33" height="21"/></span>
                                    </div>
                                    <input type="password" name="password_confirmation" class="form-control login-user" placeholder="Confirm Password" aria-label="confPassword" aria-describedby="basic-addon1">
                                </div>
                                <!-- password area finish -->

                                <!-- submit button start -->
                                <div class="login-submit-button-area">
                                    <a href="#" class="btn btn-primary reset-password-submit">Update</a></div>
                                <!-- submit button finish -->
                            </form>
                        </div>
                    </div>
                    <!-- login area start -->
                </div>
            </div>
        </section>
       @endsection
