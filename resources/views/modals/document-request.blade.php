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
                    @php
                        $requests = \App\Helpers\RecordHelper::getDownloadRequests('document');
                    @endphp

                    @forelse ($requests as $request)
                        <tr>
                            <td>
                                {{ $request->listing_name }}
                            </td>
                            <td>
                                {{ $request->user_name }}

                            </td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm download-request-status-update"
                                   status="approved" listing-user-approval-id="{{ $request->id }}"><i
                                        class="fa fa-download me-1"></i>Approved</a>
                                <a href="#" class="btn btn-danger btn-sm download-request-status-update"
                                   status="rejected" listing-user-approval-id="{{ $request->id }}"><i class="fa fa-times-circle me-1"></i>Reject</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" align="center">
                                No request Found
                            </td>
                        </tr>
                    @endforelse
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
