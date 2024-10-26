@include('dashboard/inc/header')
  <!-- partial:partials/_sidebar -->
  @include('dashboard/inc/sidebar')
		<!-- partial:partials/_sidebar -->
        <div class="page-wrapper">
            @include('dashboard.inc.topbar')
            <div class="page-content">
        <nav class="page-breadcrumb">
                        <h6 class="card-title">All Vendors</h6>
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
                        <a href="{{ asset('add-vendor')}}"><button class="btn btn-primary btn-icon-text mb-2 mb-md-0" ><i width="15" class="link-icon text-white" data-feather="plus-circle"></i>  Add New Vendor</button>
                        </a>
                        @include('dashboard.inc.sections.edit-vendor')  
                      </div>
                                                    <thead>
                                                        <tr> 
                                                            <th>Sr.No</th>
                                                            <th>Image</th>
                                                            <th>Vendor.Id</th>
                                                            <th>Vendor.Name</th>
                                                            <th>Vendor.Type</th>
                                                            <th>Member.Since</th>
                                                            <th>Number.of.Outlets</th>
                                                            <th>Number.of.Deals</th>
                                                            <th>Pending.Deals</th>
                                                            <th>Amount.Paid</th>
                                                            <th>Country</th>
                                                            <th>City</th>
                                                            <th>Mobile</th>
                                                            <th>Email</th>
                                                            <th>Rating.by.InfluencerPro</th>
                                                            <th>Submitted Files</th>
                                                            <th>Vendor’s.User.Person.Name</th>
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
                                                    <td>#05</td>
                                                    <td>Edinburgh</td>
                                                    <td>Buyer</td>
                                                    <td>19 june 2023</td>
                                                    <td>06</td>
                                                    <td>06</td>
                                                    <td>02</td>
                                                    <td>$ 2000</td>
                                                    <td>Dubai</td>
                                                    <td>Arjman</td>
                                                    <td>+8768865868</td>
                                                    <td>xyz@gmail.com</td>
                                                    <td>4.0</td>
                                                    <td>04</td>
                                                    <td>niaxa</td>
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
                                                    <td>#05</td>
                                                    <td>Edinburgh</td>
                                                    <td>Buyer</td>
                                                    <td>19 june 2023</td>
                                                    <td>06</td>
                                                    <td>06</td>
                                                    <td>02</td>
                                                    <td>$ 2000</td>
                                                    <td>Dubai</td>
                                                    <td>Arjman</td>
                                                    <td>+8768865868</td>
                                                    <td>xyz@gmail.com</td>
                                                    <td>4.0</td>
                                                    <td>04</td>
                                                    <td>niaxa</td>
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
                                                    <td>#05</td>
                                                    <td>Edinburgh</td>
                                                    <td>Buyer</td>
                                                    <td>19 june 2023</td>
                                                    <td>06</td>
                                                    <td>06</td>
                                                    <td>02</td>
                                                    <td>$ 2000</td>
                                                    <td>Dubai</td>
                                                    <td>Arjman</td>
                                                    <td>+8768865868</td>
                                                    <td>xyz@gmail.com</td>
                                                    <td>4.0</td>
                                                    <td>04</td>
                                                    <td>niaxa</td>
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
