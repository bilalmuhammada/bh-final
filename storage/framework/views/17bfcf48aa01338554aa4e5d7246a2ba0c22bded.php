<!-- The Modal -->
<div class="modal fade" id="reportModal">
    <div class="modal-dialog modal-sm" style="border:0px solid red;width:400px;margin-top:9%;">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Report this Ad</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" style="position:relative;top:-20px;">
                <form class="report-ad-form">
                    <div class="alert-div" style="display: none">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div class="alert-text"></div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <input type="hidden" name="ad_id" class="ad-id" id="ad-id">
                    <!-- Default radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason1" value="Sexual content"/>
                        <label class="form-check-label" for="reason1"> Sexual content </label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason2" value="Violent or repulsive content"/>
                        <label class="form-check-label" for="reason2"> Violent or repulsive content </label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason3" value="Hateful or abusive content"/>
                        <label class="form-check-label" for="reason3"> Hateful or abusive content </label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason4" value="Harmful or dangerous acts"/>
                        <label class="form-check-label" for="reason4"> Harmful or dangerous acts </label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason5" value="Spam or misleading"/>
                        <label class="form-check-label" for="reason5"> Spam or misleading </label>
                    </div>
                    <!-- textarea -->
                    <div class="col-md-12">
                        <div class="row">
                            <label for=""></label>
                            <textarea name="description" class="form-control" placeholder="Describe your Reason"
                                      style="border:2px solid #eee;" cols="12" rows="5" maxlength="160"
                                      ></textarea>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary report-ad-submit-btn">Report</button>
            </div>

        </div>
    </div>
</div>
<?php /**PATH C:\wamp64\www\bussinesshup\bh3\businesshub-web\resources\views/modals/report.blade.php ENDPATH**/ ?>