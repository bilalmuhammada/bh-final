@extends('layout.master')
@section('content')
    @php
        $categories = \App\Helpers\RecordHelper::getCategories();
        $catgories_for_search = $categories->random()->take(5)->get();
    @endphp
    <div class="cont-w">
  <h3 style="font-weight: bold;">My Saved Searches</h3>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" style="font-size:12px;">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">All Ads - 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Live - 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Drafts - 0</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3">Payment Pending - 0</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu4">Under Review - 0</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu5">Rejected - 0</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu6">Expired - 0</a>
    </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="cont-w tab-pane active"><br>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 col-xs-6 col-6 text-left">
            <div class="search" style="width: 300px;">
            <div class="row">
                <input type="text" placeholder="Find your saved Search" class="form-control" style="border: 1px solid #E0E1E3;border-radius:6px;">
                </div>
            </div>
            </div>
            <div class="col-md-6 col-xs-6 col-6">
                   <span style="font-size: 12px;"><img src="{{ asset('images/info-grey.svg')}}" alt="imge" width="13" height="13"> Please note, expired and deleted listings will automatically be removed from your favorites.</span>
            </div>
        </div>
    </div>
    <!------------------single row----------->
    <div class="col-md-12" style="border: 1px solid #E0E1E3;border-radius:6px;padding:;margin-top:10px;">
<div class="row">
    <!----1---->
    <div class="col-md-3" style="">
<div class="row">
    <div  style="padding:5px;">
    <div class="ad-show" style="border: 1px solid #E0E1E3;padding:10px;border-radius:5px;">
        <div class="img">
            <img src="{{ asset('images/div1.avif')}}" alt="img" height="150" width="220" style="border-radius: 5px;">
        </div>
        <div><h5><a href="" style="font-size: 11px;font-weight:bold;color:#000;">BRAND NEW 5 BEDROOM VILLA</a><br/><a href="" class="text-muted" style="font-size: 11px;">Villa/House for Rent / Residential Units for R</a></h5>
    <h4 style="font-size: 14px;font-weight:bold;">AED 180,000 <span style="margin-left: 110px;"><i class="fa fa-trash"></i></span></h4>
    </div>        
    </div>
    </div>
</div> 
</div>
<!-------->
    </div>
    </div>
    <!----single row ended------>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 col-xs-6 col-6 text-left">
            <div class="search" style="width: 300px;">
            <div class="row">
                <input type="text" placeholder="Find your saved Search" class="form-control" style="border: 1px solid #E0E1E3;border-radius:6px;">
                </div>
            </div>
            </div>
            <div class="col-md-6 col-xs-6 col-6">
                   <span style="font-size: 12px;"><img src="{{ asset('images/info-grey.svg')}}" alt="imge" width="13" height="13"> Please note, expired and deleted listings will automatically be removed from your favorites.</span>
            </div>
        </div>
    </div>
    <!------------------single row----------->
    <div class="col-md-12" style="border: 1px solid #E0E1E3;border-radius:6px;padding:;margin-top:10px;">
<div class="row">
    <!----1---->
    <div class="col-md-3" style="">
<div class="row">
    <div  style="padding:5px;">
    <div class="ad-show" style="border: 1px solid #E0E1E3;padding:10px;border-radius:5px;">
        <div class="img">
            <img src="{{ asset('images/div1.avif')}}" alt="img" height="150" width="220" style="border-radius: 5px;">
        </div>
        <div><h5><a href="" style="font-size: 11px;font-weight:bold;color:#000;">BRAND NEW 5 BEDROOM VILLA</a><br/><a href="" class="text-muted" style="font-size: 11px;">Villa/House for Rent / Residential Units for R</a></h5>
    <h4 style="font-size: 14px;font-weight:bold;">AED 180,000 <span style="margin-left: 110px;"><i class="fa fa-trash"></i></span></h4>
    </div>        
    </div>
    </div>
</div> 
</div>
<!-------->
    </div>
    </div>
    <!----single row ended------>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
     <!------------------single row----------->
     <div class="col-md-12" style="border: 1px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row">
