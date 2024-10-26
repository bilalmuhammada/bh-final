@include('dashboard/inc/header')
<style>
    .form-control{
    border-color: #997045;
    text-align: center;
}
.form-control:hover{
    border-color: blue;
    
}
</style>
  <!-- partial:partials/_sidebar -->
  @include('dashboard/inc/sidebar')
		<!-- partial:partials/_sidebar -->
<div class="page-wrapper">
  @include('dashboard.inc.topbar')
    <div class="page-content">
        <nav class="page-breadcrumb">
        <h3 class="card-title text-muted text-center">Add Vendor</h3>
            <ol class="breadcrumb">
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card" style="margin:0px auto;">
        <div class="card">
        <div class="card-body">
                        <form class="forms-sample">
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Vendor Name</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Vendor Email</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Vendor Mobile</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Mobile">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Vendor Country</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Country">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Vendor City</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="City">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Vendor Nationality</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Nationality">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Vendor Type</label>
                                <select class="js-example-basic-single form-select" data-width="100%">
                                                <option value="TX">Select Type</option>
                                                <option value="TX">Buyer</option>
                                                <option value="NY">Seller</option>
                                </select>                    
                           </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Vendor Image</label>
                                <input type="file" id="myDropify"/>                  
                                </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Description</label>
                                <textarea id="maxlength-textarea" class="form-control" id="defaultconfig-4" maxlength="100" rows="8" placeholder="This textarea has a limit of 100 chars."></textarea>
                            </div>
                            <div class="mb-3">
                            <div class="form-check form-switch mb-2">
                                                    <input type="checkbox" class="form-check-input" id="formSwitch1">
                                                    <label class="form-check-label" for="formSwitch1">Active</label>
                                                </div> 
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
