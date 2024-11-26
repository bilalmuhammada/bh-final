@extends('layout.master')
<style>
    /* .term-text h1{
        margin-top: 20px !important;
    } */
    .login-header{

        margin-top:11px !important;
    }
</style>
@section('content')

    <!-- Terms and Conditions area start -->
    <section class="">
        <div class="container">
            <div class="row" style="margin-bottom: 3rem;">
                <div class="col-md-12 col-lg-12 col-xl-12 term-text">
                    <div class="login-header">
                        <a href="{{ env('BASE_URL') }}">
                            <img src="{{asset('images/businesshub.png')}}" alt="" width="150px" alt="logo">
                        </a>
                        {{-- <h3 style="margin-top: 20px;">Contact Us</h3> --}}
                        <h1 class="terms-h">Terms of Use</h1>
                        {{-- <p>Share your mind with us!</p> --}}
                    </div>
                
                  
<h6 style="margin-top: 28px; ">Last Revised Date: <span style="font-weight:800 "> November 1, 2024</span></h6>

                </div>
            </div>
        </div>
    </section>
    <!-- Terms & Conditions area finish -->

@endsection
