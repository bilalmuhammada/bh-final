@extends('Admin.layout.master')
<style>
    .dt-button:hover{
    background-color: blue !important;
    color: white !important;
}
.dt-button{
    border-color: #997045 !important;

}
.col-sm-3{
    padding-right: 230px !important;

}
div.dt-buttons>.dt-button, div.dt-buttons>div.dt-button-split .dt-button{
    margin-right: 0.667em !important ;
}

.dataTables_filter>input:focus{
   border-color:blue !important; 
}

.dataTables_filter>input{
    
    
    border-color:#997045 !important;
    /* margin-right: 161px !important; */

}
.dataTables_filter{
    
    padding: 1px 0px 0px 0px !important ;
    /* border-color:#997045 !important; */
 margin-right: -28px !important;

}
::-webkit-scrollbar {
  width: 12px; /* You can adjust this value based on your preference */
}

/* Define the scrollbar thumb */
::-webkit-scrollbar-thumb {
  background-color: #997045;
  border-radius: 34px;
}

/* Define the scrollbar track */
::-webkit-scrollbar-track {
  background: transparent;
}

.c-toggle {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 30px;
    }

    /* The hidden checkbox input */
    .c-toggle input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider (background) */
    .c-slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: red !important; /* Inactive state */
        transition: 0.4s;
        border-radius: 34px;
    }

    /* Circle inside the slider */
    .c-slider:before {
        position: absolute;
        content: "\2715" !important; /* Unicode for X */
        height: 24px;
        width: 24px;
        left: 3px;
        bottom: 3px;
        background-color: white;
        color: red !important;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.4s;
        border-radius: 50%;
    }

    /* Toggle to active (checked) state */
    input:checked + .c-slider {
        background-color: green !important; /* Active state */
    }

    /* Move the circle and change icon when checked */
    input:checked + .c-slider:before {
        transform: translateX(30px);
        content: "\2713" !important; /* Unicode for checkmark */
        color: green !important;
    }

    .open-popup{
        margin-right: 7px !important;
        color: blue !important;
    }
    .fa-eye-slash {
    position: absolute !important;
    top: 28% !important;
    right: 4% !important;
    cursor: pointer !important;
    /* color: lightgray !important; */
    }
    th{
        font-weight: 900 !important;
    }
</style>
@section('content')

    <div class="page-content">
        <nav class="page-breadcrumb">
            <h6 class="card-title" style="color: blue !important; font-weight: bold; margin-left: 25px;"> Ads</h6>
            <ol class="breadcrumb">
            </ol>
        </nav>

        <div class="row"  >
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- <h6 class="card-title">All Transactions</h6> -->
                        <div class="table-responsive" style="margin-top: -2.5rem;">
                            <table id="datatable" class="table">
                                <div >
                                    <a href="{{ env('BASE_URL') . 'listing/select-category'}}">
                             
                                          <button class="btn btn-primary btn-icon-text mb-2 mb-md-0"><i width="15"
                                                                                                      class="link-icon text-white"
                                                                                                      data-feather="plus-circle"></i>
                                            Add Ad                                        </button>
                                    </a>
                                    {{-- @include('modals.edit-influencer')

                                    @include('modals.edit-vendor-and-influencer-status-modal') --}}
                                </div>
                                <thead>
                                    @php
                                    //  dd($data);

                                    @endphp
                                <tr>
                                    
                                    <th>#</th>
                                    <th>ID #</th>
                                    <th>Photo</th> 
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>Date</th>
                                    <th>Expiry Date</th> 
                                    <th>Featured Days</th>
                                   
                                    <th>Posted By</th>
                                    <th>User Id</th>
                                     
                                    <th>Position</th>
                                    <th>Referral Code</th>
                                    <th>Discount %</th>
                                    <th>Amount</th>
                                    <th>Payment Status</th>
                                    <th>City</th>
                                 
                                   
                                     <th>Country</th> 
                                    <th>Ad Status</th> 
                                    <th class="noExport">Status</th> <!-- Add noExport class here -->
                                    <th class="noExport">Action</th> 
                                </tr>
                                </thead>
                                <tbody class="t-body">
                                    {{-- @php dd($data) @endphp --}}

