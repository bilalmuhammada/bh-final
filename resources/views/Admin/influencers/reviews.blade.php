@extends('Admin.layout.master')

<style>
    th{
        font-weight: 900 !important;
    }
    #datatable_filter{
margin-right: 12rem !important;
    }
    .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_length {
        padding: 0px !important;
    }
</style>
@section('content')

    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <h6 class="card-title" style="color: blue; font-weight: bold; ">Ad Report</h6>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID #</th>
                                    <th>Photo</th>
                                   
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>Ad status</th>
                                    <th>Reported By</th>
                                    <th>Reporter ID</th>
                                    <th>Reason</th>
                                    <th>Message</th>

                                    <th>Date</th>
                                    <th>Report</th>
                                   
                                    <th>Report Status</th>

                                    <th>Date</th>
                                    <th>Actioned By</th>
                                    <th>Actioned ID</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="t-body">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('page_scripts')
    <script type="text/javascript">
        function makeTableBody(data) {
            var table_body = '';
            var count = 1;
            data.forEach(function (value, key) {
                var checked = '';
                if (value.status === 'active') {
                    checked = 'checked';
                }
                table_body += `<tr>
                                    <td>${count++}</td>
                                    <td>${value.id}</td>
                                     <td>
                                        <img class="wd-30 ht-30 rounded-circle" src="${value.listing.image_url}" alt="profile">
                                    </td>
                                      <td>${value.listing.category.name}</td>
                                       <td>${value.listing.subcategory.name}</td>
                                        <td>${value.listing.status}</td>
                                        <td>${'--'}</td>
                                         <td>${'--'}</td>
                                          <td>${'--'}</td>
                                             <td>${'--'}</td>
                                              <td>${'--'}</td>
                                         <td>${'--'}</td>
                                          <td>${'--'}</td>
                                             <td>${'--'}</td>
                                               <td>${'--'}</td>
                                                   <td>${'--'}</td>
                                               <td>${'--'}</td>
                                               <td>
                                            
                                     <a href='#' id='delete-btn' review-id='${value.id}' class='remove-review text-danger'><i class='fa fa-trash'></i></a></td>
                                </tr>`;
            });
 // <td>${value.id}</td>
                                    // <td>${value.category ? value.category.name : '-'}</td>
                                    // <td>${value.user ? value.user.name : '-'} ${value.user ? value.user.last_name : ''}</td>
                                    // <td>${value.overall_rating}</td>
                                    // <td>${value.message ?? '-'}</td>
                                    // <td>${value.language ?? '-'}</td>
                                    // <td>${value.date_formatted}</td>
                                    // <td>${value.status ?? '-'}</td>
                                    // <td>
                                            
                                    // <a href='#' id='delete-btn' review-id='${value.id}' class='remove-review text-danger'><i class='fa fa-trash'></i></a></td>

            $('.t-body').html(table_body);
            initializeDatatable('#dataTable');
        }

        function fetchRecords() {
            $.ajax({
                url: api_url + 'listing/reviews',
                type: 'post',
                data: {'role': 'influencer'},
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        makeTableBody(response.data);
                    } else {
                        $('.t-body').html("<tr><td class='text-center' colspan='11'>No Data</td></tr>");
                    }
                },
                error: function (response) {
                    Swal.fire({
                        title: 'Problem!',
                        text: 'Unexpected error',
                        icon: 'warning',
                    })
                }
            });
        }

        $(document).ready(function () {
            fetchRecords();
        });

        $(document).on('click', '.remove-review', function () {
            var id = $(this).attr('review-id');
            var url = api_url + 'users/' + id + '/delete-review';
            deleteRecord(url, $(this));
        });
    </script>
@endsection
