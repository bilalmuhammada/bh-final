//submitting register form
$(document).on('click', '.register-button', function () {
    grecaptcha.ready(function () {
        grecaptcha.execute(GOOGLE_RECAPTCHA_KEY).then(function (token) {
            $('#g-recaptcha-response').val(token);
            $.ajax({
                url: api_url + 'register',
                data: $('.register-form').serialize(),
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        showAlert("success", "Registerrd Successfully");
                        $('#registerModal').modal('hide');
                        $('#loginModal').modal('show');
                    } else {

                        $('.alert-text').text(response.message);
                        $('.alert-div').show();

                        setTimeout(function () {
                            $('.alert-text').text('');
                            $('.alert-div').hide();
                        }, 7000);
                    }
                },
                error: function (response) {
                    showAlert("error", "Server Error");
                }
            });
        });
    });
});

$(document).on('click', '.close-signup-btn', function () {
    $('#registerModal').modal('hide');
    $('#loginModal').modal('hide');
    $('#forgotModal').modal('hide');
   
    
});
$(document).on('click', '.show-forgot-btn,.login-btn', function () {
    
    $('#forgotModal').modal('hide');
    $('#registerModal').modal('hide');
    
});

$(document).on('change', '#country', function () {

    $(".city_dropdown_register_form").select2('destroy');

    $.ajax({
        url: api_url + 'get-cities',
        type: 'POST',
        data: {
            country: $(this).val()
        },
        dataType: "JSON",
        success: function (response) {
            if (response.status) {
                var options = '';

                $.each(response.data , function (key, city) {
                    options += `<option value="${city.id}">${city.name}</option>`;
                });

                $('#city').html(options);

                setTimeout(function () {
                    $(".city_dropdown_register_form").select2();
                }, 1000);
            } else {
                console.log('error');
            }
        },
        error: function (response) {
            showAlert("error", "Server Error");
        }
    });
});

//submitting login form
$(document).on('click', '.login-submit-button', function () {
    $.ajax({
        url: api_url + 'login',
        data: $('.login-form').serialize(),
        type: 'post',
        dataType: "JSON",
        success: function (response) {

            if (response.status) {

                localStorage.setItem('user_token', response.token);

                window.location.assign(window.location.href);
            } else {
                $('.alert-text').text(response.message);
                $('.alert-div').show();

                setTimeout(function () {
                    $('.alert-text').text('');
                    $('.alert-div').hide();
                }, 7000);
            }
        },
        error: function (response) {
            showAlert("error", "Server Error");
        }
    });
});

//logout user
$(document).on('click', '.logout-btn', function () {
    $.ajax({
        url: api_url + 'logout',
        type: 'post',
        dataType: "JSON",
        success: function (response) {
            if (response.status) {

                localStorage.removeItem("user_token");

                window.location.assign(window.location.href);
            } else {
                alert(response.message);
            }
        },
        error: function (response) {
            showAlert("error", "Server Error");
        }
    });
});

//show forgot password form form
$(document).on('click', '.show-forgot-btn', function () {
    $('#loginModal').modal('hide');

    $('#forgotModal').modal('show');
});

//submitting forgot password form
$(document).on('click', '.forgot-submit', function () {
    $.ajax({
        url: api_url + 'forgot-password-check',
        data: $('.forgot-password-form').serialize(),
        type: 'post',
        dataType: "JSON",
        success: function (response) {
            if (response.status) {
                $('.alert-text').text(response.message);
                $('.alert-div').show();
                // $('.password-alert').show().text(response.message);
            } else {
                $('.alert-text').text(response.message);
                $('.alert-div').show();

                setTimeout(function () {
                    $('.alert-text').text('');
                    $('.alert-div').hide();
                }, 7000);
            }
        },
        error: function (response) {
            showAlert("error", "Server Error");
        }
    });
});