@foreach($data as $key=>$value)

{{-- @php dd($value) @endphp --}}
<tr><td>{{++$key}}</td>
    <td>{{$value->id}}</td>
    <td> <img class="wd-30 ht-30 rounded-circle" src="{{$value->main_image_url}}" alt="Image"></td>
    <td>{{$value->category?->name}}</td>
    <td>{{$value->subcategory?->name}}</td>
    <td>{{date('d.m.Y', strtotime($value->created_at))}}</td>
      <td>{{date('d.m.Y', strtotime($value->created_at))}}</td>
    <td>1</td>
    <td> @php
        $posted = [
            1 => 'Agent',
            0 => 'Broker',
            2 => 'Owner',
            3 => 'Staff'
        ];
    @endphp
    {{ $posted[$value->posted_by] ?? 'Unknown' }}</td>
   
    <td>{{$value->created_by}}</td>
    <td>{{$value->created_by_user?->role?->name}}</td>
    <td>--</td>
    <td>--</td>
    <td>{{$value->price ?? '--'}}</td>
    <td>--</td>
    <td>{{'--'}}</td>
    <td>{{'--'}}</td>
    <td>{{'--'}}</td>
    <td class='td-toggle'>
        <label class="c-toggle">
            <input type="checkbox" name="change-status" ${checked} class="change-status" category-id='${value.id}' state='${checked}'>
            <span class="c-slider"></span>
        </label>
    </td>
             
                                  
                     <td>
                    
                                        
                                        <a href='#'  edit-id='${value.id}' class='open-popup mr-2 edit-btn'>
                                           
                                            Edit</a>
                                        <a href='#' id='delete-btn' influencer-id='${value.id}' class='remove-user text-danger'>
                                         
                                                </i> Delete</a>
                                    </td>
    
</tr>


@endforeach

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

