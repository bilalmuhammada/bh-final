<!-- OTP Verification Modal -->


<div class="modal" id="verifyOtpModal" style="border:0;margin-top:-60px;">
  <div class="modal-dialog" style="max-width: 34% !important; margin:auto;">
    <div class="modal-content" style="background-color: rgba(33, 34, 35, .90);border-radius:0.5rem;">
      <div class="modal-body text-center text-white p-4 position-relative">

        <!-- Close Button -->
        <a class="close close-signup-btn position-absolute" data-dismiss="modal" 
           style="color:white; top:10px; right:15px; font-size:22px;">&times;</a>

        <!-- Title -->
        <h3 style="color:#A17A4E;font-weight:bold;margin-bottom:10px;">Verify OTP</h3>

        <p style="font-size:14px;color:#ccc;margin-bottom:20px;">
          We've sent a 6-digit OTP to your registered email.<br>
          Please enter it below to verify your account.
        </p>

        <!-- OTP Form -->
        <form id="verifyOtpForm" style="max-width:300px;margin:auto;">
          <input type="hidden" id="verify_email1" name="email1">

          <div class="form-group mb-3">
            <input type="text" id="verify_email" name="email"
                   class="form-control text-center"
                   placeholder="Enter Email.."
                   style="font-size:20px;letter-spacing:5px;text-align:center; width:100%">
          </div>
          <div class="form-group mb-3">
            <input type="text" id="otp" name="otp" maxlength="6" 
                   class="form-control text-center"
                   placeholder="Enter 6-digit OTP"
                   style="font-size:20px;letter-spacing:5px;text-align:center; width:100%">
          </div>

          <div id="otp-alert" 
               class="alert alert-danger mt-2" 
               style="display:none;font-size:14px;padding:8px;"></div>

          <!-- Verify Button -->
          <button type="button" 
                  class="btn mt-3 w-100" 
                  id="verifyOtpBtn"
                  style="background-color:#A17A4E;color:white;border:none;font-weight:bold;">
            Verify OTP
          </button>

          <!-- Resend OTP
          <p class="mt-3 mb-0" style="font-size:13px;color:#ccc;">
            Didn’t receive OTP?
            <a href="#" id="resendOtpLink" style="color:#0070cc;">Resend OTP</a>
          </p>
          -->
        </form>
      </div>
    </div>
  </div>
</div>


<script>
$('#verifyOtpBtn').click(function() {
    let otp = $('#otp').val();
    let email = $('#verify_email').val();

    // Simple validation before sending
    if (otp.trim() === '' || email.trim() === '') {
        $('#otp-alert').text('Please enter OTP and email.').show();
        return;
    }

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
                $('#otp-alert').hide();
                alert(response.message); // or use Swal.fire for better UX
                $('#verifyOtpModal').modal('hide');
                location.reload(); // optional
            } else {
                $('#otp-alert').text(response.message).show();
            }
        },
        error: function() {
            $('#otp-alert').text('Something went wrong. Please try again.').show();
        }
    });
});
</script>
