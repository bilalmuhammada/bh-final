@extends('layout.master')
@php
$categories = \App\Helpers\RecordHelper::getCategories();

$catgories_for_search = $categories->random()->take(5)->get();
@endphp
<style> /* Style for the chat users list */
select {
   
    -webkit-appearance: auto !important
    ;}




    #select2-filter-dropdown-container{

        font-size: 13px !important;
    }
    .chat-users-list {
        overflow-y: auto;
        max-height: 400px; /* Adjust as needed */
        padding: 10px;
        /* border: 1px solid #ddd; */
        border-radius: 5px;
    }


    .btn:focus, .btn.focus {
        box-shadow:none;
    }
   /* .dropup, .dropright, .dropdown, .dropleft {
        position:static !important;    }
    /* .dropdown:hover .dropdown-menu{
        display:none !important;
    } */
    .dropdown-menu {
        padding: 0 !important;
        margin: 0 !important;
    }
    .btn:focus, .btn.focus {
        box-shadow: none !important;
    }
    .dropdown-menu a.dropdown-item:hover{
        color:blue !important;
    }
    /* 
    .dropdown-menu a.dropdown-item{
        padding:2px ;
    }*/
    .emojionearea .emojionearea-button>div, .emojionearea .emojionearea-picker .emojionearea-wrapper:after{
        filter: sepia(22%) saturate(904%) hue-rotate(12deg) !important;
    }
    .emojionearea.emojionearea-inline>.emojionearea-button{
        right: 15px !important;
        top:7px !important;
    }

    .product-details{
       
        letter-spacing:1px;
        font-size: 15px;
        margin-left: 18px;
    }
    .product-image{
        

        border-radius: 7px;
        height: 70px;
        margin-top: 2px;
        width: 85px;

    }
    .hiddencheck {
    margin: 0;
}

.col-md-2 {
    display: flex;
    justify-content: center;
}

.col-md-10 {
    display: flex;
    align-items: center;
}
    .product-left-image{
        margin-top: 7px;
        margin-left: 2px;
        border-radius: 5px;
        width: 85px;
        height: 70px;
    }
    
    .product-price{
        margin-bottom: 15px;
       
        font-weight: 600;
    color: black;
        

    }
    .emojionearea.focused {
    border-color: blue !important;
    outline: 0;
  
    box-shadow: none  !important;
}

    .emojionearea {
    border-color: goldenrod !important;
    outline: 0;
  
    box-shadow: none  !important;
}

    .emojionearea.emojionearea-inline>.emojionearea-editor{
    top: 5px !important;
    
    }
    .chat-scroll {
        padding-right: 10px;
    }
    
    .chat-item {
        margin-bottom: 15px;
    }
    
    .chat-title {
        text-decoration: none;
        color: #333;
        background-color: #f0f0f0;
        display: flex;
        align-items: center;
        transition: background-color 0.3s;
        padding: 10px;
        border-radius: 5px;
    }
    
    .chat-title:hover {
        background-color: #f0f0f0;
    }
    ::-webkit-scrollbar {
  width: 12px; /* You can adjust this value based on your preference */
}

/* Define the scrollbar thumb */
::-webkit-scrollbar-thumb {
  background-color: #997045;
  border-radius: 34px;
}


/* Define the scrollbar track */
::-webkit-scrollbar-track {
  background: transparent;
}

    .chat-title:not(:last-child) {
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
       
    }

    
    .user-info {
        flex-grow: 1;
    }
    
    .user-name {
        font-weight: bold;
        margin-bottom: 1px;
    }
    
    .user-last-chat {
        color: #666;
        font-size: 14px;
    }
    .emojionearea.emojionearea-inline {

    border-radius: 25px !important;
}
.mgn-send-color{
color:#0686ee !important;
}
    
