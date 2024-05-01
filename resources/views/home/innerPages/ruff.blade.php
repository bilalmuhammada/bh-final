@extends('layout.master')
@section('content')
    @php
        $categories = \App\Helpers\RecordHelper::getCategories();
        $catgories_for_search = $categories->random()->take(5)->get();
    @endphp
	​<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
}
</style>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>
​
<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>
​
<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>
​
<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
​
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
​
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


    <div class="cont-w" style="display: none;">
    <div class="col-md-12" style="border:1px solid #eee;border-radius:6px;">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                <div class="col-md-12" style="background:#eee;padding:12px;padding:10px;">
                <b>INBOX</b>
                </div>
                <div class="col-md-12">
               <div class="row">
                <span style="font-size:13px;padding: 0px 10px;">Quick Filters</span></div>
            <div class="row">
            <div style="padding:0px 10px;">
                <span><button style="border-radius: 50px;border:1px solid #0000ff;background:none;padding:2px 5px;font-size:12px;"><a href="#">All</a></button></span>
                <span><button style="border-radius: 50px;border:1px solid #0000ff;background:none;padding:2px 5px;font-size:12px;"><a href="#">Unread</a></button></span>
                <span><button style="border-radius: 50px;border:1px solid #0000ff;background:none;padding:2px 5px;font-size:12px;"><a href="#">Important</a></button></span>
            </div>
           </div>
           <div class="row" style="background-color: #eee;border:1px solid red;">
            <div><img src="" alt="img" style="border: 1px solid red;"></div>
            <div>
                <span>Alizay</span>
                <h6 style="font-size: 13px;"><b>Kenwood AC DC inverter 1.0 Ton For Sale</b></h6>
            </div>
            <div style="border:1px solid red;">
        <span style="font-size: 12px;">07/05/23</span>
            </div>
           </div>
                </div>
                </div>
        </div>
            <div class="col-md-8" style="border: 0px solid red;">1</div>
        </div>
       
    </div>
    </div>
    @endsection