//submitting reset password form
$(document).on('click', '.reset-password-submit', function () {
    var endpoint = 'update-password';
    if ($('.password_reset_code').length) {
        endpoint = 'reset-password';
    }
    $.ajax({
        url: api_url + endpoint,
        data: $('.reset-password-form').serialize(),
        type: 'post',
        dataType: "JSON",
        success: function (response) {
            if (response.status) {
                window.location.assign(base_url + 'home');
            } else {
                $('.alert-text').text(response.message);
                $('.alert-div').show();

                setTimeout(function () {
                    $('.alert-text').text('');
                    $('.alert-div').hide();
                }, 7000);
            }
        },
        error: function (response) {
            showAlert("error", "Server Error");
        }
    });
});

//add to facourite
$(document).on('click', '.favourite-btn', function () {
    var thisElem = $(this);

    if (!checkIfUserLoggedIn()) {

        $('#loginModal').modal('show');
        return ;
    }

    if (thisElem.attr('is-favourite') === '1') {
        $.ajax({
            url: api_url + 'listing/remove-from-favourites/' + thisElem.attr('ad-id'),
            type: 'post',
            dataType: "JSON",
            success: function (response) {
                if (response.status) {
                    thisElem.attr('is-favourite', '0');
                    thisElem.removeClass('fa-heart');
                    thisElem.addClass('fa-heart-o');
                    showAlert('success', "Removed From Favourites");

                } else {
                    showAlert('error', "Could not remove");
                }
            },
            error: function (response) {
                showAlert("error", "Could not remove");
            }
        });
    } else {
        $.ajax({
            url: api_url + 'listing/add-to-favourites/' + thisElem.attr('ad-id'),
            type: 'post',
            dataType: "JSON",
            success: function (response) {
                if (response.status) {
                    thisElem.attr('is-favourite', '1');
                    thisElem.removeClass('fa-heart-o');
                    thisElem.addClass('fa-heart');
                    showAlert('success', "Added to Favourite");

                } else {
                    showAlert('error', "Could not added to favourite");
                }
            },
            error: function (response) {
                $('.alert-text').text("Login");
                $('.alert-div').show();

                $('#loginModal').modal('show');

                setTimeout(function () {
                    $('.alert-text').text('');
                    $('.alert-div').hide();
                }, 7000);
            }
        });
    }
});

//share
$(document).on('click', '.share-btn', function () {
    var thisElem = $(this);
    var link = base_url + "ads/detail/" + thisElem.attr('ad-id');

    // Copy the text inside the text field
    navigator.clipboard.writeText(link);

    thisElem.removeClass('fa-copy');
    thisElem.addClass('fa-check');


    $(this).attr('title', "Link copied");
});

//report ad
$(document).on('click', '.report-ad-btn', function () {
    if (!checkIfUserLoggedIn()) {

        $('#loginModal').modal('show');
        return ;
    }

    var thisElem = $(this);

    $('#reportModal').find('.ad-id').val(thisElem.attr('ad-id'))

    $('#reportModal').modal('show');
});

//report ad submit
$(document).on('click', '.report-ad-submit-btn', function () {

    $.ajax({
        url: api_url + 'listing/report-ad',
        type: 'post',
        data: $('.report-ad-form').serialize(),
        dataType: "JSON",
        success: function (response) {
            if (response.status) {
                $('#reportModal').modal('hide');

                var reportAdBtn = $('.report-ad-btn');

                reportAdBtn.removeAttr('ad-id').removeClass('report-ad-btn');
                reportAdBtn.text('Ad Reported');
                reportAdBtn.attr('title', 'Ad Reported');

                showAlert('success', "Ad Reported Successfully!");

            } else {
                $('.alert-text').text(response.message);
                $('.alert-div').show();

                setTimeout(function () {
                    $('.alert-text').text('');
                    $('.alert-div').hide();
                }, 7000)
                // showAlert('error', "Ad could not be reported");
            }
        },
        error: function (response) {
            $('#reportModal').modal('hide');
            $('.alert-text').text("Login");
            $('.alert-div').show();

            $('#loginModal').modal('show');

            setTimeout(function () {
                $('.alert-text').text('');
                $('.alert-div').hide();
            }, 7000);
        }
    });

});