.mgn-send-color:hover{
color: goldenrod !important;
}
#select2-language_dropdown-container {
    margin-left: -22px !important;
}
    .chat-info {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }
    
    .last-chat-time {
        color: #999;
        font-size: 12px;
    }
    
    .unread-badge {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 5px;
    }
    .bg-color:hover{
        background-color: #eafafe !important;
    }
    .unread-count {
        background-color: #ffc107;
        color: #333;
        font-size: 12px;
        padding: 3px 8px;
        border-radius: 10px;
    }
    .input-msg-send{
        width: 100% !important;
    }
    .emojionearea-editor{
        left: 19px !important;
    }
    /* Professional Dropdown Styling */


#filter-dropdown:focus {
    border-color: #80bdff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    outline: none;
}

#filter-dropdown:hover {
    border-color: #80bdff;
}

/* Customize the dropdown arrow */
select::-ms-expand {
    display: none;
}




.user-name-left{
    margin-left: 25px;

}
input.form-control-search:focus {
  border-color: goldenrod !important;

} 
.form-control-search{
    margin-top: 7px  !important;
    margin-left: 11px  !important;
    width: 93% !important;
    border:1px solid #000fff !important;
    padding-left: 30px;
}
.position-relative {
    position: relative;
}
.search-icon {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #aaa;
}
.product-left-details{
    font-family: system-ui;
    letter-spacing:1px;
    font-size: 14px;
    margin-left: 0px;
}
#userOptionsMenu:hover{
    color: #000fff;
}
#userOptionsMenu{
    color: goldenrod;
}
a:hover {
    color:#000 !important;
}
.product-message{
    font-family: system-ui;
    letter-spacing:1px;
  margin-bottom: 6px;
}

.product-left-description{
    font-weight: bolder;
    font-family: system-ui;
    letter-spacing:1px;
    margin-bottom: 4px;
}

.product-description{
    font-weight: 600;
    color: #000;
    margin-bottom: 6px;

}
.dropdown:hover .dropdown-menu {
    display: none !important; /* Prevent dropdown from showing on hover */
}
 .select2-results__option {
    padding: 0px 2px 0px 5px !important;
    font-weight: 100 !important;
}
.dropdown:hover .dropdown-menu {
    display: none !important; /* Prevent dropdown from showing on hover */
}
.dropdown:hover .dropdown-menu {
    display: block !important; /* This makes the dropdown show on hover */
}
.colorchangecompany:hover ,
.colorchangecompany:hover span 
{
    color: blue !important;
    text-decoration: none; /* optional, to remove underline */
}
/* Container */
.custom-dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown menu */
.custom-dropdown-menu {
  display: none;
  position: absolute;
  right: 0;
  font-size: 13px;
  top: 100%;
  min-width: 78px;
 
 
  z-index: 1000;
}

/* Show menu */
.custom-dropdown-menu.show {
  display: block;
}

/* Dropdown items */
.custom-dropdown-menu a {
  display: block;
 
  color: #333;
  text-decoration: none;
}

.custom-dropdown-menu a:hover {
    background: #ffff;
    color: #000fff !important;
}

/* Button styling */
#userOptionsMenu {
  border: none;
  background: transparent;
  padding: 0;
  cursor: pointer;
}


#userOptionsMenu:hover,
#userOptionsMenu:focus {
  color: inherit;
  background: transparent;
  outline: none;
  box-shadow: none;
}



.hiddencheck-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 7px;
    white-space: nowrap;
}

.hiddencheck {
    margin-right: 5px;
}

.hiddencheck-label {
    font-size: 14px;
}

.checkbox-container {
    display: flex;
    align-items: center;
    position: relative;
    z-index: 10;
    margin-top: 1.7rem;
    box-sizing: border-box;
}

.dlt-chat {
    width: 13px;
  position: relative;
  transform: translateX(-10px); /* same as left:-18px but cross-browser */
  cursor: pointer;
      
}
#checkbox{
    margin-top: 7px;margin-left: 12px;

}

    </style>
