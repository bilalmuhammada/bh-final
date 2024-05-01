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
    <li class="nav-item" style="">
      <a class="nav-link active" data-toggle="tab" href="#home">All</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Business for Sale</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Business Ideas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3">Export & Import Trade</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu4">Franchise Opportunities</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu5">Investors</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu6">Investors Required</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu7">Machinery & Supplies</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu8">Shares for Sale</a>
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
                    <div class="row" style="border: 1px solid #E0E1E3;border-radius:6px;font-size:13px;text-align:center;width:250px;position:relative;left:320px;">
                        <div style="margin-left: 10px;"><i class="fa fa-chevron-up" style="position:relative;top:5px;"></i><br/><i class="fa fa-chevron-down" style="position:relative;bottom:5px;"></i></div>
                        <div style="margin-top: 10px;margin-left:10px;"> <span>Sort: <b>Searches Recently Viewed</b></span> </div>
                    </div>
            </div>
        </div>
    </div>
    <!------------------single row----------->
    <div class="col-md-12" style="border: 1px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row">
<div class="col-md-6 text-left" style="border: 0px solid red;">
<div class="row">
<div class="col-md-12">
<span style="font-size: 14px;"><a href="" style="color:#000;">Property for Sale</a><a href="" style="color:#000;"> • Residential for Sale</a><a href="" style="color:#000;"> • Apartment for Sale</a></span>
<div><h6><a href="" style="color: #000;font-weight:bold;">My Apartment for Sale Search (57470) <img src="{{ asset('images/arrow.svg')}}" id="arrow" width="22" height="20"/></a></h6></div>
<div><h6><button style="border: 0px solid red;border-radius:15px;font-size:10px;padding:5px;">DUBAI</button></h6></div>
<div><h6 style="font-size: 12px;">Saved on: August 12</h6></div>
</div>
</div>
</div> 
<div class="col-md-6 text-right" style="border: 0px solid red;">
<!----right side area---->
<div class="row">
<div class="col-md-12 text-right" style="border: 0px solid red;margin-bottom:15px;">
<img src="{{ asset('images/image1.avif')}}" width="100" height="100">
<img src="{{ asset('images/image1.avif')}}" width="100" height="100" style="margin: 0px -40px;z-index:1;">
<img src="{{ asset('images/image1.avif')}}" width="100" height="100" style="margin: 0px -15px;">
  </div>
  <div class="col-md-12" style="border: 0px solid red;">
    <div  style="font-size: 12px;border:0px solid red;position:relative;left:15px;">
    <span style="background:#eee;padding:10px 15px;" data-toggle="modal" data-target="#notifyModal"><i class="fa fa-bell"></i> Notifications: Emails and Push <i class="fa fa-chevron-down"></i></span>
    <span style="background:#eee;padding:10px 15px;"><img src="{{ asset('images/share.svg')}}" width="15" height="15"> Share</span>
    <span style="background:#eee;padding:10px 15px;"><a href=""  type="button" id="dropdownMenuButtonz" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('images/dot-overflow-menu.svg')}}" width="15" height="15"></a>    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonz">
    <a class="dropdown-item" href="#">Rename Search</a>
    <a class="dropdown-item" href="#">Delete</a>
  </div></span>

  </div>
</div>

</div>
<!----right side area---->
</div>
    </div>
    </div>
    <!----single row ended------>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
     <!------------------single row----------->
     <div class="col-md-12" style="border: 1px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row">
