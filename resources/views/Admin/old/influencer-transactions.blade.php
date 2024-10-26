@include('dashboard/inc/header')
  <!-- partial:partials/_sidebar -->
  @include('dashboard/inc/sidebar')
		<!-- partial:partials/_sidebar -->        
        <div class="page-wrapper">
            @include('dashboard.inc.topbar')
                <div class="page-content">
                    <nav class="page-breadcrumb">
                    <h6 class="card-title">Influencer Transactions</h6>
                        <ol class="breadcrumb">
                        </ol>
                    </nav>
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="dataTableExample" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Invoice#</th>
                                                    <th>User Name</th>
                                                    <th>User Type</th>
                                                    <th>Transaction Status</th>
                                                    <th>Payment</th>
                                                    <th>Total Transaction</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#01</td>
                                                    <td>Edinburgh</td>
                                                    <td>Buyer</td>
                                                    <td><i width="15" class="link-icon text-success" data-feather="check-square"></i>  <span class="text-success">Pending</span></td>
                                                    <td>$320,800</td>
                                                    <td>$550,800</td>
                                                    <td><i width="15" class="link-icon text-danger" data-feather="trash-2" onclick="showSwal('passing-parameter-execute-cancel')"></i><span class="text-danger"> Delete</span></td>

                                                </tr>
                                                <tr>
                                                    <td>#02</td>
                                                    <td>Edinburgh</td>
                                                    <td>Buyer</td>
                                                    <td><i width="15" class="link-icon text-danger" data-feather="check-square"></i>  <span class="text-danger">Cancelled</span></td>
                                                    <td>$320,800</td>
                                                    <td>$550,800</td>
                                                    <td>
                                                    <i width="15" class="link-icon text-danger" data-feather="trash-2" onclick="showSwal('passing-parameter-execute-cancel')"></i><span class="text-danger"> Delete</span></td>

                                                </tr>
                                                <tr>
                                                    <td>#03</td>
                                                    <td>Edinburgh</td>
                                                    <td>Buyer</td>
                                                    <td><i width="15" class="link-icon text-success" data-feather="check-square"></i>  <span class="text-success">Pending</span></td>
                                                    <td>$320,800</td>
                                                    <td>$550,800</td>
                                                    <td><i width="15" class="link-icon text-danger" data-feather="trash-2" onclick="showSwal('passing-parameter-execute-cancel')"></i><span class="text-danger"> Delete</span></td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
  <!-- partial -->

@include('dashboard/inc/footer')
