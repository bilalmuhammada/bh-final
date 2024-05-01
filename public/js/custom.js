$(document).on('change', '.change-lang', function () {
    $.ajax({
        url: api_url + 'change-lang',
        data: {lang: $(this).val()},
        type: 'post',
        dataType: "JSON",
        success: function (response) {
            if (response.status) {
                window.location.assign(window.location.href);
            } else {
                showAlert("error", response.message);
            }
        },
        error: function (response) {
            showAlert("error", "Server Error");
        }
    });
});

//show add listing
$(document).on('click', '.add-listing-btn', function () {
    var result = checkIfUserLoggedIn();
    if (result) {
        window.location.assign(base_url + "listing/select-category");
    } else {
        $('#loginModal').modal('show');
    }
});

//show Login Modal
$(document).on('click', '.login-btn', function () {
    $('#loginModal').modal('show');
});

//show register modal
$(document).on('click', '.register-btn', function () {
    $('#registerModal').modal('show');
});

$(document).on('click', '.download-request-status-update', function () {
    var request_type = $(this).attr('request-type');

    $.ajax({
        url: api_url + 'ads/download-request-status-update',
        data: {
            listing_user_approval_id: $(this).attr('listing-user-approval-id'),
            status: $(this).attr('status')
        },
        type: 'post',
        dataType: "JSON",
        success: function (response) {
            if (response.status) {
                showAlert("success", response.message);
                // window.location.assign(window.location.href);
                var row = '';

                if (response.data.length > 0) {
                    $(response.data).each(function (i, request) {
                        row += `<tr>
                            <td>
                                ${request.listing_name}
                            </td>
                            <td>
                                ${request.user_name}

                            </td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm download-request-status-update" request-type="${request.type}"
                                   status="approved" listing-user-approval-id="${request.id}"><i
                                        class="fa fa-download me-1"></i>Approved</a>
                                <a href="#" class="btn btn-danger btn-sm download-request-status-update" request-type="${request.type}"
                                   status="rejected" listing-user-approval-id="${request.id}"><i class="fa fa-times-circle me-1"></i>Reject</a>
                            </td>
                        </tr>`
                    });
                } else {
                    row = `<tr>
                            <td colspan="3" align="center">
                                No request Found
                            </td>
                        </tr>`;
                }

                if (request_type == 'phone') {

                    $('#phoneRequestTAble tbody').html(row);
                } else {
                    $('#downloadRequestTAble tbody').html(row);
                }
            } else {
                showAlert("error", response.message);
            }
        },
        error: function (response) {
            showAlert("error", "Server Error");
        }
    });
});


$(document).on('click', '.close-modal', function () {
    $(this).parents('.modal').modal('hide');
});
