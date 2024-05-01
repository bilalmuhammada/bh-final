@extends('listing-layout.master')
@section('content')
    <div class="col-md-4 mx-auto">
        <h3 class="text-center">Enter Card Number</h3>
        <div class="row">
            <div class="col-md-12 mx-auto" style="margin-top: 20px;">
                <input type="number" class="form-control code" placeholder="Enter Debit/Credit Card number" name="code" value="">
                <div class="invalid-feedback">
                    Please provide a valid code.
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mx-auto" style="margin-top: 20px;">
        <a class="btn form-control verify-email-code" style="background: #0000FF;color:#fff;">
            <b>Next</b>
        </a>
    </div>
@endsection
@section('page_scripts')
    <script type="text/javascript">

        $(document).on('click', '.verify-email-code', function (e) {
            e.preventDefault();

            alert('Payment method unavailable! Redirecting to home page . Your ad is placed');
                            window.location.assign(base_url + 'home');
            // $.ajax({
            //     url: api_url + 'verify-email-code',
            //     type: 'POST',
            //     data: {verification_code: $('.code').val()},
            //     processData: false,
            //     contentType: false,
            //     dataType: "JSON",
            //     success: function (response) {
            //         if (response.status == true) {
            //             setTimeout(function () {
            //                 window.location.assign(base_url + 'subscription/plans');
            //             }, 600);
            //         } else {
            //             // Add the 'was-validated' class to show validation messages
            //             $('.code').addClass('was-validated');
            //
            //             // Clear previous validation messages
            //             $('.invalid-feedback').html(response.message);
            //             alert(response.message);
            //         }
            //     },
            //     error: function (response) {
            //         showAlert("error", "Server Error");
            //     }
            // });
        });
    </script>
@endsection
