<!-- OTP Verification Modal -->


<!-- OTP Verification Modal -->
<div class="modal fade" id="verifyOtpModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" style="max-width: 17% !important; min-width: 300px; margin: 30px auto;">
    <div class="modal-content" style="background-color: rgba(33, 34, 35, .90) !important; border-radius: 0.3rem; border: none;">
      <div class="modal-body text-center text-white py-4 position-relative">

        <!-- Title Area -->
        <div class="d-flex align-items-center justify-content-center mb-2" style="position: relative; margin-bottom: 16px !important; margin-top: -10px;">
            <h5 id="modal-title" style="font-weight: bold; line-height: 20px; color: #A17A4E; font-size: 1.1rem; margin: 0 auto;" class="login-heading">
                Verify OTP
            </h5>
            <button type="button" class="close" data-dismiss="modal" 
                    style="color: white; position: absolute; right: 10; top: 44%; transform: translateY(-50%); font-size:24px; background:none; border:none; outline:none; padding: 0;">&times;</button>
        </div>

        <!-- Description Removed (Requirement 2) -->
        <p id="modal-description" style="display: none;"></p>
        
        <!-- Alert Section (Matches Login) -->
        <!-- Alert Section Restored and Styled Subtly -->
        <div class="alert-div" style="display: none; margin-bottom: 20px;">
            <div class="alert alert-danger border-0 p-2" role="alert" style="background: rgba(255,0,0,0.1); color: #ff5e5e; font-size: 13px; border-radius: 4px;">
                <span class="alert-text"></span>
                <button type="button" class="close text-white opacity-50" onclick="$(this).closest('.alert-div').hide()" style="font-size: 18px; line-height: 1; padding: 0.5rem 0.75rem;">&times;</button>
            </div>
        </div>

        <style>
            
      
    /* Focus State - Removed Blue Shadow */
    .login-user:focus {
        border-color: blue !important;
        box-shadow: none !important;
        outline: none !important;
    }
    /* OTP Box Styles */
    .otp-box-container {
        display: flex;
        justify-content: center;
        gap: 18px;
       
    }
    .otp-digit {
        width: 40px;
        height: 50px;
        background: transparent !important;
        border: 1px solid #A17A4E !important;
        color: white !important;
        font-size: 20px !important;
        text-align: center !important;
        border-radius: 6px !important;
        outline: none !important;
        transition: border-color 0.2s;
    }
    .otp-digit:focus {
        border-color: blue !important;
        box-shadow: none !important;
    }
    /* Button Hover blue */
    #verifyOtpBtn:hover {
        background-color: blue !important;
    }
    #verifyOtpForm .toggle-password {
        position: absolute;
        right: 12px;
        top: 57%;
        transform: translateY(-50%);
        cursor: pointer;
        z-index: 10;
        color: #A17A4E;
        font-size: 16px;
    }
    #verifyOtpForm input::placeholder {
        color: white !important;
        opacity: 0.7;
    }
</style>

            <!-- OTP Verification Form -->
        <div id="otp-verification-section" style="padding: 0 26px;">
          <form id="verifyOtpForm">
            <input type="hidden" id="verify_email" name="email">

            
            
            <div class="mb-3" style="width: 100%; display: flex; justify-content: center;">
              <div class="otp-box-container">
                  <input type="text" class="otp-digit" maxlength="1" inputmode="numeric" pattern="[0-9]*">
                  <input type="text" class="otp-digit" maxlength="1" inputmode="numeric" pattern="[0-9]*">
                  <input type="text" class="otp-digit" maxlength="1" inputmode="numeric" pattern="[0-9]*">
                  <input type="text" class="otp-digit" maxlength="1" inputmode="numeric" pattern="[0-9]*">
              </div>
              <input type="hidden" id="otp" name="otp">
            </div>

            <div id="forgot-password-fields" style="display:none;">
              <div class="input-group mb-3" style="display: flex; align-items: stretch; position: relative;">
                <input type="password" id="new_password" name="password" 
                       class="form-control login-user" 
                       placeholder="New Password"
                       style="background: transparent; border: 1px solid #A17A4E; color: #fff; padding: 10px 11px; border-radius: 4px; width: 100%;">
                <span class="toggle-password" onclick="toggleOtpPassword('new_password', this)">👁️</span>
              </div>
              <div class="input-group mb-3" style="display: flex; align-items: stretch; position: relative;">
                <input type="password" id="confirm_password" name="password_confirmation" 
                       class="form-control login-user" 
                       placeholder="Confirm Password"
                       style="background: transparent; border: 1px solid #A17A4E; color: #fff; padding: 10px 11px; border-radius: 4px; width: 100%;">
                <span class="toggle-password" onclick="toggleOtpPassword('confirm_password', this)">👁️</span>
              </div>
            </div>


            <!-- Verify Button -->
            <div class="login-submit-button-area" style="margin-bottom: 0px;">
                <button type="button" 
                        class="btn" 
                        id="verifyOtpBtn"
                        style="background-color:#A17A4E; color:white; border:none; font-weight:700; padding: 8px 35px; border-radius: 4px; font-size: 14px; ">
                  Submit
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
    $('.otp-digit').val('');
    $('#otp').val('');
    $('#new_password').val('');
    $('#confirm_password').val('');
    $('#verifyOtpModal .alert-div').hide();
    
    if (mode === 'forgot_password') {
        $('#forgot-password-fields').show();
        $('#modal-title').text('Reset Password');
        $('#modal-description').hide();
        $('#otp-label').show();
    } else {
        $('#forgot-password-fields').hide();
        $('#modal-title').text('Verify OTP');
        $('#modal-description').hide();
        $('#otp-label').hide();
    }
    $('#verifyOtpModal').modal('show');
    // Auto focus first box
    setTimeout(() => $('.otp-digit').first().focus(), 500);
}

// Handle OTP digit input tabbing
$(document).on('keyup', '.otp-digit', function(e) {
    let key = e.key;
    let input = $(this);
    
    if (key === 'Backspace' || key === 'Delete') {
        input.prev('.otp-digit').focus();
    } else if (input.val().length === 1) {
        input.next('.otp-digit').focus();
    }
});

$('#verifyOtpBtn').click(function() {
    // Collect OTP digits
    let CollectedOtp = "";
    $('.otp-digit').each(function() {
        CollectedOtp += $(this).val();
    });
    $('#otp').val(CollectedOtp);

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
