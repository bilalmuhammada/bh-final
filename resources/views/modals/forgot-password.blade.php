<!-- Login Modal -->

<style>
    #colorTowhite:hover{
   color: white !important;
    }
</style>
<div class="modal" id="forgotModal" style="border:0px solid red;margin-top:-35px;">
    <div class="modal-dialog modal-sm" style="border:0px solid red; width:350px;margin-right:38%;">
        <div class="modal-content" style="background-color: rgba(33, 34, 35, .90) !important;border-radius:0.3rem;">
            <div class="modal-body">
                <!-- login area start -->
                <div class="">
                    <div class="loginarea">
                        <!-- login title start -->
                        <a class="close close-signup-btn" style="color: white;">&times;</a>
                        <div class="sigh-in">
                            <h5 style="font-weight: bold;line-height: 20px;color: #A17A4E;" class="login-heading">
                                <div style="border-right: 0px solid #ffc000;text-align:center;">Forgot Password</div>
                            </h5>
                        </div>
                        <!-- login title finish -->
                        <form class="forgot-password-form" style="margin-left: 13px; width: 18rem;">
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
                                <input type="email" name="email" class="form-control login-user email" style="padding: 12px 20px 12px 10px !important;"
                                       placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                            <!-- user name area finish -->
                            <!-- submit button start -->
                            <div class="login-submit-button-area">
                                <a class="btn submit-button forgot-submit" style="color: #fff !important; background-color: #0000FF !important;">Submit</a>
                            </div>
                            <!-- submit button finish -->
                        </form>
                        <div class="Forgot" style="font-size: 12px; margin-left: -18px;margin-top: -4px;">
                            
                           <span >New to BusinessHub?  <a class="register-btn " style="color: #007bff;"  id="colorTowhite"> Click Here </a></span>
                               
                           </div>
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

