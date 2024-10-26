 <!-- partial:partials/_footer.html -->
 <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
				<p class="text-muted mb-1 mb-md-0">Copyright © 2023 <a href="#" target="_blank">InfluencersPRO</a>.</p>
				<p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
	</footer>
			<!-- partial -->
		
		</div>
	</div>

	<!-- core:js -->
	<script src="{{ asset('assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{ asset('assets/vendors/chartjs/Chart.min.js')}}"></script>
  <script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.js')}}"></script>
  <script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
  <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{ asset('assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{ asset('assets/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="{{ asset('assets/js/dashboard-light.js')}}"></script>
  <script src="{{ asset('assets/js/datepicker.js')}}"></script>
	<!-- End custom js for this page -->

        <!-- Plugin js for this page -->
        <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
        <script src="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
        <!-- End plugin js for this page -->

        <!-- Custom js for this page -->
        <script src="{{ asset('assets/js/data-table.js')}}"></script>
        <!-- End custom js for this page -->

		  <!-- Plugin js for this page -->
		  <script src="{{ asset('assets/vendors/sweetalert2/sweetalert2.min.js')}}"></script>
        <!-- End plugin js for this page -->

        <!-- Custom js for this page -->
        <script src="{{ asset('assets/js/sweet-alert.js')}}"></script>
        <!-- End custom js for this page -->
	<script src="{{ asset('assets/js/dropify.js')}}"></script>
	<script src="{{ asset('assets/vendors/dropify/dist/dropify.min.js')}}"></script>

	<script>
    var varyingModal = document.getElementById('varyingModal')
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

</body>
</html>    