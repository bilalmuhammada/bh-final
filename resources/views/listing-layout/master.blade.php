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
    animation: shake 2s linear infinite;
   }

  @keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
    100% { transform: translateX(0); }
  }
.darkerbtn {
  background-color:rgba(87, 87, 87, 0.36) !important;
}
.lobibox-notify .lobibox-close {
    top:6px !important;
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
  width: 6px; /* You can adjust this value based on your preference */
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
</style>
<!-- Optional JavaScript -->
@include('listing-layout.footer')
<script type="text/javascript">
    const api_url = "{{env('API_URL')}}";
    const base_url = "{{env('BASE_URL')}}";
    const public_url = "{{asset('/')}}";
    var token = localStorage.getItem("user_token");

    if (token == '' || token == undefined || token == null || token == 'null') {
        @if (session()->has('user'))
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

    $(document).ready(function () {


          
    $('.btn-mobile').on('click', function (e) {
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


      
    $('.btn-mobile-hide').on('click', function (e) {
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

      
   
    $('.btn-darker').on('click', function (e) {
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
    
   
    $('.btn-darker-hide').on('click', function (e) {
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
</body>
</html>
