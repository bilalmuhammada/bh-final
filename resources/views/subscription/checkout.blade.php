@extends('listing-layout.master')
@section('content')
<div class="container-fluid">
    <!------------------->
<div class="col-md-9 mx-auto">
<h4 class="text-center">Secure Checkout</h4>
<!--<p style="text-align:center;font-size:11px;">Order Summary</p>-->
<div class="row" style="
    display: flex;
    align-items: center;
    justify-content: center;">
    <!--<div class="col-md-6" style="padding:30px;background:rgb(0, 0, 255, 0.1);border-radius:10px;">-->
        <!--<div class="row">-->
        <!--<div class="col-md-12">-->
    <!--    <span>-->
    <!--        <h6>Thank you for trusting businesshub to sell your car!</h6>-->
    <!--    <p style="font-size: 16px;">You've already taken the most important step by choosing-->
    <!--    businesshub for this service.We will take care of the rest by:</p>-->
    <!--    </span>-->
    <!--    <ul style="font-size: 15px; float:left;list-style-type:number;">-->
    <!--        <li> Getting in touch with you to arrange an appointment.You should-->
    <!--        expect to hear from us withen the next 24 hours.</li>-->
    <!--        <li>Our expert photographers taking amazing pictures of your car from-->
    <!--        different angles.</li>-->
    <!--        <li>We will then make your listing live with all the details of the car</li>-->
    <!--        <li>We will co-ordinate with interested buyers, answer their queries and-->
    <!--        schedule test drives.</li>-->
    <!--        <li>We will take care of closing the deal with your consent, getting any-->
    <!--        outstanding financing cleared and ensure a secure payment</li>-->
    <!--        <li>Once the car is sold, a 3.99% success fee will be deducted from the-->
    <!--        final sales price</li>-->
    <!--    </ul>-->
        <!-- <span>Have you any Question? call 00000000000 Now</span> -->
    <!--</div>-->
        <!--</div>-->
    <!--</div>-->

    <div class="col-md-6" style="padding-left:20px;">
    <!-- <form> -->
    <!-- <h5>Order Summary</h5> -->
    <div class="inner-data" style="border:2px solid #EEE;border-radius:10px;margin-top:2px;">
        <h6 class=" text-center" style="background-color:#eee;border-radius:10px 10px 0px 0px;padding:9px;"><b> PAYABLE </b></h6>
        <div class="row" style="padding: 0px 15px 0px 15px;">
            <div class="col-md-6"><p> Plan </p></div>
            <div class="col-md-6 text-right"><p> {{ $plan->name }} </p></div>
        </div>
        <div class="row" style="padding: 0px 15px 0px 15px;">
            <div class="col-md-6"><p> Fee </p></div>
            <div class="col-md-6 text-right"><p> {{ $plan->price_formatted }} </p></div>
        </div>
        <div class="row" style="padding: 0px 15px 0px 15px;">
            <div class="col-md-6"><p> VAT 5% </p></div>
            <div class="col-md-6 text-right"><p> {{ $plan->vat_price_formatted }} </p></div>
        </div>
        <hr style="height:2px;border-width:0;color:#eee;background-color:#eee">
    
        <div class="row" style="padding: 0px 15px 0px 15px;">
            <div class="col-md-6"><h6><b> Total </b></h6></div>
            <div class="col-md-6 text-right"><h6><b> {{ $plan->total_amount_formatted }} </b></h6></div>
        </div>
    </div>
    <!---------->
    <!--<div class="inner-data" style="border:2px solid #EEE;border-radius:10px;margin-top:15px;">-->
    <!--<h6 class=" text-center" style="background-color:#eee;border-radius:10px 10px 0px 0px;padding:9px;"><b> PAYABLE AFTER CAR SOLD </b></h6>-->
    <!--<div class="row" style="padding: 0px 15px 0px 15px;">-->
    <!--    <div class="col-md-4"><p><b> Success Fee </b></p></div>-->
    <!--    <div class="col-md-8 text-right"><h6><b> 3.99% </b></h6></div>-->
    <!--</div>-->
    <!--<hr style="height:2px;border-width:0;color:#eee;background-color:#eee">-->
    <!--<div class="row" style="padding: 0px 15px 0px 15px;">-->
    <!--    <div class="col-md-12">-->
    <!--        <p style="font-size: 14px;"> This fee will be deducted upon the successful sale of the car.-->
    <!--        All prices listed above are exclusive of 5% VAT</p>-->
    <!--    </div>-->
    <!--</div>-->
    <!--</div>-->
    <!---------->
    <div class="row" style="margin-top:10px;
    display: flex;
    align-items: center;
    justify-content: center;">
        <div class="col-md-4">
            <style>
                .new-btn {
                    background : #A17A4E !important;
                }
                
                .new-btn:hover {
                    background : #0000FF !important;
                }
            </style>
          <button type="submit" class="btn new-btn form-control" style="background: #0000FF;color:#fff;" data-toggle="modal" data-target="#paymentCard"><b> Proceed </b></button>
        </div>
    </div>
    <!-- </form> -->
    </div>

</div>
<!------------>
</div>
</div>
@include('modals.payment-card')
@endsection
