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
   <!-- Core JavaScript (Ensure this is loaded first for any framework dependencies) -->
<script src="{{ asset('admin_asset/assets/vendors/core/core.js')}}"></script>

<!-- jQuery (Ensure it is loaded before DataTables) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

<!-- DataTables JS (Must load after jQuery) -->
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

<!-- DataTable Initialization (Ensure table ID matches in HTML) -->
<script>
    $(document).ready(function () {
        if ($('#exampleTable').length) {
            $('#exampleTable').DataTable({
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });
        }
    });
</script>

<!-- Plugin JS -->
<script src="{{ asset('admin_asset/assets/vendors/chartjs/Chart.min.js')}}"></script>
<script src="{{ asset('admin_asset/assets/vendors/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{ asset('admin_asset/assets/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{ asset('admin_asset/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('admin_asset/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>

<!-- Custom JS -->
<script src="{{ asset('admin_asset/assets/js/template.js')}}"></script>
<script src="{{ asset('admin_asset/assets/js/dashboard-light.js')}}"></script>
<script src="{{ asset('admin_asset/assets/js/data-table.js')}}"></script>
<script src="{{ asset('admin_asset/assets/js/dropify.js')}}"></script>
<script src="{{ asset('admin_asset/assets/js/custom.js')}}"></script>
<script src="{{ asset('admin_asset/assets/js/authenticate.js')}}"></script>

<!-- Additional Plugins -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<!-- DateTime Picker -->
<link rel="stylesheet" href="{{ asset('admin_asset/assets/datetimepicker/build/jquery.datetimepicker.min.css') }}">
<script src="{{ asset('admin_asset/assets/datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>

 <!-- Load Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<!-- Load Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
 
<!-- Dropify CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify/dist/css/dropify.min.css">

<!-- Dropify JS -->
<script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>

<script src="https://unpkg.com/feather-icons"></script>

 <style>
    .dataTables_wrapper .dataTables_filter input{
      border: 1px solid #997045;
        padding: 5px 12px 6px 10px !important; 
    }
    ::-webkit-scrollbar {
  width: 6px; /* You can adjust this value based on your preference */
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
    .select2-results__message {
        font-weight: normal !important;
    }
  </style>
    <script>
     function formatCountry(country) {
    if (!country.id) {
        return country.text;
    }

    var flagUrl = $(country.element).data('flag-url'); // Access the flag-url data attribute

    // If no flag URL is available, fallback to default image or nothing
    if (!flagUrl) {
        var $country = $( 
        '<img src="' + flagUrl + '" class="img-flag" style="width:20px; height:13px;margin-top:-5px; display:none;" />' + 
        '<span style="font-size:14px; margin-left: 2px;">' + country.text + '</span>'
    );// Optional default image
    }else{
        var $country = $( 
        '<img src="' + flagUrl + '" class="img-flag" style="width:20px;height:13px;margin-top:-5px;" />' + 
        '<span style="font-size:14px; margin-left: 7px;">' + country.text + '</span>'
    );
    }

   

    return $country;
}

        $(document).ready(function () {
            $.fn.select2.defaults.set("language", {
                noResults: function () {
                    return "No Data";
                }
            });
         $(".currency_dropdown").select2({
            templateSelection: formatCountry,
            templateResult: formatCountry,
        });
        $(".country_dropdown").select2({
            templateSelection: formatCountry,
            templateResult: formatCountry,
            // minimumResultsForSearch: -1
        });

        $(".city_dropdown").select2({
            // templateSelection: formatCountry,
            // templateResult: formatCountry,
            // minimumResultsForSearch: -1
        });
      
        $(".chat").select2({
   
    minimumResultsForSearch: -1
})

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
