<!doctype html>
<html lang="en">
@include('listing-layout.header')

<body>
    <div class="container-fluid">
        <!-----------logo-------->
        @include('listing-layout.topbar')
        <!-----------logo end-------->
        <hr style="margin: -9px 0px 5px 0px;">
        @yield('content')
    </div>
    <style>
        .shaking {

            display: inline-block;
            transition: transform 0.2s ease-in-out;
        }

        .shaking:hover {
            animation: shakeIcon 0.5s infinite;
        }

        @keyframes shakeIcon {
            0% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-5px);
            }

            50% {
                transform: translateX(5px);
            }

            75% {
                transform: translateX(-5px);
            }

            100% {
                transform: translateX(0);
            }
        }

        .darkerbtn {
            background-color: rgba(62, 60, 60, 0.74) !important;
        }

        .lobibox-notify .lobibox-close {
            top: 6px !important;
        }

        /* .form-control:invalid , .form-control:valid{
    background-image: none !important;
} */
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }



        ::-webkit-scrollbar {
            width: 6px;
            /* You can adjust this value based on your preference */
        }




        /* Define the scrollbar thumb */
        ::-webkit-scrollbar-thumb {
            background-color: #997045;
            border-radius: 34px;
        }

        /* Define the scrollbar track */
        ::-webkit-scrollbar-track {
            background: transparent;
        }

        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: transparent;
            border: 1px solid #ccc;

            /* Custom arrow */
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23555' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 14px;
            padding-right: 30px;
        }

        /* Premium Toggle Styles */
        .premium-toggle-container {
            display: flex;
            flex-direction: column;
            align-items: center;

            margin-bottom: 0px;
        }

        .premium-toggle-label {
            font-weight: bold;
            font-size: 13px;
            margin-bottom: 7px;
            color: #333;
        }

        .toggle-wrapper {
            position: relative;
            display: flex;
            width: 140px;
            height: 30px;
            background-color: #f8f9fa;
            border-radius: 17px;
            padding: 3px;
            border: 1px solid #e0e0e0;
            box-shadow: inset 0 1px 3px rgba(0,0,0,0.05);
        }

        .toggle-wrapper input[type="radio"] {
            display: none;
        }

        .toggle-item {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
            cursor: pointer;
            font-size: 12px;
            font-weight: 700;
            color: #666;
            transition: all 0.3s ease;
        }

        .toggle-wrapper .slider {
            position: absolute;
            top: 3px;
            left: 3px;
            width: calc(50% - 3px);
            height: calc(100% - 6px);
            background-color: #A17A4E; /* Logo Gold */
            border-radius: 14px;
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1;
            box-shadow: 0 2px 5px rgba(161, 122, 78, 0.3);
        }

        .toggle-wrapper input[type="radio"]:checked + label + input + label + .slider,
        .toggle-wrapper input[type="radio"]:checked + label + .slider {
            /* Fallback or complex selectors if needed, but simple ones below usually work */
        }

        /* Logic for slider movement and label color */
        .toggle-wrapper input:nth-of-type(1):checked ~ .slider {
            transform: translateX(0);
        }

        .toggle-wrapper input:nth-of-type(2):checked ~ .slider {
            transform: translateX(100%);
        }

        .toggle-wrapper input:nth-of-type(1):checked ~ label:nth-of-type(1),
        .toggle-wrapper input:nth-of-type(2):checked ~ label:nth-of-type(2) {
            color: white;
        }

        .toggle-item:hover {
            color: #A17A4E;
        }

        .toggle-wrapper input:checked ~ label:hover {
            color: white;
        }
    </style>
    <!-- Optional JavaScript -->
    @include('listing-layout.footer')
    <script type="text/javascript">
        const api_url = "{{env('API_URL')}}";
        const base_url = "{{env('BASE_URL')}}";
        const public_url = "{{asset('/')}}";
        var token = localStorage.getItem("user_token");

        if (token == '' || token == undefined || token == null || token == 'null') {
            @if(session('user'))
            localStorage.setItem('user_token', "{{session()->get('user_token')}}");
            @endif
            // window.location.assign = base_url + 'home';
        }

        function ajax_setup() {
            $.ajaxSetup({
                headers: {
                    'Authorization': 'Bearer ' + token ?? "",
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                dataType: 'json',
            });
        }

        $(document).ready(function() {



            $('.btn-mobile').on('click', function(e) {
                e.preventDefault(); // Prevent any default behavior like radio button interaction
                // Toggle the darkerbtn class on the label
                if ($(this).hasClass('darkerbtn')) {
                    $(this).removeClass('darkerbtn');
                } else {
                    // Remove the darkerbtn class from all labels in case this is a toggle group
                    $('.btn-mobile').removeClass('darkerbtn');
                    $('.btn-mobile-hide').removeClass('darkerbtn');
                    // Add the darkerbtn class to the current clicked label
                    $(this).addClass('darkerbtn');
                }
            });



            $('.btn-mobile-hide').on('click', function(e) {
                e.preventDefault(); // Prevent any default behavior like radio button interaction
                // Toggle the darkerbtn class on the label
                if ($(this).hasClass('darkerbtn')) {
                    $(this).removeClass('darkerbtn');
                } else {
                    // Remove the darkerbtn class from all labels in case this is a toggle group
                    $('.btn-mobile-hide').removeClass('darkerbtn');
                    $('.btn-mobile').removeClass('darkerbtn');
                    // Add the darkerbtn class to the current clicked label
                    $(this).addClass('darkerbtn');
                }
            });



            $('.btn-darker').on('click', function(e) {
                e.preventDefault(); // Prevent any default behavior like radio button interaction
                // Toggle the darkerbtn class on the label
                if ($(this).hasClass('darkerbtn')) {
                    $(this).removeClass('darkerbtn');
                } else {
                    // Remove the darkerbtn class from all labels in case this is a toggle group
                    $('.btn-darker').removeClass('darkerbtn');
                    $('.btn-darker-hide').removeClass('darkerbtn');
                    // Add the darkerbtn class to the current clicked label
                    $(this).addClass('darkerbtn');
                }
            });


            $('.btn-darker-hide').on('click', function(e) {
                e.preventDefault(); // Prevent any default behavior like radio button interaction
                // Toggle the darkerbtn class on the label
                if ($(this).hasClass('darkerbtn')) {
                    $(this).removeClass('darkerbtn');
                } else {
                    // Remove the darkerbtn class from all labels in case this is a toggle group
                    $('.btn-darker-hide').removeClass('darkerbtn');
                    $('.btn-darker').removeClass('darkerbtn');
                    // Add the darkerbtn class to the current clicked label
                    $(this).addClass('darkerbtn');
                }
            });



            ajax_setup();
        });
    </script>
    @yield('page_scripts')
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places&loading=async&callback=initListingMap"></script>
</body>

</html>