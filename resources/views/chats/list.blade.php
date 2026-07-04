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
        padding: 0px;
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
       

        text-decoration: none;
        letter-spacing:1px;
        font-size: 14px;
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
        margin-top: 5px;
    margin-left: -7px;
    border-radius: 4px;
    width: 64px;
    height: 60px;
    }
    
    .product-price{
       
       
        font-weight: 600;
    color: black;
        

    }
    .emojionearea.focused {
    border-color: blue !important;
    outline: 0;
  
    box-shadow: none  !important;
}

    .emojionearea {
    border-color: #A17A4E !important;
    outline: 0;
  
    box-shadow: none  !important;
}

    .emojionearea.emojionearea-inline>.emojionearea-editor{
    top: 3px !important;
    
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
        padding: 10px 8px 10px 13px;
        border-radius: 5px;
        width: 100%;
        box-sizing: border-box;
    }
    
    .chat-title:hover {
        background-color: #f0f0f0;
    }
    .chat-title.active {
        background-color: #eafafe !important;
    }
    ::-webkit-scrollbar {
  width: 12px; /* You can adjust this value based on your preference */
}



.select2-dropdown {
    z-index: 9999 !important;
}
/* Define the scrollbar thumb */
::-webkit-scrollbar-thumb {
  background-color: #997045;
  border-radius: 34px;
}

.fa-trash:hover, .fa-pencil:hover{
   color: goldenrod!important;
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
#select2-filter-dropdown-container {
    color: #000 !important;
    font-weight: 400 !important;
}
.chat-type-filter .select2-container {
    display: inline-block !important;
    min-width: 120px !important;
}
.chat-type-filter .select2-selection--single {
    align-items: center;
    border: none !important;
    box-shadow: none !important;
    display: flex !important;
    height: 30px !important;
}
.chat-type-filter .select2-container--default:hover .select2-selection--single,
.chat-type-filter .select2-container--default.select2-container--focus .select2-selection--single,
.chat-type-filter .select2-container--default.select2-container--open .select2-selection--single,
.chat-type-filter .select2-selection--single:focus {
    border: none !important;
    box-shadow: none !important;
}
#select2-filter-dropdown-results .select2-results__option {
    color: #000 !important;
    line-height: 1.2 !important;
    min-height: 23px !important;
    padding: 2px 8px !important;
}
#select2-filter-dropdown-results .select2-results__option--highlighted[aria-selected],
#select2-filter-dropdown-results .select2-results__option:hover {
    background: #fff !important;
    color: blue !important;
}
.select2-container--default .select2-selection--single {
    border: none !important;
    background: transparent !important;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    top: 0 !important;
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
        height: 42px !important;
        border: 1px solid #A17A4E !important;
        border-radius: 30px !important;
        padding: 0 54px 0 18px !important;
        color: #111 !important;
        background-color: #fff !important;
        outline: none !important;
    }
    .emojionearea-editor{
        left: 19px !important;
    }
    .chat-window {
        height: 75vh !important;
        min-height: 570px !important;
        background-color: #ffffff !important;
        border: none !important;
        border-radius: 4px !important;
        overflow: hidden;
        box-shadow: none !important;
    }
    .chat-scroll {
        height: calc(75vh - 150px) !important;
        max-height: calc(75vh - 150px) !important;
        overflow-x: hidden;
    }
    .chat-body-div {
       
        display: flex;
        flex-direction: column;
    }
    .message-body {
        flex-grow: 1;
        overflow-y: auto;
        overflow-x: hidden;
        width: 100%;
    }
    .chat-cont-right .chat-body .media {
        max-width: 100%;
    }
    .chat-cont-right .chat-body .media .media-body {
        min-width: 0;
    }
    .chat-cont-right .chat-body .media .media-body .msg-box {
        max-width: 75%;
    }
    .chat-cont-right .chat-body .media .media-body .msg-box > div {
        max-width: 100%;
    }
    .chat-cont-right .chat-body .media .media-body .msg-box p {
        overflow-wrap: anywhere;
    }
    .chat-cont-right .chat-body .media > .avatar,
    .chat-cont-right .chat-body .media > .avatar .avatar-img {
        height: 30px !important;
        width: 30px !important;
    }
    .chat-cont-right .chat-body .media > .avatar .avatar-img,
    .chat-cont-right .chat-header .avatar-img {
        background-color: #fff;
        object-fit: contain;
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
  border-color: #A17A4E !important;
  box-shadow: none !important;
  outline: none !important;

} 
.form-control-search{
    border:1px solid #A17A4E !important;
    box-shadow: none !important;
    box-sizing: border-box;
    display: block;
    max-width: none !important;
    padding-left: 12px;
    font-size: 13px !important;
    height: 40px;
    width: 100% !important;
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
    
    color: #000;
    font-weight: 500;
    margin-top: 2px;
    letter-spacing:1px;
    font-size: 14px;
    margin-left: 0px;
}
.chat-title .media-body {
    min-width: 0;
    width: 100%;
}
.chat-list-actions {
    margin-left: auto;
}
.chat-message-form {
    align-items: center;
    display: flex;
    gap: 8px;
    margin: 0;
    padding: 15px 12px;
    transform: translateY(-10px);
    width: 100%;
}
.chat-blocked-notice {
    bottom: calc(100% + 2px);
    color: #ff5a5a;
    font-size: 11px;
    font-weight: 600;
    left: 0;
    line-height: 1;
    padding: 0;
    position: absolute;
    text-align: center;
    width: 100%;
}
.chat-footer {
    position: relative;
}
.chat-footer.is-blocked .emojionearea,
.chat-footer.is-blocked .input-msg-send {
    background: #fdeaea !important;
    cursor: not-allowed !important;
}
.chat-input-wrap {
    flex: 1 1 auto;
    min-width: 0;
    position: relative;
}
.chat-input-wrap .emojionearea {
    width: 100% !important;
}
.chat-input-wrap .emojionearea.emojionearea-inline {
    height: 42px !important;
}
.chat-input-wrap .emojionearea.emojionearea-inline > .emojionearea-editor {
    color: #111 !important;
    min-height: 38px !important;
    padding-right: 48px !important;
}
.chat-send-button {
    align-items: center;
    background: transparent !important;
    border: none !important;
    display: flex;
    flex: 0 0 38px;
    height: 38px;
    justify-content: center;
    padding: 0 !important;
    position: static !important;
    width: 38px;
}
#userOptionsMenu:hover{
    color: goldenrod !important;
}
#userOptionsMenu{
    color: #000fff !important;
}
a:hover {
    color:#000 !important;
}
.product-message{
    
    letter-spacing:1px;
  margin-bottom: 6px;
}

