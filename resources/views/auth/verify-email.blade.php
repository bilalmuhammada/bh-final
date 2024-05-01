@extends('listing-layout.master')
@section('content')
    <div class="col-md-4 mx-auto">
        <h3 class="text-center">Email Verification</h3>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="alert alert-{{$type}} alert-dismissible fade show" role="alert">
                    <div class="alert-text">{{ $message }}</div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert-div-success" style="display: none">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <div class="alert-text">here</div>
                        {{--                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                        {{--                                        <span aria-hidden="true">&times;</span>--}}
                        {{--                                    </button>--}}
                    </div>
                </div>

                <div class="alert-div-danger" style="display: none">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <div class="alert-text">here</div>
                        {{--                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                        {{--                                        <span aria-hidden="true">&times;</span>--}}
                        {{--                                    </button>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-8 mx-auto" style="margin-top: 20px;">
                <input type="number" class="form-control code" placeholder="" name="code" value="">
            </div>
        </div>
    </div>
    <div class="col-md-1 mx-auto" style="margin-top: 20px;">
        <a class="btn form-control verify-email-code" style="background: #0000FF;color:#fff;">
            <b>Verify</b>
        </a>
    </div>
@endsection
@section('page_scripts')
    <script type="text/javascript">

        $(document).on('click', '.verify-email-code', function (e) {
            e.preventDefault();
            $.ajax({
                url: api_url + 'verify-email-code',
                type: 'POST',
                data: {
                    verification_code: $('.code').val()
                },
                dataType: "JSON",
                success: function (response) {
                    if (response.status == true) {
                        setTimeout(function () {
                            window.location.assign(base_url + 'home');
                        }, 600);
                    } else {
                        

                        // Clear previous validation messages
                        // $('.invalid-feedback').html(response.message);
                        $('.alert-div-danger').show();
                        $('.alert-div-danger').find('.alert-text').text(response.message);
                    }
                },
                error: function (response) {
                    showAlert("error", "Server Error");
                }
            });
        });
    </script>
@endsection
