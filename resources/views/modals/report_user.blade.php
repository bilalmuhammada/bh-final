<!-- The Modal -->


<div class="modal fade" id="reportUserModal">
    <style>
.modal-content{
    border: 0px solid;
}

#report-ad-form1 .form-check{
    padding: 0.3rem 0.3rem 0.4rem 1.5rem !important;
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
            font-size: 15px;
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
        .form-check-input{
            margin-top: 0.1rem !important;
        }
        </style>
    <div class="modal-dialog modal-sm" style="border:0px solid red;width:232px;margin-top:9%;">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="margin-left: 43px;">Report User</h4>
                <button type="button" class="close closebtn" data-dismiss="modal" style="margin-top: -16px;    font-size: 18px;">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" style="position:relative;top:-20px;">
                <form class="report-ad-form" id="report-ad-form1">
                    <div class="alert-div" style="display: none;width:13rem; font-size:12px; white-space: nowrap;"> 
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div class="alert-text" style="font-size: 10px;"></div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" style="font-size: 12px;">&times;</span>
                            </button>
                        </div>
                    </div>
                    <input type="hidden" name="ad_id" class="ad-id" id="ad-id_user" >
                    <!-- Default radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason1" value="Scam"/>
                        <label class="form-check-label" for="reason1"> Scam </label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason2" value="Disturbing"/>
                        <label class="form-check-label" for="reason2"> Disturbing </label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason3" value=" Fake Profile"/>
                        <label class="form-check-label" for="reason3"> Fake Profile </label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason4" value="Disrespectful"/>
                        <label class="form-check-label" for="reason4"> Disrespectful </label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason5" value="Privacy Violation"/>
                        <label class="form-check-label" for="reason5">Privacy Violation </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason5" value="Abusive Behavoir "/>
                        <label class="form-check-label" for="reason5">Abusive Behavoir </label>
                    </div>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="reason5" value="other"/>
                        <label class="form-check-label" for="reason5">Other </label>
                    </div>
                    <input type="hidden" name="formtype" value="reportuser">
                    <!-- textarea -->
                    <div class="col-md-12">
                        <div class="row">
                            <label for=""></label>
                            <textarea name="description"  class="form-control colorchange" placeholder="Reason..."
                                      style="border:2px solid #eee;font-size: 14px;border: 1px solid goldenrod; color:#000" cols="12" rows="2" maxlength="80"
                                      ></textarea>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger closebtn" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary report-ad-submit-btn" style="margin-left: 16px;">Report</button>
            </div>

        </div>
    </div>
</div>
