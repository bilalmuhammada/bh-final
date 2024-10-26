@include('dashboard/inc/header')
  <!-- partial:partials/_sidebar -->
  @include('dashboard/inc/sidebar')
		<!-- partial:partials/_sidebar -->
 <div class="page-wrapper">
 @include('dashboard.inc.topbar')
 <div class="page-content">
        <nav class="page-breadcrumb">
                        <h6 class="card-title">Admin Users</h6>
            <ol class="breadcrumb">
            </ol>
        </nav>

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h6 class="card-title">All Transactions</h6> -->
                                <div class="table-responsive">
                                    <table id="dataTableExample" class="table">
                                        <div  style="margin-bottom:10px;">
                                        @include('dashboard.inc.sections.edit-vendor')  
                                    </div>
                                                    <thead>
                                                        <tr>
                                                            <th>Sr.No</th>
                                                            <th>Image</th>
                                                            <th>Admin Name</th>
                                                            <th>Admin Id</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                    <td>1</td>
                                                    <td>
								                   <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
                                                    </td>
                                                    <td>Edinburgh</td>
                                                    <td>#003</td>
                                                    <td><i width="15" class="link-icon text-success" data-feather="check-square"></i>  <span class="text-success">Active</span></td>
                                                     <td>
                                                     <i width="15" class="link-icon text-success" data-feather="edit" data-bs-toggle="modal" data-bs-target="#editvendor" ></i><span class="text-success"> Edit</span>
                                                     <i width="15" class="link-icon text-danger" data-feather="trash-2" onclick="showSwal('passing-parameter-execute-cancel')"></i><span class="text-danger"> Delete</span>
                                                    </td>

                                                    </tr>
                                                    <tr>
                                                    <td>2</td>
                                                    <td>
								                   <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
                                                    </td>
                                                    <td>Edinburgh</td>
                                                    <td>#003</td>
                                                    <td><i width="15" class="link-icon text-danger" data-feather="check-square"></i>  <span class="text-danger">Inactive</span></td>
                                                    <td>
                                                     <i width="15" class="link-icon text-success" data-feather="edit" data-bs-toggle="modal" data-bs-target="#editvendor"></i><span class="text-success"> Edit</span>
                                                        <i width="15" class="link-icon text-danger" data-feather="trash-2" onclick="showSwal('passing-parameter-execute-cancel')"></i><span class="text-danger"> Delete</span></td>

                                                        </tr>
                                                        <tr>
                                                    <td>3</td>
                                                    <td>
								                   <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
                                                    </td>
                                                    <td>Edinburgh</td>
                                                    <td>#003</td>
                                                    <td><i width="15" class="link-icon text-success" data-feather="check-square"></i>  <span class="text-success">Active</span></td>
                                                    
                                                      <td>
                                                     <i width="15" class="link-icon text-success" data-feather="edit" data-bs-toggle="modal" data-bs-target="#editvendor"></i><span class="text-success"> Edit</span>

                                                        <i width="15" class="link-icon text-danger" data-feather="trash-2" onclick="showSwal('passing-parameter-execute-cancel')"></i><span class="text-danger"> Delete</span>
                                                    </td>
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