<div class="col-md-6 text-left" style="border: 0px solid red;">
<div class="row">
<div class="col-md-12">
<span style="font-size: 14px;"><a href="" style="color:#000;">Property for Sale</a><a href="" style="color:#000;"> • Residential for Sale</a><a href="" style="color:#000;"> • Apartment for Sale</a></span>
<div><h6><a href="" style="color: #000;font-weight:bold;">My Apartment for Sale Search (57470) <img src="{{ asset('images/arrow.svg')}}" id="arrow" width="22" height="20"/></a></h6></div>
<div><h6><button style="border: 0px solid red;border-radius:15px;font-size:10px;padding:5px;">DUBAI</button></h6></div>
<div><h6 style="font-size: 12px;">Saved on: August 12</h6></div>
</div>
</div>
</div> 
<div class="col-md-6 text-right" style="border: 0px solid red;">
<!----right side area---->
<div class="row">
<div class="col-md-12 text-right" style="border: 0px solid red;margin-bottom:15px;">
<img src="{{ asset('images/image1.avif')}}" width="100" height="100">
<img src="{{ asset('images/image1.avif')}}" width="100" height="100" style="margin: 0px -40px;z-index:1;">
<img src="{{ asset('images/image1.avif')}}" width="100" height="100" style="margin: 0px -15px;">
  </div>
  <div class="col-md-12" style="border: 0px solid red;">
    <div  style="font-size: 12px;border:0px solid red;position:relative;left:15px;">
    <span style="background:#eee;padding:10px 15px;"><i class="fa fa-bell"></i> Notifications: Emails and Push <i class="fa fa-chevron-down"></i></span>
    <span style="background:#eee;padding:10px 15px;"><img src="{{ asset('images/share.svg')}}" width="15" height="15"> Share</span>
    <span style="background:#eee;padding:10px 15px;"><a href=""  type="button" id="dropdownMenuButtonz" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('images/dot-overflow-menu.svg')}}" width="15" height="15"></a>    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonz">
    <a class="dropdown-item" href="#">Rename Search</a>
    <a class="dropdown-item" href="#">Delete</a>
  </div></span>

  </div>
</div>

</div>
<!----right side area---->
</div>
    </div>
    </div>
    <!----single row ended------>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
         <!------------------single row----------->
    <div class="col-md-12" style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row">
<div class="col-md-6 text-left" style="border:0px solid red;">
<div class="row">
<div class="col-md-12">
<div><h4><a href="" style="color: #000;font-weight:bold;">You have no saved searches yet in Motors</h6></div>
<div><h6 style="font-size:15px;padding:px;">Saving a search helps you find your item faster</h6></div>
<div><h6 style="font-size: 14px;">1. Start searching an item</h6></div>
<div><h6 style="font-size: 14px;">2. Select Save Search</h6></div>
<div style="border: 0px solid red;"><img src="{{ asset('images/how-to.svg')}}" height="80" width="150"></div>
<div ><h6 style="font-size: 14px;">3. Return back to your search anytime using My Searches</h6></div>
</div>
</div>
</div> 
<div class="col-md-6 text-right" style="border: 0px solid red;">
<div class="row">
<div  style="border: 0px solid red;margin-top:-60px;">
<!----right side area---->
<img src="{{ asset('images/empty-state.svg')}}" width="500" height="300">
<!----right side area---->
</div>
</div>
</div>
    </div>
    </div>
    <div class="col-md-12" style="margin-bottom: 20px;">
        <div class="row">
        <h5 style="font-size: 16px;font-weight:bold;">Start Searching</h5>
        </div>
        <div class="row">
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Business for Sale</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Business Ideas</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Export and Trade</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Franchise Opportunities</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Investors</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Investors Required</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Machinery & Supplies</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Shares for Sale</a></button>&nbsp;
        </div>
    </div>
    <!----single row ended------>
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
          <!------------------single row----------->
    <div class="col-md-12" style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row">
<div class="col-md-6 text-left" style="border:0px solid red;">
<div class="row">
<div class="col-md-12">
<div><h4><a href="" style="color: #000;font-weight:bold;">You have no saved searches yet in Motors</h6></div>
<div><h6 style="font-size:15px;padding:px;">Saving a search helps you find your item faster</h6></div>
<div><h6 style="font-size: 14px;">1. Start searching an item</h6></div>
<div><h6 style="font-size: 14px;">2. Select Save Search</h6></div>
<div style="border: 0px solid red;"><img src="{{ asset('images/how-to.svg')}}" height="80" width="150"></div>
<div ><h6 style="font-size: 14px;">3. Return back to your search anytime using My Searches</h6></div>
</div>
</div>
</div> 
<div class="col-md-6 text-right" style="border: 0px solid red;">
<div class="row">
<div  style="border: 0px solid red;margin-top:-60px;">
<!----right side area---->
<img src="{{ asset('images/empty-state.svg')}}" width="500" height="300">
<!----right side area---->
</div>
</div>
</div>
    </div>
    </div>
    <div class="col-md-12" style="margin-bottom: 20px;">
        <div class="row">
        <h5 style="font-size: 16px;font-weight:bold;">Start Searching</h5>
        </div>
        <div class="row">
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Business for Sale</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Business Ideas</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Export and Trade</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Franchise Opportunities</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Investors</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Investors Required</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Machinery & Supplies</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Shares for Sale</a></button>&nbsp;
        </div>
    </div>
    <!----single row ended------>
    </div>
    <div id="menu4" class="container tab-pane fade"><br>
    <!------------------single row----------->
    <div class="col-md-12" style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row">
