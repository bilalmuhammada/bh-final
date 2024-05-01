@extends('layout.master')
@section('content')

    <section class="padtb50">
        <div class="container">
            <div class="row justify-content-md-center mb-20px">

                <div class="col-md-6 col-lg-5 col-xl-4 about-us-text-area">
                    <div class="password-alert" style="display: none"></div>
                    <div class="loginarea">
                        <div class="changepassword">
                            <h1>Forgot Password11</h1>
                        </div>
                        <form class="forgot-password-form">
                            <div class="alert-div" style="display: none">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <div class="alert-text">here</div>
                                    {{--                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                                    {{--                                        <span aria-hidden="true">&times;</span>--}}
                                    {{--                                    </button>--}}
                                </div>
                            </div>
                            <!-- password area start -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><img
                                            src="{{asset('images/envelop.png')}}" width="33" height="20"/></span>
                                </div>
                                <input type="email" name="email" class="form-control login-user" placeholder="Email Address"
                                       aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                            <!-- password area finish -->

                            <!-- submit button start -->
                            <div class="login-submit-button-area">
                                <a href="#" class="btn btn-primary forgot-submit">Submit</a>
                            </div>
                            <!-- submit button finish -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
