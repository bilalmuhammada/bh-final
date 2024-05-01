<div class="modal fade" id="paymentCard">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="width:400px !important;border:0px solid red;">

            <!-- Modal Header -->
            <span class="modal-header">
          <span class="modal-title"><img src="{{asset('images/businesshub.png')}}" alt="businesshub" title="businesshub"
                                        style="margin-left: 138px !important"
                                         width="90px"></span>
          <span type="button" class="close" data-dismiss="modal">&times;</span>
        </span>

            <!-- Modal body -->
            <div class="modal-body" style="border:0px solid red;">
                <div style="text-align:center;margin-top:-10px;">
                    <button class="top-btn" style="border-radius: 0px !important"><span><img src="{{ asset('images/card.png')}}" alt="card-img" width="18px"> Credit/Debit Card</span>
                    </button>
                </div>
                <form id="payment-form" method="POST"
                      data-stripe-publishable-key="{{ env('STRIPE_KEY_TEST') }}"
                      action="{{ env('BASE_URL') . "subscription/checkout"}}">

                    <span for="" class="span-label">Name on Card</span>
                    <input type="text" name="card_holder_name" id="card_holder_name" placeholder="Your Name"
                           class="inner-input">
                    <span for="" class="span-label">Card Number</span>
                    <input type="text" name="card_number" id="card_number" placeholder="0000 0000 0000 0000"
                           maxlength="19" class="inner-input">
                    <div class="row">
                        <div class="col-md-5">
                            <span for="" class="span-label">Expiry Date</span>
                            <div id="expiry">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="expiry_month" id="expiry_month" placeholder="mm"
                                               maxlength="2" class="inner-input">

                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="expiry_year" id="expiry_year" placeholder="yyyy"
                                               maxlength="4" class="inner-input">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-1">1</div> -->
                        <div class="col-md-6">
                            <span for="" class="span-label">CVV</span>
                            <input type="text" name="card_cvv" id="card_cvv" placeholder="0000" maxlength="4"
                                   class="inner-input">

                        </div>
                    </div>
                    <div>&nbsp;</div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="checkbox" name="save_card" id="save_card" checked="checked"> Save my Card
                        </div>
                    </div>
                    <div>&nbsp;</div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="amount" id="amount" value="{{ $plan->total_amount }}">
                            <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">
                            <input type="hidden" name="stripe_token" id="stripe_token" value="">
                            <button type="submit" class="btn btn-pay" style="margin-left: 25px !important">Proceed</button>
                        </div>
                        @if (!$user->active_ads_count > 0)
                            <div class="col-md-6" style="text-align:right;">
                                <button type="reset" class="btn btn-secondary skip-btn" style="margin-right: 25px !important" data-dismiss="modal">Free Trial</button>
                            </div>
                        @endif
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
        </div>
    </div>
