<!-- Login Modal -->
<div class="modal" id="loginModal" style="border:0px solid red;margin-top:-35px;">
    <div class="modal-dialog modal-sm" style="border:0px solid red; width:350px;">
        <div class="modal-content" style="background-color: rgba(33, 34, 35, .90) !important;border-radius:10px;">
            <div class="modal-body">
                <!-- login area start -->
                <div class="">
                    <div class="loginarea">
                        <!-- login title start -->
                        <div class="sigh-in">
                            <h3 style="font-weight: bold;line-height: 20px;color: #A17A4E;" class="login-heading">
                                <div style="border-right: 0px solid #ffc000;text-align:center;">Sign In</div>
                            </h3>
                        </div>
                        <!-- login title finish -->
                        <form class="login-form">
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
                                                            <img src="<?php echo e(asset('images/envelop.png')); ?>" width="33"
                                                                 height="19"/>
                                                        </span>
                                </div> -->
                                <input type="email" name="email" class="form-control login-user"
                                       placeholder="Email Address" aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                            <!-- user name area finish -->
                            <!-- password area start -->
                            <div class="input-group mb-3">
                            <!-- <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">
                                                            <img src="<?php echo e(asset('images/lock.png')); ?>" width="33"
                                                                 height="20"/>
                                                        </span>
                                </div> -->
                                <input type="password" name="password" class="form-control login-user"
                                       placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                            </div>
                            <!-- password area finish -->
                            <!-- forget password area start -->
                            <div class="Forgot">
                            <!-- <a href="<?php echo e(env('BASE_URL') . 'forgot-password'); ?>" style="color:#fff !important;"> Forgot Password </a> -->
                                <a class="show-forgot-btn"> Forgot Password </a>
                            </div>
                            <!-- forget password area finish -->
                            <!-- submit button start -->
                            <div class="login-submit-button-area">
                                <a class="btn login-submit-button" style="color: #FFFF;">Submit</a>
                            </div>
                            <!-- submit button finish -->
                        </form>
                        <!-- or sign in using start -->
                        <div class="or" style="margin-top:-12px;">
                            <p style="text-align:center;color:#A17A4E;font-size:11px;">______OR SIGN IN WITH______</p>
                        </div>
                        <!-- or sign in using finish -->
                        <!-- social area start -->
                        <div class="login-social-modal">
                            <span>
                                <img src="<?php echo e(asset('images/instagram.png')); ?>"
                                     width="25" height="25"/>
                            </span>
                            <span style="margin:0 10px;">
                                <img src="<?php echo e(asset('images/fb.png')); ?>" width="25" height="25"/>
                            </span>
                            <span>
                                <img src="<?php echo e(asset('images/twitter.png')); ?>"
                                     width="25" height="25"/>
                            </span>
                            <span>
                                <a href="<?php echo e(env('BASE_URL') . 'auth/google'); ?>">
                                    &nbsp;<img src="<?php echo e(asset('images/goog.png')); ?>" width="25" height="25"/>
                                </a>
                            </span>
                        </div>
                        <!-- social area finish -->
                        <div style="text-align:center;">
                            
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
<?php /**PATH C:\wamp64\www\bussinesshup\bh3\businesshub-web\resources\views/modals/login.blade.php ENDPATH**/ ?>