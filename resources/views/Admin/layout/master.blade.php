<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
@include("Admin.layout.header")
<!--end::Head-->
<!--begin::Body-->
<body>
{{--@dd(session()->get('user'))--}}
    <div class="main-wrapper">
        @include('Admin.layout.sidebar')
        <div class="page-wrapper">
            @include("Admin.layout.topbar")
            @yield('content')
        </div>
    </div>
    
  @if(session()->get('user'))
    <!-- footer area start -->
    
    @else
    @include('Admin.layout.footer')
    @endif
    <!-- footer area end -->
    <!-- core:js -->
    <script src="{{ asset('admin_asset/assets/vendors/core/core.js')}}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="{{ asset('admin_asset/assets/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{ asset('admin_asset/assets/vendors/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('admin_asset/assets/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('admin_asset/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('admin_asset/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('admin_asset/assets/vendors/feather-icons/feather.min.js')}}"></script>
    <script src="{{ asset('admin_asset/assets/js/template.js')}}"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="{{ asset('admin_asset/assets/js/dashboard-light.js')}}"></script>
    <script src="{{ asset('admin_asset/assets/js/datepicker.js')}}"></script>
    <!-- End custom js for this page -->

    <!-- Custom js for this page -->
    <script src="{{ asset('admin_asset/assets/js/data-table.js')}}"></script>
    <!-- End custom js for this page -->

    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
    <script src="{{ asset('admin_asset/assets/js/dropify.js')}}"></script>
    <script src="{{ asset('admin_asset/assets/vendors/dropify/dist/dropify.min.js')}}"></script>
    {{--datatable link start--}}
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    {{--datatable link end--}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('admin_asset/assets/js/custom.js')}}"></script>
    <script src="{{ asset('admin_asset/assets/js/authenticate.js')}}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <!-- jQuery UI CSS (required for styling) -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

{{--Datetime picker--}}
{{--https://xdsoft.net/jqplugins/datetimepicker/--}}

 {{-- <link rel="stylesheet" href="{{asset('admin_asset/assets/datetimepicker/build/jquery.datetimepicker.min.css')}}"> --}}
 {{-- <script src="{{asset('admin_asset/assets/datetimepicker/build/jquery.datetimepicker.full.min.js')}}"></script> 


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.js"></script> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.css" /> 
<!-- jQuery library -->
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<!-- jQuery UI library for Datepicker -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
{{-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> --}}

 
 <style>
    .dataTables_wrapper .dataTables_filter input{
      border: 1px solid #997045;
        padding: 5px 0px 6px 14px !important; 
    }
    ::-webkit-scrollbar {
  width: 12px; /* You can adjust this value based on your preference */
}
.dataTables_filter input:focus{
  border: 1px solid blue;

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
    <script>
       function formatCountry(country) {
            if (!country.id) {
                return country.text;
            }

            var flagUrl = $(country.element).data('flag-url'); // Access the flag-url data attribute

            var $country = $(
                '<img src="' + flagUrl + '" class="img-flag" / style="width:20px;height:13px;margin-top:-5px;"> <span  style="font-size:14px; margin-left: 4px;">' + country.text + '</span>'
            );
            return $country;
        };

        $(document).ready(function () {
         $(".currency_dropdown").select2({
            templateSelection: formatCountry,
            templateResult: formatCountry,
        });
        $(".country_dropdown").select2({
            templateSelection: formatCountry,
            templateResult: formatCountry,
            // minimumResultsForSearch: -1
        });
      
      });
        var varyingModal = document.getElementById('varyingModal')
        // alert(varyingModal);
        // if(varyingModal){
        varyingModal.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var recipient = button.getAttribute('data-bs-whatever')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var modalTitle = varyingModal.querySelector('.modal-title')
            var modalBodyInput = varyingModal.querySelector('.modal-body input')

            modalTitle.textContent = 'New message to ' + recipient
            modalBodyInput.value = recipient
        })
    </script>
      @yield('page_scripts')

</body>
</html>
