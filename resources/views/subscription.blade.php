@extends('layout.master')
@section('content')
    @php
        $categories = \App\Helpers\RecordHelper::getCategories();
        $catgories_for_search = $categories->random()->take(5)->get();
    @endphp

<section style="padding-bottom:40px;">
<div class="container">
<h2 class="terms-h text-center">Subscription Plans</h2>
<!------->
<div class="col-md-12">
    <div class="row">
    <div class="col-md-4 mx-auto mt-1" >
    <div class="mx-auto" style="border:2px solid #A17A4E;padding:0px;width:300px;padding-bottom:10px;background:;border-radius:5px;">
    <div  class="mx-auto text-center p-2">
    <span class="plan-h">Standard</span>
    <div class="mx-auto" style="border:2px solid #A17A4E;width:40px;text-align:center;margin-top:-10px;"></div>
    <h6 style="padding-top:10px;">AED 1,000</h6>
    <div class="mx-auto text-muted" style="text-align:center;margin-top:-10px;">per month</div>
    </div>
    <hr>
    <ul class="circle-check" style="list-style-type:none;height:200px;">
        <li><i class="fa fa-check-circle"></i> Active: <b>30 days</b></li>
        <li><i class="fa fa-check-circle"></i> Auto-Refresh: <b>1 time</b></li>
        <li><i class="fa fa-check-circle"></i> Images Upload: <b>Unlimited</b></li>
        <li><i class="fa fa-check-circle"></i> Link: <b>Video URL</b></li>
        <li><i class="fa fa-times-circle text-danger"></i> Featured Days: <b>No</b></li>
    </ul>
    <div class="mx-auto" style="text-align:center;">
    <a href="">
    <button class="btn bt-plan">SELECT PLAN</button>
    </a>
    </div>
    </div>
    </div>

    <div class="col-md-4 mx-auto mt-1" >
        
    <div class="mx-auto" style="border:2px solid #A17A4E;padding:0px;width:300px;padding-bottom:10px;background:;border-radius:5px;">
    <div  class="mx-auto text-center p-2">
        <div style="text-align:center;">
        <span class="plan-h">Premium</span>
        </div>
    <div class="mx-auto" style="border:2px solid #A17A4E;width:40px;text-align:center;margin-top:-10px;"></div>
    <h6 style="padding-top:10px;">AED 1,500 - AED 1,250 <b>(Save 15%)</b></h6>
    <div class="mx-auto text-muted" style="text-align:center;margin-top:-10px;">per month</div>
    </div>
    <hr>
    <ul class="circle-check" style="list-style-type:none;height:200px;">
        <li><i class="fa fa-check-circle"></i> Active:<b>30 days</b></li>
        <li><i class="fa fa-check-circle"></i> Auto-Refresh: <b>3 times</b></li>
        <li><i class="fa fa-check-circle"></i> Images Upload: <b>Unlimited</b></li>
        <li><i class="fa fa-check-circle"></i> Featured Days: <b>5 </b></li>
    </ul>
    <div class="mx-auto" style="text-align:center;">
    <a href="">
    <button class="btn bt-plan">SELECT PLAN</button>
    </a>
    </div>
    </div>
    </div>


    <div class="col-md-4 mx-auto mt-1" >
    <div class="mx-auto" style="border:2px solid #A17A4E;padding:0px;width:300px;padding-bottom:10px;background:;border-radius:5px;">
    <div  class="mx-auto text-center p-2">
    <span class="plan-h">Gold</span>
    <div class="mx-auto" style="border:2px solid #A17A4E;width:40px;text-align:center;margin-top:-10px;"></div>
    <h6 style="padding-top:10px;">AED 2,000 - AED 1,650 <b>(Save 20%)</b> </h6>
    <div class="mx-auto text-muted" style="text-align:center;margin-top:-10px;">per month</div>
    </div>
    <hr>
    <ul class="circle-check" style="list-style-type:none;height:200px;">
        <li><i class="fa fa-check-circle"></i> Active: <b>50 days</b></li>
        <li><i class="fa fa-check-circle"></i> Auto-Refresh: <b>5 times</b></li>
        <li><i class="fa fa-check-circle"></i> Images Upload: <b>Unlimited</b></li>
        <li><i class="fa fa-check-circle"></i> Featured Days: <b>10</b></li>
    </ul>
    <div class="mx-auto" style="text-align:center;">
    <a href="">
    <button class="btn bt-plan">SELECT PLAN</button>
    </a>
    </div>
    </div>
    </div>
    </div>
</div>
<!-------->
</div>
</section>

    
@endsection