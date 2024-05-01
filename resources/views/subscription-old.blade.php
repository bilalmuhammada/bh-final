@extends('layout.master')
@section('content')
    @php
        $categories = \App\Helpers\RecordHelper::getCategories();
        $catgories_for_search = $categories->random()->take(5)->get();
    @endphp

<section style="padding-bottom:40px;">
<div class="container">
<h2 class="terms-h text-center">Our Subscription Plans</h2>
<!------->
<div class="col-md-12">
    <div class="row">
    <div class="col-md-4 mx-auto mt-1" >
    <div class="mx-auto" style="border:2px solid rgb(241, 227, 164, .7);padding:0px;width:300px;padding-bottom:10px;background:;border-radius:5px;">
    <div  class="mx-auto text-center p-2">
    <span class="plan-h">BASIC</span>
    <div class="mx-auto" style="border:2px solid #0000ff;width:40px;text-align:center;margin-top:-10px;"></div>
    <h3 style="padding-top:10px;">$8</h3>
    <div class="mx-auto text-muted" style="text-align:center;margin-top:-10px;">per month</div>
    </div>
    <hr>
    <ul style="list-style-type:none;height:200px;">
        <li><img src="{{ asset('images/check-circle-solid.svg')}}" alt="checkbox" width="20" height="20"> All features</li>
        <li><img src="{{ asset('images/check-circle-solid.svg')}}" alt="checkbox" width="20" height="20"> Chat Support</li>
        <li><img src="{{ asset('images/check-circle-solid.svg')}}" alt="checkbox" width="20" height="20"> 50 Audio & Video Calls Free</li>
    </ul>
    <div class="mx-auto" style="text-align:center;">
    <a href="">
    <button class="btn bt-plan">SELECT PLAN</button>
    </a>
    </div>
    </div>
    </div>

    <div class="col-md-4 mx-auto mt-1" >
        
    <div class="mx-auto" style="border:2px solid rgb(241, 227, 164, .7);padding:0px;width:300px;padding-bottom:10px;background:;border-radius:5px;">
    <div  class="mx-auto text-center p-2">
        <div style="text-align:center;">
        <span class="plan-h">STANDARD</span>
        </div>
    <div class="mx-auto" style="border:2px solid #0000ff;width:40px;text-align:center;margin-top:-10px;"></div>
    <h3 style="padding-top:10px;">$80</h3>
    <div class="mx-auto text-muted" style="text-align:center;margin-top:-10px;">per month</div>
    </div>
    <hr>
    <ul style="list-style-type:none;height:200px;">
        <li><img src="{{ asset('images/check-circle-solid.svg')}}" alt="checkbox" width="20" height="20"> Vat Features</li>
        <li><img src="{{ asset('images/check-circle-solid.svg')}}" alt="checkbox" width="20" height="20"> Mailing Address</li>
        <li><img src="{{ asset('images/check-circle-solid.svg')}}" alt="checkbox" width="20" height="20"> Mail Scaning & Security</li>
        <li><img src="{{ asset('images/check-circle-solid.svg')}}" alt="checkbox" width="20" height="20"> 150 Audio & Video Calls Free</li>
        <li><img src="{{ asset('images/check-circle-solid.svg')}}" alt="checkbox" width="20" height="20"> HD Quality</li>
    </ul>
    <div class="mx-auto" style="text-align:center;">
    <a href="">
    <button class="btn bt-plan">SELECT PLAN</button>
    </a>
    </div>
    </div>
    </div>


    <div class="col-md-4 mx-auto mt-1" >
    <div class="mx-auto" style="border:2px solid rgb(241, 227, 164, .7);padding:0px;width:300px;padding-bottom:10px;background:;border-radius:5px;">
    <div  class="mx-auto text-center p-2">
    <span class="plan-h">PREMIUM</span>
    <div class="mx-auto" style="border:2px solid #0000ff;width:40px;text-align:center;margin-top:-10px;"></div>
    <h3 style="padding-top:10px;">$120</h3>
    <div class="mx-auto text-muted" style="text-align:center;margin-top:-10px;">per month</div>
    </div>
    <hr>
    <ul style="list-style-type:none;height:200px;">
        <li><img src="{{ asset('images/check-circle-solid.svg')}}" alt="checkbox" width="20" height="20"> All features</li>
        <li><img src="{{ asset('images/check-circle-solid.svg')}}" alt="checkbox" width="20" height="20"> Vat features</li>
        <li><img src="{{ asset('images/check-circle-solid.svg')}}" alt="checkbox" width="20" height="20"> Mail Scaning & Security</li>
        <li><img src="{{ asset('images/check-circle-solid.svg')}}" alt="checkbox" width="20" height="20"> Unlimited Audio & Video Call</li>
        <li><img src="{{ asset('images/check-circle-solid.svg')}}" alt="checkbox" width="20" height="20"> Ultra HD Quality</li>
        <li><img src="{{ asset('images/check-circle-solid.svg')}}" alt="checkbox" width="20" height="20"> Unlimited Users</li>
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