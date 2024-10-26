@extends('layout.master')
@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <h3 class="card-title text-muted text-center">Add Brand</h3>
            <ol class="breadcrumb">
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card" style="margin:0px auto;">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" id="form_date">
                            <input type="hidden" name="role" value="vendor">
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Brand Name</label>
                                <input type="text" class="form-control" name="name" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Brand Email</label>
                                <input type="text" class="form-control" name="email" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Company Name</label>
                                <input type="text" class="form-control" name="company_name" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Company Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Website</label>
                                <input type="text" class="form-control" name="website" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Website">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Brand Mobile</label>
                                <input type="text" class="form-control" name="phone" id="exampleInputUsername1"
                                       autocomplete="off" placeholder="Mobile">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Brand Country</label>
                                <select class="js-example-basic-single form-select country_id" data-width="100%"
                                        name="country_id">
                                    <option value="">Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Brand State</label>
                                <select class="js-example-basic-single form-select state_id" data-width="100%"
                                        name="state_id">
                                    <option value="" disabled>Select State</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">Brand City</label>
                                <select class="js-example-basic-single form-select city_id" data-width="100%"
                                        id="city_id"
                                        name="city_id">
                                    <option value="" disabled>Select City</option>

                                </select>
                            </div>
                            {{--                            <div class="mb-3">--}}
                            {{--                                <label for="exampleInputUsername1" class="form-label">Brand Nationality</label>--}}
                            {{--                                <input type="text" class="form-control" name="nationality" id="exampleInputUsername1"--}}
                            {{--                                       autocomplete="off" placeholder="Nationality">--}}
                            {{--                            </div>--}}
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Brand Type</label>
                                <select class="js-example-basic-single form-select" data-width="100%" name="type">
                                    <option value="" disabled>Select Type</option>
                                    <option value="BUYER">Buyer</option>
                                    <option value="SELLER">Seller</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Brand Image</label>
                                <input type="file" id="myDropify" name="image"/>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Description</label>
                                <textarea id="maxlength-textarea" name="description" class="form-control"
                                          id="defaultconfig-4"
                                          maxlength="100" rows="8"
                                          placeholder="This textarea has a limit of 100 chars."></textarea>
                            </div>
                            {{--                            <div class="mb-3">--}}
                            {{--                                <div class="form-check form-switch mb-2">--}}
                            {{--                                    <input type="checkbox" class="form-check-input" id="formSwitch1" name="status">--}}
                            {{--                                    <label class="form-check-label" for="formSwitch1">Active</label>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-danger">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_scripts')
    <script type="text/javascript">

        $(document).on('submit', '#form_date', function (e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: api_url + 'users/store',
                type: 'post',
                dataType: "JSON",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.status == true) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
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
        })
    </script>
@endsection
