<!-- Register Modal -->
<div class="modal" id="registerModal" style="border:0px solid red;margin-top:-60px;">
    <div class="modal-dialog" style="border:0px solid red; width:500px;">
        <div class="modal-content" style="background-color: rgba(33, 34, 35, .90) !important;border-radius:10px;">
        
            <!-- Modal body -->
            <div class="modal-body">
                <div class="ragisterarea">
                <a class="close close-signup-btn">&times;</a>
                    <!-- register form title start -->
                    <div class="sigh-in">
                        <h3 style="font-weight: bold;line-height: 20px;color: #A17A4E;text-align:center;"
                            class="register-heading">
                            Sign up
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
                        <div class="col-md-12">
                            <div class="row justify-content-md-center">
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="first_name" id="first_name"
                                               class="form-control login-user"
                                               placeholder="First Name" aria-label="First Name"
                                               aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="last_name" id="last_name"
                                               class="form-control login-user"
                                               placeholder="Last Name" aria-label="Last Name"
                                               aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="email" class="form-control login-user email"
                                               placeholder="Email" aria-label="Email" aria-describedby="basic-addon1"
                                               onfocus="this.value=''">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="phone" id="phone" class="form-control login-user"
                                               placeholder="Mobile" aria-label="Mobile" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="password" id="password" class="form-control login-user"
                                               placeholder="Password" aria-label="Password"
                                               aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" name="password_confirmation" id="password_confirmation"
                                               class="form-control login-user"
                                               placeholder="Confirm Password" aria-label="Cpassword"
                                               aria-describedby="basic-addon1">
                                    </div>
                                </div>

                                <?php
                                $countries = \App\Helpers\RecordHelper::getCountries();
                                $cities = \App\Helpers\RecordHelper::getCities(request()->country);
                            ?>

                                <div class="col-md-6">
                                    <div class="input-group mb-3" style="    padding: 5px 20px;
                                    border: 1px solid #A17A4E">
                                        <select name="country" id="country"
                                                    class="form-control country_dropdown login-user"
                                                    style="width:100%;color:#fff !important;">
                                                <?php if($cities->count() < 1): ?>
                                                    <option value="" selected>Select</option>
                                                <?php endif; ?>
                                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        <?php echo e($country->id == request()->country ? 'selected' : ''); ?> data-flag-url="<?php echo e($country->image_url); ?>"
                                                        value="<?php echo e($country->id); ?>"
                                                        style="font-size:8px !important;"> <?php echo e($country->nice_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="input-group mb-3" style="    padding: 5px 20px;
                                    border: 1px solid #A17A4E">
                                        <select name="cities" id="cities"
                                        class="form-control country_dropdown login-user"
                                        style="width:100%;color:#fff !important;">
                                    <?php if($cities->count() < 1): ?>
                                        <option value="" selected>Select</option>
                                    <?php endif; ?>
                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            <?php echo e($city->id == request()->city ? 'selected' : ''); ?> data-flag-url="<?php echo e($city->image_url); ?>"
                                            value="<?php echo e($city->id); ?>"
                                            style="font-size:8px !important;"> <?php echo e($city->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- </div> -->

                        <!-- clicking start -->
                        <p class="by" >
                            By clicking on register, you agree to our
                            <a href="<?php echo e(env('BASE_URL').'terms-of-use'); ?>" style="color:#0070cc;">Terms of Service</a>
                            and
                            <a href="<?php echo e(env('BASE_URL').'privacy-policy'); ?>" id="myModal" style="color:#0070cc;">Privacy
                                Policy</a>.
                        </p>
                        <!-- clicking finish -->
                        <!-- Enter Captcha start -->
                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                        <!-- Enter Captcha finish -->
                        <!-- Register button start -->
                        <div class="register-button-area"
                             style="border:0px solid red;text-align:center;margin-top:-20px;">
                            <a class="btn register-button" style="color: #FFFF;margin-top: 13px;">Register </a>
                        </div>
                        <!-- Register button finish -->
                        <div style="text-align:center;">
                            
                        </div>
                    </form>
                </div>
            </div>
            <!-- Modal footer -->
        </div>
    </div>
</div>
<!-- Register Modal -->
<?php /**PATH C:\wamp64\www\bussinesshup\bh3\businesshub-web\resources\views/modals/register.blade.php ENDPATH**/ ?>