<div class="col-md-6 text-left" style="border: 0px solid red;">
<div class="row">
<div class="col-md-1">
<img src="{{ asset('images/verified-badge.svg')}}" id="arrow" width="40" height="40"/>
</div>
<div class="col-md-11">
<span style="font-size: 14px;"><a href="" style="color:#000;">Become a verified user</a></span>
<div><h6><a href="" style="color: #000;font-weight:bold;">Get more visibility  |  Enhance your credibility</a></h6></div>
</div>
</div>
</div> 
<div class="col-md-6 text-right" style="border: 0px solid red;">
<!----right side area---->
<div class="row">
<div class="col-md-12 text-right" style="border: 0px solid red;margin-top:11px;">
<button class="btn" style="border: 1px solid #E0E1E3;border-radius:6px;font-size:13px;">Get Started</button>
</div>
<!----right side area---->
</div>
    </div>
    </div>
     </div>
    <!----single row ended------>
         <!------------------single row----------->
    <div class="col-md-12 mx-auto" style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row mx-auto">
        <div class="mx-auto"><img src="{{ asset('images/no-ads-placeholder.svg')}}"  height="120"></div>
        </div>
        <div style="text-align: center;font-weight:bold;"><h4><b>You don't have any ads that are<br/> pending payment</b></h4></div>
        <div style="text-align: center;font-size:12px;" class="text-muted">
        <a href="{{env('BASE_URL') . 'listing/' . 'select-category'}}">
        <button class="btn" style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">Post ad now</button>
        </a>
        </div>
        </div>
    <!----single row ended------>
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
         <!------------------single row----------->
         <div class="col-md-12" style="border: 1px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row">
<div class="col-md-6 text-left" style="border: 0px solid red;">
<div class="row">
<div class="col-md-1">
<img src="{{ asset('images/verified-badge.svg')}}" id="arrow" width="40" height="40"/>
</div>
<div class="col-md-11">
<span style="font-size: 14px;"><a href="" style="color:#000;">Become a verified user</a></span>
<div><h6><a href="" style="color: #000;font-weight:bold;">Get more visibility  |  Enhance your credibility</a></h6></div>
</div>
</div>
</div> 
<div class="col-md-6 text-right" style="border: 0px solid red;">
<!----right side area---->
<div class="row">
<div class="col-md-12 text-right" style="border: 0px solid red;margin-top:11px;">
<button class="btn" style="border: 1px solid #E0E1E3;border-radius:6px;font-size:13px;">Get Started</button>
</div>
<!----right side area---->
</div>
    </div>
    </div>
     </div>
    <!----single row ended------>
                <!------------------single row----------->
    <div class="col-md-12 mx-auto" style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row mx-auto">
        <div class="mx-auto"><img src="{{ asset('images/no-ads-placeholder.svg')}}"  height="120"></div>
        </div>
        <div style="text-align: center;font-weight:bold;"><h4><b>You don't have any ads that are<br/> pending payment</b></h4></div>
        <div style="text-align: center;font-size:12px;" class="text-muted">
        <a href="{{env('BASE_URL') . 'listing/' . 'select-category'}}">
        <button class="btn" style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">Post ad now</button>
        </a>
        </div>
        </div>
    <!----single row ended------>
    </div>
    <div id="menu4" class="container tab-pane fade"><br>
         <!------------------single row----------->
         <div class="col-md-12" style="border: 1px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row">
