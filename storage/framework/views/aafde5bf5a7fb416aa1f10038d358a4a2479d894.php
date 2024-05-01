<!-- The Modal -->
<div class="modal" id="notifyModal" >
  <div class="modal-dialog" style="width: 500px;margin-top:100px;">
    <div class="modal-content" style="padding: 5px;">

      <!-- Modal Header -->
      <div class="modal-header">
        <div class="row">
            <div><img src="<?php echo e(asset('images/notifications-on.svg')); ?>" height="30" width="30"></div>
            <div>
                <h4 style="font-size: 16px;"><b>Enable notifications</b></h4>
                <p style="font-size: 12px;">Get notified when ads match your search</p>
            </div>
        </div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="col-md-12" style="border: 1px solid rgb(224, 225, 227);box-shadow: rgba(0, 0, 0, 0.04) 0px 2px 8px;border-radius: 10px;">
            <div class="row" style="padding: 10px;">
                <div class="col-md-10">
                    <div class="row">
            <div>
                <h4 style="font-size: 16px;"><b><a href="" style="color:#000;">Property for Sale</a><a href="" style="color:#000;"> • Residential for Sale</a></b></h4>
                <p style="font-size: 12px;"><b>My Apartment for Sale Search (57470)</b></p>
            </div>
            <div>
            </div>
                    </div>
                </div>
                <div class="col-md-2">
                <div class="row">
             <img src="<?php echo e(asset('images/image1.avif')); ?>" width="50" height="50">
            <img src="<?php echo e(asset('images/image1.avif')); ?>" width="50" height="50" style="margin: 0px -30px;z-index:1;">
            <img src="<?php echo e(asset('images/image1.avif')); ?>" width="50" height="50" style="margin: 0px -10px;">
             </div>
                </div>
            
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                    <div><img src="<?php echo e(asset('images/email-notifications.svg')); ?>" height="30" width="30"></div>
            <div>
                <h4 style="font-size: 16px;"><b>Enable notifications</b></h4>
                <p style="font-size: 12px;">Get notified when ads match your search</p>
            </div>
            <div>
            </div>
                    </div>
                </div>
                <div class="col-md-2">
                <label class="switch">
            <input type="checkbox" >
            <span class="slider round"></span>
            </label>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                    <div><img src="<?php echo e(asset('images/push-notifications.svg')); ?>" height="30" width="30"></div>
            <div>
                <h4 style="font-size: 16px;"><b>Enable notifications</b></h4>
                <p style="font-size: 12px;">Get notified when ads match your search</p>
            </div>
            <div>
            </div>
                    </div>
                </div>
                <div class="col-md-2">
                <label class="switch">
            <input type="checkbox" >
            <span class="slider round"></span>
            </label>
                </div>
        </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <span style="font-size: 13px;"><button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> <button type="button" class="btn" style="background-color: #0000ff;color:white;">Update Notifications</button></span>
      </div>

    </div>
  </div>
</div><?php /**PATH C:\wamp64\www\bussinesshup\bh3\businesshub-web\resources\views/modals/notify.blade.php ENDPATH**/ ?>