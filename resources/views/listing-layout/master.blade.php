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
.darkerbtn {
  background-color: #7070707d !important;
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


        $('.btn-darker').on('click', function () {
        const inputValue = $(this).val().trim();
   
  $('.btn-darker').addClass('darkerbtn');


   
      });
      
      $('.btn-darker-hide').on('click', function () {
        const inputValue = $(this).val().trim();
   
  $('.btn-darker-hide').addClass('darkerbtn');


   
      });


        ajax_setup();
    });
</script>
@yield('page_scripts')
</body>
</html>
