<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
@include("layout.header")
<!--end::Head-->
<!--begin::Body-->

@php

$url = request()->path();
$parts = explode('/', $url);
$first = $parts[0] ?? null;  
$second = $parts[1] ?? null;
//  dd($second =="plane-ad" );
@endphp
<body style="overflow-x: hidden;">
    @if(!in_array(request()->path(), ["about-us", "privacy-policy", "terms-of-use", "contact-us",]) && $second !=="plane-ad")
    @include("layout.topbar")
@else
    @include("layout.new-topbar")
@endif
@yield('content')
<!-- modals start -->
@include('modals.login')
@include('modals.forgot-password')
@include('modals.register')
@include('modals.report')
@include('modals.phone-request')
@include('modals.document-request')

<!-- modals end -->
<!-- footer area start -->
@include('layout.footer')
<!-- footer area end -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
{{--sweetalert  start--}}

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{--Goggle Recaptcha start--}}
<script src="https://www.google.com/recaptcha/api.js?render={{ env('GOOGLE_RECAPTCHA_KEY') }}"></script>
{{--slick start--}}
<script src="{{asset('slick/slick.js?v2022')}}" type="text/javascript " charset="utf-8 "></script>
{{--slick start--}}
<script src='https://cdn.jsdelivr.net/npm/slick-carousel@1.7.1/slick/slick.js'></script>

<script type="text/javascript ">
    const api_url = "{{env('API_URL')}}";
    const base_url = "{{env('BASE_URL')}}";
    const public_url = "{{asset('/')}}";
    var token = localStorage.getItem("user_token");

    console.log(token);

    if (token == '' || token == undefined || token == null || token == 'null') {
        @if (session()->has('user'))
        localStorage.setItem('user_token', "{{session()->get('user_token')}}");
        @endif
        //window.location.assign = base_url + 'home' + "{{ '?country=' . request()->country . '&city=' . request()->city}}";
    }
    const GOOGLE_RECAPTCHA_KEY = "{{env('GOOGLE_RECAPTCHA_KEY')}}";

    function ajax_setup() {
        $.ajaxSetup({
            headers: {
                'Authorization': 'Bearer ' + token ?? "",
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            dataType: 'json',
        });
    }

    function checkIfUserLoggedIn() {
        @if (session()->has('user'))
            return true;
        @else
            return false;
        @endif
    }


    $(document).ready(function () {
        ajax_setup();
    });
</script>
<!-- Lobibox -->
<script src="{{asset('asset/Lobibox/js/lobibox.js')}}"></script>
{{--custom files  start--}}
<!----------counter------>
<!-- jquery -->
<script src="{{ asset('des/js/core.min.js')}}"></script>
<!-- custom scripts -->
<script src="{{ asset('des/js/main.js')}}"></script>
<!---------counter------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
<script src="{{asset('js/authenticate.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{ asset('js/slick.js')}}"></script>
<script src="{{ asset('js/alerts.js')}}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('select2/js/select2.min.js')}}" type="text/javascript " charset="utf-8 "></script>
<script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places"></script>

{{--<script src="{{asset('js/map.js?v='.date('ymdhis'))}}"></script>--}}

<script>
    //countries dropdown
    $(document).ready(function () {
        function formatCountry(country) {
            if (!country.id) {
                return country.text;
            }

            var flagUrl = $(country.element).data('flag-url'); // Access the flag-url data attribute

            var $country = $(
                '<span><img src="' + flagUrl + '" class="img-flag" /> ' + country.text + '</span>'
            );
            return $country;
        };

        $(document).ready(function(){
    $('#datepicker').datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true,
      todayHighlight: true
    });
  });
        $(".country_dropdown").select2({
            templateSelection: formatCountry,
            templateResult: formatCountry,
            minimumResultsForSearch: -1
        });
        $(".language_dropdown").select2({
            templateSelection: formatCountry,
            templateResult: formatCountry,
            // minimumResultsForSearch: -1
        });
        $(".subcategory-select").select2({
            //  dropdownParent: $(this).parent()
            minimumResultsForSearch: -1
        });
        
        $(".country_dropdown1").select2({
            templateSelection: formatCountry,
            templateResult: formatCountry,
        });
        $(".currency_dropdown").select2({
            templateSelection: formatCountry,
            templateResult: formatCountry,
        });

        function formatCity(city) {
            if (!city.id) {
                return city.text;
            }

            var city_id = $(city.element).data('city-id'); // Access the custom data attribute
            var country_id = "{{ !empty(request()->country) ? request()->country : '' }}";

            var $city = $(
                '<a href="' + base_url + 'home?country=' + country_id + '&city=' + city_id + '" style="color:inherit;"><span class="spanz">' + city.text + '</span></a>'
            );
            return $city;
        };

        //cities dropdown
        $(".city_dropdown").select2({
            // templateSelection: formatCity,
            // templateResult: formatCity,
        });

        $(".city_dropdown_register_form").select2();

    });

    $(document).on('change', '.city_dropdown', function () {
        window.location.assign(base_url + 'home/?country=' + {{ request()->country }} + '&city=' + $(this).val());
    });
    $(document).on('change', '.currency_dropdown', function () {
        window.location.assign(base_url + 'home/?country=' + {{ request()->country }} + '&currency=' + $(this).val());
    });

    $(document).on('change', '.country_dropdown', function () {
      
        window.location.assign(base_url + 'home/?country=' + $(this).val());
    });


  
           
                
                // $(document).on('input', '.floating', function (e) {
        
        
                if ($('.floating').length > 0) {
                   
                   $('.floating').on('focus blur', function (e) {
                       $(this).parents('.form-focus').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
                   }).trigger('blur');
               }
        // });
    

</script>
@yield('page_scripts')
</body>

</html>
@include('modals.notify')
