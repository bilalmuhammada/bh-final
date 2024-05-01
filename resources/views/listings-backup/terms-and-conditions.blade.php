@extends('listing-layout.master')
@section('content')
    <div class="col-md-4 mx-auto">
        <h3 class="text-center">Safety first!</h3>
        <p class="text-center">We review all ads to keep everyone on businesshub safe and happy.</p>
        <p><b>Your ad will not go live if it is:</b></p>
        <p><b>(1)</b> For any prohibited item or activity that violates UAE law.</p>
        <p><b>(2)</b> In the wrong category.</p>
        <p><b>(3)</b> Placed multiple times, or in multiple categories</p>
        <p><b>(4)</b> With fraudulent or misleading information.</p>
        <p><b>(5)</b> For an item that is located outside the UAE.</p>
        <p>For more information, read our<a href="{{ env('BASE_URL').'terms-of-use'}}"> terms and conditions</a></p>
    </div>
    <div class="col-md-4 mx-auto text-center">
        <div style="display: none" class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">×</span></button>
        </div>
    </div>
    <div class="col-md-4 mx-auto" style="margin-top: 20px;">
        <a href="{{env('BASE_URL') . 'listing/agree-to-terms/'. $listing_id}}" class="btn agree-to-terms-btn" style="background: #0000FF;color:#fff;">
            <b>Yes, I agree</b>
        </a>
    </div>
@endsection
@section('page_scripts')
    <script type="text/javascript">
        function showAlert(msg = 'alerts') {
            $('.close').before(msg).parent('.alert').show();
        }

        $(document).on('click', '.agree-to-terms-btn', function (e) {
            e.preventDefault();
            $.ajax({
                url: api_url + 'listing/agree-to-terms/'+ {{$listing_id}},
                type: 'POST',
                processData: false,
                contentType: false,
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        console.log(response);
                        window.location.assign(base_url + response.endpoint);
                        //window.location.assign(base_url + "verify-email");
                    } else {
                        alert(response.message);
                    }
                },
                error: function (response) {
                    Swal.fire({
                        title: 'Problem!',
                        text: 'Unexpected error',
                        icon: 'warning',
                    })
                }
            });
        });
    </script>
@endsection
