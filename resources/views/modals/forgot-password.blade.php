<!-- Login Modal -->
<div class="modal" id="forgotModal" style="border:0px solid red;margin-top:-35px;">
    <div class="modal-dialog modal-sm" style="border:0px solid red; width:350px;margin-right:38%;">
        <div class="modal-content" style="background-color: rgba(33, 34, 35, .90) !important;border-radius:10px;">
            <div class="modal-body">
                <!-- login area start -->
                <div class="">
                    <div class="loginarea">
                        <!-- login title start -->
                        <div class="sigh-in">
                            <h3 style="font-weight: bold;line-height: 20px;color: #A17A4E;" class="login-heading">
                                <div style="border-right: 0px solid #ffc000;text-align:center;">Forgot Password</div>
                            </h3>
                        </div>
                        <!-- login title finish -->
                        <form class="forgot-password-form">
                            <div class="alert-div" style="display: none">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <div class="alert-text"></div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            <!-- user name area start -->
                            <div class="input-group mb-3">
                                <!-- <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">
                                                            <img src="{{asset('images/envelop.png')}}" width="33"
                                                                 height="19"/>
                                                        </span>
                                </div> -->
                                <input type="email" name="email" class="form-control login-user email"
                                       placeholder="Email Address" aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                            <!-- user name area finish -->
                            <!-- submit button start -->
                            <div class="login-submit-button-area">
                                <a class="btn submit-button forgot-submit" style="color: #FFFF;">Submit</a>
                            </div>
                            <!-- submit button finish -->
                        </form>
                        <div style="text-align:center;">
                           {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">
                                Close
                            </button> --}}
                        </div>
                    </div>
                </div>
                <!-- login area start -->
            </div>
            <!-- Modal footer -->
        </div>
    </div>
</div>
<!-- Login Modal -->
