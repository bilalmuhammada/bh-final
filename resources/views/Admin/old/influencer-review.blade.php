@include('dashboard/inc/header')
  <!-- partial:partials/_sidebar -->
  @include('dashboard/inc/sidebar')
		<!-- partial:partials/_sidebar -->
 <div class="page-wrapper">  
    @include('dashboard.inc.topbar')
  <!-- partial -->
<div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
            <h6 class="card-title">Reviews</h6>
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
                                <th>Sr. No</th>
                                <th>Overall Rating</th>
                                <th>User Type/Category</th>
                                <th>Reviewed by</th>
                                <th>Reviewer Name</th>
                                <th>Reviewer Date</th>
                                <th>Reviewer Star Rate</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>5.5</td>
                                <td>Youtuber</td>
                                <td>Anglina</td>
                                <td>Anglinax</td>
                                <td>04/04/23</td>
                                <td>5.5</td>
                                <td><i width="15" class="link-icon text-danger" data-feather="trash-2" onclick="showSwal('passing-parameter-execute-cancel')"></i></td>
                               
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5.5</td>
                                <td>Youtuber</td>
                                <td>Anglina</td>
                                <td>Anglinax</td>
                                <td>04/04/23</td>
                                <td>5.5</td>
                                <td><i width="15" class="link-icon text-danger" data-feather="trash-2" onclick="showSwal('passing-parameter-execute-cancel')"></i></td>
                               
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>5.5</td>
                                <td>Youtuber</td>
                                <td>Anglina</td>
                                <td>Anglinax</td>
                                <td>04/04/23</td>
                                <td>5.5</td>
                                <td><i width="15" class="link-icon text-danger" data-feather="trash-2" onclick="showSwal('passing-parameter-execute-cancel')"></i></td>
                               
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
