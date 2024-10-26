@include('dashboard/inc/header')
  <!-- partial:partials/_sidebar -->
  @include('dashboard/inc/sidebar')
		<!-- partial:partials/_sidebar -->
        	<!-- partial -->
<div class="page-wrapper">        
     @include('dashboard.inc.topbar')
<div class="page-content">
        <nav class="page-breadcrumb">
        <h4 class="card-title text-muted">Change Password</h4>
            <ol class="breadcrumb">
            </ol>
        </nav>

<div class="row">
    <div class="col-md-7 grid-margin stretch-card">
      <div class="card">
       <div class="card-body">
                <form class="forms-sample">
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Old Password</label>
                        <input type="password" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Old Password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" placeholder=" New Password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder=" Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-danger">Cancel</button>
                </form>
          </div>
      </div>
    </div>
 </div>
</div>

  <!-- partial -->

@include('dashboard/inc/footer')