<div class="col-md-6 text-left" style="border:0px solid red;">
<div class="row">
<div class="col-md-12">
<div><h4><a href="" style="color: #000;font-weight:bold;">You have no saved searches yet in Motors</h6></div>
<div><h6 style="font-size:15px;padding:px;">Saving a search helps you find your item faster</h6></div>
<div><h6 style="font-size: 14px;">1. Start searching an item</h6></div>
<div><h6 style="font-size: 14px;">2. Select Save Search</h6></div>
<div style="border: 0px solid red;"><img src="{{ asset('images/how-to.svg')}}" height="80" width="150"></div>
<div ><h6 style="font-size: 14px;">3. Return back to your search anytime using My Searches</h6></div>
</div>
</div>
</div> 
<div class="col-md-6 text-right" style="border: 0px solid red;">
<div class="row">
<div  style="border: 0px solid red;margin-top:-60px;">
<!----right side area---->
<img src="{{ asset('images/empty-state.svg')}}" width="500" height="300">
<!----right side area---->
</div>
</div>
</div>
    </div>
    </div>
    <div class="col-md-12" style="margin-bottom: 20px;">
        <div class="row">
        <h5 style="font-size: 16px;font-weight:bold;">Start Searching</h5>
        </div>
        <div class="row">
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Business for Sale</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Business Ideas</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Export and Trade</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Franchise Opportunities</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Investors</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Investors Required</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Machinery & Supplies</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Shares for Sale</a></button>&nbsp;
        </div>
    </div>
    <!----single row ended------>
    </div>
    <div id="menu5" class="container tab-pane fade"><br>
          <!------------------single row----------->
    <div class="col-md-12" style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row">
<div class="col-md-6 text-left" style="border:0px solid red;">
<div class="row">
<div class="col-md-12">
<div><h4><a href="" style="color: #000;font-weight:bold;">You have no saved searches yet in Motors</h6></div>
<div><h6 style="font-size:15px;padding:px;">Saving a search helps you find your item faster</h6></div>
<div><h6 style="font-size: 14px;">1. Start searching an item</h6></div>
<div><h6 style="font-size: 14px;">2. Select Save Search</h6></div>
<div style="border: 0px solid red;"><img src="{{ asset('images/how-to.svg')}}" height="80" width="150"></div>
<div ><h6 style="font-size: 14px;">3. Return back to your search anytime using My Searches</h6></div>
</div>
</div>
</div> 
<div class="col-md-6 text-right" style="border: 0px solid red;">
<div class="row">
<div  style="border: 0px solid red;margin-top:-60px;">
<!----right side area---->
<img src="{{ asset('images/empty-state.svg')}}" width="500" height="300">
<!----right side area---->
</div>
</div>
</div>
    </div>
    </div>
    <div class="col-md-12" style="margin-bottom: 20px;">
        <div class="row">
        <h5 style="font-size: 16px;font-weight:bold;">Start Searching</h5>
        </div>
        <div class="row">
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Business for Sale</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Business Ideas</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Export and Trade</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Franchise Opportunities</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Investors</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Investors Required</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Machinery & Supplies</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Shares for Sale</a></button>&nbsp;
        </div>
    </div>
    <!----single row ended------>
    </div>
    <div id="menu6" class="container tab-pane fade"><br>
       <!------------------single row----------->
       <div class="col-md-12" style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row">
