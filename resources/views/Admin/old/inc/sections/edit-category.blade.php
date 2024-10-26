            <!-- Modal -->
            <div class="modal fade" id="editcategory" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">Edit Category</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                    </div>
                    <div class="modal-body">
                    <form class="forms-sample">
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" value="Ads">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" value="/category/adz">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" class="form-control">Category Image</label><br/>
                        <img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80" style="margin-bottom:5px;" class="form-control">
                        <br/>
                        <input type="file" class="form-control" id="myDropify"/>                  
                        </div>
                  
                    <div class="mb-3">
                    <div class="form-check form-switch mb-2">
											<input type="checkbox" class="form-check-input" id="formSwitch1" checked>
											<label class="form-check-label" for="formSwitch1">Active</label>
										</div> 
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </form>
                    </div>
                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                  </div>
                </div>
              </div>