<!-- The Modal -->


<div class="modal fade" id="reportModal">
    <style>
.modal-content{
    border: 0px solid;
}
.report-ad-form {
            width: 60rem;
            margin-left: 1px;
            margin-top: 11px;
        }
        .modal-header {
            padding: 0.5rem 1rem 0.2rem 1rem;
        }
        .modal-title{
            color: blue;
            font-size: 20px;
        }
        .form-control {
            margin-top: 7px;
    margin-left: 1px;
    width: 21.5%;
        }
        .modal-footer {
            margin-right:22px;
            margin-top: -2.5rem;
            border-top: 0px solid transparent;
        }
        </style>
    <div class="modal-dialog modal-sm" style="border:0px solid red;width:232px;margin-top:9%;">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Report this Ad</h4>
                <button type="button" class="close" data-dismiss="modal" style="margin-top: -12px;">×</button>
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
                        <input class="form-check-input" type="radio" name="report_reason" id="reason1" value="Spam"/>
                        <label class="form-check-label" for="reason1"> Spam </label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason2" value="Fraud"/>
                        <label class="form-check-label" for="reason2"> Fraud </label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason3" value="Not Available"/>
                        <label class="form-check-label" for="reason3"> Not Available </label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason4" value="Miscategorized"/>
                        <label class="form-check-label" for="reason4"> Miscategorized </label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason5" value="Incorrect Pricing"/>
                        <label class="form-check-label" for="reason5">Incorrect Pricing </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason5" value="Repetitive Listing"/>
                        <label class="form-check-label" for="reason5">Repetitive Listing </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason5" value="Copyright Infringment"/>
                        <label class="form-check-label" for="reason5">Copyright Infringment </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason5" value="other"/>
                        <label class="form-check-label" for="reason5">Other </label>
                    </div>
                    <!-- textarea -->
                    <div class="col-md-12">
                        <div class="row">
                            <label for=""></label>
                            <textarea name="description"  class="form-control" placeholder="Describe your Reason"
                                      style="border:2px solid #eee;font-size: 14px;border: 2px solid #eee;color:#000" cols="12" rows="2" maxlength="80"
                                      ></textarea>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary report-ad-submit-btn" style="margin-left: 16px;">Report</button>
            </div>

        </div>
    </div>
</div>
