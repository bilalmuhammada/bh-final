@extends('layout.master')

<style>
        th{
        font-weight: 900 !important;
    }
</style>
@section('content')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <h6 class="card-title" style="color: blue; font-weight: bold;" >Brand Reviews</h6>
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
                                    <!-- <th>#</th>
                                    <th>Overall Rating</th>
                                    <th>User Type/Category</th>
                                    <th>Reviewed by</th>
                                    <th>Reviewer Name</th>
                                    <th>Reviewer Date</th>
                                    <th>Reviewer Star Rate</th>
                                    <th>Action</th> -->
                                    <th>#</th>
                                    <th>Photo</th>
                                    <th>ID #</th>
                                    <th>Brand Name</th>
                                    <th>Company Name</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Rate</th>
                                    <th>Message</th>
                                    <th>Language</th>
                                    <th>Date</th>
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
                                    <td><img src="${value.user.attachment ? value.user.attachment.file_url : ''}" alt=""></td>
                                    <td>${value.id}</td>
                                    <td>${value.user.brand_name ?? '-'}</td>
                                    <td>${value.user.company_name ?? '-'}</td>
                                    <td>${value.user ? value.user.name : '-'} ${value.user.last_name ?? ''}</td>
                                    <td>${value.position}</td>
                                    <td>${value.overall_rating}</td>
                                    <td>${value.message ?? '-'}</td>
                                    <td>${value.language ?? '-'}</td>
                                    <td>${value.date_formatted}</td>
                                    <td>${value.status ?? '-'}</td>
                                    <td>
                                    <a href='#' id='delete-btn' review-id='${value.id}' class='remove-review text-danger'><i class='fa fa-trash'></i></a></td>

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