.product-left-description{
    font-weight: 600;
    letter-spacing:1px;
    margin-bottom: 4px;
}

.product-description{
    font-weight: 400;
    color: #000;
    margin-bottom: 6px;

}
.chat-title:hover .product-left-description {
    color: #d4a72c !important;
}

.dropdown:hover .dropdown-menu {
    display: none !important; /* Prevent dropdown from showing on hover */
}
 .select2-results__option, 
 .select2-results__option--highlighted, 
 .select2-results__option[aria-selected=true],
 .select2-results__option:hover {
   
    font-weight: 400 !important;
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
  right: 10;
  font-size: 12px;
  top: 100%;
  min-width: 78px;
 
 
  z-index: 1000;
}

/* Show menu */
.custom-dropdown-menu.show {
  display: block !important;
}

/* Dropdown items */
.custom-dropdown-menu a {

    white-space: nowrap;
  display: block;
 
  color: #333;
  text-decoration: none;
}

.custom-dropdown-menu a:hover {
    background: #ffff;
    color: #d4a72c !important;
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

.form-control-search::placeholder {
    color: #999;
    font-size: 12px;
    opacity: 1; /* Firefox */
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

.chat-product-meta {
    font-size: 12px !important;
}

.chat-product-meta .meta-separator {
    color: red;
    font-size: 15px;
    line-height: 1;
    margin: 0 0 0 3px !important;
}

.report-user-btn.user-reported,
.report-user-btn.user-reported:hover {
    color: #ff0000 !important;
}

.chat-list-toolbar {
    flex-wrap: nowrap;
}

.chat-list-toolbar .chat-toolbar-actions {
    margin-left: auto;
    flex-shrink: 0;
}

.blocked-by-user {
    color: #666;
    cursor: default;
}

    </style>
@section('content')

    <div class="content-chat"
         style="background-color:#fff;min-height: 500px !important;padding-top:5px;padding-bottom:75px;">
        <div class="container" style="max-width: 1215px !important;">
            <div class="row">
                <!-- <div style="padding-bottom:2px;"><button class="btn btn-danger" id="deleteSelected"><i class="fa fa-trash"></i></button>
                <input type="checkbox" style="margin-left:26.5%;" id="check-all">&nbsp;ALL

                </div> -->
                <div class="col-md-12">
                    <div class="chat-window">

                        <div class="chat-cont-left">
                            <div class="chat-list-toolbar d-flex align-items-center py-2 pl-1 pr-3 border-bottom">
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" class="hiddencheck mb-0" id="check-all">
                                    <span style="font-size: 11px; font-weight: 500;" class="hiddencheck">Select All</span>
                                </div>
                                <div class="flex-grow-1 text-center chat-type-filter">
                                    <select class="form-select chat" id="filter-dropdown" style="width: auto; min-width: 120px;">
                                        <option value="all">All Chats</option>
                                        <option value="favorites">Favourites</option>
                                        <option value="unread">Unread</option>
                                        <option value="blocked">Blocked</option>
                                    </select>
                                </div>
                                <div class="chat-toolbar-actions d-flex align-items-center gap-3">
                                    <div class="hiddentrash">
                                        <i class="fa fa-trash cursor-pointer" style="color: blue; font-size: 15px;"></i>
                                    </div>
                                    <div class="edit">
                                        <i class="fa fa-pencil cursor-pointer" id="edit-icon" style="color: blue; font-size: 15px;"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="px-1 py-1 ">
                                <div class="position-relative">
                                    <input type="text" name="" id="search" placeholder="Search..." class="form-control form-control-search" style="padding-left: 12px; width: 100%; margin-top: 0px;">
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
                                                    <img src="{{$chat->ad->main_image_url ??  'https://placehold.co/30x30'}}" alt="Car Image" class="product-left-image">
                                                </div>
                                            </div>
                                            <div class="media-body flex-grow-1">
                                                <div class="product-left-details d-flex flex-column justify-content-between" style="height: 64px;">
                                                    <div class="product-left-description mb-0" style="line-height: 1.2; font-size: 14px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; font-weight: 400;">{{$chat->ad->title ?? " "}}</div>
                                                    <div class="product-message mb-0" style="font-size: 12px; color: #666; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; font-weight: 400;">{{ $chat->latest_message ?? " " }}</div>
                                                    <div class="d-flex align-items-center" style="white-space: nowrap;">
                                                        <img src="{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'image_url') ?: 'https://placehold.co/30x30' }}"
                                                            alt="User Image" style="width:20px; height:20px; margin-right: 6px;"
                                                            class="avatar-img rounded-circle"> 
                                                        <span style="font-size: 13px; font-weight: 400; color: #111;">{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'name') ?? " "}}</span>
                                                    </div>
                                                </div>
                                          
                                              
                                                <div class="chat-list-actions d-flex flex-column justify-content-between align-items-end" style="height: 66px; margin-right: 5px; flex-shrink: 0; min-width: 80px;">
                                                    <div style="display: flex; gap: 8px; margin-top: 2px;">
                                                        <button class="btn btn-link favorite-chat" 
                                                                title="{{ $chat->is_favorite ? 'Unfavourite' : 'Favourite' }}" 
                                                                style="padding: 0;" 
                                                                data-chat-id="{{ $chat->id }}">
                                                            <i class="fa fa-heart" style="color: {{ $chat->is_favorite ? 'red' : 'grey' }} !important; font-size: 14px;"></i>
                                                        </button>

                                                    </div>
                                                   
                                                    <div style="display: flex; align-items: center; gap: 8px; font-size: 11px; color: #666; margin-bottom: 2px; white-space: nowrap;">
                                                        <div class="badge bgg-yellow badge-pill unread-count" 
                                                            style="display: {{ ($login_user_id != $chat->latest_message_sender_id && $chat->unread_count > 0) ? 'block' : 'none' }}; border-radius: 30px; font-size: 10px; padding: 2px 5px;">
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
                                            <div class="media-img-wrap gallerys flex-shrink-0">
                                                <div class="avatar">
                                                    <a href="{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'image_url') ?: asset('images/default/profile.jpg') }}">
                                                    <img src="{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'image_url') ?: asset('images/default/profile.jpg') }}"
                                                         width="50px" height="50px"
                                                         onerror="this.onerror=null;this.src='{{ asset('images/default/profile.jpg') }}';"
                                                         class="avatar-img rounded-circle">
                                                    </a>
                                                </div>
                                            </div>
                                      
                                            <div class="media-body flex-grow-1 ms-2">
                                                <div class="user-name colorchangecompany" style="font-weight: 600; font-size: 16px;">{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'name') }}</div>
                                            </div>
                                        </div>
                                        @php
                                                $existingReport = \App\Models\AdsReported::where('reported_by', session()->get('user')['id'])
                                                    ->where('listing_id', $chat->ad->id)
                                                    ->first();

                                                $blockedByMe = $chat->is_blocked
                                                    && (!$chat->blocked_by_user_id
                                                        || (int) $chat->blocked_by_user_id === (int) $login_user_id);
                                                $blockedByOther = $chat->is_blocked && !$blockedByMe;
                                             @endphp

                                        <div class="custom-dropdown">
                                            <button id="userOptionsMenu">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>

                                            <div class="custom-dropdown-menu" id="optionsMenu"  >
                                                @if($blockedByOther)
                                                    <span class="dropdown-item blocked-by-user">Blocked by User</span>
                                                @else
                                                    <a href="#" class="block-chat block_user" data-chat-id="{{ $chat->id }}">{{ $blockedByMe ? 'Unblock User' : 'Block User' }}</a>
                                                @endif
                                                <a href="#" class="report-user-btn @if($existingReport) user-reported @endif" data-ad-id="{{ $chat->ad->id }}" data-bs-toggle="modal" data-bs-target="#reportUserModal">  
                                                @if($existingReport)
                                                        Reported User
                                                    @else
                                                        Report User
                                                    @endif
                                                </a>
                                            </div>
                                            </div>

                                    </div>
                                    <div class="chat-header bg-color pb-1 pt-1 px-2" style="background-color: #fff; height: auto; min-height: 5rem; margin-top: 5px; width: 100%; border: 1px solid #F4EEFF; border-radius: 4px;">
                                    <a href="{{ env('BASE_URL') }}ads/detail/{{ $chat->ad->id }}"  style="text-decoration: none; color: inherit; display: flex; width: 100%; align-items: center;">
                                   
                                        <div class="product-image-container">
                                        <img src="{{$chat->ad->main_image_url ??  'https://placehold.co/30x30'}}" alt="Car Image" class="product-image">
                                    </div>
                                        <div class="product-details">
                                        <div class="product-description" id="productDescription" style="margin-bottom: 7px;white-space: nowrap;">{{$chat->ad->title}}</div> <!-- Added spacing below title -->
                                        <div class="product-price" style="margin-bottom: 0px;">AED {{$chat->ad->price}}</div> <!-- Added spacing below price -->

                                        <div class="product-location chat-product-meta">
                                            <i class="fa fa-map-marker" style="margin-top: 0px; color: red;"></i>
                                            <span>{{ $chat->ad->location_name }}</span>
                                            <span class="meta-separator">•</span>
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
                                                                        src="{{ ($message->message_position == 'right' ? session()->get('user')['image_url'] : \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'image_url')) ?: asset('images/default/profile.jpg') }}"
                                                                        alt="User Image" width="30px" height="30px"
                                                                        onerror="this.onerror=null;this.src='{{ asset('images/default/profile.jpg') }}';"
                                                                        class="avatar-img rounded-circle">
                                                                </div>
                                                                <div class="media-body flex-grow-1">
                                                                    <div class="msg-box" >
                                                                        <div style="display: flex;">
                                                                            <p>{{ $message->message ?? '' }}</p>
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
                                        <div class="chat-footer {{ $chat->is_blocked ? 'is-blocked' : '' }}">
                                            <div class="chat-blocked-notice {{ $chat->is_blocked ? '' : 'd-none' }}">{{ $blockedByMe ? 'You blocked this user' : 'Chat Blocked by User' }}</div>
                                            <div class="chat-message-form" >
                                                {{-- <div class="avatar" style="padding:4px;">
                                                    <img
                                                        src="{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'image_url') }}"
                                                        alt="User Image"
                                                        class="avatar-img rounded-circle">
                                                </div> --}}
                                                <div class="chat-input-wrap">
                                                    <input type="text" class="input-msg-send emoji-trigger form-control"
                                                           data-user-id="{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'id') }}"
                                                           data-chat-id="{{ $chat->id }}"  data-chat-block="{{$chat->is_blocked}}"
                                                           >
                                                   
                                                </div>
                                                        
                                                <button type="button" class="btn btn-primary msg-send-btn chat-send-button"
                                                data-user-id="{{ \App\Helpers\RecordHelper::getSafeValueFromObject($chat->other_user, 'id') }}"
                                                data-chat-id="{{ $chat->id }}">
                                            <i class="fa fa-arrow-circle-up mgn-send-color" aria-hidden="true"
                                               style="font-size: 33px; background-color: none;"></i>
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
@section('page_scripts')
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <!-- Magnific Popup JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script type="text/javascript">
      
      
        
        // var api_url = "{{ env('API_URL') }}";
    $(document).on('click', '.hiddencheck', function(e) {
        e.stopPropagation();  // Prevent the click from triggering the anchor link
    });

    $(document).on('click', '#userOptionsMenu', function(e) {
        e.preventDefault();
        e.stopPropagation();

        var menu = $(this).closest('.custom-dropdown').find('.custom-dropdown-menu');
        $('.custom-dropdown-menu').not(menu).removeClass('show').css('display', '');
        menu.toggleClass('show').css('display', '');
    });

    $(document).on('click', function() {
        $('.custom-dropdown-menu').removeClass('show').css('display', '');
    });

    $(document).on('click', '.custom-dropdown-menu', function(e) {
        e.stopPropagation();
    });

    function checkInput() {
        $('.chat-body-div:visible .chat-footer').each(function () {
            var footer = $(this);
            var input = footer.find('.input-msg-send');
            var editor = footer.find('.emojionearea-editor');
            var inputMessage = editor.length ? editor.text().trim() : input.val().trim();
            var hasImg = editor.find('img').length > 0;
            var isBlocked = String(input.attr('data-chat-block')) === '1';

            footer.find('.msg-send-btn').prop('disabled', isBlocked || (inputMessage === '' && !hasImg));
        });
    }