</div>
@section('page_scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script>
        function block_page(selector = '.modal-body') {
            $(selector).waitMe({
                effect: 'bounce',
                text: 'Processing',
                bg: 'rgba(255,255,255,0.7)',
                color: '#000',
                maxSize: '',
                waitTime: -1,
                textPos: 'vertical',
                fontSize: '',
                source: '',
            });
        }

        function unblock_page(selector = '.modal-body') {
            $(selector).waitMe('hide');
        }

        function showAlert(type = 'success', msg = 'Notification') {
            Lobibox.notify(type, {
                size: 'mini',
                msg: msg,
                position: 'top right', // Notification position
            });
        }

        function getFormData(form) {
            return {
                'card_holder_name' : form.find('#card_holder_name').val(),
                'card_number' : form.find('#card_number').val(),
                'month_expiry' : form.find('#expiry_month').val(),
                'year_expiry' : form.find('#expiry_year').val(),
                'card_cvv' : form.find('#card_cvv').val(),
                'amount' : form.find('#amount').val(),
                'stripe_token' : form.find('#stripe_token').val(),
                'plan' : form.find('#plan').val(),
            };

        }


        $(document).ready(function () {
            $('#payment-form').submit(function (e) {
                e.preventDefault();
                var $form = $(this);
                // Clear previous error messages
                $('.error-message').remove();

                // Validate Cardholder Name
                var cardHolderName = $('#card_holder_name').val().trim();
                if (cardHolderName === '') {
                    $('#card_holder_name').after('<div class="text-danger error-message">Please enter the cardholder name</div>');
                    return false;
                }

                // Validate Card Number
                var cardNumber = $('#card_number').val().replace(/\s/g, '');
                if (!isValidCardNumber(cardNumber)) {
                    $('#card_number').after('<div class="text-danger error-message">Please enter a valid card number</div>');
                    return false;
                }

                // Validate Expiry Date
                var expiryMonth = $('#expiry_month').val().trim();
                var expiryYear = $('#expiry_year').val().trim();
                if (!isValidExpiryDate(expiryMonth, expiryYear)) {
                    $('#expiry').after('<div class="text-danger error-message">Please enter a valid expiry date</div>');
                    return false;
                }

                // Validate CVV
                var cvv = $('#card_cvv').val().trim();
                if (!isValidCVV(cvv)) {
                    $('#card_cvv').after('<div class="text-danger error-message">Please enter a valid CVV</div>');
                    return false;
                }

                block_page();

                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('#card_number').val(),
                    cvc: $('#card_cvv').val(),
                    exp_month: $('#expiry_month').val(),
                    exp_year: $('#expiry_year').val()
                }, stripeResponseHandler);

                /*------------------------------------------
                --------------------------------------------
                Stripe Response Handler
                --------------------------------------------
                --------------------------------------------*/
                function stripeResponseHandler(status, response) {
                    if (response.error) {
                        if (response.error.code === 'incorrect_number') {
                            $('#card_number').after(`<div class="text-danger error-message">${response.error.message}</div>`);
                        }
                        if (response.error.code === 'invalid_expiry_month') {
                            $('#expiry').after(`<div class="text-danger error-message">${response.error.message}</div>`);
                        }
                        if (response.error.code === 'invalid_expiry_year') {
                            $('#expiry').after(`<div class="text-danger error-message">${response.error.message}</div>`);
                        }
                    } else {
                        /* token contains id, last4, and card type */
                        var token = response['id'];

                        $form.find('#stripe_token').val(token);

                        $.ajax({
                            url: api_url + 'subscription/checkout',
                            data: JSON.stringify(getFormData($('#payment-form'))),
                            type: 'post',
                            dataType: "JSON",
                            contentType: "application/json",
                            success: function (response) {
                                if (response.status) {
                                    unblock_page();
                                    showAlert("success", response.message);

                                    showAlert("success", "Redirecting you to email verification, please wait!");

                                    setTimeout(function () {
                                        window.location.assign(base_url + "verify-email");
                                    }, 1000);

                                    return true;

                                } else {
                                    showAlert("error", response.message);
                                }
                            },
                            error: function (response) {
                                showAlert("error", "Server Error");
                            }
                        });
                    }

                    unblock_page();
                }
            });

            // Helper function to validate card number
            function isValidCardNumber(cardNumber) {
                // Your validation logic here
                return /^\d{16}$/.test(cardNumber);
            }

            // Helper function to validate expiry date
            function isValidExpiryDate(expiryMonth, expiryYear) {
                if (expiryMonth <= 0 || expiryMonth >= 13) {
                    return false;
                }

                if (expiryYear <= 0) {
                    return false;
                }
                // Your validation logic here
                return /^\d{2}$/.test(expiryMonth) && /^\d{4}$/.test(expiryYear);
            }

            // Helper function to validate CVV
            function isValidCVV(cvv) {
                // Your validation logic here
                return /^\d{3,4}$/.test(cvv);
            }

            $('#card_number').on('input', function (e) {
                var $text = $(this);
                var cardNumber = $text.val().replace(/\D/g, ''); // Remove non-numeric characters

                if (cardNumber.length > 16) {
                    cardNumber = cardNumber.substring(0, 16); // Truncate to 16 digits if longer
                }

                var formattedCardNumber = '';
                for (var i = 0; i < cardNumber.length; i++) {
                    formattedCardNumber += cardNumber[i];
                    if ((i + 1) % 4 === 0 && i + 1 !== cardNumber.length) {
                        formattedCardNumber += ' ';
                    }
                }

                $text.val(formattedCardNumber);
            });

            $('#expiry_month').on('input', function (e) {
                var $text = $(this);
                var expriryMonth = $text.val().replace(/\D/g, ''); // Remove non-numeric characters

                if (expriryMonth.length > 2) {
                    expriryMonth = expriryMonth.substring(0, 2); // Truncate to 2 digits if longer
                }

                var formattedexpiryMonth = '';
                for (var i = 0; i < expriryMonth.length; i++) {
                    formattedexpiryMonth += expriryMonth[i];
                }

                $text.val(formattedexpiryMonth);
            });

            $('#expiry_year').on('input', function (e) {
                var $text = $(this);
                var expriryYear = $text.val().replace(/\D/g, ''); // Remove non-numeric characters

                if (expriryYear.length > 4) {
                    expriryYear = expriryYear.substring(0, 4); // Truncate to 4 digits if longer
                }

                var formattedexpiryYear = '';
                for (var i = 0; i < expriryYear.length; i++) {
                    formattedexpiryYear += expriryYear[i];
                }

                $text.val(formattedexpiryYear);
            });

            $('#card_cvv').on('input', function (e) {
                var $text = $(this);
                var cardCvv = $text.val().replace(/\D/g, ''); // Remove non-numeric characters

                if (cardCvv.length > 16) {
                    cardCvv = cardCvv.substring(0, 16); // Truncate to 16 digits if longer
                }

                var formattedCardCvv = '';
                for (var i = 0; i < cardCvv.length; i++) {
                    formattedCardCvv += cardCvv[i];
                }

                $text.val(formattedCardCvv);
            });

            $(document).on('click', '.skip-btn', function () {
                window.location.assign(base_url + "verify-email");
            });

        });
    </script>

@endsection
