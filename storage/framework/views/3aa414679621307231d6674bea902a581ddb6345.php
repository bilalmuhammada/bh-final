
<?php $__env->startSection('content'); ?>

    <!--------ad area --------->
    <section>
        <!-- <div class="container slider-area"> -->
        <div class="cont-w slider-area desktop-view">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo e($ad->main_image_url); ?>" alt="Los Angeles" width="100%" height="270px">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo e(asset('images/hero_image_7.jpeg')); ?>" alt="Chicago" width="100%" height="270px">
                    </div>
                </div>
            </div>
        </div>
        <div class="container slider-area mobile-view">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo e($ad->main_image_url); ?>" alt="Los Angeles" width="100%" height="270px">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo e(asset('images/hero_image_7.jpeg')); ?>" alt="Chicago" width="100%" height="270px">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- <section>
        <div class="cont-w" style="margin-bottom: 7px;">
            
        <img src="<?php echo e($ad->main_image_url); ?>" alt="Los Angeles" width="100%" height="257">
        </div>
    </section> -->

    <section>
        <div class="cont-w desktop-view" style="border-bottom:2px solid #eee;">
            <div class="col-lg-12 col-md-12 mb-20 col-12 mt-10" style="">
                <div class="row">
                    <div class="cat_btn" style="margin:3px 5px;">
                        <a href="<?php echo e(env('BASE_URL') . 'home?country=' . request()->country . '&city=' . request()->city); ?>"
                           style="color:#0000FF;font-size:12px;">Home</a>
                        <i class="fa fa-chevron-right" style="font-size:11px;"></i>
                    </div>
                    <div class="cat_btn" style="margin:3px 5px;">
                        <a href="<?php echo e(env('BASE_URL') . 'ads/' . $ad->subcategory_id . '?country=' . request()->country . '&city=' . request()->city); ?>"
                           style="color:#0000FF;font-size:12px;"><?php echo e($ad->subcategory_name); ?></a>
                        <i class="fa fa-chevron-right" style="font-size:11px;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="cont-w desktop-view">
            <div class="col-md-12" style="border:0px solid red;">
                <div class="row">
                    <div class="col" style="border:0px solid red;">
                        <div class="row">
                            <h3 style="border:0px solid red;"><b><?php echo e($ad->title ?? 'Title N?A'); ?></b></h3>
                        </div>
                        <div class="row">
                            <span class="text-muted"
                                  style="font-size: 12px;">Posted <?php echo e($ad->created_at_time_diff); ?></span>
                        </div>
                    </div>
                    <div class="col" style="text-align:right;">
                        <div class="row text-right" style="border:0px solid red;">
                            <div
                                style="font-weight:bold;font-size:25px;text-align:right;border:0px solid red;width:100%;">
                                <a href=""
                                   style="color: #0000FF;font-weight:bold;"><?php echo e(\App\Helpers\SiteHelper::priceFormatter($ad->price)); ?>

                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mobile-view">
            <div class="col-md-12" style="border:0px solid red;">
                <div class="row">
                    <div class="col" style="border:0px solid red;">
                        <div class="row">
                            <h4 style="border:0px solid red;"><b><?php echo e($ad->title ?? 'Title N?A'); ?></b></h4>
                        </div>
                        <div class="row">
                            <span class="text-muted"
                                  style="font-size: 12px;">Posted <?php echo e($ad->created_at_time_diff); ?></span>
                        </div>
                    </div>
                    <div class="col" style="text-align:right;">
                        <div class="row text-right" style="border:0px solid red;">
                            <div
                                style="font-weight:bold;font-size:25px;text-align:right;border:0px solid red;width:100%;">
                                <a href=""
                                   style="color: #0000FF;font-weight:bold;"><?php echo e(\App\Helpers\SiteHelper::priceFormatter($ad->price)); ?>

                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section>
        <div class="cont-w">
            <div class="col-lg-12 col-md-12 col-12" style="border:0px solid red;">
                <div class="row">
                    <div class="col-lg-10 col-md-10" style="border:0px solid red;">
                    <div class="row">
                        <h3 style="border:0px solid red;"><b><?php echo e($ad->title ?? 'Title N?A'); ?>dd</b></h3>
                        </div>
                        <div class="row">
                        <span class="text-muted" style="font-size: 12px;">• Posted <?php echo e($ad->created_at_time_diff); ?></span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2">
                    <div class="row text-center" style="border:0px solid red;">
                        <h4 style="font-weight:bold;font-size:25px;text-align:right;"><a href="" style="color: #0000FF;font-weight:bold;"><?php echo e(\App\Helpers\SiteHelper::priceFormatter($ad->price)); ?>8798987</a></h4>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section> -->

    <section>

        <div class="container mobile-view">
            <div class="col-lg-12 col-md-12 mb-30 col-12 mt-10" style="border:0px solid red;">
                <div class="row">
                    <div class="cat_btn" style="margin:7px 5px;">
                        <a href="<?php echo e(env('BASE_URL') . 'home'); ?>" style="color:#0000FF;font-size:12px;">Home</a>
                        <i class="fa fa-chevron-right" style="font-size:11px;"></i>
                    </div>
                    
                    
                    
                    
                    <div class="cat_btn" style="margin:7px 5px;">
                        <a href="<?php echo e(env('BASE_URL') . 'ads/' . $ad->subcategory_id); ?>"
                           style="color:#0000FF;font-size:12px;"><?php echo e($ad->subcategory_name); ?></a>
                        <i class="fa fa-chevron-right" style="font-size:11px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" style="border:0px solid red;">
            <div class="col-lg-12 col-md-12 col-12" style="border:0px solid red;">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-12" style="border:0px solid red;">
                        <div class="row">
                            <!-----content----->
                            <div class="col-lg-12 col-md-12 col-12"
                                 style="margin-bottom:10px;width:800px;border:0px solid green;position:relative;top:55px;z-index:1000;">
                                <span style="font-size: 13px;float:right;position:relative;right:30px;cursor:pointer;">
                                    <i class="fa favourite-btn <?php echo e($ad->is_favourite ? 'fa-heart' : 'fa-heart-o'); ?>"
                                       is-favourite="<?php echo e($ad->is_favourite ? '1' : '0'); ?>" ad-id="<?php echo e($ad->id); ?>"
                                       style="background:#fff;padding:10px 13px;border-radius:2px;"> Favourite</i>&nbsp;
                                    <i class="fa fa-share share-btn" ad-id="<?php echo e($ad->id); ?>" title="Copy Ad link"
                                       style="background:#fff;padding:10px 10px;border-radius:2px;"> Share</i>
                                </span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="column small-11 small-centered">
                                    <div class="cSlider cSlider--single" style="background-color:#eee;">
                                        <?php $__currentLoopData = $ad->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="cSlider__item">
                                                <!-- <h2> -->
                                                <img src="<?php echo e($image->listing_image_url); ?>" alt="Listing Image"
                                                     width="100%" height="250"
                                                     style="height:272px;">
                                                <!-- </h2> -->
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="cSlider cSlider--nav">
                                        <?php $__currentLoopData = $ad->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="cSlider__item" style="margin-top:15px;">
                                                <img src="<?php echo e($image->listing_image_url); ?>" alt="Listing Image"
                                                     width="100%" height="300"
                                                     style="height:60px;border:2px solid #0000FF;border-radius:6px;">
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;width:800px;">
                                <span style="font-size: 13px;float:right;position:relative;right:70px;">( <?php echo e($ad->images->count()); ?> Photos )</span>
                            </div>
                            <!-----content----->
                            <!-- <hr style="width: 100%; height:3px; color:#eee;background:#eee;"> -->
                            <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <p style="font-size: 14px;"><b>Business Type:</b>
                                            <span><?php echo e($ad->details->business_type ?? '....'); ?></span></p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <p style="font-size: 14px;"><b>Trade License:</b>
                                            <span><?php echo e($ad->details->trade_licence_type ?? '....'); ?></span></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <p style="font-size: 14px;"><b>Established Year:</b>
                                            <span><?php echo e($ad->details->established_year ?? '....'); ?></span></p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <p style="font-size: 14px;"><b>Lease Term:</b>
                                            <span><?php echo e($ad->details->lease_term ?? '....'); ?></span></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <p style="font-size: 14px;"><b>Size SqM:</b>
                                            <span><?php echo e($ad->details->size_sqm ?? '....'); ?></span></p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <p style="font-size: 14px;"><b>No. of Employees:</b>
                                            <span><?php echo e($ad->details->no_of_employees ?? '....'); ?></span></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <p style="font-size: 14px;"><b>Reason for Sale:</b>
                                            <span><?php echo e($ad->details->reason_for_sale ?? '....'); ?></span></p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <p style="font-size: 14px;"><b>Open for Partnership:</b>
                                            <span><?php echo e(!empty($ad->details->open_for_partnership) && $ad->details->open_for_partnership == 1 ? 'Yes' : 'NO'); ?></span>
                                        </p>
                                    </div>
                                </div>


                            </div>
                            <!---------->
                            <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
                                <h4><b>Products & Services Offered</b></h4>
                                <p style="font-size: 14px;"><?php echo e($ad->details->products_and_services_offered ?? '....'); ?></p>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
                                <h4><b>Description</b></h4>
                                <p style="font-size: 14px;"><?php echo e($ad->description); ?></p>

                            </div>
                            <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
                                
                                <h4><b>Files</b></h4>
                                <p style="font-size: 14px;">
                                    <embed class="<?php if(empty($ad->document_listing_approval_status) || $ad->document_listing_approval_status == 'rejected'): ?> blur-image <?php endif; ?>" src="https://www.buds.com.ua/images/Lorem_ipsum.pdf"
                                           type="application/pdf" width="200px" height="200px"/>
                                    <br/>
                                    <div class="btn-next">
                                        <?php if(empty($ad->document_listing_approval_status) || $ad->document_listing_approval_status == 'rejected'): ?>
                                            <a href="" class="btn document-download-request">Send Request</a>
                            <?php elseif($ad->document_listing_approval_status == 'approved'): ?>
                                            <a href="#" class="btn download-document">Download</a>
                                <?php else: ?>
                                    <p class="approval-status">Waiting for approval</p>
                                <?php endif; ?>

                                <p class="approval-status" style="display: none">Waiting for approval</p>
                            </div>
                            </p>
                        </div>
                        <!-----add----->
                        <hr style="width: 100%; height:3px; color:#eee;background:#eee;">
                        <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
                            <h4><b>Location</b></h4>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 co-12">
                                    <div style="border-radius:5px;">
                                        <h6 style="text-align: left;font-size:13px;font-weight:bold;">
                                            <span><i class="fa fa-map-marker"></i> <?php echo e($ad->location_name); ?></span>
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 co-12" style="padding:10px;">
                                    <div style="border-radius:5px;">
                                        <div style="width:370px; height:150px; border:0;" id="map"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="width: 100%; height:3px; color:#eee;background:#eee;">
                        <div style="font-weight: bold;font-size:16px;">
                            Is there an issue?

                            <?php $report_text = "Report this ad"; $report_class = "report-ad-btn"; ?>
                            <?php if($ad->is_reported_by_this_user): ?>
                                <?php $report_text = "Ad Reported"; $report_class = ""; ?>
                            <?php endif; ?>
                            <a class="<?php echo e($report_class); ?>" ad-id="<?php echo e($ad->id); ?>"
                               title="<?php echo e($report_text); ?>"
                               style="color: #0000FF;">
                                <?php echo e($report_text); ?>

                            </a>
                        </div>
                        <hr style="width: 100%; height:3px; color:#eee;background:#eee;">
                        <!---------------------->
                    </div>
                </div>
                <!--  desktop view -->
                <div class="col-lg-4 col-md-4 col-12 desktop-view" style="border:0px solid red;">
                    <div class="row">
                        <div>&nbsp;&nbsp;&nbsp;&nbsp;</div>
                        <div class="col-lg-12 col-md-12 col-12" style="border:0px solid red;margin-right:-0px;">
                            <div class="inner"
                                 style="border: 2px solid #eee;border-radius:5px;margin:0px 0px 0px 0px;padding:15px 0 0 15px;">
                                <p class="text-muted" style="font-size: 13px;padding-left:12px;">Posted by</p>
                                <div class="row" style="padding-left:15px;padding-bottom:10px;">
                                    <div class="col-6"><b> <?php echo e($ad->created_by_user->name); ?></b></div>
                                    <div class="col-6">
                                    <span
                                    style="font-size: 11px;padding:5px;border-radius:7px;color:white;margin-left:12px;"
                                    class="bg-success"><i class="fa fa-check-circle"></i> VERIFIED USER</span>
                                    </div>
                                    </div>
                                    <?php if(session()->has('user')): ?>
                                    <div class="col-12" style="padding-bottom:10px;">
                                    <img src="<?php echo e($ad->created_by_user->image_url); ?>" alt="img" width="100" height="100"
                                         style="border-radius: 2%;">
                                    </div>
                                    <?php endif; ?>
                                
                                <p class="text-muted btn-next" style="padding-left:12px;">

                                    <?php if(empty($ad->phone_listing_approval_status) || $ad->phone_listing_approval_status == 'rejected'): ?>
                                        <a href="#" class="btn btn-lg phone-show-request" style="font-size: 13px;">Show
                                            Phone
                                            Number</a>
                                    <?php elseif($ad->phone_listing_approval_status == 'approved'): ?>
                                        <b><?php echo e($ad->created_by_user->phone); ?></b>
                                    <?php else: ?>
                                        <p class="phone-approval-status">Waiting for phone no approval</p>
                                    <?php endif; ?>

                                    <p class="phone-approval-status" style="display: none">Waiting for phone no approval</p>

                                </p>
                                <p class="text-muted btn-next" style="padding-left:12px;">
                                    <a href="#" class="btn btn-lg start-chat" style="font-size: 13px;"
                                       user-id="<?php echo e($ad->created_by_user->id); ?>"> Chat with Seller &nbsp; &nbsp;  &nbsp;  &nbsp; </a>
                                </p>
                            </div>
                        </div>
                        <!-- ad area -->
                        <?php $__currentLoopData = $ad->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-12 col-md-12 col-12">
                                <img src="<?php echo e($image->listing_image_url); ?>" alt="Listing Image" width="100%"
                                     height="150" style="margin-bottom: 10px;">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <!--  mobile view -->
                <div class="col-12 mobile-view" style="border:0px solid red;">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12" style="border:0px solid red;margin-right:-30px;">
                            <div class="inner"
                                 style="border: 2px solid #eee;border-radius:5px;margin:0px 0px 10px 0px;padding:15px;">
                                <p class="text-muted" style="font-size: 13px;padding-left:12px;">Posted by</p>
                                <p class="text-muted" style="font-size: 15px;padding-left:12px;">
                                    <b><?php echo e($ad->created_by_user->name); ?></b></p>
                                <span
                                    style="font-size: 11px;padding:5px;border-radius:7px;color:white;margin-left:12px;"
                                    class="bg-success"><i class="fa fa-check-circle"></i> VERIFIED USER</span>
                                <p class="text-muted" style="font-size: 15px;padding-left:12px;"><b>Joined
                                        on <?php echo e($ad->created_by_user->created_at_formatted); ?></b></p>
                                <p class="text-muted" style="font-size: 15px;padding-left:12px;">
                                    <b><?php echo e($ad->created_by_user->active_ads_count); ?> items live</b>
                                </p>
                                <p class="text-muted btn-next" style="font-size: 15px;padding-left:12px;">
                                    <?php if($ad->hide_phone): ?>
                                        <a href="#" class="btn" style="font-size: 13px;">Show Phone Number</a>
                                    <?php else: ?>
                                        <b><?php echo e($ad->created_by_user->phone); ?></b>
                                    <?php endif; ?>
                                </p>
                                <div style="text-align: center;">
                                    <a href="" class="btn btn-lg"
                                       style="background-color: #0000FF;color:white;font-size:15px;padding:7px 10px;">
                                        <b><i class="fa fa-comment" style="color:white;"></i> Chat with Seller</b>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <!-- ad area -->
                        <?php $__currentLoopData = $ad->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-12 col-md-12 col-12">
                                <img src="<?php echo e($image->listing_image_url); ?>" alt="Listing Image" width="100%"
                                     height="150" style="margin-bottom: 10px;">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <!---------------------->
                <div class="col-lg-12 col-md-12 col-12" style="margin-bottom:10px;">
                    <h3><b>Similar Ads</b></h3>
                    <!------ad----->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                            <?php
                                $similar_ads = \App\Helpers\RecordHelper::getAdsBySubcategory($ad->subcategory_id)->take(5);
                            ?>
                            <?php $__currentLoopData = $similar_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $similar_ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!----------->
                                    <div class="col-lg-2 col-md-2 col-6">
                                        <div class="inner">
                                            <a href="<?php echo e(env('BASE_URL') . 'ads/detail/' . $similar_ad->id . '?country=' . request()->country . '&city=' . request()->city); ?>">
                                                <div class="img"
                                                     style="background-image:url(<?php echo e($similar_ad->main_image_url); ?>);height:150px;width:100%;border-radius:10px;">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4 col-4"
                                                                     style="margin:5px;text-align:right;">
                                                                    <span
                                                                        style="float: right;position:relative;left:120px;">
                                                                     <i class="fa <?php echo e($similar_ad->is_favourite ? 'fa-heart' : 'fa-heart-o'); ?>"
                                                                        is-favourite="<?php echo e($similar_ad->is_favourite ? '1' : '0'); ?>"
                                                                        ad-id="<?php echo e($similar_ad->id); ?>"
                                                                        style="color: white;"></i>
                                                                   </span>
                                                                </div>
                                                                <div class="col-md-12 col-6"
                                                                     style="margin:5px;position:absolute;top:120px;">
                                                                    <i class="fa fa-envelope"
                                                                       style="color:white;"></i>
                                                                    <span class="text-white">1</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div
                                                style="font-size: 14px;font-weight:bold;"><?php echo e($similar_ad->title ?? 'Title N/A'); ?></div>
                                            <div style="font-size: 11px;"><?php echo e($similar_ad->subcategory_name); ?></div>
                                            <div
                                                style="font-size: 14px;font-weight:bold;"><?php echo e(\App\Helpers\SiteHelper::priceFormatter($similar_ad->price)); ?></div>
                                        </div>
                                    </div>
                                    <!----------->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <!-------->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--------ad show------------->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_scripts'); ?>
    <script type="text/javascript">

        $(document).ready(function () {
            var latitude = "<?php echo e($ad->latitude); ?>";
            var longitude = "<?php echo e($ad->longitude); ?>";

            var myLatlng = new google.maps.LatLng(latitude, longitude);
            var myOptions = {
                zoom: 13,
                center: myLatlng
            }

            var map = new google.maps.Map(document.getElementById("map"), myOptions);

            // Create a marker and set its position
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Marker Title' // You can set a title for your marker
            });
        });

        $(document).on('click', '.start-chat', function (e) {
            e.preventDefault();

            var user_id = $(this).attr('user-id');
            $.ajax({
                url: api_url + 'chats/initiate',
                method: 'POST',
                data: {
                    user_id: user_id,
                },
                success: function (response) {
                    if (response.status) {
                        window.location.href = base_url + 'chats?u=' + user_id;
                    } else {
                        showAlert('error', 'Try again');
                    }
                },
                error: function (response) {
                    console.log('error');
                }
            });
        });

        $(document).on('click', '.document-download-request', function (e) {
            e.preventDefault();

            ajaxCall('ads/download-document-request', 'document');
        });

        $(document).on('click', '.phone-show-request', function (e) {
            e.preventDefault();

            ajaxCall('ads/download-document-request', 'phone');
        });

        function ajaxCall(end_point, type) {
            $.ajax({
                url: api_url + end_point,
                method: 'POST',
                data: {
                    'listing_id': "<?php echo e(request()->ad_id); ?>",
                    'type': type
                },
                success: function (response) {
                    if (response.status) {

                        if (type == 'document') {
                            $('.document-download-request').hide();
                            $('.approval-status').show();
                        }else{
                            $('.phone-show-request').hide();
                            $('.phone-approval-status').show();
                        }

                        // window.location.href = base_url + 'chats?u=' + user_id;
                        showAlert('success', response.message);
                    } else {
                        showAlert('error', response.message);
                    }
                },
                error: function (response) {
                    console.log('error');
                }
            });
        }

        $(document).on('click', '.download-document', function (e) {
            e.preventDefault();
            downloadAll();
        });

        function downloadAll() {
                <?php
                    $docs_arr = [];
                    foreach ($ad->documents as $doc) {
                        $docs_arr[] = $doc->name;
                    }
                ?>

            var files = <?php echo json_encode($docs_arr, 15, 512) ?>;

            console.log(files);

            // Loop through the files and create a link for each
            for (var i = 0; i < files.length; i++) {
                var downloadLink = $('<a>', {
                    href: "<?php echo e(asset('uploads/listings/documents/')); ?>/" + files[i], // Adjust the download route
                    download: files[i],
                    style: 'display:none;'
                });

                // Append the link to the body and trigger the download
                $('body').append(downloadLink);
                downloadLink[0].click();
                downloadLink.remove();
            }
        }

    </script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\bussinesshup\bh3\businesshub-web\resources\views/ads/detail.blade.php ENDPATH**/ ?>