$(document).ready(function () {
        const productDescription = $('#productDescription');
        if (productDescription.text().length > 40) {
            productDescription.css('font-size', '11px'); // Decrease font size
        } else {
            productDescription.css('font-size', '14px'); // Default font size
        }
 
    $(".chat").select2({
           
        minimumResultsForSearch: Infinity, 
            
       });
   

    checkInput();
    
     


 
        
        // alert('ssss');
            @if(request()->i)
            $('.chat-body-div').css('display', 'none');
            $('.chat-with-user-{{ request()->i }}').addClass('active');
            $('#' + $('.chat-with-user-{{ request()->i }}').attr('id') + '-chat-body-div').show();
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
    $(document).on('click', '.block-chat', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $('.custom-dropdown-menu').removeClass('show').css('display', '');

        var chatId = $(this).data('chat-id');
        var chatBody = $('.chat-body-div[chat-id="' + chatId + '"]');

        $.ajax({
            url: "{{ route('chat.block') }}",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                chat_id: chatId
            },
            success: function(response) {
                var isBlocked = Boolean(response.is_blocked);
                var chatListItem = $('.chat-title[chat-id="' + chatId + '"]');
                var controls = $('.block-chat[data-chat-id="' + chatId + '"]');
                var input = chatBody.find('.input-msg-send');
                var editor = chatBody.find('.emojionearea-editor');
                var emojioneArea = chatBody.find('.emojionearea.emojionearea-inline');
                var footer = chatBody.find('.chat-footer');

                chatListItem.toggleClass('blocked', isBlocked);
                controls.find('i').css('color', isBlocked ? 'goldenrod' : 'grey');
                controls.filter('.block_user').text(isBlocked ? 'Unblock User' : 'Block User');
                input.attr('data-chat-block', isBlocked ? '1' : '0');
                input.prop('disabled', isBlocked);
                editor.attr('contenteditable', isBlocked ? 'false' : 'true');
                footer.toggleClass('is-blocked', isBlocked);
                footer.find('.chat-blocked-notice').toggleClass('d-none', !isBlocked);
                footer.find('.chat-blocked-notice').text(isBlocked ? 'You blocked this user' : '');
                emojioneArea.css({
                    'background': isBlocked ? '#fdeaea' : '',
                    'cursor': isBlocked ? 'not-allowed' : '',
                    'pointer-events': isBlocked ? 'none' : ''
                });

                checkInput();
            },
            error: function(xhr) {
                alert(xhr.responseJSON?.message || 'Unable to update block status.');
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
                url: "{{ url('/chats/accept-or-reject') }}",
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
                url: "{{ url('/chats/mark-as-read') }}",
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
            
            // Highlight the selected chat
            $('.chat-title').removeClass('active');
            $(this).addClass('active');

            var targetId = $(this).attr('id');
            var chatId = $(this).attr('chat-id');
            var chatBody = $('.chat-body-div[chat-id="' + chatId + '"]');
            
            // Hide all chat bodies and show the relevant one
            $('.chat-body-div').hide();
            chatBody.show();
            loadChatMessages(chatId, chatBody);
            
            // Update URL without reloading
            var idParts = targetId.split('-');
            var otherUserId = idParts[idParts.length - 1];
            history.pushState(null, '', '?i=' + otherUserId);
            checkInput();
        });

        function loadChatMessages(chatId, chatBody) {
            var messageBody = chatBody.find('.message-body');

            if (!messageBody.length) {
                return;
            }

            messageBody.html('<li class="text-center text-muted small">Loading messages...</li>');

            $.ajax({
                url: "{{ url('/chats') }}/" + chatId + "/messages",
                method: 'GET',
                success: function(response) {
                    messageBody.empty();

                    if (!response.messages.length) {
                        messageBody.html('<li class="text-center text-muted small">No messages yet.</li>');
                        return;
                    }

                    $(response.messages).each(function(i, message) {
                        send_msg_body(message, '', false, chatBody, response.chat);
                    });

                    chatBody.find('.chat-scroll').scrollTop(chatBody.find('.chat-scroll')[0].scrollHeight);
                    $('.chat-title[chat-id="' + chatId + '"]').find('.unread-count').hide();
                },
                error: function(xhr) {
                    messageBody.html('<li class="text-center text-danger small">' +
                        (xhr.responseJSON?.message || 'Unable to load messages.') +
                    '</li>');
                }
            });
        }
       

        $(document).on('click', '.msg-send-btn', function () {
            
         
            thisElem = $(this);
          
            var message = $(thisElem).parents('.chat-footer').find('.input-msg-send');
           
            send_new_message(message, thisElem);
        });

       

        function send_new_message(message, thisElem) {
            var input = $(message);
            var emojioneArea = input.data('emojioneArea');
            var messageText = emojioneArea ? emojioneArea.getText().trim() : input.val().trim();

            if (!messageText || String(input.attr('data-chat-block')) === '1') {
                checkInput();
                return;
            }

            $(thisElem).prop('disabled', true);

            $.ajax({
                url: "{{ url('/chats/send-message') }}",
                method: 'POST',
                data: {
                    user_id: $(thisElem).attr('data-user-id'),
                    chat_id: $(thisElem).attr('data-chat-id'),
                    message: messageText
                },
                success: function (response) {
                    if (response.status) {
                        send_msg_body(response.data, thisElem);

                        input.val('');
                        if (emojioneArea) {
                            emojioneArea.setText('');
                        }
                        checkInput();
                    }
                },
                error: function (xhr) {
                    checkInput();
                    alert(xhr.responseJSON?.message || 'Unable to send message.');
                }
            });
        }

        setInterval(function () {

             
            $.ajax({
                url: "{{ url('/chats/get-new-messages') }}",
                method: 'GET',
                success: function (response) {
                    if (response.status) {
                        $(response.data).each(function (i, chat) {
                    
                            if (chat.messages.length > 0) {
                                var chatBody = $('.chat-body-div[chat-id="' + chat.id + '"]');
                                var chatListItem = $('.chat-title[chat-id="' + chat.id + '"]');

                                $(chat.messages).each(function (i, msg) {
                                    send_msg_body(msg, '', false, chatBody, chat);
                                });

                                chatListItem.find('.product-message').text(chat.latest_message || '');

                                if (response.login_user_id !== chat.latest_message_sender_id && chat.unread_count > 0) {
                                    chatListItem.find('.unread-count').show().html(chat.unread_count);
                                } else {
                                    chatListItem.find('.unread-count').hide();
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
                            src="${message.message_position === 'right' ? (@json(session()->get('user')['image_url']) || @json(asset('images/default/profile.jpg'))) : (chat.other_user.image_url || @json(asset('images/default/profile.jpg')))}"
                            alt="User Image"
                            width="30" height="30"
                            onerror="this.onerror=null;this.src='{{ asset('images/default/profile.jpg') }}';"
                            class="avatar-img rounded-circle">
                    </div>
                    <div class="media-body flex-grow-1">
                        <div class="msg-box">
                            <div>
                                <p>${message.message ?? ''}</p>
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
            $('.custom-dropdown-menu').removeClass('show').css('display', '');
            $('#reportUserModal').find('.ad-id').val($(this).data('ad-id'));
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
                            url: api_url + 'app/chats/delete-chats',
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
