@extends('layout.master')
@section('content')


        <!-----contact form start------>
        <section class="padtb50">
            <div class="container">
                <div class="row justify-content-md-center mb-20px">
                    <div class="col-md-8 col-lg-8 col-xl-8 about-us-text-area" style="margin-top:-30px;">
                        <div class="ragisterarea" style="border:0px solid red;margin-top:-30px;">
                            <!-- contact form title start -->
                            <h1>Contact us</h1>
                            <hr>
                            <form>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <h2 class="contact-form-line">Get in touch with us to buy, sell, or grow your Business</h2>
                                    <div class="col-md-9 col-lg-9 col-xl-9">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/name.png')}}" width="33" height="19"/></span>
                                            </div>
                                            <input type="text" class="form-control login-user" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-lg-9 col-xl-9">
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/phone.png')}}" width="33" height="21"/></span>
                                            </div>
                                            <input type="text" class="form-control login-user" placeholder="Phone No" aria-label="phone" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="col-md-9 col-lg-9 col-xl-9">
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/envelop.png')}}" width="33" height="19"/></span>
                                            </div>
                                            <input type="text" class="form-control login-user" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-lg-9 col-xl-9">
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/city.png')}}" width="34" height="21"/></span>
                                            </div>
                                            <input type="text" class="form-control login-user" placeholder="City" aria-label="City" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="col-md-9 col-lg-9 col-xl-9">
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/massage.jpg')}}" width="33" height="21"/></span>
                                            </div>
                                            <input type="text" class="form-control login-user" placeholder="Message" aria-label="message" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                             
                                    <div class="col-md-9 col-lg-9 col-xl-9">
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/envelop.png')}}" width="33" height="21"/></span>
                                            </div>
                                            <input type="file" class="form-control login-user" placeholder="Phone No" aria-label="phone" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-lg-9 col-xl-9">
                                    <button type="submit" style="margin-top:0px;" class="btn register-button">Send Message</button>

                                    </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="" style="margin-top: -30px;">
            <div class="container-fluid" style="border:0px solid red;background-image:url('images/footer.png');height:180px;width:100%;content:'';  background-repeat: repeat-x;">
                
            </div>
        </section>
        <!-----contact form end------>

@endsection