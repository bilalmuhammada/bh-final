
<?php
    $countries = \App\Helpers\RecordHelper::getCountries();
?>
<footer>

    <div class="container mb-30" style="margin-top:15px;">
        <div class="col-lg-12 col-md-12 col-12 m-10">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <h5>
                        Find amazing Businesses on the go.<br/>
                        <div style="color:#0000FF;"><b>Download our App Now!</b></div>
                    </h5>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <img src="<?php echo e(asset('images/iphone.png')); ?>" alt=" " height="80px" width="140px">
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <img src="<?php echo e(asset('images/google-play-store.png')); ?>" alt=" " height="45px">
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <img src="<?php echo e(asset('images/apple-store.png')); ?>" alt=" " height="45px">
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <img src="<?php echo e(asset('images/huawei-app-gallery.svg')); ?>" alt=" " height="45px">
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-30">
        <div class="col-lg-12 col-md-12 col-12 m-10">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-12 ">
                    <h2>Company</h2>
                    <ul>
                        <!-- <li>
                            <a href="<?php echo e(env('BASE_URL') . 'how-it-works?country=' . request()->country . '&city=' . request()->city); ?>">How It Works</a>
                        </li> -->
                        <li>
                            <a href="<?php echo e(env('BASE_URL') . 'about-us?country=' . request()->country . '&city=' . request()->city); ?>">About Us</a>
                        </li>
                        <!-- <li>
                            <a href="# ">Advertising</a>
                        </li> -->
                        
                        <li>
                            <a href="<?php echo e(env('BASE_URL') . 'contact-us'); ?>">Contact Us</a>
                        </li>
                        <li>
                            <a href="<?php echo e(env('BASE_URL') . 'terms-of-use?country=' . request()->country . '&city=' . request()->city); ?>">Terms of Use</a>
                        </li>
                        <li>
                            <a href="<?php echo e(env('BASE_URL') . 'privacy-policy?country=' . request()->country . '&city=' . request()->city); ?>">Privacy Policy</a>
                        </li>
                       
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-12 desktop-view" style="border:0px solid red;">
                <h2 style="text-align:center;">Countries</h2>
                    <div class="row" style="margin-top:-10px;">
                    <div class="col-lg-6 col-md-6 col-12" style="border:0px solid red;">
                    <ul style="width:100%;text-align:justify;margin-left:50px;">
                        <?php $__currentLoopData = $countries->take(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(env('BASE_URL') . 'home?country=' . $country->id); ?>"><?php echo e($country->nice_name); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                    </div> 
                    <div class="col-lg-6 col-md-6 col-12" style="border:0px solid red;">
                    <!-- <h2><?php echo e($countries->firstWhere('id', request()->country ?? 99)->nice_name); ?></h2> -->
                    <ul style="width:100%;text-align:justify;margin-left:50px;">
                        <?php $__currentLoopData = $countries->skip(8)->take(12); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="mx-auto">
                                <a href="<?php echo e(env('BASE_URL') . 'home?country=' . $country->id); ?>"><?php echo e($country->nice_name); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                    </div> 
                    </div>
                   
                </div>
                <div class="col-lg-2 col-md-6 col-12 mobile-view">
                    <h2>Countries</h2>
                    <ul>
                        <?php $__currentLoopData = $countries->take(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(env('BASE_URL') . 'home?country=' . $country->id); ?>"><?php echo e($country->nice_name); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-12 mobile-view">
                    <!-- <h2>Countries</h2> -->
                    
                    <ul>
                        <?php $__currentLoopData = $countries->skip(8)->take(9); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <li>
                                <a href="<?php echo e(env('BASE_URL') . 'home?country=' . $country->id); ?>"><?php echo e($country->nice_name); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-12 desktop-view">
                    <h2 style="text-align:center;border:0px solid red;">Socials</h2>
                    <ul style="text-align:center;border:0px solid red;">
                        <li style="margin-bottom: 5px;">
                            <a href="# " target="_blank ">
                                <img src="<?php echo e(asset('images/socialicon/insta.png')); ?>" alt="" width="30" height="30">
                            </a>
                        </li>
                        <li style="margin-bottom: 5px;">
                            <a href="# " target="_blank ">
                                <img src="<?php echo e(asset('images/socialicon/twitter.png')); ?>" alt="" width="30"
                                     height="30">
                            </a>
                        </li>
                        
                        <li style="margin-bottom: 5px;">
                            <a href="# " target="_blank ">
                                <img src="<?php echo e(asset('images/socialicon/fb.png')); ?>" alt="" width="30" height="30">
                            </a>
                        </li>
                        <li style="margin-bottom:5px;">
                            <a href="# " target="_blank ">
                                <img src="<?php echo e(asset('images/socialicon/youtube.png')); ?>" alt="" width="30" height="30">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-12 mobile-view">
                    <h2>Socials</h2>
                    <ul>
                        <li>
                            <a href="# " target="_blank ">
                                <img src="<?php echo e(asset('images/facebook-svgrepo-com.svg')); ?>" alt="" width="30" height="30">
                            </a>
                        </li>
                        <li>
                            <a href="# " target="_blank ">
                                <img src="<?php echo e(asset('images/twitter-color-svgrepo-com.svg')); ?>" alt="" width="30"
                                     height="30">
                            </a>
                        </li>
                        <a href="# " target="_blank ">
                            <img src="<?php echo e(asset('images/instagram-1-svgrepo-com.svg')); ?>" alt="" width="30" height="30">
                        </a>
                        <li>
                            <a href="# " target="_blank ">
                                <img src="<?php echo e(asset('images/youtube-svgrepo-com.svg')); ?>" alt="" width="30" height="30">
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="col-lg-2 col-md-6 col-12 ">
                    <h2>Support</h2>
                    <ul>
                        <li>
                            <a href="<?php echo e(env('BASE_URL') . 'contact-us'); ?>" style="cursor:help;">Help</a>
                        </li>
                        <li>
                            <a href="<?php echo e(env('BASE_URL') . 'contact-us'); ?>">Contact Us</a>
                        </li>
                        <li>
                            <a href="tel:00000000">Call Us</a>
                        </li>
                    </ul>
                </div> -->
                <!-- <div class="col-lg-2 col-md-6 col-12 ">
                    <h2>Languages</h2>
                    <ul>
                        <li>
                            <a href="#">English</a>
                        </li>
                        <li>
                            <a href="#">العربية</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
    <!-----reserve section----->
    <div class="container">
        <div class="col-lg-12 col-md-12 mb-12 col-12">
            <div class="row">
                <!-- 1 -->
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- <div class="logo ">
                        <a href="<?php echo e(env('BASE_URL') . 'home'); ?>"><img src="<?php echo e(asset('images/businesshub.png ')); ?>"
                                                                    title="businesshub " alt="businesshub "
                                                                    width="185 "/></a>
                    </div> -->
                </div>
                <!-- 2 -->
                <div class="col-lg-4 col-md-6 col-4">

                </div>
                <!-- 3-->
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="social-icon-footer text-center">
                        <!-- <a href="# " target="_blank "> -->
                        <!-- <img src="<?php echo e(asset('images/consumer-protection-badge.png')); ?>" alt="" width="136" height="136"> -->
                        <!-- </a> -->
                    </div>
                </div>
                <!-- finish -->
            </div>
        </div>
    </div>
    <!-- footer copyright area start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                <div class="logo text-center">
                    <a href="<?php echo e(env('BASE_URL')); ?>">
                        <img src="<?php echo e(asset('images/businesshub.png')); ?>" title="businesshub" alt="businesshub "
                             width="185 "/>
                    </a>
                </div>
            </div>
        </div>
        <!-- footer copyright area start -->
        <div class="row copyright ">
            <div class="col-lg-12 ">
                <p style="color:#00498e;text-align:center;">© BusinessHub.com 2023, All Rights Reserved.</p>
            </div>
        </div>
        <!-- footer copyright area finish -->
    </div>
    <!-- footer copyright area finish -->
    </div>
</footer>
<?php /**PATH C:\wamp64\www\bussinesshup\bh3\businesshub-web\resources\views/layout/footer.blade.php ENDPATH**/ ?>