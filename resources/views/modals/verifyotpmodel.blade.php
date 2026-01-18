<!-- OTP Verification Modal -->


<!-- OTP Verification Modal -->
<div class="modal fade" id="verifyOtpModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 27% !important; min-width: 350px; margin: auto;">
    <div class="modal-content" style="background-color: rgba(33, 34, 35, .90) !important; border-radius: 0.3rem; border: none;">
      <div class="modal-body text-center text-white p-4 position-relative">

        <!-- Close Button -->
        <button type="button" class="close position-absolute" data-dismiss="modal" 
                style="color: white; top:15px; right:15px; font-size:24px; background:none; border:none; outline:none;">&times;</button>

        <!-- Title -->
        <h3 id="modal-title" style="font-weight: bold;line-height: 20px;color: #A17A4E; margin-bottom: 25px;" class="login-heading">
            <div style="border-right: 0px solid #ffc000;text-align:center;">Verify OTP</div>
        </h3>

        <p id="modal-description" style="font-size:15px; color:#aaa; margin-bottom:30px; line-height: 1.6;">
          We've sent a 6-digit OTP to your registered email.<br>
          Please enter it below to proceed.
        </p>
        
        <!-- Alert Section (Matches Login) -->
        <div class="alert-div" style="display: none; margin-bottom: 20px;">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <div class="alert-text" style="font-size: 14px;"></div>
                <button type="button" class="close" onclick="$(this).closest('.alert-div').hide()">&times;</button>
            </div>
        </div>

<style>
    /* Focus State Blue */
    .login-user:focus {
        border-color: blue !important;
        box-shadow: 0 0 5px rgba(0, 0, 255, 0.5);
    }
    /* Button Hover Blue */
    #verifyOtpBtn:hover {
        background-color: blue !important;
    }
    #verifyOtpForm .toggle-password {
        position: absolute;
        right: 16px;
        top: 58% !important;
        transform: translateY(-50%);
        cursor: pointer;
    }
    #verifyOtpForm input::placeholder {
        color: white !important;
        opacity: 0.7; /* Optional: Adjust opacity if needed, 1 for full white */
    }
</style>

            <!-- OTP Verification Form -->
        <div id="otp-verification-section" style="padding: 0 10px;">
          <form id="verifyOtpForm">
            <input type="hidden" id="verify_email1" name="email1">

            <div class="input-group mb-3">
              <input type="text" id="verify_email" name="email"
                     class="form-control login-user"
                     readonly
                     style="background: transparent; border: 1px solid #A17A4E; color: #fff; font-size:14px; padding: 10px 11px; border-radius: 4px; width: 100%;">
            </div>
            
            <div class="input-group mb-3">
              <input type="text" id="otp" name="otp" maxlength="6" 
                     class="form-control login-user"
                     placeholder="Enter 6-digit Code"
                     style="background: transparent; border: 1px solid #A17A4E; color: #fff; font-size:12px; letter-spacing:5px; padding: 10px 11px; border-radius: 4px; font-weight: 700; width: 100%; display: block; margin: 0 auto; text-align: center;">
            </div>

            <!-- Password fields for Forgot Password mode -->
            <div id="forgot-password-fields" style="display:none;">
              <div class="input-group mb-3" style="display: flex; align-items: stretch;">
                <input type="password" id="new_password" name="password" 
                       class="form-control login-user" 
                       placeholder="New Password"
                       style="background: transparent; border: 1px solid #A17A4E; color: #fff; padding: 10px 11px; border-radius: 4px; width: 1%; flex: 1 1 auto;">
                <div class="input-group-append">
                    <span class="toggle-password" onclick="toggleOtpPassword('new_password', this)">👁️</span>
                </div>
              </div>
              <div class="input-group mb-3" style="display: flex; align-items: stretch;">
                <input type="password" id="confirm_password" name="password_confirmation" 
                       class="form-control login-user" 
                       placeholder="Confirm Password"
                       style="background: transparent; border: 1px solid #A17A4E; color: #fff; padding: 10px 11px; border-radius: 4px; width: 1%; flex: 1 1 auto;">
                    <div class="input-group-append">
                    <span class="toggle-password" onclick="toggleOtpPassword('confirm_password', this)">👁️</span>
                </div>
              </div>
            </div>

            <!-- Verify Button -->
            <div class="login-submit-button-area">
                <button type="button" 
                        class="btn" 
                        id="verifyOtpBtn"
                        style="background-color:#A17A4E; color:white; border:none; font-weight:700; padding: 10px 30px; border-radius: 4px; text-transform: uppercase; font-size: 12px;">
                  Verify & Proceed
                </button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>

