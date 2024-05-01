<?php
    $notifications = [];
    $my_searches = [];
    $favourite_ads = [];
    $chats = [];
    $my_ads_for_topbar = [];
    $cities = \App\Helpers\RecordHelper::getCities(request()->country);

    if (session()->has('user')) {
        $notifications = \App\Helpers\RecordHelper::getNotifications();
        $my_searches = \App\Helpers\RecordHelper::getSearches()->take(2);
        $favourite_ads = \App\Helpers\RecordHelper::getFavouriteAds()->take(2);
        $chats = \App\Helpers\RecordHelper::getUnreadMessages();
        $my_ads_for_topbar = \App\Helpers\RecordHelper::getAdsByUserId(session()->get('user')->id)->take(2);
    }
    $countries = \App\Helpers\RecordHelper::getCountries();
?>
<header>
    <!-- topbar start -->
    <div class="topbar desktop-view">
        <div class="container-fluid" style="border:0px solid red;padding:0px 15px;">
            <div class="row">
                <div class="col" style="border:0px solid red;margin:0px;">
                    <!-- <div class="col-lg-2 col-xl-2 col-md-2" style="border:2px solid red;"> -->
                    <!-- social icon desktop start -->
                    <a class="navbar-brand"
                       href="<?php echo e(env('BASE_URL') . 'home?country=' . request()->country . '&city=' . request()->city); ?>">
                        <img src="<?php echo e(asset('images/businesshub.png')); ?>" alt="businesshub" title="businesshub"
                             style="border:0px solid red;">
                    </a>
                </div>
                <div class="col-lg-3 col-xl-3 col-md-3" style="border:0px solid red;">
                    <!-- <div class="col-md-4"> -->
                    <span style="position:relative;top:20px;border:0px solid red;background-color:inherit !important;">
                    <!-- country bar mobile start -->
                        <div class="mobile-country desktop-menu-right">
                            <div class="row">>
                            <div class="country" style="border:0px solid red;position:relative;left:-50px;">
                                <select class="form-control city_dropdown" name="city_dropdown" id=""
                                        style="width:120px;border:0px solid red !imporatnt;text-align:center;background-color:transparent !important;">
                                        <option value=""> &nbsp; All Cities</option>
                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option data-city-id="<?php echo e($city->id); ?>"
                                                <?php echo e($city->id == request()->city ? 'selected' : ''); ?> value="<?php echo e($city->id); ?>"
                                                style="font-size:8px !important;"> &nbsp; <?php echo e($city->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                                <!----langs--->
                            <div class="country" style="border:0px solid green;position:relative;left:-90px;">
                            <div class="mobile-country desktop-menu-right">
                            <select class="form-control country_dropdown" name="country_dropdown" id=""
                                    style="width:120px;">
                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option
                                        <?php echo e($country->id == request()->country ? 'selected' : ''); ?> data-flag-url="<?php echo e($country->image_url); ?>"
                                        data-country-id="<?php echo e($country->id); ?>"
                                        value="<?php echo e($country->id); ?>">&nbsp;<?php echo e($country->nice_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            </div>
                            </span>
                </div>

                <div id="google_translate_button" style="margin-top: -7%;
                margin-left: 38%;"></div>
               <script
               type="text/javascript"
               src="//translate.google.com/translate_a/element.js?cb=googleTranslateInit"
               ></script>
                <script type="text/javascript">
                    function googleTranslateInit() {
                    new google.translate.TranslateElement(
                        {pageLanguage: 'en', includedLanguages: "en,fr,ar,es,it,fa,de,hi,ru,cs,tr", layout: google.translate.TranslateElement.InlineLayout.SIMPLE},
                        'google_translate_button'
                    );
                    }
                </script>
                <!----langs end---->
            </div>
        </div>
        <!-- country bar mobile finish -->
        </span>
        <!-- </div> -->
    </div>
    <!-----icons---bar---->
    <div class="col-md-7 col-xl-7 col-md-9" style="border:0px solid red;">
        <div class="social-icon float-right text-dark">
            <div class="row align-middle" style="font-size: 11px;color:black;border:0px solid red;">
                <span style="padding:5px 10px;text-align:center;">
                                <a type="button" id="notifications"
                                   data-toggle="dropdown"
                                   aria-haspopup="true"
                                   aria-expanded="false">
                                    <img src="<?php echo e(asset('images/my-notifications.svg')); ?>" width="17" height="17">
                                    <div>
                                        <span style="color: #000;">Notifications</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="notifications"
                                     style="padding: 10px;width:auto;     border-radius: 12px;">
                                    <?php if(session()->has('user') && count($notifications) > 0): ?>
                                        <!---------inner area----->
                                            <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12">
                                                </i> <span>Notifications </span>
                                            </div>
                                        </div>
                                            <hr>
                                            <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="row">
                                                <div class="col-lg-2 col-sm-4 col-4">
                                                    <img width="100" height="100"
                                                         src="https://i.pinimg.com/originals/fe/d9/97/fed9971d943669c993db0be515a18a61.jpg"
                                                         alt="img" style="width:40px;height:40px;border-radius:50px;"/>
                                                </div>
                                                <div class="col-lg-8 col-sm-7 col-7">
                                                    <p style="font-size: 13px;"><?php echo e($notification->message); ?></p>
                                                </div>
                                            </div>
                                            
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <!---------inner area---->
                                        <?php else: ?>
                                            
                                        <div style="      margin-top: 15px;   font-weight: 700;   min-width: 500px;" class="notification-heading"><h4 class="menu-title">Notifications (4)</h4><h6 style="font-size: 16px;" class="menu-title pull-right">Mark All as read</h6>
                                        </div>
                                        <hr style="    width: 80%;">
                                        <li class="divider"></li>
                                       <div class="notifications-wrapper">
                                         <a class="content" href="#" data-bs-toggle="modal" data-bs-target="#phoneRequestModal">
                                            <div class="dropdown" style="float:right;">
                                                <i style="color: black;" class="fa fa-ellipsis-h" data-toggle="dropdown"></i>
                                                <div class="dropdown-menu" style="   left: -140px;;
                                                ">
                                                  <a class="dropdown-item" href="#">Mark as Read</a>
                                                  <a class="dropdown-item" href="#">Remove Notifications</a>
                                                </div>
                                              </div>
                                           <div class="notification-item">
                                            <div class="row">
                                                <div class="col-sm-3" style="    padding: unset;">
                                                    <img style="width: 100%;" src="https://www.ivertech.com/Articles/Images/KoalaBear200x200.jpg" />

                                                </div>
                                                <div class="col-sm-9">
                                                    <h4 class="item-title">Show Phone Number Request</h4>
                                            <p class="item-info">Marketing 101, Video Assignment</p>
                                            <p style="margin-bottom: unset; color:black;">7 day ago  .....</p>
                                                </div>
                                            </div>
                                           

                                          </div>
                                           
                                        </a>
                                         <a class="content" href="#" data-bs-toggle="modal" data-bs-target="#documentRequestModal">
                                            <div class="dropdown" style="float:right;">
                                                <i style="color: black;" class="fa fa-ellipsis-h" data-toggle="dropdown"></i>
                                                <div class="dropdown-menu" style="    left: -140px;
                                                ">
                                                  <a class="dropdown-item" href="#">Mark as Read</a>
                                                  <a class="dropdown-item" href="#">Remove Notifications</a>
                                                </div>
                                              </div>
                                            <div class="notification-item">
                                                <div class="row">
                                                    <div class="col-sm-3" style="    padding: unset;">
                                                        <img style="width: 100%;" src="https://www.ivertech.com/Articles/Images/KoalaBear200x200.jpg" />
    
                                                    </div>
                                                    <div class="col-sm-9">
                                            <h4 class="item-title">Show Ad document Request</h4>
                                            <p class="item-info">Marketing 101, Video Assignment</p>
                                            <p style="margin-bottom: unset; color:black;">7 day ago .....</p>
                                          </div>
                                        </div>
                                        </div>
                                        </a>
                                         <a class="content" href="#">
                                            <div class="dropdown" style="float:right;">
                                                <i style="color: black;" class="fa fa-ellipsis-h" data-toggle="dropdown"></i>
                                                <div class="dropdown-menu" style="   left: -140px;
                                                ">
                                                  <a class="dropdown-item" href="#">Mark as Read</a>
                                                  <a class="dropdown-item" href="#">Remove Notifications</a>
                                                </div>
                                              </div>
                                          <div class="notification-item">
                                            <h4 class="item-title">Evaluation Deadline 1 • day ago</h4>
                                            <p class="item-info">Marketing 101, Video Assignment</p>
                                            <p style="margin-bottom: unset; color:black;">7 day ago  .....</p>
                                          </div>
                                        </a>
                                   
                                       </div>
                                       <hr>
                                        <li class="divider"></li>
                                        <div class="notification-footer" style="text-align: center;"><h4 class="menu-title" style="color: red;
                                            margin: 12px;">View all Notifications</h4></div>
                                      </ul>
                                        <?php endif; ?>
                                </div>
                            </span>

                <span style="padding:5px 10px;text-align:center;">
                                <a type="button" id="searches" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <img src="<?php echo e(asset('images/my-searches-selected.svg')); ?>" width="17" height="17">
                                    <div>
                                        <span style="color: #000;">My Searches</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="searches"
                                     style="padding: 10px;width:auto;">
                                    <?php if(session()->has('user') && count($my_searches) > 0): ?>
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12">
                                                </i> <span>My Searches</span>
                                            </div>
                                        </div>
                                        <?php $__currentLoopData = $my_searches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $search): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-8 col-sm-7 col-7">
                                                    <p style="font-size: 13px;"><?php echo e($search->key_words); ?> <br/>
                                                    <span style="font-size: 11px;"
                                                          class="text-success">Saved On: <?php echo e(\Carbon\Carbon::parse($search->created_at)->format('M d')); ?></span>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <span>Nothing to show</span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </span>
                <span style="padding:5px 10px;text-align:center;">
                                <a type="button" id="favorite" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <img src="<?php echo e(asset('images/my-favorites.svg')); ?>" width="17" height="17">
                                    <div><span style="color: #000;">Favorites</span></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="favorite"
                                     style="padding: 10px;width:250px;">
                                    <?php if(session()->has('user') && count($favourite_ads) > 0): ?>
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12">
                                                </i> <span>Favorites</span>
                                            </div>
                                        </div>
                                        <?php $__currentLoopData = $favourite_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $favourite_ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-2 col-sm-4 col-4">
                                                    <img width="100" height="100"
                                                         src="https://i.pinimg.com/originals/fe/d9/97/fed9971d943669c993db0be515a18a61.jpg"
                                                         alt="img" style="width:40px;height:40px;border-radius:50px;"/>
                                                </div>
                                                <div class="col-lg-8 col-sm-7 col-7">
                                                    <a class="link"
                                                       href="<?php echo e(env('BASE_URL') . 'ads/detail/' . $favourite_ad->id . '?country=' . request()->country . '&city=' . request()->city); ?>">
                                                        <p style="font-size: 13px;"><?php echo e($favourite_ad->name); ?> <br/><span
                                                                style="font-size: 11px;"><?php echo e(\App\Helpers\SiteHelper::priceFormatter($favourite_ad->price)); ?></span></p>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <span>Nothing to show</span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </span>
                <span style="padding:5px 10px;text-align:center;">
                                <a type="button" id="chat"
                                   data-toggle="dropdown"
                                   aria-haspopup="true"
                                   aria-expanded="false">
                                    <img src="<?php echo e(asset('images/my-chats.svg')); ?>" width="17" height="17">
                                    <div><span style="color: #000;">Chat</span></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="chat" style="padding: 10px;width:auto;">
                                    <?php if(session()->has('user') && count($chats) > 0): ?>
                                        <!---------inner area------------>
                                            <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12">
                                                </i> <span style="color: #000;">Chats</span>
                                            </div>
                                        </div>
                                            <hr>
                                            <?php $__currentLoopData = $chats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="row">
                                                    <div class="col-lg-2 col-sm-4 col-4">
                                                        <img width="100" height="100"
                                                             src="<?php echo e($message->user->image_url ?? "https://i.pinimg.com/originals/fe/d9/97/fed9971d943669c993db0be515a18a61.jpg"); ?>"
                                                             alt="img" style="width:40px;height:40px;border-radius:50px;"/>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-7 col-7">
                                                        <p style="font-size: 13px;"><?php echo e($message->message); ?><br/><span
                                                                style="font-size: 11px;font-size:bold;"><?php echo e($message->message_recieved_time_diff); ?></span>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-2 col-sm-1 col-1">
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <hr>
                                            <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <a href="<?php echo e(env('BASE_URL') . 'chats?country=' . request()->country . '&city=' . request()->city); ?>"
                                                   class="btn btn-primary btn-block link"
                                                   style="font-size: 13px;">View all Chats</a>
                                            </div>
                                        </div>
                                            <!---------inner area------------>
                                        <?php else: ?>
                                            <hr>
                                            <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <span>Nothing to show</span>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                </div>
                            </span>
                <span style="padding:5px 15px;text-align:center;">
                                <a type="button" id="ads"
                                   data-toggle="dropdown"
                                   aria-haspopup="true"
                                   aria-expanded="false">
                                    <i class="fa fa-user" width="19" style="color: #999;"></i>
                                    <div><span style="color: #000;">My Ads</span></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="ads" style="padding: 10px;width:auto;">
                                    <?php if(session()->has('user') && count($my_ads_for_topbar) > 0): ?>
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12">
                                                </i> <span>My Ads</span>
                                            </div>
                                        </div>
                                        <hr>
                                        <?php $__currentLoopData = $my_ads_for_topbar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $my_ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="row">
                                                <div class="col-lg-2 col-sm-4 col-4">
                                                    <img width="100" height="100"
                                                         src="<?php echo e($my_ad->main_image_url); ?>"
                                                         alt="img" style="width:40px;height:40px;border-radius:50px;"/>
                                                </div>
                                                <div class="col-lg-8 col-sm-7 col-7">
                                                    <a class="link"
                                                       href="<?php echo e(env('BASE_URL') . 'ads/detail/' . $my_ad->id . '?country=' . request()->country . '&city=' . request()->city); ?>">
                                                        <p style="font-size: 13px;padding:15px 15px;"><?php echo e($my_ad->title ?? "Title N/A"); ?></p>
                                                    </a>
                                                </div>
                                                <div class="col-lg-2 col-sm-1 col-1">
                                                </div>
                                            </div>
                                            <hr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <a href="<?php echo e(env('BASE_URL') . 'user/ads?country=' . request()->country . '&city=' . request()->city); ?>"
                                                   class="btn btn-primary btn-block link"
                                                   style="font-size: 13px;">View all Ads</a>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <span>Nothing to show</span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </span>
                <?php if(session()->has('user')): ?>
                    <span style="padding:10px 15px;text-align:center;font-size:16px !important;">
                                <a class="link"
                                   href="<?php echo e(env('BASE_URL') . 'user/profile?country=' . request()->country . '&city=' . request()->city); ?>">
                                    <img src="<?php echo e(session()->get('user')->image_url); ?>" alt="img" width="30" height="30"
                                         style="border-radius: 50%;border:0px solid red;">
                                </a>
                                <span class="dropdown">
                                        <span style="width:;display:inline;border:0px solid red;" type="button"
                                              id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                              aria-expanded="false">
                                            <?php echo e(session()->get('user')->name); ?>

                                        </span>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item link"
                                               href="<?php echo e(env('BASE_URL') . 'user/profile?country=' . request()->country . '&city=' . request()->city); ?>">My Profile</a>
                                            <a class="dropdown-item link"
                                               href="<?php echo e(env('BASE_URL') . 'user/ads?country=' . request()->country . '&city=' . request()->city); ?>">My Ads</a>

                                            
                                            <a class="dropdown-item logout-btn">Sign out</a>
                                        </div>
                                    </span>
                            <?php endif; ?>
                        <?php if(!session()->has('user')): ?>
                            <span style="padding:16px 15px;text-align:center;font-size:16px !important;">
                            <a class="login-btn">Login</a>
                           </span>
                            <span style="padding:16px 15px;text-align:center;font-size:16px !important;">
                                    <a class="register-btn">Register</a>
                           </span>
                        <?php endif; ?>
                           <span style="padding:16px 15px;text-align:center;font-size:16px !important;">
                           <a class="add-list-button add-listing-btn"
                              style="padding: 11px 20px;border-radius: 6px;">+ Place Your Ad</a>
                           </span>
            </div>
        </div>
    </div>
    <!-----icons---bar---->
    <div class="col-lg-3 col-xl-3 col-md-4" style="border:2px solid red;display:none;">
        <div class="row pt-4" style="border: 0px solid red;color:#000;">
            <div class="col-md-12">
                <?php if(session()->has('user')): ?>
                    <a class="link"
                       href="<?php echo e(env('BASE_URL') . 'user/profile?country=' . request()->country . '&city=' . request()->city); ?>">
                        <img src="<?php echo e(session()->get('user')->image_url); ?>" alt="img" width="30" height="30"
                             style="border-radius: 50%;border:0px solid red;">
                    </a>
                    <span class="dropdown">
                                        <span style="width:;display:inline;border:0px solid red;" type="button"
                                              id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                              aria-expanded="false">
                                            <?php echo e(session()->get('user')->name); ?>

                                        </span>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item link"
                                               href="<?php echo e(env('BASE_URL') . 'user/profile?country=' . request()->country . '&city=' . request()->city); ?>">My Profile</a>
                                            <a class="dropdown-item link"
                                               href="<?php echo e(env('BASE_URL') . 'user/ads?country=' . request()->country . '&city=' . request()->city); ?>">My Ads</a>

                                            <a class="dropdown-item link"
                                               href="<?php echo e(env('BASE_URL') . 'user/change-password?country=' . request()->country . '&city=' . request()->city); ?>">Change Password</a>
                                            <a class="dropdown-item logout-btn">Sign out</a>
                                        </div>
                                    </span>
                <?php endif; ?>
                <div style="float:right;">
                    <?php if(!session()->has('user')): ?>
                        <a class="login-btn" style="display: ;padding: 10px;">Login</a>
                        <a class="register-btn" style="padding: 10px;">Register</a>
                    <?php endif; ?>
                    <a class="add-list-button add-listing-btn"
                       style="padding: 11px 20px;border-radius: 6px;">+ Place Your Ad</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- topbar finish -->
    <!-- navigation start -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- navigation toggle start -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- navigation toggle start -->
            <a class="navbar-brand mobile-view link"
               href="<?php echo e(env('BASE_URL') . 'home?country=' . request()->country . '&city=' . request()->city); ?>">
                <img src="<?php echo e(asset('images/businesshub.png')); ?>" alt="businesshub" title="businesshub" id="mobile-logo">
            </a>
            <div class="mobile-menu-right">
                <!-- languages bar mobile start -->
                <span>
                         <!-- country bar mobile start -->
                <div class="mobile-country desktop-menu-right">
                                <span class="country">
                            <div class="mobile-country desktop-menu-right">
                            <select class="form-control city_dropdown" name="city_dropdown" id=""
                                    style="width:80px;">
                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($city->id == request()->city ? 'selected' : ''); ?> value="<?php echo e($city->id); ?>"
                                            style="font-size:8px !important;"> &nbsp; <?php echo e($city->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            <select class="form-control country_dropdown" name="country_dropdown" id=""
                                    style="width:80px;">
                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option data-flag-url="<?php echo e($country->image_url); ?>"
                                            data-country-id="<?php echo e($country->id); ?>"
                                            value="<?php echo e($country->id); ?>"> <?php echo e($country->nice_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            </div>
                            </span>
                            </div>
                    <!----langs end---->
            </div>
            <!-- country bar mobile finish -->
            </span>
            <div class="lang-mobile" style="display:none;">
                    <span class="lang">
                        <select class="form-select form-select-sm change-lang" aria-label=".form-select-sm example">
                            <option value="langauges">Location</option>
                            <option value="Afrikaans">af</option>
                            <option value="Albanian">sq</option>
                            <option value="Amharic">am</option>
                            <option value="Arabic">ar</option>
                            <option value="Armenian">hy</option>
                            <option value="Assamese">as</option>
                            <option value="Aymara">ay</option>
                            <option value="Azerbaijani">az</option>
                            <option value="Bambara">bm</option>
                            <option value="Basque">eu</option>
                            <option value="Belarusian">be</option>
                            <option value="Bengali">bn</option>
                            <option value="Bhojpuri">bho</option>
                            <option value="Bosnian">bs</option>
                            <option value="Bulgarian">bg</option>
                            <option value="Burmese">my</option>
                            <option value="Catalan">ca</option>
                            <option value="Cebuano">ceb</option>
                            <option value="Chichewa">ny</option>
                            <option value="Chinese (Simplified)">zh-CN</option>
                            <option value="Chinese (Traditional)">zh-TW</option>
                            <option value="Corsican">co</option>
                            <option value="Croatian">hr</option>
                            <option value="Czech">cs</option>
                            <option value="Danish">da</option>
                            <option value="Dhivehi">dv</option>
                            <option value="Dogri">doi</option>
                            <option value="Dutch">nl</option>
                            <option value="Esperanto">eo</option>
                            <option value="Estonian">et</option>
                            <option value="Ewe">ee</option>
                            <option value="Filipino">tl</option>
                            <option value="Finnish">fi</option>
                            <option value="French">fr</option>
                            <option value="Frisian">fy</option>
                            <option value="Galician">gl</option>
                            <option value="Georgian">ka</option>
                            <option value="German">de</option>
                            <option value="Greek">el</option>
                            <option value="Guarani">gn</option>
                            <option value="Gujarati">gu</option>
                            <option value="Haitian Creole">ht</option>
                            <option value="Hausa">ha</option>
                            <option value="Hawaiian">haw</option>
                            <option value="Hebrew">iw</option>
                            <option value="Hindi">hi</option>
                            <option value="Hmong">hmn</option>
                            <option value="Hungarian">hu</option>
                            <option value="Icelandic">is</option>
                            <option value="Igbo">ig</option>
                            <option value="Ilocano">ilo</option>
                            <option value="Indonesian">id</option>
                            <option value="Irish Gaelic">ga</option>
                            <option value="Italian">it</option>
                            <option value="Japanese">ja</option>
                            <option value="Javanese">jw</option>
                            <option value="Kannada">kn</option>
                            <option value="Kazakh">kk</option>
                            <option value="Khmer">km</option>
                            <option value="Kinyarwanda">rw</option>
                            <option value="Konkani">gom</option>
                            <option value="Korean">ko</option>
                            <option value="Krio">kri</option>
                            <option value="Kurdish (Kurmanji)">ku</option>
                            <option value="Kurdish (Sorani)">ckb</option>
                            <option value="Kyrgyz">ky</option>
                            <option value="Lao">lo</option>
                            <option value="Latin">la</option>
                            <option value="Latvian">lv</option>
                            <option value="Lingala">ln</option>
                            <option value="Lithuanian">lt</option>
                            <option value="Luganda">lg</option>
                            <option value="Luxembourgish">lb</option>
                            <option value="Macedonian">mk</option>
                            <option value="Maithili">mai</option>
                            <option value="Malagasy">mg</option>
                            <option value="Malay">ms</option>
                            <option value="Malayalam">ml</option>
                            <option value="Maltese">mt</option>
                            <option value="Maori">mi</option>
                            <option value="Marathi">mr</option>
                            <option value="Meiteilon (Manipuri)">mni-Mtei</option>
                            <option value="Mizo">lus</option>
                            <option value="Mongolian">mn</option>
                            <option value="Nepali">ne</option>
                            <option value="Norwegian">no</option>
                            <option value="Odia (Oriya)">or</option>
                            <option value="Oromo">om</option>
                            <option value="Pashto">ps</option>
                            <option value="Persian">fa</option>
                            <option value="Polish">pl</option>
                            <option value="Portuguese">pt</option>
                            <option value="Punjabi">pa</option>
                            <option value="Quechua">qu</option>
                            <option value="Romanian">ro</option>
                            <option value="Russian">ru</option>
                            <option value="Samoan">sm</option>
                            <option value="Sanskrit">sa</option>
                            <option value="Scots Gaelic">gd</option>
                            <option value="Sepedi">nso</option>
                            <option value="Serbian">sr</option>
                            <option value="Sesotho">st</option>
                            <option value="Shona">sn</option>
                            <option value="Sindhi">sd</option>
                            <option value="Sinhala">si</option>
                            <option value="Slovak">sk</option>
                            <option value="Slovenian">sl</option>
                            <option value="Somali">so</option>
                            <option value="Spanish">es</option>
                            <option value="Sundanese">su</option>
                            <option value="Swahili">sw</option>
                            <option value="Swedish">sv</option>
                            <option value="Tajik">tg</option>
                            <option value="Tamil">ta</option>
                            <option value="Tatar">tt</option>
                            <option value="Telugu">te</option>
                            <option value="Thai">th</option>
                            <option value="Tigrinya">ti</option>
                            <option value="Tsonga">ts</option>
                            <option value="Turkish">tr</option>
                            <option value="Turkmen">tk</option>
                            <option value="Twi">ak</option>
                            <option value="Ukrainian">uk</option>
                            <option value="Urdu">ur</option>
                            <option value="Uyghur">ug</option>
                            <option value="Uzbek">uz</option>
                            <option value="Vietnamese">vi</option>
                            <option value="Welsh">cy</option>
                            <option value="Xhosa">xh</option>
                            <option value="Yiddish">yi</option>
                            <option value="Yoruba">yo</option>
                            <option value="Zulu">zu</option>
                        </select>
                    </span>
                <span class="lang" style="display:none;">
                        <select class="form-select form-select-sm change-lang" aria-label=".form-select-sm example">
                           <option value="langauges">langauge</option>
                            <option value="Afrikaans">af</option>
                            <option value="Albanian">sq</option>
                            <option value="Amharic">am</option>
                            <option value="Arabic">ar</option>
                            <option value="Armenian">hy</option>
                            <option value="Assamese">as</option>
                            <option value="Aymara">ay</option>
                            <option value="Azerbaijani">az</option>
                            <option value="Bambara">bm</option>
                            <option value="Basque">eu</option>
                            <option value="Belarusian">be</option>
                            <option value="Bengali">bn</option>
                            <option value="Bhojpuri">bho</option>
                            <option value="Bosnian">bs</option>
                            <option value="Bulgarian">bg</option>
                            <option value="Burmese">my</option>
                            <option value="Catalan">ca</option>
                            <option value="Cebuano">ceb</option>
                            <option value="Chichewa">ny</option>
                            <option value="Chinese (Simplified)">zh-CN</option>
                            <option value="Chinese (Traditional)">zh-TW</option>
                            <option value="Corsican">co</option>
                            <option value="Croatian">hr</option>
                            <option value="Czech">cs</option>
                            <option value="Danish">da</option>
                            <option value="Dhivehi">dv</option>
                            <option value="Dogri">doi</option>
                            <option value="Dutch">nl</option>
                            <option value="Esperanto">eo</option>
                            <option value="Estonian">et</option>
                            <option value="Ewe">ee</option>
                            <option value="Filipino">tl</option>
                            <option value="Finnish">fi</option>
                            <option value="French">fr</option>
                            <option value="Frisian">fy</option>
                            <option value="Galician">gl</option>
                            <option value="Georgian">ka</option>
                            <option value="German">de</option>
                            <option value="Greek">el</option>
                            <option value="Guarani">gn</option>
                            <option value="Gujarati">gu</option>
                            <option value="Haitian Creole">ht</option>
                            <option value="Hausa">ha</option>
                            <option value="Hawaiian">haw</option>
                            <option value="Hebrew">iw</option>
                            <option value="Hindi">hi</option>
                            <option value="Hmong">hmn</option>
                            <option value="Hungarian">hu</option>
                            <option value="Icelandic">is</option>
                            <option value="Igbo">ig</option>
                            <option value="Ilocano">ilo</option>
                            <option value="Indonesian">id</option>
                            <option value="Irish Gaelic">ga</option>
                            <option value="Italian">it</option>
                            <option value="Japanese">ja</option>
                            <option value="Javanese">jw</option>
                            <option value="Kannada">kn</option>
                            <option value="Kazakh">kk</option>
                            <option value="Khmer">km</option>
                            <option value="Kinyarwanda">rw</option>
                            <option value="Konkani">gom</option>
                            <option value="Korean">ko</option>
                            <option value="Krio">kri</option>
                            <option value="Kurdish (Kurmanji)">ku</option>
                            <option value="Kurdish (Sorani)">ckb</option>
                            <option value="Kyrgyz">ky</option>
                            <option value="Lao">lo</option>
                            <option value="Latin">la</option>
                            <option value="Latvian">lv</option>
                            <option value="Lingala">ln</option>
                            <option value="Lithuanian">lt</option>
                            <option value="Luganda">lg</option>
                            <option value="Luxembourgish">lb</option>
                            <option value="Macedonian">mk</option>
                            <option value="Maithili">mai</option>
                            <option value="Malagasy">mg</option>
                            <option value="Malay">ms</option>
                            <option value="Malayalam">ml</option>
                            <option value="Maltese">mt</option>
                            <option value="Maori">mi</option>
                            <option value="Marathi">mr</option>
                            <option value="Meiteilon (Manipuri)">mni-Mtei</option>
                            <option value="Mizo">lus</option>
                            <option value="Mongolian">mn</option>
                            <option value="Nepali">ne</option>
                            <option value="Norwegian">no</option>
                            <option value="Odia (Oriya)">or</option>
                            <option value="Oromo">om</option>
                            <option value="Pashto">ps</option>
                            <option value="Persian">fa</option>
                            <option value="Polish">pl</option>
                            <option value="Portuguese">pt</option>
                            <option value="Punjabi">pa</option>
                            <option value="Quechua">qu</option>
                            <option value="Romanian">ro</option>
                            <option value="Russian">ru</option>
                            <option value="Samoan">sm</option>
                            <option value="Sanskrit">sa</option>
                            <option value="Scots Gaelic">gd</option>
                            <option value="Sepedi">nso</option>
                            <option value="Serbian">sr</option>
                            <option value="Sesotho">st</option>
                            <option value="Shona">sn</option>
                            <option value="Sindhi">sd</option>
                            <option value="Sinhala">si</option>
                            <option value="Slovak">sk</option>
                            <option value="Slovenian">sl</option>
                            <option value="Somali">so</option>
                            <option value="Spanish">es</option>
                            <option value="Sundanese">su</option>
                            <option value="Swahili">sw</option>
                            <option value="Swedish">sv</option>
                            <option value="Tajik">tg</option>
                            <option value="Tamil">ta</option>
                            <option value="Tatar">tt</option>
                            <option value="Telugu">te</option>
                            <option value="Thai">th</option>
                            <option value="Tigrinya">ti</option>
                            <option value="Tsonga">ts</option>
                            <option value="Turkish">tr</option>
                            <option value="Turkmen">tk</option>
                            <option value="Twi">ak</option>
                            <option value="Ukrainian">uk</option>
                            <option value="Urdu">ur</option>
                            <option value="Uyghur">ug</option>
                            <option value="Uzbek">uz</option>
                            <option value="Vietnamese">vi</option>
                            <option value="Welsh">cy</option>
                            <option value="Xhosa">xh</option>
                            <option value="Yiddish">yi</option>
                            <option value="Yoruba">yo</option>
                            <option value="Zulu">zu</option>
                        </select>
                    </span>
            </div>
            <!-- languages bar mobile finish -->
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <!-- mobile menu close button start -->
            <li class="d-inline d-lg-none">
                <button data-toggle="collapse" data-target="#navbarSupportedContent" class="close float-right">
                    <img src="<?php echo e(asset('images/close.png')); ?>">
                </button>
            </li>
            <!-- mobile menu close button finish -->
            <!-- login and register area mobile start -->
            <li class="login-area d-lg-none">
                <img src="<?php echo e(asset('images/moble-menu-login.png')); ?>" style="margin-right:10px;">
                <a class="login-btn" style="padding: 10px;">Login</a>
                <a class="register-btn" style="padding: 10px;">Register</a>
                <a class="login-btn" style="padding: 10px;">Place Your Ad</a>
                <!-- login and register area mobile finish -->
            </li>
        </ul>
    </div>
    </nav>
    </div>
    <!-- navigation finish -->
    <nav class="navbar navbar-expand-lg navbar-light"
         style="border:0px solid green;padding:0px !important;height:20px;">

        <div class="collapse navbar-collapse" id="navbarSupportedContentx" style="border:0px solid green;">
            <div class="container" style="margin:0px auto;border:0px solid green;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <ul class="navbar-nav"
                    style="margin:0px auto !important;border:0px solid red;font-size: 13.3px;line-height: 1.43;font-weight: 600;">
                    <div class="row">
                        <?php $categories = \App\Helpers\RecordHelper::getCategories(); ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <?php echo e($category->name); ?>

                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php $__currentLoopData = $category->sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="dropdown-item link"
                                           href="<?php echo e(env('BASE_URL') . 'ads/' . $sub_category->id . '?country=' . request()->country . '&city=' . request()->city); ?>"><?php echo e($sub_category->name); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!---------->
                    </div>
                </ul>

            </div>
            <hr>
        </div>
        <!-- </li> -->
    </nav>
    </div>
    <hr>
</header>
<?php /**PATH C:\wamp64\www\bussinesshup\bh3\businesshub-web\resources\views/layout/topbar.blade.php ENDPATH**/ ?>