<div class="col-md-6 text-left" style="border:0px solid red;">
<div class="row">
<div class="col-md-12">
<div><h4><a href="" style="color: #000;font-weight:bold;">You have no saved searches yet in Motors</h6></div>
<div><h6 style="font-size:15px;padding:px;">Saving a search helps you find your item faster</h6></div>
<div><h6 style="font-size: 14px;">1. Start searching an item</h6></div>
<div><h6 style="font-size: 14px;">2. Select Save Search</h6></div>
<div style="border: 0px solid red;"><img src="{{ asset('images/how-to.svg')}}" height="80" width="150"></div>
<div ><h6 style="font-size: 14px;">3. Return back to your search anytime using My Searches</h6></div>
</div>
</div>
</div> 
<div class="col-md-6 text-right" style="border: 0px solid red;">
<div class="row">
<div  style="border: 0px solid red;margin-top:-60px;">
<!----right side area---->
<img src="{{ asset('images/empty-state.svg')}}" width="500" height="300">
<!----right side area---->
</div>
</div>
</div>
    </div>
    </div>
    <div class="col-md-12" style="margin-bottom: 20px;">
        <div class="row">
        <h5 style="font-size: 16px;font-weight:bold;">Start Searching</h5>
        </div>
        <div class="row">
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Business for Sale</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Business Ideas</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Export and Trade</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Franchise Opportunities</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Investors</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Investors Required</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Machinery & Supplies</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Shares for Sale</a></button>&nbsp;
        </div>
    </div>
    <!----single row ended------>
    </div>
    <div id="menu7" class="container tab-pane fade"><br>
       <!------------------single row----------->
       <div class="col-md-12" style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row">
<div class="col-md-6 text-left" style="border:0px solid red;">
<div class="row">
<div class="col-md-12">
<div><h4><a href="" style="color: #000;font-weight:bold;">You have no saved searches yet in Motors</h6></div>
<div><h6 style="font-size:15px;padding:px;">Saving a search helps you find your item faster</h6></div>
<div><h6 style="font-size: 14px;">1. Start searching an item</h6></div>
<div><h6 style="font-size: 14px;">2. Select Save Search</h6></div>
<div style="border: 0px solid red;"><img src="{{ asset('images/how-to.svg')}}" height="80" width="150"></div>
<div ><h6 style="font-size: 14px;">3. Return back to your search anytime using My Searches</h6></div>
</div>
</div>
</div> 
<div class="col-md-6 text-right" style="border: 0px solid red;">
<div class="row">
<div  style="border: 0px solid red;margin-top:-60px;">
<!----right side area---->
<img src="{{ asset('images/empty-state.svg')}}" width="500" height="300">
<!----right side area---->
</div>
</div>
</div>
    </div>
    </div>
    <div class="col-md-12" style="margin-bottom: 20px;">
        <div class="row">
        <h5 style="font-size: 16px;font-weight:bold;">Start Searching</h5>
        </div>
        <div class="row">
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Business for Sale</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Business Ideas</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Export and Trade</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Franchise Opportunities</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Investors</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Investors Required</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Machinery & Supplies</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Shares for Sale</a></button>&nbsp;
        </div>
    </div>
    <!----single row ended------>
    </div>
    <div id="menu8" class="container tab-pane fade"><br>
          <!------------------single row----------->
    <div class="col-md-12" style="border: 0px solid #E0E1E3;border-radius:6px;padding:15px 20px;margin-top:10px;">
        <div class="row">
<div class="col-md-6 text-left" style="border:0px solid red;">
<div class="row">
<div class="col-md-12">
<div><h4><a href="" style="color: #000;font-weight:bold;">You have no saved searches yet in Motors</h6></div>
<div><h6 style="font-size:15px;padding:px;">Saving a search helps you find your item faster</h6></div>
<div><h6 style="font-size: 14px;">1. Start searching an item</h6></div>
<div><h6 style="font-size: 14px;">2. Select Save Search</h6></div>
<div style="border: 0px solid red;"><img src="{{ asset('images/how-to.svg')}}" height="80" width="150"></div>
<div ><h6 style="font-size: 14px;">3. Return back to your search anytime using My Searches</h6></div>
</div>
</div>
</div> 
<div class="col-md-6 text-right" style="border: 0px solid red;">
<div class="row">
<div  style="border: 0px solid red;margin-top:-60px;">
<!----right side area---->
<img src="{{ asset('images/empty-state.svg')}}" width="500" height="300">
<!----right side area---->
</div>
</div>
</div>
    </div>
    </div>
    <div class="col-md-12" style="margin-bottom: 20px;">
        <div class="row">
        <h5 style="font-size: 16px;font-weight:bold;">Start Searching</h5>
        </div>
        <div class="row">
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Business for Sale</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Business Ideas</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Export and Trade</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Franchise Opportunities</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Investors</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Investors Required</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Machinery & Supplies</a></button>&nbsp;
            <button class="btn" style="background-color: #0000FF;"><a href="" style="color: #fff;font-size:13px;">Shares for Sale</a></button>&nbsp;
        </div>
    </div>
    <!----single row ended------>
    </div>
  </div>
</div>

  @endsection  
 