<style>
    .verify-otp-btn-container {
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 1.5rem !important;
    }
    
    /* Override global form styles for this specific modal */
    #verifyOtpForm {
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        display: block !important;
    }
</style>

<script>
var current_otp_mode = 'registration'; // default

function toggleOtpPassword(fieldId, iconElement) {
    const input = document.getElementById(fieldId);
    if (input.type === "password") {
        input.type = "text";
        iconElement.innerText = "🙈";
    } else {
        input.type = "password";
        iconElement.innerText = "👁️";
    }
}

function openOtpModal(email, mode = 'registration') {
    current_otp_mode = mode;
    $('#verify_email').val(email);
    $('#otp').val('');
    $('#new_password').val('');
    $('#confirm_password').val('');
    
    if (mode === 'forgot_password') {
        $('#forgot-password-fields').show();
        $('#modal-title').text('Reset Password');
        $('#modal-description').html("Enter the 6-digit OTP sent to your email and<br>your new password to complete the reset.");
    } else {
        $('#forgot-password-fields').hide();
        $('#modal-title').text('Verify OTP');
        $('#modal-description').html("We've sent a 6-digit OTP to your registered email.<br>Please enter it below to verify your account.");
    }
    $('#verifyOtpModal').modal('show');
}

$('#verifyOtpBtn').click(function() {
    let otp = $('#otp').val();
    let email = $('#verify_email').val();

    function showKeyAlert(message, type = 'error') {
        let alertDiv = $('#verifyOtpModal .alert-div');
        let alertContent = alertDiv.find('.alert');
        let alertText = alertDiv.find('.alert-text');
        
        alertText.text(message);
        
        if (type === 'success') {
            alertContent.removeClass('alert-danger').addClass('alert-success');
        } else {
            alertContent.removeClass('alert-success').addClass('alert-danger');
        }
        
        alertDiv.show();
    }

    if (otp.trim() === '' || email.trim() === '') {
        showKeyAlert('Please enter OTP and email.');
        return;
    }

    if (current_otp_mode === 'forgot_password') {
        let password = $('#new_password').val();
        let confirm = $('#confirm_password').val();
        
        if (password.trim() === '' || confirm.trim() === '') {
            showKeyAlert('Please enter your new password.');
            return;
        }
        
        if (password !== confirm) {
            showKeyAlert('Passwords do not match.');
            return;
        }

        // Handle combined Forgot Password submission
        $.ajax({
            url: api_url + 'reset-password',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                password_reset_code: otp,
                password: password,
                password_confirmation: confirm,
                email: email // for extra verification if needed by controller
            },
            success: function(response) {
                if (response.status) {
                    showKeyAlert(response.message, 'success');
                    // showAlert("success", response.message); // Optional toast
                    setTimeout(() => {
                         $('#verifyOtpModal').modal('hide');
                         $('#loginModal').modal('show');
                    }, 1500);
                } else {
                    showKeyAlert(response.message);
                }
            },
            error: function() {
                showKeyAlert('Server Error. Please try again.');
            }
        });
    } else {
        // Handle Registration OTP
        $.ajax({
            url: '/verify-otp',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                otp: otp,
                email: email
            },
            success: function(response) {
                if (response.status) {
                    $('#verifyOtpModal .alert-div').hide();
                    showAlert("success", response.message);
                    $('#verifyOtpModal').modal('hide');
                    setTimeout(() => location.reload(), 1500);
                } else {
                    showKeyAlert(response.message);
                }
            },
            error: function() {
                 showKeyAlert('Something went wrong. Please try again.');
            }
        });
    }
});
</script>
