<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="documentRequestModal"
     aria-hidden="true" id="documentRequestModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-center">Request</h4>
                <button type="button" class="close close-modal" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <table class="table table-bordered table-striped" id="downloadRequestTAble">
                    <thead>
                    <tr>
                        <td>
                            Ad
                        </td>
                        <td>
                            User name
                        </td>
                        <td>
                            Action
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $requests = \App\Helpers\RecordHelper::getDownloadRequests('document');
                    ?>

                    <?php $__empty_1 = true; $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>
                                <?php echo e($request->listing_name); ?>

                            </td>
                            <td>
                                <?php echo e($request->user_name); ?>


                            </td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm download-request-status-update"
                                   status="approved" listing-user-approval-id="<?php echo e($request->id); ?>"><i
                                        class="fa fa-download me-1"></i>Approved</a>
                                <a href="#" class="btn btn-danger btn-sm download-request-status-update"
                                   status="rejected" listing-user-approval-id="<?php echo e($request->id); ?>"><i class="fa fa-times-circle me-1"></i>Reject</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="3" align="center">
                                No request Found
                            </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer text-center mx-auto">
                <button type="button" class="btn btn-danger close-modal" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary report-ad-submit-btn">Report</button> -->
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\wamp64\www\bussinesshup\bh3\businesshub-web\resources\views/modals/document-request.blade.php ENDPATH**/ ?>