<!-- The Modal -->

<div class="modal fade" id="reportModal">
    <style>
        #reportModal .modal-content {
            border: 0;
        }

        #reportModal .modal-dialog {
            margin-top: 9%;
            width: 270px;
        }

        #reportModal .modal-header {
            padding: 0.5rem 1rem 0.2rem 1rem;
        }

        #reportModal .modal-title {
            color: blue;
            font-size: 20px;
        }

        #reportModal .modal-body {
            padding-top: 8px;
        }

        #reportModal .report-ad-form {
            margin: 0;
            width: 100%;
        }

        #reportModal .form-check {
            align-items: center;
            display: flex;
            min-height: 24px;
            padding-left: 0;
        }

        #reportModal .form-check-input {
            flex: 0 0 auto;
            margin: 0 8px 0 0;
            position: static;
        }

        #reportModal .form-check-label {
            line-height: 1.2;
            margin: 0;
        }

        #reportModal textarea.form-control {
            border: 1px solid #A17A4E !important;
            box-sizing: border-box;
            color: #000;
            margin: 12px 0 0;
            min-height: 74px;
            resize: vertical;
            width: 100%;
        }

        #reportModal textarea.form-control:focus {
            border-color: #80bdff !important;
            box-shadow: 0 0 0 0.1rem rgba(128, 189, 255, 0.25);
        }

        #reportModal .modal-footer {
            border-top: 0;
            gap: 12px;
            justify-content: center;
            margin: 0 !important;
            padding: 12px 1rem 1rem;
        }

        #reportModal .modal-footer > * {
            margin: 0;
        }
    </style>
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Report this Ad</h4>
                <button type="button" class="close report-modal-close" data-dismiss="modal" data-bs-dismiss="modal" style="margin-top: -12px;">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form class="report-ad-form" id="report-ad-form">
                    <div class="alert-div" style="display: none;width:13rem; white-space: nowrap;"> 
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div class="alert-text" style="font-size: 12px;"></div>
                            {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> --}}
                        </div>
                    </div>
                    <input type="hidden" name="ad_id" class="ad-id" id="ad-id" >
                    <!-- Default radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="ad-reason-1" value="Spam"/>
                        <label class="form-check-label" for="ad-reason-1">Spam</label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="ad-reason-2" value="Fraud"/>
                        <label class="form-check-label" for="ad-reason-2">Fraud</label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="ad-reason-3" value="Not Available"/>
                        <label class="form-check-label" for="ad-reason-3">Not Available</label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="ad-reason-4" value="Miscategorized"/>
                        <label class="form-check-label" for="ad-reason-4">Miscategorized</label>
                    </div>

                    <!-- Defaul radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="ad-reason-5" value="Incorrect Pricing"/>
                        <label class="form-check-label" for="ad-reason-5">Incorrect Pricing</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="ad-reason-6" value="Repetitive Listing"/>
                        <label class="form-check-label" for="ad-reason-6">Repetitive Listing</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="ad-reason-7" value="Copyright Infringment"/>
                        <label class="form-check-label" for="ad-reason-7">Copyright Infringment</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="report_reason" id="ad-reason-8" value="other"/>
                        <label class="form-check-label" for="ad-reason-8">Other</label>
                    </div>
                    <!-- textarea -->
                    <textarea name="description" class="form-control" placeholder="Reason..." rows="2" maxlength="80"></textarea>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger report-modal-close" data-dismiss="modal" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary report-ad-submit-btn">Report</button>
            </div>

        </div>
    </div>
</div>