@section('content')

    <div class="content-chat"
         style="background-color:#eee;min-height: 500px !important;padding-top:5px;padding-bottom:10px;">
        <div class="container-fluid">
            <div class="row">
                <!-- <div style="padding-bottom:2px;"><button class="btn btn-danger" id="deleteSelected"><i class="fa fa-trash"></i></button>
                <input type="checkbox" style="margin-left:26.5%;" id="check-all">&nbsp;ALL

                </div> -->
                <div class="col-md-12">
                    <div class="chat-window">

                        <div class="chat-cont-left">
                            <div class="row" style="padding:5px 8px;">
                                <div class="col-md-6">
                                    <div class="row align-items-center"  id="checkbox">
                                        
                                            <input type="checkbox" class="hiddencheck" id="check-all" >
                                            <span style="font-size: 13px;">Select All</span>
                                      
                                        
                                    </div>
                                </div>
                                    <div class="col-md-2" style="margin-left: -97px;margin-top: 2px;">
                                            <select class="form-select chat" id="filter-dropdown" style="width: 164%; padding: 0; border:transparent !important">
                                                <option value="all">All Chats</option>
                                                <option value="favorites">Favourites</option>
                                                <option value="unread">Unread</option>
                                                <option value="blocked">Blocked</option>
                                            </select>
                                        </div>

                               
                                <div class="col-md-2 hiddentrash">
                                    <div class="row">
                                        <div class="col-md-12 text-center" style="margin: 9px 0px 0px 12.4rem;">
                                            <i class="fa fa-trash" style="color: rgb(9, 9, 166);"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 edit">
                                    <div class="row">
                                        <div class="col-md-12 text-center" style="margin: 9px 0px 0px 12.6rem;">
                                            <i class="fa fa-pencil" id="edit-icon" style="color: rgb(9, 9, 166);"></i>
                                        </div>
                                    </div>
                                </div>

                                
                            </div> 
                            
                            <div class="row">
                                <div class="col-md-12 position-relative">
                                  
                                 <input type="text" name="" id="" placeholder="Search..." class="form-control form-control-search">
                               
                                </div>
                            </div>
                            <div class="chat-users-list" id="chat-users-list">
                                <div class="chat-scroll">
                                    @foreach($chats as $chat)


                               
                                        <a href="javascript:void(0);"
                                           class="media chat-title @if($chat->is_blocked) blocked @endif @if($chat->is_favorite) favorite @endif @if(\App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'id') == request()->i) chat-with-user-{{ request()->i }} @endif"
                                           style="display:flex;"
                                           id="{{ str_replace(' ', '', \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'name')). '-' . \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'id') }}"
                                           unread-ids="{{ json_encode($chat->unread_ids) }}" chat-id="{{ $chat->id }}">
                                           <div class="checkbox-container">
                                                <input type="checkbox" 
                                                    value="{{ $chat->id }}" 
                                                    class="dlt-chat hiddencheck">
                                            </div>
                                            <div class="media-img-wrap flex-shrink-0">
                                                <div class="avatar">
                                                    <img src="{{$chat->ad->main_image_url ??  'https://via.placeholder.com/30x30'}}" alt="Car Image" class="product-left-image">
                                                   
                                                </div>
                                                
                                            </div>
                                            <div class="media-body flex-grow-1">
                                                <div class="product-left-details">
                                                    <div class="product-left-description">{{$chat->ad->title ?? " "}}</div>
                                                    <div class="product-message">{{ $chat->latest_message ?? " " }}</div>
                                                    <div class="product-location">   </div>
                                                
                                                    
                                                    
                                                     <img
                                                         src="{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'image_url') ?: 'https://via.placeholder.com/30x30' }}"
                                                        alt="User Image" style="width:25px; height:25px;"
                                                        class="avatar-img rounded-circle"> &nbsp;&nbsp; <span> {{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'name') ?? " "}} </span>  &nbsp;&nbsp;<i class="fa fa-map-marker" style="margin-top:0px; color:red;"></i>  <span>  {{ $chat->ad->location_name ? substr($chat->ad->location_name, 0, 4) . (strlen($chat->ad->location_name) > 4 ? '..' : '') : 'No Location' }}

                                                        </span>
                                                    
                                                 </div>
                                          
                                              
                                                <div style="display: flex; flex-direction: column; align-items: flex-end; gap: 2rem; margin-top: 6px;">


                                                <div style="display: flex; gap: 8px;">
                                                    <button class="btn btn-link favorite-chat" 
                                                            title="{{ $chat->is_favorite ? 'Unfavourite' : 'Favourite' }}" 
                                                            style="padding: 0;" 
                                                            data-chat-id="{{ $chat->id }}">
                                                        <i class="fa fa-heart" style="color: {{ $chat->is_favorite ? 'red' : 'grey' }} !important;"></i>
                                                    </button>

                                                    <button class="btn btn-link block-chat" 
                                                            title="{{ $chat->is_blocked ? 'Unblock' : 'Block' }}" 
                                                            style="padding: 0;" 
                                                            data-chat-id="{{ $chat->id }}">
                                                        <i class="fa fa-ban" style="color: {{ $chat->is_blocked ? 'goldenrod' : 'grey' }} !important;"></i>
                                                    </button>
                                                </div>
                                               
                                                <!-- Bottom: Time & Unread badge -->
                                                <div style="display: flex; align-items: center; gap: 6px; font-size: 12px; color: #666;">
                                                    <div class="badge bgg-yellow badge-pill unread-count" 
                                                        style="display: {{ ($login_user_id != $chat->latest_message_sender_id && $chat->unread_count > 0) ? 'block' : 'none' }};">
                                                        {{ $chat->unread_count }}
                                                    </div>

                                                    <span>{{ $chat->latest_message_recieved_time_diff }}</span>
                                                </div>

                                                </div>
                                               
                                                   
                                              
                                            </div>
                                           
                                          
                                        </a>
                                      
                                        <!-- Add Favorite and Block Icons -->
                                       
                                    @endforeach
                                </div>
                            </div>
                            
                        </div>

                     
                       
                        <div class="chat-cont-right">
                        
                           
                            @foreach($chats as $key => $chat)
                              
                                <div class="chat-body-div"
                                     id="{{ str_replace(' ', '', \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'name')). '-' . \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'id') }}-chat-body-div"
                                     style="{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'id') == request()->i ? '' : 'display: none' }}" 
                                     chat-id="{{ $chat->id }}"
                                     user="{{ str_replace(' ', '', \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'name')) . '-' . \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'id') }}">
                                    <div class="chat-header">
                                        <a id="back_user_list" href="javascript:void(0)" class="back-user-list">
                                            <i class="material-icons">chevron_left</i>
                                        </a>
                                        
                                        <div class="media d-flex">
                                            <div class="media-img-wrap theiaStickySidebar gallerys flex-shrink-0">
                                                <div class="avatar">
                                                    <a href="{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'image_url') }}">
                                                    <img
                                                        src="{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'image_url') }}"
                                                        alt="UserImage"  width="50px" height="50px"
                                                        class="avatar-img rounded-circle">
                                                    </a>
                                                </div>
                                            </div>
                                      
                                            <div class="media-body flex-grow-1">
                                                <div class="user-name colorchangecompany">  {{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'name') }} </span> </div>
                                               
                                            </div>
                                        </div>

                                        <div class="custom-dropdown">
                                            <button id="userOptionsMenu">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>

                                            <div class="custom-dropdown-menu" id="optionsMenu"  >
                                                <a href="#" class="block-chat" data-chat-id="{{ $chat->id }}">Block User</a>
                                                <a href="#" class="report-user-btn" data-bs-toggle="modal" data-bs-target="#reportUserModal">Report User</a>
                                            </div>
                                            </div>

                                    </div>
                                    <div class="chat-header bg-color" style="background-color: #fff;height:5rem; margin-top:13px;width: 70%; ">
                                    <a href="{{ env('BASE_URL') }}ads/detail/{{ $chat->ad->id }}"  style="text-decoration: none; color: inherit; display: flex;">
                                   
                                        <div class="product-image-container">
                                        <img src="{{$chat->ad->main_image_url ??  'https://via.placeholder.com/30x30'}}" alt="Car Image" class="product-image">
                                    </div>
                                        <div class="product-details">
                                        <div class="product-description" id="productDescription" style="margin-bottom: 10px;white-space: nowrap;">{{$chat->ad->title}}</div> <!-- Added spacing below title -->
                                        <div class="product-price" style="margin-bottom: 0px;">AED {{$chat->ad->price}}</div> <!-- Added spacing below price -->

                                        <div class="product-location">
                                            <i class="fa fa-map-marker" style="margin-top: 0px; color: red;"></i>
                                            <span>{{ $chat->ad->location_name }}</span>
                                            <span style="margin:0px 0px 9px 11px; color:red">•</span> <!-- Increased spacing between location and date -->
                                            <span>{{ \Carbon\Carbon::parse($chat->ad->created_at)->format('d-M-Y') }}</span>
                                        </div>
                                       
                                        </div>
                                    
                                    </a>
                                </div>
                                
                                    @if($chat->status == 'accepted')
                                   
                                        <div class="chat-body">
                                            <div class="chat-scroll">
                                                <ul class="list-unstyled message-body" style="font-weight: 300;">
                                                    @foreach($chat->sorted_messages as $date => $sorted_messages)
                                                        <div class="text-center fw-bolds " style="font-size:12px;">    {{ \Carbon\Carbon::parse($date)->format('d-M-Y') }}</div>
                                                        @foreach($sorted_messages as $date => $message)
                                                      
                                                            <li class="media {{ $message->message_position == 'right' ? 'sent' : 'received' }} d-flex">
                                                                <div class="avatar flex-shrink-0">
                                                                    <img
                                                                        src="{{ $message->message_position == 'right' ? session()->get('user')['image_url'] : \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'image_url') }}"
                                                                        alt="User Image" width="30px" height="30px"
                                                                        class="avatar-img rounded-circle">
                                                                </div>
                                                                <div class="media-body flex-grow-1">
                                                                    <div class="msg-box" >
                                                                        <div style="display: flex;">
                                                                            <p>{{ $message->message }}</p>
                                                                            <ul class="chat-msg-info">
                                                                                <li>
                                                                                    <div class="chat-time">
                                                                                        <span>{{ $message->sended_at_formatted }}</span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-footer">
                                            <div class="input-group" style="margin-left: 17px;" >
                                                {{-- <div class="avatar" style="padding:4px;">
                                                    <img
                                                        src="{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'image_url') }}"
                                                        alt="User Image"
                                                        class="avatar-img rounded-circle">
                                                </div> --}}
                                                <div class="input-group" style="position: relative; width: 93%; height: 42px;">
                                                    <input type="text" class="input-msg-send emoji-trigger form-controls"
                                                           id="emoji-trigger" 
                                                           data-user-id="{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'id') }}"
                                                           data-chat-id="{{ $chat->id }}"  data-chat-block="{{$chat->is_blocked}}"    style="border-radius: 30px; width: 100%; padding-right: 50px;"
                                                           >
                                                   
                                                </div>
                                                        
                                                <button type="button" id="msg-send-btn" class="btn btn-primary msg-send-btn"
                                                data-user-id="{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'id') }}"
                                                data-chat-id="{{ $chat->id }}"
                                                style="position: absolute; right: 36px; top: 9px; background-color: transparent; border: none;">
                                            <i class="fa fa-arrow-circle-up mgn-send-color" aria-hidden="true"
                                               style="font-size: 30px; background-color: none;"></i>
                                        </button>
                                            </div>
                                        </div>
                                    @else
                                        <div class="chat-body">
                                            <div class="row mt-4">
                                                <div class="col-md-6 col-12 text-end">
                                                    <button class="btn btn-primary accept" chat-id="{{ $chat->id }}">
                                                        Accept
                                                    </button>
                                                </div>
                                                <di_v class="col-md-6 col-12">
                                                    <button class="btn btn-danger reject" chat-id="{{ $chat->id }}">
                                                        Reject
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">


