@include('dashboard/inc/header')
  <!-- partial:partials/_sidebar -->
  @include('dashboard/inc/sidebar')
		<!-- partial:partials/_sidebar -->
            <!-- partial -->

<div class="page-wrapper">
    @include('dashboard.inc.topbar')
    <div class="page-content">
    <nav class="page-breadcrumb">
                    <h6 class="card-title">All Categories</h6>
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
                        <button class="btn btn-primary btn-icon-text mb-2 mb-md-0" data-bs-toggle="modal" data-bs-target="#addcategory"><i width="15" class="link-icon text-white" data-feather="plus-circle"></i>  Add New Category</button>
                        @include('dashboard.inc.sections.add-category')  
                        @include('dashboard.inc.sections.edit-category')  
                      </div>
                                                    <thead>
                                                        <tr>
                                                            <th>Sr.No</th>
                                                            <th>Image</th>
                                                            <th>Category</th>
                                                            <th>Slug</th>
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
                                                    <td><i width="15" class="link-icon text-muted" data-feather="external-link"></i> /categories/pc-and-laptop</td>
                                                    <td><i width="15" class="link-icon text-success" data-feather="check-square"></i>  <span class="text-success">Active</span></td>
                                                     <td>
                                                     <i width="15" class="link-icon text-success" data-feather="edit" data-bs-toggle="modal" data-bs-target="#editcategory"></i><span class="text-success"> Edit</span>
                                                     <i width="15" class="link-icon text-danger" data-feather="trash-2" onclick="showSwal('passing-parameter-execute-cancel')"></i><span class="text-danger"> Delete</span>
                                                    </td>

                                                    </tr>
                                                    <tr>
                                                    <td>2</td>
                                                    <td>
								                   <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
                                                    </td>
                                                    <td>Edinburgh</td>
                                                    <td><i width="15" class="link-icon text-muted" data-feather="external-link"></i> /categories/pc-and-laptop</td>
                                                    <td><i width="15" class="link-icon text-danger" data-feather="check-square"></i>  <span class="text-danger">Inactive</span></td>
                                                    <td>
                                                     <i width="15" class="link-icon text-success" data-feather="edit" data-bs-toggle="modal" data-bs-target="#editcategory"></i><span class="text-success"> Edit</span>
                                                        <i width="15" class="link-icon text-danger" data-feather="trash-2" onclick="showSwal('passing-parameter-execute-cancel')"></i><span class="text-danger"> Delete</span></td>

                                                        </tr>
                                                        <tr>
                                                    <td>3</td>
                                                    <td>
								                   <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
                                                    </td>
                                                    <td>Edinburgh</td>
                                                    <td><i width="15" class="link-icon text-muted" data-feather="external-link"></i> /categories/pc-and-laptop</td>
                                                    <td><i width="15" class="link-icon text-success" data-feather="check-square"></i>  <span class="text-success">Active</span></td>
                                                    
                                                      <td>
                                                     <i width="15" class="link-icon text-success" data-feather="edit" data-bs-toggle="modal" data-bs-target="#editcategory"></i><span class="text-success"> Edit</span>

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

@include('dashboard/inc/footer')
               