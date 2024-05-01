
<?php $__env->startSection('content'); ?>
    <div class="cont-w">
        <h3 style="font-weight: bold;">My Ads</h3>
        <br>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" style="font-size:12px;">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#all_ads">All Ads - <?php echo e($my_ads->count()); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#live">Live -
                    <?php echo e($my_ads->where('status', 'active')->count()); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#draft">Drafts -
                    <?php echo e($my_ads->where('status', 'draft')->count()); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#payment_pending">Payment Pending - 0</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#under_review">Under Review
                    - <?php echo e($my_ads->where('status', 'pending')->count()); ?> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#rejected">Rejected
                     - <?php echo e($my_ads->where('status', 'rejected')->count()); ?> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#expired">Expired
                - <?php echo e($my_ads->where('status', 'expired')->count()); ?></a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div id="all_ads" class="cont-w tab-pane active"><br>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-xs-6 col-6">
                            <span style="font-size: 12px;">
                                <img src="<?php echo e(asset('images/info-grey.svg')); ?>" alt="imge" width="13" height="13"> Please note, expired and deleted listings will automatically be removed from your favorites.
                            </span>
                        </div>
                    </div>
                </div>
            <?php if($my_ads->count() > 0): ?>
                <!------------------single row----------->
                    <div class="col-md-12"
                         style="border: 1px solid #E0E1E3;border-radius:6px;padding:;margin-top:10px;">
                        <div class="row">
                        <?php $__currentLoopData = $my_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $my_ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-------->
                                <div class="col-md-3" style="">
                                    <div class="row">
                                        <a href="<?php echo e(env('BASE_URL') . 'ads/detail/' . $my_ad->id); ?>">
                                            <div style="padding:5px;">
                                                <div class="ad-show"
                                                     style="border: 1px solid #E0E1E3;padding:10px;border-radius:5px;">
                                                    <div class="img">
                                                        <img src="<?php echo e($my_ad->main_image_url); ?>" alt="img" height="150"
                                                             width="220" style="border-radius: 5px;">
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <a href="" style="font-size: 11px;font-weight:bold;color:#000;">
                                                                <?php echo e($my_ad->title ?? 'TITLE N/A'); ?>

                                                            </a>
                                                            <br/>
                                                            <a href="" class="text-muted" style="font-size: 11px;">
                                                                <?php echo e($my_ad->category_name . " / " . $my_ad->subcategory_name); ?>

                                                            </a>
                                                        </h5>
                                                        <h4 style="font-size: 14px;font-weight:bold;">
                                                            <?php echo e(\App\Helpers\SiteHelper::priceFormatter($my_ad->price)); ?>

                                                            <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i
                                                                    class="fa fa-trash delete-ad-btn" ad-id="<?php echo e($my_ad->id); ?>"></i></span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-------->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <!----single row ended------>
            <?php else: ?>
                <!------------------single row----------->
                    <div class="col-md-12 mx-auto"
                         style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                        <div class="row mx-auto">
                            <div class="mx-auto">
                                <img src="<?php echo e(asset('images/no-ads-placeholder.svg')); ?>" height="120">
                            </div>
                        </div>
                        <div style="text-align: center;font-weight:bold;">
                            <h4>
                                <b>You don't have any ads </b>
                            </h4>
                        </div>
                        <div style="text-align: center;font-size:12px;" class="text-muted">
                            <a href="<?php echo e(env('BASE_URL') . 'listing/' . 'select-category'); ?>">
                                <button class="btn"
                                        style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">
                                    Post ad now
                                </button>
                            </a>
                        </div>
                    </div>
                    <!----single row ended------>
                <?php endif; ?>
            </div>
            <div id="live" class="container tab-pane fade"><br>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-xs-6 col-6">
                            <span style="font-size: 12px;">
                                <img src="<?php echo e(asset('images/info-grey.svg')); ?>" alt="imge" width="13" height="13"> Please note, expired and deleted listings will automatically be removed from your favorites.
                            </span>
                        </div>
                    </div>
                </div>
            <?php if($my_ads->where('status', 'active')->count() > 0): ?>
                <!------------------single row----------->
                    <div class="col-md-12"
                         style="border: 1px solid #E0E1E3;border-radius:6px;padding:;margin-top:10px;">
                        <div class="row">
                        <?php $__currentLoopData = $my_ads->where('status', 'active'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $active_ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-------->
                                <div class="col-md-3" style="">
                                    <div class="row">
                                        <a href="<?php echo e(env('BASE_URL') . 'ads/detail/' . $active_ad->id); ?>">
                                            <div style="padding:5px;">
                                                <div class="ad-show"
                                                     style="border: 1px solid #E0E1E3;padding:10px;border-radius:5px;">
                                                    <div class="img">
                                                        <img src="<?php echo e($active_ad->main_image_url); ?>" alt="img" height="150"
                                                             width="220" style="border-radius: 5px;">
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <a href="" style="font-size: 11px;font-weight:bold;color:#000;">
                                                                <?php echo e($active_ad->title ?? 'TITLE N/A'); ?>

                                                            </a>
                                                            <br/>
                                                            <a href="" class="text-muted" style="font-size: 11px;">
                                                                <?php echo e($active_ad->category_name . " / " . $active_ad->subcategory_name); ?>

                                                            </a>
                                                        </h5>
                                                        <h4 style="font-size: 14px;font-weight:bold;">
                                                            <?php echo e(\App\Helpers\SiteHelper::priceFormatter($active_ad->price)); ?>

                                                            <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i
                                                                    class="fa fa-trash delete-ad-btn" ad-id="<?php echo e($active_ad->id); ?>"></i></span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-------->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <!----single row ended------>
            <?php else: ?>
                <!------------------single row----------->
                    <div class="col-md-12 mx-auto"
                         style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                        <div class="row mx-auto">
                            <div class="mx-auto">
                                <img src="<?php echo e(asset('images/no-ads-placeholder.svg')); ?>" height="120">
                            </div>
                        </div>
                        <div style="text-align: center;font-weight:bold;">
                            <h4>
                                <b>You don't have any ads </b>
                            </h4>
                        </div>
                        <div style="text-align: center;font-size:12px;" class="text-muted">
                            <a href="<?php echo e(env('BASE_URL') . 'listing/' . 'select-category'); ?>">
                                <button class="btn"
                                        style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">
                                    Post ad now
                                </button>
                            </a>
                        </div>
                    </div>
                    <!----single row ended------>
                <?php endif; ?>
            </div>
            <div id="draft" class="container tab-pane fade"><br>
                <?php if($my_ads->where('status', 'draft')->count() > 0): ?>
                    <!------------------single row----------->
                        <div class="col-md-12"
                             style="border: 1px solid #E0E1E3;border-radius:6px;padding:;margin-top:10px;">
                            <div class="row">
                            <?php $__currentLoopData = $my_ads->where('status', 'draft'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $draft_ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-------->
                                    <div class="col-md-3" style="">
                                        <div class="row">
                                            <a href="<?php echo e(env('BASE_URL') . 'ads/detail/' . $draft_ad->id); ?>">
                                                <div style="padding:5px;">
                                                    <div class="ad-show"
                                                         style="border: 1px solid #E0E1E3;padding:10px;border-radius:5px;">
                                                        <div class="img">
                                                            <img src="<?php echo e($draft_ad->main_image_url); ?>" alt="img" height="150"
                                                                 width="220" style="border-radius: 5px;">
                                                        </div>
                                                        <div>
                                                            <h5>
                                                                <a href="" style="font-size: 11px;font-weight:bold;color:#000;">
                                                                    <?php echo e($draft_ad->title ?? 'TITLE N/A'); ?>

                                                                </a>
                                                                <br/>
                                                                <a href="" class="text-muted" style="font-size: 11px;">
                                                                    <?php echo e($draft_ad->category_name . " / " . $draft_ad->subcategory_name); ?>

                                                                </a>
                                                            </h5>
                                                            <h4 style="font-size: 14px;font-weight:bold;">
                                                                <?php echo e(\App\Helpers\SiteHelper::priceFormatter($draft_ad->price)); ?>

                                                                <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i
                                                                        class="fa fa-trash delete-ad-btn" ad-id="<?php echo e($draft_ad->id); ?>"></i></span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-------->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <!----single row ended------>
                <?php else: ?>
                <!------------------single row----------->
                    <div class="col-md-12 mx-auto"
                         style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                        <div class="row mx-auto">
                            <div class="mx-auto">
                                <img src="<?php echo e(asset('images/no-ads-placeholder.svg')); ?>" height="120">
                            </div>
                        </div>
                        <div style="text-align: center;font-weight:bold;">
                            <h4>
                                <b>You don't have any ads </b>
                            </h4>
                        </div>
                        <div style="text-align: center;font-size:12px;" class="text-muted">
                            <a href="<?php echo e(env('BASE_URL') . 'listing/' . 'select-category'); ?>">
                                <button class="btn"
                                        style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">
                                    Post ad now
                                </button>
                            </a>
                        </div>
                    </div>
                    <!----single row ended------>
                <?php endif; ?>
            </div>
            <div id="payment_pending" class="container tab-pane fade"><br>
                <!------------------single row----------->
                <div class="col-md-12 mx-auto"
                     style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                    <div class="row mx-auto">
                        <div class="mx-auto"><img src="<?php echo e(asset('images/no-ads-placeholder.svg')); ?>" height="120"></div>
                    </div>
                    <div style="text-align: center;font-weight:bold;">
                        <h4>
                            <b>You don't have any ads</b>
                        </h4>
                    </div>
                    <div style="text-align: center;font-size:12px;" class="text-muted">
                        <a href="<?php echo e(env('BASE_URL') . 'listing/' . 'select-category'); ?>">
                            <button class="btn"
                                    style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">Post ad
                                now
                            </button>
                        </a>
                    </div>
                </div>
                <!----single row ended------>
            </div>
            <div id="under_review" class="container tab-pane fade"><br>
            <?php if($my_ads->where('status', 'pending')->count() > 0): ?>
                <!------------------single row----------->
                    <div class="col-md-12"
                         style="border: 1px solid #E0E1E3;border-radius:6px;padding:;margin-top:10px;">
                        <div class="row">
                        <?php $__currentLoopData = $my_ads->where('status', 'pending'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pending_ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-------->
                                <div class="col-md-3" style="">
                                    <div class="row">
                                        <a href="<?php echo e(env('BASE_URL') . 'ads/detail/' . $pending_ad->id); ?>">
                                            <div style="padding:5px;">
                                                <div class="ad-show"
                                                     style="border: 1px solid #E0E1E3;padding:10px;border-radius:5px;">
                                                    <div class="img">
                                                        <img src="<?php echo e($pending_ad->main_image_url); ?>" alt="img" height="150"
                                                             width="220" style="border-radius: 5px;">
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <a href="" style="font-size: 11px;font-weight:bold;color:#000;">
                                                                <?php echo e($pending_ad->title ?? 'TITLE N/A'); ?>

                                                            </a>
                                                            <br/>
                                                            <a href="" class="text-muted" style="font-size: 11px;">
                                                                <?php echo e($pending_ad->category_name . " / " . $pending_ad->subcategory_name); ?>

                                                            </a>
                                                        </h5>
                                                        <h4 style="font-size: 14px;font-weight:bold;">
                                                            <?php echo e(\App\Helpers\SiteHelper::priceFormatter($pending_ad->price)); ?>

                                                            <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i
                                                                    class="fa fa-trash delete-ad-btn" ad-id="<?php echo e($pending_ad->id); ?>"></i></span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-------->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <!----single row ended------>
            <?php else: ?>
                <!------------------single row----------->
                    <div class="col-md-12 mx-auto"
                         style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                        <div class="row mx-auto">
                            <div class="mx-auto">
                                <img src="<?php echo e(asset('images/no-ads-placeholder.svg')); ?>" height="120">
                            </div>
                        </div>
                        <div style="text-align: center;font-weight:bold;">
                            <h4>
                                <b>You don't have any ads </b>
                            </h4>
                        </div>
                        <div style="text-align: center;font-size:12px;" class="text-muted">
                            <a href="<?php echo e(env('BASE_URL') . 'listing/' . 'select-category'); ?>">
                                <button class="btn"
                                        style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">
                                    Post ad now
                                </button>
                            </a>
                        </div>
                    </div>
                    <!----single row ended------>
                <?php endif; ?>
            </div>
            <div id="rejected" class="container tab-pane fade"><br>
            <?php if($my_ads->where('status', 'rejected')->count() > 0): ?>
                <!------------------single row----------->
                    <div class="col-md-12"
                         style="border: 1px solid #E0E1E3;border-radius:6px;padding:;margin-top:10px;">
                        <div class="row">
                        <?php $__currentLoopData = $my_ads->where('status', 'rejected'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rejected_ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-------->
                                <div class="col-md-3" style="">
                                    <div class="row">
                                        <a href="<?php echo e(env('BASE_URL') . 'ads/detail/' . $rejected_ad->id); ?>">
                                            <div style="padding:5px;">
                                                <div class="ad-show"
                                                     style="border: 1px solid #E0E1E3;padding:10px;border-radius:5px;">
                                                    <div class="img">
                                                        <img src="<?php echo e($rejected_ad->main_image_url); ?>" alt="img" height="150"
                                                             width="220" style="border-radius: 5px;">
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <a href="" style="font-size: 11px;font-weight:bold;color:#000;">
                                                                <?php echo e($rejected_ad->title ?? 'TITLE N/A'); ?>

                                                            </a>
                                                            <br/>
                                                            <a href="" class="text-muted" style="font-size: 11px;">
                                                                <?php echo e($rejected_ad->category_name . " / " . $rejected_ad->subcategory_name); ?>

                                                            </a>
                                                        </h5>
                                                        <h4 style="font-size: 14px;font-weight:bold;">
                                                            <?php echo e(\App\Helpers\SiteHelper::priceFormatter($rejected_ad->price)); ?>

                                                            <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i
                                                                    class="fa fa-trash delete-ad-btn" ad-id="<?php echo e($rejected_ad->id); ?>"></i></span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-------->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <!----single row ended------>
            <?php else: ?>
                <!------------------single row----------->
                    <div class="col-md-12 mx-auto"
                         style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                        <div class="row mx-auto">
                            <div class="mx-auto">
                                <img src="<?php echo e(asset('images/no-ads-placeholder.svg')); ?>" height="120">
                            </div>
                        </div>
                        <div style="text-align: center;font-weight:bold;">
                            <h4>
                                <b>You don't have any ads </b>
                            </h4>
                        </div>
                        <div style="text-align: center;font-size:12px;" class="text-muted">
                            <a href="<?php echo e(env('BASE_URL') . 'listing/' . 'select-category'); ?>">
                                <button class="btn"
                                        style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">
                                    Post ad now
                                </button>
                            </a>
                        </div>
                    </div>
                    <!----single row ended------>
                <?php endif; ?>
            </div>
            <div id="expired" class="container tab-pane fade"><br>
            <?php if($my_ads->where('status', 'expired')->count() > 0): ?>
                <!------------------single row----------->
                    <div class="col-md-12"
                         style="border: 1px solid #E0E1E3;border-radius:6px;padding:;margin-top:10px;">
                        <div class="row">
                        <?php $__currentLoopData = $my_ads->where('status', 'expired'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expired_ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-------->
                                <div class="col-md-3" style="">
                                    <div class="row">
                                        <a href="<?php echo e(env('BASE_URL') . 'ads/detail/' . $expired_ad->id); ?>">
                                            <div style="padding:5px;">
                                                <div class="ad-show"
                                                     style="border: 1px solid #E0E1E3;padding:10px;border-radius:5px;">
                                                    <div class="img">
                                                        <img src="<?php echo e($expired_ad->main_image_url); ?>" alt="img" height="150"
                                                             width="220" style="border-radius: 5px;">
                                                    </div>
                                                    <div>
                                                        <h5>
                                                            <a href="" style="font-size: 11px;font-weight:bold;color:#000;">
                                                                <?php echo e($expired_ad->title ?? 'TITLE N/A'); ?>

                                                            </a>
                                                            <br/>
                                                            <a href="" class="text-muted" style="font-size: 11px;">
                                                                <?php echo e($expired_ad->category_name . " / " . $expired_ad->subcategory_name); ?>

                                                            </a>
                                                        </h5>
                                                        <h4 style="font-size: 14px;font-weight:bold;">
                                                            <?php echo e(\App\Helpers\SiteHelper::priceFormatter($expired_ad->price)); ?>

                                                            <span style="cursor: pointer;margin-left: 110px;" title="Delete Ad"><i
                                                                    class="fa fa-trash delete-ad-btn" ad-id="<?php echo e($expired_ad->id); ?>"></i></span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-------->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <!----single row ended------>
            <?php else: ?>
                <!------------------single row----------->
                    <div class="col-md-12 mx-auto"
                         style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
                        <div class="row mx-auto">
                            <div class="mx-auto">
                                <img src="<?php echo e(asset('images/no-ads-placeholder.svg')); ?>" height="120">
                            </div>
                        </div>
                        <div style="text-align: center;font-weight:bold;">
                            <h4>
                                <b>You don't have any ads </b>
                            </h4>
                        </div>
                        <div style="text-align: center;font-size:12px;" class="text-muted">
                            <a href="<?php echo e(env('BASE_URL') . 'listing/' . 'select-category'); ?>">
                                <button class="btn"
                                        style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">
                                    Post ad now
                                </button>
                            </a>
                        </div>
                    </div>
                    <!----single row ended------>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\bussinesshup\bh3\businesshub-web\resources\views/user/my-ads.blade.php ENDPATH**/ ?>