<div class="col-md-6 text-left" style="border: 0px solid red;">
<div class="row">
<div class="col-md-1">
<img src="{{ asset('images/verified-badge.svg')}}" id="arrow" width="40" height="40"/>
</div>
<div class="col-md-11">
<span style="font-size: 14px;"><a href="" style="color:#000;">Become a verified user</a></span>
<div><h6><a href="" style="color: #000;font-weight:bold;">Get more visibility  |  Enhance your credibility</a></h6></div>
</div>
</div>
</div> 
<div class="col-md-6 text-right" style="border: 0px solid red;">
<!----right side area---->
<div class="row">
<div class="col-md-12 text-right" style="border: 0px solid red;margin-top:11px;">
<button class="btn" style="border: 1px solid #E0E1E3;border-radius:6px;font-size:13px;">Get Started</button>
</div>
<!----right side area---->
</div>
    </div>
    </div>
     </div>
    <!----single row ended------>
              <!------------------single row----------->
    <div class="col-md-12 mx-auto" style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row mx-auto">
        <div class="mx-auto"><img src="{{ asset('images/no-ads-placeholder.svg')}}"  height="120"></div>
        </div>
        <div style="text-align: center;font-weight:bold;"><h4><b>You don't have any ads that are<br/> pending payment</b></h4></div>
        <div style="text-align: center;font-size:12px;" class="text-muted">
        <a href="{{env('BASE_URL') . 'listing/' . 'select-category'}}">
        <button class="btn" style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">Post ad now</button>
        </a>
        </div>
        </div>
    <!----single row ended------>
    </div>
    <div id="menu5" class="container tab-pane fade"><br>
         <!------------------single row----------->
         <div class="col-md-12" style="border: 1px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row">
<div class="col-md-6 text-left" style="border: 0px solid red;">
<div class="row">
<div class="col-md-1">
<img src="{{ asset('images/verified-badge.svg')}}" id="arrow" width="40" height="40"/>
</div>
<div class="col-md-11">
<span style="font-size: 14px;"><a href="" style="color:#000;">Become a verified user</a></span>
<div><h6><a href="" style="color: #000;font-weight:bold;">Get more visibility  |  Enhance your credibility</a></h6></div>
</div>
</div>
</div> 
<div class="col-md-6 text-right" style="border: 0px solid red;">
<!----right side area---->
<div class="row">
<div class="col-md-12 text-right" style="border: 0px solid red;margin-top:11px;">
<button class="btn" style="border: 1px solid #E0E1E3;border-radius:6px;font-size:13px;">Get Started</button>
</div>
<!----right side area---->
</div>
    </div>
    </div>
     </div>
    <!----single row ended------>
                   <!------------------single row----------->
    <div class="col-md-12 mx-auto" style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row mx-auto">
        <div class="mx-auto"><img src="{{ asset('images/no-ads-placeholder.svg')}}"  height="120"></div>
        </div>
        <div style="text-align: center;font-weight:bold;"><h4><b>You don't have any ads that are<br/> pending payment</b></h4></div>
        <div style="text-align: center;font-size:12px;" class="text-muted">
        <a href="{{env('BASE_URL') . 'listing/' . 'select-category'}}">
        <button class="btn" style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">Post ad now</button>
        </a>
        </div>
        </div>
    <!----single row ended------>
    </div>
    <div id="menu6" class="container tab-pane fade"><br>
         <!------------------single row----------->
         <div class="col-md-12" style="border: 1px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row">
<div class="col-md-6 text-left" style="border: 0px solid red;">
<div class="row">
<div class="col-md-1">
<img src="{{ asset('images/verified-badge.svg')}}" id="arrow" width="40" height="40"/>
</div>
<div class="col-md-11">
<span style="font-size: 14px;"><a href="" style="color:#000;">Become a verified user</a></span>
<div><h6><a href="" style="color: #000;font-weight:bold;">Get more visibility  |  Enhance your credibility</a></h6></div>
</div>
</div>
</div> 
<div class="col-md-6 text-right" style="border: 0px solid red;">
<!----right side area---->
<div class="row">
<div class="col-md-12 text-right" style="border: 0px solid red;margin-top:11px;">
<button class="btn" style="border: 1px solid #E0E1E3;border-radius:6px;font-size:13px;">Get Started</button>
</div>
<!----right side area---->
</div>
    </div>
    </div>
     </div>
    <!----single row ended------>
            <!------------------single row----------->
    <div class="col-md-12 mx-auto" style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row mx-auto">
        <div class="mx-auto"><img src="{{ asset('images/no-ads-placeholder.svg')}}"  height="120"></div>
        </div>
        <div style="text-align: center;font-weight:bold;"><h4><b>You don't have any ads that are<br/> pending payment</b></h4></div>
        <div style="text-align: center;font-size:12px;" class="text-muted">
        <a href="{{env('BASE_URL') . 'listing/' . 'select-category'}}">
        <button class="btn" style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">Post ad now</button>
        </a>
        </div>
        </div>
    <!----single row ended------>
    </div>
    <div id="menu7" class="container tab-pane fade"><br>
         <!------------------single row----------->
         <div class="col-md-12" style="border: 1px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row">