function validateInput(input) {
            
            // Allow only digits and the '+' sign, and ensure '+' is only at the beginning
            input.value = input.value.replace(/[^\d+]/g, '').replace(/(?!^)\+/g, '');
        } 
        
     $(document).ready(function() {
        initializeDatatable('#datatable','Ads');
        
        if ($('.floating').length > 0) {
            $('.floating').on('focus blur', function(e) {
                $(this).parents('.form-focus').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
            }).trigger('blur');
        }

        // Toggle Password Visibility
        $('#togglePassword').on('click', function() {
            let input = $(this).siblings('input');
            let type = input.attr('type') === 'password' ? 'text' : 'password';
            input.attr('type', type);
            $(this).toggleClass('fa-eye fa-eye-slash');
        });
    });
        function makeTableBody(data) {
            var table_body = '';
            
            
            
            var count = 1;
            var checked = '';
            // if (Array.isArray(data)) {

               data.forEach(function (value, index) {
                
                console.log(value['id']);
                table_body += `<tr>
                                    <td>1</td>
                                     
                             

                                </tr>`;
            });
//         } else {
//     console.error('Data is not an array:', data);
// }


            $('.t-body').html(table_body);
            initializeDatatable('#datatable');
        }

        function fetchRecords() {
            $.ajax({
                url: api_url + 'listing/ads/',
                type: 'get',
                data: {'role': 'influencer', 'status': "{{ request()->status }}"},
                dataType: "JSON",
                success: function (response) {
                    console.log(response.status);
                //    console.log(response.ads.id);
                //    console.log(Object.values(ads));
                    // makeTableBody(response.ads);
                    if (!response.status) {
                        // makeTableBody(response.data);
                    } else {
                        $('.t-body').html("<tr><td class='text-center' colspan='17'>No Data</td></tr>");
                    }
                },

                error: function (response) {
                    //Swal.fire({
                     //   title: 'Problem!',
                       // text: 'Unexpected error',
                        //icon: 'warning',
                    //})
                }
            });
        }

        $(document).ready(function () {
            fetchRecords();
        });


        $(document).on('click', '.edit-btn', function () {
            var id = $(this).attr('influencer-id');
            $.ajax({
                url: api_url + 'users/' + id + '/show',
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        $('.id').val(response.data.id);
                        $('.category_id').val(response.data.id);
                        $('.first_name').val(response.data.name);
                        $('.last_name').val(response.data.last_name);
                        $('.email').val(response.data.email);
                        $('.description').text(response.data.description);
                        $('.phone').val(response.data.phone);
                        $('.country_id').val(response.data.country_id);
                        $('.gender').val(response.data.personal_information ? response.data.personal_information.gender:'');
                        $('.age').val(response.data.personal_information ? response.data.personal_information.age :'')
                        $('.city_id').val(response.data.city_id);
                        $('.nationality').val(response.data.nationality);
                        $('.type').val(response.data.type);
                        $('.image-show').attr('src', response.data.image_url);

                        getCitiesByCountry(response.data.country_id);

                        setTimeout(function () {

                            $('.country_id').val(response.data.country_id);
                            $('.state_id').val(response.data.state_id);
                            $('.city_id').val(response.data.city_id);
                        }, 200)

                        if (response.data.status == 1) {
                            $("#formSwitch1").prop('checked', true);
                        } else {
                            $("#formSwitch1").prop('checked', false);
                        }

                        $("#editinfluencer").modal('show')
                    } else {
                        Swal.fire({
                            title: 'Problem!',
                            text: response.message,
                            icon: 'warning',
                        })
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
        });

        $(document).on('submit', '#edit-influence-form-data', function (e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            setTimeout($.ajax({
                url: api_url + 'users/update',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                        }).then((result) => {
                            destroyDatatable();
                            fetchRecords();
                            $("#editinfluencer").modal('hide')
                        })
                    } else {
                        Swal.fire({
                            title: 'Problem!',
                            text: response.message,
                            icon: 'warning',
                        })
                    }
                },
                error: function (response) {
                    Swal.fire({
                        title: 'Problem!',
                        text: 'Unexpected error',
                        icon: 'warning',
                    })
                }
            }), 1000);
        });

        $(document).on('submit', '#edit-status-form-data', function (e) {
            e.preventDefault();
            $.ajax({
                url: api_url + 'users/change-status',
                data: {
                    status: $("#editStatusModal .status").val(),
                    id: $("#editStatusModal .id").val(),
                },
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                        }).then((result) => {
                            destroyDatatable();
                            fetchRecords();
                            $("#editStatusModal").modal('hide')
                        })
                    } else {
                        Swal.fire({
                            title: 'Problem!',
                            text: response.message,
                            icon: 'warning',
                        })
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
        });

        $(document).on('change', '.change-status', function () {
            var status = 'off';
            if ($(this).attr('state') === '') {
                status = 'on'
            }

            $.ajax({
                url: api_url + 'users/change-status',
                data: {
                    status: status,
                    id: $(this).attr('category-id')
                },
                type: 'post',
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                        }).then((result) => {
                            destroyDatatable();
                            fetchRecords();
                        })
                    } else {
                        Swal.fire({
                            title: 'Problem!',
                            text: response.message,
                            icon: 'warning',
                        })
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
        });


        $(document).on('click', '.status-change-btn', function (e) {
            e.preventDefault();
            let id = $(this).attr('edit-id');
            let old_status = $(this).attr('old-status');
            $("#editStatusModal .id").val(id)
            $("#editStatusModal .status").val(old_status)
            $("#editStatusModal").modal('show')
        })

        $(document).on('click', '#delete-btn', function () {
            var id = $(this).attr('influencer-id');
            var url = api_url + 'users/' + id + '/delete';
            deleteRecord(url, $(this));
        });

        $(document).on('change', '#country_id', function () {
            var nationality_id = $(this).val();
            // alert(nationality_id );
            if (nationality_id) {
                $.ajax({
                    url: api_url + 'get-cities-by-country',
                    type: "POST",
                    dataType: "json",
                    data: {
                        "nationality_id": nationality_id
                    },
                    success: function (response) {
                        if (response.data.length > 0) {
                            var states = response.data;
                            $("#city_id").empty();
                            $("#brand_city_id").empty();

                            if (states) {
                                $.each(states, function (index, value) {
                                    $("#city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                    $("#brand_city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                });
                            }
                        } else {
                            $("#city_id").empty();
                            $("#brand_city_id").empty();
                        }
                    }
                });
            }
        });
    </script>
@endsection