<!-- Magnific Popup JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>


@section('page_scripts')
    <script type="text/javascript">
      
      
        
        // var api_url = "{{ env('API_URL') }}";
    $(document).on('click', '.hiddencheck', function(e) {
        e.stopPropagation();  // Prevent the click from triggering the anchor link
    });

    const btn = document.getElementById('userOptionsMenu');
const menu = document.getElementById('optionsMenu');

btn.addEventListener('click', function(e) {
  e.stopPropagation();
  menu.classList.toggle('show');
});

// Close dropdown if clicked outside
document.addEventListener('click', function() {
  menu.classList.remove('show');
});

    function checkInput() {
        var inputMessage = $('.emojionearea-editor').text().trim();
       var hasImg = $('.emojionearea-editor').find('img').length > 0;
    // var hasImg = emojioneAreaInstance.editor.find('img').length > 0;
    
  
    if (inputMessage === '' && !hasImg) {
        $('.msg-send-btn').prop('disabled', true);
    } else {
        $('.msg-send-btn').prop('disabled', false);
    }
}
$(document).on("click", "#userOptionsMenu", function() {

$(".dropdown-menu-right").toggleClass("show");
});
$(document).ready(function () {
        const productDescription = $('#productDescription');
        if (productDescription.text().length > 40) {
            productDescription.css('font-size', '11px'); // Decrease font size
        } else {
            productDescription.css('font-size', '15px'); // Default font size
        }
 
    $(".chat").select2({
           
           minimumResultsForSearch: -1
       });
   

    $('.msg-send-btn').prop('disabled', true);
    $(document).on('click', '.msg-send-btn', function(e) {

       
        $('.msg-send-btn').prop('disabled', true);
     });
    
     


 
        
        // alert('ssss');
            @if(request()->i)
            $('.chat-body-div').css('display', 'none');
            $('.chat-with-user-{{ request()->user_id }}').click();
            @endif
            ajax_setup();


           
        });

 $(document).ready(function () {
    $('.gallerys').magnificPopup({
    delegate: 'a', // child items selector
    type: 'image',
    gallery: {
        enabled: false
    }
});

    $('.hiddentrash .fa-trash').on('click', function() {
        if (!$('input[type="checkbox"]').is(':checked')) {
            // Code to return to edit mode or perform your specific action
              $('.edit').show()
            $('.hiddencheck').hide();
            $('.hiddentrash').hide();
            console.log('Edit mode activated');
            // Your edit mode logic here
        }else{
       
        }
    });
    $('#filter-dropdown').on('change', function() {
        var filterValue = $(this).val();

        

        if (filterValue === 'all') {
            $('.chat-title').show(); // Show all chats
        } else if (filterValue === 'favorites') {
            $('.chat-title').hide(); // Hide all chats
            $('.favorite').show();   // Show only favorite chats
        } else if (filterValue === 'blocked') {
            $('.chat-title').hide(); // Hide all chats
            $('.blocked').show();    // Show only blocked chats
        }
        else if (filterValue === 'unread') {
            $('.chat-title').hide(); // Hide all chats
            $('.unread').show();    // Show only blocked chats
        }
        
    });

    $('.favorite-chat').on('click', function() {
            var button = $(this);
            var chatId = button.data('chat-id');

            $.ajax({
                url: "{{ route('chat.favorite') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    chat_id: chatId
                },
                success: function(response) {

                     
                    if (response.is_favorite) {
                        button.find('i').css('color', 'red');
                    } else {
                        button.find('i').css('color', 'grey');
                    }
                }
            });
    });
      // Toggle block
    $('.block-chat').on('click', function() {

    var button = $(this);
    var chatId = button.data('chat-id');



$.ajax({
    url: "{{ route('chat.block') }}",
    method: "POST",
    data: {
        _token: "{{ csrf_token() }}",
        chat_id: chatId
    },
    success: function(response) {
        var emojioneArea = $('.emojionearea.emojionearea-inline');
        var emojioneEditor = $('.emojionearea-editor');
        if (response.is_blocked) {
            // show_error_message('User Blocked')
            button.find('i').css('color', 'goldenrod');
            if (emojioneArea.length > 0) {
                    emojioneArea.css({
                        'background': '#fdeaea',
                        'cursor': 'not-allowed',
                        'pointer-events': 'none'
                    });
                    emojioneEditor.attr('contenteditable', 'false');
            }
        } else {
            // show_success_message('User Unblocked');
            button.find('i').css('color', 'grey');
            if (emojioneArea.length > 0) {
                emojioneArea.css({
                    'background': '',
                    'cursor': '',
                    'pointer-events': ''
                });

                
                emojioneEditor.attr('contenteditable', 'true');
            }
           
           
        }
    }
});
});



//fiter dropdown


            var button = $('.block-chat');
            var chatId = button.data('chat-id');
            $('.ad-id').val(chatId);


            $('.hiddencheck').hide()
            $('.hiddentrash').hide()


            $('#edit-icon').click(function() {
                $('.edit').hide()
            $('.hiddencheck').toggle();
            $('.hiddentrash').toggle();
        });

        });
        

        $(document).on('change', '#check-all', function () {
// Get the checked state of the toggle checkbox
            var isChecked = $(this).prop('checked');

            // Set the same checked state to all other checkboxes with class 'otherCheckbox'
            $('.dlt-chat').prop('checked', isChecked);
        })

        function ajax_setup() {
            $.ajaxSetup({
                headers: {
                    // 'Authorization': 'Bearer ' + token,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json'
            });
        }

        //accept or reject chat request start
        $(document).on('click', '.accept', function (e) {
            e.preventDefault();
            accept_or_reject('accepted', $(this).attr('chat-id'));
        });

        $(document).on('click', '.reject', function (e) {
            e.preventDefault();
            accept_or_reject('rejected', $(this).attr('chat-id'));
        });


        function accept_or_reject(status, chat_id) {
            $.ajax({
                url: api_url + 'chats/accept-or-reject',
                method: 'POST',
                data: {
                    chat_id: chat_id,
                    status: status,
                },
                success: function (response) {
                    window.location.href = '';
                },
                error: function (response) {
                    console.log('error');
                }
            });
        }

        //accept or reject chat request end


        function markMessageAsReaded(id, selector) {
            
        
            $.ajax({
                url: api_url + 'chats/mark-as-read',
                method: 'POST',
                data: {
                    id: id
                },
                success: function (response) {
                    $(selector).find('.unread-count').css('display', 'none');
                },
                error: function (response) {
                    console.log('error');
                }
            });
        }

        $(document).on('click', '.chat-title', function (e) {
            e.preventDefault();
            //calling function to mark messages as readed
            markMessageAsReaded($(this).attr('chat-id'), $(this));

            var chat_body_selector = "#" + $(this).attr('id') + "-chat-body-div";
            $('.chat-body-div').css('display', 'none');
            $(chat_body_selector).css('display', 'block');
        });
       

        $(document).on('click', '.msg-send-btn', function () {
            
         
            thisElem = $(this);
          
            var message = $(thisElem).parents('.chat-footer').find('.input-msg-send');
           
            send_new_message(message, thisElem);
        });

       

        function send_new_message(message, thisElem) {
            // alert($(message).val());
            $.ajax({
                url: api_url + 'chats/send-message',
                method: 'POST',
                data: {
                    user_id: $(thisElem).attr('data-user-id'),
                    chat_id: $(thisElem).attr('data-chat-id'),
                    message: $(message).val()
                },
                success: function (response) {
                    if (response.status) {
                        send_msg_body(response.data, thisElem);

                        $(message).val('');
                        $('.emojionearea-editor').html('');
                    }
                     $(selector).find('.unread-count').css('display', 'none');
                },
                error: function (response) {
                    console.log('error');
                }
            });
        }

        setInterval(function () {

             
            $.ajax({
                url: api_url + 'chats/get-new-messages',
                method: 'GET',
                success: function (response) {
                    if (response.status) {
                        $(response.data).each(function (i, chat) {
                    
                            if (chat.messages.length > 0) {
                                $(chat.messages).each(function (i, msg) {
                                    send_msg_body(msg, '', false, $('#' + chat.other_user.name + '-' + chat.other_user.id + '-chat-body-div'), chat);
                                });

                                $('#' + chat.other_user.name + '-' + chat.other_user.id).find('.user-last-chat').html(chat.latest_message);

                                if (response.login_user_id !== chat.latest_message_sender_id && chat.unread_count > 0) {
                                    $('#' + chat.other_user.name + '-' + chat.other_user.id).find('.unread-count').show();
                                    $('#' + chat.other_user.name + '-' + chat.other_user.id).find('.unread-count').html(chat.unread_count);
                                } else {
                                    $('#' + chat.other_user.name + '-' + chat.other_user.id).find('.unread-count').hide();
                                }
                            }
                        })
                    }
                },
                error: function (response) {
                    console.log('error');
                }
            });
        }, 10000)


        function send_msg_body(message, thisElem, using_button = true, parent, chat) {

            var li = `<li class="media ${message.message_position === 'right' ? 'sent' : 'received'} d-flex">
                    <div class="avatar flex-shrink-0">
                        <img
                            src="${message.message_position === 'right' ? "{{session()->get('user')}}" : chat.other_user.image_url}"
                            alt="User Image"
                            class="avatar-img rounded-circle">
                    </div>
                    <div class="media-body flex-grow-1">
                        <div class="msg-box">
                            <div>
                                <p>${message.message}</p>
                                <ul class="chat-msg-info">
                                    <li>
                                        <div class="chat-time">
                                            <span>${message.sended_at_formatted}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>`;

            if (using_button === true) {
                $(thisElem).parents('.chat-body-div').find('.message-body').append(li);
            } else {
                console.log(message)
                $(parent).find('.message-body').append(li);
            }
        }

        // mark as read message on input focus
        $(document).on('focus', '.input-msg-send', function () {
            var chat_id = $(this).parents('.chat-body-div').attr('chat-id');
            var user = $(this).parents('.chat-body-div').attr('user');
            markMessageAsReaded(chat_id, $('#' + user));
        });

        $(document).on('click', '.report-user-btn', function() {
            $('#reportUserModal').modal('show');// Show the popup
});
$(document).on('click', '.closebtn ', function() {
            $('#reportUserModal').modal('hide');// Show the popup
});
        // chat user filter code here
        // Get references to the input and the list

        $("#search").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#chat-users-list .chat-title").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });


        // Attach a click event to the 'Delete Selected' button
        $('#deleteSelected').on('click', function () {
            // Get an array of selected checkbox values
            var selectedValues = $('.dlt-chat:checked').map(function () {
                return this.value;
            }).get();

            if (selectedValues.length > 0)
                Swal.fire({
                    icon: 'warning',
                    title: "Are you sure?",
                    text: "You will not be able to recover this!",
                    type: "error",
                    showCancelButton: true,
                    cancelButtonClass: '#d33',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Delete!',
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url: api_url + 'chats/delete-chats',
                            type: 'POST',
                            dataType: "JSON",
                            data: {chat_ids: selectedValues},
                            success: function (response) {
                                if (response.status) {
                                    Swal.fire({
                                        title: 'Success!',
                                        text: response.message,
                                        icon: 'success',
                                    }).then((result) => {
                                        // $(thisElem).parents('tr').remove();
                                        window.location.reload();
                                    })
                                } else {
                                    Swal.fire({
                                        title: 'Problem!',
                                        text: response.message,
                                        icon: 'warning',
                                    })
                                }
                            },
                            error: function (response) {
                                Swal.fire({
                                    title: 'Problem!',
                                    text: 'Unexpected error',
                                    icon: 'warning',
                                })
                            }
                        });
                    }
                })
        });
    </script>
@endsection