<div class="col-md-6 text-left" style="border: 0px solid red;">
<div class="row">
<div class="col-md-1">
<img src="{{ asset('images/verified-badge.svg')}}" id="arrow" width="40" height="40"/>
</div>
<div class="col-md-11">
<span style="font-size: 14px;"><a href="" style="color:#000;">Become a verified user</a></span>
<div><h6><a href="" style="color: #000;font-weight:bold;">Get more visibility  |  Enhance your credibility</a></h6></div>
</div>
</div>
</div> 
<div class="col-md-6 text-right" style="border: 0px solid red;">
<!----right side area---->
<div class="row">
<div class="col-md-12 text-right" style="border: 0px solid red;margin-top:11px;">
<button class="btn" style="border: 1px solid #E0E1E3;border-radius:6px;font-size:13px;">Get Started</button>
</div>
<!----right side area---->
</div>
    </div>
    </div>
     </div>
    <!----single row ended------>
               <!------------------single row----------->
    <div class="col-md-12 mx-auto" style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row mx-auto">
        <div class="mx-auto"><img src="{{ asset('images/no-ads-placeholder.svg')}}"  height="120"></div>
        </div>
        <div style="text-align: center;font-weight:bold;"><h4><b>You don't have any ads that are<br/> pending payment</b></h4></div>
        <div style="text-align: center;font-size:12px;" class="text-muted">
        <a href="{{env('BASE_URL') . 'listing/' . 'select-category'}}">
        <button class="btn" style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">Post ad now</button>
        </a>
        </div>
        </div>
    <!----single row ended------>
    </div>
    <div id="menu8" class="container tab-pane fade"><br>
         <!------------------single row----------->
         <div class="col-md-12" style="border: 1px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row">
<div class="col-md-6 text-left" style="border: 0px solid red;">
<div class="row">
<div class="col-md-1">
<img src="{{ asset('images/verified-badge.svg')}}" id="arrow" width="40" height="40"/>
</div>
<div class="col-md-11">
<span style="font-size: 14px;"><a href="" style="color:#000;">Become a verified user</a></span>
<div><h6><a href="" style="color: #000;font-weight:bold;">Get more visibility  |  Enhance your credibility</a></h6></div>
</div>
</div>
</div> 
<div class="col-md-6 text-right" style="border: 0px solid red;">
<!----right side area---->
<div class="row">
<div class="col-md-12 text-right" style="border: 0px solid red;margin-top:11px;">
<button class="btn" style="border: 1px solid #E0E1E3;border-radius:6px;font-size:13px;">Get Started</button>
</div>
<!----right side area---->
</div>
    </div>
    </div>
     </div>
    <!----single row ended------>
             <!------------------single row----------->
    <div class="col-md-12 mx-auto" style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row mx-auto">
        <div class="mx-auto"><img src="{{ asset('images/no-ads-placeholder.svg')}}"  height="120"></div>
        </div>
        <div style="text-align: center;font-weight:bold;"><h4><b>You don't have any ads that are<br/> pending payment</b></h4></div>
        <div style="text-align: center;font-size:12px;" class="text-muted">
        <a href="{{env('BASE_URL') . 'listing/' . 'select-category'}}">
        <button class="btn" style="background: #0000FF;color:white;;padding:7px 120px;font-size:14px;">Post ad now</button>
        </a>
        </div>
        </div>
    <!----single row ended------>
    </div>
  </div>
</div>

  @endsection  