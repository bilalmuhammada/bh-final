@extends('layout.master')
@section('content')
    @php
        $categories = \App\Helpers\RecordHelper::getCategories();
        $catgories_for_search = $categories->random()->take(5)->get();
    @endphp

<style>


/* Style the tab */
.tabx {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  border-radius:5px 0px 0px 5px;
  width: 30%;
  height: 500px;
}

/* Style the buttons inside the tab */
.tabx button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 6px 16px;
  width: 100%;
  border:none;
  border-bottom: 1px solid #eee;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
  margin:5px 0px;
}

/* Change background color of buttons on hover */
.tabx button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tabx button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 500px;
}
.image-upload>input {
  display: none;
}
</style>

<div class="cont-w">
<div class="tabx">
  <div style="padding:10px 0px 0px 10px;"><spin><b>INBOX</b></spin></div>
  <hr>
  <div class="col-md-12">
               <div class="row">
                <span style="font-size:13px;padding: 0px 10px;">Quick Filters</span>
              </div>
            <div class="row">
                <div style="padding:0px 10px;">
                    <div class="row" style="padding:0px 10px;">
                    <div style="text-align:center;border-radius: 50px;border:1px solid #0000ff;background:none;padding:2px 5px;font-size:12px;margin-right:6px;"><a href="#">All</a></div>
                    <div style="text-align:center;border-radius: 50px;border:1px solid #0000ff;background:none;padding:2px 5px;font-size:12px;margin-right:6px;"><a href="#">Unread</a></div>
                    <div style="text-align:center;border-radius: 50px;border:1px solid #0000ff;background:none;padding:2px 5px;font-size:12px;margin-right:6px;"><a href="#">Important</a></div>
                </div>
            </div>
</div>
</div>


  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">
<div class="row">
  <div><span><img src="https://i.pinimg.com/originals/fe/d9/97/fed9971d943669c993db0be515a18a61.jpg" alt="img" width="40" height="40" style="border-radius:50px;"></span></div>
  <div style="padding:0px 15px;">
  <span style="font-size: 14px;">Alizay</span>
  <h6 style="font-size: 12px;"><b>Kenwood AC DC inverter Ton For Sale</b></h6>
  </div>
  <div style="font-size: 12px;">
    <div>07/05/23</div>
  </div>
</div>
  </button>


  <button class="tablinks" onclick="openCity(event, 'Paris')">
  <div class="row">
  <div><span><img src="https://i.pinimg.com/originals/fe/d9/97/fed9971d943669c993db0be515a18a61.jpg" alt="img" width="40" height="40" style="border-radius:50px;"></span></div>
  <div style="padding:0px 15px;">
  <span style="font-size: 14px;">Hurbnes</span>
  <h6 style="font-size: 12px;"><b>Kenwood AC DC inverter Ton For Sale</b></h6>
  </div>
  <div style="font-size: 12px;">
    <div>07/05/23</div>
  </div>
</div>
</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">
  <div class="row">
  <div><span><img src="https://i.pinimg.com/originals/fe/d9/97/fed9971d943669c993db0be515a18a61.jpg" alt="img" width="40" height="40" style="border-radius:50px;"></span></div>
  <div style="padding:0px 15px;">
  <span style="font-size: 14px;">Ali</span>
  <h6 style="font-size: 12px;"><b>Kenwood AC DC inverter Ton For Sale</b></h6>
  </div>
  <div style="font-size: 12px;">
    <div>07/05/23</div>
  </div>
</div>
</button>
</div>

<div id="London" class="tabcontent">
<div class="row" style="border-bottom:1px solid #eee;padding:10px;">
  <div style=""><span><img src="https://i.pinimg.com/originals/fe/d9/97/fed9971d943669c993db0be515a18a61.jpg" alt="img" width="40" height="40" style="border-radius:50px;"></span></div>
  <div style="padding:0px 15px;width:700px;">
  <span style="font-size: 14px;">Alizay</span>
  <h6 style="font-size: 12px;">Last active 3 weeks ago</h6>
  </div>
  <div class="row" style="font-size: 12px;width:30px;">
    <div style="text-align:right;margin-top:8px;"><span ><a href=""><img src="{{ asset('images/cross.png')}}" width="30" height="30"></a></span></div>
  </div>
</div>
<div class="row" style="border-bottom:1px solid #eee;padding:10px;">
  <div style=""><span><img src="https://i.pinimg.com/originals/fe/d9/97/fed9971d943669c993db0be515a18a61.jpg" alt="img" width="40" height="40" style="border-radius:10px;"></span></div>
  <div style="padding:0px 15px;width:650px;">
  <h6 style="font-size: 12px;"><b>Kenwood AC DC inverter Ton For Sale</b></h6>
  <span style="font-size: 14px;">RS 31,500</span>
  </div>
  <div class="row" style="font-size: 12px;width:130px;">
    <div style="text-align:right;margin-top:8px;margin-left:20px;"><a href=""><button class="btn" style="background-color:#0000FF;color:white;font-size:12px;">View Ad</button></a></div>
  </div>
</div>
<div class="col-md-3 mx-auto mt-1">
<a href="#"><div style="text-align:center;border-radius: 50px;border:1px solid #0000ff;background:none;padding:2px 5px;font-size:12px;margin-right:6px;">FRIDAY, 4 AUGUST</div></a>
</div>
  <!------messages-------->
  <div style="height: 280px;overflow-x: hidden;overflow-y: scroll;">
    <div style="text-align:right;"><span >Are you availabe for this ad?</span></div>
    <div style="text-align:left;"><span >Yes....</span></div>
    <div style="text-align:left;"><span >rply please</span></div>
    <div style="text-align:right;"><span >Are you availabe for this ad?</span></div>
    <div style="text-align:left;"><span >Are you availabe for this ad?</span></div>
    <div style="text-align:right;"><span >Are you availabe for this ad?</span></div>
    <div style="text-align:left;"><span >Are you availabe for this ad?</span></div>
    <div style="text-align:right;"><span >Are you availabe for this ad?</span></div>
    <div style="text-align:right;"><span >Are you availabe for this ad?</span></div>
    <div style="text-align:right;"><span >Are you availabe for this ad?</span></div>
    <div style="text-align:right;"><span >Are you availabe for this ad?</span></div>
    <div style="text-align:right;"><span >Are you availabe for this ad?</span></div>
    <div style="text-align:left;"><span >Yes....</span></div>
    <div style="text-align:left;"><span >rply please</span></div>
</div>
  <!-------------->
  <!------send messages---->
  <div class="row" style="border-bottom:1px solid #eee;padding:10px;position:relative;top:30px;border-top:1px solid #eee;position:sticky;">
  <div style=""><span>
  <div class="image-upload" style="display:;">
  <label for="file-input">
  <img src="{{ asset('images/attachment.png') }}" alt="img" width="20" height="20">
  </label>

  <input id="file-input" type="file" />
</div>
  </span></div>
  <div style="padding:0px 15px;width:650px;">
  <input type="text" placeholder=" Type a message" class="form-control">
  </div>
  <div class="row" style="font-size: 12px;width:130px;">
    <div style="text-align:right;margin-top:0px;margin-left:60px;"><a href=""><img src="{{ asset('images/arrow.png') }}" width="35" hieght="35"></a></div>
  </div>
</div>
  <!------send messages---->
</div>
<div id="Paris" class="tabcontent">
<h3>chat2</h3>
  <p>chat2</p>
</div>

<div id="Tokyo" class="tabcontent">
  <h3>chat3</h3>
  <p>chat3</p>
</div>
</div>
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

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

@endsection
