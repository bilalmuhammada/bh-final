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
                <h6 class="card-title" style="color: blue; font-weight: bold;" >User Report</h6>
            </ol>
        </nav>
{{--        <div class="row">--}}
{{--            <div class="col-md-4">--}}
{{--                <h6 class="mb-3 mb-md-0">Show Entries</h6>--}}
{{--            </div>--}}
{{--            <div class="col-md-8 text-end mb-4">--}}
{{--                <div>--}}
{{--                    <button class="dt-button">CSV</button>&nbsp; &nbsp;--}}
{{--                    <button class="dt-button">Excel</button>&nbsp; &nbsp;--}}
{{--                    <button class="dt-button">PDF</button>&nbsp; &nbsp;--}}
{{--                    <button class="dt-button">Print</button>&nbsp; &nbsp;--}}
{{--                    <span class="">--}}
{{--                    <input type="text" class="btn__search" placeholder="Search">--}}
{{--                    </span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table">
                                <thead>
                                <tr>
                                  
                                    <th>#</th>
                                    <th>ID #</th>
                                    <th>Photo</th>
                                    
                                    <th>Name</th>

                                    <th>Gender</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>nationality</th>
                                    <th>Blocked By</th>
                                    <th>Blocked ID</th>
                                    <th>Date</th>

                                    <th>Reason </th>
                                    <th>Message </th>
                                    <th>Blocked By User </th>
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
            console.log(data);
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
                                        <img class="wd-30 ht-30 rounded-circle" src="${value.image_url}" alt="profile">
                                    </td>
                                    <td>${value.name}</td>
                                    <td>${value.gender}</td>

                                    <td>${value.phone}</td>
                                    <td>${value.email}</td>
                                    <td>${value.nationality_id}</td>

                                    <td>${'--'}</td>
                                    <td>${'--'}</td>
                                    <td>${'--'}</td>
                                    <td>${'--'}</td>
                                    <td>${'--'}</td>
                                    <td>${'--'}</td>

                                    <td class='td-toggle'>
                                        <label class="c-toggle">
                                            <input type="checkbox" name="change-status" ${checked} class="change-status" category-id='${value.id}' state='${checked}'>
                                            <span class="c-slider"></span>
                                        </label>
                                    </td>
                                    <td>
                                    <a href='#'  edit-id='${value.id}' class='open-popup mr-2 edit-btn'>
                                       
                                        Edit</a>
                                    <a href='#' id='delete-btn' vendor-id='${value.id}' class='remove-user text-danger'>
                                        
                                         Delete</a>
                                    </td>
                                </tr>`;
            });

            $('.t-body').html(table_body);
            initializeDatatable('#datatable');
        }

        function fetchRecords() {
            $.ajax({
                url: api_url + 'users/reviews',
                type: 'post',
                data: {'role': 'vendor'},
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        makeTableBody(response.data);
                    } else {
                        $('.t-body').html("<tr><td class='text-center' colspan='13'>No Data</td></tr>");
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
