<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
@include("layout.header")
<!--end::Head-->
<!--begin::Body-->

@php

// dd($countries);
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
@include('modals.report_user')
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet"> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{--Goggle Recaptcha start--}}
{{-- <script src="https://www.google.com/recaptcha/api.js?render={{ env('GOOGLE_RECAPTCHA_KEY') }}"></script> --}}
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

<script src="{{asset('js/authenticate.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{ asset('js/slick.js')}}"></script>
<script src="{{ asset('js/alerts.js')}}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('select2/js/select2.min.js')}}" type="text/javascript " charset="utf-8 "></script>
<script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places"></script>

{{--<script src="{{asset('js/map.js?v='.date('ymdhis'))}}"></script>--}}

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    


<style>
     .select2-container--default .select2-selection--single .select2-selection__rendered{
        color: blue !important;
    }

    .disabled {
  background-color: #7070707d !important;


}


</style>
<script>
    //countries dropdown
  


      $(document).ready(function () {
      $('#discountCode').on('input', function () {
        const inputValue = $(this).val().trim();

       
if (inputValue === "") {
  
  $('.apply-btn').removeClass('disabled');
} else {
   
  $('.apply-btn').addClass('disabled');
}

   
      });

  
    });
    
    function formatCountry(country) {
            if (!country.id) {
                return country.text;
            }

            var flagUrl = $(country.element).data('flag-url'); // Access the flag-url data attribute
            if (!flagUrl) {
        var $country = $( 
        '<img src="' + flagUrl + '" class="img-flag" style="width:20px; height:13px; display:none;" />' + 
        '<span style="font-size:14px; margin-left: 2px;">' + country.text + '</span>'
    );// Optional default image
    }else{
            var $country = $(
                '<img src="' + flagUrl + '" class="img-flag" style="width:20px;height:13px;"> <span  style="font-size:14px; margin-left: 2px;white-space:nowrap; ">' + country.text + '</span>'
            );
            return $country;
        };
      };

      $(document).on('change', '.country_id', function () {
    var country_id = $(this).val();
   
    if (country_id) {
        getCitiesByCountry(country_id);
    }
});

function getCitiesByCountry(country_id) {

// alert(country_id);
$.ajax({
    url: api_url + 'get-city-countries',
    type: "POST",
    dataType: "json",
    data: {
        "country_id": country_id
    },
    success: function (response) {
        if (response.data.length > 0) {
            console.log( response.data);
            var states = response.data;
            $("#register_cities").empty();
           
            $("#register_cities").append('<option selected disable value="">City </option>');
            $("#profile_cities").empty();
           
           $("#profile_cities").append('<option selected disable value="">City </option>');

            if (states) {
                $.each(states, function (index, value) {
                    $("#register_cities").append('<option value="' + value.id + '">' + value.name + '</option>');
                    $("#profile_cities").append('<option value="' + value.id + '">' + value.name + '</option>');
                });
            }
        } else {
            $("#register_cities").empty();
            $("#profile_cities").empty();
        }
    }
});
}

        $(document).ready(function(){
    $('.datepicker_register').datepicker({
      format: 'dd-mm-yyyy',
       autoclose: true,
      todayHighlight: true
    }).on('show', function(e) {
        $('.datepicker').addClass('position-850');
    });;

    



    $('#datepicker1').datepicker({
        format: 'dd.mm.yyyy',
        autoclose: true,
        todayHighlight: true,
        beforeShow: function(input, inst) {
        setTimeout(function() {
            $('.datepicker').css('left', '550px');
        }, 0); // Set timeout to ensure it applies after datepicker positioning
    }
    }).on('show', function(e) {
        $('.datepicker').addClass('position-550');
    });
 
        $(".country_dropdown").select2({
            templateSelection: formatCountry,
            templateResult: formatCountry,
            minimumResultsForSearch: -1
        });

        $("#register_country").select2({
            // templateSelection: formatCountry,
            // templateResult: formatCountry,
            // // minimumResultsForSearch: -1
        });
        $("#register_country").on("select2:open", function () {
    // Select the currently open dropdown and adjust its width
    $(".select2-container--open").css("width", "150px");
});

$("#register_cities").select2({
            // templateSelection: formatCountry,
            // templateResult: formatCountry,
            //  minimumResultsForSearch: -1
        });
        $("#register_cities").on("select2:open", function () {
    // Adjust the width of the currently open dropdown
    $(".select2-container--open .select2-dropdown--below").css("width", "200px");
});

$("#profile_cities").select2({
            // templateSelection: formatCountry,
            // templateResult: formatCountry,
            //  minimumResultsForSearch: -1
        });
        $("#profile_cities").on("select2:open", function () {
    // Adjust the width of the currently open dropdown
    $(".select2-container--open .select2-dropdown--below").css("width", "200px");
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

        $(".sort").select2({
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
        $(".chat").select2({
           
            minimumResultsForSearch: -1
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
            // minimumResultsForSearch: -1
            // templateSelection: formatCity,
            // templateResult: formatCity,
        });
        $(".city_dropdown_list").select2({
            // minimumResultsForSearch: -1
            // templateSelection: formatCity,
            // templateResult: formatCity,
        });

        $(".city_dropdown_register_form").select2();

    });
    $(document).on('change', '.country_dropdown1', function () {

        window.location.assign(base_url + 'home/?country=' +  $(this).val());
    });
    $(document).on('change', '.city_dropdown', function () {
        window.location.assign(base_url + 'home/?country=' + {{ request()->country }} + '&city=' + $(this).val());
    });
    $(document).on('change', '.currency_dropdown', function () {

        const selectedCurrency = $(this).val();
        fetch('admins/set-currency', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify({ currency: selectedCurrency }),
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Reload the page with the currency query parameter
                const currentUrl = new URL(window.location.href);
                currentUrl.searchParams.set('currency', selectedCurrency);
                window.location.assign(currentUrl.toString());
            } else {
                console.error('Error storing currency:', data.message);
            }
        })
        .catch(error => {
            console.error('AJAX error:', error);
        });
//       const pathname = window.location.pathname;

// // Remove the leading slash
//     const pathnameWithoutSlash = pathname.startsWith('/') ? pathname.substring(1) : pathname;

//     window.location.assign(base_url + pathnameWithoutSlash + '?currency=' + $(this).val());
   

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
